<?php
include 'connect.php';

  if (isset($_POST['submit'])){

      #fetching our data from form
      $userName= $_POST["userName"];
      $password =$_POST["password"];
     

      #query
      $sql = "INSERT INTO `login`(`userName`,`password`) 
                 VALUES ('$userName','$password') ";

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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  text-align: center;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 5%;
 

}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;

}

img.avatar {
  width: 15%;
  border-radius: 75%;
  align-items: center;
  margin-right: 0%;

}

.container {
  padding: 8px;
  width: 30%;
  margin-left:38%;
  margin-right: 0%;
}

span.psw {
  float: right;
  padding-top: 8px;
}


/* The Close Button (x) */
.close {
 /* position: absolute;*/
  left: 60%;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 40%;
  }
}
</style>
</head>
<body>


<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div  style="text-align: center;">
  
 <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
     <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
      <img src="images/avatar.jpg" alt="Avatar" class="avatar">
    </div

    <div class="container" >
      <label for="uname" ><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="userName" required>
<br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        <br>
      <button type="submit" href = "#" name="submit" href = "admin/home.php">Login</button>
      <label>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
//var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
  //  if (event.target == modal) {
    //    modal.style.display = "none";
    //}
//}
</script>

</body>
</html>
