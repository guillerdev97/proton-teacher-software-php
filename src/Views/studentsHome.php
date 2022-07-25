<html>
<?php
require_once("components/layout.php")
?>

<body>
    <?php
    require_once("components/header.php")
    ?>
    <main>

        <div class="scrollStyle" id="scrollYBox" class="table-responsive">
            <table id="scrollYTable" class="table table-bordered table-striped m-0">
                <thead class="table-dark text-light">
                    <tr>
                        <th scope="col">Color</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Date Time</th>
                        <th scope="col">Handler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data["studentData"] as $student) {
                        echo "
                            <tr>
                                <td class='color headerCard'></td>
                                <td>{$student->getName()}</td>
                                <td class='subject'>{$student->getClass()}</td>
                                <td>{$student->getDateTime()}</td>
                                <td>
                                <a href='?action=edit&id={$student->getId()}'><img class='edit' src='public/img/iconEdit.svg' alt='edit'>​</a>
                                <a href='?action=delete&id={$student->getId()}'><img class='delete' src='public/img/iconDelete.svg' alt='delete'></a>
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
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    #scrollYBox {
        display: block;
        position: relative;
        width: 80%;
        height: 450px;
        margin: 50px auto;
        overflow: auto;

        scrollbar-width: auto;
        scrollbar-color: black #f2f2f2;

        background:
            radial-gradient(farthest-side at 0% 50%, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0)),
            radial-gradient(farthest-side at 100% 50%, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0)) 100% 0;
        background-color: white;
        background-repeat: no-repeat;
        background-size: 10px 100%;
        margin-bottom: 15px;
    }


    #scrollYTable {
        text-align: center;
        border-radius: 10px;
    }

    #scrollYTable thead {
        height: 50px;
    }

    #scrollYTable thead tr th {
        position: sticky;
        top: 0;
    }





    @media (max-width: 700px) {

        #scrollYBox {
            height: 500px;
            overflow: auto;
        }

        thead {
            display: none;
        }

        tbody {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

        }

        tr {
            display: inline-block;
            padding: 1rem 0.5rem 1rem 0.5rem;
            margin: 1.5rem;
            border: 1px solid grey;
            border-radius: 10px;
            box-shadow: 0 0 10px;
        }

        th {
            display: block;
        }

        td {
            display: block;


        }

        .headerCard {
            height: 70px;
            border-radius: 10px;
        }
    }
</style>