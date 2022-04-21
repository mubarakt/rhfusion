


<?php

    $id = $_GET['id'];
include "conn.php";
$query = "SELECT * FROM orders where order_id like '$id'";

echo '<html><head><link href="./main.css" rel="stylesheet"</head><body>
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
            <td>'.$field8name.'</td> <td>'.$field25name.'</td>
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td> 
                <td>'.$field12name.'</td><td>'.$field13name.'</td><td>'.$field14name.'</td><td>'.$field15name.'</td><td>'.$field16name.'</td>
                 <td>'.$field17name.'</td><td>'.$field18name.'</td><td>'.$field19name.'</td><td>'.$field20name.'</td>';
                  
             
                    }
    mysqli_close($con);
}    echo '</tr></tbody></table></div></div></div></body></html>';
       
        

?> 
