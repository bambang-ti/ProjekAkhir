<script>
function hapusKeahlian(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>
<h1>Daftar Keahlian</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Keahlian</th><th style="text-align:right">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_keahlian->result() as $keahlian){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$keahlian->nama?></td>
            <td style="text-align:right">
            <a href="<?=base_url()?>keahlian/edit/<?=$keahlian->id?>" class="btn btn-warning">Edit</a> | 
            <a href="<?=base_url()?>keahlian/delete/<?=$keahlian->id?>" class="btn btn-danger"
            <?php echo 'onclick="return hapusKeahlian(\'Data Keahlian '.$keahlian->nama.' Yakin mau dihapus ?? \')"'?>
            >Delete</a></td>
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>
<a href="<?=base_url()?>keahlian/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Daftar Keahlian</a>
