<h1>Daftar Lowongan</h1>
<table class="table">
<thead>
    <tr>
        <th>No</th><th>Desc Pekerjaan</th><th>Deadline</th><th>Mitra</th><th>Email</th><th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor =1;
    foreach($lowongan->result()as $lowongan){
        echo'
        <tr>
            <td>'.$nomor.'</td>
            <td>'.$lowongan->deskripsi_pekerjaan.'</td>
            <td>'.$lowongan->tanggal_akhir.'</td>
            <td>'.$lowongan->mitra_id.'</td>
            <td>'.$lowongan->email.'</td>
            <td>
            <a href="'.base_url().'lowongan/view/'.$lowongan->id.' "class="btn btn-success">View</a>
            <a href="'.base_url().'lowongan/edit/'.$lowongan->id.' "class="btn btn-warning">Edit</a>
            <a href="'.base_url().'lowongan/delete/'.$lowongan->id.' "class="btn btn-danger">Delete</a>
            </td>
            
        </tr>';
        $nomor++;
        
    }
    ?>    
</tbody>
</table>
<a href="<?=base_url()?>lowongan/tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Lowongan</a>

    
