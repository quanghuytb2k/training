<?php
// $arrSinhVien =[
//     [
//     'id' =>1,
//     'tensinhvien'=>"Nguyễn Văn Thái",
//     'khoa' =>'CNTT',
//     'namsinh'=>2000,
//     ],
//     [
//     'id' =>2,
//     'tensinhvien'=>"Nguyễn Văn long",
//     'khoa' =>'CNTT',
//     'namsinh'=>2012,
//     ],
//     [
//     'id' =>3,
//     'tensinhvien'=>"Nguyễn Văn hải",
//     'khoa' =>'CNTT',
//     'namsinh'=>1990,
//     ],
//     [
//     'id' =>4,
//     'tensinhvien'=>"Nguyễn Văn an",
//      'khoa' =>'CNTT',
//     'namsinh'=>1992,
//     ],
//      [
//     'id' =>5,
//     'tensinhvien'=>"Nguyễn Văn vũ",
//     'khoa' =>'CNTT',
//     'namsinh'=>2001,
//     ],
// ];
// $now = getdate();

// echo $now["year"]; # hiển thị năm
function tinhtuoi($arrSinhVien){
$now = getdate();
// echo $now["year"]; # hiển thị năm
foreach($arrSinhVien as $key=>$value){
    $tuoi = (int)$now['year'] - (int)$value['namsinh'];
    if($tuoi < 25){
        echo "<pre>";
        print_r( $value);
        echo "</pre>";
       
    }
}
}