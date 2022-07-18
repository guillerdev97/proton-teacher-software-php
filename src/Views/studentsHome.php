<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   
    <?php
    foreach($data["studentData"] as $student) {
        echo "
        <tr>
            <td>{$student->getName()}</td>
            <td>{$student->getClass()}</td>
            <td>{$student->getDateTime()}</td>
            <td>
                <a href='?action=delete&id={$student->getId()}'>Eliminar</a>
            </td>
        </tr><br>
        ";
    }
    ?>

</body>
</html>