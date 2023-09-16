<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        require_once "../classes/Dbh.classes.php";
        require_once "../classes/personalinfo.classes.php";
        require_once "../classes/personalinfo-contr.classes.php";
        $personalinfo = new PersonalinfoContr();

        $data = $personalinfo->personalinfo();  

        echo json_encode(["status"=>"ok", "data"=>$data]);
    }  
?>