<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Sweet Alert JavaScript -->
    <script src="./js/sweetalert2.js"></script>
    <!-- Nunito Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <title>Log in | Firebase Auth</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 text-center mt-5 pb-4 text-primary">
                <h1 class="h1">Firebase Authentication</h1>
            </div>
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 bg-white shadow mb-5 border border-primary">
                <div class="row">
                    <div class="col-lg-6 col-md-6 p-4 bg-primary divCover">
                        <img src="./images/firebase_logo.png" alt="Firebase cover image">
                    </div>
                    <div class="col-lg-6 col-md-6 p-lg-5 p-md-5 px-3 py-4">
                        <div id="signInForm">
                            <h2 class="h2 text-center text-dark mb-3">Sign In</h2>
                            <div class="form-group">
                                <label for="userSIEmail">Email adress<span class="text-danger ml-1">*</span></label>
                                <input type="email" class="form-control" id="userSIEmail" onblur="checkUserSIEmail()"placeholder="mail@mail.com">
                                <small id="userSIEmailError" class="form-text text-danger">Please check your login information.</small>
                            </div>
                            <div class="form-group">
                                <label for="userSIPassword">Password<span class="text-danger ml-1">*</span></label>
                                <input type="password" class="form-control" id="userSIPassword" onblur="checkUserSIPassword()" placeholder="password">
                                <small id="userSIPasswordError" class="form-text text-danger">Please check your password.</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary text-uppercase mb-3" onclick="signIn()">Sign In</button>
                            <p>Not a member yet? Become a member: <a href="./pages/sign-up.php"><strong class="text-primary text-uppercase showSignUpForm">Sign Up</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Firebase -->
    
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-database.js"></script>


<script>
  // Your web app's Firebase configuration
//   var firebaseConfig = {
//     apiKey: "AIzaSyBGTi4oZxunbqbx7K2LlEU1mnDAAlVSKhQ",
//     authDomain: "ft-test-63e13.firebaseapp.com",
//     databaseURL: "https://ft-test-63e13.firebaseio.com",
//     projectId: "ft-test-63e13",
//     storageBucket: "ft-test-63e13.appspot.com",
//     messagingSenderId: "210338473553",
//     appId: "1:210338473553:web:2ad3f75d83d485ce8afa70"
//   };
  var firebaseConfig = {
    apiKey: "AIzaSyDuFBysliGA3WfKCX6w8w_MvmlSsAwFOoA",
  authDomain: "authentication-php.firebaseapp.com",
  projectId: "authentication-php",
  storageBucket: "authentication-php.appspot.com",
  messagingSenderId: "416197084692",
  appId: "1:416197084692:web:54a8497635e04ef0d58901",
  measurementId: "G-6RQR0ZMTQX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

    <!-- Custom JavaScript -->
    <script src="./js/app.js"></script>

</body>
</html>

