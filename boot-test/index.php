<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['adminid'];
        
        $admin_name = $row_admin['name'];
        
        $admin_email = $row_admin['email'];
        
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_food'])){
                        
                        include("parse_food.php");
                        
                }   if(isset($_GET['insert_clothes'])){
                        
                        include("parse_clothes.php");
                        
                }   if(isset($_GET['insert_travel'])){
                        
                        include("parse_travel.php");
                        
                }   if(isset($_GET['single'])){
                        
                        include("single_ins.php");
                        
                }   if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }   if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }   if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }   if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }   if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }   if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }   if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }   if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                }   if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }   if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                }   if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }   if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                }   if(isset($_GET['view_payments'])){
                        
                        include("view_payments.php");
                        
                }   if(isset($_GET['delete_payment'])){
                        
                        include("delete_payment.php");
                        
                }   if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }   if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>