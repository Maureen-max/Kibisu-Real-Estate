<?php include'header.php';?>
<?php
include 'connect.php';

  if (isset($_POST['submit'])){

      #fetching our data from form
      $firstName = $_POST["firstName"];
      $secondName =$_POST["secondName"];
      $emailAddress = $_POST["emailAddress"];
      $phoneNumber = $_POST["phoneNumber"];
      $message = $_POST["message"];

      #query
      $sql = "INSERT INTO `clients`(`firstName`,`secondName`, `emailAddress`, `phoneNumber`,`message`) 
                 VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber','$message ') ";

      #execute the query
      $result = mysqli_query($link,$sql);

      #checking for results
      if ($result){
          echo "Record added successfully";
          
      } else{
          echo "Error executing this query $sql".mysqli_error($link);
      }
  } 


?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
    <form action="contact.php" method="post">


                <input type="text" class="form-control" placeholder="First Name" name = "firstName">
                <input type="text" class="form-control" placeholder="Second Name" name = "secondName">
                <input type="text" class="form-control" placeholder="Email Address" name = "emailAddress">
                <input type="text" class="form-control" placeholder="Contact Number" name = "phoneNumber">
                <textarea rows="6" class="form-control" placeholder="Message" name = "message"></textarea>
                <input type="submit" class="btn btn-success" name="submit" value="SUBMIT">
      <!--<input type="submit" class="btn btn-success" name="submit"/>-->
          

</form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=kasarani,Nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe></div>
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>