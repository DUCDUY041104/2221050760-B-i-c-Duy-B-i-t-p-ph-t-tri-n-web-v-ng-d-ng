<?php
require 'db/connect.php';
if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['ngay_sinh'];
    if(!empty($fullname)&&!empty($contact)&&!empty($password)&&!empty($gender)&&!empty($birthdate)){

        $sql = "INSERT INTO `tbl-user` (`fullname`,`contact`,`password`,`gender`) VALUES ('$fullname','$contact',md5('$password'),'$gender') "; 

        if($conn->query($sql)==TRUE){
            echo "Đăng Ký thành công <br>";
            echo"<pre>";
            print_r($_POST);
        }else{
            echo "lỗi {$sql}".$conn->error;
        }



    }else{
        echo "bạn cần nhập đầy đủ thông tin ";
    }
   
}
?>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy ngày sinh từ form
    $ngaySinh = $_POST['ngay_sinh'];

    // Kiểm tra và xác thực dữ liệu 
    if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $ngaySinh)) {
        echo "Định dạng ngày sinh không hợp lệ. Vui lòng nhập theo dạng dd/mm/yyyy";
        exit();
    }

    // Chuyển đổi thành đối tượng DateTime
    try {
        $dateNgaySinh = DateTime::createFromFormat('d/m/Y', $ngaySinh);
    } catch (Exception $e) {
        echo "Có lỗi xảy ra khi xử lý ngày sinh: " . $e->getMessage();
        exit();
    }

    // Lấy ngày hiện tại
    $ngayHienTai = new DateTime();

    // Tính khoảng cách
    $khoangCach = $ngayHienTai->diff($dateNgaySinh);

    // Hiển thị kết quả
    echo "Bạn đã " . $khoangCach->days . " ngày tuổi.";
}
?>