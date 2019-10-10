<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables magicas</title>
</head>
<body>
    <?php
        echo __LINE__ .", orden line.<br/>";
        echo __DIR__ .", orden dir. <br/>";
        echo __FILE__ .", orden file.<br/>";
        echo __FUNCTION__ . ", orden function.<br/>";
        echo __NAMESPACE__. ", orden namespace.<br/>";
    ?>
</body>
</html>