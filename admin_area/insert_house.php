<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Apartment</title>
</head>
<body>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert Apartments
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Insert Apartments
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Apartment Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_title" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Agent </label> 
                      
                      <div class="col-md-6">
                          
                          <select name="manufacturer" class="form-control">
                              
                              <option selected disabled> Select an Agent</option>
                              
                              <?php 
                              
                              $get_agent= "select * from agent";
                              $run_agent= mysqli_query($con,$get_agent);
                              
                              while ($row_agent=mysqli_fetch_array($run_agent)){
                                  
                                  $agent_id = $row_agent['agent_id'];
                                  $agent_title = $row_agent['agent_title'];
                                  
                                  echo "
                                  
                                  <option value='$agent_id'> $agent_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Apartment Image 1 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img1" type="file" class="form-control" required>
                          
                      </div>
                       
                   </div>>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Apartment Image 2 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img2" type="file" class="form-control">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Apartment Image 3 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          
                      </div>
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label">Rent </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_price" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Apartment Desc </label> 
                      
                      <div class="col-md-6">
                          
                          <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
                   
               </form>
               
           </div>
            
        </div>
        
    </div>
    
</div>
   
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $agent_id = $_POST['agent'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"images/$product_img1");
    move_uploaded_file($temp_name2,"images/$product_img2");
    move_uploaded_file($temp_name3,"images/$product_img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
}

?>


<?php } ?>