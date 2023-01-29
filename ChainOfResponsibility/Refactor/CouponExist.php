<?php

namespace Refactor;

class CouponExist
{
    private $coupon;
    private $nextValidator;
    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }
    public function validate($code)
    {
        echo "Exist" . PHP_EOL;

        $this->goToNextValidator();
    }

    public function setNextValidator($nextValidator)
    {
        $this->nextValidator = $nextValidator;
    }

    private function goToNextValidator()
    {
        if($this->nextValidator == null){
            return true; 
        }

        return $this->nextValidator->validate($this->coupon);
    }
}
