<?php require 'layouts/header.php' ?>
<main class="content">
    <h4 class="mt-4" style="margin-left: 25px">Vaqtlar</h4>
    <section class="bg-white rounded shadow p-5 mb-4 ">
        <div class="row">
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Boshlanishi</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="17.02-24.02">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tugashi</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="17.02-24.02">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="Bomdod" class="form-label">Bomdod</label>
                    <input type="time" class="form-control" id="Bomdod">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="Peshin" class="form-label">Peshin</label>
                    <input type="time" class="form-control" id="Peshin">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="Asr" class="form-label">Asr</label>
                    <input type="time" class="form-control" id="Asr">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="Shom" class="form-label">Shom</label>
                    <input type="time" class="form-control" id="Shom">
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-3">
                    <label for="Xufton" class="form-label">Xufton</label>
                    <input type="time" class="form-control" id="Xufton">
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Saqlash</button>
    </section>
    <h4 style="margin-left: 25px">Holat</h4>
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
                    <tr>
                        <td>1</td>
                        <td><b>16.02-10.02</b></td>
                        <td><b>06:30</b></td>
                        <td><b>06:30</b></td>
                        <td><b>06:30</b></td>
                        <td><b>06:30</b></td>
                        <td><b>06:30</b></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php require 'layouts/footer.php.php' ?>
