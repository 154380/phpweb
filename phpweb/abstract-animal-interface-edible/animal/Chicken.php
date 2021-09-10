<?php

    include_once(dirname(__FILE__) . '/../abstractclass/Animal.php');
    include_once(dirname(__FILE__) . '/../interfaceclass/Edible.php');

    class Chicken extends Animal implements Edible
    {
        public function makeSound()
        {
            return "Chicken: cluck-cluck!";
        }

        public function howToEat()
        {
            return "could be fried";
        }
    }