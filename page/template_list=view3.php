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
                              <span>UBR.BEZzDFn589-qR52RLoyA68j91RSzLP7IeDny</span>
                           </i>
                           <i>
                              <p>- 테마 / 속성</p>
                              <span>타이틀 선택형 / 서술형(description)</span>
                           </i>
                           <i>
                              <p>- 유형</p>
                              <span>회원가입</span>
                           </i>
                           <i>
                              <p>- 템플릿 명</p>
                              <span>회원가입 안내</span>
                           </i>
                           <i style="align-items: flex-start;">
                              <p>- 내용</p>
                              <span>안녕하세요. {{이름}}님.<br>회원가입이 완료되었습니다.</span>
                           </i>
                           <i>
                              <p>- 등록일</p>
                              <span>2022-12-27 12:50 / 홍길동</span>
                           </i>
                           <i>
                              <p>- 승인요청일</p>
                              <span>2022-12-27 12:50 / 홍길동</span>
                           </i>
                           <i>
                              <p>- 승인완료일</p>
                              <span>2022-12-27 14:30</span>
                           </i>
                           <i>
                              <p>- 사용여부</p>
                              <span>사용</span>
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
                           <h1 id="rcs_title" class="n09"></h1>
                           <span>안녕하세요. {{이름}}님.<br>회원가입이 완료되었습니다.</span>
                           <div class="btn_view">
                              <button class="btn-01">버튼명</button>
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
                  <input type="button" value="삭제">
                  <input type="button" value="수정">
               </i>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>