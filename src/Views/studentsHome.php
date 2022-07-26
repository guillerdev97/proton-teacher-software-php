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
                                    <a href='?action=edit&id={$student->getId()}' data-bs-toggle='modal' data-bs-target='#modal'><img class='edit' src='public/img/iconEdit.svg' alt='edit'>​</a>
                                        <div class='modal fade' id='modal' tabindex='-1' aria-labelledby='exampleModalLabel'
                                        aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>EDIT</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal'
                                                            aria-label='Close'></button>
                                                    </div>
                                            <div class='modal-body'>
                                            <form class='justify-content-center' action='?action=update&id={$student->getId()}' method='post'>
                                            <div class='input-group' style=' margin-bottom: 2rem; width: 90%; margin-left: 5%;'>
                                                <span class='input-group-text'>Name</span>
                                            
                                                <input class='form-control' type='text' name='name' required value='{$student->getName()}' >
                                            </div>
                                            <div class='input-group' style='width: 90%; margin-left: 5%;'>
                                                <span class='input-group-text'>Class</span>
                                                <input class='form-control' area-label='With textarea' type='text' name='class' required value='{$student->getClass()}'>
                                            </div>
                                            <div class='botones' style='margin-bottom: 2rem;'>
                                                <input class='btn-lg btn-outline-success go-add-task float'type='submit' value='Edit'>
                                                <input class='btn-lg btn-outline-warning go-add-task float'type='reset' value='Reset'>
                                            </div>
                                            
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>         
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
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
    height: 400px;
    margin: 25px auto;
    margin-bottom: 25px;
    overflow: auto;
    border-radius: 10px;

    scrollbar-width: 12px;
    scrollbar-color: transparent;

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
}

#scrollYTable thead {
    height: 50px;
}

#scrollYTable thead tr th {
    position: sticky;
    top: 0;
}
  
@media (max-width: 1300px) {
    h1 {
        font-size: 5.3rem;
    }
}
@media (max-width: 1200px) {
    h1 {
        font-size: 4.5rem;
    }
}
@media (max-width: 1100px) {
    h1 {
        font-size: 4rem;
    }
}
@media (max-width: 900px) {
    h1 {
        font-size: 3.5rem;
    }
}
@media (max-width: 775px) {
    h1 {
        font-size: 3.1rem;
    }
}

@media (max-width: 700px) {

    #scrollYBox {
        width: 70%;
        height: 400px;
        overflow: auto;

        background-color: transparent;
        border: 5px solid transparent;
        border-radius: 5px;
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
        border: none;
        background-color: white;
    }

    th {
        display: block;
        border: none;

    }

    td {
        display: block;
        border: none;

    }

    .headerCard {
        height: 70px;
        border-radius: 10px;
    }
    .button {
        display: none;
    }
    .img {
        display: block;
    }
    .imgRow {

        position: fixed;
        top: 550px;
        left: 370px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem 0.5rem 1rem 0.5rem;
        margin: 1.5rem;
        border: none;
        box-shadow: none;
        background-color: transparent;
    }
    

}
</style>