<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connect DB to PHP</title>
  <?php include 'links.php'; ?>
  <?php include 'connection.php'; ?>
  <style><?php include 'css/style.css'; ?></style>
</head>
<body>
<section id="top-section">
    <div class="container" id="my-container">
<form action=" " method="POST">

  <div class="row register-form">
  <?php 
     $ids = $_GET['id'];
     $showquery = "select * from jobregistration where id = $ids";
     $showdata = mysqli_query($con, $showquery);
     $arrdata = mysqli_fetch_array($showdata);


if(isset($_POST['submit'])) {
    
    // $idupdate = $_GET['id'];
    $ids = $_GET['id'];
    $name = $_POST['firstname'];
    $degree = $_POST['qual'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $ref = $_POST['reference'];
    $jobprofile = $_POST['webdev'];
       
//    $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$ref','$jobprofile') ";

   $query = " update jobregistration set id=$ids, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$ref', jobpost='$jobprofile' where id=$ids ";
  
   $res =  mysqli_query($con, $query);
   if ($res) {
    ?>
     <script>
        alert("Data Updated Properly");
     </script>
     <?php
  } else {
      ?>
        <script>
         alert("Data is not Updated Properly");
       </script>
      <?php
  }
}
?>
    
        <label for="firstname">First Name</label> 
        <input type="text" id="exampleInputfirstname" name="firstname" value="<?php echo $arrdata['name']?>">
   
   
        <label for="qual">Qualification</label>
        <input type="text" id="exampleInputqual" name="qual" value="<?php echo $arrdata['degree']?>">
    
    
        <label for="mobile">Mobile</label>
        <input type="number" id="exampleInputphoneno" name="mobile" value="<?php echo $arrdata['mobile']?>">
    
    
        <label for="Email1">Email address</label>
        <input type="email"  id="exampleInputEmail1" name="email"value="<?php echo $arrdata['email']?>" >
    
        <label for="reference">Reference</label>
        <input type="text"  id="reference" name="reference" value="<?php echo $arrdata['refer']?>">
   
   
        <label for="webdev">Web Developer</label>
        <input type="text"  id="webdev" name="webdev" value="<?php echo $arrdata['jobpost']?>">
   
     
  </div>
  <input type="submit"  name="submit" value = "Update" />
</form>

  <a href="display.php" class="check-btn">Check</a>
</div>
</section>

</body>
</html> 

