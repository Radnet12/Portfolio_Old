import {
	closeModal,
	openModal
} from './modal';
import {
	postData
} from '../services/services';

function forms(formSelector, modalTimerId) {
	// Forms

	const forms = document.querySelectorAll(formSelector);
	const message = {
		loading: 'img/form/spinner.svg',
		success: 'Спасибо! Скоро мы с вами свяжемся',
		failure: 'Что-то пошло не так...'
	};

	forms.forEach(item => {
		bindPostData(item);
	});

	function bindPostData(form) {
		form.addEventListener('submit', (e) => {
			e.preventDefault();

			let statusMessage = document.createElement('img');
			statusMessage.src = message.loading;
			statusMessage.style.cssText = `
                display: block;
                margin: 0 auto;
            `;
			form.insertAdjacentElement('afterend', statusMessage);

			const formData = new FormData(form);

			const json = JSON.stringify(Object.fromEntries(formData.entries()));

			//const postData = async (url, data) => {
			//	let res = await fetch(url, {
			//		method: "POST",
			//		headers: {
			//			'Content-Type': 'application/json'
			//		},
			//		body: data
			//	});

			//	return await res.json();
			//};

			postData('http://localhost:3000/requests', json)
				.then(data => {
					console.log(data);
					showThanksModal(message.success);
					statusMessage.remove();
				}).catch(() => {
					showThanksModal(message.failure);
				}).finally(() => {
					form.reset();
				});
		});
	}

	function showThanksModal(message) {
		const prevModalDialog = document.querySelector('.modal__dialog');

		prevModalDialog.classList.add('hide');
		openModal('.modal', modalTimerId);

		const thanksModal = document.createElement('div');
		thanksModal.classList.add('modal__dialog');
		thanksModal.innerHTML = `
            <div class="modal__content">
                <div class="modal__close" data-close>×</div>
                <div class="modal__title">${message}</div>
            </div>
        `;
		document.querySelector('.modal').append(thanksModal);
		setTimeout(() => {
			thanksModal.remove();
			prevModalDialog.classList.add('show');
			prevModalDialog.classList.remove('hide');
			closeModal('.modal');
		}, 4000);
	}

	//axios.get('http://localhost:3000/menu')
	//	.then(data => {
	//		data.data.forEach(({
	//			img,
	//			altimg,
	//			title,
	//			descr,
	//			price
	//		}) => {
	//			new MenuCard(img, altimg, title, descr, price, '.menu .container').render();
	//		});
	//	});

	//const forms = document.querySelectorAll('form');
	//const message = {
	//	loading: 'img/form/spinner.svg',
	//	success: 'Спасибо! Скоро мы с вами свяжемся',
	//	failure: 'Что-то пошло не так...'
	//};

	//forms.forEach(item => {
	//	bindPostData(item);
	//});

	//const postData = async (url, data) => {
	//	const res = await fetch(url, {
	//		method: "POST",
	//		headers: {
	//			'Content-type': 'application/json'
	//		},
	//		body: data
	//	});

	//	return await res.json();
	//};

	//function bindPostData(form) {
	//	form.addEventListener('submit', (e) => {
	//		e.preventDefault();

	//		let statusMessage = document.createElement('img');
	//		statusMessage.src = message.loading;
	//		statusMessage.style.cssText = `
	//			display: block;
	//			margin: 0 auto;
	//		`;
	//		form.insertAdjacentElement('afterend', statusMessage);


	//		const formData = new FormData(form);

	//		const json = JSON.stringify(Object.fromEntries(formData.entries()));

	//		postData('http://localhost:3000/requests', json)
	//			.then(data => {
	//				console.log(data);
	//				showThanksModal(message.success);
	//				statusMessage.remove();
	//				form.reset();
	//			}).catch(() => {
	//				showThanksModal(message.failure);
	//			}).finally(() => {
	//				form.reset();
	//			});

	//	});
	//}

	//function showThanksModal(message) {
	//	const prevModalDialog = document.querySelector('.modal__dialog');

	//	prevModalDialog.classList.add('hide');
	//	openModal();

	//	const thanksModal = document.createElement('div');
	//	thanksModal.classList.add('modal__dialog');
	//	thanksModal.innerHTML = `
	//		<div class="modal__content">
	//			<div class="modal__close" data-close>×</div>
	//			<div class="modal__title">${message}</div>
	//		</div>
	//	`;
	//	document.querySelector('.modal').append(thanksModal);
	//	setTimeout(() => {
	//		thanksModal.remove();
	//		prevModalDialog.classList.add('show');
	//		prevModalDialog.classList.remove('hide');
	//		closeModal();
	//	}, 4000);
	//}

	//fetch('http://localhost:3000/menu')
	//	.then(data => data.json())
	//	.then(res => console.log(res));



	// fetch('https://jsonplaceholder.typicode.com/posts', {
	//     method: "POST",
	//     body: JSON.stringify({name: "Alex"}),
	//     headers: {
	//         'Content-type': 'application/json'
	//     }
	// })
	//     .then(response => response.json())
	//     .then(json => console.log(json));


}

export default forms;