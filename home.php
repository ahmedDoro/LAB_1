
<html> 
<head> 
    <title>login system</title> 
</head> 
<body> 
<?php 

    if($_SERVER["REQUEST_METHOD"] === 'GET') { 
    echo "Show something"; //execute if requested using HTTP GET Method 
    }
    elseif ($_SERVER["REQUEST_METHOD"] === 'POST'){
     
    echo "Show something worked";
}

     else { 
     echo "Show something please";
     ?> 
</body> 
</html>