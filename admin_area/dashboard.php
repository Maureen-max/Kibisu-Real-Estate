<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            
            <div class="panel-heading"  style = "background-color:blue;">
                <div class="row" >
                    <div class="col-xs-3">
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_house; ?> </div>
                           
                        <div>Apartments </div>
                        
                    </div>
                    
                </div>
            </div>
            <!--Pull left and pull right -is used as a float-->
            <a href="#">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right"> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-green begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                           
                        <div> Customers </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?view_customers"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><
                    
                    <div class="col-xs-9 text-right">
                       <!-- <div class="huge"> <?php echo $count_customers; ?> </div>-->
                           
                        <div> Users </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_users">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
</div>

                            
                        </tbody>
                        
                    </table>
                </div>
                

                
            </div>
            
        </div>
    </div>
    
  
    
</div>


<?php } ?>