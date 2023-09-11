<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Undangan Digital</title>
  <link rel="icon" type="image/png" sizes="450x450" href="./img/Logo (1).png">
  <!-- Hubungkan dengan CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="css/app.css"> -->


  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <!-- animasi aos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
  <!-- logo -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" integrity="sha256-HtsXJanqjKTc8vVQjO4YMhiqFoXkfBsjBWcX91T1jr8=" crossorigin="anonymous">



  <!-- JQUERY untuk tampilkan data wishes dan POST data ke DB -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#submitBtn").click(function() {
        var name = $("#name").val();
        var jumlah = $("#jumlah").val();
        var ucapan = $("#ucapan").val();

        $.ajax({
          type: "POST",
          url: "simpan-data.php",
          data: {
            name: name,
            jumlah: jumlah,
            ucapan: ucapan
          },
          success: function(response) {
            $("#result").html(response);
          }
        });
      });

      var currentPage = 1;

      function loadDataTable(page) {
        $.ajax({
          type: "GET",
          url: "ambil-data.php",
          method: "POST",
          data: {
            page: page
          },
          success: function(response) {
            $("#data_table").html(response);
          }
        });
      }

      // Panggil fungsi loadPage saat halaman dimuat
      $(document).ready(function() {
        loadDataTable(1);
      });

      //buttnon untuk pagination
      $(document).ready(function() {
        loadDataTable(currentPage); // Load initial page

        $('#prev-btn').click(function() {
          if (currentPage > 1) {
            currentPage--;
            loadDataTable(currentPage);
          }
        });

        $('#next-btn').click(function() {
          currentPage++;
          loadDataTable(currentPage);
        });
      });

    });
  </script>

</head>

<body>

  <!-- <div class="container"> -->

  <!-- Hero section -->
  <section id="hero" class="hero w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">
    <div class="container pb-2 pt-4">
      <main class="hero-content">
        <div class="hero-content-text1" data-aos="fade-right" data-aos-duration="2000">
          <p>THE WEDDING OF</p>

          <h3><span style="font-size: 4rem;">M</span>entari</h3>
          <h3>&</h3>
          <h3><span style="font-size: 4rem;">B</span>intang</h3>
        </div>

        <div class="hero-info" data-aos="fade-left" data-aos-duration="2000">
          <P>Dear: <span id="namaTamu"></span></P>
          <a href="#open-invitation" id="hero-button" class="btn btn-open-invitation text-white" onclick="enableScroll()">Open Invitation</a>
        </div>
      </main>
    </div>

  </section>

  <!-- hal-1 section -->
  <section id="open-invitation" class="hal-1 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

    <main>
      <div class="hal-1-content-1">
        <p>12 . 12 . 2024</p>
        <h3 class="mt-4">Mentari & Bintang</h3>
      </div>

      <p style="color: #8D6560;" class="hal-1-content-2 mt-4">Join us on our special day, where your <br> presence is cherished</p>
    </main>

  </section>

  <!-- hal-2 section ayat alkitab -->
  <section id="hal-2" class="hal-2 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white hidden">

    <main>
      <img src="img/photo3.png" alt="photo1" class="mt-4" data-aos="fade-right" data-aos-duration="2000">
      <img src="img/photo4.png" alt="photo2" class="mt-3" data-aos="fade-left" data-aos-duration="2000">

      <p style="color: #8D6560; font-size: 0.6875rem;" class="p1 mt-5" data-aos="fade-right" data-aos-duration="1700">"Two are better than one, because they have a good return for their labor: If either of them falls down, one can help the other up. But pity anyone who falls and has no one to help them up."</p>

      <p style="color: #53312D; font-weight: 700; font-size: 0.75rem;" class="p2" data-aos="fade-left" data-aos-duration="2000"><strong>Ecclesiastes 4 : 9 - 10</strong></p>

      <img class="mt-3" src="img/Heart.png" alt="heart" data-aos="fade-left" data-aos-duration="1500">
    </main>

  </section>

  <!-- end of hal-2 -->

  <!-- hal-3 section foto pengantin -->
  <section id="hal-3" class="hal-3 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

    <main>
      <h4 style="color: #53312D; font-size: 1.1875rem; letter-spacing: 0.0475rem; font-weight:500;" data-aos="fade-down" data-aos-duration="1500">THE GROOM AND THE BRIDE</h4>

      <div class="gambar1" data-aos="fade-left" data-aos-duration="2000">
        <img class="mt-3" src="img/groom.png" alt="groom photo">
        <h3 class="mt-3">Bintang Angkasa, S.kom</h3>
        <p>Putra pertama dari: <br>
          Bapak Purnama Bulan & Ibu Cakrawala Venus</p>
      </div>

      <h3 style="font-size: 2.5rem;" data-aos="fade-right" data-aos-duration="1500">&</h3>

      <div class="gambar2" data-aos="fade-right" data-aos-duration="2000">
        <img src="img/bride.png" alt="bride photo">
        <h3 class="mt-3">Mentari Gravita, S.kom</h3>
        <p>Putri pertama dari: <br>
          Bapak Galaksi Putra & Ibu Cahaya Putri</p>
      </div>
    </main>

  </section>

  <!-- end of hal-3 -->

  <!-- hal-4 section countdown -->

  <section id="hal-4" class="hal-4 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

    <main>
      <div class="pembungkus">

        <img src="img/Alarm.png" alt="time-img" data-aos="fade-right" data-aos-duration="2000">
        <h4 data-aos="fade-right" data-aos-duration="1500">Count Down to Our Day</h4>

        <!-- contdown item -->
        <div class="countdown" style="font-weight: bolder;" data-aos="fade-right" data-aos-duration="2000">

          <div class="gap">
            <div id="days"><strong>00</strong></div>
            <p style="font-weight:lighter">Days</p>
          </div>
          <div class="gap">
            <div id="hours"><strong>00</strong></div>
            <p style="font-weight:lighter">Hours</p>
          </div>
          <div class="gap">
            <div id="minutes"><strong>00</strong></div>
            <p style="font-weight:lighter">Minutes</p>
          </div>
          <div class="gap">
            <div id="seconds"><strong>00</strong></div>
            <p style="font-weight:lighter">Seconds</p>
          </div>

        </div>
        <!-- ... -->
        <img class="heart-shape mt-3" src="img/Img-Love.png" style="width: 14.80363rem; height: 11.83rem;" alt="photo 5" data-aos="fade-left" data-aos-duration="1500">

        <!-- alamat-1 -->
        <div class="alamat-1 mt-4" data-aos="fade-left" data-aos-duration="2000">

          <h3 style="font-family: Amita; font-weight: 600;" style="font-size:smaller">HOLY MATRIMONY</h3>
          <h6 class="mt-3" style="font-size:smaller">THURSDAY</h6>
          <h2 style="font-weight: 700;">12</h2>
          <h6 style="font-size:smaller">DECEMBER 2024</h6>


          <h5 style="font-weight: 700; font-size: 0.875rem;">
            <STr>16:00 - 18:00 WIB</STr>
          </h5>
          <p style="font-size: 0.75rem;" class="p mt-3">Gereja Getsemani Bali <br>
            Jl. Lorem Ipsum 12</p>


          <a class="btn" href="https://goo.gl/maps/o8tLhAUUWgSX2AYX7" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg> Open on Maps</a>
        </div>
        <!-- alamat-2 -->

        <div class="alamat-2 mt-5" data-aos="fade-right" data-aos-duration="1500">

          <h3 style="font-family: Amita; font-weight: 600;" style="font-size:smaller">WEDDING PARTY</h3>
          <h6 class="mt-3" style="font-size:smaller">THURSDAY</h6>
          <h2 style="font-weight: 700;">12</h2>
          <h6 style="font-size:smaller">DECEMBER 2024</h6>

          <h5 style="font-weight: 700; font-size: 0.875rem;">
            <STr>18:00 - 21:00 WIB</STr>
          </h5>
          <p style="font-size: 0.75rem;" class="p mt-3">Stone Villas Uluwatu Bali <br>
            Jl. Lorem Ipsum 24</p>


          <a class="btn" href="https://goo.gl/maps/o8tLhAUUWgSX2AYX7" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg> Open on Maps</a>
        </div>

      </div>


    </main>

  </section>

  <!-- end of hal-4 -->

  <!-- hal-5 section love story -->
  <section id="hal-5" class="hal-5 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

    <main>
      <h4 style="color: #53312D; font-size: 1.1875rem; letter-spacing: 0.0475rem; font-weight:500" data-aos="fade-down" data-aos-duration="1500">OUR LOVE STORY</h4>

      <div class="gambar1" data-aos="fade-right" data-aos-duration="2000">
        <img class="mt-3" src="img/love-story-1.png" alt="love story 1">
        <h3 class="mt-2 text-white">First Meet - 12 . 2 . 2019</h3>
      </div>


      <div class="gambar2 mt-5" data-aos="fade-left" data-aos-duration="1500">
        <img src="img/love-story-2.png" alt="love-story-2">
        <h3 class="mt-2 text-white">Dating - 12 . 12 . 2020</h3>

      </div>

      <div class="gambar3" data-aos="fade-right" data-aos-duration="2000">
        <img class="mt-5" src="img/love-story-3.png" alt="love-story-3">
        <h3 class="mt-2 text-white">Engaged - 12 . 2 . 2022</h3>

      </div>

      <div class="gambar4" data-aos="fade-left" data-aos-duration="1500">
        <img class="mt-5" src="img/love-story-4.png" alt="love-story-4">
        <h3 class="mt-2 text-white">Married - 12 . 12 . 2022</h3>

      </div>
    </main>

  </section>

  <!-- end of hal-5 -->

  <!-- hal-6 section moments -->

  <section style="background-color: #c9af95 !important; margin-top: -5px; margin-bottom: -5px;" id="galeri" class="hal-6">


    <div class="container pb-2 pt-4">
      <!-- <div class="card-body  shadow p-3"> -->
      <h1 class="font-estetik text-center py-3" data-aos="fade-down" data-aos-duration="1500" style="font-size: 2rem; font-family: Poppins;  font-size: 19px;
              font-style: normal; color:#53312D;" data-aos="fade-left" data-aos-duration="2000">Our Moments</h1>

      <p data-aos="fade-left" data-aos-duration="1500">"And over all these virtues put on love, which binds them all together in perfect unity."</p>
      <h5 data-aos="fade-left" data-aos-duration="2000">Colossians 3:14</h5>


      <div class="vidio-container d-flex justify-content-center align-item-center mt-3" data-aos="fade-left" data-aos-duration="2000">
        <video style="width: 329px;
              height: 160px;
              flex-shrink: 0; " autoplay muted>
          <source src="img/vidio_contoh.mp4" type="video/mp4">
          <!-- Tambahkan sumber video lainnya untuk browser yang tidak mendukung format mp4 -->
          Maaf, video tidak dapat diputar.
        </video>
      </div>

      <div class="parent mt-2">
        <div class="div1" data-aos="fade-right" data-aos-duration="2000"> <img src="img/moment-1.png" alt=""> </div>
        <div class="div2" data-aos="fade-left" data-aos-duration="1500"> <img src="img/moment-2.png" alt=""> </div>
        <div class="div3" data-aos="fade-right" data-aos-duration="2000"> <img src="img/moment-3.png" alt=""> </div>
        <div class="div4" data-aos="fade-left" data-aos-duration="1500"> <img src="img/moment-4.png" alt=""> </div>
        <div class="div5" data-aos="fade-right" data-aos-duration="2000"> <img src="img/moment-5.png" alt=""> </div>
        <div class="div6" data-aos="fade-left" data-aos-duration="1500"> <img src="img/moment-6.png" alt=""> </div>
      </div>

      <!-- </div> -->


    </div>

  </section>

  <!-- end of hal-6 -->



  <!-- hal-7 section wishes-->

  <section id="hal-7" class="hal-7 w-100 h-100 ">

    <main>
      <div class="pembungkus" data-aos="fade-up" data-aos-duration="2000">

        <h3 data-aos="fade-down" data-aos-duration="2000" class="mt-5">Wishes for the Couple</h3>
        <p>Your Blessings are an Honored Gift on Our Wedding Day</p>

        <div class="container mt-1 ">
          <form method="post" class="form-data" id="form-data">

            <div class="form-group" data-aos="fade-right" data-aos-duration="1500">
              <label for="nama" style="font-weight: 500; font-size:14px">Your Name</label>
              <input type="text" class="form-control custom-input " id="name" name="name" placeholder="Let us know who are you...">
            </div>

            <!-- <div class="form-group mt-4">
              <label for="jumlahOrang">Jumlah Orang</label>
              <input type="number" class="form-control custom-input" id="jumlah" name="jumlah" placeholder="Masukkan jumlah orang">
            </div> -->

            <div class="form-group mt-4" data-aos="fade-left" data-aos-duration="2000">
              <label for="ucapan" style="font-weight: 500; font-size:14px">Your Wishes</label>
              <textarea class="form-control custom-input" id="ucapan" name="ucapan" rows="3" placeholder="Send us your wishes..."></textarea>
            </div>

            <button name="simpan" id="submitBtn" value="submit" type="submit" class="btn btn-primary mx-auto text-center d-flex justify-content-center align-item-center text-white mt-5" data-aos="fade-up" data-aos-duration="1500">

              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Communication / Paper_Plane">
                  <path id="Vector" d="M7.37054 9.12782L10.6013 5.89705M13.9062 3.92537L11.1791 12.7884C10.9347 13.583 10.8125 13.9802 10.6017 14.1119C10.4188 14.2262 10.1922 14.2449 9.99309 14.1623C9.76348 14.067 9.57736 13.6953 9.20559 12.9518L7.47829 9.49715C7.41929 9.37916 7.38977 9.32017 7.35036 9.26904C7.31539 9.22368 7.27488 9.18297 7.22952 9.148C7.17839 9.1086 7.11925 9.0791 7.00125 9.02011L3.54665 7.2928C2.80311 6.92104 2.43131 6.73522 2.33604 6.50561C2.25341 6.30648 2.27225 6.07962 2.38649 5.89679C2.51822 5.68596 2.91552 5.56377 3.71006 5.3193L12.5731 2.5922C13.1978 2.4 13.51 2.30389 13.721 2.38135C13.9047 2.44882 14.0497 2.59365 14.1172 2.77742C14.1946 2.98841 14.0984 3.30073 13.9062 3.92537Z" stroke="#FAF9F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
              </svg>

              <span style="margin-top: 3px;">Send Your Wishes</span></button>

          </form>
        </div>


        <!-- daftar ucapan -->
        <!-- <h5>Data Tersimpan</h5> -->
        <div id="data_table" data-aos="fade-up" data-aos-duration="2000">

        </div>



        <nav aria-label="...">
          <ul class="pagination pagination-sm">
            <li class="page-item">
              <span id="prev-btn" class="btn text-white border-0 me-1" style="background-color: #764640;">Prev</span>
            </li>

            <li class="page-item">
              <span id="next-btn" class="btn text-white border-0" style="background-color: #764640;">Next</span>
            </li>
          </ul>
        </nav>

      </div>
    </main>

  </section>

  <!-- end of hal-7 -->

  <!-- hal-8 section END footer -->

  <section id="hal-8" class="hal-8 w-100 h-100 mx-auto text-center d-flex justify-content-center align-item-center text-white">

    <main>
      <div class="hal-8-pembungkus">
        <div class="hal-8-content-1">
          <p style="font-family: Poppins;">Thankyou</p>
          <h3 class="mt-4">Mentari & Bintang</h3>
        </div>
        <p class="mt-3">12 . 12 . 2024</p>
      </div>



      <div class="footer">
        <img src="img/Logo (1).png" alt="">
        <p class="p text-white">copyright wander.invitation 2023 | Affordable Elegant Invitations</p>
      </div>

    </main>

  </section>





  <!-- end of hal-8 -->


  <!-- template -->



  <button type="button" id="tombol-musik" style="display: none;" class="btn btn-light btn-lg rounded-circle btn-music" onclick="play(this)" data-status="true" data-url="./music/music1.mp3">
    <i class="fa-solid fa-circle-pause"></i>
  </button>



  <!-- </div> -->

  <!-- Hubungkan dengan JavaScript Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script src="./index.js"></script>
  <script src="./js/app.js"></script>

  <!-- script untuk disable fungsi schroll -->
  <script>
    const rootElement = document.querySelector(":root");

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
      }

      rootElement.style.scrollBehavior = 'auto';
    }

    function enableScroll() {
      //untuk memanggil tombol button
      document.getElementById('tombol-musik').style.display = 'block';
      audio.play();
      ///
      window.onscroll = function() {}
      rootElement.style.scrollBehavior = 'smooth';
    }

    disableScroll();
  </script>

  <!-- script untuk memanggil nama tamu -->
  <script>
    const queryString = document.location.search;
    const urlParams = new URLSearchParams(queryString);
    const namatamu = urlParams.get('mengundang');

    // Menampilkan nama tamu dari parameter
    document.getElementById("namaTamu").textContent = namatamu;
  </script>

  <!-- /?mengundang=rafi ahmad -->



</body>

</html>