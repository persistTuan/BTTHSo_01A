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
            <a class="btn btn-success" href="../admin/add_category.php">Thêm mới</a>
            <?php 
                if(isset($_GET['message'])):
            ?>
            <div class="alert alert-danger mt-2"><?=$_GET['message'] ?></div>
            <?php endif; ?>
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
                        ini_set('display_errors', 1);
                        ini_set('display_startup_errors', 1);
                        error_reporting(E_ALL);

                        // $pdo = new PDO("mysql:host=127.0.0.1:3307; dbname = BTTH01_CSE485", "root", "140103");
                        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        try{
                            $pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=BTTH01_CSE485", "root", "140103");
                        }catch(PDOException $e){
                            echo "disconnected" .$e->getMessage();
                        }
                        
                        $data = $pdo->query("SELECT * FROM theloai;")->fetchAll();
                        foreach($data as $row):
                            $id = $row['ma_tloai'];
                            $tenTheLoai = $row['ten_tloai'];
                            $href_edit_category = "../admin/edit_category.php?id=".$id."&ten_tloai=".$tenTheLoai;
                            $href_delete_category = "../manager/delete_category_manager.php?id=".$id."&ten_tloai=".$tenTheLoai;
                    ?>
                    <tr>
                        <td scope="row"><?=$id?></td>
                        <td scope="row"><?=$tenTheLoai?></td>
                        <td scope="row"><a href="<?= $href_edit_category; ?>"><i
                                    class="fa-solid fa-pen-to-square"></i></a></td>
                        <td scope="row"><a href="" data-bs-toggle="modal" data-bs-target="#modalId<?=$id;?>"><i
                                    class="fa-solid fa-trash"></i></a></td>
                    </tr>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->

                    <div class="modal fade" id="modalId<?=$id;?>" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <a href="<?= $href_delete_category; ?>" class="btn btn-primary">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                    </script>
                    <?php endforeach ?>

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