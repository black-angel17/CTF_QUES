<pre>
<?php 

print_r($_SERVER);


print($_SERVER['PHP_SELF']);
echo' <br><br>';
print(__DIR__);
echo' <br><br>';
print(__FILE__);
$current_page = $_SERVER['PHP_SELF'];

// Use basename() to extract just the filename
$self = basename($current_page);
echo' <br><br>';
print($self);

// Check if HTTP_REFERER is set

    $referrer = $_SERVER['HTTP_REFERER'];
    $self = basename($referrer);




?>
</pre>
