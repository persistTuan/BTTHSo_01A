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
        <div class="menu container-fluid">
            <?php $detail = json_decode($_GET["valueDetail"], true); ?>
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" style="width:100%" src="../musiclife/public/img/music.jpg" alt="ảnh âm nhạc">
                </div>
                <div class="col-md-7">
                    <h3 style="color:aqua"><?=$detail["nameSong"]?></h3>
                    <p st><strong>Bài hát: </strong><?=$detail["nameSong"]?></p>
                    <p st><strong>Thể loại: </strong><?=$detail["theLoai"]?></p>
                    <p st><strong>Tóm tắt: </strong><?=$detail["tomTat"]?></p>
                    <p st><strong>Nội dung: </strong><?=$detail["noiDung"]?></p>
                    <p st><strong>Tác giả: </strong><?=$detail["tacGia"]?></p>
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