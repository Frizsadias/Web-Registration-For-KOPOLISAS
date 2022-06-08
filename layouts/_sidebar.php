    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if ($level == 'Student' || $level == 'Staff') { ?>
          <?php } else if($level == 'Camat' || $level == 'Sekcam'){ ?>
          <?php } else { ?>
          <?php } ?>
          <?php if ($level == 'Admin') { ?>
          <?php } else if ($level == 'Camat' || $level == 'Sekcam') { ?>
          <?php } else { ?>
          <?php } ?>
          <?php if ($level == 'Admin') { ?>
            <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Manage Users</span>
            </a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
            </li>
          <li class="nav-item mb-5">
            <a class="nav-link" href="../logout.php">
              <i class="ti-shift-left menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
            </li>
            <li class="nav-item">
            <button class="btn btn-sm btn-info" style="width: 100%;">
              <i class="ti-link menu-icon"></i>
              <span class="menu-title"><?= $_SESSION['pekerjaan'] ?></span>
          </button>
            </li>
        </ul>
      </nav>