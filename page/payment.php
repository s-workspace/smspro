<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
               <li class="this"><a href="payment.php">무통장 입금</a></li>
               <li><a href="payment=transfer.php">즉시이체</a></li>
               <li><a href="payment=card.php">카드결제</a></li>
            </ul>
            <div class="title2">
               <h1><img src="../images/common/payment_icon.png" alt="">결제금액 선택</h1>
            </div>
            <table class="payment_table">
               <colgroup>
                  <col width="50">
                  <col width="175">
                  <col width="215">
                  <col width="180">
                  <col width="180">
                  <col width="180">
               </colgroup>
               <thead>
                  <tr>
                     <th rowspan="2" colspan="2">충전 포인트</th>
                     <th rowspan="2">결제금액(VAT 포함)</th>
                     <th colspan="3">전송단가</th>
                  </tr>
                  <tr>
                     <th>단문(SMS)</th>
                     <th>장문(LMS)</th>
                     <th>이미지(MMS)</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><input type="radio" name="pay" id="p01"><label for="p01"></label></td>
                     <td>100,000 P</td>
                     <td>110,000 원</td>
                     <td><h1>6,666 건</h1><h2>15 P</h2></td>
                     <td><h1>2,857 건</h1><h2>35 P</h2></td>
                     <td><h1>769 건</h1><h2>130 P</h2></td>
                  </tr>
                  <tr>
                     <td><input type="radio" name="pay" id="p02"><label for="p02"></label></td>
                     <td>300,000 P</td>
                     <td>330,000 원</td>
                     <td><h1>21,427 건</h1><h2>14 P</h2></td>
                     <td><h1>8,822 건</h1><h2>34 P</h2></td>
                     <td><h1>2,500 건</h1><h2>120 P</h2></td>
                  </tr>
                  <tr>
                     <td><input type="radio" name="pay" id="p03"><label for="p03"></label></td>
                     <td>500,000 P</td>
                     <td>550,000 원</td>
                     <td><h1>38,460 건</h1><h2>13 P</h2></td>
                     <td><h1>15,150 건</h1><h2>33 P</h2></td>
                     <td><h1>4,544 건</h1><h2>110 P</h2></td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p04"><label for="p04"></label></td>
                     <td>1,000,000 P</td>
                     <td>1,100,000 원</td>
                     <td class="t_red"><h1>83,333 건</h1><h2>12 P</h2></td>
                     <td class="t_red"><h1>31,250 건</h1><h2>32 P</h2></td>
                     <td class="t_red"><h1>10,000 건</h1><h2>100 P</h2></td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p05"><label for="p05"></label></td>
                     <td>3,000,000 P</td>
                     <td>3,300,000 원</td>
                     <td class="t_red"><h1>272,727 건</h1><h2>11 P</h2></td>
                     <td class="t_red"><h1>96,774 건</h1><h2>31 P</h2></td>
                     <td class="t_red"><h1>33,333 건</h1><h2>90 P</h2></td>
                  </tr>
                  <tr class="bg_blue">
                     <td><input type="radio" name="pay" id="p06"><label for="p06"></label></td>
                     <td>5,000,000 P</td>
                     <td>5,500,000 원</td>
                     <td class="t_red"><h1>500,000 건</h1><h2>10 P</h2></td>
                     <td class="t_red"><h1>166,665 건</h1><h2>30 P</h2></td>
                     <td class="t_red"><h1>62,500 건</h1><h2>80 P</h2></td>
                  </tr>
               </tbody>
            </table>
            <div class="title2">
               <h1><img src="../images/common/info_icon02.png" alt="">결제정보 확인</h1>
            </div>
            <div class="total_payment">
               <ul>
                  <li>결제수단 : <span>무통장입금</span></li>
                  <li>충전 포인트 : <span>5,000,000</span> P</li>
                  <li>결제금액 : <span>5,000,000</span> 원</li>
                  <li>부가 가치세 : <span>500,000</span> 원</li>
               </ul>
               <i>
                  <h1><span>총결제 금액</span><b><strong>5,500,000</strong>원</b></h1>
                  <a href="payment_popup=passbook.php" onclick="window.open(this.href, '', 'left=680, top=200, width=470, height=600'); return false;">결제하기</a>
               </i>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>