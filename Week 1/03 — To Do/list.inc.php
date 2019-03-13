<?php
    
    foreach($toDo as $t):
        if($t["time"] <= 1 ){
?>
<li class="less"><?php echo $t["description"] ?> </li>
<hr>
<?php
        }elseif($t["time"] >= 1 && $t["time"] <= 5 ){
?>
<li class="medium"><?php echo $t["description"] ?> </li>
<hr>
<?php            
        }elseif($t["time"] >= 5){
?>
<li class="most"><?php echo $t["description"] ?> </li>
<hr>
<?php            
        }
    endforeach;
?>