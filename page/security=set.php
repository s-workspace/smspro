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
         <div class="security_box">
            <div class="sec_set">
               <div class="sec_set_top">
                  <span>로그인 허용 아이피<br>(접속 IP : <b>123.456.78.910</b>)</span>
                  <div class="sec_set_mode"><p></p></div>
               </div>
               <ul>
                  <div class="sec_set_cover"></div>
                  <li><span><h1>123.456.78.910</h1><h2>2022-11-23 11:22:14</h2></span><a href="" class="bl4">삭제</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="아이피를 입력해 주세요."><a href="">등록</a></li>
               </ul>
               <p>※ 로그인 시 등록된 IP에서만 접속이 가능합니다.</p>
            </div>
            <div class="sec_set">
               <div class="sec_set_top">
                  <span>휴대폰 보안 로그인<br>(담당자 등록)</span>
                  <div class="sec_set_mode"><p></p></div>
               </div>
               <ul>
                  <div class="sec_set_cover"></div>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
                  <li><input type="text" placeholder="휴대폰 번호를 입력해 주세요."><a href="">등록</a></li>
               </ul>
               <p>※ 로그인 시 휴대폰으로 SMS 인증완료 후 접속 가능합니다.</p>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>