<?php

class Database
{
  private $connectivity;
  private $statement;

  public function __construct()
  {
    $dsn = "mysql:host=localhost;dbname=taskmanager;charset=utf8mb4";
    $username = "root";
    $password = "";
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false
    );
    try {
      $this->connectivity = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
      throw new Exception("Connection failed: " . $e->getMessage(), (int) $e->getCode());
    }
  }

  public function query($query, $params = [])
  {
    try {
      $this->statement = $this->connectivity->prepare($query);
      $this->statement->execute($params);
      return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Query failed: " . $e->getMessage());
    }
  }

  public function get()
  {
    return $this->statement->fetchAll();
  }

  public function find()
  {
    return $this->statement->fetch();
  }

}

