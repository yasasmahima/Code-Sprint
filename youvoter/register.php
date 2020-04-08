<?php
$pagename="Register"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=style.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page


?>

<table>
<p style="color: red;">
        <?php if (isset($_GET['status'])) {
            if ($_GET['status'] == 1) {
                echo "Password doesn't match given format";
            }else{
                echo "User has already exist";
            }
        } ?>
</p>
    <form action="reg_process.php" method="POST">
        <tr>
            <td>Name</td>
            <td><input type="text" name="userName" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="mail" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
            <td><input type="reset"></td>
        </tr>
    </form>    
</table>

<?php

include("footfile.html"); //include head layout
echo "</body>";
?>