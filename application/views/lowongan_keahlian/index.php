<h1>Lowongan Keahlian</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Lowongan</th><th>Keahlian</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($lowongan->result() as $lowongan){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$lowongan->lowongan?></td>
            <td><?=$lowongan->keahlian?></td>
            
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>