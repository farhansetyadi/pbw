
<section class="my-4">
    <div class="container">
        <h2>Hobi</h2>
        <form method="post" action="<?php echo site_url('Hobi/save'); ?>">
            <div class="form-group row">
                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="hobi" name="hobi" required  value="<?php if (!empty($dataHobi)) echo $dataHobi->hobi; ?>">
                    <input type="hidden" id="id" name="id" value="<?php if (!empty($dataHobi)) echo $dataHobi->kode_hobi; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <button type="button" class="btn btn-warning btn-sm" id="cancel">Batal</button>
        </form>
    </div>
</section>
