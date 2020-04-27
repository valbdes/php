<?php

use Models\User;
use Models\Order;
use Models\Product;
use Helpers\ImageHelper;
use Admin\OrdersController;
use Admin\DashboardController;
use Controllers\MainController;



include_once 'vendor/autoload.php';




try {
    $obj = new MainController();
    
    $obj3 = new ImageHelper();
    $obj4 = new Order();
    $obj5 = new Product();
    $obj6 = new User();
    $obj1 = new DashboardController();
    $obj2 = new OrdersController();
} catch (Throwable $t) {
    echo  $t->getMessage();
}
