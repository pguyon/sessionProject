<?php
class Session
{
    public $attributs = [];


    public function __isset($key)
    {
        return isset($this->attributs[$key]);
    }

    public function __unset($key)
    {
        unset($this->attributs[$key]);
    }
    public function __set($key, $value)
    {
        return $this->attributs[$key] = $value;
    }

    public function __get($key)
    {
        return $this->attributs[$key];
    }

    public function setAttributes()
    {
        return $this->attributs;
    }
}
