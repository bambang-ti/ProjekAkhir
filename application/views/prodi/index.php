<script>
function hapusProdi(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>
<h1>Daftar Prodi</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Kode</th><th>Prodi</th><th style="text-align:right">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_prodi->result() as $prodi){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$prodi->kode?></td>
            <td><?=$prodi->nama?></td>
            <td style="text-align:right">
            <a href="<?=base_url()?>prodi/edit/<?=$prodi->id?>" class="btn btn-warning">Edit</a> | 
            <a href="<?=base_url()?>prodi/delete/<?=$prodi->id?>" class="btn btn-danger"
            <?php echo 'onclick="return hapusProdi(\'Data Prodi '.$prodi->nama.' Yakin mau dihapus ?? \')"'?>
            >Delete</a></td>
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>
<a href="<?=base_url()?>prodi/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Daftar Prodi</a>

