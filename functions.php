<?php
function getData()
{
    return array(
        array("id" => "1", "name" => "hosein", "email" => "hosein@gmail.com"),
        array("id" => "2", "name" => "ali", "email" => "ali@gmail.com"),
        array("id" => "3", "name" => "reza", "email" => "reza@gmail.com")

    );
}

class Db
{
    public $table_name;

    public function getSelect($id, $columns = null)
    {
        $output = is_null($columns) ? '*' : implode(',', $columns);
        echo "SELECT {$output} FROM {$this->table_name} WHERE id={$id} ";
    }


}

class Human
{
    static $count = 0;

    function __construct()
    {
        $mycount = self::$count++;
        echo "count is $mycount";
    }

    public function doit(Human $name)
    {

    }


}

interface Myint
{
    public function setName($name);

    public function getName();
}
class Person implements Myint{
    public function __construct()
    {
        echo "constructor ";
    }

    private $name;
    public function setName( $name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }
}



