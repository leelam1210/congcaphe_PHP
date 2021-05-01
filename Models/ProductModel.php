<?php

require_once "./Core/Model.php";

class ProductModel extends Model
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'products';
    }

    public function create($data){
        try {
            $sql = "INSERT INTO $this->table (name, type,price, image, content) VALUES (:name, :type, :price, :image, :content)";
            $this->connect->beginTransaction();
            $stmt = $this->connect->prepare($sql);
            $stmt->execute($data);
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function update($data){
        try {
            $image = isset($data['image']) ? " , image = :image" : '';
            $sql = "UPDATE $this->table SET name = :name, type = :type, price = :price, content = :content $image WHERE id = :id";
            $this->connect->beginTransaction();
            $stmt = $this->connect->prepare($sql);
            $stmt->execute($data);
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($id){
        try {
            $sql = "DELETE FROM $this->table WHERE id = :id";
            $this->connect->beginTransaction();
            $stmt = $this->connect->prepare($sql);
            $stmt->execute(['id' => $id]);
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            return false;
        }
    }

    public function getList($limit = '', $type = ''){
        try {
            $typeProduct = '';
            if (isset($type) && !Helpers::checkEmpty($type)){
                $typeProduct = "WHERE type = '$type'";
            }
            $sql = "SELECT * FROM $this->table $typeProduct $limit";
            $stmt = $this->connect->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e){
            echo $e->getMessage();
            return [];
        }
    }

    public function getProductById($id){
        try {
            $sql = "SELECT * FROM $this->table WHERE id = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute(['id' => $id]);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            return $stmt;
        } catch (PDOException $e){
            echo $e->getMessage();
            return [];
        }
    }
}