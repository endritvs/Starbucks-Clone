<?php


namespace libs;

use libs\database;

include_once('database.php');

use PDO;
use PDOException;


class Client extends Database
{
    protected $idKlientit;
    protected $emri;
    protected $mbiemri;
    protected $email;
    protected $username;
    protected $passwordi;
    protected $roli;
    protected $numriTel;

    public function getID()
    {
        return $this->idKlientit;
    }
    public function setID($idKlientit)
    {
        $this->idKlientit = $idKlientit;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function setMbiemri($mbiemri)
    {
        $this->mbiemri = $mbiemri;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getPassword()
    {
        return $this->passwordi;
    }
    public function setPassword($passwordi)
    {
        $this->passwordi = $passwordi;
    }
    public function getRoli()
    {
        return $this->roli;
    }
    public function setRoli($roli)
    {
        $this->roli = $roli;
    }
    public function getNumriTel()
    {
        return $this->numriTel;
    }
    public function setNumriTel($numriTel)
    {
        $this->numriTel = $numriTel;
    }

    public function create_client()
    {
        try {
            $sql = "INSERT INTO klient(emri,mbiemri,email,username,passwordi,roli,numriTel) VALUES(:emri,:mbiemri,:email,:username,:passwordi,:roli,:numriTel)";
            $res = $this->prepare($sql);

            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':username', $this->username);
            $res->bindParam(':passwordi', $this->passwordi);
            $res->bindParam(':roli', $this->roli);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->execute();
        } catch (PDOException $e) {
            echo "Error in user registration process! " . $e->getMessage();
        }
    }


    public function get_all_clients()
    {
        $sql = "SELECT idKlientit,emri,mbiemri,email,username,passwordi,roli,numriTel from klient";
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\client");
    }
    public function get_user_id($idKlientit)
    {
        $this->idKlientit = $idKlientit;
        $sql = "SELECT idKlientit,emri,mbiemri,email,username,passwordi,roli,numriTel FROM klient WHERE idKlientit=:idKlientit";
        $result = $this->prepare($sql);
        $result->bindParam(':idKlientit', $this->idKlientit);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\client");
        return $result->fetch();
    }
    public function update_client()
    {
        try {
            $sql = "UPDATE klient SET emri=:emri,mbiemri=:mbiemri,email=:email,username=:username";
            $sql .= ",passwordi=:passwordi,roli=:roli,numriTel=:numriTel WHERE idKlientit=:idKlientit ";
            $res = $this->prepare($sql);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':username', $this->username);
            $res->bindParam(':passwordi', $this->passwordi);
            $res->bindParam(':roli', $this->roli);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->execute();

            include_once('edit-form-client.php');
        } catch (PDOException $e) {
            echo "Error in user modification process " . $e->getMessage();
        }
    }


    public function update_client1()
    {
        try {
            $sql = "UPDATE klient SET emri=:emri,mbiemri=:mbiemri,email=:email,username=:username";
            $sql .= ",passwordi=:passwordi,roli=:roli,numriTel=:numriTel WHERE idKlientit=:idKlientit ";
            $res = $this->prepare($sql);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':mbiemri', $this->mbiemri);
            $res->bindParam(':email', $this->email);
            $res->bindParam(':username', $this->username);
            $res->bindParam(':passwordi', $this->passwordi);
            $res->bindParam(':roli', $this->roli);
            $res->bindParam(':numriTel', $this->numriTel);
            $res->execute();
            echo "<script>alert('You have succesfully edited your personal details!');</script>";
            header('Location: index.php');
        } catch (PDOException $e) {
            echo "Error in user modification process " . $e->getMessage();
        }
    }
    public function delete_client()
    {
        try {
            $sql = "DELETE FROM klient WHERE idKlientit=:idKlientit ";
            $res = $this->prepare($sql);
            $res->bindParam(':idKlientit', $this->idKlientit);
            $res->execute();

            include_once('delete-form-client.php');
        } catch (PDOException $e) {
            echo "ERROR IN DELETING CLIENT " . $e->getMessage();
        }
    }
    public function getRowsNumber()
    {
        $sql = "SELECT COUNT(*) FROM klient";
        $result = $this->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        print $count;
    }

    public function verifyUser($username, $passwordi)
    {
        $sql = "SELECT * FROM klient WHERE username=:username AND passwordi=:passwordi";

        $result = $this->prepare($sql);
        $result->bindParam(':username', $username);
        $result->bindParam(':passwordi', $passwordi);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\client");
        return $result->fetchAll();
    }
}
