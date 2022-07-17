<?php

namespace dashboard\libs;

class Session
{
    private $signedIn = false;
    public $idKlientit;
    public $message;

    public function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->checkLogin();
        $this->checkMessage();
    }

    public function isSignedIn()
    {
        return $this->signedIn;
    }
    public function checkLogin()
    {
        if (isset($_SESSION['idKlientit'])) {
            $this->idKlientit = $_SESSION['idKlientit'];
            $this->signedIn = true;
        } else {
            unset($this->idKlientit);
            $this->signedIn = false;
        }
    }
    public function login($user)
    {
        if ($user) {
            $this->idKlientit = $_SESSION['idKlientit'] = $user->getId();
            $this->signedIn = true;
        }
    }
    public function logout()
    {
        unset($_SESSION['idKlientit']);
        unset($this->idKlientit);
        $this->signedIn = false;
    }
    public function message($msg = "")
    {
        if (!empty($msg)) {
            $this->message = $_SESSION['message'] = $msg;
        } else {
            return $this->message;
        }
    }
    public function checkMessage()
    {
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }
}
