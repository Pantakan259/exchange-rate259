<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล</title>
<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<style type="text/css">
<!--
body {
    background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
    color:#252525;
    font-size: 14px;
}
-->
</style></head>
<body>

<div   class="option animated bounce" style="width: 550px; height: 300px; background-color: white; margin: 0 auto; margin-top: 50px; border-radius: 10px;" > 


   
   <h2 style="padding-top: 45px; color: black; font-size: 16px; padding-left: 170px; padding-bottom: 30px;">อัตราแลกเปลี่ยนเงินตราต่างประเทศ</h2>




  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
 
   case 11:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$coin_m." <th>สหดอลลาร์สหรัฐอเมริกา (USD)</th>"."<br><br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์สหรัฐอเมริกา (USD)";
    break;
   case 12:
    $coin_m=32.55;
    $sum=$money*$coin_m;
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$coin_m." <th>เกาหลีวอน (KRW)</th>"."<br><br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
    break;    
   
   case 14:
    $coin_m=3.24;
    $sum=$money*$coin_m;
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$coin_m." <th>เงินเยนญี่ปุ่น (JPY)</th>"."<br><br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนญี่ปุ่น (JPY)";
    break;    
  }
 
  ?>

  <div> <a href="http://localhost/exchangeMoney/index.html">
  <td colspan="2"> <div align="center" ><input class="a" type="submit" value="กลับ" 
      style="width: 200px;
      font-size: 16px;
    background-color: #a1c4fd;
    color: white;
    padding: 14px 20px;
    margin: 40px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 2px 2px 2px #888888;
    " />

    </div></td></a>
  </div>
 
</div>
</body>
</html>