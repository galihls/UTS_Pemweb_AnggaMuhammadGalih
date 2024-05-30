
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Universitas Esa Unggul</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/esa unggul.png') }}">
    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
</head>
<body>
    <header class="navbar-container">
        <div class="logo">
          <img src="img/esa unggul.png" alt="Universitas Esa Unggul">
        </div>

        <nav class="nav-list">
          <ul>
            <li><a href="#TentangKami">Tentang Kami</a></li>
            <li><a href="{{url ('fakultas')}}">Data fakultas</a></li> <!-- kasih html registrasi disini -->
            {{-- <li><a href="#">Login</a></li>  <!-- kasih html login disini --> --}}
          </ul>
        </nav>
       </header>
       <!-- end navbar -->
       <main>
        <!-- Beranda -->
        <div class="content" id="content">
          <div class="content-description">
            <h1 class="title">Universitas Esa Unggul</h1>
            <p>Kami yakin pendidikan teknologi adalah fondasi bagi setiap bangsa agar menjadi yang terdepan dalam menghadapi dunia digital. Esa Unggul hadir sebagai platform pendidikan teknologi yang membantu menghasilkan talenta digital berstandar global. Semua demi mengakselerasi Indonesia agar menjadi yang terdepan.</p>
          </div>
          <div class="content-image">
            <img src="img/gambar_logo-removebg-preview.png" alt="Universitas Esa Unggul">
          </div>
        </div>
        <!-- end beranda -->
        
        <aside>
          <div class="social-media">
            <ul>
              <li><a href="http://www.youtube.com/@EsaUnggulUniversity"><i class="fab fa-youtube"></i></a></li>
              <li><a href="https://www.linkedin.com/school/universitas-esa-unggul/"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="https://twitter.com/UnivEsaUnggul"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://web.facebook.com/universitas.esaunggul/?locale=id_ID&_rdc=1&_rdr"><i class="fab fa-facebook"></i></a></li>
            </ul>
          </div>
        </aside>
       </main>
         <!-- end main -->
        <!-- Tentang Kami -->
        <div class="about" id="TentangKami">
            <div class="about-description">
                <h3 class="title">Tentang Kami</h3>
                <p>Universitas Esa Unggul (UEU) didirikan pada tahun 1993 di bawah naungan Yayasan Pendidikan Kemala Bangsa adalah Perguruan Tinggi Swasta terkemuka dan menjadi salah satu Universitas Swasta terbaik di Indonesia.</p>
            </div>
            <div class="about-image">
                <img src="img/kampus citra.jpg" alt="Kampus Esa Unggul">
            </div>
        </div>
        <!-- end Tentang Kami -->
        <!-- footer -->
        <footer>
          <div class="footer-container">
            <div class="footer-logo">
              <img src="img/esa unggul.png" alt="Universitas Esa Unggul">
            </div>
            <div class="footer-description">
              <p>Created by <a href="https://www.instagram.com/galihls_/">Angga Muhammad Galih</a> And Mocci.
              </p>
              <p>Universitas Esa Unggul</p>
              <p>Jl. Arjuna Utara No.9, RT.1/RW.2, Kebon Jeruk, Kec. Kebon Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510</p>
            </div>
          </div>
        <!-- end footer -->
       
</body>
</html>