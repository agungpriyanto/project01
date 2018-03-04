<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas HTML 1</title>
        <link rel="stylesheet" href="assets/css/menu.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">


    </head>
    <body>
    <center>
        <img src="assets/image/UTY.png" width="100" height="100">
        <h1>UNIVERSITAS TEKNOLOGI YOGYAKARTA</h1>
    </center>
    <header>
        <nav>

            <ul style="background-color: #000">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form>
                    <center><h1>Formulir Pendaftaran</h1></center>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nama">Nama Lengkap </label>

                        <div class="col-sm-10">
                            <input class=" form-control" type="text" id="nama" placeholder="masukkan Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="tempatlahir"> Tempat Lahir </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="tempatlahir" placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="tanggallahir">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" id="tanggallahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="jeniskelamin">Jenis Kelamin</label>
                        <div class="custom-control custom-radio col-sm-2">
                            <input type="radio" id="laki-laki" name="laki-laki" class="custom-control-input">
                            <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="perempuan" name="perempuan" class="custom-control-input">
                            <label class="custom-control-label" for="perempuan"la>Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nomer"> No Telp</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="nomer" placeholder="Masukkan Nomor Telepon" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="kota">KOTA</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="kota" placeholder="Masukkan Kota Anda" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button class="btn btn-primary">Simpan</button>
                            <button class="btn btn-primary">Batal</button>
                        </div>                        
                    </div>
                </form>  

            </div>
            <div class="col-4">

            </div>
        </div>

    </div>

    <footer>
        <center>
            <p>Copyright@2018 Agung Priyanto</p> 
        </center>
    </footer>
</body>
</html>
