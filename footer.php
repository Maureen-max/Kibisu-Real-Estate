<?php
include "connect.php";
if (isset($_POST['submit'])){

    #fetching our data from form
   
    $Email = $_POST["Email"];

    #query
    $sql = "INSERT INTO `newsletter`(`Email`) 
               VALUES ('$Email') ";

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
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
               <!-- <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>-->
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form" action = "footer.php" method="POST">
                            <input type="text" placeholder="Enter Your email address"  name = "Email" class="form-control">
                                   <input type = "button"  class="btn btn-success" value="Submit" name= "submit"/>
                               <!--<button class="btn btn-success" type="button" name="submit" >Notify Me!</button>-->
                              </form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Kibisu Real Estates.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Kasarani, Nairobi <br>
<span class="glyphicon glyphicon-envelope"></span> mjemutai54@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> (+254) 721 744 025 </p>
            </div>
        </div>
<p class="copyright">&copy Copyright 2022. All rights reserved.	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



