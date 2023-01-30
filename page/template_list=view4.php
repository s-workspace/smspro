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
         <div class='msg_wrap'>
            <div class="write_box">
               <div class="msg_content msg_write">
                  <div class="msg_wbox mt40">
                     <div class="rcs_box">
                        <div class="template_info">
                           <i>
                              <p>- 템플릿 ID</p>
                              <span>UBR.BEZzDFn589-RN21G00nWSj21w72vtd82Z11b</span>
                           </i>
                           <i>
                              <p>- 테마 / 속성</p>
                              <span>타이틀 선택형 / 스타일(cell)</span>
                           </i>
                           <i>
                              <p>- 유형</p>
                              <span>입금</span>
                           </i>
                           <i>
                              <p>- 템플릿 명</p>
                              <span>입금확인 안내</span>
                           </i>
                           <i style="align-items: flex-start;">
                              <p>- 내용</p>
                              <ul>
                                 <li><textarea readonly>입금 확인 안내</textarea></li>
                                 <li>
                                    <textarea readonly>입금내역</textarea>
                                    <textarea readonly>550,000 원</textarea>
                                 </li>
                                 <li>
                                    <textarea readonly>입금자명</textarea>
                                    <textarea readonly>{{이름}}</textarea>
                                 </li>
                                 <li><textarea readonly>정상적으로 입금이 완료되었습니다.</textarea></li>
                              </ul>
                           </i>
                           <i style="align-items: flex-start;">
                              <p>- 버튼</p>
                              <ul>
                                 <span>1 개</span>
                                 <span>- 버튼 01</span>
                                 <li><span>전화걸기</span></li>
                                 <li><textarea readonly>고객센터 연결</textarea></li>
                                 <li><textarea readonly>0627167197</textarea></li>
                              </ul>
                           </i>
                           <i>
                              <p>- 등록일</p>
                              <span>2022-12-27 12:50 / 홍길동</span>
                           </i>
                           <i>
                              <p>- 승인요청일</p>
                              <span>2022-12-27 12:50 / 홍길동</span>
                           </i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="msg_box">
               <div class="msg_con">
                  <div class="msg_view_box">
                     <div class="msg_top">
                        <h1><</h1>
                        <p><img src="../images/msg/user_icon.png" alt=""></p>
                     </div>
                     <div class="msg_view">
                        <div class="image_preview"><img id="img"/></div>
                        <div class="msg_view_text">
                           <h1 id="rcs_title" class="n01"></h1>
                           <div class="cell_view line">
                              <p class="t_left ft_16 bold">입금 확인 안내</p>
                              <p class="t_right none">내용 입력</p>
                           </div>
                           <div class="cell_view">
                              <p>입금내역</p>
                              <p class="t_right">550,000 원</p>
                           </div>
                           <div class="cell_view line">
                              <p>입금자명</p>
                              <p class="t_right">{{이름}}</p>
                           </div>
                           <div class="cell_view">
                              <p>정상적으로 입금이 완료되었습니다.</p>
                              <p class="t_right none">내용 입력</p>
                           </div>
                           <div class="btn_view">
                              <button class="btn-01" style="display: inline-block;">고객센터 연결</button>
                              <button class="btn-02">버튼명</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h1>* 기종에 따라 다르게 보일 수 있습니다.</h1>
            </div>
         </div>
         <div class="msg_bottom">
            <div class="temp_bottom">
               <input type="button" value="이전" onclick="location.href='template_list.php';">
               <i>
                  <input type="button" value="승인요청 취소">
               </i>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>