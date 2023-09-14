

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

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
            <form method="post">
                <br><br><br>
                Enter Temprature in Celecius :<input class="form-control" type="text" name="cel">
                <br>
                <input type="submit" class="btn btn-primary mb-3" name= "submit" value="Convert" >
               

            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $c= $_POST['cel'];
                    
                    $f = (1.8 * $c) + 32;
                    echo "Temprature in farenheit =<input  class='form-control' value=$f >";
                }		
            ?>
            </div>

           
        </div>
    </div>


  

</body>

</html>