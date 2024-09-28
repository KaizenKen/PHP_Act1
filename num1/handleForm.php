<?php session_start();
    if(isset($_POST['submitBtn'])){

        $inputA = $_POST['inputA'];
        $inputB = $_POST['inputB'];
        $inputC = $_POST['inputC'];

        $result = ($inputB**2) - (4 * $inputA * $inputC);

        $_SESSION['inputA'] = $inputA;
        $_SESSION['inputB'] = $inputB;
        $_SESSION['inputC'] = $inputC;

        $_SESSION['result'] = $result;
    }

    header('location: result.php');
?>