<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="assets/images/kopolisas.png" />
    <style>
        body{
            background-image: url("assets/images/background.png");
            background-repeat: no-repeat;
            background-size:cover;
            align-content: center;
        }
        img{
            max-width: 150px;
            margin-bottom: 13px;
        }
        .mr9{
            margin: 75px auto;
        }
        .round{
            border-radius: 30px;
        }
        .alert-login{
            margin-bottom: 15px;
            color: #555;
        }
    </style>
    <script type="text/javascript">
        function calculateAge(date) 
        {
          const now = new Date();
          const diff = Math.abs(now - date );
          const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365)); 
          return age
      }

      var picker = new Pikaday({ 
          field: document.getElementById('birth_date') ,
          yearRange:[1900,2020],
          onSelect: function(date) {
              let age = calculateAge(date);
              document.getElementById('age').innerHTML = "age: "+age ;
          }                        
      });
  </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 mr9">
                <form action="signup.php" method="POST" class="text-center">
                    <h2>Register for KOPOLISAS</h2>
                    <img src="assets/images/kopolisas.png">
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
                        <label class="col-sm-3 col-form-label" for="birth-date">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="lahir" placeholder="Date of Birth" value="" id="birth_date" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9" id="age">
                            <input type="text" class="form-control" name="umur" placeholder="Age" value="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Religion</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="agama">
                                <option>- Option of Religion -</option>
                                <option value="Islam">Islam</option>
                                <option value="Budhist">Budhist</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khatolik">Khatolik</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Work</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="pekerjaan">
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
                            <select class="form-control" name="gaji">
                                <option>- Option of Salary -</option>
                                <option value="1500-2500">1500-2500</option>
                                <option value="2501-3500">2501-3500</option>
                                <option value="3501-4500">3501-4500</option>
                                <option value="4501-5500">4501-5500</option>
                                <option value="5501-6500">5501-6500</option>
                                <option value="6501-7500">6501-7500</option>
                                <option value="7501-8500">7501-8500</option>
                                <option value="8501-9500">8501-9500</option>
                                <option value="9501-10000">9501-10000</option>
                            </select>
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
                    <div>
                        <label for="agree">
                            <input type="checkbox" name="agree" value="yes" required /> I agree with the term of services.
                        </label>
                    </div>
                    <button class="w-100 btn btn btn-primary round" type="submit">Sign Up</button>
                    <br><br>
                    <p>Already have an account</p>
                    <a href="login.php">Login</a>
                    <br><br>
                    <p class="mt-5 mb-3 text-muted">&copy; KOPOLISAS - 2022</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>