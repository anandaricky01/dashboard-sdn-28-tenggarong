<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="foto/Lambang_Kab._Kutai_Kertanegara.png" alt="Admin" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Admin SDN 028</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="profil" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Profil
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-database"></i>
        <p>
          Data Master
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="data-siswa" 
          class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="data-guru" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Guru</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="foto-siswa" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Foto Siswa</p>
          </a>
        </li>
      </ul>
    </li>
    <?php 
    if ($_SESSION['level']=="1"){?>
    <li class="nav-item">
      <a href="user" class="nav-link">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
          Pengaturan User
        </p>
      </a>
    </li>
    <?php }?>
    <li class="nav-item">
      <a href="signout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Sign Out
        </p>
      </a>
    </li>
  </ul>
</nav>
</div>
    <!-- /.sidebar -->
  </aside>
