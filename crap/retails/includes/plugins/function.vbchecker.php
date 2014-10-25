<?php
function smarty_function_vbchecker($params, &$smarty)
{
    $length = strlen($params['vbstring']);
    $output = "Your sentence is too long. Shorten It!";
    if($length < 50)
        $output = "Your sentence is just right!";
    
    return $output;
}
?>
