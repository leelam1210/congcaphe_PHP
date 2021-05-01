<?php
class UserRegisterEmailModel extends Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "user_register_email";
    }

    public function register($email){
        try {
            $sql = "INSERT INTO $this->table (email) VALUES(:email)";
            $this->connect->beginTransaction();
            if (!self::checkIsset($email)){
                $stmt = $this->connect->prepare($sql);
                $stmt->execute(['email' => $email]);
            }
            $this->connect->commit();
            return true;
        } catch (PDOException $e){
            $this->connect->rollBack();
            echo $e->getMessage();
            return false;
        }
    }

    public function checkIsset($email){
        try {
            $sql = "SELECT * FROM $this->table WHERE email = :email";
            $stmt = $this->connect->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute(['email' => $email]);
            return $stmt->rowCount() > 0 ? true : false;
        } catch (PDOException $e){
            return false;
        }
    }
}