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
               <li><a href="msg_transmit.php">전송내역 관리</a></li>
               <li class="this"><a href="stat_manage.php">전송내역 통계</a></li>
            </ul>
         </div>
         <div class="stat_box">
            <div class="selbox_top mt20">
               <p>
                  <a href="stat_manage.php" class="bl4">포인트 사용내역 보기</a>
                  <a href="stat_manage=point.php" class="btn2">포인트 충전내역 보기</a>
                  <a href="stat_manage=number.php" class="bl4">전송건수 보기</a>
               </p>
               <p>
                  <select name="" id="">
                     <option value="">2022년</option>
                     <option value="">2021년</option>
                     <option value="">2020년</option>
                  </select>
                  <select name="" id="">
                     <option value="">1월</option>
                     <option value="">2월</option>
                     <option value="">3월</option>
                     <option value="">4월</option>
                     <option value="">5월</option>
                     <option value="">6월</option>
                     <option value="">7월</option>
                     <option value="">8월</option>
                     <option value="">9월</option>
                     <option value="">10월</option>
                     <option value="">11월</option>
                     <option value="">12월</option>
                  </select>
                  <input type="button" value="보기" class="btn2">
               </p>
            </div>
            <div class="selbox_top">
               <h1>충전내역 : <span>2022년 1월</span></h1>
            </div>
            <table cellpadding="0" cellspacing="0">
               <colgroup>
                  <col width="">
                  <col width="405">
                  <col width="405">
               </colgroup>
               <thead>
                  <tr>
                     <th>날짜</th>
                     <th>포인트 충전</th>
                     <th>잔여 포인트</th>
                  </tr>
               </thead>
               <!-- <tbody>
                  <tr>
                     <td colspan="3" style="height: 300px;">등록된 내용이 없습니다.</td>
                  </tr>
               </tbody> -->
               <tbody>
                  <tr>
                     <td>2022년 1월 3일</td>
                     <td><span>500,000 P</span></td>
                     <td><span>524,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 25일</td>
                     <td><span>1,000,000 P</span></td>
                     <td><span>1,516,000 P</span></td>
                  </tr>
               </tbody>
               <thead class="thead_bottom">
                  <tr>
                     <th>합계</th>
                     <th><span>1,500,000 P</span></th>
                     <th><span></span></th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>