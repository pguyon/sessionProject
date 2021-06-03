<?php
class Session
{
    public $attributs = [];

    public function __set($key, $value)
    {
        return $this->attributs[$key] = $value;
    }

    public function setAttributes()
    {
        return $this->attributs;
    }
}
