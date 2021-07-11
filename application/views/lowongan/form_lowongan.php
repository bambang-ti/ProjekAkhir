<h1>Form Tambah Lowongan</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo form_open('lowongan/simpan_lowongan');?>
  <div class="form-group row">
    <label for="deskripsi_pekerjaan" class="col-4 col-form-label">Nama Pekerjaan</label> 
    <div class="col-8">
      <input id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Deadline</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" placeholder="Y-M-D" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="mitra_id" class="col-4 col-form-label">Mitra</label> 
    <div class="col-8">
      <select id="mitra_id" name="mitra_id" class="custom-select">
        <option value="">--pilih mitra--</option>
        <?php
          foreach($list_mitra->result() as $mitra){
        ?>
        <option value="<?=$mitra->id?>"><?=$mitra->nama?></option>
        <?php

          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="example@gmail.com" type="email" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi Pekerjaan</label> 
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="8" class="form-control" aria-describedby="deskripsiHelpBlock"></textarea> 
      <span id="deskripsiHelpBlock" class="form-text text-muted">Isi gambaran pekerjaan</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>