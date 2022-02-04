<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>Dashboard</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php if(!empty($_GET['gagal'])){?>
                    <?php if($_GET['gagal']=="userKosong"){?>
                        <span class="text-danger">Maaf Username Tidak Boleh Kosong</span>
                    <?php } else if($_GET['gagal']=="passKosong"){?>
                        <span class="text-danger">Maaf Password Tidak Boleh Kosong</span>
                    <?php } else {?>
                        <span class="text-danger">Maaf Username dan Password Anda Salah</span>
                    <?php }?>
                <?php }?>
                <form action="index.php?include=konfirmasi-login" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            <!-- /.social-auth-links -->
            </div>
        <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
<?php include("includes/script.php") ?>

</body>