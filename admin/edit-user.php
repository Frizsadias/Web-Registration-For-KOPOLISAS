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
            <h3 class="font-weight-bold">Edit User</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="update-user.php" method="POST">
                <?php
                    $id = $_GET['id'];
                    $data_user = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
                    $user = mysqli_fetch_assoc($data_user);
                ?>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <input type="text" class="form-control" name="nama" placeholder="Name" value="<?= $user['nama'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $user['username'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="telepon" placeholder="Phone Number" value="<?= $user['telepon'] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
                </form>
            </div>
            </div>
        </div>
    </div>
  <!-- content-wrapper ends -->
<?php
include "../layouts/_footer.php";
?>