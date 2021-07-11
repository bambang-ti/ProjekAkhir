<h1>Edit Data Prodi</h1>
<br>
<?php echo form_open('prodi/save'); ?>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" value="<?=$objprodi->kode?>">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Prodi</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="<?=$objprodi->nama?>">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?=$objprodi->id?>"/>

<?php echo form_close(); ?>