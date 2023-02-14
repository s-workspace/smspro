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
               <li><a href="template_create.php">템플릿 등록</a></li>
               <li class="this"><a href="template_list.php">템플릿 목록</a></li>
            </ul>
         </div>
         <div class="template_list_view mt20">
            <div class="template_list_top">
               <i>
                  <select name="" id="">
                     <option value="">브랜드 선택</option>
                     <option value="">브랜드1</option>
                  </select>
                  <select name="" id="">
                     <option value="">상태(전체)</option>
                     <option value="">저장</option>
                     <option value="">반려</option>
                     <option value="">승인대기</option>
                     <option value="">승인완료</option>
                     <option value="">처리중</option>
                     <option value="">처리중(삭제)</option>
                  </select>
               </i>
               <i>
                  <select name="" id="">
                     <option value="">템플릿명</option>
                     <option value="">내용</option>
                  </select>
                  <input type="text">
                  <input type="button" value="검색">
               </i>
            </div>
            <div class="template_table_view">
               <table>
                  <colgroup>
                     <col width="200">
                     <col width="">
                  </colgroup>
                  <tbody>
                     <tr>
                        <th><b>01</b><br>기본(free) 생성</th>
                        <td>브랜드 개설 후 승인완료 시 자동으로 기본(free)이 생성됩니다. (브랜드별로 생성)</td>
                     </tr>
                     <tr>
                        <th><b>02</b><br>기본(free) 안내</th>
                        <td>
                           <div class="flex">
                              <i>
                                 <h1>기본(free) 정보</h1>
                                 <span>- 템플릿 ID : UBR.BEZzDFn589-GG000F</span>
                                 <span>- 템플릿명 : 프리 템플릿(자동생성)</span>
                                 <span>- 사용 브랜드 : 팝시스넷 (BR.BEZzDFn589)</span>
                              </i>
                              <i>
                                 <h1>기본(free) 제한 사항</h1>
                                 <span>- 최대 메시지 입력 글자수 90자</span>
                                 <span>- 이미지 첨부 불가</span>
                                 <span>- 버튼 액션 사용 불가</span>
                                 <span>- 광고 메시지 사용 불가 (정보성 메시지만 발송 가능)</span>
                              </i>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <th><b>03</b><br>기본(free) 사용 예시</th>
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
            <div class="msg_bottom">
               <div class="temp_bottom">
                  <i></i>
                  <input type="button" value="목록" onclick="location.href='template_list.php';">
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>