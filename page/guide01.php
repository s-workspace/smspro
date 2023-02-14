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
   <div class="terms_wrap">
      <div class="terms_nav">
         <a href="msg.php">홈으로</a><p>></p><a href="guide.php">이용가이드</a><p>></p><a href="">발신번호 사전등록 안내</a>
      </div>
      <div class="wrap">
         <div class="logo">
            <a href=""><img src="../images/common/logo.png" alt=""></a>
         </div>
         <div class="terms_title">
            <h1>발신번호 사전등록 안내</h1>
            <span>전기통신사업법 제82조에 의거 <b>2015년 10월 16일 이후</b>
               에는 거짓으로 표시된 전화번호로 인한 이용피해 예방을 위해<br>
               문자 전송시 <b>등록된 발신번호로만 문자전송이 가능</b>합니다.
            </span>
         </div>
         <div class="guide_wrap">
            <i>
               <strong>발신번호 등록 절차 안내</strong>
               <p>로그인 후 마이페이지 [발신번호 관리] 또는 메시지 전송 [발신번호 관리]</p>
            </i>
            <i>
               <div class="guide_tabs">
                  <ul>
                     <li><span>일반번호 등록방법</span></li>
                     <li><span>대표번호 등록방법</span></li>
                  </ul>
               </div>
            </i>
            <i>
               <div class="guide_tabs">
                  <ul>
                     <li><img src="../images/guide/guide01-1.png" alt=""></li>
                     <li><img src="../images/guide/guide01-2.png" alt=""></li>
                  </ul>
               </div>
            </i>
            <i>
               <table>
                  <colgroup>
                     <col width="130">
                     <col width="450">
                     <col width="580">
                  </colgroup>
                  <thead>
                     <tr>
                        <th colspan="3">발신번호 사전등록 제출 서류</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th>구분</th>
                        <td>소유자</td>
                        <td>제출서류</td>
                     </tr>
                     <tr>
                        <th rowspan="3">개인회원</th>
                        <td>본인 휴대폰 번호</td>
                        <td>휴대폰 본인인증, 제출서류 없음</td>
                     </tr>
                     <tr>
                        <td>본인 일반번호</td>
                        <td>통신가입증명원</td>
                     </tr>
                     <tr>
                        <td>타인명의 번호</td>
                        <td>등록불가</td>
                     </tr>
                     <tr>
                        <th rowspan="3">기업회원</th>
                        <td>직원</td>
                        <td>통신가입증명원, 재직증명서</td>
                     </tr>
                     <tr>
                        <td>대표자</td>
                        <td>통신가입증명원, 사업자등록증</td>
                     </tr>
                     <tr>
                        <td>타사(협력사 등)</td>
                        <td>관계확인문서(위-수탁계약서 등),<br>사업자등록증, 통신가입증명원, 위임장,<br>대리인 신분증 사본, 재직증명서</td>
                     </tr>
                  </tbody>
               </table>
            </i>
         </div>
      </div>
      <?php include 'admin_footer.php'; ?>
   </div>
</body>
</html>