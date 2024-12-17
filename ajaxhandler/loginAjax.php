<?php
/* 
$rv=["status"=>"ok","id"=>12];
echo json_encode($rv);
 */
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attend/database/database.php";
require_once $path."/attend/database/facultyDetails.php";

 $action=$_REQUEST["action"];
 if(!empty($action))
 {
    if($action=="verifyUser")
    {
        // retrieve waht was sent
        $un=$_POST["user_name"];
        $pw=$_POST["password"];

        $rv=["un"=>$un,"pw"=>$pw];

        echo json_encode($rv);

        // check i exist in db
        $dbo=new Database();
        $fdo=new faculty_details();
        $rv=$fdo->verifyUser($dbo,$un,$pw);
        echo json_encode($rv);
    }
 }
?>