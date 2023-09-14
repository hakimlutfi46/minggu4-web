<?php
class person
{
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

$orang1 = new person();
$orang2 = new person();

$orang1->setName("Hakim");

$orang2->setName("Farhan");

echo $orang1->getName();

echo "<br>";
echo $orang2->getName();
