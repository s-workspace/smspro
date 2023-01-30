<!DOCTYPE html>
<html lang="en" style="min-width:900px; max-width:900px;">
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
<script>
   $(function(){
      // 메뉴 선택
      $('.bookmark_btn a').eq(0).click(function(e){
         e.preventDefault();
         var ml = $('.bookmark_menulist option:selected');
         $('.bookmark_listnumber').append(ml);
      });
      // 메뉴 선택 끝

      // 진열순서 설정
      $('.bookmark_box a').eq(0).click(function(e){
         e.preventDefault();
         var bl = $('.bookmark_listnumber option:selected');
         $('.bookmark_listnumber').prepend(bl);
      });
      $('.bookmark_box a').eq(1).click(function(e){
         e.preventDefault();
         var bl = $('.bookmark_listnumber option:selected');
         $('.bookmark_listnumber').append(bl);
      });
      // 진열순서 설정 끝

      // 즐겨찾기 제거
      $('.bookmark_btn a').eq(1).click(function(e){
         e.preventDefault();
         var ml = $('.bookmark_listnumber option:selected');
         $('.bookmark_menulist').append(ml);
      });
      // 즐겨찾기 제거 끝
   });
</script>
<body style="min-width:900px; max-width:900px;">
   <div class="popup_container">
      <div class="popup_wrap">
         <div class="popup_title">
            <h1>즐겨찾는 메뉴 설정</h1>
         </div>
         <div class="popup_content">
            <div class="bookmark_wrap">
               <div class="bookmark_box">
                  <h1>즐겨찾는 메뉴 선택</h1>
                  <div class="bookmark_content">
                     <select class="bookmark_menulist" multiple="multiple">
                        <option for="">메시지 전송</option>
                        <option for="">충전하기</option>
                        <option for="">공지사항</option>
                        <option for="">문의하기</option>
                        <option for="">주소록 관리</option>
                        <option for="">메시지 관리</option>
                        <option for="">전송내역 관리</option>
                        <option for="">전송내역 통계</option>
                        <option for="">예약내역 관리</option>
                        <option for="">템플릿 등록</option>
                        <option for="">템플릿 목록</option>
                        <option for="">회원기본 정보</option>
                        <option for="">발신번호 관리</option>
                        <option for="">브랜드 관리</option>
                        <option for="">보안설정</option>
                     </select>
                  </div>
               </div>
               <div class="bookmark_btn">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M11 19v-6H5v-2h6V5h2v6h6v2h-6v6Z"/></svg></a>
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M5 13v-2h14v2Z"/></svg></a>
               </div>
               <div class="bookmark_box">
                  <h1>진열순서 설정
                     <div class="flex_center">
                        <a href=""><img src="../images/common/up_btn.png" alt=""></a>
                        <a href=""><img src="../images/common/down_btn.png" alt=""></a>
                     </div>
                  </h1>
                  <div class="bookmark_content">
                     <select class="bookmark_listnumber" multiple="multiple">
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <div class="pop_btn">
           <input type="button" value="저장">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>
