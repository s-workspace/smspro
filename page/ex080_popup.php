<!DOCTYPE html>
<html lang="en" style="min-width:490px; max-width:490px;">
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
      $(".ex080_tab > ul li").on("click",function(){
         $(this).addClass("this");
         $(this).siblings().removeClass("this");
         $(".ex080_con").hide();
      });
      $(".ex080_tab > ul li").eq(0).on("click",function(){
         $("#080con01").show();
      });
      $(".ex080_tab > ul li").eq(1).on("click",function(){
         $("#080con02").show();
      });
      $(".ex080_tab > ul li").eq(2).on("click",function(){
         $("#080con03").show();
      });
   });
</script>
<body style="min-width:490px; max-width:490px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>전용 080 서비스 신청</h1>
      </div>
      <div class="popup_content">
         <div class="ex080_wrap">
            <h1><p>></p><b>080 서비스 계약/신청서</b></h1>
            <i>
               <a href="">080 가입 신청서<img src="../images/common/download_icon.svg" alt=""></a>
               <a href="">신청서 작성예시<img src="../images/common/download_icon.svg" alt=""></a>
            </i>
            <strong>- 첨부서류 안내</strong>
            <div class="ex080_tab">
               <ul>
                  <li class="this">법인명의 신청서</li>
                  <li>개인명의 신청서</li>
                  <li>개인사업자명의 신청서</li>
               </ul>
               <div class="ex080_con" id="080con01">
                  <ul>
                     <li>- 사업자등록증 사본</li>
                     <li>- 법인 인감증명서</li>
                     <li>- 대표자 신분증 사본 또는 위임장 및 대리인 신분증 사본</li>
                     <li>- 자동이체 통장 사본</li>
                  </ul>
               </div>
               <div class="ex080_con" id="080con02" style="display: none;">
                  <ul>
                     <li>- 신분증 사본</li>
                     <li>- 자동이체 통장 사본</li>
                  </ul>
               </div>
               <div class="ex080_con" id="080con03" style="display: none;">
                  <ul>
                     <li>- 사업자등록증 사본</li>
                     <li>- 대표자 신분증 사본</li>
                     <li>- 자동이체 통장 사본</li>
                  </ul>
               </div>
            </div>
            <h1><p>></p><b>신청접수 :</b>FAX 062)350-0704</h1>
            <p>신청서를 작성하여 팩스로 접수하시면, 1일 이내 사용 가능합니다.</p>
         </div>
         <div class="pop_btn">
           <input type="button" value="취소" onclick="window.close();">
         </div>
      </div>
   </div>
</body>
</html>