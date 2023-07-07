CREATE TABLE tb_user (
      user_id INT(11) NOT NULL AUTO_INCREMENT,
      user_email VARCHAR(50) NOT NULL,
      user_password VARCHAR(100) NOT NULL,
      user_nama VARCHAR(100) NOT NULL,
      user_alamat TEXT NOT NULL,
      user_hp VARCHAR(25) NOT NULL,
      user_pos VARCHAR(5) NOT NULL,
      user_role TINYINT(2) NOT NULL,
      user_aktif TINYINT(2) NOT NULL,
      created_ad TIMESTAMP NOT NULL,
      update_at DATETIME NOT NULL,
      PRIMARY KEY(user_id)
);

CREATE TABLE tb_golongan (
      gol_id TINYINT(3) NOT NULL AUTO_INCREMENT,
      gol_kode VARCHAR (10) NOT NULL,
      gol_nama VARCHAR (50) NOT NULL,
      created_ad TIMESTAMP NOT NULL,
      update_at DATETIME NOT NULL,
      PRIMARY KEY(gol_id)
);

CREATE TABLE tb_pelanggan (
      pel_id INT(11) NOT NULL AUTO_INCREMENT,
      pel_id_gol TINYINT(3) NOT NULL,
      pel_no VARCHAR(20) NOT NULL,
      pel_nama VARCHAR(50) NOT NULL,
      pel_alamat TEXT NOT NULL,
      pel_hp VARCHAR(20) NOT NULL,
      pel_ktp VARCHAR(50) NOT NULL,
      pel_seri VARCHAR(50) NOT NULL,
      pel_meteran INT(11) NOT NULL,
      user_aktif ENUM('Y','N') NOT NULL,
      pel_id_user TINYINT(3) NOT NULL,
      created_ad TIMESTAMP NOT NULL,
      update_at DATETIME NOT NULL,
      PRIMARY KEY(pel_id),
      UNIQUE KEY()
);
