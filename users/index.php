<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Managerment User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        #table-users {
            width: 100%;
            overflow: scroll;
            max-height: 600px;
        }

        th {
            position: sticky;
            top: 0;
        }

        td,
        th {
            white-space: nowrap;
        }

        .container-table {
            max-height: 300px !important;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['loginSuccess'])) {
        $mes = "bạn cần đăng nhập để sử dụng tính năng này";

        header("location:../login.php?respon=$mes");
    }
    include $_SERVER['DOCUMENT_ROOT'] . "/musiclife/share/header_admin.php";
    ?>
    <div class="content-user p-2 mt-2">
        <!-- 
    <summary>
        tạo các nút như:Delete, AddUser, +....;
    </summary> 
    -->
        <div class="content-user-header d-flex justify-content-between">
            <p class="text-danger" style="font-weight: bolder;">Users</p>
            <form action="">
                <span class="btn-group">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/musiclife/manager/addUser.php" style="border-right: 1px solid white;" class="btn btn-Add-user btn-danger text-light">ADD
                        User</a>
                    <!-- <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/musiclife/manager/addUser.php" style="border-left: 1px solid white" class="btn btn-danger text-light">+</a> -->
                </span>
            </form>
        </div>

        <hr>

        <!-- 
    <summary>
        tạo bảng chứa user gồm các cột: 
        -fullNam,email, gender, group, mobile, dateOfBrith, status, 
        -action (gồm có 3 button)
    </summary> 
        -->
        <div class="container-table table-responsive">
            <table class="table" id="table-users">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include $_SERVER['DOCUMENT_ROOT'] . "/musiclife/mysql.php";
                    $datas = Mysql::select("SELECT * FROM users");

                    foreach ($datas as $row) :
                        $id = $row['ma_user'];
                        $fullName = $row["userName"];
                        $passwordUser = $row["userPassword"];
                        $permission = $row["permission"];
                        $hrefUpdate = "musiclife/users/updateUser.php?id=$id&fullName=$fullName&passwordUser=$passwordUser&permission=$permission";
                    ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td>
                                <a id="link-fullName" href="../share/user_detail.php?name=fullName" style=" text-decoration: none; color: black" class="d-flex align-items-center">
                                    <img src="../public/img/logo.png" alt="Mô tả ảnh" class="img-fluid me-1" style="max-width: 24px; max-height: 24px;">
                                    <span class="flex-grow-1"><?= $fullName ?></span>
                                </a>
                            </td>
                            <td style="font-weight: bolder;">
                                <?= $passwordUser ?>
                            </td>
                            <td><?=$permission?></td>
                            <td>
                                <form action="" class="d-flex">
                                    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/<?= $hrefUpdate?>" class="btn btn-danger btn-sm me-1">
                                        <i class="fa-solid fa-pen text-light"></i>
                                    </a>
                                    <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/musiclife/manager/deleteUser.php?id=" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash-can text-light"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                        <?php echo " {$_SERVER['DOCUMENT_ROOT']}" . "/musiclife/manager/deleteUser.php?id=" ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">


</script>

</html>