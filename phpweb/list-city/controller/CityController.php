<?php

    namespace Controller;
    use Model\City;
    use model\CityDB;
    use model\DBConnection;

    class CityController
    {
        public $cityDB;

        public function __construct()
        {
            $connection = new DBConnection("mysql:host=localhost;dbname=city", "root", "");
            $this->cityDB = new CityDB($connection->connect());
        }

        public function create()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                include 'view/create.php';
            } else {
                $name = $_POST['name'];
                $area = $_POST['area'];
                $population = $_POST['population'];
                $GDP = $_POST['GDP'];
                $description = $_POST['description'];
                $country = $_POST['country'];
                $city = new City($name, $area, $population, $GDP, $description, $country);
                $this->cityDB->create($city);
                $message = 'Them thanh cong';
                include 'view/create.php';
            }
        }

        public function index()
        {
            $cities = $this->cityDB->getAll();
            include 'view/list.php';
        }

        public function delete()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $city = $this->cityDB->get($id);
                include 'view/delete.php';
            } else {
                $id = $_POST['id'];
                $this->cityDB->delete($id);
                header('Location: index.php');
            }
        }

        public function edit()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $city = $this->cityDB->get($id);
                include 'view/edit.php';
            } else {
                $id = $_POST['id'];
                $city = new City($_POST['name'], $_POST['area'], $_POST['population'], $_POST['GDP'], $_POST['description'], $_POST['country']);
                $this->cityDB->update($id, $city);
                header('Location: index.php');
            }
        }
    }