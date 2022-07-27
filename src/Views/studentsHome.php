<html>

<?php
require_once("components/layoutHome.php")
?>

<body>

    <?php
    require_once("components/header.php")
    ?>

    <main class="contentMain">
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
                                    <a href='?action=edit&id={$student->getId()}' data-bs-toggle='modal' data-bs-target='#modal{$student->getId()}'><img class='edit' src='public/img/iconEdit.svg' alt='edit'>​</a>
                                        <div class='modal fade' id='modal{$student->getId()}' tabindex='-1' aria-labelledby='exampleModalLabel'
                                        aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>EDIT</h5>
                                                        <img src='public/img/editPopup.svg' alt=''>
                                                        
                                                    </div>
                                            <div class='modal-body'>

                                            <form action='?action=update&id={$student->getId()}' method='POST'>
                                            <div class='form-group'>
                                                <div class='input-group' style=' margin-bottom: 2rem; width: 50%; margin-left: 5%;'>
                                                    <div>
                                                        <span class='input-group-text nameForm'>NAME</span>
                                                        <input class='form-control formLabel' type='text' name='name' required value='{$student->getName()}' >
                                                    </div>
                                                    <div>
                                                        <span class='input-group-text nameForm'>CLASS</span>
                                                        <input class='form-control formLabel' type='text' name='class' required value='{$student->getClass()}'>
                                                    </div>
                                                </div>
                                                <div class='iconProton'>
                                                    <img src='public/img/protonPopup.svg' alt=''>
                                                </div>
                                            </div>
                                            <div  class='botones'>
                                                <input style='font-size: 16px;' class='btn-lg btn-outline-success go-add-task float buttonsofEdit'type='submit' value='SUBMIT'>
                                                <a href='./index.php'> 
                                                    <input style='font-size: 16px;'  class='btn-lg btn-outline-warning go-add-task float buttonsofEdit' type='button' value='CANCEL'>
                                                </a>
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
        <div>
            <a href="?action=create">
                <img class="buttonQuerie" src="public/img/CreateIcon.png" alt="">
            </a>
        </div>  
    </main>

    <?php
    require_once("components/footer.php")
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
</body>

</html>





<style scoped>

/* home page styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.buttonsofEdit{
    background-color: black;
    color: #f5d627;
    border-radius: 10px;
}

header {
    margin-bottom: 50px;
}
footer {
    margin-top: 50px;
}
.contentMain {
    display: flex;
    justify-content: center;
    align-items: center;
}
.buttonQuerie {
    display: none;
}
#scrollYBox {
    display: block;
    position: relative;
    width: 80%;
    height: 450px;
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
.modal-content{
    position: relative;
    top: 50px;
}

.modal-header {
    background-color: black;
    color: #f5d627;
    width: 752px;
    position: relative;
    right: 100px;

}
.modal-header > img {
    width: 50px;
    height: 50px;
}
.botones {
    display: flex;
    justify-content: flex-end;
    width: 100%;
    height: 25%;
    margin: -15px;

}
.btn-lg {
    width: 80px;
    height: 60px;
}
.iconProton{
    height: 227px;
    width: 250px;
    align-self: center;
    position: relative;
    left: 60px;
}
h5{
    font-size:40px;
}
.modal-body{
    background-color: #585858;
    width: 752px;
    height: 478px;
    position: relative;
    right: 100px;
}
.input-group{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    width: 20%;
}

.form-group{
    width: 100%;
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
}
.formLabel{
    width: 114%;
    height: 40px;
    margin: 30px;

}
.nameForm{
    width: 80px;
    margin: 30px;
    font-size: larger;
    font-weight: 800;
    background: transparent;
    border: none;
    position: relative;
    left: 120px;
    color: black;
}

    /* media queries */
    /* 1300px */
    @media (max-width: 1300px) {
        h1 {
            font-size: 5.3rem;
        }

        .logo {
            width: 120px;
            height: 120px;
        }

        .button {
            width: 65px;
            height: 65px;
        }

        #scrollYBox {
            height: 500px;
        }
    }

    /* 1200px */
    @media (max-width: 1200px) {
        h1 {
            font-size: 4.5rem;
        }

        .logo {
            width: 100px;
            height: 100px;
        }

        .button {
            width: 55px;
            height: 55px;
        }

        #scrollYBox {
            height: 500px;
        }
    }

    /* 1100px */
    @media (max-width: 1100px) {
        h1 {
            font-size: 4rem;
        }

        #scrollYBox {
            height: 520px;
        }
    }

    /* 900px */
    @media (max-width: 900px) {
        h1 {
            font-size: 3.5rem;
        }

        .logo {
            width: 90px;
            height: 90px;
        }

        .button {
            width: 50px;
            height: 50px;
        }

        #scrollYBox {
            height: 540px;

        }
    }

    /* 775px */
    @media (max-width: 775px) {
        h1 {
            font-size: 3.1rem;
        }

        h2 {
            font-size: 22px;
        }

        .logo {
            width: 75px;
            height: 75px;
        }

        .button {
            width: 40px;
            height: 40px;
        }

        #scrollYBox {
            height: 560px;
        }

    }

    /* 700px */
    @media (max-width: 700px) {
        .contentMain {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contentMain>div {
            width: 85%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 15px;

            /*   border: 1px solid black; */
        }

        .buttonQuerie {
            display: block;
            width: 50px;
            height: 50px;
        }

        h1 {
            font-size: 2.6rem;
        }

        .logo {
            width: 80px;
            height: 80px;
        }

        #scrollYBox {
            width: 75%;
            height: 570px;
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
    }

    /* 590px */
    @media (max-width: 590px) {
        h1 {
            font-size: 2.1rem;
        }

        .logo {
            width: 80px;
            height: 80px;
        }

        #scrollYBox {
            width: 85%;
        }

        footer {
            height: 50px;
        }

        footer>h3 {
            font-size: 13px;
        }
    }

    /* 530px */
    @media (max-width: 530px) {
        #scrollYBox {
            width: 95%;
        }
    }

    /* 485px */
    @media (max-width: 485px) {
        h1 {
            font-size: 1.7rem;
        }

        .logo {
            width: 65px;
            height: 65px;
        }

        #scrollYBox {
            width: 100%;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70px;
        }

        footer h3 {
            font-size: 16px;
        }
    }
</style>