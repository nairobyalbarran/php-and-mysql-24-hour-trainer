<?php
$myClass=  filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);?>
<div class="<?php echo $myClass;?>">Text goes here</div>
        

