<?php

interface PaymentInterface {
    public function pay(string $phone, int $sum);
}




class QiwiPay implements PaymentInterface{
    public function pay(string $phone, int $sum){

    }
}

class YandexPay implements PaymentInterface{
    public function pay(string $phone, int $sum){
        
    }
}

class WebMoneyPay implements PaymentInterface{
    public function pay(string $phone, int $sum){
        
    }
}


class Paymentmanager {
    protected PaymentInterface $payStrategy = 'null';
    protected string $phone = 'null';
    protected int $sum = 'null';

    public function __construct(PaymentInterface $payStrategy){
        $this->payStrategy = $payStrategy;
    }

    public function runPay (){
        $this->payStrategy->pay(string $this->phone, int $this->sum)
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function setSum(int $sum){
        $this->sum = $sum
    }

}