<?php 
    if(isset($_POST["num1"])) {
        $num1 = $_POST["num1"] ;
        

        if ($num1%2 ==0) {
          $num1 = 'The number is even';
        } else{
            $num1 = 'The number is Odd';
        }


        $result = '<div> <strong>'.$num1.'</strong></div>';
    }
?>

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

</head>

<body>

    <div class="conatiner">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 mt-5 bg-primary text-light rounded p-5">
        <form action="" method="post">
            <div class="block">
                <label for="grade1">Enter a number :</label>
                <input class="form-control" type="number" min=0 name="num1" id="num1">
            </div>
           
            <button class="btn btn-danger my-3" type="submit">Submit</button>

            <?php if(isset($result)) echo $result; ?>
        </form>
        </div>
      </div>
    </div>
</body>

</html>