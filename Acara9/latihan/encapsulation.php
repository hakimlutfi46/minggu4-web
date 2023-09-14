<?php
class person
{
    public $name;

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getName()
    {
        return $this->name;
    }
}
