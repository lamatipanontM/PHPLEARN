<?php
session_start();
if (!isset($_SESSOPM['name']))
{
    header("Location:login.php");
}
header("Refresh:2; url= pupildoessubject.php");
print_r($_POST);
try{
    include_once('connection.php');
    array_map("htmlspecialchars", $_POST);
    
    

    $stmt = $conn->prepare("INSERT INTO Tblpupilstudies (Subjectid,Userid,Classposition,Classgrade,Exammark,Comment) VALUES (:subjectname,:userid,null,null,null,null)");
    $stmt->bindParam(':subjectname',$_POST["subjects"]);
    $stmt->bindParam('userid',$_POST["student"]);

    $stmt->execute();
    }
catch(PDOException $e)
{
    echo "erroe".$e->getMessage();
}
$conn=null;
?>