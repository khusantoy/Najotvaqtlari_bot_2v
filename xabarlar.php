<?php require 'layouts/header.php' ?>
<main class="content">
    <h4 class="mt-4" style="margin-left: 25px">Xabarlar</h4>
    <section class="bg-white rounded shadow p-5 mb-4">
        <?php
        if( $_GET['status'] == 'success'):
            echo "<div class='alert alert-success' id='alert'>muvaffaqiyatli yuborildi !</div>";
        endif;
        ?>


        <form action="send.php" method="post">
        <div class="row">
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Xabaringizni kiriting:</label>
                <textarea name="text" style="font-size: 18px" class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Yuborish</button>
        </form>
    </section>
</main>
<script>
    setTimeout(() => {
        const box = document.getElementById('alert');
        box.style.display = 'none';
    }, 5000);
</script>
<?php require 'layouts/footer.php.php' ?>
