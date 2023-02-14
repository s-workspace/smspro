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
               <li class="this"><a href="">충전하기</a></li>
            </ul>
         </div>
         <div class="payment_wrap">
            <div class="title2">
               <h1><img src="../images/common/customer_icon.png" alt="">결제수단 선택</h1>
            </div>
            <ul class="payment_tab">
               <li><a href="payment.php">무통장 입금</a></li>
               <li class="this"><a href="payment=transfer.php">즉시이체</a></li>
               <li><a href="payment=card.php">카드결제</a></li>
            </ul>
            <div class="title2">
               <h1><img src="../images/common/payment_icon.png" alt="">결제금액 선택</h1>
            </div>
            <table class="payment_table">
               <colgroup>
                  <col width="50">
                  <col width="150">
                  <col width="150">
                  <col width="">
                  <col width="">
                  <col width="">
                  <col width="2">
                  <col width="">
                  <col width="">
                  <col width="">
               </colgroup>
               <thead>
                  <tr>
                     <th rowspan="3" colspan="2">충전 포인트</th>
                     <th rowspan="3">결제금액(VAT 포함)</th>
                     <th colspan="7">전송단가(VAT 별도)</th>
                  </tr>
                  <tr>
                     <th colspan="3">일반문자</th>
                     <th></th>
                     <th colspan="3">RCS문자</th>
                  </tr>
                  <tr>
                     <th>단문(SMS)</th>
                     <th>장문(LMS)</th>
                     <th>이미지(MMS)</th>
                     <th></th>
                     <th>단문(RCS)</th>
                     <th>장문(RCS)</th>
                     <th>이미지(RCS)</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><input type="radio" name="pay" id="p01"><label for="p01"></label></td>
                     <td>100,000 P</td>
                     <td>110,000 원</td>
                     <td>15</td>
                     <td>35</td>
                     <td>130</td>
                     <td></td>
                     <td>13</td>
                     <td>35</td>
                     <td>110</td>
                  </tr>
                  <tr>
                     <td><input type="radio" name="pay" id="p02"><label for="p02"></label></td>
                     <td>200,000 P</td>
                     <td>220,000 원</td>
                     <td>14</td>
                     <td>34</td>
                     <td>120</td>
                     <td></td>
                     <td>12</td>
                     <td>34</td>
                     <td>100</td>
                  </tr>
                  <tr>
                     <td><input type="radio" name="pay" id="p03"><label for="p03"></label></td>
                     <td>300,000 P</td>
                     <td>330,000 원</td>
                     <td>13</td>
                     <td>33</td>
                     <td>110</td>
                     <td></td>
                     <td>11</td>
                     <td>33</td>
                     <td>90</td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p04"><label for="p04"></label></td>
                     <td>500,000 P</td>
                     <td>550,000 원</td>
                     <td class="t_red">12</td>
                     <td class="t_red">32</td>
                     <td class="t_red">100</td>
                     <td></td>
                     <td class="t_red">10</td>
                     <td class="t_red">32</td>
                     <td class="t_red">80</td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p05"><label for="p05"></label></td>
                     <td>1,000,000 P</td>
                     <td>1,100,000 원</td>
                     <td class="t_red">11</td>
                     <td class="t_red">31</td>
                     <td class="t_red">90</td>
                     <td></td>
                     <td class="t_red">9</td>
                     <td class="t_red">31</td>
                     <td class="t_red">70</td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p06" checked><label for="p06"></label></td>
                     <td>2,000,000 P</td>
                     <td>2,200,000 원</td>
                     <td class="t_red">10</td>
                     <td class="t_red">30</td>
                     <td class="t_red">80</td>
                     <td></td>
                     <td class="t_red">8</td>
                     <td class="t_red">30</td>
                     <td class="t_red">60</td>
                  </tr>
               </tbody>
            </table>
            <div class="title2">
               <h1><img src="../images/common/info_icon02.png" alt="">결제정보 확인</h1>
            </div>
            <div class="total_payment">
               <ul>
                  <li>결제수단 : <span>즉시이체</span></li>
                  <li>충전 포인트 : <span>2,000,000</span> P</li>
                  <li>결제금액 : <span>2,000,000</span> 원</li>
                  <li>부가 가치세 : <span>200,000</span> 원</li>
               </ul>
               <i>
                  <h1><span>총결제 금액</span><b><strong>2,200,000</strong>원</b></h1>
                  <a href="payment_popup=card.php" onclick="window.open(this.href, '', 'left=680, top=200, width=470, height=600'); return false;">결제하기</a>
               </i>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>