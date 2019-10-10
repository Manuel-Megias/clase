<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $n=1;
        while ($n<=5){
            echo $n;
            $n++;
        }
        echo "<br/>";
        do {
            $n--;
            echo $n;
        } while ($n>1);
    ?>
</body>
</html>