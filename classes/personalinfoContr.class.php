<?php
class PersonalinfoContr extends Personalinfo  {
    private $afm;
    private $amka;
    private $idcard;

    public function __construct($afm = 0, $amka = 0, $idcard = "") {
        $this->afm = $afm;
        $this->amka = $amka;
        $this->idcard = $idcard;
    }

    public function getAfm() {
        return $this->afm;
    }

    public function setAfm($afm) {
        $this->afm = $afm;
    }

    public function getAmka() {
        return $this->amka;
    }

    public function setAmka($amka) {
        $this->amka = $amka;
    }

    public function getIdcard() {
        return $this->idcard;
    }

    public function setIdcard($idcard) {
        $this->idcard = $idcard;
    }

    public function personalinfo() {
        $data = $this->getAllPersonalinfo();
        return $data;
    }

    private function alphaNumeric($val) {
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $val)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    private function numeric($val) {
        $result = false;
        if(!preg_match("/^[0-9]*$/", $val)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    private function minNumeric($val, $num) {
        $result = false;
        if($val < $num) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
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

    public function personalinfoById($id) {
        if(!$this->numeric($id) || !$this->emptyInput($id)) {
            exit();
        }

        $data = $this->getPersonalinfoById($id);
        return $data;
    }

    public function insertinfo($afm, $amka, $idcard, $user_id) {
        if(!$this->numeric($afm) || !$this->numeric($amka) || !$this->alphaNumeric($idcard)) {
            exit();
        }

        if(!$this->emptyInput($afm) || !$this->emptyInput($amka) || !$this->emptyInput($idcard) || !$this->emptyInput($user_id)) {
            exit();
        }

        $this->insertPersonalinfo($afm, $amka, $idcard, $user_id);
    }

    public function updateinfo($afm, $amka, $idcard, $id) {
        if(!$this->minNumeric(strlen($afm), 5)) {
            exit();
        }

        if(!$this->numeric($afm) || !$this->numeric($amka) || !$this->alphaNumeric($idcard)) {
            exit();
        }

        if(!$this->emptyInput($afm) || !$this->emptyInput($amka) || !$this->emptyInput($idcard) || !$this->emptyInput($id)) {
            exit();
        }

        $this->updatePersonalinfo($afm, $amka, $idcard, $id);
    }

    public function deleteinfo($id) {
        if(!$this->numeric($id) || !$this->emptyInput($id)) {
            exit();
        }

        $this->deletePersonalinfo($id);
    }
}
