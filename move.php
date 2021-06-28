<?php 

$database = new mysqli("localhost","root","","motor");

$sql = "SELECT id,mov FROM move ";

if (isset($_POST['r'])) {
$sql1 = mysqli_query($database,"UPDATE move SET mov='R' WHERE id='0' ");
    } 
    else if (isset($_POST['l'])) {
$sql1 = mysqli_query($database,"UPDATE move SET mov='L' WHERE id='0' ");
    }
    else if (isset($_POST['s'])) {
$sql1 = mysqli_query($database,"UPDATE move SET mov='S' WHERE id='0' ");
    }
    else if (isset($_POST['f'])) {
$sql1 = mysqli_query($database,"UPDATE move SET mov='F' WHERE id='0' ");
    }
    else if (isset($_POST['b'])) {
$sql1 = mysqli_query($database,"UPDATE move SET mov='B' WHERE id='0' ");
    }

$result = $database->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["mov"]=='R'){
            echo " <  R  >";
        }else  if($row["mov"]=='L') {
            echo " <  L  >";
        }else  if($row["mov"]=='S') {
            echo " <  S  >";
        }else  if($row["mov"]=='F') {
            echo " <  F  >";
        }else  if($row["mov"]=='B') {
            echo " <  B  >";
        }
    }
} else {
    echo "0 results";
}

?>
