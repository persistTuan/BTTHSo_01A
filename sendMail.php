<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    // use PHPMailer\PHPMailer\SMTP;   
    require 'vendor/autoload.php';
    // require 'vendor/phpmailer/phpmailer/src/Exception.php';
    // require 'vendor/phpmailer/PHPMailer/src/PHPMailer.php';
    // require 'vendor/phpmailer/PHPMailer/src/SMTP.php';
   
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $mail = new PHPMailer(true);
 
    try {
        // Cài đặt máy chủ
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 2;                  // Bật đầu ra gỡ rối chi tiết
        $mail->isSMTP();                                        // Gửi bằng SMTP
        $mail->Host       = 'smtp.gmail.com';                   // Đặt máy chủ SMTP của Gmail
        $mail->SMTPAuth   = true;                               // Bật xác thực SMTP
        $mail->Username   = 'khanghoa7896@gmail.com';              // Tên đăng nhập Gmail của bạn
        $mail->Password   = 'apkb cbvq qpdj cmel';              // Mật khẩu Gmail của bạn (Ở đoạn này nếu viết mật khẩu bth sẽ lỗi)
                                                                // Chúng ta nên vào gmail bật App Password lên rồi thêm Mailer vào để lấy mật khẩu
        $mail->SMTPSecure = "tls";        // Bật mã hóa TLS ngầm định
        $mail->Port       = 587;                                // Cổng TCP để kết nối cho giao thức SMTPS (SSL)
    
        // Người nhận
    $mail->setFrom('khanghoa7896@gmail.com', 'Trần Thị Vân Anh');

    $mail->addAddress('abcexample@gmail.com'); // Name is optional
    // Tệp đính kèm
    // $mail->addAttachment('/var/tmp/file.tar.gz');               // Thêm tệp đính kèm
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Tên tệp đính kèm (tùy chọn)

    // Nội dung
    $mail->isHTML(true);                                        // Đặt định dạng email thành HTML
    $mail->Subject = 'Điểm danh';
    $mail->Body    = 'Điểm danh ngày 29/09| sinh viên: Trần Thị Vân Anh | msv: 2151163667';  
    $mail->AltBody = 'Điểm danh ngày 29/09| sinh viên: Trần Thị Vân A | msv: 2151163667';

    $mail->send();
    echo 'Thư đã được gửi';
} catch (Exception $e) {
    echo "Không thể gửi thư. Lỗi Mailer: {$mail->ErrorInfo}";
}
?>