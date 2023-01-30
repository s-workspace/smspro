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
               <li class="this"><a href="">메시지 관리</a></li>
            </ul>
         </div>
         <div class="tab_menu">
            <ul>
               <li><a href="message.php">단문(SMS) 메시지</a></li>
               <li class="this"><a href="message=lms.php">장문(LMS) 메시지</a></li>
               <li><a href="message=mms.php">이미지(MMS) 메시지</a></li>
            </ul>
            <div class="search_box">
               <input type="text">
               <input type="button" value="검색">
            </div>
         </div>
         <div class="message_wrap">
            <div class="message_top">
               <h1>※ 메시지 클릭시 <b>전송화면으로 이동</b></h1>
               <p>
                  <a href="">전체선택</a>
                  <a href="">선택해제</a>
                  <a href="">선택삭제</a>
                  <input type="button" value="메시지함 전체 비우기" class="bl4">
                  <a href="new_msg_popup=lms.php" id="new_message" class="bl3" onclick="window.open(this.href, '', 'left=640, top=250, width=440, height=460'); return false;">신규 메시지 등록</a>
               </p>
            </div>
            <div class="list_none">등록된 메시지가 없습니다.</div>
            <!-- <div class="msg_list msg_list_over">
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>생일축하</h1>
                  </div>
                  <div class="msg_list_txt msg_list_lms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>장문</h1>
                        <span><b class="chk_byte">500</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">♬~생일축하합니다~ 생일축하합니다~♪사랑하는 ○○○ 생일축하합니다~♬ 박수~짝!짝!짝!

생일축하상 받으세요~^^

.*""*.  ζζζ
┣━┫┓~~~ ┏
┗━┛┗━━┛
따뜻한밥+미역국

♪ ＊~iiii~＊♬
∴┍★☆┑∴
∵┍*HAPPY-*┑
[♡BIRTHDAY♡]
┖☆:*~**~*:☆┚

생일상차리느라 애 많이 썼습니다. ㅋㅋ
지금껏 받아본 생일상 중에서 제일 예쁘죠? ㅎㅎ
미역국이랑 예쁜 케익이랑 맛있게 드시고, 
생일날 최고로 즐겁게, 행복하게, 그리고 가장 많이 웃는 날 되시기 바랍니다.
제가 많이 사랑하는거 아시죠? ^^
소중한 당신이 태어난 참 기쁜날!!
진심으로 축하드립니다.</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <img src="../images/common/r_arrow.png" alt="">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>