<?php
// session_start();
include("db.php"); 
$pagename="Voting Page"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=style.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text


$candidateId=$_GET['cId'];
$userId=$_SESSION['uId'];
// $userId=1;
// $candidateId=2;

$countSQl="SELECT COUNT(*) AS voteCount FROM votes WHERE votes.uId=".$userId;
$execSQL1=mysqli_query($conn,$countSQl);

// $rows=mysqli_num_rows ($execSQL1);


$votes=mysqli_fetch_array($execSQL1);

// echo $votes['voteCount'];


if($votes['voteCount']<3){

$sql="SELECT COUNT(*) AS cCount FROM votes WHERE votes.uId='$userId'AND votes.cId = '$candidateId'";
$exec=mysqli_query($conn,$sql);

$rows=mysqli_fetch_array($exec);

// echo $rows['cCount'];
// $result=mysqli_fetch_array($exec);

if ($rows['cCount']==0) {

	echo "<h1>Vote No : ".($votes['voteCount']+1);

	$insertSQL="INSERT INTO votes (uId,cId) VALUES ('$userId','$candidateId')";
	$excecution=mysqli_query($conn,$insertSQL)  or die(mysqli_error($conn));

	$updateCan="UPDATE candidate SET voteCount= voteCount + 1 WHERE canId = '$candidateId'";
	$excecution2=mysqli_query($conn,$updateCan)  or die(mysqli_error($conn));

	echo "<h2>You Have Successfully Voted</h2>";
	echo "<h3>Back to <a href='index.php'>Candidates</a></h3>";

	
}else{
	echo "<h1>!! You have Entered to this User Already. </h1>";
	echo "<h2>Please Choose Another Candidate to Vote</h2>";

	echo "<h4>Back to <a href='index.php'>Candidates</a></h4>";
}

}else{
	echo "<h1> You cannot votes More. You have Used your 3 Votes</h1><br>Thank You for Voting";
}


include("footfile.html"); //include head layout
echo "</body>";
?>