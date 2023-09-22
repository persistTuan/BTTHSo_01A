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

        <?php  include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/header_admin.php";  ; ?>
        <div class="menu d-flex justify-content-around flex-wrap">
            <?php
                $numberUsers = 30;
                $numberTheLoai = 10;
                $numberTacGia = 5;
                $numberBaiViet = 10;
            ?>
            <a href="" class="card text-center mb-2" style="width: 18rem;">
                <p class="card-header">Người dùng</p>
                <div class="card-body">
                    <p class="card-text"><?=$numberUsers?></p>
                </div>
            </a>
            <a href="" class="card text-center mb-2" style="width: 18rem;">
                <p class="card-header">Thể loại</p>
                <div class="card-body">
                    <p class="card-text"><?=$numberTheLoai?></p>
                </div>
            </a>
            <a href="" class="card text-center mb-2" style="width: 18rem;">
                <p class="card-header">Tác Giả</p>
                <div class="card-body">
                    <p class="card-text"><?=$numberTacGia?></p>
                </div>
            </a>
            <a href="" class="card text-center mb-2" style="width: 18rem;">
                <p class="card-header">Bài Viết</p>
                <div class="card-body">
                    <p class="card-text"><?=$numberBaiViet?></p>
                </div>
            </a>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/footer.php"; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>