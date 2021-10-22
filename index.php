<?php	
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<H1>Version A 2.0  </H1>
<H3> Hello - Abu Dhabi and Dubai </H1>
<img src="/a-abtesting.png">
<div>
<?php
 $hostname = getenv('HOSTNAME');
 echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'] ;
 echo "My Pod Name is : ".$hostname;
 ?>
</div>

