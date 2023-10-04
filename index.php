<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
    /* Tùy chỉnh màu in đậm cho nút active */
    .btn-custom:active {
        font-weight: bold;
        color: black;

    }
    </style>
</head>

<body class="p-4">
    <?php include "mysql.php"; ?>
    <div class="container-fluid">
        <?php include "../musiclife/share/header.php"; ?>
        <div class="menu">
            <img style="width: 100%;" class="img-fluid" src="../musiclife/public/img/music.jpg" alt="ảnh music">
            <h2 style="text-align: center; color: blue">Top bài hát yêu thích</h2>

            <div class="card-music d-flex  flex-wrap">
                <?php
                $query = "select * from baiviet limit 5";
                $result = Mysql::select($query);
                
                if($result != null):

                    foreach($result as $row):
                        $detail = [];
                        $detail["img"] = $row['hinhanh'];
                        $detail["nameSong"] = $row['ten_bhat'];
                        $detail["ma_tloai"] = $row['ma_tloai'];
                
                        $detail["theLoai"] = Mysql::select("select ten_tloai from theloai where ma_tloai = '{$row["ma_tloai"]}'")[0]['ten_tloai']; //
                        $detail["tomTat"] = $row['tomtat'];
                        $detail["noiDung"] = $row['noidung'];
                        $detail["tacGia"] = Mysql::select("select ten_tgia from tacgia where ma_tgia = '{$row["ma_tgia"]}'")[0]['ten_tgia'];
                        $jsonDetail = json_encode($detail); 
                ?>
                <a href="../musiclife/detail.php?valueDetail=<?= urlencode($jsonDetail); ?>" class="card m-1"
                    style="width: 18rem;">
                    <img src="../musiclife/public/img/music.jpg" class="card-img-top" alt="đây là ảnh">
                    <div class="card-body">
                        <p class="card-text text-center"><?=$detail["nameSong"]?></p>
                    </div>
                </a>
                <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
        <?php include "../musiclife/share/footer.php"; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>