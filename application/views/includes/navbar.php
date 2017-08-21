<!-- <style type="text/css">
  ul li{margin-top: 6%; font-size: 22px;}
</style> -->
<!-- <nav class="navbar navbar-default">
  <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('home') ?>"><h3 style="margin-top: -2%;">Sistem Parkir Fakultas Ilmu Komputer</h3></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
    </div> -->
    
    <!-- <ul class="nav navbar-nav navbar-right">
    <?php
      $username    = $this->session->userdata('username');
      $nim         = $this->session->userdata('nim');
    ?>
          <?php if(isset($username)){
              echo '<li><a href="'.base_url('Admin/list_mhs').'">List Mahasiswa</a></li>';
            } ?>

        
          <?php if(isset($nim)){
            echo '<li><a href="'.base_url('Mahasiswa/pernyataan').'">Cetak Pernyataan</a></li>';
          }?>
        

        
            <?php
                if(!isset($username) && !isset($nim)){
                    echo '<li><a href="'.base_url('Login/Mhs').'" class="btn btn-primary" role="button">LOGIN</a></li>';
                }
                else{
                    echo '<li><a href="'.base_url('Logout').'" class="btn btn-primary" role="button">LOGOUT</a></li>';
                }
            ?>
        
    </ul> -->

  <!-- </div> --><!-- /.container-fluid -->
<!-- </nav> -->

<nav class="navbar navbar-inverse navbar-lg">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img style="display: inline-block; margin-top: -5%;" src="<?= base_url('files/parking.png') ?>" width="70" height="70" /> Sistem Parkir Fakultas Ilmu Komputer</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('home/data') ?>">Daftar Mahasiswa</a></li>
        <li><a href="<?= base_url('register') ?>"><i class="fui-user"></i> Register</a></li>
        <?php
          $username    = $this->session->userdata('username');
          $nim         = $this->session->userdata('nim');
        ?>
              <?php if(isset($username)){
                  echo '<li><a href="'.base_url('Admin/list_mhs').'">List Mahasiswa</a></li>';
                } ?>

            
              <?php if(isset($nim)){
                //echo '<li><a href="'.base_url('Mahasiswa/pernyataan').'">Cetak Pernyataan</a></li>';
              }?>
            

            
                <?php
                    if(!isset($username) && !isset($nim)){
                        echo '<li><a href="'.base_url('Login/Mhs').'" ><i class="fui-exit"></i> LOGIN</a></li>';
                    }
                    else{
                        echo '<li><a href="'.base_url('Logout').'">LOGOUT</a></li>';
                    }
                ?>
      </ul>
      <!-- <form class="navbar-form navbar-right"> -->
      <?= form_open('home/data', array('class' => 'navbar-form navbar-right')) ?>
          <div class="input-group">
              <input name="nim" type="text" class="form-control" placeholder="Cari berdasarkan NIM">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
              </span>
          </div>
      <?= form_close() ?>
      <!-- </form> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>