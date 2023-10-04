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
            <h2>Sửa thông tin User</h2>
            <form id="myform" method="post" action="<?= $_SERVER['DOCUMENT_ROOT']?>/musiclife/manager/updateUser.php" class="clearfix">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã User</span>
                    <input name="maUser" readonly value="<?= $_GET['id'] ?>" type="text" class="form-control"
                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">New Name</span>
                    <input name="userName" value="<?= $_GET['fullName'] ?>" type="text"
                        class="form-control tenTheLoai" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">New Password</span>
                    <input name="userPassword" value="<?= $_GET['passwordUser'] ?>" type="text"
                        class="form-control tenTheLoai" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Permission</span>
                    <input name="permission" value="<?= $_GET['permission'] ?>" type="text"
                        class="form-control tenTheLoai" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="buttton">
                    <a class="btn btn-warning float-end" href="./index.php">Quay lại</a>
                    <button class="btn-save btn btn-success float-end me-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Lưu lại</button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" type="button" id="saveChange" class="btn btn-primary" >Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] ."/musiclife/share/footer.php"; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>