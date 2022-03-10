<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Agent
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                
                    <i class="fa fa-money fa-fw"></i> Insert Agent
                
                </h3>
            </div>
            
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                        Agent Name 
                        
                        </label>
                        
                        <div class="col-md-6">
                            <input name="agent_name" type="text" class="form-control">
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                            Choose As Top Agent
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input name="agent_top" type="radio" value="yes">
                            <label>Yes</label>
                        
                            <input name="agent_top" type="radio" value="no">
                            <label>No</label>
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                        Agents Image
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input type="file" name="agent_image" class="form-control">
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3"> 
                        
                        <div class="col-md-6">
                        
                            <input type="submit" name="submit" value="Submit agent" class="btn btn-primary form-control">
                        
                        </div>
                    
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<?php  

    if(isset($_POST['submit'])){
        
        $agent_name = $_POST['agent_name'];
        
        $agent_top = $_POST['agent_top'];
        
        $agent_image = $_FILES['agent_image']['name'];
        
        $temp_name = $_FILES['agent_image']['tmp_name'];
            
        move_uploaded_file($temp_name,"other_images/$agent_image");
        
        $insert_agent = "insert into agent (agent_title,agent_top,agent_image) values ('$agent_name','$agent_top','$agent_image')";
        
        $run_agent = mysqli_query($con,$insert_agent);
        
        echo "<script>alert('Your new agent has been inserted')</script>";
        
        echo "<script>window.open('index.php?view_agent','_self')</script>";
        
    }

?>

<?php } ?>