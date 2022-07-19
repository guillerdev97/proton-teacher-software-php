<html>
<?php
require_once("components/layout.php")
?>

<body>
    <?php
    require_once("components/header.php")
    ?>
    <main>
        <div class="container-fluid">
            <table class="table table-bordered overflow-auto">
                <thead class="bg-dark text-light text-center">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Date Time</th>
                        <th scope="col" class="lessWidth"></th>
                    </tr>
                </thead>
                <tbody class="bg-light text-center">
                    <?php
                    foreach ($data["studentData"] as $student) {
                        echo "
                        <tr>
                            <td>{$student->getName()}</td>
                            <td>{$student->getClass()}</td>
                            <td>{$student->getDateTime()}</td>
                            <td>
                                <a href='?action=delete&id={$student->getId()}'>Eliminar</a>
                                <a href='#'>Edit</a>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php
    require_once("components/footer.php")
    ?>
</body>

</html>

<style scoped>
    .container-fluid{
        margin:30px auto;
        
    }
    .table{
        width: 80%;
        margin: auto;
        overflow: scroll;
    }
    .lessWidth{
        width: 10%;
    }
    td{
     width: 30%;
    }
    thead{
        position: sticky;
    }
    tbody{
        max-height: 200px;
      
    }
    

</style>