<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- mycss -->
   <link rel="stylesheet" href="/css/style.css">

   <!-- Bootstrap CSS -->
   <link href="/css/bootstrap.min.css" rel="stylesheet">

   <!-- animate -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

   <style>
   body {
      font-family: 'Montserrat', sans-serif;
   }

   .darkmode .dark {
      background-color: #343434;
      color: #eeee;
   }

   .darkmode .navbar {
      background-color: #570001;
      color: white;
   }

   .darkmode .footer {
      background-color: #570001;
      color: white;
   }

   .darkmode {
      background-color: #1A2228;
      color: white;
   }

   .darkmode .footer-atas {
      background-color: #343434;
      color: white;
   }

   .darkmode .accord {
      color: black;
   }

   .darkmode .panel-menu {
      color: black;
   }

   .darkmode .modal-content {
      background-color: #343434;
      color: #eeee;
   }
   </style>

   <title><?= $title ?></title>
   <link rel="icon" href="/img/ipaket.png">
</head>

<body style="overflow-x: hidden;">

   <?= $this->include('layout/navbar') ?>

   <?= $this->renderSection('content') ?>

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="/js/bootstrap.bundle.min.js"></script>
   <!-- animate -->
   <script src="/js/aos.js"></script>
   <script>
   AOS.init({
      // once: true,
   });
   </script>
   <script src="/js/gsap.min.js"></script>
   <script src="/js/TextPlugin.min.js"></script>
   <script src="/sweetalert2/sweetalert2.all.min.js"></script>
   <script src="/js/jquery-3.6.0.min.js"></script>
   <script>
   gsap.registerPlugin(TextPlugin);
   gsap.to('.jumbotron h4', {
      duration: 10,
      text: 'Ayo kirim paket anda dengan segera, karena kami selalu siap untuk membantu anda dalam ekspedisi barang tercepat dan digital.'
   })
   </script>

   <!-- darkmode -->
   <script>
   if (localStorage.getItem('theme') == 'dark') setDarkMode();

   function setDarkMode() {
      let emoticon = '';
      let isDark = document.body.classList.toggle('darkmode');
      if (isDark) {
         emoticon = '👓';
         localStorage.setItem('theme', 'dark');
      } else {
         // 🕶
         emoticon = '🕶';
         localStorage.removeItem('theme');
      }
      document.getElementById('darkBtn').innerHTML = emoticon;
   }
   </script>

   <script>
   $(document).ready(function() {
      const flashData = $('.flashdata').data('flashdata')

      if (flashData) {
         Swal.fire(
            'Order Paket Berhasil',
            'Mohon konfirmasi email dari kami',
            'success'
         )
      }

      const flashDataKeluar = $('.flash-data').data('flashdata');
      if (flashDataKeluar) {
         Swal.fire(
            '',
            'berhasil logout',
            'success'
         )
      }
   })
   </script>

</body>

</html>