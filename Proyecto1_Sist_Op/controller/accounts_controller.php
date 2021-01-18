<?php

//llama al modelo y la vista
require_once '../model/accounts_model.php';

$account = new account_model();
$accountList  = $account->get_all_accounts();


require_once '../view/accounts_view.php';

