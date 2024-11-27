<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
        $name = "Johnbosco";
        $read = false;
        // condition
        if($read){
            $message = "You are $name";
        }else{
            $message = "You are not $name";

        }
    ?>
    <h1>
        Your name is "<?php echo $name; ?>"
    </h1>
    <h1>
        <?php echo $message ?>
        <br>
        <!-- shorthand representation of the above code -->
        <?= $message ?>
    </h1>




    <!-- array -->
    <?php 
        $books = [
            "Ngoswe",
            "Hawa the bus driver",
            "mabala the farmer"
        ];
    ?>
    <ul>
        <?php foreach ($books as $book){
            echo "<li>" . $book . "</li>";
            echo "<li> {$book}tm </li>";
        }
        
        ?>
        <!-- shorthand for the foreach loop -->
         <?php foreach ($books as $book): ?>
    </ul>


</body>
</html>