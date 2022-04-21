<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['status'] == true) {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
    $role_no = $_SESSION['role_no'];
    
} else {
  
    echo '<script type="text/javascript">alert("Please Login First");window.location=\'index_login.php\';</script>';
}
if($role_no == 2){
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RH FUSION</title>    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="Yes")
{
$("#col_text").show();
}
else
{
$("#col_text").hide();
}
});
});
</script> 
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo"><img src=".\assets\images\logo.png">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Collection Assign
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Drivers availability
                            </a>
                        </li>
                        
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                       <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                               <a href="logout.php"> <button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $name; ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php echo $role; ?>
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>

        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div><?php include "sidebar.php" ?>;</div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                      <!--  <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-graph text-success">
                                        </i>
                                    </div>
                                    <div>Please register the order 
                                        <div class="page-title-subheading">Please fill all necessary details inorder to assign to a driver
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Notifications
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">0</div>
                                                    </a>
                                                </li>
                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>    --!>        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Update status</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Register new orders</h5>
                                    <?php
                                    
                                    include "functions.php";
    if(isset($_POST['submit'])){
        save_order();
        
    } 
?>
                                        <form class="" method="post" action="">
                                            <div class="form-row">                                            
                                             <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Full Name</label><input name="name" id="name" type="name" class="form-control" required><div class="invalid-feedback">
                                                    Please choose a username.
                                                </div></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup date</label><input name="date" id="date" type="date"
                                                                                                                                                             class="form-control" required></div>
                                                </div>   <div class="col-md-3">                                                                                                          
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup time</label><input name="time" id="time" placeholder="Enter time to pickup" type="time"
                                                                                                                                                             class="form-control" required></div>
                                                </div>                                                                                                            
                                                </div> <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Emirates ID / Passport No.</label><input name="eid" id="eid" type="text" class="form-control" required></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Nationality</label><?php include "country.php";?></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Mobile</label><input name="mobile" id="mobile" type="tel"
                                                                                                                                                             class="form-control" required></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Email</label><input name="email" id="email" type="email"
                                                                                                                                                             class="form-control" required></div>
                                                </div>
                                            </div>
                                            <div class="form-row"> <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">DOB</label><input name="b_date" id="b_date" placeholder="Enter date of birth" type="date"
                                                                                                                                                             class="form-control" required></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Door No.</label><input name="door" id="exampleCity" type="text" class="form-control" required></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Floor No.</label><input name="floor" id="exampleState" type="text" class="form-control" required></div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Building Name</label><input name="bldg" id="makani no" type="text" class="form-control" required></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Area</label><input name="area" id="exampleCity" type="text" class="form-control" required></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Emirate</label><select id="emirate" name="emirate" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" required>
     <option value="">--Select Emirate--</option>
     <option value="DUBAI">DUBAI</option>
     <option value="SHARJAH">SHARJAH</option>
     <option value="AJMAN">AJMAN</option>
     <option value="ABUDHABI">ABDUHABI</option>
     <option value="RAK">RAK</option>
     <option value="FUJAIRAH">FUJAIRAH</option>
     <option value="UMQ">UMQ</option>
     
   
</select></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Landmark (Detail)</label><input name="landmark" id="exampleState" type="text" class="form-control" required></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Makani No. (Optional)</label><input name="makani" id="makani no" type="text" class="form-control" required></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Service Details</label><select id="service" name="service" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" required>
     <option value="">--Select Service--</option>
     <option value="COVID-19 PCR Home Collection">COVID-19 PCR Home Collection</option>
     <option value="Appointment Booking">Appointment Booking</option>
     <option value="General Enquiry">General Enquiry</option>
     <option value="Others">Others</option>
   
</select></div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Multiple Collection</label>
                                                   <div class="form-row"> <label class="">&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="radio" name="collection" value="No" checked="checked" /> &nbsp;&nbsp;<label>NO &nbsp;&nbsp;</label><input type="radio" name="collection" value="Yes" />&nbsp;&nbsp;YES &nbsp;&nbsp;
                                                   </div></div>
                                            </div>
                                        <div class="col-md-3" id="mubz"> <div class="position-relative form-group"><label for="exampleCity" class="">Select count</label><select style="display: none;" id="col_text" name="col_text" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="1">--Select Count--</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
   
</select></div> 
                            </div>                </div>
                                            
                                            
                                       <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm" />
                                            <!--<button class="mt-2 btn btn-primary">Save</button>--!>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Recent active orders entered by you
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Order ID</th>
                                                <th>Name</th>
                                                 <th class="text-center">Pickup Date</th>
                                                <th class="text-center">Pickup Time</th>
                                                <th class="text-center">Mobile</th>
                                                <th class="text-center">Emirate</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Entry Time</th>
                                                <th class="text-center">Edit</th>
                                                 <th class="text-center">Details</th>
                                                
                                            </tr>
                                            </thead>
                                            <?php include "disp_order.php"; disp_order1(); ?>
                                        </table>
                                    </div>
                                    <!--<div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div>--!>
                                </div>
                            </div>
                        
                    
                 </div><?php include "footer.php" ?>   </div>
             
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Update order status</h5>
                                     <?php
                                    
                                    
   
    search();
?>
                                    </div></div></div>
        
                 
                 
                 
                     </div>
                 
                 
                 
                  
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<?php } else{
echo '<script type="text/javascript">alert("you dont have permission to access this page..Sorry!!");window.location=\'index_login.php\';</script>';}