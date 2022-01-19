<div class="navbar navbar-expand-lg navbar-dark bg-primary" style="border-bottom: 1px solid #578aff ;">
  <div class="container p-1">
  <a href="home" class="custom-logo-link" rel="home"><img src="https://dapo.kemdikbud.go.id/assets/img/logo-dikdasmen.png" alt="" class="img-responsive"></a>
    <div class="col text-left">
      <h3 class="mt-3 ms-3 text-light">SDN 028 TENGGARONG SEBERANG</h3>
      <p class="lead ms-3 text-light">
        JL. Gunung Kombeng Tenggarong <br>
        Kabupaten Kutai Kartanegara - Kalimantan Timur
      </p>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary  bg-gradient">
  <div class="container">
    <a class="navbar-brand" href="home">Dashboard Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['include'] == 'home'){ echo 'active';} ?>" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link <?php if($_GET['include'] == 'data-siswa' || $_GET['include'] == 'data-guru'){ echo 'active';} ?> dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="data-siswa">Data Siswa</a></li>
            <li><a class="dropdown-item" href="data-guru">Data Guru</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
