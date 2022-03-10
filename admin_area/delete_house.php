<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_house'])){
        
        $house_id = $_GET['delete_house'];
        
        $delete_house= "delete from products where house_id='$house_id'";
        
        $run_delete = mysqli_query($con,$delete_house);
        
        if($run_delete){
            
            echo "<script>alert('One of your houses has been Deleted From the Database')</script>";
            
            echo "<script>window.open('index.php?view_house','_self')</script>";
            
        }
        
    }

?>

<?php } ?>