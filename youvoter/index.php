<?php
session_start();
include("db.php"); 
$pagename="Candidates"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=style.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text


// $_SESSION['uId']=1;

$uId=$_SESSION['uId'];

if(isset($_SESSION['uId'])){

$sql="SELECT * FROM candidate";
$execSql=mysqli_query($conn,$sql);

echo "Click on the user to ";

while ($Candidates=mysqli_fetch_array($execSql)) {

echo "<a href=voting.php?cId=".$Candidates['canId'].">";
	echo "<h3>Candidate Name : ".$Candidates['canName'].
	"<br>Candidate Votes : ".$Candidates['voteCount']."</h3>";
	echo "</a>";

}

}else{
	echo "<h2>Please Log in to Vote : <a href'login.php'>Log in</a>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>