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
               <li class="this"><a href="message.php">단문(SMS) 메시지</a></li>
               <li><a href="message=lms.php">장문(LMS) 메시지</a></li>
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
                  <a href="new_msg_popup=sms.php" id="new_message" class="bl3" onclick="window.open(this.href, '', 'left=640, top=250, width=440, height=460'); return false;">신규 메시지 등록</a>
               </p>
            </div>
            <div class="msg_list">
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>좋은 하루</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">80</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">좋다좋다!딱좋다!오늘하루넘치지도모자라지도않는정말딱좋은그런하루되시길바랍니다^^</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>즐거움</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">75</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">즐겁게 살려면
일로 즐거움을 삼고 즐거움을 또한 가장 큰 일로 삼는 것이다 ^_^</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>안부인사</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">80</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">한통의문자로인해당신의지친하루가잠시라도행복하다면전정말행복하겠습니다웃어줄거죠</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>꽃샘추위</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">79</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">꽃샘추위로쌀쌀하지만꽃처럼환한미소잃지않는즐거운화요일보내길바랍니다^^좋은하루!</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>생일축하</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">78</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">오늘하루는당신이이세상의주인공입니다.세상의 모든행복기쁨사랑행운모두가지세요~♡</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>안부인사</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">80</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">한통의문자로인해당신의지친하루가잠시라도행복하다면전정말행복하겠습니다웃어줄거죠</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>행복하세요</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">79</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">초록의싱싱함과
함께 활기찬 8월입니다.8월의행복을선물합니다*^^*
행복하세요~~*^^*</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
               <div class="msg_list_con">
                  <div class="msg_list_tit">
                     <input type="checkbox">
                     <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3.5 16q-.604 0-1.052-.448Q2 15.104 2 14.5v-9q0-.604.448-1.052Q2.896 4 3.5 4h13q.625 0 1.062.448Q18 4.896 18 5.5v9q0 .604-.438 1.052Q17.125 16 16.5 16Zm6.5-5 6.5-3.729V5.5L10 9.229 3.5 5.5v1.771Z"/></svg>
                     <h1>사랑고백</h1>
                  </div>
                  <div class="msg_list_txt msg_list_sms">
                     <a href="">
                     <div class="msg_list_info">
                        <h1>단문</h1>
                        <span><b class="chk_byte">80</b>Byte</span>
                     </div>
                     <textarea class="msg_list_text" readonly="">쳐다만봐도기분좋은꽃처럼때론따스한햇살처럼생각만해도나를행복하게하는당신~사랑해~</textarea>
                     </a>
                  </div>
                  <div class="message_bottom">
                     <span class="save_date">
                        <b>></b>2021-04-02
                     </span>
                     <span class="message_bottom_btn">
                        <a href="" class="edit_msg"><img src="../images/common/icon_modify.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>