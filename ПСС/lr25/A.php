<html> 
<head> 
<title>Web-страница</title> 
</head> 
<body>  
<?php 
$todaysdate = date("m",time()) . "-" . date("d",time()) . "-" . date("Y",time()); 
echo $todaysdate; 
?> 
</body> 
</html> 
