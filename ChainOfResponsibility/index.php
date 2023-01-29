<?php

require_once "autoload.php";

use Refactor\CouponValidate;

$validator = new CouponValidate("coopoon");


$validator->validate();
