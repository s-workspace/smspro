<!DOCTYPE html>
<html lang="en" style="min-width:470px; max-width:470px;">
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
<body style="min-width:470px; max-width:470px;">
   <div class="popup_container">
      <div class="popup_wrap">
         <div class="popup_title">
            <h1>무통장입금</h1>
         </div>
         <div class="popup_content">
            <div class="payment_popup">
               <ul>
                  <li><h1>가맹점</h1><strong>문자프로</strong> [ www.smspro.co.kr ]</li>
                  <li><h1>회원아이디</h1><strong class="t_blue">admin</strong></li>
                  <li><h1>성명</h1><strong class="t_blue">테스트회원</strong></li>
               </ul>
               <table>
                  <thead>
                     <tr>
                        <th>결제건수(SMS)</th>
                        <th>단가</th>
                        <th>결제신청요금</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><strong>500,000</strong> 건</td>
                        <td><strong>10</strong> 원</td>
                        <td><strong class="t_red">5,500,000</strong> 원</td>
                     </tr>
                  </tbody>
               </table>
               <p>※ 결제신청요금은 SMS기준 VAT 포함금액입니다.<br>콘텐츠 결제는 서비스 개시이후 환불이 불가합니다.</p>
               <div class="bank_box">
                  <span>무통장입금계좌</span>
                  <i>
                     <img src="../images/common/bank_logo.png" alt="">
                     <h1>607-01-118215</h1>
                     <span>예금주 : (주)이노포스트</span>
                  </i>
                  <h2>상기계좌로 결제금액 <b>5,500,000</b> 원을 <input type="text" value="이노포스트" readonly> 으로 입금하시고<br><strong class="t_blue">입금확인</strong> 버튼을 눌러주세요.</h2>
               </div>
            </div>
         </div>
         <div class="pop_btn">
           <input type="button" value="입금확인">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>
