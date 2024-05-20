<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Hello World from PHP file"
        ?>
        
        <form action="index.php" method="get">
            <label>First Name:</label>
            <input type="text" name="first_name"/><br>
            <label>Last Name:</label>
            <input type="text" name="last_name"/><br>
            <label>&nbsp;</label>
            <input type="submit" value="Submit"/>
        </form>       
    </body>
</html>
