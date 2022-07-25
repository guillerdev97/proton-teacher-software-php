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
            <label for="name">Student</label>
            <input id="name" type="text" name="name" required placeholder="Student">
            <label for="class">Class</label>
            <textarea id="class" type="text" name="class" required placeholder="Class"></textarea>
            <input type="submit" value="Create">
            <input type="reset" value="Reset">
            <a href="?action=backHome">
                <button type="button">Cancel</button>
            </a>
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