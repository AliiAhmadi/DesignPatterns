<?php

namespace Refactor;

class CouponExpire
{
    private $coupon;
    private $nextValidator;
    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }
    public function validate($code)
    {
        echo "Not Expired" . PHP_EOL;

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
