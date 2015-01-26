<?php

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\styles.php">
</head>

<body> 
    <div id="enkelt">
    <?php require '../fl/opretkatalog.php';
    
         $id = $_GET['id'];  
         $info_array= get_variant_info($id);
    ?>    
        
    
        <img src ="..\billeder\<?php echo $info_array[0][3]; ?> ">
        <p>
        <?php echo $info_array[0][1]; ?>
        </p>
    
        
        
        
        
    </div>
</body>



    
    
    
    
    
    
    
    
</html>