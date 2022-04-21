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
function save_order(){
 include "conn.php";
    
    $name = $_POST['name'];
    $p_date = $_POST['date'];
     $p_time = $_POST['time'];
     $eid = $_POST['eid'];
     $ntnlty = $_POST['ntnlty'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
      $b_date = $_POST['b_date'];
     $door = $_POST['door'];
     $floor = $_POST['floor'];
     $bldg = $_POST['bldg'];
     $area = $_POST['area'];
     $emirate = $_POST['emirate'];
     $landmark = $_POST['landmark'];
     $makani = $_POST['makani'];
     $service = $_POST['service'];
     $col_text = $_POST['col_text'];
     
     
     $user = $name;
    if($service=="COVID-19 PCR Home Collection"){
     $sql = "INSERT INTO orders (order_id,name,p_date,p_time,eid,ntnlty,email,mobile,b_date,door,floor,bldg,area,emirate,landmark,makani,service,col_text,status,user)
     VALUES (DEFAULT,'$name','$p_date','$p_time','$eid','$ntnlty','$email','$mobile','$b_date','$door','$floor','$bldg','$area','$emirate','$landmark','$makani','$service','$col_text',DEFAULT,'$user')";
     if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success fade show" role="alert">New record has been added successfully !</div>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
     }
     else
     {
         echo '<div class="alert alert-warning fade show" role="alert">Service module not actiavted !</div>';
     }
}
function dis_order(){
    include "conn.php";
$query = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 0, 10";

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $dis1name = $row["order_id"];
        $field2name = $row["name"];
        $field3name = $row["p_date"];
        $field4name = $row["p_time"];
         
        
          $field6name = $row["mobile"];
       $field9name = $row["area"];
       $field10name = $row["emirate"];
        
          $field11name = $row["makani"];
        $field12name = $row["status"];
        $field13name = $row["user"];
        $field14name = $row["stamp"];
               
                     
                   

    }
    mysqli_close($con);
} 
}
function edit_order() 
{ echo 'Day removed'; }

  if (isset($_POST['edit'])) { return edit_order();}
   function collected_count(){
    include "conn.php";
$sql = "SELECT COUNT(*) FROM orders where status != 'unassigned' and status != 'Customer Unavailable' and status != 'Order Canceled'";
$qry_data = mysqli_query($con, $sql);
$count = mysqli_fetch_array($qry_data);
$totalCount = array_shift($count);
echo $totalCount;
}
  
  function order_count(){
    include "conn.php";
$sql = "SELECT COUNT(*) FROM orders where status != 'Order Canceled'";
$qry_data = mysqli_query($con, $sql);
$count = mysqli_fetch_array($qry_data);
$totalCount = array_shift($count);
echo $totalCount;
}

  function sample_count(){
    include "conn.php";
$sql = "SELECT SUM(col_text) from orders where status != 'Order Canceled' and status != 'unassigned' and status != 'Customer Unavailable'";
$qry_data = mysqli_query($con, $sql);
$count = mysqli_fetch_array($qry_data);
$totalCount = array_shift($count);
echo $totalCount;
}

function order_pending(){
    include "conn.php";
$sql = "SELECT count(status) from orders where status like 'unassigned'";
$qry_data = mysqli_query($con, $sql);
$count = mysqli_fetch_array($qry_data);
$totalCount = array_shift($count);
echo $totalCount;
mysqli_free_result($qry_data);
}

  function cust_count(){
    include "conn.php";
    $sql = "SELECT DISTINCT(eid) from orders";
    if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
}

  function todays_order(){
    include "conn.php";
    $sql = "SELECT count(*) from orders where entry like 'unassigned'";
    if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
}
  function rep_order(){
    include "conn.php";
$query = "SELECT * FROM orders ORDER BY order_id";


echo '<html><head></head><body>
                                     <div class="col-lg-30">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">COVID-19 PCR ORDER REPORT</h5>
                                        <table class="mb-0 table table-bordered">
     <thead> <tr> 
          <th>O_ID </th> 
          <th>Name </th> 
          <th>Pickup_Date</th> 
          <th>Pickup_Time</th> 
          <th>EID/Passport</th> 
          <th>Nationality</th>
     
          
          <th>Mobile</th> 
      <th>email</th> 
      <th>DOB</th> 
          <th>Door</th> 
          
          <th>Floor</th> 
          <th>Building</th>
          <th>Area</th>
          <th>Emirate</th>
          <th>Landmark</th>
          <th>Makani</th> 
          <th>Service</th>
          <th>S_Count</th>
          <th>Status</th>
          <th>User</th> 
          <th>Entry</th>
          
      </tr></thead>';

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["order_id"];
        $field2name = $row["name"];
        $field3name = $row["p_date"];
        $field4name = $row["p_time"];
         $field5name = $row["eid"];
        $field6name = $row["ntnlty"];
          $field7name = $row["mobile"];
          $field8name = $row["email"];
          $field25name = $row["b_date"];
          $field9name = $row["door"];
       
        $field10name = $row["floor"];
        $field11name = $row["bldg"]; 
          $field12name = $row["area"];
        $field13name = $row["emirate"];
        $field14name = $row["landmark"];
        $field15name = $row["makani"];
        $field16name = $row["service"];
        $field17name = $row["col_text"];
        $field18name = $row["status"];
        
       
        
        $field19name = $row["user"];
        $field20name = $row["stamp"];
               
                     
                   

        echo '<tbody><tr> 
                  <th>'.$field1name.'</th> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
            <td>'.$field8name.'</td><td>'.$field25name.'</td>
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td> 
                <td>'.$field12name.'</td><td>'.$field13name.'</td><td>'.$field14name.'</td><td>'.$field15name.'</td><td>'.$field16name.'</td>
                 <td>'.$field17name.'</td><td>'.$field18name.'</td><td>'.$field19name.'</td><td>'.$field20name.'</td>';
                  
             
                    }
    mysqli_close($con);
}    echo '</tr></tbody></table></div></div></div></body></html>';
}       
    
    function rep_unassigned(){
    include "conn.php";
$query = "SELECT * FROM orders where status like 'unassigned' ORDER BY order_id ";


echo '<html><head></head><body>
                                     <div class="col-lg-30">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">COVID-19 PCR ORDER REPORT (UNASSIGNED)</h5>
                                        <table class="mb-0 table table-bordered">
     <thead> <tr> 
          <th>O_ID </th> 
          <th>Name </th> 
          <th>Pickup_Date</th> 
          <th>Pickup_Time</th> 
          <th>EID/Passport</th> 
          <th>Nationality</th>
     
          
          <th>Mobile</th> 
      <th>email</th> 
      <th>DOB</th> 
          <th>Door</th> 
          
          <th>Floor</th> 
          <th>Building</th>
          <th>Area</th>
          <th>Emirate</th>
          <th>Landmark</th>
          <th>Makani</th> 
          <th>Service</th>
          <th>S_Count</th>
          <th>Status</th>
          <th>User</th> 
          <th>Entry</th>
          
      </tr></thead>';

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["order_id"];
        $field2name = $row["name"];
        $field3name = $row["p_date"];
        $field4name = $row["p_time"];
         $field5name = $row["eid"];
        $field6name = $row["ntnlty"];
          $field7name = $row["mobile"];
          $field8name = $row["email"];
          $field25name = $row["b_date"];
          $field9name = $row["door"];
       
        $field10name = $row["floor"];
        $field11name = $row["bldg"]; 
          $field12name = $row["area"];
        $field13name = $row["emirate"];
        $field14name = $row["landmark"];
        $field15name = $row["makani"];
        $field16name = $row["service"];
        $field17name = $row["col_text"];
        $field18name = $row["status"];
        
       
        
        $field19name = $row["user"];
        $field20name = $row["stamp"];
               
                     
                   

        echo '<tbody><tr> 
                  <th>'.$field1name.'</th> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
            <td>'.$field8name.'</td><td>'.$field25name.'</td>
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td> 
                <td>'.$field12name.'</td><td>'.$field13name.'</td><td>'.$field14name.'</td><td>'.$field15name.'</td><td>'.$field16name.'</td>
                 <td>'.$field17name.'</td><td>'.$field18name.'</td><td>'.$field19name.'</td><td>'.$field20name.'</td>';
                  
             
                    }
    mysqli_close($con);
}    echo '</tr></tbody></table></div></div></div></body></html>';
}       

function rep_completed(){
    include "conn.php";
$query = "SELECT * FROM orders where status like 'completed' ORDER BY order_id ";


echo '<html><head></head><body>
                                     <div class="col-lg-30">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">COVID-19 PCR ORDER REPORT (COMPLETED)</h5>
                                        <table class="mb-0 table table-bordered">
     <thead> <tr> 
          <th>O_ID </th> 
          <th>Name </th> 
          <th>Pickup_Date</th> 
          <th>Pickup_Time</th> 
          <th>EID/Passport</th> 
          <th>Nationality</th>
     
          
          <th>Mobile</th> 
      <th>email</th> 
      <th>DOB</th> 
          <th>Door</th> 
          
          <th>Floor</th> 
          <th>Building</th>
          <th>Area</th>
          <th>Emirate</th>
          <th>Landmark</th>
          <th>Makani</th> 
          <th>Service</th>
          <th>S_Count</th>
          <th>Status</th>
          <th>User</th> 
          <th>Entry</th>
          
      </tr></thead>';

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["order_id"];
        $field2name = $row["name"];
        $field3name = $row["p_date"];
        $field4name = $row["p_time"];
         $field5name = $row["eid"];
        $field6name = $row["ntnlty"];
          $field7name = $row["mobile"];
          $field8name = $row["email"];
          $field25name = $row["b_date"];
          $field9name = $row["door"];
       
        $field10name = $row["floor"];
        $field11name = $row["bldg"]; 
          $field12name = $row["area"];
        $field13name = $row["emirate"];
        $field14name = $row["landmark"];
        $field15name = $row["makani"];
        $field16name = $row["service"];
        $field17name = $row["col_text"];
        $field18name = $row["status"];
        
       
        
        $field19name = $row["user"];
        $field20name = $row["stamp"];
               
                     
                   

        echo '<tbody><tr> 
                  <th>'.$field1name.'</th> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
            <td>'.$field8name.'</td><td>'.$field25name.'</td>
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td> 
                <td>'.$field12name.'</td><td>'.$field13name.'</td><td>'.$field14name.'</td><td>'.$field15name.'</td><td>'.$field16name.'</td>
                 <td>'.$field17name.'</td><td>'.$field18name.'</td><td>'.$field19name.'</td><td>'.$field20name.'</td>';
                  
             
                    }
    mysqli_close($con);
}    echo '</tr></tbody></table></div></div></div></body></html>';
}       
        
function edit_order_details(){
 include "conn.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $p_date = $_POST['date'];
     $p_time = $_POST['time'];
     $eid = $_POST['eid'];
     $ntnlty = $_POST['ntnlty'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
      $b_date = $_POST['b_date'];
     $door = $_POST['door'];
     $floor = $_POST['floor'];
     $bldg = $_POST['bldg'];
     $area = $_POST['area'];
     $emirate = $_POST['emirate'];
     $landmark = $_POST['landmark'];
     $makani = $_POST['makani'];
     $service = $_POST['service'];
     $col_text = $_POST['col_text'];
     
     $status = $_POST['status'];
     $user = "salman";
    
     $sql = "UPDATE orders SET order_id = '$id',name = '$name' ,p_date = '$p_date',p_time = '$p_time',eid = '$eid',
     ntnlty = '$ntnlty',email = '$email',mobile = '$mobile',b_date = '$b_date',door = '$door',floor = '$floor',
     bldg = '$bldg',area = '$area',emirate = '$emirate',landmark = '$landmark',makani = '$makani',
     service = '$service',col_text = '$col_text',status = '$status',user = '$user' where order_id like '$id'";
     
     if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success fade show" role="alert">New record has been added successfully !</div>';
        header("Location: new_entry.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}

function search(){?><html><head>
<link href="./main.css" rel="stylesheet">
<style>
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #000000;
        border-top: none;
        cursor: pointer;
        background: #FFFFF1;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){ 
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        var res = $(this).parents(".search-box").find('input[type="text"]').val($(this).text().substring(13,9));
        $(this).parent(".result").empty();
       
    });
});
</script>

</head>
<body><form action="update_status.php" method="post">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Order ID..." name="id"/>
        
        <div class="result"></div>
    </div>
    <input type="submit" value="search"/>
   </form>
   
</body></html>
<?php
}


function update_st(){
 include "conn.php";
    $id = $_POST['id'];
    
     
     $status = $_POST['order_status'];
     $user = "salman";
    
     $sql = "UPDATE orders SET status = '$status' where order_id like '$id'";
     
     if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success fade show" role="alert">Status has been changed successfully !</div>';
        header("Location: index_nurse.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}

function update_front(){
 include "conn.php";
    $id = $_POST['id'];
    
     
     $status = $_POST['order_status'];
     $user = "salman";
    
     $sql = "UPDATE orders SET status = '$status' where order_id like '$id'";
     
     if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success fade show" role="alert">Status has been changed successfully !</div>';
        header("Location: index_front.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}

function update_driver(){
 include "conn.php";
    $id = $_POST['id'];
    
     
     $status = $_POST['order_status'];
     $user = "salman";
    
     $sql = "UPDATE orders SET status = '$status' where order_id like '$id'";
     
     if (mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success fade show" role="alert">Status has been changed successfully !</div>';
        header("Location: index_driver.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
}

function edit_search(){?><html><head>
<link href="./main.css" rel="stylesheet">
<style>
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #000000;
        border-top: none;
        cursor: pointer;
        background: #FFFFF1;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){ 
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        var res = $(this).parents(".search-box").find('input[type="text"]').val($(this).text().substring(13,9));
        $(this).parent(".result").empty();
       
    });
});
</script>

</head>
<body>
<?php if($rol_no == 5){?>
    <form action="show_order_call.php" method="post">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Order ID..." name="id"/>
        
        <div class="result"></div>
    </div>
    <input type="submit" value="search"/>
   </form>
      
<?php } else { ?>

    <form action="update_order_front.php" method="post">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Order ID..." name="id"/>
        
        <div class="result"></div>
    </div>
    <input type="submit" value="search"/>
   </form>
      
<?php } ?>
   
</body></html>
<?php
}
?>


