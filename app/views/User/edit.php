<h3>
    Edit Data User
</h3>

<form action="<?php echo URL; ?>/user/update" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $data['row']['user_id']; ?>">
    <div class="mb-3">
        <label class="form-label">Golongan Id</label>
        <input type="text" class="form-control" name="user_email" value= "<?php echo $data['row']['user_email']; ?>"required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nomor</label>
        <input type="text" class="form-control" name="user_password" value= "<?php echo $data['row']['user_password']; ?>"required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="user_nama" value= "<?php echo $data['row']['user_nama']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="user_alamat" value= "<?php echo $data['row']['user_alamat']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Hp</label>
        <input type="text" class="form-control" name="user_hp" value= "<?php echo $data['row']['user_hp']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">KTP</label>
        <input type="text" class="form-control" name="user_pos" value= "<?php echo $data['row']['user_pos']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Seri</label>
        <input type="text" class="form-control" name="user_role" value= "<?php echo $data['row']['user_seri']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Aktif</label>
        <input type="text" class="form-control" name="user_aktif" value= "<?php echo $data['row']['user_aktif']; ?>">
    </div>
        <button type="submit" class="btn btn-success" name="btn_update">Update</button>
        <a href="<?php echo URL; ?>/user" class="btn btn-primary">Kembali</a>
</form>