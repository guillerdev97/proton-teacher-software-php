<html>
<?php
require_once("components/layout.php")
?>

<body>
    <?php
    require_once("components/headerCreate.php")
    ?>

    <main>
        <form action='?action=store' method="post">
            <div class="container cardForm">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-4"><label for="name">Student</label></div>
                        <div class="col-6"><input id="name" type="text" name="name" required placeholder="Student"></div>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-4"><label for="class">Class</label></div>
                        <div class="col-6"><textarea id="class" type="text" name="class" required placeholder="Class"></textarea></div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <input type="submit" value="Create">
                <input type="reset" value="Reset">
                <a href="?action=backHome">
                    <button type="button">Cancel</button>
                </a>
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