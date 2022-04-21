<?php
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
?>

=======================================================
echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Order_ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Pickup Date</font> </td> 
          <td> <font face="Arial">Pickup Time</font> </td> 
     
          
          <td> <font face="Arial">Mobile</font> </td> 
      <td> <font face="Arial">Area</font> </td> 
        <td> <font face="Arial">Emirate</font> </td> 
          <td> <font face="Arial">Makani</font> </td> 
          <td> <font face="Arial">Status</font> </td>
          <td> <font face="Arial">User</font> </td> 
          <td> <font face="Arial">Entry</font> </td>
          <td> <font face="Arial">Edit</font> </td>
      </tr>';

      echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
           
                  <td>'.$field6name.'</td> 
             <td>'.$field9name.'</td> 
              <td>'.$field10name.'</td> 
                  
                  <td>'.$field11name.'</td> 
                
                  <td>'.$st.'</td> 
                  <td>'.$field13name.'</td> 
                  <td>'.$field14name.'</td>
                 
                  <td><input type="submit" name="edit" value="edit" /></td>
                 
                
                        
              </tr>';

