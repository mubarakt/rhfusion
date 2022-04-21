
<?php
function disp_order1(){
include "conn.php";
$query = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 0, 10";

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["order_id"];
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
              
            ?>
<html>
<head>
</head>
<body>
<tbody>
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $field1name ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                           
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $field2name ?></div>
                                                                <div class="widget-subheading opacity-7">32 yrs</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" ><?php echo $field3name ?></td><td class="text-center"><?php echo $field4name ?></td>
                                                <td class="text-center">
                                                    <?php echo $field6name ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $field10name ?>
                                                </td>
                                                <td class="text-center">
                                                 <div class="badge badge-warning">   <?php echo $field12name ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $field14name ?>
                                                </td>
                                                <td class="text-center">
                                                <a href="edit_order.php?id=<?php echo $field1name; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                                                                   </td>
                                                <td class="text-center">
                                                    <a href="disp_order_detail.php?id=<?php echo $field1name; ?>" class="btn btn-primary btn-sm" target="_blank">Details</a>
                                                </td>
                                            </tr>
                                           
                                            </tbody>


</body>
</html><?php };         
                   

    }
    mysqli_close($con);
} 
function disp_order2(){
include "conn.php";
$query = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 0, 10";

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["order_id"];
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
              
            ?>
<html>
<head>
</head>
<body>
<tbody>
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $field1name ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                           
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $field2name ?></div>
                                                                <div class="widget-subheading opacity-7">32 yrs</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" ><?php echo $field3name ?></td><td class="text-center"><?php echo $field4name ?></td>
                                                <td class="text-center">
                                                    <?php echo $field6name ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $field10name ?>
                                                </td>
                                                <td class="text-center">
                                                 <div class="badge badge-warning">   <?php echo $field12name ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $field14name ?>
                                                </td>
                                               
                                                <td class="text-center">
                                                    <a href="disp_order_detail.php?id=<?php echo $field1name; ?>" class="btn btn-primary btn-sm" target="_blank">Details</a>
                                                </td>
                                            </tr>
                                           
                                            </tbody>


</body>
</html><?php };         
                   

    }
    mysqli_close($con);
} 

?> 
