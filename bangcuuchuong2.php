
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="baitap1.css">
    <title>Document</title>
    
</head>
<body>
<div class="khung">
    <div class="Anh">
        <img class="anh1" src="anh/1.jpg" alt="mo ta hinh anh">
    </div>
    <!-- // -->
    
<ul class="Menu">
    <li class="menu " >
         TRANG CHU 
    </li>
    <li class="menu " >
        GIOI THIEU 
   </li>

   <li class="menu " >
    TIN TUC
</li>

<li class="menu " >
    DICH VU 
</li>

<li class="menu " >
    KHACH HANG  
</li>

<li class="menu " >
    LIEN HE  
</li>
</ul>
    <!-- //////// -->
  <div class="khungtrai">
    <ul class="Menudoc">
        <li class="menudoc">
        TY GIA NGOAI TE 
        </li>
        <li class="menudoc">
           NGAN HANG LIEN KET  
            </li>
            <li class="menudoc">
                NGAN HANG DIEN TU 
                </li>
                <li class="menudoc">
                    LAI XUAT 
                    </li>
                    <li class="menudoc">
                        MANG LUOI HOAT DONG 
                        </li>
                        <li class="menudoc">
                            DICH VU NGAN HANG 
                            </li>
                            <li class="menudoc">
                                GOP Y KHACH HANG 
                                </li>
                                <li class="menudoc">
                                    THONG TIN THI TRUONG 
                                    </li>
                                                                                                                        
    </ul>
    <img class="anh2" src="anh/2.jpg" alt="mo ta hinh anh ">
  </div>
<div class="giua">
  GIA USD 24,090.00 - GIA EURO 25,089.27 - GIA GBP 28,963.54
</div>
<img class="anh3" src="anh/3.jpg" alt="mo ta hinh anh">
<img class="anh4" src="anh/4.jpg" alt="mo ta hinh anh">

</div>

</body>
</html>


<!-- ======================================= -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
</head>
<body>
    <form method="GET" action="">
        <label for="txtSo">Nhập số:</label>
        <input type="number" name="txtSo" id="txtSo" required>
        <input type="submit" value="Xem bảng cửu chương">
    </form>

    <?php
    if (isset($_GET["txtSo"]) && $_GET["txtSo"] != null) {
        $so = $_GET["txtSo"];
        echo "<h3>Bảng cửu chương của số " . $so . ":</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo $so . " x " . $i . " = " . $so * $i . "<br/>";
        }
    } else {
        echo "<p>Vui lòng nhập số để xem bảng cửu chương!</p>";
    }
    ?>
</body>
</html>