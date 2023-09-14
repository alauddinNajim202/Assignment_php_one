<?php 
    if(isset($_POST["grade1"], $_POST["grade2"], $_POST["grade3"])) {
        $calc = $_POST["grade1"] + $_POST["grade2"] +$_POST["grade3"];
        $calc = round($calc / 3, 2);

        if ($calc >= 80) {
          $calc = "A";
        } elseif($calc >= 70) {
          $calc = "B";
        }  elseif($calc >= 60) {
          $calc = "C";
        } elseif($calc >= 50) {
          $calc = "D";
        } elseif($calc >= 40) {
          $calc = "F";
        }


        $result = '<div>Your grade is: <strong>'.$calc.'</strong></div>';
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
                <label for="grade1">Enter First Grade:</label>
                <input class="form-control" type="number" min=0 name="grade1" id="grade1">
            </div>
            <div class="block">
                <label for="grade2">Enter second Grade:</label>
                <input class="form-control" type="number" min=0 name="grade2" id="grade2">
            </div>
            <div class="block">
                <label for="grade3">Enter third Grade:</label>
                <input class="form-control" type="number" min=0 name="grade3" id="grade3">
            </div>
            <button class="btn btn-danger my-3" type="submit">Submit</button>

            <?php if(isset($result)) echo $result; ?>
        </form>
        </div>
      </div>
    </div>
</body>

</html>