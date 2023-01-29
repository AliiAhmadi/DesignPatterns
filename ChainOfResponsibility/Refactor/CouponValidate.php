<?php

namespace Refactor;

class CouponValidate
{
    private $coupon;

    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }

    public function validate()
    {
        $validCoupon = new CouponValid($this->coupon);

        $existCoupon = new CouponExist($this->coupon);

        $expireCoupon = new CouponExpire($this->coupon);

        $validCoupon->setNextValidator($existCoupon);

        $existCoupon->setNextValidator($expireCoupon);

        $validCoupon->validate();
    }
}
