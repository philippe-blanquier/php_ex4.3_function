<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.2 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function functionString( $inputString1, $inputString2)
            {
                return $inputString1.' '.$inputString2;
            }
            echo functionString('Hello','World');
            ?>
       </p>
    </body>
</html>