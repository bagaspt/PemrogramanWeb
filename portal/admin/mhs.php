<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portal Administrasi | Universitas Paramadina</title>
	<?php include"header.php";?>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                Portal Administrasi
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $_SESSION['nama_lengkap']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                    <li>
                                        <a href="detail-admin.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a href="admin.php">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="../logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div>
                                    <center><img src="<?php echo $_SESSION['gambar']; ?>" height="80" width="80" class="img-circle" alt="User Image" style="border: 3px solid white;" /></center>
                                </div>
                                <div class="info">
                                    <center><p><?php echo $_SESSION['nama_lengkap']; ?></p></center>

                                </div>
                            </div>
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <?php include "menu.php"; ?>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Daftar Mahasiswa</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                    <form action="mhs.php" method="POST">
                                        <div class="input-group">
                                        <input type='text' class="form-control input-sm pull-right" style="width: 150px;"  name='qcari' placeholder='Cari berdasarkan NIM atau Nama' required /> 
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>    
                                    </div>
                                    <?php
                    $query1="select * from list_mhs";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  list_mhs 
	               where nim like '%$qcari%'
	               or nama like '%$qcari%'  ";
                    }
                    $tampil=mysqli_query($db, $query1) or die(mysqli_connect_error());
                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>NIM </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Jenis Kelamin </center></th>
                        <th><center>Program Studi </center></th>
                        <th><center>Nomor Telpon </center></th>
                        <th><center>Email </center></th>
                        <th><center>Tools</center></th>
                      </tr>
                  </thead>
                     <?php while($data=mysqli_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['nim']; ?></td>
                    <td><a href="detail-mhs.php?hal=edit&kd=<?php echo $data['id'];?>"><span class="fa fa-user"></span> <?php echo $data['nama']; ?></a></td>
                    <td><?php echo $data['jk'];?></td>
                    <td><?php echo $data['prodi'];?></td>
                    <td><?php echo $data['telp'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Mahasiswa" href="edit-mhs.php?hal=edit&kd=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Mahasiswa" href="hapus-mhs.php?hal=hapus&kd=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysqli_query($db, "select * from list_mhs order by id");
                        $user=mysqli_num_rows($tampil);
                    ?>
                  <center><h4>Jumlah Mahasiswa : <?php echo "$user"; ?> Orang </h4> </center>
                  
                <div class="text-right" style="margin-top: 10px;">
                 <a href="mhs.php" class="btn btn-sm btn-info">Refresh Mahasiswa <i class="fa fa-refresh"></i></a> <a href="input-mhs.php" class="btn btn-sm btn-warning">Tambah Mahasiswa <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->
</body>
</html>