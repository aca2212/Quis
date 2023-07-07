<h3 class="mt-3">
    Daftar Pelanggan
    <a href="<?php echo URL; ?>/pelanggan/create" class="btn btn-primary btn-sm float-end">Pelanggan Baru</a>
</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>GOLONGAN ID</th>
            <th>NOMOR</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>KTP</th>
            <th>SERI</th>
            <th>METERAN</th>
            <th>AKTIF</th>
            <th>USER ID</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $row['pel_id']; ?></td>
                <td><?php echo $row['pel_id_gol']; ?></td>
                <td><?php echo $row['pel_no']; ?></td>
                <td><?php echo $row['pel_nama']; ?></td>
                <td><?php echo $row['pel_alamat']; ?></td>
                <td><?php echo $row['pel_hp']; ?></td>
                <td><?php echo $row['pel_ktp']; ?></td>
                <td><?php echo $row['pel_seri']; ?></td>
                <td><?php echo $row['pel_meteran']; ?></td>
                <td><?php echo $row['user_aktif']; ?></td>
                <td><?php echo $row['pel_id_user']; ?></td>
                <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn btn-info btn-sm">Edit</a></td>
                <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin mengahapus data ini?')">Delete</a></td>
            </tr>
        <?php } ?>   
    </tbody>
</table>