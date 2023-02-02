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
<script src="../javascript/script.js"></script>
<body>
<?php include 'terms_layer.php'; ?>
<div class="join_wrap">
   <dl>
      <dd class="this">로그인 정보</dd>
      <dd>회원 정보</dd>
      <dd>가입완료</dd>
   </dl>
   <div class="join_box">
      <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m12 15-5-5 5-5 1.062 1.062L9.125 10l3.937 3.938Z"/></svg>홈으로</a>
      <h1>회원가입</h1>
      <p>회원가입을 위해 필요한 정보를 입력해 주세요.</p>
      <div class="join_member">
         <div class="member_type">
            <h1>회원유형</h1>
            <ul>
               <li class="this">
                  <span>개인회원</span>
                  <p>
                     기업의 담당자인 경우 반드시 기업/단체로 가입해주세요.<br>
                     개인 회원은 본인명의의 회신번호만 등록 가능합니다.
                  </p>
               </li>
               <li>
                  <span>사업자회원</span>
                  <p>
                     휴대폰 본인인증 받으신 가입자의 재직증명서<br><b>(대표자 제외) 및 사업자등록증을 접수</b>
                     하여야 정상사용 가능합니다.
                  </p>
               </li>
            </ul>
         </div>
      </div>
      <div class="cont_box">
         <h2>약관동의</h2>
         <div class="counsel_label all_agree">
            <input type="checkbox" id="sign_all" name="agree" value="">
            <label for="sign_all"><span>전체동의</span></label>
         </div>
         <div class="counsel_label">
            <input type="checkbox" id="sign_agree01" class="sign_agree" name="agree" value="">
            <label for="sign_agree01"><span>이용약관 동의</span></label>
            <b class="t_red">(필수)</b>
            <a href="#" id="termsType01_btn">자세히보기</a>
         </div>
         <div class="counsel_label">
            <input type="checkbox" id="sign_agree02" class="sign_agree" name="agree" value="">
            <label for="sign_agree02"><span>정보수집 동의</span></label>
            <b class="t_red">(필수)</b>
            <a href="#" id="termsType02_btn">자세히보기</a>
         </div>
      </div>
      <div class="join_btn">
         <a href="join=corp.php">본인인증</a>
         <a href="../index.php">취소</a>
      </div>
   </div>
   <div class="join_copy">
      Copyright ⓒ SMSPRO. All rights Reserved.
   </div>
</div>
</body>
</html>