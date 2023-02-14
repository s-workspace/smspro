<!DOCTYPE html>
<html lang="en" style="min-width:660px; max-width:660px;">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/common.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<body style="min-width:660px; max-width:660px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>예약내역 상세보기(RCS문자)</h1>
      </div>
      <div class="popup_content">
         <div class="detail_top">
            <div class="detail_con">
               <div class="detail_list">
                  <ul>
                     <li><span><strong>회신번호</strong></span><span class="t_red"><strong>01012345678</strong></span></li>
                     <li><span><strong>전송유형</strong></span><strong class="t_blue">RCS(SMS) 1건</strong></li>
                     <li><span><strong>예약일시</strong></span>2021-06-09 11:22:00</li>
                     <li><span><strong>예약취소 / 내용수정 가능 여부</strong></span><strong class="t_blue">가능</strong></li>
                  </ul>
               </div>
               <div class="reserve_notice">
                  <ul>
                     <li>- <strong>예약시간 30분 전</strong> 예약내용/회신번호/예약시간을 수정하실 수 있습니다.</li>
                     <li>- <span class="t_blue">예약된 수신번호 수정은 불가하오니, 예약 취소 후 재예약</span>하시기 바랍니다.</li>
                  </ul>
               </div>
            </div>
            <div class="detail_phone detail_rcs">
               <div class="d_byte">
                  <b>86</b><span>/90Byte</span>
               </div>
               <div class="detail_text">
                  <textarea name="msg" readonly="">(광고)짧아서아쉬운2월!따뜻하고희망찬일만가득하시고웃을일만가득한행복한한달되시길바래요</textarea>
                  <div class="btn_list">
                     <button>자세히 보기</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="detail_table_top">
            <p>
               <span>전체 [<b class="t_red"><strong>1</strong></b>건]</span>
            </p>
            <p>
               <a href=""><img src="../images/popup/btn_reserve_cancle.gif" alt=""></a>
               <a href="msg_reserve_edit=rcs.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><img src="../images/popup/btn_reserve_modify.gif" alt=""></a>
            </p>
         </div>
         <div class="detail_table">
            <table cellpadding="0" cellspacing="0" border="0">
            <colgroup>
                  <col width="60">
                  <col width="160">
                  <col width="120">
                  <col width="">
               </colgroup>
               <thead>
                  <tr>
                     <th>번호</th>
                     <th>받는번호</th>
                     <th>이름</th>
                     <th>전송시간</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                  </tr>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                  </tr>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="page">
            <ul>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M9.312 14.604 4.688 10l4.624-4.604.709.708L6.125 10l3.896 3.896Zm5.271 0L9.979 10l4.604-4.604.729.708L11.396 10l3.916 3.896Z"></path></svg></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M11.979 14.604 7.375 10l4.604-4.604.709.708L8.812 10l3.876 3.896Z"></path></svg></a></li>
               <li class="this"><a href=""><span>1</span></a></li>
               <li><a href=""><span>2</span></a></li>
               <li><a href=""><span>3</span></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m8.021 14.604-.709-.708L11.188 10 7.312 6.104l.709-.708L12.625 10Z"></path></svg></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m5.417 14.604-.729-.708L8.604 10 4.688 6.104l.729-.708L10.021 10Zm5.271 0-.709-.708L13.875 10 9.979 6.104l.709-.708L15.312 10Z"></path></svg></a></li>
            </ul>
         </div>
      </div>
   </div>
</body>
</html>