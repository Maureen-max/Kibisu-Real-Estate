<?php include'header.php';?>
<?php

include "connect.php";
if(isset($_POST['Submit'])){
  $fullName = $_POST['fullName'];
  $emailAddress = $_POST['emailAddress'];
  $phoneNumber = $_POST['phoneNumber'];
  $message = $_POST['message'];

  $sql =  "INSERT INTO `inquiry`(`fullName`, `emailAddress`,`phoneNumber`, `message`)
  VALUES('$fullName' , '$emailAddress','$phoneNumber','$message')";

  $result = mysqli_query($link,$sql);
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
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Garden city</a></h5>
                  <p class="price">Ksh 100,000</p> </div>
              </div>
<div class="row">
              <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Kasarani</a></h5>
                  <p class="price">Ksh 50,000</p>
                 </div>            
                  </div>

<div class="row">
          <!--Additional row-->
              </div>

<div class="row">
             <!--Additional row-->
              </div>

</div>



<div class="advertisement">
  <h4>Design Structure</h4>
  <h6><em>By Steven Kariuki<br><a href = "maito:steve@gmail.com">steve@gmail.com</a></em></h6>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">

<h2>3 room and 1 kitchen apartment</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/properties/4.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="images/properties/2.jpg" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="images/properties/1.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="images/properties/3.jpg" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p>3 bedroom duplex apartment to let<br/>
*Located in Thika road in Garden city mall residence this amazing duplex apartment is available for rent<br/>
3 Bdrm & dsq en-suite<br/>
*Amenities*<br/>
- Swimming pool<br/>
- Gym<br/>
- Club House<br/>
- Garden<br/>
- Children's play area<br/>
- Full back-up Generator<br/>
- Borehole<br/>
- Ample Parking & Security</p><br/>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://maps.google.com/maps?q=gardencity,Nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">Ksh 100,000</p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> Garden city ,Nairobi</p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p>John Parker<br>0722 222 222</p>
  </div>
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form" action="property-detail.php" method="post">
                <input type="text" class="form-control" placeholder="Full Name" name = "fullName"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com" name= "emailAddress"/>
                <input type="text" class="form-control" placeholder="your number" name = "phoneNumber"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?" name = "message"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>