<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        $user_id = $_POST['user_id'];
        $afm = $_POST['afm'];
        $amka = $_POST['amka'];
        $idcard = $_POST['idcard'];

        require_once "../classes/dbh.class.php";
        require_once "../classes/personalinfo.class.php";
        require_once "../classes/personalinfoContr.class.php";
        $personalinfo = new PersonalinfoContr($afm, $amka, $idcard);

        $data = $personalinfo->updateinfo($afm, $amka, $idcard, $user_id);

        echo json_encode(["status"=>"ok", "data"=>"Record updated successfully!"]);
    }