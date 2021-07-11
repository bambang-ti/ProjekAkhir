<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Edit Lowongan</h1>
<?php echo form_open('lowongan/save');?>
  <div class="form-group row">
    <label for="deskripsi_pekerjaan" class="col-4 col-form-label">Nama Pekerjaan</label> 
    <div class="col-8">
      <input id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" type="text" class="form-control" value="<?=$editLowongan->deskripsi_pekerjaan?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" type="text" class="form-control" value="<?=$editLowongan->tanggal_akhir?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" aria-describedby="text2HelpBlock" value="<?=$editLowongan->email?>"> 
      <span id="text2HelpBlock" class="form-text text-muted">Masukkan email yang dapat dihubungi</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi Pekerjaan</label> 
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="8" class="form-control" value="<?=$editLowongan->deskripsi?>"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
  <input type="hidden" name="update" value="<?=$editLowongan->id?>"/>
  <?php echo form_close();?>