<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Sign UP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/javascript/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="top-side">
                <img src="media/LogoSat.png" style="float: left;" width="80">
            </div>
            <div class="top-side">
                <h2 style="margin-left: 8%;">Selamat datang di</h2>
                <h3 style="margin-left: 8%;">Smartband Arena</h3>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
            </ul>   
        </nav>
        <div style="background-image: url('')">
            <div class="container mt-3 pt-3 col-sm-5 bg-dark">
                <h2 class="header" style="font-family: Impact; text-align: center;">SIGN UP</h2>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="name" style="color: white;">Name :</label>
                        <input type="name" class="form-control" id="name" placeholder="Masukan nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email" style="color: white;">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd1" style="color: white;">Password :</label>
                        <input type="password" class="form-control" id="pwd1" placeholder="Masukan kata sandi" name="pswd">
                    </div>
                    <div class="form-group">
                        <label for="pwd2" style="color: white;">Re password :</label>
                        <input type="password" class="form-control" id="pwd2" placeholder="Masukan ulang kata sandi" name="pswd">
                    </div>
                    <p style="color: white;">Upload foto KTP :</p>
                    <div class="custom-file mb-3">
                        <label class="custom-file-label" for="customFile">Pilih file</label>
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <p style="color: white;"><input class="form-check-input" type="checkbox" id="checkbox" name="showhide">Tampilkan kata sandi</p>
                            <p style="color: white;"><input class="form-check-input" type="checkbox" name="remember">Remember me</p>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </form>
            </div>
        </div>
</body>
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</html>