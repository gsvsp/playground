<html>
    <head>
        <title>Greeting</title>
    </head>
    <body>
        <?php 
            $date = new DateTime();
            echo "<p>Hello there... ({$date->format('Y-m-d H:i:s')})</p>"; 
        ?> 
    </body>
</html>