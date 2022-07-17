<?php

namespace dashboard\libs;

use libs\Database;
use PDO;
use PDOException;

include_once('database.php');

class Porosit extends Database
{
    protected $emriKlientit;
    protected $mbiemriKlientit;
    protected $emailKlientit;
    protected $numriTel;
    protected $idPorosis;
    protected $emriUshqimit;
    protected $cmimi;
    protected $fotoUshqimit;
    protected $lloji;
    protected $idKlientit;
    protected $idUshqimit;

    public function setIDKlientit($idKlientit)
    {
        $this->idKlientit = $idKlientit;
    }
    public function getIDKlientit()
    {
        return $this->idKlientit;
    }
    public function setIDUshqimit($idUshqimit)
    {
        $this->idUshqimit = $idUshqimit;
    }
    public function getIDUshqimit()
    {
        return $this->idUshqimit;
    }
    public function getEmri()
    {
        return $this->emriKlientit;
    }
    public function setEmri($emriKlientit)
    {
        $this->emriKlientit = $emriKlientit;
    }
    public function getMbiemri()
    {
        return $this->mbiemriKlientit;
    }
    public function setMbiemri($mbiemriKlientit)
    {
        $this->mbiemriKlientit = $mbiemriKlientit;
    }
    public function getEmail()
    {
        return $this->emailKlientit;
    }
    public function setEmail($emailKlientit)
    {
        $this->emailKlientit = $emailKlientit;
    }
    public function getNumriTel()
    {
        return $this->numriTel;
    }
    public function setNumriTel($numriTel)
    {
        $this->numriTel = $numriTel;
    }
    public function getIdPorosis()
    {
        return $this->idPorosis;
    }
    public function setIdPorosis($idPorosis)
    {
        $this->idPorosis = $idPorosis;
    }
    public function getEmriUshqimit()
    {
        return $this->emriUshqimit;
    }
    public function setEmriUshqimit($emriUshqimit)
    {
        $this->emriUshqimit = $emriUshqimit;
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



    public function getAll_orders()
    {
        // idPorosis	emriKlientit	mbiemriKlientit	emailKlientit	numriTel	emriUshqimit	cmimi	fotoUshqimit	lloji
        $sql = "SELECT * FROM porosit";
        $result = $this->prepare($sql);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\porosit");
        return $result->fetchAll();
    }

    public function create_orders()
    {
        try {
            $sql = "INSERT INTO porosit(emriKlientit,mbiemriKlientit,emailKlientit,numriTel,emriUshqimit,cmimi,fotoUshqimit,lloji,idKlientit,idUshqimit) VALUES(:emriKlientit,:mbiemriKlientit,:emailKlientit,:numriTel,:emriUshqimit,:cmimi,:fotoUshqimit,:lloji,:idKlientit,:idUshqimit);";
            $result = $this->prepare($sql);
            $result->bindParam('emriKlientit', $this->emriKlientit);
            $result->bindParam('mbiemriKlientit', $this->mbiemriKlientit);
            $result->bindParam('emailKlientit', $this->emailKlientit);
            $result->bindParam('numriTel', $this->numriTel);
            $result->bindParam('emriUshqimit', $this->emriUshqimit);
            $result->bindParam('cmimi', $this->cmimi);
            $result->bindParam('fotoUshqimit', $this->fotoUshqimit);
            $result->bindParam('lloji', $this->lloji);
            $result->bindParam('idKlientit', $this->idKlientit);
            $result->bindParam('idUshqimit', $this->idUshqimit);
            $result->execute();
            include_once('order_complete.php');
            return $result->fetchAll();
        } catch (PDOException $e) {
            echo "Error in order process! " . $e->getMessage();
        }
    }
    public function get_Order_ID($idPorosis)
    {
        $this->idPorosis = $idPorosis;
        $sql = "SELECT * FROM porosit WHERE idPorosis=:idPorosis";
        $result = $this->prepare($sql);
        $result->bindParam('idPorosis', $this->idPorosis);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\porosit");
        return $result->fetch();
    }

    public function update_order()
    {
        try {
            $sql = "UPDATE porosit SET emriKlientit=:emriKlientit,mbiemriKlientit=:mbiemriKlientit,emailKlientit=:emailKlientit,numriTel=:numriTel,emriUshqimit=:emriUshqimit,cmimi=:cmimi,fotoUshqimit=:fotoUshqimit,lloji=:lloji,idKlientit=:idKlientit,idUshqimit=:idUshqimit WHERE idPorosis=:idPorosis";
            $res = $this->prepare($sql);
            $res->bindParam('idPorosis', $this->idPorosis);
            $res->bindParam('emriKlientit', $this->emriKlientit);
            $res->bindParam('mbiemriKlientit', $this->mbiemriKlientit);
            $res->bindParam('emailKlientit', $this->emailKlientit);
            $res->bindParam('numriTel', $this->numriTel);
            $res->bindParam('emriUshqimit', $this->emriUshqimit);
            $res->bindParam('cmimi', $this->cmimi);
            $res->bindParam('fotoUshqimit', $this->fotoUshqimit);
            $res->bindParam('lloji', $this->lloji);
            $res->bindParam('idKlientit', $this->idKlientit);
            $res->bindParam('idUshqimit', $this->idUshqimit);
            $res->execute();
        } catch (PDOException $e) {
            echo "Error in order modification process! " . $e->getMessage();
        }
    }
    public function delete_order($idPorosis)
    {
        try {
            $sql = "DELETE FROM porosit WHERE idPorosis =:idPorosis";
            $res = $this->prepare($sql);
            $res->bindParam('idPorosis', $this->idPorosis);
            $res->execute();
            echo "<script>alert('Order deleted succesfully!');</script>";

            echo  "<script>
    setTimeout(function() {
        document.location = '../menu-2.php'

    }, 5000)
</script>";
        } catch (PDOException $e) {
            echo "Error in order deleting process! " . $e->getMessage();
        }
    }

    public function delete_order1($idPorosis)
    {
        try {
            $sql = "DELETE FROM porosit WHERE idPorosis =:idPorosis";
            $res = $this->prepare($sql);
            $res->bindParam('idPorosis', $this->idPorosis);
            $res->execute();
            echo "<script>alert('Order deleted succesfully!');</script>";

            echo  "<script>
    setTimeout(function() {
        document.location = 'orders.php'

    }, 5000)
</script>";
        } catch (PDOException $e) {
            echo "Error in order deleting process! " . $e->getMessage();
        }
    }

    public function get_order_byIDK($idKlientit)
    {
        $this->idKlientit = $idKlientit;
        $sql = "SELECT * FROM porosit WHERE idKlientit=:idKlientit";
        $result = $this->prepare($sql);
        $result->bindParam('idKlientit', $this->idKlientit);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\porosit");
        return $result->fetchAll();
    }

    public function get_sum_of_orders($idKlientit)
    {
        $this->idKlientit = $idKlientit;
        $sql = "SELECT sum(cmimi) from porosit where idKlientit=:idKlientit";
        $result = $this->prepare($sql);
        $result->bindParam('idKlientit', $this->idKlientit);
        $result->execute();
        $count = $result->fetchColumn();
        print $count;
    }

    public function coutCmimi()
    {
        $sql = "SELECT SUM(cmimi) FROM porosit";
        $result = $this->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        print $count;
    }
    public function rCmimi()
    {
        $sql = "SELECT COUNT(cmimi) FROM porosit";
        $result = $this->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        print $count;
    }
}
