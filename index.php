<!DOCTYPE html>
<html>
<head>
    <title>doc</title>
</head>
<body>

    <?php

    $_metodoClient = $_SERVER{'REQUEST_METHOD'};

    if($_metodoClient == "GET"){
        echo "è arrivata una richiesta get";
    }else if($_metodoClient == "POST"){
        echo "è arrivata una richiesta post";
    }else if($_metodoClient == "DELETE"){
        echo "è arrivata una richiesta delete";
    }}else if($_metodoClient == "PUT"){
        echo "è arrivata una richiesta put";
    }

    ?>
    
</body>
</html>
