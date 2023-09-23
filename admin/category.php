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
            <a class="btn btn-success" href="">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = "connect pdo";
                        $sql = "query ";
                        $result = "return result select";
                        for($i = 1; $i <= 5; $i++):
                            $id = $i;
                            $tenTheLoai = "the loai";
                            $href_edit_category = "../admin/edit_category.php?id=".$id;
                    ?>
                    <tr>
                        <td scope="row"><?=$id?></td>
                        <td scope="row"><?=$tenTheLoai?></td>
                        <td scope="row"><a href= "<?= $href_edit_category; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td scope="row"><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php endfor ?>
                    
                </tbody>
            </table>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/footer.php"; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>