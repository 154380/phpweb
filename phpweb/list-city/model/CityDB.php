<?php

    namespace Model;

    class CityDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($city)
        {
            $sql = "INSERT INTO city(name, area, population, GDP, description, country) VALUES (?, ?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $city->name);
            $statement->bindParam(2, $city->area);
            $statement->bindParam(3, $city->population);
            $statement->bindParam(4, $city->GDP);
            $statement->bindParam(5, $city->description);
            $statement->bindParam(6, $city->country);
            return $statement->execute();
        }

        public function getAll()
        {
            $sql = "SELECT * FROM city";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $cities = [];
            foreach ($result as $row) {
                $city = new City($row['name'], $row['area'], $row['population'], $row['GDP'], $row['description'], $row['country']);
                $city->id = $row['id'];
                $cities[] = $city;
            }
            return $cities;
        }

        public function get($id)
        {
            $sql = "SELECT * FROM city WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
            $row = $statement->fetch();
            $city = new City($row['name'], $row['area'], $row['population'], $row['GDP'], $row['description'], $row['country']);
            $city->id = $row['id'];
            return $city;
        }


        public function delete($id)
        {
            $sql = "DELETE FROM city WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            return $statement->execute();
        }

        public function update($id, $city)
        {
            $sql = "UPDATE city SET name = ?, area = ?, population = ?, GDP = ?, description = ?, country = ? WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $city->name);
            $statement->bindParam(2, $city->area);
            $statement->bindParam(3, $city->population);
            $statement->bindParam(4, $city->GDP);
            $statement->bindParam(5, $city->description);
            $statement->bindParam(6, $city->country);
            $statement->bindParam(7, $id);
            return $statement->execute();
        }
    }