<?php
namespace Com\Iesebre\Dam2\francescfores\helloWorldComposer;
use Faker\Factory;


class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker  = Factory::create();
    }

    public  function sayHello(){
        echo "Hello ". $this->faker->name ."\n";
    }
}