<?php 
    
        include_once 'connection.php';
    if(isset($_POST['submit'])){

        $name = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['name'])));
        $email= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
        $address = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['address'])));
	   $nok= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nok'])));
        $nok = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nok'])));
         $non = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['non'])));
          $nor = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nor'])));
           $noa = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['noa'])));
        $region = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['region'])));
        $state = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['state'])));
      
        $id = $_REQUEST['id'];
        
        $insertqry = mysqli_query($con,"Update patients set name = '$name', email = '$email', address = '$address', nok = '$nok', non ='$non', nor ='$nor', noa ='$noa', region = '$region', state = '$state'  where id = $id") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:index.php');
        }
    }
?>

