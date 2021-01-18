<?php

//llama al modelo y la vista
require_once '../model/customers_model.php';

$customer = new Customers_model();
$customersList  = $customer->get_all_customers();


require_once '../view/customers_view.php';

