<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();?>

    <h1>Discriminant of a quadratic equation</h1>
    <form action="handleForm.php" method="POST">
        <p>A<input type="text" name="inputA" placeholder="Value of a here"></p>
        <p>B<input type="text" name="inputB" placeholder="Value of b here"></p>
        <p>C<input type="text" name="inputC" placeholder="Value of c here"></p>

        <input type="submit" value="Submit" name="submitBtn">   
    </form>

</body>
</html>