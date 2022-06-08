<?php
session_start();
if($_SESSION['pekerjaan']==""){
    header("location:../login.php?pesan=belum_login");
} else if($_SESSION['pekerjaan']!="Staff"){
    header ("location: ../login.php");
}
include "../layouts/_header.php";
include "../layouts/_sidebar.php";
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome - <?php echo $data['nama'] ?></h3>
            <h3 class="font-weight-normal mb-0">To Koperasi POLISAS Kuantan Berhad</h3>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="flex-md-grow-1 flex-xl-grow-0">
              <div class="btn btn-sm btn-light bg-white">
              <i class="ti-calendar"></i> <?= date("l, d F Y") ?>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $bd_student = mysqli_query($koneksi,"SELECT * FROM user WHERE id='1'");
    $bd_std = mysqli_num_rows($bd_student);    
    $bdk_student = mysqli_query($koneksi,"SELECT * FROM user WHERE id='2'");
    $bdk_std = mysqli_num_rows($bdk_student);  
    ?>
    <div class="row">
      <div class="col-md-12 grid-margin transparent">
        <div class="row">
          <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <h4 class="mb-4">VISI</h4>
                <p>Menjadikan KOPOLISAS Kuantan Berhad yang maju dan terbaik di Politeknik dengan menekankan kepada memenuhi keperluan dan matlamat anggotanya berdasarkan prinsip dan nilai islamik</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <h4 class="mb-4">MISI</h4>
                <p>Menyediakan perkhidmatan yang cemerlang kepada anggota tanpa ada pilih kasih dan kompromi dalam usaha meningkatkan taraf sosio ekonomi dan kebijakan anggota</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <h4 class="mb-4">MOTO</h4>
                <p>Ke Arah Memajukan Koperasi Menjelang 2030</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- content-wrapper ends -->
<?php
include "../layouts/_footer.php";
?>