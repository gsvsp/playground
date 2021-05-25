<html>
    <head>
        <title>Greeting</title>
    </head>
    <body>
        <?php 
            $path = $_SERVER['REQUEST_URI'];
            echo "<p>Hello there... from {$path}</p>"; 
        ?> 
    </body>
</html>