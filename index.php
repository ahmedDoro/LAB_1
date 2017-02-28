
<!DOCTYPE html> 
<html> 
<head> 
    <title>selfreference</title> 
</head> 
<body> 
    <?php  if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
//execute if requested using HTTP GET Method 
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    // execute if requested using HTTP POST Method  } 
     else { 
    // this is impossible  } 
     ?> 
</body> 
</html>