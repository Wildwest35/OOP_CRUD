<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        $user_id = $_POST['user_id'];

        require_once "../classes/dbh.class.php";
        require_once "../classes/personalinfo.class.php";
        require_once "../classes/personalinfoContr.class.php";
        $personalinfo = new PersonalinfoContr();

        $data = $personalinfo->deleteinfo($user_id);

        echo json_encode(["status"=>"ok", "data"=>"Record deleted successfully!"]);
    }