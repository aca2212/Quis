<h3 class="mt-3">
    Daftar user
    <a href="<?php echo URL; ?>/user/create" class="btn btn-primary btn-sm float-end">User Baru</a>
</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>POS</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td><?php echo $row['user_password']; ?></td>
                <td><?php echo $row['user_nama']; ?></td>
                <td><?php echo $row['user_alamat']; ?></td>
                <td><?php echo $row['user_hp']; ?></td>
                <td><?php echo $row['user_pos']; ?></td>
                <td><?php echo $row['user_role']; ?></td>
                <td><?php echo $row['user_aktif']; ?></td>
                <td><a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn btn-info btn-sm">Edit</a></td>
                <td><a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin mengahapus data ini?')">Delete</a></td>
            </tr>
        <?php } ?>   
    </tbody>
</table>