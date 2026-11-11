<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <?php include "navbar.php" ; ?>
    <div class="container mt-5">
        <h1>Liste des fruits</h1>
        <table class="table">
            <tr class="table-primary">
                <th>Fruit</th>
                <th>Calories</th>
            </tr>
            <?php
            $fruits = ['orange' => 60, 'banane' => 500, 'fraise' => 300];
            foreach ($fruits as $key => $value) {
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td> : <?= $value ?> </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>