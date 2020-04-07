
<?php
 include("db.php");


$userName = $_POST['userName'];
$mail = $_POST['mail'];
$pw = $_POST['password'];

$pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
$pwValidation = true;

if(preg_match($pattern,$pw)){
}else{
    $pwValidation = false;
    $status  = 1;
}

$sql_1 = "SELECT * FROM user WHERE userMail = '$mail'";
$result = $conn->query($sql_1);
if ($result->num_rows > 0) {
    $pwValidation = false;
    $status  = 2;
}

if ($pwValidation) {
    
    $sql = "INSERT INTO user(userName, userMail, userPassword, userStatus, userType) VALUES('$userName','$mail','$pw',0,'voter')";

    if (mysqli_query($conn, $sql)) {
        $msg = "New user created succesfully";
    } else {
    
        $msg = "Opps! something went wromng";
    }
}else{
    header('Location: '."register.php?status=".$status);
}
?>
<?php
$pagename="Register Status"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=style.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
echo "<p>".$msg."</p>";

include("footfile.html"); //include head layout
echo "</body>";
?>