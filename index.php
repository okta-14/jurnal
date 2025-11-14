<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>membuat halaman web dinamis</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="content">
      <header>
      <div class="judul">
      <h1 class="judul">RPL- SMK Negeri 1 Sukawati</h1>
      </div>
      
      </header>
     <div class="menu">
      <ul>
            <li><a href="index.php?page=home" class="nav_item">HOME</a></li>
            <li><a href="index.php?page=guru" class="nav_item">GURU</a></li>
            <li><a href="index.php?page=pegawai" class="nav_item">PEGAWAI</a></li>
            <li><a href="index.php?page=jurusan" class="nav_item">JURUSAN</a></li>
            <li><a href="index.php?page=kelas" class="nav_item">kelas</a></li>
            <li><a href="index.php?page=siswa" class="nav_item">Siswa</a></li>
            <li><a href="index.php?page=mpk" class="nav_item">MPK</a></li>
            <li><a href="index.php?page=absensi" class="nav_item">Absensi</a></li>
            <li><a href="index.php?page=pembayaran" class="nav_item">Pembayaran</a></li>
            <li><a href="index.php?page=jurnal" class="nav_item">jurnal</a></li>
      </ul>
      </div>
      

      <div class="badan">
      <?php
      if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                  case'home':
                        include "home.php";
                        break;
                  case'guru':
                        include "guru.php";
                        break;
                  case'pegawai':
                        include "pegawai.php";
                        break;
                  case'jurusan':
                        include "jurusan.php";
                        break;
                  case'kelas':
                        include "kelas.php";
                        break;
                  case 'siswa':
                        include "siswa.php";
                        break;
                  case 'mpk':
                        include "mpk.php";
                        break;
                  case 'absensi':
                        include "absensi.php";
                        break;
                  case 'pembayaran':
                        include "pembayaran.php";
                        break;
                  case 'jurnal':
                        include "jurnal.php";
                        break;
                  default:
                  echo"<center><h3>maaf,halamaan tidak ditemukan<h3><center>";
                  }
            }else{
                  include "home.php";
            }
            ?>
            </div>
      </div>

      <script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.createElement('button');
    hamburger.className = 'hamburger';
    hamburger.innerHTML = `
        <span></span>
        <span></span>
        <span></span>
    `;
    
    const menu = document.querySelector('.menu');
    const navList = document.querySelector('.menu ul');
    
    // Insert hamburger button into menu
    menu.insertBefore(hamburger, navList);
    
    // Create close button for mobile
    const closeButton = document.createElement('button');
    closeButton.className = 'close-menu';
    closeButton.innerHTML = '×';
    closeButton.style.display = 'none';
    navList.appendChild(closeButton);
    
    // Toggle menu when hamburger is clicked
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navList.classList.toggle('active');
        closeButton.style.display = navList.classList.contains('active') ? 'flex' : 'none';
        document.body.style.overflow = navList.classList.contains('active') ? 'hidden' : '';
    });
    
    // Close menu when close button is clicked
    closeButton.addEventListener('click', function() {
        hamburger.classList.remove('active');
        navList.classList.remove('active');
        this.style.display = 'none';
        document.body.style.overflow = '';
    });
    
    // Close menu when clicking on a nav item (mobile)
    const navItems = document.querySelectorAll('.nav_item');
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                hamburger.classList.remove('active');
                navList.classList.remove('active');
                closeButton.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    });
    
    // Close menu when window is resized to desktop size
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            hamburger.classList.remove('active');
            navList.classList.remove('active');
            closeButton.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
    
    // Close menu when clicking outside (optional)
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768 && 
            navList.classList.contains('active') &&
            !menu.contains(event.target) &&
            !event.target.classList.contains('nav_item')) {
            hamburger.classList.remove('active');
            navList.classList.remove('active');
            closeButton.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
});
</script>
</body>
</html>