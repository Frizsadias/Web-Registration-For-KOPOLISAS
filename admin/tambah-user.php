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
            <h3 class="font-weight-bold">Tambah User</h3>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="aksi-tambah-user.php" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">ID Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id" placeholder="ID Number" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="nama" placeholder="Full Name" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Course</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="kursus" placeholder="Course" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">No K/P</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="nokp" placeholder="No K/P" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Citizen</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="warganegara" placeholder="Citizen" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="umur" placeholder="Age" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="lahir" placeholder="Date of Birth" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Religion</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="agama" placeholder="Religion" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Work</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level">
                                <option>- Option of Work -</option>
                                <option value="Staff">Staff</option>
                                <option value="Student">Student</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="alamat" placeholder="Address" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Salary</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="gaji" placeholder="Salary" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="password" class="form-control" name="password" placeholder="Password" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="telepon" placeholder="Phone Number" value="" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<?php
include "../layouts/_footer.php";
?>