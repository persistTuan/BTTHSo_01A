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

        <?php  include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/header_admin.php"; ?>
        <div class="menu">
            <h2>Sửa thông tin thể loại</h2>
            <form action="" class="clearfix">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã thể loại</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                    <input type="text" class="form-control tenTheLoai" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="buttton">
                    <a class="btn btn-warning float-end" href="../admin/category.php">Quay lại</a>
                    <a class="btn-save btn btn-success float-end me-2" href="">Lưu lại</a>
                </div>
            </form>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/footer.php"; ?>
    </div>

    <script>
        var tenTheLoai =document.getElementsByClassName('tenTheLoai').value;
        document.getElementsByClassName('btn-save').on('click',function(){
            <?php 
                $id = $_GET['id'];
                if(isset($id)){
                    // thực hiện truy vấn thay đổi dữ liệu;
                }
            ?>
        })
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>