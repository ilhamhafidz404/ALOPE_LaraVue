<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/testi.css">
    <link rel="stylesheet" href="/css/glider.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <main id="app">
      <navbar-component></navbar-component>
      <header-component></header-component>
      <main class="mt-5">
        <div class="album py-5">
          <div class="container-fluid">
            <h3 class="mb-4 text-center text-uppercase">Serie</h3>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <a href="">
                  <div class="card border-0 bg-transparent m-auto mb-4" style="width: 90% !important;">
                    <img src="{{asset('storage/img/default.jpg')}}" class="card-img-rounded" width="100%" height="201px">
                    <div class="card-body">
                      <span class="badge" style="background-color:red">
                        asdf
                      </span>
                      <h4 class="card-title my-2 text-dark">
                        fewfe
                      </h4>
                      <div class="card-text d-flex justify-content-between">
                        <small class="text-muted">
                          2 Hari yang lalu
                        </small>
                        <small class="text-secondary">Serie<span class="text-success fw-bold">Complete</span></small>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-4">
                <a href="">
                  <div class="card border-0 bg-transparent m-auto mb-4" style="width: 90% !important;">
                    <img src="{{asset('storage/img/default.jpg')}}" class="card-img-rounded" width="100%" height="201px">
                    <div class="card-body">
                      <span class="badge" style="background-color:red">
                        asdf
                      </span>
                      <h4 class="card-title my-2 text-dark">
                        fewfe
                      </h4>
                      <div class="card-text d-flex justify-content-between">
                        <small class="text-muted">
                          2 Hari yang lalu
                        </small>
                        <small class="text-secondary">Serie<span class="text-success fw-bold">Complete</span></small>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-4">
                <a href="">
                  <div class="card border-0 bg-transparent m-auto mb-4" style="width: 90% !important;">
                    <img src="{{asset('storage/img/default.jpg')}}" class="card-img-rounded" width="100%" height="201px">
                    <div class="card-body">
                      <span class="badge" style="background-color:red">
                        asdf
                      </span>
                      <h4 class="card-title my-2 text-dark">
                        fewfe
                      </h4>
                      <div class="card-text d-flex justify-content-between">
                        <small class="text-muted">
                          2 Hari yang lalu
                        </small>
                        <small class="text-secondary">Serie<span class="text-success fw-bold">Complete</span></small>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="latest-blog py-3 mt-5">
          <div class="container-fluid">
            <div class="m-auto latest-blog-title rounded shadow text-center py-1 mb-4">
              <h3 class="text-uppercase text-white m-0">Blog Terbaru</h3>
            </div>
            <div data-name="Multiple Item" class="glider-contain multiple">
              <div class="gradient-border-bottom">
                <div class="gradient-border">
                  <div class="glider" id="blog-series">
                    <div class="mx-2">
                      <a href="">
                        <div class="card shadow-sm me-2">
                          <div class="blog-serie w-100" style="background-image: url({{asset('storage/img/default.jpg')}})"></div>
                          <div class="card-body pt-1">
                            <small class="text-muted">
                              htrh
                            </small>
                            <h5 class="card-title mb-4 text-dark mt-0">
                              hth
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <img src="" alt="htr" class="rounded-circle writer-img">
                                <small class="text-muted ms-2">
                                  htrh
                                </small>
                              </div>
                              <small class="text-muted">
                                rgrg
                              </small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="mx-2">
                      <a href="">
                        <div class="card shadow-sm me-2">
                          <div class="blog-serie w-100" style="background-image: url({{asset('storage/img/default.jpg')}})"></div>
                          <div class="card-body pt-1">
                            <small class="text-muted">
                              htrh
                            </small>
                            <h5 class="card-title mb-4 text-dark mt-0">
                              hth
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <img src="" alt="htr" class="rounded-circle writer-img">
                                <small class="text-muted ms-2">
                                  htrh
                                </small>
                              </div>
                              <small class="text-muted">
                                rgrg
                              </small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="mx-2">
                      <a href="">
                        <div class="card shadow-sm me-2">
                          <div class="blog-serie w-100" style="background-image: url({{asset('storage/img/default.jpg')}})"></div>
                          <div class="card-body pt-1">
                            <small class="text-muted">
                              htrh
                            </small>
                            <h5 class="card-title mb-4 text-dark mt-0">
                              hth
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <img src="" alt="htr" class="rounded-circle writer-img">
                                <small class="text-muted ms-2">
                                  htrh
                                </small>
                              </div>
                              <small class="text-muted">
                                rgrg
                              </small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="mx-2">
                      <a href="">
                        <div class="card shadow-sm me-2">
                          <div class="blog-serie w-100" style="background-image: url({{asset('storage/img/default.jpg')}})"></div>
                          <div class="card-body pt-1">
                            <small class="text-muted">
                              htrh
                            </small>
                            <h5 class="card-title mb-4 text-dark mt-0">
                              hth
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <img src="" alt="htr" class="rounded-circle writer-img">
                                <small class="text-muted ms-2">
                                  htrh
                                </small>
                              </div>
                              <small class="text-muted">
                                rgrg
                              </small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="mx-2">
                      <a href="">
                        <div class="card shadow-sm me-2">
                          <div class="blog-serie w-100" style="background-image: url({{asset('storage/img/default.jpg')}})"></div>
                          <div class="card-body pt-1">
                            <small class="text-muted">
                              htrh
                            </small>
                            <h5 class="card-title mb-4 text-dark mt-0">
                              hth
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <img src="" alt="htr" class="rounded-circle writer-img">
                                <small class="text-muted ms-2">
                                  htrh
                                </small>
                              </div>
                              <small class="text-muted">
                                rgrg
                              </small>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <button role="button" aria-label="Previous" class="glider-prev" id="glider-prev-2"><i class="fa fa-chevron-left text-white"></i></button>
              <button role="button" aria-label="Next" class="glider-next" id="glider-next-2"><i class="fa fa-chevron-right text-white"></i></button>
              <div id="dots2"></div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svgTesti"><path fill="#36275D" fill-opacity="1" d="M0,288L1440,160L1440,320L0,320Z"></path></svg>
        <div id="testi" class="pt-1 position-relative">
          <section class="container">
            <br>
            <div class="title text-center">
              <h3 class="text-white mt-5">TESTIMONI</h3>
              <p class="text-white text-muted">
                Apa kata mereka?
              </p>
            </div>
            <div class="slider2">
              <div class="slide slide-1">
                <div class="slide-text">
                  <p class="testimonial-text">
                    “
                    sblm masuk alope citra blank bgt tentang pemrogramman. dan setelah gabung dengan alope trnyata seru juga belajar pemrograman, pusing cuma nagih wkwk.Karna alope citra jdi ngerti gimana bikin web HTML. Btw aku lebih paham d ajarin ps alope tntang html,dripada ps lagi luring di kelas:"”
                  </p>
                  <p class="author-text">
                    Citra Perlita Apriliana Ayu
                    <span>Siswi SMK PERTIWI KUNINGAN</span>
                  </p>
                </div>
                <div class="slide-img">
                  <img src="{{asset('image/testi/citra.jpg')}}" alt="img">
                </div>
              </div>
              <div class="slide slide-2">
                <div class="slide-text">
                  <p class="testimonial-text">
                    “
                    Sebelumnya aku gatau programming itu apa,
                    Kaya bingung, cmn taunya bikin aplikasi gitu².
                    Terus kirain pas alope bakalan bosen,ternyata asik juga🗿🤙🏼
                    Jadi tauu mana yg awal nya gatauu,yaa pokonya seruu dahh,apalagi klo pas lagi pada pusing,beuhhh☺️”
                  </p>
                  <p class="author-text">
                    Ratu Jasmine Nawang Putri
                    <span>Siswi SMK PERTIWI KUNINGAN</span>
                  </p>
                </div>
                <div class="slide-img">
                  <img src="{{asset('image/testi/jasmine.jpg')}}" alt="img">
                </div>
              </div>
              <div class="slide slide-3">
                <div class="slide-text">
                  <p class="testimonial-text">
                    “ Setelah masuk alope saya jadi ngerti coding dengan pemahaman-pemahaman yg jelas,dan dapat dimengerti. ternyata  mengasyikan juga belajar web,dan menjadi point plus bisa ngerti coding duluan dibanding temen yg lain,yg tidak ikut komunitas ini🤟
                    Menggokil🤟😎 ”
                  </p>
                  <p class="author-text">
                    Masnun Muhaemin
                    <span>Siswa SMK PERTIWI</span>
                  </p>
                </div>
                <div class="slide-img">
                  <img src="{{asset('image/testi/masnun.jpg')}}" alt="img">
                </div>
              </div>
              <div class="slide slide-4">
                <div class="slide-text">
                  <p class="testimonial-text">
                    “ Ketika masuk alope diajarkan mengenai detail membuat web sederhana, awal awal pusing juga tapi sedikit demi sedikit jadi ngerti, lama lama asik juga ikut alope. diajarin sedikit demi sedikit jadi udah bisa ngebuat web sendiri, dan semoga alope terus ada biar orang tau betapa susahnya programming ✌️🤘 ”
                  </p>
                  <p class="author-text">
                    Naufal Nabil Nabawi
                    <span>Siswa SMK PERTIWI KUNINGAN</span>
                  </p>
                </div>
                <div class="slide-img">
                  <img src="{{asset('image/testi/naufal.jpg')}}" alt="testi-naufal">
                </div>
              </div>
              <div class="buttons">
                <div class="next"></div>
                <div class="prev"></div>
              </div>
            </div>
          </section>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svgTestiBottom"><path fill="#36275D" fill-opacity="1" d="M0,288L1440,160L1440,0L0,0Z"></path></svg>

        <div id="pricing" class="m-auto container-fluid">
          <h3 class="text-center fw-bold">ALOPE PREMIUM ACCESS</h3>
          <p class="text-center m-auto text-muted" style="width: 60%;">
            Beli akses Premium untuk mendapatkan Full Akses ke tutorial yang lebih keren dan Menyenangkan.
          </p>
          <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-5 col-xl-3 col-lg-4 p-0 mb-3">
              <div class="card border-0 shadow-sm p-3 text-center gold bg-white py-5">
                <h5>Gold</h5>
                <h3 class=" mt-4">
                  <sup>Rp.</sup>
                  <span class="fw-bold" style="font-size: 50px">
                    100
                  </span>
                  <sub class="fw-bold mb-2">
                    .000
                  </sub>
                </h3>
                <ul class="mt-4 mb-2">
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Akses Alope Journey
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Berbagi Cerita di Alope Journey
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Premium selama 3 Bulan
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Buat Post di Alope Circle
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Source Code Gratis
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Claim Ebook Alope secara Gratis
                  </li>
                </ul>
                <a href="" class="btn btn-primary text-white mt-4 btn_price">
                  Beli Akses
                </a>
              </div>
            </div>
            <div class="col-md-5 col-xl-3 col-lg-4 p-0 mb-3">
              <div class="card border-0 shadow-sm p-3 text-center platinum py-5 text-white">
                <h5>Platinum</h5>
                <h3 class=" mt-4">
                  <sup>Rp.</sup>
                  <span class="fw-bold" style="font-size: 50px">
                    170
                  </span>
                  <sub class="fw-bold mb-2">
                    .000
                  </sub>
                </h3>
                <ul class="mt-4 mb-2">
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Akses Alope Journey
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Berbagi cerita di Alope Journey
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Premium selama 6 bulan
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Buat Post di Alope Circle
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Source Code
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Latihan tambahan
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check me-2 text-success"></i>
                    Claim Ebook Alope secara Gratis
                  </li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=6283871352030&text=Hai%20Saya%20Ingin%20Berlangganan%20di%20ALOPE" class="btn btn-primary text-white mt-4 btn_price">
                  Beli Akses
                </a>
              </div>
            </div>
          </div>
          <div class="mx-auto" style="width: 50%">
            <a href="" class="mt-2 d-block text-end">
              Lihat Paket lainnya
            </a>
          </div>
        </div>

        <br><br>
        <div id="faq" class="mt-5">
          <div class="container-fluid">
            <h3 class="text-center fw-bold mb-0">FAQ</h3>
            <p class="text-center text-muted">
              Yang sering ditanyakan tentang ALOPE
            </p>
            <div class="qna row mt-5">
              <div class="col-md-6 mb-3">
                <div>
                  <p class="fw-bold" style="color: #36275D">
                    <i class="fas fa-question me-2"></i>
                    Kenapa saya harus gabung ALOPE?
                  </p>
                  <p class="text-muted">
                    ALOPE di rekomendasikan oleh beberapa Programming enthusiast khususnya yang masih pemula karena ALOPE menyenangkan dengan tutorial Beginner Friendly.
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div>
                  <p class="fw-bold" style="color: #36275D">
                    <i class="fas fa-question me-2"></i>
                    Bagaimana cara saya membayar Akses Premium?
                  </p>
                  <p class="text-muted">
                    Pembayaran bisa dilakukan dengan membayar via <b>E-Wallet</b> berupa <b>Gopay, Link Aja</b> atau lewat <b>OVO</b>. Bisa juga via Trasferbank, bisa ke <b>BCA, Mandiri</b> dan <b>BRI</b>
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div>
                  <p class="fw-bold" style="color: #36275D">
                    <i class="fas fa-question me-2"></i>
                    Siapa yang menjadi Tutor di ALOPE?
                  </p>
                  <p class="text-muted">
                    Ilham Hafidz, siswa SMK yang mengenal Web Programming sejak SMP dan sudah menyumbangkan beberapa Piala Perlombaan Programming di sekolahnya.
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div>
                  <p class="fw-bold" style="color: #36275D">
                    <i class="fas fa-question me-2"></i>
                    Apakah tutorial Gratis tersedia?
                  </p>
                  <p class="text-muted">
                    Yap, tentu. Bahkan 75% tutorial di ALOPE itu <b>Gratis</b>, tpi bagi kalian yang mau support silahkan Upgrade ke versi <b>Premium</b> atau bisa <b>Donate</b> di Saweria.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- GROUP -->
        <div id="group" class="mt-5">
          <div class="container-fluid">
            <h3 class="mb-0">Gabung dengan ALOPE</h3>
            <span>Jadi bagian dari Team??</span>
            <div class="row mt-3">
              <div class="col-md-6">
                <div class="facebook d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-facebook"></i>
                  </div>
                  <div class="text">
                    <h5>Facebook</h5>
                    <p class="text-muted">
                      Sukai Halaman Facebook kami untuk mendapatkan update terbaru
                    </p>
                  </div>
                </div>
                <div class="twitter  d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-twitter"></i>
                  </div>
                  <div class="text">
                    <h5>Twitter</h5>
                    <p class="text-muted">
                      Ikuti Twitter kami untuk mendapatkan update terbaru
                    </p>
                  </div>
                </div>
                <div class="instagram  d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-instagram"></i>
                  </div>
                  <div class="text">
                    <h5>Instagram</h5>
                    <p class="text-muted">
                      Ikuti Instagram kami untuk mendapatkan update terbaru seputar event-event dan aktifitas kami
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="discord  d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-discord"></i>
                  </div>
                  <div class="text">
                    <h5>Discord</h5>
                    <p class="text-muted">
                      Gabung dengan grup Discord kami untuk mendapatkan solusi koding dari mentor resmi Alope
                    </p>
                  </div>
                </div>
                <div class="youtube  d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-youtube"></i>
                  </div>
                  <div class="text">
                    <h5>Youtube</h5>
                    <p class="text-muted">
                      Ikuti Youtube supaya tidak ketinggalan video tutorial dari kami
                    </p>
                  </div>
                </div>
                <div class="telegram d-flex align-items-center sosmed">
                  <div class="i">
                    <i class="fs-1 fab fa-telegram"></i>
                  </div>
                  <div class="text">
                    <h5>Telegram</h5>
                    <p class="text-muted">
                      Gabung dengan grup Telegram kami untuk Mengobrol dengan team Alope yang lain
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer-component></footer-component>
    </main>

    <script src="https://kit.fontawesome.com/bfdfedea1a.js" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <script src="/js/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      const navbar = document.querySelector('.navbar')
      window.addEventListener('scroll', function() {
        navbar.classList.toggle('sticky', window.scrollY > 0);
      });

      const next = document.querySelector('.next');
      const prev = document.querySelector('.prev');
      const slides = document.querySelectorAll('.slide');

      let index = 0;
      display(index);
      function display (index) {
        slides.forEach((slide) => {
          slide.style.display = 'none';
        });
        slides[index].style.display = 'flex';
      }

      function nextSlide () {
        index++;
        if (index > slides.length - 1) {
          index = 0;
        }
        display(index);
      }
      function prevSlide () {
        index--;
        if (index < 0) {
          index = slides.length - 1;
        }
        display(index);
      }

      next.addEventListener('click', nextSlide);
      prev.addEventListener('click', prevSlide);


      var typed3 = new Typed("#typed", {
          strings: ["Web Programming", "Web Design", "Mobile App"],
          typeSpeed: 50,
          backSpeed: 50,
          smartBackspace: true, // this is a default
          loop: true,
      });

      // glider
      window.addEventListener('load', function () {
        window.glides = new Glider(document.getElementById('blog-series'), {
          slidesToShow: 3,
          slidesToScroll: 5,
          draggable: true,
          dots: '#dots2',
          arrows: {
            prev: '#glider-prev-2',
            next: '#glider-next-2'
          }
        })
      });
    </script>
  </body>
</html>
