<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="hoang"/>
    <title>Xếp loại kết quả tuyển sinh</title>
    <link href="site.css" rel="stylesheet"/>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Toán</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ? $_POST["Toan"] : "" ;?>"/>
                </div>
            </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại"/>
                </div>
            </div>
        </form>
    </div>
</body>
</html>