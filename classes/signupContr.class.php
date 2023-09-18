<?php

class SignupContr extends Signup {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if(!$this->emptyInput($this->uid) || !$this->emptyInput($this->pwd) || !$this->emptyInput($this->pwdrepeat) || !$this->emptyInput($this->email)) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if(!$this->invalidUid()) {
            header("location: ../index.php?error=username");
            exit();
        }
        if(!$this->invalidEmail()) {
            header("location: ../index.php?error=email");
            exit();
        }
        if(!$this->pwdMatch()) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if(!$this->uidTakenCheck()) {
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput($val) {
        $result = false;
        if(empty($val) || $val == "") {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    private function pwdMatch() {
        $result = false;
        if($this->pwd !== $this->pwdrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    private function invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    private function uidTakenCheck() {
        $result = false;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }
}

