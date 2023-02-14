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
            <h1>신용카드 결제</h1>
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
               <p>※ 결제신청요금은 SMS기준 VAT 포함금액입니다.</p>
               <div class="pay_info_box">
                  <strong>콘텐츠 결제는 서비스 개시이후 환불이 불가합니다.</strong>
                  <span>※ 결제를 진행하시려면 아래 <b class="t_blue">지불요청</b> 버튼을 눌러주십시오.</span>
                  <span>- 신용카드 결제의 경우 세금계산서는 발행되지 않습니다.</span>
                  <span>- 영수증은 완료페이지에서 인쇄하실 수 있습니다.</span>
               </div>
            </div>
         </div>
         <div class="pop_btn">
           <input type="button" value="지출요청">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>
