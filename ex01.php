<?php
interface SendMessageI{
    public function send($msg){};
};




class SMS implements SendMessageI{
    public function send($msg){};
};

class Email implements SendMessageI{
    public function send($msg){};
};

class CN implements SendMessageI{
    public function send($msg){};
};




class SendMessageMultiple implements SendMessageI{
    protected $services;

    public function __construct(SendMessageI ...$services){
        $this->services = $services;
    }

    public function send($msg){
        foreach($this->services as $service) {
            $service->send($msg);
        }
    }

};
