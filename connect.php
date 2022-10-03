<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli__connect('localhost', 'root', '', 'test') or die("Connection Failed:" .mysqli__connect_error());
    if(isset($_POST['name']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['model']) && isset($_POST['year']))
        $name=$_POST['name'];
        $country=$_POST['country'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $model=$_POST['model'];
        $year=$_POST['year'];
        
        $sql="INSERT INTO 'clients' ('names', 'country', 'email', 'phone', 'model', 'year') VALUES ('$name', '$country', '$email', '$phone', '$model', '$year')";
        $query = mysql_query($conn,$sql);
        if($squery) {
            echo 'Entry successful';
        } 
        else{
            echo 'Error Occurred';
        }
    }

    
    ?>
