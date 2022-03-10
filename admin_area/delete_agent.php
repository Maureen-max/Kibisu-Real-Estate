<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_agent'])){
        
        $delete_id = $_GET['delete_agent'];
        
        $delete_agent = "delete from agent where agent_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_agent);
        
        if($run_delete){
            
            echo "<script>alert('One of your Agents has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_agent','_self')</script>";
            
        }
        
    }

?>

<?php } ?>