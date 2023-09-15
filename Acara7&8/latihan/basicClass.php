<?php
class Person
{
    public function __construct()
    {
    }
    var $name;

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getName()
    {
        return $this->name;
    }
}
