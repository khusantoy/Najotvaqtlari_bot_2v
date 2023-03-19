<?php require 'layouts/header.php' ?>
<main class="content">
    <h4 class="mt-4">Xabarlar</h4>
    <section class="bg-white rounded shadow p-5 mb-4">
        <form action="send.php" method="post">
        <div class="row">
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Xabaringizni kiriting:</label>
                <textarea name="text" style="font-size: 18px" class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Yuborish</button>
            <?php
            if( $_GET['status'] == 'success'):
                echo "<button class='btn btn-success text-white mt-3' id='alert'>Muvaffaqiyatli yuborildi!</button>";
            endif;
            ?>
        </form>
    </section>
</main>
<script>
    setTimeout(() => {
        const box = document.getElementById('alert');
        box.style.display = 'none';
    }, 3000);
</script>
<?php require 'layouts/footer.php' ?>
