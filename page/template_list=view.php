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
               <li><a href="template_manage.php">템플릿 등록</a></li>
               <li class="this"><a href="template_list.php">템플릿 목록</a></li>
            </ul>
         </div>
         <div class="template_list_view mt20">
            <p>
               <select name="" id="">
                  <option value="">브랜드 선택</option>
                  <option value="">전체</option>
               </select>
               <select name="" id="">
                  <option value="">전체</option>
                  <option value="">심사중</option>
                  <option value="">승인</option>
                  <option value="">반려</option>
               </select>
               <select name="" id="">
                  <option value="">템플릿명</option>
                  <option value="">내용</option>
               </select>
               <input type="text">
               <input type="button" value="검색">
            </p>
            <i>※ 템플릿 내용 클릭시 <b>전송화면으로 이동</b></i>
            <div class="template_table template_table_view">
               <table>
                  <colgroup>
                     <col width="">
                     <col width="">
                     <col width="">
                     <col width="">
                  </colgroup>
                  <thead>
                     <tr>
                        <th>템플릿 ID</th>
                        <th>템플릿명</th>
                        <th>사용 브랜드</th>
                        <th>내용</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>UBR.HTnZ130KUw-GG000F</td>
                        <td>프리 템플릿(자동생성)</td>
                        <td>팝시스넷 (BR.HTnZ130KUw)</td>
                        <td>
                        <a class="tpl_box">
                           <h4>알림</h4>
                           <span>
                           김** 고객님의 9월 사용금액<br> 168,200원이 신한은행에서 금일 출금<br>
                           예정입니다.<br> 출금 계좌의 잔액을 확인해주세요.<br>
                           출금계좌 : 신한 123-4567-88899<br><br>
                           예금주 : 김**<br>
                           출금예정일 : 2022년 9월 5일<br><br>
                           문의사항은 고객센터로 문의주세요.
                           </span>
                        </a>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="sub_bottom">
              <a href="template_list.php" class="btn2">목록보기</a>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>