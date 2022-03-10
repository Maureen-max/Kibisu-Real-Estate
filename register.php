<?php include'header.php';?>

<?php 
include 'admin_area/includes/db.php';
if(isset($_POST['Submit'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    
/*  $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");*/
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
   /* $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);*/
    
    if($run_customer){
        
        /// If register have items in cart ///
        
      /*  $_SESSION['customer_email']=$c_email;*/
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action = "register.php" method = "POST">

                <input type="text" class="form-control" placeholder="Full Name" name="c_name">
                <input type="text" class="form-control" placeholder="Work Email" name="c_email">
                <input type="password" class="form-control" placeholder="Password" name="c_pass">
                <input type="text" class="form-control" placeholder="Number of family members" name="c_country">
                <input type="text" class="form-control" placeholder="current home" name="c_city">
                <input type="text" class="form-control" placeholder="Phone" name="c_contact">
                <input type="text" class="form-control" placeholder="Address" name="c_address">
              

              <!--  <textarea rows="6" class="form-control" placeholder="Address" name="formMessage"></textarea>-->
      <button type="submit" class="btn btn-success"  name="Submit"  ><a href = "#loginpop" style="color:black">Register</button>
</form>


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>