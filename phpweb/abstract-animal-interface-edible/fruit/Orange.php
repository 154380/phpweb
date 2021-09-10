<?php

    include_once(dirname(__FILE__) . '/../abstractclass/Fruit.php');

    class Orange extends Fruit
    {

        public function howToEat()
        {
            return "Orange could be juiced";
        }
    }