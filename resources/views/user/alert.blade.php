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
        <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="margin-top: 130px;">
            <h5 class="card-header judul-form">PENGUMUMAN</h5>
            <div class="card-body">
                <h4 class="text-center">Selamat Anda Telah Berhasil Melakukan Pendaftaran di sekolah SMK Safinatul Huda, Informasi Lebih Lanjut Akan Kami Kirim Lewat WA. </h4>
                <h4 class="text-center mt-3">Terima Kasih</h4>
                <div class="d-flex justify-content-center">
                    <a href="{{route('dashboard.user')}}" class=" mt-4 btn btn-primary mx-3">Kembali Ke Dashboard</a>
                    <button type="submit" class=" btn mt-4 btn-light border border-success"><a
                        style="text-decoration: none; color:inherit;"
                        href="https://api.whatsapp.com/send?phone=6281391144494"> <i class="fa-brands fa-whatsapp"
                            style="margin-right: 2px;"></i>Hubungi Kami</a></button>
                </div>
                
            </div>
        </div>
        
        
    </div>
   
</body>

</html>
