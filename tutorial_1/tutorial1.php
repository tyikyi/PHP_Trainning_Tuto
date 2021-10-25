<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial1</title>
</head>
<body>
<table style="margin: auto">
    <?php
        for($row=1;$row<=8;$row++){
            echo "<tr>";
            for($col=1;$col<=8;$col++){
                if($col %2 == 0){
                    $color='#000';
                }else{
                    $color='#fff';
                }
                if($row % 2==0){
                    if($col %2 == 0){
                        $color='#fff';
                    }else{
                        $color='#000';
                    }  
                }
                echo "<td style='border:1px solid; height:90px; width:90px; background-color:$color;'>  </td>";
            }
            echo "</td>";
        }
    ?>
</table> 
</body>
</html>