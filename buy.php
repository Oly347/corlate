<?php
include ('admin/system/database.php');
include ('admin/employee.cls.php');

$obj_comp = new component_inc ;
 
//$rowPrice = $obj_emp->getPrice();

//$rowEmployee = $obj_emp->getEmployee();
//echo $_GET['id'];

$rowProductPC = $obj_comp->getProductPCById($_GET['id']);
//  echo "<pre>";
//  print_r($rowProductPC);
// echo "</pre>";
// exit;
foreach ($rowProductPC as $key => $value) {
    $product_no=$value['product_no'];
    $cabinet=$value['cabinet'];
    $product_weight=$value['product_weight'];
    $product_dimensions=$value['product_dimensions'];
    $processor_brand=$value['processor_brand'];
    $processor_type=$value['processor_type'];
    $ram_size=$value['ram_size'];
    $ram_type=$value['ram_type'];
    $hard_disk_size=$value['hard_disk_size'];
    $hard_disk_tech=$value['hard_disk_tech'];
    $operating_system=$value['operating_system'];
    $g_card=$value['g_card'];
    $additional_information=$value['additional_information'];
    $product_price=$value['product_price'];

}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <title>Create Record</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="dist/css/BsMultiSelect.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Buy Product</h2>
                    </div>
                    <!-- <p>Please edit the input values and submit to update the record.</p> -->
                    <form  action="#" method="post" id="employeeForm" >
                        <div class="form-group">
                            <label>Product Number</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $product_no; ?>" readonly>
            <input type="hidden" name="emp_id"  class="form-control" value="<?php echo $_GET['id']; ?>">
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Cabinet</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $cabinet; ?>" readonly>
                            
                        </div>


                        <div class="form-group">
                            <label>Product Weight</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $product_weight; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Product Dimensions</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $product_dimensions; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Processor Brand</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $processor_brand; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Processor type</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $processor_type; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>RAM Size</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $ram_size; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>RAM Type</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $ram_type; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Hard Disk size</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $hard_disk_size; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Hard Disk Technology</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $hard_disk_tech; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Operating system</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $operating_system; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Graphic Card</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $g_card; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Additional Information</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $additional_information; ?>" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="exprience" class="form-control" value="<?php echo $product_price; ?>" readonly>
                            
                        </div>


                     </div>


    
                        

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="dist/js/BsMultiSelect.js"></script>
<!-- <script>$("select").bsMultiSelect();</script> -->
</html>