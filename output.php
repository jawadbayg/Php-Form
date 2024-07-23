<?php
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST["name"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
        <p><strong>Country:</strong> <?php echo htmlspecialchars($_POST["country"]); ?></p>
        <p>
            <strong>Age:</strong><?php  echo htmlspecialchars($_POST["age"]); ?>
        </p>
        
        <p><strong>Gender:</strong><?php echo htmlspecialchars($_POST["gender"]); ?> </p>

        <p>
            <strong>Skills:</strong><?php  echo htmlspecialchars($_POST["skillsString"]); ?>
        </p>
    </div>
</body>
</html>  -->



<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST["name"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
        <p><strong>Country:</strong> <?php echo htmlspecialchars($_POST["country"]); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($_POST["age"]); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST["gender"]); ?></p>
        <p><strong>Skills:</strong>
        <?php

        foreach($_POST['skills'] as $skills){
            echo  "<br>".htmlspecialchars($skills) ;
        }
        ?>
       </p>
    </div>
</body>
</html>
