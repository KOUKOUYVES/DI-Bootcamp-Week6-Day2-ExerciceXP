<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP 4 Show Day Of The Week</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
                <input type="number" name="number" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            if(isset($_POST['submit']))
            {
                $jours = $_POST['number']; 

                switch ($jours) {
                    case "1":
                        echo "ce nombre ". $jours ." correspond à lundi !";
                        break;
                    case "2":
                        echo "ce nombre ". $jours ." correspond à mardi !";
                        break;
                    case "3":
                        echo "ce nombre ". $jours ." correspond à mercredi !";
                        break;
                    case "4":
                        echo "ce nombre ". $jours ." correspond à jeudi !";
                        break;
                    case "5":
                        echo "ce nombre ". $jours ." correspond à vendredi !";
                        break;
                    case "6":
                        echo "ce nombre ". $jours ." correspond à samedi !";
                        break;
                    case "7":
                        echo "ce nombre ". $jours ." correspond à dimanche !";
                        break;
                    default:
                        echo "nombre invalide!";
                }
        }
        ?><br>

    </div>
</body>
</html>