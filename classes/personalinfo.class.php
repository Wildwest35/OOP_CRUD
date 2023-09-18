<?php

class Personalinfo extends Dbh  {
    protected function getAllPersonalinfo() {
        $stmt = $this->connect()->prepare('SELECT `users`.`users_uid`, `personalinfo`.`info_id`, `personalinfo`.`info_afm`, `personalinfo`.`info_amka`, `personalinfo`.`info_idcard` 
                                           FROM `personalinfo` 
                                           JOIN `users` ON `users`.`users_id` = `personalinfo`.`user_id`;');

        if(!$stmt->execute()) {
            $stmt = null;
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        $personalinfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null;
        return $personalinfo;
    }

    protected function getPersonalinfoById($id) {
        $stmt = $this->connect()->prepare('SELECT `users`.`users_uid`, `personalinfo`.`info_id`, `personalinfo`.`info_afm`, `personalinfo`.`info_amka`, `personalinfo`.`info_idcard` 
                                           FROM `personalinfo` 
                                           JOIN `users` ON `users`.`users_id` = `personalinfo`.`user_id`
                                           WHERE `personalinfo`.`info_id` = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        $personalinfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null;
        return $personalinfo;
    }

    protected function insertPersonalinfo($afm, $amka, $idcard, $user_id) {
        $stmt = $this->connect()->prepare('INSERT INTO `personalinfo`(`user_id`, `info_afm`, `info_amka`, `info_idcard`) VALUES(?, ?, ?, ?);');

        if(!$stmt->execute(array($user_id, $afm, $amka, $idcard))) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }

    protected function updatePersonalinfo($afm, $amka, $idcard, $id) {
        $stmt = $this->connect()->prepare('UPDATE `personalinfo` SET `personalinfo`.`info_afm` = ?, `personalinfo`.`info_amka` = ?, `personalinfo`.`info_idcard` = ?
                                           WHERE `personalinfo`.`info_id` = ?;');

        if(!$stmt->execute(array($afm, $amka, $idcard, $id))) {
            $stmt = null;
            exit();
        }

        $stmt = null;     
    }

    protected function deletePersonalinfo($id) {
        $stmt = $this->connect()->prepare('DELETE FROM `personalinfo` WHERE `personalinfo`.`info_id` = ?;');

        if(!$stmt->execute(array($id))) {
            $stmt = null;
            exit();
        }

        $stmt = null;   
    }
}