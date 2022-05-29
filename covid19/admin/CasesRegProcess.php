<?php
        include_once 'connection.php';
    if(isset($_POST['submit'])){
        $name = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['name'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
         $dob = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['dob'])));
         $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['phone'])));
        $address = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['address'])));
        $nok = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nok'])));
         $non = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['non'])));
          $nor = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nor'])));
           $noa = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['noa'])));
        $region = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['region'])));
        $state= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['state'])));
        //$tconfirmed = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['total_confirmed'])));
       // $ndeath = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['new_deaths'])));
        //$tdeath = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['total_death'])));
        //$nrecorvered = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['new_recovered'])));
        //$trecorvered = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['total_recovered'])));
        
        $insertqry = mysqli_query($con,"Insert into patients (name,email,dob,address,phone,nok,non,nor,noa,state,region) values('$name','$email', '$dob', '$address', '$phone', '$nok','$non','$nor','$noa', '$state','$region')") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:CasesSuccess.php');
        }
    }
?>
