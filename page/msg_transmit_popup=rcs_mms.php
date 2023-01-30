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
         <h1>전송내역 상세보기(RCS문자)</h1>
      </div>
      <div class="popup_content">
         <div class="detail_top">
            <div class="detail_con">
               <div class="detail_list">
                  <ul>
                     <li><span><strong>회신번호</strong></span><span class="t_red"><strong>01012345678</strong></span></li>
                     <li><span><strong>전송일시</strong></span>2021-06-09 11:22:00</li>
                     <li><span><strong>전송결과</strong></span><strong class="t_blue">RCS(MMS) 1건</strong> (성공 1건, 실패 0건, 대기 0건)</li>
                     <li><span><strong>실패보상</strong></span><strong class="t_blue">150 P</strong></li>
                  </ul>
               </div>
               <div class="detail_notice">
                  <ul>
                     <li><span class="state" id="state_01">성공</span>받는번호에 정상적으로 메시지가 전달완료 됨</li>
                     <li><span class="state" id="state_02">실패</span>문자를 받는번호에 보냈으나, 전달되지 못함 (전원꺼짐, 용량초과, 이통사 오류)</li>
                     <li><span class="state" id="state_03">대기</span>결과값이 나타나지 않은 전송건들은 전송 시도중인 상태 (최대 24시간 시도)</li>
                  </ul>
               </div>
               <div class="detail_search mt10">
                  <p>
                     <select name="" id="">
                        <option value="">전체보기</option>
                        <option value="">성공 전송보기</option>
                        <option value="">실패 전송보기</option>
                     </select>
                     <input type="text" style="width:225px;">
                     <input type="button" value="검색">
                  </p>
               </div>
            </div>
            <div class="detail_phone detail_mms detail_rcs">
               <div class="d_byte">
                  <b>124</b><span>/2000Byte</span>
               </div>
               <div class="img_load">
                  <img src="../images/msg/test_img.jpg" alt="">
                  <img src="../images/msg/test_img.jpg" alt="">
                  <img src="../images/msg/test_img.jpg" alt="">
               </div>
               <div class="detail_text">
                  <textarea name="msg" readonly="">계절의 여왕 5월이 찾아 왔습니다.
5월의 푸르름처럼 당신께 늘 새롭고 좋은일만 가득하길 바랍니다.
행복한 5월 되시길 기원합니다.</textarea>
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
               <a href=""><img src="../images/popup/btn_address_save.gif" alt=""></a>
               <a href=""><img src="../images/popup/btn_excel_save.gif" alt=""></a>
               <a href=""><img src="../images/popup/btn_sendform_send.gif" alt=""></a>
               <a href=""><img src="../images/popup/btn_failed_send.gif" alt=""></a>
            </p>
         </div>
         <div class="detail_table">
            <table cellpadding="0" cellspacing="0" border="0">
               <colgroup>
                  <col width="50">
                  <col width="100">
                  <col width="140">
                  <col width="">
                  <col width="">
                  <col width="60">
               </colgroup>
               <thead>
                  <tr>
                     <th>번호</th>
                     <th>받는번호</th>
                     <th>이름</th>
                     <th>전송시간</th>
                     <th>결과받은 시간</th>
                     <th>결과</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                     <td>2021-06-09 11:37:15</td>
                     <td><span class="state" id="state_01">성공</span></td>
                  </tr>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                     <td>2021-06-09 11:37:15</td>
                     <td><span class="state" id="state_02">실패</span></td>
                  </tr>
                  <tr>
                     <td>1</td>
                     <td>01012345678</td>
                     <td>홍길동</td>
                     <td>2021-06-09 11:37:15</td>
                     <td>2021-06-09 11:37:15</td>
                     <td><span class="state" id="state_03">대기</span></td>
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