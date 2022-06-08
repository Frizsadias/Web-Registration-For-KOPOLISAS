<?php
session_start();
if($_SESSION['pekerjaan']==""){
    header("location:../login.php?pesan=belum_login");
} else if($_SESSION['pekerjaan']!="Admin"){
    header ("location: ../login.php");
}
include "../layouts/_header.php";
include "../layouts/_sidebar.php";
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" style="margin-bottom: -20px;">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-8">
            <h3 class="font-weight-bold">Data User</h3>
          </div>
          <div class="col-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <a href="tambah-user.php" class="btn btn-sm bg-info " style="color: #fff;" type="button">
              <i class="icon-plus menu-icon"></i> Tambah
              </a>
            </div>
           </div>
        </div>
        </div>
      </div>
    </div>
    <?php
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "berhasil"){
        echo "<div class='alert alert-primary' role='alert' style='padding: 7px 20px;'>
                Data Berhasil Ditambahkan !!!
                </div>";
        }else if($pesan == "update"){
            echo "<div class='alert alert-warning' role='alert' style='padding: 7px 20px;'>
                    Data Berhasil Diubah !!!
                    </div>";
        }else if($pesan == "hapus"){
        echo "<div class='alert alert-danger' role='alert' style='padding: 7px 20px;'>
                Data Berhasil Dihapus !!!
                </div>";
        }
        }
    ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
                        while($u = mysqli_fetch_assoc($user)){
                            $no++;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['telepon'] ?></td>
                        <?php if ($u['pekerjaan'] == 'Student') { ?>
                        <td>
                            <label class="badge badge-success" style="color: #fff">Student</label>
                        </td>
                        <?php } else if ($u['pekerjaan'] == 'Staff') { ?>
                        <td>
                            <label class="badge badge-info" style="color: #fff">Staff</label>
                        </td>
                        <?php } else if ($u['pekerjaan'] == 'Admin') { ?>
                        <td>
                            <label class="badge badge-warning" style="color: #fff">Admin</label>
                        </td>
                        <?php } else { ?>
                        <td>
                            <label class="badge badge-danger" style="color: #fff">Pegawai</label>
                        </td>
                        <?php } ?>
                        <td>
                            <a href="edit-user.php?id=<?= $u['id'] ?>" class="btn btn-sm btn-info"><i class="ti-pencil"></i> Edit</a>
                            <a href="delete-user.php?id=<?= $u['id'] ?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-sm btn-danger"><i class="ti-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
  <!-- content-wrapper ends -->
<?php
include "../layouts/_footer.php";
?>