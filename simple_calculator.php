<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  // Check which operator was chosen and perform the corresponding calculation
  if ($operator == 'add') {
    $result = $num1 + $num2;
  } elseif ($operator == 'subtract') {
    $result = $num1 - $num2;
  } elseif ($operator == 'multiply') {
    $result = $num1 * $num2;
  } elseif ($operator == 'divide') {
    $result = $num1 / $num2;
  }
} ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        body{
            background-color: powderblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 mt-5 bg-secondary rounded p-4">
            
            <form action="simple_calculator.php" method="post">
                <input type="text" class="form-control my-3" name="num1" placeholder="Enter any number">
                
                <input type="text" class="form-control mb-3" name="num2" placeholder="Enter any number">

                <select class="form-select" name="operator" class="form-control">
                   <option selected> <strong>select Operator</strong> </option>
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select>
                <input type="submit" class="btn btn-primary my-4" name="submit" value="Calculate">
            </form>
                        
               
               
            </div>
        </div>
    </div>
</body>

</html>


<?php 
 if (isset($result)) {              
     echo "Result: $result";                
 }

?>
