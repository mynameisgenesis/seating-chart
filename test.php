<?php
$seats = 8;
$rows= 3;

// for ($j=0; $j < $rows; $j++) {
    // echo ";"; 

// }


?>

<head>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
</head>
<body>
    <?php
    
    do { for($i = 1; $i < $seats; $i++){
        echo "$i\n";
    }
    } while ($i < $seats);
    ?>
</body>