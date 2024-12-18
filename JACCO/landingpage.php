<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JACCO - JEMBER ACCOMODATION</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #loader {
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .background {
            background: linear-gradient(45deg, #FFC312, #EE5A24, #009432, #0652DD, #6F1E51);
            background-size: 200% 100%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 36px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .actor-card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            height: auto;
            text-align: center;
        }
        .actor-card img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .login-button {
            margin-top: auto;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
        .landing-content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .landing-content img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div id="loader"></div>
<div id="content" style="display:none;">
    <div class="background">
        <div class="container">
            <header>
                <h1 class="title">JACCO</h1>
            </header>
            <div class="row">
                <div class="col-md-6">
                    <div class="actor-card">
                        <img src="https://png.pngtree.com/png-vector/20221124/ourmid/pngtree-recruitment-job-for-social-media-admin-png-image_6478542.png" alt="Admin Icon">
                        <button class="login-button" onclick="loginAsAdmin()">Login as Admin</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="actor-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3532/3532626.png" alt="Wisatawan Icon">
                        <button class="login-button" onclick="loginAsUser()">Login as Wisatawan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- AJAX Script -->
<script>
    $(window).on("load", function() {
        $("#loader").fadeOut("slow", function() {
            $("#content").fadeIn("slow");
        });
    });

    function loginAsAdmin() {
        window.location.href = 'View/Admin/login.php';
    }

    function loginAsUser() {
        window.location.href = 'View/User/login.php';
    }
</script>
  
</body>
</html>

