<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Pattern</title>
    <style type="text/css">
        #text
        {
            padding: 10px 10px 0px 185px;
        }
    </style>
</head>
<body>
    <h4 id="text">Dynamic Patter</h4>
    <div style="padding: 10px 20px 200px 200px;">
    <?php
    $n = 4;
    $value_char = 97;
    $value_num = 1;
    $k = 2 * $n - 2;
    ?>

        <?php for($i = 0; $i < $n; $i++): ?> 
        
            <?php for($j = 0; $j < $k; $j++): ?>
        
               &nbsp;
               <?php 
               $k = $k - 1;
               ?>
            
            <?php endfor; ?>
            <?php for($j = 0; $j <= $i; $j++ ): ?> 
            
                <?php
                $ch = chr($value_char); 
                ?> 
                <?php echo e($ch."".$value_num); ?> 
                <?php echo e(" "); ?>

                <?php
                $value_char = $value_char + 1;
                ?> 
                
            
            <?php endfor; ?>
            <?php
            $value_num = $value_num + 1;
            ?> 
            <br>
        
        <?php endfor; ?>
    </div> 
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/draw_dynamic_pattern/resources/views/draw_dynamic_pattern.blade.php ENDPATH**/ ?>