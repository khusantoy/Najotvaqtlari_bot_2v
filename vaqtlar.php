<?php require 'layouts/header.php' ?>
<main class="content">
    <h4 class="mt-4">Vaqtlar</h4>
    <section class="bg-white rounded shadow p-5 mb-4 ">
        <form action="time.php" method="post">
            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Boshlanishi</label>
                        <input type="date" name="start" required class="form-control" id="exampleFormControlInput1" placeholder="17.02-24.02">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tugashi</label>
                        <input type="date" name="finish" required class="form-control" id="exampleFormControlInput1" placeholder="17.02-24.02">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="Bomdod" class="form-label">Bomdod</label>
                        <input type="time" name="bomdod" required class="form-control" id="Bomdod">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="Peshin" class="form-label">Peshin</label>
                        <input type="time" name="peshin" required class="form-control" id="Peshin">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="Asr" class="form-label">Asr</label>
                        <input type="time" name="asr" required class="form-control" id="Asr">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="Shom" class="form-label">Shom</label>
                        <input type="time" name="shom" required class="form-control" id="Shom">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="Xufton" class="form-label">Xufton</label>
                        <input type="time" name="xufton" required class="form-control" id="Xufton">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Saqlash</button>
            <?php
            if( $_GET['status'] == 'success'):
                echo "<button class='btn btn-success text-white' id='alert' style='display: inline-block'>Saqlandi!</button>";
            endif;
            ?>
        </form>
    </section>
    <h4>Holat</h4>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Vaqt oralig'i</th>
                        <th class="border-0">Bomdod</th>
                        <th class="border-0">Peshin</th>
                        <th class="border-0">Asr</th>
                        <th class="border-0">Shom</th>
                        <th class="border-0 rounded-end">Xufton</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Database
                    $server = "localhost";
                    $db_user = "user";
                    $db_password = "password";
                    $database = "najotvaqtlari";
                    $db = mysqli_connect($server,$db_user,$db_password,$database);
                    $vaqtlar = $db->query("SELECT * FROM vaqtlar")->fetch_assoc();
                    ?>
                    <tr>
                        <td>1</td>
                        <td><b><span class="bg-success border-0 rounded-start rounded-end p-2 text-white"><?=$vaqtlar['vaqt_oraliq']?></span></b></td>
                        <td><b><?=$vaqtlar['bomdod']?></b></td>
                        <td><b><?=$vaqtlar['peshin']?></b></td>
                        <td><b><?=$vaqtlar['asr']?></b></td>
                        <td><b><?=$vaqtlar['shom']?></b></td>
                        <td><b><?=$vaqtlar['xufton']?></b></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    setTimeout(() => {
        const box = document.getElementById('alert');
        box.style.display = 'none';
    }, 3000);
</script>
<?php require 'layouts/footer.php' ?>
