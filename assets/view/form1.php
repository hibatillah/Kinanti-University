<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('');?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url('');?>/assets/js/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo base_url('');?>/assets/js/bootstrap.min.js"></script>
    <script>
        $('#save').on('click',function(e){
            e.preventDefault()
            var nama=$('#nama').val();
            var nik=$('#nik').val();
            var tempat_lahir=$('#tempat_lahir').val();
            var tanggal_lahir=$('#tanggal_lahir').val();
            var jk=$('#jk').val();
            var kewarganegaraan=$('#kewarganegaraan').val();
            var agama=$('#agama').val();
            var nama_wali=$('#nama_wali').val();
            var email=$('#email').val();
            var no_telp=$('#no_telp').val();
            var alamat=$('#alamat').val();
            var kode_pos=$('#kode_pos').val();
            var provinsi=$('#provinsi').val();
            var kabupaten=$('#kabupaten').val();
            var kecamatan=$('#kecamatan').val();
            var pendidikan=$('#pendidikan').val();
            var sekolah=$('#sekolah').val();
            var nilai_raport=$('#nilai_raport').val();
            var prog1=$('#prog1').val();
            var prog2=$('#prog2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url()?>index.php/Daftar/dataDaftar",
                data : {nama:nama , nik:nik, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir,
                    jk:jk, kewarganegaraan: kewarganegaraan, agama:agama, nama_wali:nama_wali, email:email,
                    no_telp:no_telp, alamat:alamat, kode_pos:kode_pos, provinsi:provinsi, kabupaten:kabupaten,
                    kecamatan:kecamatan, pendidikan:pendidikan, sekolah:sekolah, nilai_raport:nilai_raport,
                    prog1:prog1, prog2:prog2},
                success: function(data){
                    $('#nama').val('');
                    $('#nik').val('');
                    $('#tempat_lahir').val('');
                    $('#tanggal_lahir').val('');
                    $('#jk').val('');
                    $('#kewarganegaraan').val('');
                    $('#agama').val('');
                    $('#nama_wali').val('');
                    $('#email').val('');
                    $('#no_telp').val('');
                    $('#alamat').val('');
                    $('#kode_pos').val('');
                    $('#provinsi').val('');
                    $('#kabupaten').val('');
                    $('#kecamatan').val('');
                    $('#pendidikan').val('');
                    $('#sekolah').val('');
                    $('#nilai_raport').val('');
                    $('#prog1').val('');
                    $('#prog2').val('');
                    $('.modal').modal('hide');
                    data_customer();
                }
            });
        });
    </script>
</head>
<body>
    <div class="container-main" style="margin: 50px auto 100px auto; background: #FCF8E8;">
        <div class="container p-3 my-3 border">
        <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
        
        <!-- // //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        // function input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
        // //Cek apakah ada kiriman form dari method post
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     //Query input menginput data kedalam tabel pendaftaraan
        //     $sql="insert into pendaftaraan (nama,nik,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,prog2) values
        //     ('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$prog2')";

        //     //Mengeksekusi/menjalankan query diatas
        //     $hasil=mysqli_query($kon,$sql);

        //     //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        //     if ($hasil) { 
        //         echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        //     }
        //     else {
        //         echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        //     }
        // }
        // ?> -->
            <form id="form" method="post" action="index.php/Daftar/dataDaftar">
                <!-- Data Diri -->
                <div class="alert alert-primary">
                    <strong>Data Diri</strong>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Nomor Identitas (NIK):</label>
                            <input type="text" name="nik" class="form-control" placeholder="Masukkan Nomor NIK">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tempat Lahir:</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Kewarganegaraan:</label>
                            <select class="form-control" name="kewarganegaraan">
                                <option>Pilih</option>
                                <option value="WNI">Warga Negara Indonesia</option>
                                <option value="WNA">Warga Negara Asing</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Agama:</label>
                            <select class="form-control" name="agama">
                                <option>Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Kelamin:</label>
                            <select class="form-control" name="jk">
                                <option>Pilih</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>No Telp:</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="Masukkan No Telp">
                        </div>
                    </div>
                </div>
                <!-- Data Alamat -->
                <div class="alert alert-primary">
                    <strong>Data Alamat Asal</strong>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Provinsi:</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                            <option>Pilih Provinsi</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Riau">Riau</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Bangka Belitung">Bangka Belitung</option>
                                <option value="Banten">Banten</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Bali">Bali</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Papua">Papua</option>
                                <option value="Papua Barat">Papua Barat</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kota/Kabupaten:</label>
                            <input type="text" name="kabupaten" class="form-control" placeholder="Masukkan Kota/Kabupaten">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kecamatan:</label>
                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kelurahan:</label>
                            <input type="text" name="Kelurahan" class="form-control" placeholder="Masukkan Kelurahan">
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>RT:</label>
                            <input type="text" name="RT" class="form-control" placeholder="RT">
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>RW:</label>
                            <input type="text" name="RW" class="form-control" placeholder="RW">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Kode Pos:</label>
                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Alamat:</label>
                            <textarea class="form-control" name="alamat" rows="5" id="alamat" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Data Pendidikan -->
                <div class="alert alert-primary">
                    <strong>Data Pendidikan</strong>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Pendidikan Terakhir:</label>
                            <select class="form-control" name="pendidikan">
                                <option>Pilih</option>
                                <option value="SMA-IPA">SMA - IPA</option>
                                <option value="SMA-IPS">SMA - IPS</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Nama Sekolah:</label>
                            <input type="text" name="sekolah" class="form-control" placeholder="Masukkan Nama Sekolah">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Rata-rata Nilai Rapor Kelas 12:</label>
                            <input type="text" name="nilai_raport" class="form-control"
                                placeholder="Masukan Rata-rata nilai raport">
                        </div>
                    </div>
                </div>
                <!-- Data Wali -->
                <div class="alert alert-primary">
                    <strong>Data Wali</strong>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Nama Lengkap Wali:</label>
                            <input type="text" name="nama_wali" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Nomor Identitas (NIK):</label>
                            <input type="text" name="nik_wali" class="form-control" placeholder="Masukkan Nomor NIK">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tempat Lahir:</label>
                            <input type="text" name="tempat_lahir_wali" class="form-control" placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir_wali" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Kewarganegaraan:</label>
                            <select class="form-control" name="kewarganegaraan_wali">
                                <option>Pilih</option>
                                <option value="WNI">Warga Negara Indonesia</option>
                                <option value="WNA">Warga Negara Asing</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Agama:</label>
                            <select class="form-control" name="agama_wali">
                                <option>Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Jenis Kelamin:</label>
                            <select class="form-control" name="jk_wali">
                                <option>Pilih</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>No Telp:</label>
                            <input type="text" name="notelp_wali" class="form-control" placeholder="Masukkan No Telp">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Penghasilan Wali:</label>
                            <select class="form-control" name="penghasilan_wali">
                                <option>Pilih Penghasilan</option>
                                <option value="1">1.000.000-3.000.000</option>
                                <option value="2">3.000.000-5.000.000</option>
                                <option value="3">5.000.000-10.000.000</option>
                                <option value="4">10.000.000-20.000.000</option>
                                <option value="5">>20.000.000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Pilih Prodi -->
                <div class="alert alert-primary">
                    <strong>Pilihan Program Studi</strong>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pilih Program Studi 1:</label>
                            <select class="form-control" name="prog1">
                                <option>Pilih</option>
                                <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                                <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                                <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                                <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                                <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pilih Program Studi 2:</label>
                            <select class="form-control" name="prog2">
                                <option>Pilih</option>
                                <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                                <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                                <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                                <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                                <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- submit -->
                    <div class="col-sm-4">
                        <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>