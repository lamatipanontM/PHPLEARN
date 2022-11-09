<?php
session_start();

/* if(password_verify($attempt,$hashed)){
    $_SESSION['name']=$row["surname"];
    if (!isset($_SESSION['name'])){
        $backUrL= "/";
    }
    else{
        $backURL=$_SESSION['backURL'];
    }
    unset($_SESSION['backURL']);
    header('Location: '.$backURL);
}
else{
    header('Location: login.php');
} */
print_r($_POST);
include_once("connection.php");
array_map("htmlspecialchars", $_POST);


$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname =:username ;");
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    print_r($row);
    $hashed= $row['Password'];
    $attempt= $_POST['Pword'];
    echo($hashed."<br>");
    echo($attempt);

    if(password_verify($attempt,$hashed)){
    
       header('Location: users.php');
      # echo "yep";
    }
    else{
       header('Location: login.php');
       #echo "nope";
    }
    
}
$conn=null;

?>
