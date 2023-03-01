<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.html</title>
    
</head>
<body>
<h4>GPA Calculator Using Switch case </h4>
<?php
$marks = +55;

switch ($marks) {
    case ($marks >=80 && $marks <=100):
        echo "You Got A+";
        break;

    case ($marks >=70 && $marks <=79):
        echo "you got A";
        break;
    case ($marks >= 60 && $marks <= 69 ):
        echo "you got A-";
        break;
    case ($marks >= 50 && $marks <59):
        echo "you got B";
        break;
    case ($marks >=40 && $marks <=49):
        echo "you got C";
        break;
    case ( $marks >=33 && $marks <=39):
        echo "you got D";
        break;
    case ($marks >=0 && $marks <=32):
        echo "you got F";
        break;
    default : echo "invalid number";

}




?>


    
</body>
</html>