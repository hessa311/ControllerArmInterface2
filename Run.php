<?php 

$output1 = $_POST['out1'];
$output2 = $_POST['out2'];
$output3 = $_POST['out3'];
$output4 = $_POST['out4'];
$output5 = $_POST['out5'];

$database = new mysqli("localhost","root","","motor");

$sql = "SELECT motor1, motor2, motor3 , motor4, motor5,OnOff FROM motor ";

if (isset($_POST['run'])) {

$sql1 = mysqli_query($database,"UPDATE motor SET OnOff='ON' WHERE id='0' ");
    } 
    else if (isset($_POST['Off'])) {    
$sql2 = mysqli_query($database,"UPDATE motor SET OnOff='OFF' WHERE id='0' ");
}
else if (isset($_POST['save'])) {    
$sql3 = mysqli_query($database,"UPDATE motor SET motor1='$output1' ,motor2='$output2' ,motor3='$output3' ,motor4='$output4' ,motor5='$output5', OnOff='OFF' WHERE id='0' ");
}
$result = $database->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " motor1:  ". $row["motor1"]. "<br> motor2: ". $row["motor2"]. "<br>motor3:" . $row["motor3"] . "<br>motor4: ". $row["motor4"]. "<br> motor5: ". $row["motor5"]."<br>";
        if($row["OnOff"]=='ON'){
            echo " <  ON  > <br>";
        }else{
            echo " <  OFF  > <br>";
        }
    }

} else {
    echo "0 results";
}


?>
