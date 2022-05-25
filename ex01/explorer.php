<?php

class Explorer
{
    protected $dir = new DirectoryIterator();
    public function __construct($directory)
    {
        $this->directory = $directory;
        $this->dir = new DirectoryIterator($directory);
    }

    public function show()
    {
        foreach ($this->dir as $item) {
            echo $item . "<br>";
        }
    }
}
