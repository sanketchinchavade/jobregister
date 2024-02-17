
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connect DB to PHP</title>
  <?php include 'links.php'; ?>
  <style><?php include 'css/style.css'; ?></style>
</head>
<body>
<section id="top-section1">
<form action="" method="POST">
<div class="container" id="my-container1">
    <label for="firstname">First Name</label>
    <input type="text" id="exampleInputfirstname" name="firstname">
  
  
    <label for="qual">Qualification</label>
    <input type="text" id="exampleInputqual" name="qual">
 
 
    <label for="mobile">Mobile</label>
    <input type="number" id="exampleInputphoneno" name="mobile">
  
  
    <label for="Email1">Email address</label>
    <input type="email"  id="exampleInputEmail1" name="email">
  
    <label for="reference">Reference</label>
    <input type="text"  id="reference" name="reference">

    <label for="webdev">Web Developer</label>
    <input type="text"  id="webdev" name="webdev" value = "Web Developer">

  <input type="submit"  name="submit" value = "Register" class="register-btn"/>
</form>
  <a href="display.php" class="check-btn">Check</a>
</div>
</section>
</body>
</html> 

<?php include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $degree = $_POST['qual'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $ref = $_POST['reference'];
    $jobprofile = $_POST['webdev'];
       
   $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$ref','$jobprofile') ";
  
   $res =  mysqli_query($con,$insertquery);
   if ($res) {
       ?>
       <script>
          alert("Data inserted properly");
       </script>
       <?php
    } else {
        ?>
        <script>
             alert("Data inserted properly");
        </script>
        <?php
    }
}
?>