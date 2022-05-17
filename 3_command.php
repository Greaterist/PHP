<?php

interface ITextEdit{
    public function execute()
}


class Cut implements ITextEdit{
    public function edit(string $input){

    }
}

class Copy implements ITextEdit{
    public function edit(string $input){
        
    }
}

class Paste implements ITextEdit{
    public function edit(string $input){
        
    }
}



interface ICommand{
    public function execute();
}



class TextCommands implements ICommand{
    protected $operations

    public function __construct(ITextEdit $operation){
        $this->operations = $operation;
    }

    public function execute(string $text){
        $this->operations->edit($text)
    }

}