
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
include "conn.php"; // Using database connection file here

$id = $_POST['id'];
$id1= (int)$id;
include "conn.php";
$query = "SELECT * FROM orders where order_id like '$id1'";
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
               
                     
                   

        
                     

?> 


<hr /><br />

&nbsp;&nbsp;&nbsp;<----  Back to 
  <?php if($role_no == 2){ ?>
        <a href='index_front.php'>HOMEPAGE</a><hr /><br />
            <?php }
        elseif($role_no == 3) { ?>
            <a href='index_nurse.php'>HOMEPAGE</a><hr /><br /> 
        <?php }
         elseif($role_no == 4){ ?>
             <a href='index_driver.php'>HOMEPAGE</a><hr /><br />  <?php }; ?>
        
        
    


<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Update orders collection status</h5>
                                    <?php
                                    
                                    include "functions.php";
    if(isset($_POST['submit'])){
        if($role_no == 3){
            update_st();
        }
        elseif($role_no == 2){
            update_front();
        }
         elseif($role_no == 4){
            update_driver();
        }
        
    } 
?><html><head><link href="./main.css" rel="stylesheet"></head>
                                        <form class="" method="post" action="">
                                            <div class="form-row">                                            
                                             <div class="col-md-6"><input name="id" id="id" value="<?php echo $field1name;?>" hidden="true" type="text" class="form-control">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Full Name</label><input name="name" id="name" value="<?php echo $field2name;?>" type="name" class="form-control" readonly><div class="invalid-feedback">
                                                    Please choose a username.
                                                </div></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup date</label><input name="date" id="date" value="<?php echo $field3name;?>" type="date"
                                                                                                                                                             class="form-control" readonly></div>
                                                </div>   <div class="col-md-3">                                                                                                          
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup time</label><input name="time" id="time" value="<?php echo $field4name;?>" type="time"
                                                                                                                                                             class="form-control" readonly></div>
                                                </div>                                                                                                            
                                                </div> <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Emirates ID / Passport No.</label><input name="eid" id="eid" value="<?php echo $field5name;?>" type="text" class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Nationality</label><input type="text" value="<?php echo $field6name;?>" class="form-control" readonly/></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Mobile</label><input name="mobile" id="mobile" value="<?php echo $field7name;?>" type="tel"
                                                                                                                                                             class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Email</label><input name="email" id="email" value="<?php echo $field8name;?>" type="email"
                                                                                                                                                             class="form-control" readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row"> <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">DOB</label><input name="b_date" id="b_date" value="<?php echo $field25name;?>" type="date"
                                                                                                                                                             class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Door No.</label><input name="door" id="exampleCity" value="<?php echo $field9name;?>" type="text" class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Floor No.</label><input name="floor" id="exampleState" value="<?php echo $field10name;?>" type="text" class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Building Name</label><input name="bldg" id="makani no" type="text" value="<?php echo $field11name;?>" class="form-control" readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Area</label><input name="area" id="exampleCity" value="<?php echo $field12name;?>" type="text" class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Emirate</label><select id="emirate" name="emirate" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field13name;?>" readonly><?php echo $field13name;?></option>

     
   
</select></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Landmark (Detail)</label><input name="landmark" value="<?php echo $field14name;?>" id="exampleState" type="text" class="form-control" readonly></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Makani No. (Optional)</label><input name="makani" value="<?php echo $field15name;?>" id="makani no" type="text" class="form-control" readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Service Details</label><select id="service" name="service" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field16name;?>" readonly><?php echo $field16name;?></option>

   
</select></div>
                                            </div>
                                            
                                        <div class="col-md-3" id="mubz"> <div class="position-relative form-group"><label for="exampleCity" class="">Select Collection Count</label><select id="col_text" name="col_text" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field17name;?>" readonly><?php echo $field17name;?></option>

   
</select></div> 
                            </div>    
                            
                            
                            <div class="col-md-3" id="mubz" style="background-color: aqua;"> <div class="position-relative form-group"><label for="exampleCity" class="">Select Order Status</label>
                         
                         <?php
                            if($role_no == 2){
?>
                            <select id="order_status" name="order_status" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field18name;?>"><?php echo $field18name;?></option>
     <option value="Order Accepted">Order Accepted</option>
     <option value="Out for collection">Out for collection</option>
      <option value="Sample collected">Sample collected</option>
      <option value="sample delivered">sample delivered</option>
         <option value="completed">completed</option>
       <option value="Order Canceled">Order Canceled</option>
        <option value="unassigned">unassigned</option>
       
        <option value="Customer Unavailable">Customer Unavailable</option>

   
</select>
<?php }
                            elseif($role_no == 3){
                                if($field18name == "completed" || $field18name == "unassigned"){
                                   echo '<script type="text/javascript">alert("you dont have permission to update status for this order");window.location=\'index_nurse.php\';</script>'; 
                                }
?>
                            <select id="order_status" name="order_status" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field18name;?>"><?php echo $field18name;?></option>
    
     <option value="Out for collection">Out for collection</option>
      <option value="Sample collected">Sample collected</option>
      <option value="sample delivered">sample delivered</option>
        
       
        <option value="Customer Unavailable">Customer Unavailable</option>

   
</select>
<?php } 
                            if($role_no == 4){
                                
                                if($field18name == "completed" || $field18name == "unassigned"){
                                   echo '<script type="text/javascript">alert("you dont have permission to update status for this order");window.location=\'index_driver.php\';</script>'; 
                                }
?>
                            <select id="order_status" name="order_status" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field18name;?>"><?php echo $field18name;?></option>
     
     <option value="Out for collection">Out for collection</option>
      <option value="Sample collected">Sample collected</option>
      <option value="sample delivered">sample delivered</option>
       
        <option value="Customer Unavailable">Customer Unavailable</option>

   
</select>
<?php } ?>
</div> 
                            </div>  
                                        </div>
                                            
                                            
                                       <input type="submit" name="submit" value="Update" class="btn btn-primary btn-sm" />
                                            <!--<button class="mt-2 btn btn-primary"></button>--!>
                                        </form>
                                    </div>
                                </div></html>


<?php  }
    mysqli_close($con);
}    
?>






