<h2>Edit Kategori</h2>

<form action="<?php echo URL; ?>/kategori/update" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kat_nama" value=<? echo $data['kat_nama'];?>></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="kat_keterangan" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>