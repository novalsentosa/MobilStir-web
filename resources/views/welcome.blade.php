<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!--font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!--My Stlye-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css'); }}">

    <!--Logo tittle-->
    <link rel="icon" href="assets/img/logo small MobilStir.png" 
    type="image/x-icon">
    
    <title>MobilStir</title>
  </head>

  <body>
  
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo small MobilStir.png" alt="" width="30" 
                class="d-inline-block align-text-top me-3">
            MobilStir</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">LAYANAN</a>
              </li>
              <li class="nav-item mx-2"><a href="" class="nav-link">FITUR</a>
              </li>
              <li class="nav-item mx-2"><a href="" class="nav-link">KONTAK</a>
              </li>
            </ul>

            <div>
                <button class="button-primary">Daftar</button>
                <button class="button-secondary">Masuk</button>
            </div>

          </div>
        </div>
      </nav>

     <!--Hero Section Layer 1-->
     <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Temukan
                        Mentor belajar Stir Anda</h1>
                    <p><span class="fw-bold">MobilStir</span> hadir untuk temukan mentor terbaik
                        untukmu, yang dipelajari dengan sumber 
                        terpercaya.</p>

                        <button class="button-lg-primary">TEMUKAN MENTOR</button>
                        <a href="#">
                            <img src="assets/img/button arrow.png" alt="">
                        </a>
                </div>
            </div>

            <img src="assets/img/Hero Banner.png" alt="" class="position-absolute end-0 bottom-0
            img-hero">
            <img src="assets/img/accsent.png" alt="" class="accent-img h-100 position-absolute top-0 start-0">
        </div>
     </section>

     <!-- Layanan Section Layer 2-->
     <section id="layanan">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Layanan Kami</h2>
            <span class="sub-title">MobilStir telah hadir menjadi solusi bagi kamu</span>
          </div>
        </div>

        <div class="row mt-5">
         
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="assets/img/mobil matic-icon.png" alt="" 
                class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Sewa Mobil Matic</h3>
              <p class="mt-3">StirMobil kini jadi kenyataan, sewa 
                mobil matic dengan fasilitas terbaik
                dengan mobil yang nyaman.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="assets/img/mobil manual-icon.png" alt="" 
                class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Sewa Mobil Manual</h3>
              <p class="mt-3">Sewa Mobil manual dalam kondisi baik untuk  
                pembelajaran yang lebih intens dan lebih 
                mendasar.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="assets/img/pilih mentor.png" alt="" 
                class="position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Pilih Mentormu Sekarang</h3>
              <p class="mt-3">Pilih mentor kesukaanmu dengan pelatihan 
                terbaik kualitas terjamin dari sumber 
                terpercaya.</p>
            </div>
          </div>

        </div>
      </div>
     </section>

     <!-- Search Section BERMASALAH LAYER 3-->
     <section id="search" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2>
              Temukan Mentor Impianmu
            </h2>

            <p>
              sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya tersembunyi, dengan ratusan mentor untuk anda
            </p>
          </div>

          <div class="col-10 mx-auto mt-5">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Pilih" type="button" role="tab" aria-controls="home" aria-selected="true">Pilih</button>
              
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Sewa" type="button" role="tab" aria-controls="profile" aria-selected="false">Sewa</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#DaftarMentor" type="button" role="tab" aria-controls="contact" aria-selected="false">Daftar Mentor</button>
              
              </li>
            </ul>
    
            <div class="tab-content" id="myTabContent">

<!--#Pilih-->
              <div class="tab-pane fade show active" id="Pilih" role="tabpanel" aria-labelledby="home-tab">
                
                <!-- Dropdown Tipe Mobil -->
                <div class="input-group input-cari mb-3">
                  <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    
                    <img src="assets/img/Tipe mobil.png" class="d-block d-lg-inline mx-auto" alt="">
                    Tipe Mobil</button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
    
                  <!-- Dropdown Range Harga -->
                  <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            
                    <img src="assets/img/Range harga icon.png" class="d-block d-lg-inline mx-auto" alt="">
                    Range Harga</button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                  <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan lokasi, ID, Mobil">
                  <button class="button-primary" type="button" id="button-addon2">Cari</button>
                </div>

                </div>
              <div class="tab-pane fade" id="Sewa" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tab-pane fade show active" id="Pilih" role="tabpanel" aria-labelledby="home-tab">
                
                  <!-- Dropdown Tipe Mobil -->
                  <div class="input-group input-cari mb-3">
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      
                      <img src="assets/img/Tipe mobil.png" class="d-block d-lg-inline mx-auto" alt="">
                      Tipe Mobil</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
      
                    <!-- Dropdown Range Harga -->
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              
                      <img src="assets/img/Range harga icon.png" class="d-block d-lg-inline mx-auto" alt="">
                      Range Harga</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan lokasi, ID, Mobil">
                    <button class="button-primary" type="button" id="button-addon2">Cari</button>
                  </div>
                
              </div>
              <div class="tab-pane fade" id="Daftar Mentor" role="tabpanel" aria-labelledby="contact-tab">
                <div class="tab-pane fade show active" id="Pilih" role="tabpanel" aria-labelledby="home-tab">
                
                  <!-- Dropdown Tipe Mobil -->
                  <div class="input-group input-cari mb-3">
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      
                      <img src="assets/img/Tipe mobil.png" class="d-block d-lg-inline mx-auto" alt="">
                      Tipe Mobil</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
      
                    <!-- Dropdown Range Harga -->
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              
                      <img src="assets/img/Range harga icon.png" class="d-block d-lg-inline mx-auto" alt="">
                      Range Harga</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan lokasi, ID, Mobil">
                    <button class="button-primary" type="button" id="button-addon2">Cari</button>
                  </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>

     <!-- Rekomendasi Section -->
     <section id="rekomendasi">
      <div class="container">
        <div class="row mb-5 mt-5">
          <div class="col-12 text-center">
            <h2>Rekomendasi Paket Untuk Mu</h2>
          </div>
        </div>

        <div class="row">

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/car image.png" alt="">
              <div class="card-body">
                <h4>IDR.450.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa</span> </p>
              </div>
              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> Ayla
                 <p>Manual</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Rosita Ita</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>2 sesi</p>
                </span>

              </div>
            </div>
          </div>

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/agus layer.png" alt="">
              <div class="card-body">
                <h4>IDR.350.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa </span> </p>
              </div>

              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> Sedan
                 <p>Manual</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Agus</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>3 sesi</p>
                </span>
                
              </div>

            </div>
          </div>

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/danny.png" alt="">
              <div class="card-body">
                <h4>IDR.500.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa </span> </p>
              </div>

              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> BMW
                 <p>Otomatis</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Danny</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>2 sesi</p>
                </span>

              </div>

            </div>
          </div>

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/febiyola.png" alt="">
              <div class="card-body">
                <h4>IDR.700.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa </span> </p>
              </div>

              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> Wuling
                 <p>Otomatis</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Febiyola</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>3 sesi</p>
                </span>
              </div>

            </div>
          </div>

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/Agus purwadi.png" alt="">
              <div class="card-body">
                <h4>IDR.500.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa </span> </p>
              </div>

              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> Avanza
                 <p>Manual</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Agus Purwadi</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>3 sesi</p>
                </span>

              </div>

            </div>
          </div>

          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 19rem;">
              <img src="assets/img/Intan farida.png" alt="">
              <div class="card-body">
                <h4>IDR.650.000</h4>
                <p class="mb-4 lh-sm">Jl. Soekarno Hatta No.1 <br> <span class="text-danger">Sewa </span> </p>
              </div>

              <div class="card-fasilitas d-flex justify-content-between px-0">
                <span>
                  <img src="assets/img/mobil icon layer 4.png" alt=""> Mercedes
                 <p>MOtomatis</p>
                </span>

                <span>
                  <img src="assets/img/Tipe mobil.png" alt=""> Mentor
                 <p>Intan Farida</p>
                </span>

                <span>
                  <img src="assets/img/Latihan icon.png" alt=""> Latihan
                 <p>3 sesi</p>
                </span>

              </div>

            </div>
          </div>
        </div>
      </div>
     </section>

     <!-- Jadwal Pembelajaran Section -->
     <section id="jadwal">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Jadwal Pembelajaran</h2>
            
            <div class="mt-3">
            <p>
              Jadwal ini dapat berubah menyesuaikan kondisi 
              dan kesepakatan antara <div class="mt-2"> Mentor dan User </div>
            </p>
             </div>

              <div class="col-6 mt-5 time">
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">Senin</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">selasa</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">selasa</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">selasa</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">selasa</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>
                <div class="d-flex justify-content-around mb-3">
                  <div class="p-2">selasa</div>
                  <div class="p-2">12.00 - 18:00</div>
                </div>

          
            </div>
        </div>
      </div>
     </section>

     <!-- Kontak Person Section -->
     <Section id="contact">
      <div class="container-fluid overlay h-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Butuh Konsultasi..? 
                Silahkan kontak kami
                Kami Siap Membantu </h3>
                <div class="kontak">
                  <h6>Kontak</h6>
                  <div class="mb-3">
                    <img src="assets/img/Jalan.png" alt="">
                    <a href="#">Jl. Puspowarno Tengah No.13 
                      kota Semarang, Indonesia</a>
                  </div>

                  <div class="mb-3">
                    <img src="assets/img/icon telepon.png" alt="">
                    <a href="#">021-6545-2041</a>
                  </div>

                  <div class="mb-3">
                    <img src="assets/img/icon email.png" alt="">
                    <a href="#">StirMobil@gmail.com</a>
                  </div>

                  <h6>Social Media</h6>
                  <a href="#"><img src="assets/img/icon facebook.png" alt=""></a>
                  <a href="#"><img src="assets/img/icon twitter.png" alt=""></a>
                  <a href="#"><img src="assets/img/icon intagram.png" alt=""></a>
                  <a href="#">MobilStir</a>
                </div>
            </div>
            <div class="col-md-6">
              <div class="card-contact w-100">
                  <form>
                    <h2>Ada Pertanyaan..?</h2>

          <!-- Pertanyaan Email -->
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                    </div>
          <!-- pertanyaan Anda -->
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda..</label>
                    </div>

                    <button type="submit"
                     class="button-kontak">Kirim</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     </Section>

     <footer class="d-flex align-items-center position-relative">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex align-items-center">
              <img src="assets/img/logo small MobilStir.png" alt="">
              <a href="#" class="ms-3">MobilStir</a>
            </div>
            <div class="col-md-5 d-flex justify-content-evenly">
              <a href="#hero">Beranda</a>
              <a href="#layanan">Layanan</a>
              <a href="#fitur">fitur</a>
              <a href="#contact">kontak</a>
            </div>
          </div>
          <div class="row position-absolute copyright start-50 translate-middle">
            <div class="col-12">
              <p>Copyright by Noval Adianto All Right Reserved.</p>
            </div>
          </div>
        </div>
      </div>
     </footer>

     <script src="js/script.js"></script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>