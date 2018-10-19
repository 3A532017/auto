<?php
/**
 * Created by PhpStorm.
 * User: 0106
 * Date: 2018/10/10
 * Time: 上午 05:45
 */
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');

// 以下Someone類別的使用可以不用use Demo\Hello;
$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
