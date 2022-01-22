'use strict';

import { burger } from "./components/burger";

window.addEventListener('DOMContentLoaded', () => {
    burger(".header__burger", ".header__nav--right", ".header__nav--right .header__nav-list", "header__nav-link");
});