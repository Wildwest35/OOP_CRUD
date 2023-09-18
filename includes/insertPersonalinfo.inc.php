<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        $user_id = $_SESSION['userid'];
        $afm = $_POST['afm'];
        $amka = $_POST['amka'];
        $idcard = $_POST['idcard'];

        require_once "../classes/dbh.class.php";
        require_once "../classes/personalinfo.class.php";
        require_once "../classes/personalinfoContr.class.php";
        $personalinfo = new PersonalinfoContr();

        $data = $personalinfo->insertinfo($afm, $amka, $idcard, $user_id);

        echo json_encode(["status"=>"ok", "data"=>"Record added successfully!"]);
    }