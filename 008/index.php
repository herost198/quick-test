<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết 1 class PHP
    có tên là Student với các thuộc tính
    1 - tên
    2 - ngày tháng năm sinh ( định dạng dd/mm/YY )
    3 - quê quán
    4 - giới tính
    5 - điểm của sinh viên đó ( dạng mảng )
        ví dụ array(
            'toan' => 0,
            'ly' => 0,
            'hoa' => 0
        )
        đây khi là khai báo mặc định khi khởi tạo đối tượng sẽ truyền điểm vào
    Hãy khai báo các phương thức để in ra
    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    3 - tuổi của sinh viên hiện tại getAgeStudent()
    4 - điểm trung bình 3 môn của sinh viên đó
    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém</h1>

    Cuối cùng hãy khởi tạo đối tượng từ class này và truyền vào đầy đủ thông tin
sau đó lần lượt gọi các phương thức trong class mà bạn đã tạo

<?php
    class Student{
        private $ten;
        private $queQuan;
        private $ngaysinh;
        private $gioitinh;
        private $diem = array(
            'toan' =>0,
            'ly'=>0,
            'hoa'=>0

        );

        public function __construct($ten,$ngaysinh,$queQuan,$gioitinh,$toan,$ly,$hoa){
            $this->ten = $ten;
            $this->ngaysinh = $ngaysinh;
            $this->queQuan = $queQuan;
            $this->gioitinh = $gioitinh;
            $this->diem['toan'] =$toan;
            $this->diem['hoa'] =$hoa;
            $this->diem['ly'] =$ly;
        }
        
        public function getFullInfo(){
            echo "ten: ".$this->ten;
            echo "<br/>que quan: ". $this->queQuan;
            echo "<br/>Gioi tinh: ". $this->gioitinh;
        }
        
        public function getAgeStudent(){
            $birth = date_create($this->ngaysinh);
            $timestamp = date_create(date("d-m-Y"));
            $interval = date_diff($birth,$timestamp);
            echo "số tuổi của bạn là: ". $interval->format('%y');
        }
        public function getDiemTB(){
            $trungbinh =0;
            $daudiem = 0;
            foreach ($this->diem as $value){
                $trungbinh += $value;
                $daudiem++;
            }
            return $trungbinh/$daudiem;
        }
        public function xeploai(){
            if($this->getDiemTB()>8)$xeploai = "gioi";
            elseif($this->getDiemTB()>7)$xeploai = "kha";
            elseif($this->getDiemTB()>5)$xeploai ="trung binh";
            else $xeploai = "yeu kem";
            echo "<br/> xep loai diem trung binh: ". $xeploai;
        }


    }
    $student1  = new Student('nguyen quang anh','8/12/1998','son tay','nam',3,4,5);
    $student1->getFullInfo();
    $student1->getAgeStudent();
    echo '<br/> Diem trung binh la : '. $student1->getDiemTB();
    $student1->xeploai();
?>
</body>
</html>