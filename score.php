<?php
$conn=mysqli_connect("localhost","root","","mcq"); 

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
    $score = $_GET['score'];
    $sql="INSERT INTO ans(score) VALUES('$score')";

#Executing the Query
mysqli_query($conn,$sql);
echo '</response>';
?>