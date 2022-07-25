<html>
<?php
require_once("components/layout.php")
?>

<body>
    <?php
    require_once("components/header.php")
    ?>

    <?php
    foreach ($data["studentData"] as $student) {
        echo "
        <div class='container'>
        <table class='table'>
        <tr>
            <td>{$student->getName()}</td>
            <td>{$student->getClass()}</td>
            <td>{$student->getDateTime()}</td>
            <td>
                <a href='?action=delete&id={$student->getId()}'>Eliminar</a>
            </td>
        </tr><br>
        </table>
        </div>
        ";
    }
    ?>

    <?php
    require_once("components/footer.php")
    ?>
</body>

</html>