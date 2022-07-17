<?php

namespace dashboard\libs;

use libs\database;

include_once('database.php');

use PDO;
use PDOException;
// idUshqimit	emri	cmimi	fotoUshqimit
class Ushqimet extends Database
{
    protected $idUshqimit;
    protected $emri;
    protected $cmimi;
    protected $fotoUshqimit;
    protected $lloji;

    public function getIdUshqimit()
    {
        return $this->idUshqimit;
    }
    public function setIdUshqimit($idUshqimit)
    {
        $this->idUshqimit = $idUshqimit;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function getCmimi()
    {
        return $this->cmimi;
    }
    public function setCmimi($cmimi)
    {
        $this->cmimi = $cmimi;
    }
    public function getFotoUshqimit()
    {
        return $this->fotoUshqimit;
    }
    public function setFotoUshqimit($fotoUshqimit)
    {
        $this->fotoUshqimit = $fotoUshqimit;
    }
    public function getLloji()
    {
        return $this->lloji;
    }
    public function setLloji($lloji)
    {
        $this->lloji = $lloji;
    }

    public function get_all_foods()
    {
        $sql = "SELECT idUshqimit,emri,cmimi,fotoUshqimit,lloji from ushqimet";
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\ushqimet");
    }
    public function get_all_foods_id()
    {
        $sql = "SELECT idUshqimit,emri,cmimi,fotoUshqimit,lloji from ushqimet where idUshqimit=:idUshqimit";
        $result = $this->prepare($sql);
        $result->bindParam(':idUshqimit', $this->idUshqimit);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\ushqimet");
    }

    public function delete_food()
    {
        try {
            $sql = "DELETE FROM ushqimet WHERE idUshqimit=:idUshqimit ";
            $res = $this->prepare($sql);
            $res->bindParam(':idUshqimit', $this->idUshqimit);
            $res->execute();
            include_once('form-food-delete.php');
        } catch (PDOException $e) {
            echo "ERROR IN DELETING FOOD " . $e->getMessage();
        }
    }
    public function update_food()
    {
        try {
            $sql = "UPDATE ushqimet SET emri=:emri,cmimi=:cmimi,fotoUshqimit=:fotoUshqimit,lloji=:lloji WHERE idUshqimit=:idUshqimit";
            $res = $this->prepare($sql);
            $res->bindParam('idUshqimit', $this->idUshqimit);
            $res->bindParam('emri', $this->emri);
            $res->bindParam('cmimi', $this->cmimi);
            $res->bindParam('fotoUshqimit', $this->fotoUshqimit);
            $res->bindParam('lloji', $this->lloji);
            $res->execute();
            include_once('form-food-update.php');
        } catch (PDOException $e) {
            echo "Error in food modification process! " . $e->getMessage();
        }
    }
    public function get_food_id($idUshqimit)
    {
        $this->idUshqimit = $idUshqimit;
        $sql = "SELECT idUshqimit,emri,cmimi,fotoUshqimit,lloji FROM ushqimet WHERE idUshqimit=:idUshqimit";
        $result = $this->prepare($sql);
        $result->bindParam('idUshqimit', $this->idUshqimit);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\ushqimet");
        return $result->fetch();
    }
    public function get_all_foods_lloji($lloji)
    {
        $sql = "SELECT idUshqimit,emri,cmimi,fotoUshqimit from ushqimet where lloji='$lloji'";
        $result = $this->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\ushqimet");
    }

    public function create_food()
    {
        try {
            $sql = "INSERT INTO ushqimet(emri,cmimi,fotoUshqimit,lloji) VALUES(:emri,:cmimi,:fotoUshqimit,:lloji)";
            $res = $this->prepare($sql);
            $res->bindParam(':emri', $this->emri);
            $res->bindParam(':cmimi', $this->cmimi);
            $res->bindParam(':fotoUshqimit', $this->fotoUshqimit);
            $res->bindParam(':lloji', $this->lloji);
            $res->execute();

            include_once('form-food-create.php');
        } catch (PDOException $e) {
            echo "Error in add food " . $e->getMessage();
        }
    }

    public function getRowsNumber()
    {
        $sql = "SELECT COUNT(*) FROM ushqimet";
        $result = $this->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        print $count;
    }

    public function avgCmimi()
    {
        $sql = "SELECT AVG(cmimi) FROM ushqimet";
        $result = $this->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        print (float)$count;
    }
    // SELECT * FROM `ushqimet` where idUshqimit=2;

    public function get_food_foto_by_id()
    {
        $sql = "SELECT fotoUshqimit from ushqimet where idUshqimit=:idUshqimit";
        $result = $this->prepare($sql);
        $result->bindParam(':idUshqimit', $this->idUshqimit);
        $result->bindParam(':fotoUshqimit', $this->fotoUshqimit);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, __NAMESPACE__ . "\\ushqimet");
    }
}
