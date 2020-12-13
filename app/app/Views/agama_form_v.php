
<section class="my-4">
    <div class="container">
        <h2>Agama</h2>
        <form method="post" action="<?php echo site_url('Agama/save'); ?>">
            <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="agama" name="agama" required  value="<?php if (!empty($dataAgama)) echo $dataAgama->agama; ?>">
                    <input type="hidden" id="id" name="id" value="<?php if (!empty($dataAgama)) echo $dataAgama->kode_agama; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <button type="button" class="btn btn-warning btn-sm" id="cancel">Batal</button>
        </form>
    </div>
</section>
