<?php
/**
 * Created by PhpStorm.
 * User: home-Lenovo
 * Date: 9/6/2018
 * Time: 1:14 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);




$pp->sendEmailTo('someone@gmail.com');

echo $pp->process($_POST);

/*
 *   You have to edit the handler.php and change "someone@gmail.com" to your email address.
 *   If you want to add a second or third email address, you can do so like this:
 *    $fh->sendEmailTo(['someone@gmail.com', 'someone.else@gmail.com']);
 */