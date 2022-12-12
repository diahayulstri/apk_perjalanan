<section style="margin-left: 350px; margin-top:150px; margin-bottom: 500px;" class="section">
    <div class="row">
        <div class="ig-10">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">tulis Catatan</h5>

                    <!-- General Form Elements -->
                    <form method="POST" action="<?= base_url('aplikasinya/tambah_catatan'); ?>">
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">pilih tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">pilih jam</label>
                            <div class="col-sm-10">
                                <input type="time" name="jam" id="jam" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">pilih lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="lokasi" id="lokasi" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">suhu tubuh</label>
                            <div class="col-sm-10">
                                <input type="number" name="suhu" id="suhu" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                    </form> <!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </div>
</section>