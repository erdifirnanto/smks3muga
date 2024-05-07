<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAFINDA</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"  />
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/templatemo-edu-meeting.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/form.css') }}" />
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <h5 class="card-header judul-form">PERSYARATAN</h5>
            <div class="card-body">
                <ul>
                    <li>Mengisi formulir pendaftaran</li>
                    <li>Menyerahkan fotokopi akta kelahiran dan kartu keluargan</li>
                    <li>Fotokopi ijazah atau surat kelulusan</li>
                    <li>Fotokopi KTP Orang Tua/Wali</li>
                    <li>Pas foto 3x4 dan 4x6 (5 lembar)</li>
                </ul>
            </div>
        </div>
        <div class="card mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <h5 class="card-header judul-form">form pendaftaran</h5>
            <div class="card-body">
                <form method="POST" id="validate" enctype="multipart/form-data"
                    action="{{ route('store.pendaftaran') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control" required id="tempat_lahir" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select " id="jenis_kelamin"
                                name="jenis_kelamin" required aria-label=".form-select example">
                                <option selected value="">Open this select menu</option>
                                <option value="Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat_rumah" class="col-sm-2 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat_rumah" class="form-control" id="alamat_rumah" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_wali" class="col-sm-2 col-form-label">Nama Wali</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_wali" class="form-control" id="nama_wali" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email Aktif</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nohp" class="col-sm-2 col-form-label">No HP / WA Aktif</label>
                        <div class="col-sm-10">
                            <input type="number" name="nohp" class="form-control" id="nohp" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <strong>Tipe File jpg atau png</strong>
                    </div>
                    <div class="row mb-3">
                        <label for="Tanggal-lahir" class="col-sm-2 col-form-label">Foto 3 x 4</label>
                        <div class="col-sm-10">
                            <input class="form-control" accept="image/*" name="foto_murid" type="file" id="formFile">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>
                <button type="submit" class="btn mt-4 btn-light border border-success"><a
                        style="text-decoration: none; color:inherit;"
                        href="https://api.whatsapp.com/send?phone=6281391144494"> <i class="fa-brands fa-whatsapp"
                            style="margin-right: 2px;"></i>Hubungi Kami</a></button>
            </div>

        </div>
        @include('sweetalert::alert')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="{{ asset('admin/js/validasi.js') }}"></script>
    <script type="text/javascript">
        $("#validate").validate({
            rules: {
                nama: {
                    required: true,
                },
                tanggal_lahir: {
                    required: true,
                },
                tempat_lahir: {
                    required: true,
                },
                jenis_kelamin: {
                    required: true,
                },
                asal_sekolah: {
                    required: true,
                },
                alamat_rumah: {
                    required: true,
                },
                email: {
                    required: true,
                },
                nohp: {
                    required: true,
                    number: true,
                },
                foto_murid: {
                    required: true,
                },

            },
        });
    </script>
</body>

</html>
