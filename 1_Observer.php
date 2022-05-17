<?php

interface Observer {
    public function handle();
}


class User implements Observer{
    protected string $name = 'null';
    protected string $mail = 'null';
    protected int $years = 'null';

    public function handle(){
        subscribe($this->name, $this->mail, $this->years);
    }



}

function subscribe(string $name, string $mail, int $years){

}


class Notifier {
    protected array $users =[];


    public function start(){
        $this->notify();
    }

    


    public function notify(){
        foreach ($this->users as $user){
            $user->handle();
        }
    }




    public function adduser(Observer $user){
        $this->users[] = $user;
    }

    public function removeUser(Observer $user){
        if (($key = array_search($user, $this->users)) !== false) {
            unset($this->users[$key]);
        }
    }
    

}