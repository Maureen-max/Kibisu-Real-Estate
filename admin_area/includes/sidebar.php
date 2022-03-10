<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Adminstrator</a>
        
    </div>
    
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                <i class="fa fa-user"></i> <?php echo " <h6>Kibisu Estates</h6>";  ?> <b class="caret"></b>
                
            </a>
            
            <ul class="dropdown-menu">
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a>
                </li>
                
                <li><!-- li begin -->
                    <a href="index.php?view_houses">
                        
                        <i class="fa fa-fw fa-envelope"></i> Apartments
                        
                        <span class="badge"><?php echo $count_house; ?></span>
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_customers">
                        
                        <i class="fa fa-fw fa-users"></i> Customers
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
    </a>
                </li>
                
               
                
                <li class="divider"></li>
                
                <li>
                    <a href="logout.php">
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a>
                </li>
                
            </ul>
            
        </li>
        
    </ul>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard">
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                        
                        <i class="fa fa-fw fa-tag"></i>Apartments
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="products" class="collapse">
                    <li><!-- li begin -->
                        <a href="index.php?insert_house"> Insert Apartment </a>
                    </li>
                    <li>
                        <a href="#"> View Apartments</a>
                    </li>
                </ul>
                
            </li>
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#manufacturer">
                        
                        <i class="fa fa-fw fa-star"></i> Agent
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="manufacturer" class="collapse">
                    <li><!-- li begin -->
                        <a href="index.php?insert_agent"> Insert Agent </a>
                    </li>
                    <li>
                        <a href="index.php?view_agent"> View Agent </a>
                    </li>
                </ul>
                
            </li>

            <li><!-- li begin -->
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a>
            </li>
            
       <!--Users section-->
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                        
                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="users" class="collapse">
                    <li>
                        <a href="index.php?insert_user"> Insert User </a>
                    </li>
                    <li>
                        <a href="index.php?view_users"> View Users </a>
                    </li>
                    <li>
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User Profile </a>
                    </li>
                </ul>
                
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a>
            </li>
            
        </ul>
    </div>
    
</nav>


<?php } ?>