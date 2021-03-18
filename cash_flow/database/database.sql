

    CREATE TABLE `admin`(

      `id` int(25) NOT NULL AUTO_INCREMENT,
      `nama` varchar(150) NOT NULL,
      `username` varchar(120) NOT NULL,
      `password` varchar(200) NOT NULL,
      `foto` varchar(180) NOT NULL,
      PRIMARY KEY(id)

    );

        INSERT INTO `admin` (`id`, `nama`, `username`, `password`,`foto`) VALUES
        (1, 'Admin Website','admin', '5f4dcc3b5aa765d61d8327deb882cf99','admin.png');


           -- Username = admin dan password = password


    CREATE TABLE anggota(
      id int(25) NOT NULL AUTO_INCREMENT,
      nama varchar(120) NOT NULL,
      alamat varchar(200) NOT NULL,
      umur varchar(200) NOT NULL,
      level_kas varchar(200) NOT NULL,
      PRIMARY KEY(id)
    );

    CREATE TABLE kas(
      id int(25) NOT NULL AUTO_INCREMENT,
      nama varchar(120) NOT NULL,
      jumlah varchar(200) NOT NULL,
      tanggal varchar(200) NOT NULL,
      PRIMARY KEY(id)
    );



    CREATE TABLE keluar(
      id int(25) NOT NULL AUTO_INCREMENT,
      nama varchar(120) NOT NULL,
      jumlah varchar(200) NOT NULL,
      tanggal varchar(200) NOT NULL,
      PRIMARY KEY(id)
    );
