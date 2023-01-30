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
               <li><a href="080_service.php">서비스 안내</a></li>
               <li class="this"><a href="080_service_app.php">요금 및 신청</a></li>
            </ul>
         </div>
         <div class="service">
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">수신거부 서비스 요금 안내</h1>
            </div>
            <table>
               <colgroup>
                  <col width="220">
               </colgroup>
               <tbody>
                  <tr>
                     <th>서비스 구분</th>
                     <td><strong>공용 080 서비스</strong></td>
                     <td><strong class="t_blue">전용 080 서비스</strong></td>
                  </tr>
                  <tr>
                     <th>월 사용료</th>
                     <td>무료</td>
                     <td><h3>20,000원</h3>&nbsp;&nbsp;<strong class="t_red">10,000 원</strong></td>
                  </tr>
                  <tr>
                     <th>ARS 음성</th>
                     <td>무료</td>
                     <td>무료</td>
                  </tr>
                  <tr>
                     <th>DB 연동</th>
                     <td><strong>불가능</strong></td>
                     <td><strong>가능 (별도 협의)</strong></td>
                  </tr>
                  <tr>
                     <th>수신거부</th>
                     <td><strong>3일 이내 등록 건 처리</strong></td>
                     <td><strong>실시간 처리</strong></td>
                  </tr>
                  <tr>
                     <th>결과 통지<br>(정보통신망법 제62조의 2)</th>
                     <td><strong>14일 이내 수신자에게 처리결과 통지<br>(통지의무 별도 필요)</strong></td>
                     <td><strong>ARS 음성을 통하여 처리결과 실시간 통지<br><b class="t_red">(통지의무 완료)</b></strong></td>
                  </tr>
                  <tr>
                     <th>가입신청</th>
                     <td><a href="pb080_popup.php" class="bl4" onclick="window.open(this.href, '', 'left=660, top=200, width=440, height=600'); return false;">공용 080신청</a></td>
                     <td><a href="ex080_popup.php" class="btn2" onclick="window.open(this.href, '', 'left=620, top=200, width=490, height=600'); return false;">전용 080신청</a></td>
                  </tr>
               </tbody>
            </table>
            <p class="mt10">- 공용번호 사용 시 3일 이후 수신거부 등록건 미처리 및 결과통지의무 위반으로 인한 과태료 부과 시 모든 책임은 사용자에게 있습니다.</p>
            <p>- 공용 080 번호는 예약 및 반복예약 전송이 불가합니다.</p>
            <p>- 문자모아 전용 080 상품은 이벤트 상품으로, 080-880-**** 번호로 임의 부여됩니다.</p>
            <p>- 원하는 번호가 있을 시 별도 협의 후 진행합니다.</p>
            <div class="title2">
               <h1><img src="../images/common/payment_icon.png" alt="">수신 통화료 (전용080서비스)</h1>
            </div>
            <table>
               <thead>
                  <th colspan="4">통화료 (VAT 별도)</th>
               </thead>
               <tbody>
                  <tr>
                     <td><strong>시내 전화</strong></td>
                     <td><strong>시외 전화</strong></td>
                     <td><strong>이동 전화</strong></td>
                     <td><strong>인터넷 전화</strong></td>
                  </tr>
                  <tr>
                     <td>45원 / 3분</td>
                     <td>13.8원 / 10초</td>
                     <td>15.63원 / 10초</td>
                     <td>65원 / 3분</td>
                  </tr>
                  <tr>
                     <td colspan="4">통신사 직접 과금</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>