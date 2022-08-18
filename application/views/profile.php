<div class="container-form">
        
        <p><?=$data_pendaftar;?></p>
        <h1 class="profile" style="color: #c99778;">Data Pendaftaran Mahasiswa Baru</h1>
        <form action="<?php echo base_url('index.php/Form/get_data'); ?>" method="post" class="container-form last" style="border: none; padding-left: 0px;">
            <!-- data diri -->
            <div class="title">Data Diri</div>
            <div class="row">
                <div class="col-6">
                    <label>Nama Lengkap</label><br>
                    <input type="text" name="nama_pendaftar" placeholder="Masukkan Nama Lengkap" class="form" >
                </div>
                <div class="col-4">
                    <label>Nomor Identitas (NIK)</label><br>
                    <input type="text" name="nik_pendaftar" placeholder="Masukkan NIK" class="form" >
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Tempat Lahir</label><br>
                    <input type="text" name="tempatlahir_pendaftar" placeholder="Masukkan Tempat Lahir" class="form" >
                </div>
                <div class="col-3">
                    <label>Tanggal Lahir</label><br>
                    <input type="date" name="tanggallahir_pendaftar" max="2005-12-31" min="1990-01-01" class="form" >
                </div>
                <div class="col-4">
                    <label>Kewarganegaraan</label><br>
                    <select name="kewarganegaraan_pendaftar" class="form" >
                        <option>-- Pilih Kewarganegaraan --</option>
                        <option value="WNI">Warga Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Email</label><br>
                    <input type="email" name="email_pendaftar" placeholder="Masukkan Email" class="form" >
                </div>
                <div class="col-3" style="margin-left: 10px;">
                    <label>No Telpon</label><br>
                    <input type="tel" name="telp_pendaftar" placeholder="Masukkan No. Telepon" class="form" >
                </div>
                <div class="col-2" style="margin-left: 5px;">
                    <label>Agama</label><br>
                    <select name="agama_pendaftar" class="form" >
                        <option>-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-2">
                    <label>Jenis Kelamin</label><br>
                    <select name="jk_pendaftar" class="form" >
                        <option>-- Pilih gender --</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <!-- Riwayat Pendidikan -->
            <div class="title">Data Pendidikan</div>
            <div class="row">
                <div class="col-4">
                    <label>Nama Sekolah</label><br>
                    <input type="text" name="sekolah" placeholder="Masukkan Nama Sekolah" class="form" >
                </div>
                <div class="col-3">
                    <label>Jurusan di Sekolah</label><br>
                    <input type="text" name="jurusan_sekolah" placeholder="Masukkan Jurusan" class="form" >
                </div>
                <div class="col-3">
                    <label>Rata-rata semester 5</label><br>
                    <input type="number" name="nilai_akhir" placeholder="Masukkan Nama Sekolah" class="form" >
                </div>
            </div>
            <!-- Data alamat asal -->
            <div class="title">Data Alamat Asal</div>
            <div class="row">
                <div class="col-3">
                    <label>Provinsi</label><br>
                    <input type="text" name="provinsi" placeholder="Masukkan Provinsi" class="form" >
                </div>
                <div class="col-4">
                    <label>Kabupaten/Kota</label><br>
                    <input type="text" name="kabupaten" placeholder="Masukkan Kabupaten" class="form" >
                </div>
                <div class="col-3">
                    <label>Kecamatan</label><br>
                    <input type="text" name="kecamatan" placeholder="Masukkan Kecamatan" class="form" >
                </div>
            </div>
            <div class="row" style="justify-content: flex-start; gap: 30px; margin-left: 5px;">
                <div class="col-3">
                    <label>Kelurahan</label><br>
                    <input type="text" name="kelurahan" placeholder="Masukkan Kelurahan" class="form" >
                </div>
                <div class="col-1">
                    <label>RT</label><br>
                    <input type="text" name="RT" placeholder="RT" class="form" >
                </div>
                <div class="col-1">
                    <label>RW</label><br>
                    <input type="text" name="RW" placeholder="RW" class="form" >
                </div>
                <div class="col-2">
                    <label>Kode Pos</label><br>
                    <input type="text" name="kode_pos" placeholder="Kode Pos" class="form" >
                </div>
            </div>
            <div class="textarea" style="font-family: Poppins;">
                <label>Alama Lengkap</label><br>
                <textarea class="form" name="alamat_lengkap" placeholder="Masukkan Alamat" ></textarea>
            </div>
            <!-- Data Wali -->
            <div class="title">Data Wali</div>
            <div class="row">
                <div class="col-6">
                    <label>Nama Lengkap Wali</label><br>
                    <input type="text" name="nama_wali" placeholder="Masukkan Nama Lengkap" class="form" >
                </div>
                <div class="col-4">
                    <label>Nomor Identitas (NIK)</label><br>
                    <input type="text" name="nik_wali" placeholder="Masukkan NIK" class="form" >
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>Tempat Lahir</label><br>
                    <input type="text" name="tempatlahir_wali" placeholder="Masukkan Tempat Lahir" class="form" >
                </div>
                <div class="col-3">
                    <label>Tanggal Lahir</label><br>
                    <input type="date" name="tanggallahir_wali" max="1999-12-31" class="form" >
                </div>
                <div class="col-4">
                    <label>Kewarganegaraan</label><br>
                    <select name="kewarganegaraan_wali" class="form" >
                        <option>-- Pilih Kewarganegaraan --</option>
                        <option value="WNI">Warga Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>No Telpon</label><br>
                    <input type="tel" name="telp_wali" placeholder="Masukkan No. Telepon" class="form" >
                </div>
                <div class="col-3" style="margin-left: 5px;">
                    <label>Penghasilan</label><br>
                    <select name="penghasilan_wali" class="form" >
                        <option>-- Pilih kisaran penghasilan --</option>
                        <option value="1">0 - 2.000.000</option>
                        <option value="2">2.000.000 - 5.000.000</option>
                        <option value="3">5.000.000 - 10.000.000</option>
                        <option value="4">10.000.000 - 20.000.000</option>
                        <option value="4">>20.000.000</option>
                    </select>
                </div>
                <div class="col-2" style="margin-left: 5px;">
                    <label>Jenis Kelamin</label><br>
                    <select name="jk_wali" class="form" >
                        <option>-- Pilih gender --</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-2">
                    <label>Agama</label><br>
                    <select name="agama_wali" class="form" >
                        <option>-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <!-- Pilih prodi -->
            <div class="title">Pilihan Program Studi</div>
            <div class="row" style="justify-content: flex-start; margin-left: 5px;">
                <div class="col-4" style="margin-right: 15px;">
                    <label>Pilih Program Studi 1</label><br>
                    <select name="prodi1" class="form" >
                        <option>-- Pilih Prodi --</option>
                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                        <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                        <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Pilih Program Studi 2</label><br>
                    <select name="prodi2" class="form" >
                        <option id="placehold">-- Pilih Prodi --</option>
                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                        <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                        <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
                    </select>
                </div>
            </div>
            <div class="row"></div>
            <div class="row" style="height: 50px; justify-content: flex-start; margin-left: 5px;">
                <input type="reset" value="Reset" class="btn sc two" style="color: #c99778;">
                <input type="submit" value="Submit" class="btn pr two">
            </div>
        </form>