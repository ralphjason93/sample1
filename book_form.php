<?php

   $conn = mysqli_connect('localhost', 'root', '', 'book_db') or die ('connection failed');

   if(isset($_POST['submit'])){
      
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = mysqli_query($conn, "INSERT INTO `book_form`(name, email, phone, address, location, guests, arrivals, leaving)
      VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')") or die('query failed');

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>