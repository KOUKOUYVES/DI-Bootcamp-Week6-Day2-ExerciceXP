<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center;">ExerciceXP 3 Check Student Grade</h1>

<div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Le Premier nombre</label>
                <input type="number" name="number1" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Le deuxieme nombre</label>
                <input type="number" name="number2" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            if(isset($_POST['submit']))  
            {  
                $nombre1 = $_POST['number1']; 

                $nombre2 = $_POST['number2']; 

                $sommeNombre1Nombre2 =  $nombre1 + $nombre2;   

        echo "la somme de  $nombre1 et  $nombre2 est: ".$sommeNombre1Nombre2;   
        }  
        ?>
</div>

</body>
</html>