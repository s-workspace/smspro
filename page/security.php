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
               <li><a href="profile.php">회원기본 정보</a></li>
               <li><a href="callback_manage.php">발신번호 관리</a></li>
               <li><a href="brand.php">브랜드 관리</a></li>
               <li class="this"><a href="security.php">보안설정</a></li>
            </ul>
         </div>
         <div class="security">
            <div class="sec_top">
               <h1>가입자 정보확인</h1>
               <span>보안 로그인 설정을 위해서는 <b>가입자 정보 확인</b>이 필요합니다.</span>
            </div>
            <div class="sec_con">
               <i>
                  <input type="text" name="" value="010-1234-5678" readonly="">
                  <a href="">인증요청</a>
               </i>
               <i>
                  <input type="text" name="" value="" placeholder="인증번호 입력">
                  <a href="security=set.php">인증확인</a>
               </i>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>