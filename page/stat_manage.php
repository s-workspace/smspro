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
                  <a href="stat_manage.php" class="btn2">포인트 사용내역 보기</a>
                  <a href="stat_manage=point.php" class="bl4">포인트 충전내역 보기</a>
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
                  <select name="msg_type" id="msg_type">
                     <option value="">전체</option>
                     <option value="">SMS</option>
                     <option value="">LMS</option>
                     <option value="">MMS</option>
                     <option value="">RCS SMS</option>
                     <option value="">RCS LMS</option>
                     <option value="">RCS MMS</option>
                  </select>
                  <input type="button" value="보기" class="btn2">
               </p>
            </div>
            <div class="selbox_top">
               <h1>월별 사용 통계 : <span>전체 사용량</span></h1>
            </div>
            <table cellpadding="0" cellspacing="0">
               <colgroup>
                  <col width="">
                  <col width="202.5">
                  <col width="202.5">
                  <col width="202.5">
                  <col width="202.5">
               </colgroup>
               <thead>
                  <tr>
                     <th>날짜</th>
                     <th>총 전송 내역</th>
                     <th>성공 내역</th>
                     <th>실패 내역</th>
                     <th>잔여 포인트</th>
                  </tr>
               </thead>
               <!-- <tbody>
                  <tr>
                     <td colspan="5" style="height: 300px;">등록된 내용이 없습니다.</td>
                  </tr>
               </tbody> -->
               <tbody>
                  <tr>
                     <td>2022년 1월 1일</td>
                     <td><span>418,342 P</span></td>
                     <td><span>411,892 P</span></td>
                     <td><span>6,450 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 2일</td>
                     <td><span>244,348 P</span></td>
                     <td><span>240,014 P</span></td>
                     <td><span>4,334 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 3일</td>
                     <td><span>140,585 P</span></td>
                     <td><span>136,555 P</span></td>
                     <td><span>4,030 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 4일</td>
                     <td><span>12,867 P</span></td>
                     <td><span>12,711 P</span></td>
                     <td><span>156 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 5일</td>
                     <td><span>313,772 P</span></td>
                     <td><span>309,612 P</span></td>
                     <td><span>4,160 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 6일</td>
                     <td><span>399,141 P</span></td>
                     <td><span>391,731 P</span></td>
                     <td><span>7,410 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 7일</td>
                     <td><span>300,820 P</span></td>
                     <td><span>295,932 P</span></td>
                     <td><span>4,888 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 8일</td>
                     <td><span>353,725 P</span></td>
                     <td><span>346,523 P</span></td>
                     <td><span>7,202 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 9일</td>
                     <td><span>236,636 P</span></td>
                     <td><span>231,921 P</span></td>
                     <td><span>4,715 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 10일</td>
                     <td><span>189,509 P</span></td>
                     <td><span>183,971 P</span></td>
                     <td><span>5,538 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 11일</td>
                     <td><span>18,734 P</span></td>
                     <td><span>18,500 P</span></td>
                     <td><span>234 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 12일</td>
                     <td><span>101,182 P</span></td>
                     <td><span>99,466 P</span></td>
                     <td><span>1,716 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 13일</td>
                     <td><span>309,687 P</span></td>
                     <td><span>302,511 P</span></td>
                     <td><span>7,176 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 14일</td>
                     <td><span>209,437 P</span></td>
                     <td><span>205,225 P</span></td>
                     <td><span>4,212 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 15일</td>
                     <td><span>227,256 P</span></td>
                     <td><span>221,640 P</span></td>
                     <td><span>5,616 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 16일</td>
                     <td><span>234,381 P</span></td>
                     <td><span>230,403 P</span></td>
                     <td><span>3,978 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 17일</td>
                     <td><span>148,301 P</span></td>
                     <td><span>145,571 P</span></td>
                     <td><span>2,730 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 18일</td>
                     <td><span>18,463 P</span></td>
                     <td><span>17,111 P</span></td>
                     <td><span>1,352 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 19일</td>
                     <td><span>162,207 P</span></td>
                     <td><span>159,529 P</span></td>
                     <td><span>2,678 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 20일</td>
                     <td><span>255,727 P</span></td>
                     <td><span>250,621 P</span></td>
                     <td><span>5,106 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 21일</td>
                     <td><span>214,812 P</span></td>
                     <td><span>210,184 P</span></td>
                     <td><span>4,628 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 22일</td>
                     <td><span>194,888 P</span></td>
                     <td><span>189,714 P</span></td>
                     <td><span>5,174 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 23일</td>
                     <td><span>165,125 P</span></td>
                     <td><span>161,797 P</span></td>
                     <td><span>3,328 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 24일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 25일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 26일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 27일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 28일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 29일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 30일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
                  <tr>
                     <td>2022년 1월 31일</td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>0 P</span></td>
                     <td><span>1,000,000 P</span></td>
                  </tr>
               </tbody>
               <thead class="thead_bottom">
                  <tr>
                     <th>합계</th>
                     <th><span>4,869,945 P</span></th>
                     <th><span>4,773,134 P</span></th>
                     <th><span>96,811 P</span></th>
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