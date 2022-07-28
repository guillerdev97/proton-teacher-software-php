<html>
<?php
require_once("components/layoutCreate.php")
?>

<body>
    <?php
    require_once("components/headerCreate.php")
    ?>

    <main>
        <form action='?action=store' method="post">
            <div class="container cardForm">
                <div class="row rowResponsive">
                    <div class="row formResponsive">
                        <div class="col-auto labelResponsive"><label for="name">NAME</label></div>
                        <div class="col-auto"><input id="name" type="text" name="name" required placeholder=" Student"></div>
                    </div>
                </div>
                <div class="row rowResponsive">
                    <div class="row formResponsive">
                        <div class="col-auto labelResponsive"><label for="class">CLASS</label></div>
                        <div class="col-auto"><input id="class" type="text" name="class" required placeholder=" Class"></input></div>

                    </div>
                </div>
            </div>
            <div class="container buttonsStack">
                <div class="row">
                    <div class="col-auto">
                        <input type="submit" value="CREATE">
                    </div>
                    <div class="col-auto">
                        <input type="reset" value="RESET">
                    </div>
                    <div class="col-auto">
                        <a href="?action=backHome">
                            <button class="buttonCancel" type="button">CANCEL</button>
                        </a>
                    </div>



                </div>
            </div>
        </form>
    </main>


    <?php
    require_once("components/footer.php")
    ?>
</body>

</html>

<style scoped>
    body {
        background: linear-gradient(296.17deg, #F5D627 0%, #87C639 99.07%);
    }
</style>