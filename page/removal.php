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
               <li class="this"><a href="">회원탈퇴</a></li>
            </ul>
         </div>
         <div class="removal">
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">회원탈퇴 신청</h1>
            </div>
            <span>회원 탈퇴 신청에 앞서 아래 내용을 반드시 확인해 주세요.</span>
            <div class="info_wrap">
               <span>
                  - 회원탈퇴시 회원님의 해당정보 및 잔여콜, 문자전송내역, 예약 메시지 또한 모두 삭제됩니다.<br>
                  - <b>삭제된 아이디는 재사용이 불가능합니다.</b><br>
               </span>
            </div>
            <h1><b>홍길동</b> 회원님 탈퇴를 원하시면 비밀번호를 입력해주세요.</h1>
            <ul>
               <li><h1>아이디</h1><input type="text" value="admin" readonly></li>
               <li><h1>비밀번호</h1><input type="password"></li>
               <li><h1>비밀번호 확인</h1><input type="password"></li>
            </ul>
            <div class="sub_bottom">
              <a href="" class="btn2">회원탈퇴</a>
              <a href="msg.php" class="bl4">취소하기</a>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>