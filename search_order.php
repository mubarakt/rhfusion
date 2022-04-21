<?php

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
        if($field18name==1){
            $st = 'pending';
        }
        if($field18name==2){
            $st = 'assigned to driver';
        }
        if($field18name==3){
            $st = 'sample collected';
        }
        if($field18name==4){
            $st = 'sample delivered';
        }
       
        
        $field19name = $row["user"];
        $field20name = $row["stamp"];
               
                     
                   

        
                     

?> 


<hr /><br />

&nbsp;&nbsp;&nbsp;<----  Back to <a href='new_entry.php'>HOMEPAGE</a><hr /><br />
<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Register new orders</h5>
                                    <?php
                                    
                                    include "functions.php";
    if(isset($_POST['submit'])){
        edit_order_details();
    } 
?><html><head><link href="./main.css" rel="stylesheet"></head>
                                        <form class="" method="post" action="">
                                            <div class="form-row">                                            
                                             <div class="col-md-6"><input name="id" id="id" value="<?php echo $field1name;?>" hidden="true" type="text" class="form-control">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Full Name</label><input name="name" id="name" value="<?php echo $field2name;?>" type="name" class="form-control" required><div class="invalid-feedback">
                                                    Please choose a username.
                                                </div></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup date</label><input name="date" id="date" value="<?php echo $field3name;?>" type="date"
                                                                                                                                                             class="form-control"></div>
                                                </div>   <div class="col-md-3">                                                                                                          
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Pickup time</label><input name="time" id="time" value="<?php echo $field4name;?>" type="time"
                                                                                                                                                             class="form-control"></div>
                                                </div>                                                                                                            
                                                </div> <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Emirates ID / Passport No.</label><input name="eid" id="eid" value="<?php echo $field5name;?>" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Nationality</label><?php include "country.php";?></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Mobile</label><input name="mobile" id="mobile" value="<?php echo $field7name;?>" type="tel"
                                                                                                                                                             class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Email</label><input name="email" id="email" value="<?php echo $field8name;?>" type="email"
                                                                                                                                                             class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-row"> <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">DOB</label><input name="b_date" id="b_date" value="<?php echo $field25name;?>" type="date"
                                                                                                                                                             class="form-control"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Door No.</label><input name="door" id="exampleCity" value="<?php echo $field9name;?>" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Floor No.</label><input name="floor" id="exampleState" value="<?php echo $field10name;?>" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Building Name</label><input name="bldg" id="makani no" type="text" value="<?php echo $field11name;?>" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Area</label><input name="area" id="exampleCity" value="<?php echo $field12name;?>" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Emirate</label><select id="emirate" name="emirate" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field13name;?>"><?php echo $field13name;?></option>
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
                                                    <div class="position-relative form-group"><label for="exampleState" class="">Landmark (Detail)</label><input name="landmark" value="<?php echo $field14name;?>" id="exampleState" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Makani No. (Optional)</label><input name="makani" value="<?php echo $field15name;?>" id="makani no" type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">Service Details</label><select id="service" name="service" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field16name;?>"><?php echo $field16name;?></option>
     <option value="COVID-19 PCR Home Collection">COVID-19 PCR Home Collection</option>
     <option value="Appointment Booking">Appointment Booking</option>
     <option value="General Enquiry">General Enquiry</option>
     <option value="Others">Others</option>
   
</select></div>
                                            </div>
                                            
                                        <div class="col-md-3" id="mubz"> <div class="position-relative form-group"><label for="exampleCity" class="">Select Collection Count</label><select id="col_text" name="col_text" class="form-control" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="<?php echo $field17name;?>"><?php echo $field17name;?></option>
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
                                            
                                            
                                       <input type="submit" name="submit" value="Update" class="btn btn-primary btn-sm" />
                                            <!--<button class="mt-2 btn btn-primary"></button>--!>
                                        </form>
                                    </div>
                                </div></html>


<?php  }
    mysqli_close($con);
}    
?>






