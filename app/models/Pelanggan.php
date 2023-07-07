<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                $data[] = $rows;
            }

            return $data;
      }

      public function store()
      {
            if (isset($_POST['btn_simpan'])) {
                  $no = $_POST['pel_id_gol'];
                  $no = $_POST['pel_no'];
                  $nama = $_POST['pel_nama'];
                  $alamat = $_POST['pel_alamat'];
                  $hp = $_POST['pel_hp'];
                  $ktp = $_POST['pel_ktp'];
                  $seri = $_POST['pel_seri'];
                  $meteran = $_POST['pel_meteran'];
                  $aktif = $_POST['user_aktif'];
                  $aktif = $_POST['pel_id_user'];

                  $sql = "INSERT INTO tb_pelanggan SET pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp,
                  pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, user_aktif=:user_aktif" ;
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":pel_no", $no);
                  $stmt->bindParam(":pel_nama", $nama);
                  $stmt->bindParam(":pel_alamat", $alamat);
                  $stmt->bindParam(":pel_hp", $hp);
                  $stmt->bindParam(":pel_ktp", $ktp);
                  $stmt->bindParam(":pel_seri", $seri);
                  $stmt->bindParam(":pel_meteran", $meteran);
                  $stmt->bindParam(":user_aktif", $aktif);
                  $stmt->execute();
            }
      }

      public function edit($id)
      {
            $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("pel_id", $id);
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
      }

      public function update()
      {
            if (isset($_POST['btn_update'])) {

                $no = $_POST['pel_id_gol'];
                $no = $_POST['pel_no'];
                $nama = $_POST['pel_nama'];
                $alamat = $_POST['pel_alamat'];
                $hp = $_POST['pel_hp'];
                $ktp = $_POST['pel_ktp'];
                $seri = $_POST['pel_seri'];
                $meteran = $_POST['pel_meteran'];
                $aktif = $_POST['user_aktif'];
                $aktif = $_POST['pel_id_user'];

                $sql = "UPDATE tb_pelanggan SET pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp,
                pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, user_aktif=:user_aktif WHERE pel_id=:pel_id " ;
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(":pel_no", $no);
                $stmt->bindParam(":pel_nama", $nama);
                $stmt->bindParam(":pel_alamat", $alamat);
                $stmt->bindParam(":pel_hp", $hp);
                $stmt->bindParam(":pel_ktp", $ktp);
                $stmt->bindParam(":pel_seri", $seri);
                $stmt->bindParam(":pel_meteran", $meteran);
                $stmt->bindParam(":user_aktif", $aktif);
                $stmt->execute();
            }
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("pel_id", $id);
            $stmt->execute();
      }

}
