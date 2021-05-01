<?php


class RecruitmentModel extends Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'recruitments';
    }

    public function create($data){
        try {
            $sql = "INSERT INTO $this->table (title, content, time_work, location) VALUES(:title, :content, :time_work, :location)";
            $this->connect->beginTransaction();
            $stmt = $this->connect->prepare($sql);
            $stmt->execute($data);
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            return false;
        }
    }

    public function update($data){
        try {
            $sql = "UPDATE $this->table SET title = :title, content = :content, time_work = :time_work, location = :location WHERE id = :id";
            $this->connect->beginTransaction();
            $stmt = $this->connect->prepare($sql);
            $stmt->execute($data);
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            return false;
        }
    }

    public function delete($id){
        try {
            $sql = "DELETE FROM $this->table WHERE  id = :id";
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

    public function getList(){
        try {
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->connect->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e){
            return [];
        }
    }

    public function getRecruitmentById($id){
        try {
            $sql = "SELECT * FROM $this->table WHERE id = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll()[0];
        } catch (PDOException $e){
            return [];
        }
    }
}