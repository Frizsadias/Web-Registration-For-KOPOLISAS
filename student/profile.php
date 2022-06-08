<?php
session_start();
if($_SESSION['pekerjaan']==""){
    header("location:../login.php?pesan=belum_login");
} else if($_SESSION['pekerjaan']!="Student"){
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
            <h3 class="font-weight-bold">Profile</h3>
          </div>
        </div>
      </div>
    </div>
    <?php
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "berhasil"){
        echo "<div class='alert alert-primary' role='alert' style='padding: 7px 20px;'>
                Data Added Successfully !!!
                </div>";
        }else if($pesan == "update"){
            echo "<div class='alert alert-warning' role='alert' style='padding: 7px 20px;'>
                    Data Changed Successfully !!!
                    </div>";
        }else if($pesan == "hapus"){
        echo "<div class='alert alert-danger' role='alert' style='padding: 7px 20px;'>
                Data Deleted Successfully !!!
                </div>";
        }
        }
    ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="update-profile.php" method="POST">
                <?php
                    $id = $_SESSION['id'];
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
                    <label class="col-sm-3 col-form-label">Citizen</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="warganegara" placeholder="Citizen" value="<?= $user['warganegara'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Age</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="umur" placeholder="Age" value="<?= $user['umur'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="lahir" placeholder="Date of Birth" value="<?= $user['lahir'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Religion</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="agama" placeholder="Religion" value="<?= $user['agama'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Work</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="pekerjaan" placeholder="Work" value="<?= $user['pekerjaan'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Adress</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="alamat" placeholder="Adress" value="<?= $user['alamat'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Salary</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="gaji" placeholder="Salary" value="<?= $user['gaji'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $user['password'] ?>">
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