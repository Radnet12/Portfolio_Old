<?php 
    require('./config.php');
    $value = json_decode(file_get_contents("php://input"), true);
    if ($value !== '') {
        $query = 'SELECT id,isAvailable,isKilogram,imgDescr,imgPath,title,price,mininputvalue,minweight FROM products WHERE title LIKE "%' . $value . '%"';
        $result_search = $db->query($query);
        $results_search = $result_search->fetchAll(PDO::FETCH_ASSOC);
        echo (json_encode($results_search));
    }