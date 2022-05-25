<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3 shadow">
   <div class="container">
      <a class="navbar-brand" href="/"><img src="/img/logo-ipaket.svg" alt="" width="60%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="/auth/order">Order</a>
            </li>
            <li class="nav-item">
               <a class="nav-link a" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Informasi</a>
            </li>
            <li class="nav-item">
               <span class="icon d" style="font-size: 160%; margin-left: 7px; margin-right: 10px;"
                  onclick="setDarkMode()" id="darkBtn">🕶</span>
            </li>
            <li class="nav-item">
               <a href="<?= base_url() ?>/dashboard" class="btn btn-wbtn btn-outline-warning e" href="">Masuk /
                  Daftar</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- ./navbar -->