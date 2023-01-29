<?php

namespace Refactor;

class CouponValid
{
    private $coupon;
    private $nextValidator;
    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }
    public function validate()
    {
        echo "Valid" . PHP_EOL;

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
