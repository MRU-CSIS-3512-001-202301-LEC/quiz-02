<?php

class Rabbit
{
    private $name;
    private $speed;

    public function __construct($name, $speed)
    {
        $this->name = strtoupper($name);
        $this->speed = $speed;
    }

    public function name()
    {
        return $this->name;
    }

    public function adjective()
    {
        if ($this->is_fast()) {
            return "fast";
        } else {
            return "not fast";
        }
    }

    private function is_fast()
    {
        return $this->speed > 10;
    }

    private function is_slow()
    {
        return $this->speed < 5;
    }
}
