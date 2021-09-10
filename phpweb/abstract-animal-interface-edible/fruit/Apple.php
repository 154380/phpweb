<?php

    include_once(dirname(__FILE__) . '/../abstractclass/Fruit.php');

    class Apple extends Fruit
    {
        public function howToEat()
        {
            return "Apple could be slided";
        }
    }