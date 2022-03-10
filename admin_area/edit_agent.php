<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php  

        if(isset($_GET['edit_agent'])){

            $edit_agent = $_GET['edit_agent'];
            $get_agent = "select * from agent where agent_id='$edit_agent'";
            $run_agent = mysqli_query($con,$get_agent);
            $row_agent= mysqli_fetch_array($run_agent);

            $m_id = $row_agent['agent_id'];
            $m_title = $row_agent['agent_title'];
            $m_top = $row_agent['agent_top'];
            $m_image = $row_agent['agent_image'];

        }

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Update Agent
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                
                    <i class="fa fa-money fa-fw"></i> Update Agent
                
                </h3>
            </div>
            
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                       Agent Name 
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input name="agent_name" type="text" class="form-control" value="<?php echo $m_title; ?>">
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                            Choose As Top Agent
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input name="agent_top" type="radio" value="yes"

                                <?php 
                                
                                    if($m_top=='no'){}else{echo "checked='checked'";}
                                
                                ?>
                            
                            >
                            <label>Yes</label>
                        
                            <input name="agent_top" type="radio" value="no"
                            
                                <?php 
                                
                                    if($m_top=='no'){echo "checked='checked'";}
                                
                                ?>
                            
                            >
                            <label>No</label>
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                        Agent Image
                        
                        </label> 
                        <div class="col-md-6">
                        
                            <input type="file" name="agent_image" class="form-control">
                          
                          <br>
                          
                          <img width="70" height="70" src="other_images/<?php echo $m_image; ?>" alt="<?php echo $m_image; ?>">
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                        <div class="col-md-6">
                        
                            <input type="submit" name="update" value="Update agent" class="btn btn-primary form-control">
                        
                        </div>
                    
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>

<?php  

    if(isset($_POST['update'])){
        
        $agent_name = $_POST['agent_name'];
        
        $agent_top = $_POST['agent_top'];

        if(is_uploaded_file($_FILES['agent_image']['tmp_name'])){
        
            $agent_image = $_FILES['agent_image']['name'];
            
            $temp_name = $_FILES['agent_image']['tmp_name'];
                
            move_uploaded_file($temp_name,"other_images/$agent_image");
            
            $update_agent= "update agent set agent_title='$agent_name',agent_top='$agent_top',agent_image='$agent_image'where agent_id='$m_id'" ;
            
            $run_agent = mysqli_query($con,$update_agent);

            if($run_agent){
            
                echo "<script>alert('Your agent has been updated')</script>";
                
                echo "<script>window.open('index.php?view_agent','_self')</script>";

            }

        }else{
            
            $update_agent= "update agent set agent_title='$agent_name',agent_top='$agent_top' where agent_id='$m_id'" ;
            
            $run_agent = mysqli_query($con,$update_agent);

            if($run_agent){
            
                echo "<script>alert('Your agent has been updated')</script>";
                
                echo "<script>window.open('index.php?view_agent','_self')</script>";

            }

        }
        
    }

?>

<?php } ?>