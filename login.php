<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body class="p-4">

    <div class="container-fluid">
        <?php include "../musiclife/share/header.php"; ?>
        <div class="menu d-flex justify-content-center">
            <div class="login p-3 rounded-4" style="width:30%; background-color: #7F7F7F;">
                <div class="signup d-flex justify-content-between align-items-lg-center">
                    <span style="font-size: xx-large;color:white; font-weight: bolder;">Sign Up</span>
                    <span>
                        <a class="btn btn-warning" href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                        <a class="btn btn-warning" href=""><i class="fa-brands fa-google fa-2xl"></i></a>
                        <a class="btn btn-warning" href=""><i class="fa-brands fa-twitter fa-2xl"></i></a>
                    </span>
                </div>
                <hr>
                <div class="input container-fluid">
                    <form action="" class="clearfix">
                        <div class="mb-3 userName input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                        <div class="mb-3 passwork input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-key"></i></span>
                            <input type="text" class="form-control" placeholder="passwork" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                        <div class="remember text-light">
                            <input type="checkbox"> <label for="">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-warning px-5 float-end " href="">Login</button>
                    </form>
                </div>

                <div class="dontHaveAccout text-center">
                    <p>Don't have an account? <a href="" class="text-warning">Sign up</a></p>
                    <p><a href="" class="text-warning">Forgot your passwork</a></p>
                </div>
            </div>
        </div>
        <?php include "../musiclife/share/footer.php"; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    
</body>

</html>