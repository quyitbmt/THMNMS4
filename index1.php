<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Lab1/site.css" rel="stylesheet"/>
    <title>Xếp loại kết quả sinh viên</title>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại kết quả sinh viên</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Toán</label></div>
                    <div class="lblinput">
                        <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ? $_POST["Toan"] : "" ; ?>" />
                    </div> 
                 </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Lý</label></div>
                    <div class="lblinput">
                        <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"]) ? $_POST["Ly"] : "" ; ?>" />
                    </div> 
                 </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Hóa</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ? $_POST["Hoa"] : "" ; ?>" />
                </div> 
            </div>
            <div class="row">
               <div class="lbltitle">
                   <label>Chọn khu vực</label>
               </div>
               <div>
                   <select name="khuvuc">
                       <option value="" selected>--Chọn khu vực--</option>
                       <option value="1">Khu vực 1</option>
                       <option value="2">Khu vực 2</option>
                       <option value="3">Khu vực 3</option>
                       <option value="4">Khu vực 4</option>
                       <option value="5">Khu vực 5</option>
                   </select>
               </div>
            </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Hiển thị" />
                </div>
            </div>
        </form>
        <div id="result">
            <h2>Kết quả xếp loại</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Tổng điểm</label>
                </div>
                <div class="lbloutput">
                    <?php
                        echo isset ($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] : "";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Xếp loại</label>
                </div>
                <div class="lbloutout">
                    <?php
                        if(isset($_POST["btnsubmit"])){
                            $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            if($TongDiem>=24)
                                echo "Giỏi";
                            else if($TongDiem>=21)
                                echo "Khá";
                            else if($TongDiem>=15)
                                echo "Trung Bình";
                            else 
                                echo "Yếu";
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm cộng</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if(isset($_POST["btnsubmit"]))
                        {
                            $Diemcong = $_POST["khuvuc"];
                            switch($Diemcong){
                                case 1:
                                    echo 5;
                                    break;
                                case 2:
                                    echo 5;
                                    break;
                                case 3:
                                    echo 3;
                                    break;
                                default:
                                    echo 0;
                                    break;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>