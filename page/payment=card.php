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
               <li><a href="payment=transfer.php">즉시이체</a></li>
               <li class="this"><a href="">카드결제</a></li>
            </ul>
            <div class="title2">
               <h1><img src="../images/common/payment_icon.png" alt="">결제금액 선택</h1>
            </div>
            <div class="payment_box">
               <ul class="payment_list">
                  <li>
                     <h1>충전 포인트</h1>
                     <h2>100,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>6,666 건</h3>
                     <h3><span>장문(LMS)</span>2,857 건</h3>
                     <h3><span>이미지(MMS)</span>769 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>110,000 원</h5>
                  </li>
                  <li>
                     <h1>충전 포인트</h1>
                     <h2>300,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>21,427 건</h3>
                     <h3><span>장문(LMS)</span>8,822 건</h3>
                     <h3><span>이미지(MMS)</span>2,500 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>330,000 원</h5>
                  </li>
                  <li>
                     <h1>충전 포인트</h1>
                     <h2>500,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>38,460 건</h3>
                     <h3><span>장문(LMS)</span>15,150 건</h3>
                     <h3><span>이미지(MMS)</span>4,544 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>550,000 원</h5>
                  </li>
                  <li>
                     <h1>충전 포인트</h1>
                     <h2>1,000,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>83,333 건</h3>
                     <h3><span>장문(LMS)</span>31,250 건</h3>
                     <h3><span>이미지(MMS)</span>10,000 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>1,100,000 원</h5>
                  </li>
                  <li>
                     <h1>충전 포인트</h1>
                     <h2>3,000,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>272,727 건</h3>
                     <h3><span>장문(LMS)</span>96,774 건</h3>
                     <h3><span>이미지(MMS)</span>33,333 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>3,300,000 원</h5>
                  </li>
                  <li class="this">
                     <h1>충전 포인트</h1>
                     <h2>5,000,000 P</h2>
                     <h3 class="t_blue"><span>단문(SMS)</span>500,000 건</h3>
                     <h3><span>장문(LMS)</span>166,665 건</h3>
                     <h3><span>이미지(MMS)</span>62,500 건</h3>
                     <h4>결제금액(VAT 포함)</h4>
                     <h5>5,500,000 원<h5>
                  </li>
               </ul>
               <div class="total_payment">
                  <ul>
                     <h1>선택 상품 정보</h1>
                     <li>결제수단 : <span>카드결제</span></li>
                     <li>충전 포인트 : <span>5,000,000  P</span></li>
                     <li>단문(SMS)기준 : <span>500,000  건</span></li>
                     <li>장문(LMS)기준 : <span>166,665  건</span></li>
                     <li>이미지(MMS)기준 : <span>62,500  건</span></li>
                     <li>결제금액 : <span>5,000,000 원</span></li>
                     <li>부가 가치세(VAT) : <span>500,000 원</span></li>
                  </ul>
                  <i>
                     <h1><span>총결제 금액</span><b><strong>5,500,000</strong>원</b></h1>
                     <a href="payment_popup=card.php" onclick="window.open(this.href, '', 'left=680, top=200, width=470, height=600'); return false;">결제하기</a>
                  </i>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>