<?php include("Data.php");  
error_reporting(0); ?>
 <!DOCTYPE html>

 <head> 
    <form action="insert.php" method="post">
         
<div><h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
    <div class='main' style="display:flex; justify-content:center">
 Gametype&nbsp;
 <input  type="placeholder"  name="gametype" style="height:20px;" /></div></h3></div><br>
<div class="container"> 
<div class="row row-cols-2" >
<div style="display:flex; justify-content:center"> Team1 &nbsp;<input type="placeholder"  name="team1" />&nbsp; vs &nbsp;Team2&nbsp;<input type="placeholder"  name="team2" /></div>
<br>
<div class='btn' style="display:flex; justify-content:center"><input type="submit" name="submit" ></div>
</form>
</head> 
</html>  

<?php 
if($_POST['submit']){ 
$Gametype=$_POST['gametype']; 
$Team1=$_POST['team1']; 
$Team2=$_POST['team2'];  
$query="INSERT INTO `input data`(`id`, `Gametype`, `Team1`, `Team2`) VALUES ('NULL','$Gametype','$Team1','$Team2')";
$data = mysqli_query($conn,$query);
if($data) 
{ 

    echo "added";
} 
else{ 
    echo "failed";
}  
} 
?>