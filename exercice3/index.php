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
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Pourcentage de Notes</label>
                <input type="number" name="number" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            if(isset($_POST['submit']))
            {
                $note = $_POST['number'];

                if ($note>=60)///Si les notes sont de 60 % ou plus
                {
                    $grade = "First Division";
                }
                else if($note>=45)///Si les notes sont comprises entre 45 % et 59 %
                {
                    $grade = "Second Division";
                }
                else if($note>=33)//Si les notes sont comprises entre 33 % et 44 %
                {
                    $grade = "Third Division";
                }
                else
                {
                    $grade = "Fail";
                }
                echo "Student grade: $grade"; 
        }
        ?>
</div>

</body>
</html>