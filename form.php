<html lang="id-ID">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/ripple-button.css">
        <title>Data Kartu Tanda Penduduk</title>
    </head>
    <body>
        <form action="result.php" enctype="multipart/form-data" method="post" class="panel-form">
            <table class="pos-center">
                <tr>
                    <td>
                        <div class="container-fluid">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="title-header">DATA KARTU PENDUDUK INDONESIA</div>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    NIK <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="number" id="nik" name="nik" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Nama Lengkap <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="nama_lengkap" name="nama_lengkap" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Tempat Lahir <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="tempat_lahir" name="tempat_lahir" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Tanggal Lahir <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Jenis Kelamin <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select id="jenis_kelamin" name="jenis_kelamin">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Golongan Darah <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select id="gol_darah" name="gol_darah">
                                                        <option value="-">-</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="AB">AB</option>
                                                        <option value="O">O</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Alamat <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <textarea id="alamat" name="alamat" required></textarea>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    RT/RW <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="number" id="rt" name="rt" class="rt" required/>
                                                        <span class="form-item-separator">/</span>
                                                    <input type="number" id="rw" name="rw" class="rw" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Kel/Desa <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="kel_desa" name="kel_desa" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Kecamatan <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="kecamatan" name="kecamatan" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Agama <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select name="agama" id="agama">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Status Perkawinan <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select name="status_perkawinan" id="status_perkawinan">
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Pekerjaan <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" name="pekerjaan" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Kewarganegaraan <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select name="kewarganegaraan" id="kewarganegaraan">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Foto Diri <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input id="foto_diri" name="foto_diri" type="file" required/>
                                                </label>
                                            </div>

                                            <div class="button-area">
                                                <button type="reset" class="for_ripple btn">BATAL</button>
                                                <button type="submit" class="for_ripple btn">CETAK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<script src="js/ripple-button.js"></script>