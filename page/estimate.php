<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/common.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="../javascript/console.js"></script>
<body>
   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li class="this"><a href="">견적서 발행</a></li>
            </ul>
         </div>
         <div class="estimate">
            <div class="title2">
               <h1><img src="../images/common/receipt_icon.png" alt="">견적서 발행 신청</h1>
            </div>
            <div class="estimate_box">
               <ul>
                  <li><h1>신청자 소속</h1><i><input type="radio" name="cs_type" id="cs1" checked><label for="cs1">사업자 (법인/개인)</label></i></li>
                  <li><h1>기관명</h1><input type="text"></li>
                  <li><h1>담당자</h1><input type="text"></li>
                  <li><h1>연락처</h1><input type="text"></li>
                  <li><h1>이메일</h1><input type="text"></li>
                  <li><i><input type="radio" name="es_type" class="es_type" id="et1" checked><label for="et1">금액 기준 :</label><input type="text">원</i></li>
                  <li><i><input type="radio" name="es_type" class="es_type" id="et2"><label for="et2">건수 기준 :</label><input type="text" class="block" disabled>건</i></li>
                  <li style="display: flex; flex: 100%; justify-content: flex-end;"><a href="" class="btn2">발행신청</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>