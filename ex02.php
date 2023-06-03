<?php
require_once 'person.php';
echo Person::$FullName;
//echo Person::GetName();
$person =  new Person();
echo $person->GetName();
//Person::GetName();
    echo 'hi everyone';
?>