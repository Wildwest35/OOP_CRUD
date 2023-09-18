<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        require_once "../classes/dbh.class.php";
        require_once "../classes/personalinfo.class.php";
        require_once "../classes/personalinfoContr.class.php";
        $personalinfo = new PersonalinfoContr();

        $data = $personalinfo->personalinfo();  

        echo json_encode(["status"=>"ok", "data"=>$data]);
    }  
?>