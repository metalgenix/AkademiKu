<div class="row">
    <div class="col-md-12">
        <h1>
        <i class="fa fa-graduation-cap"></i>
        AkademiKu
        <small class="pull-right">Sistim Informasi Akademik Sekolah</small>
        </h1>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                  data-target="#akademiku">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Menu</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="akademiku">
                  <ul class="nav navbar-nav">
                    <li class="<?=(!isset($_GET['view']) || $_GET['view'] == 'dashboard')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=dashboard">Dashboard</a>
                    </li>
                    <li class=" dropdown 
                        <?=(isset($_GET['view']) && $_GET['view'] == 'siswa')?'active':'';?>
                        <?=(isset($_GET['view']) && $_GET['view'] == 'siswa-add')?'active':'';?>
                    ">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">
                            Siswa <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'siswa')?'active':'';?>">
                                <a href="index.php?page=mods&mod=akademiku&view=siswa">List Siswa</a>
                            </li>
                            <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'siswa-add')?'active':'';?>">
                                <a href="index.php?page=mods&mod=akademiku&view=siswa-add">Tambah Siswa</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'kelas')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=kelas">Kelas</a>
                    </li>
                    <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'staf')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=staf">Guru & Staf</a>
                    </li>
                    <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'pelajaran')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=pelajaran">Pelajaran</a>
                    </li>
                    <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'nilai')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=nilai">Kelola Nilai</a>
                    </li>
                    <li class="<?=(isset($_GET['view']) && $_GET['view'] == 'settings')?'active':'';?>">
                        <a href="index.php?page=mods&mod=akademiku&view=settings">Settings</a>
                    </li>
                    
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    
</div>
