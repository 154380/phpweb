<?php

    namespace Model;

    class City
    {
        public $name;
        public $area;
        public $population;
        public $GDP;
        public $description;
        public $country;

        public function __construct($name, $area, $population, $GDP, $description, $country)
        {
            $this->name = $name;
            $this->area = $area;
            $this->population = $population;
            $this->GDP = $GDP;
            $this->description = $description;
            $this->country = $country;
        }

    }