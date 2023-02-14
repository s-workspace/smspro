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
<script>
   $(function(){
      $('#msg_type').change(function(){
         var $msg_type = $('#msg_type option:selected').val();
         if ($msg_type == "1") {
            $('.manage_table').hide();
            $('#sms_table').show();
         }
         else if ($msg_type == "2") {
            $('.manage_table').hide();
            $('#rcs_table').show();
         }
      });
   });
</script>
<body>
   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li class="this"><a href="">예약내역 관리</a></li>
            </ul>
         </div>
         <div class="info_wrap">
            <span>
               - 예약시간 30분 이내에는 예약을 취소하실 수 없습니다.<br>
               - <b>[ 상세보기 ]</b> 를 누르시면 자세한 예약내역을 확인하실 수 있으며, 예약시기가 지난 전송내역은 전송내역 관리에서 개별 확인이 가능합니다.<br>
               - RCS문자 전송내역을 보시려면 구분을 RCS문자로 선택해 주십시오.
            </span>
         </div>
         <div class="selbox_top mt20">
            <p>
               <a href="" class="bl4">선택건 예약취소</a>
            </p>
            <p>
               <select name="msg_type" id="msg_type">
                  <option value="1">일반문자</option>
                  <option value="2">RCS문자</option>
               </select>
               <select name="" id="">
                  <option value="">전체보기</option>
                  <option value="">SMS</option>
                  <option value="">LMS</option>
                  <option value="">MMS</option>
               </select>
               <select name="" id="">
                  <option value="">2022년</option>
                  <option value="">2021년</option>
                  <option value="">2020년</option>
               </select>
               <select name="" id="">
                  <option value="">1월</option>
                  <option value="">2월</option>
                  <option value="">3월</option>
                  <option value="">4월</option>
                  <option value="">5월</option>
                  <option value="">6월</option>
                  <option value="">7월</option>
                  <option value="">8월</option>
                  <option value="">9월</option>
                  <option value="">10월</option>
                  <option value="">11월</option>
                  <option value="">12월</option>
               </select>
               <select name="" id="">
                  <option value="">01일</option>
                  <option value="">02일</option>
                  <option value="">03일</option>
                  <option value="">04일</option>
                  <option value="">05일</option>
                  <option value="">06일</option>
                  <option value="">07일</option>
                  <option value="">08일</option>
                  <option value="">09일</option>
                  <option value="">10일</option>
                  <option value="">11일</option>
                  <option value="">12일</option>
                  <option value="">13일</option>
                  <option value="">14일</option>
                  <option value="">15일</option>
                  <option value="">16일</option>
                  <option value="">17일</option>
                  <option value="">18일</option>
                  <option value="">19일</option>
                  <option value="">20일</option>
                  <option value="">21일</option>
                  <option value="">22일</option>
                  <option value="">23일</option>
                  <option value="">24일</option>
                  <option value="">25일</option>
                  <option value="">26일</option>
                  <option value="">27일</option>
                  <option value="">28일</option>
                  <option value="">29일</option>
                  <option value="">30일</option>
                  <option value="">31일</option>
               </select>
               <input type="text">
               <input type="button" value="보기" class="btn2">
               <select name="" id="">
                  <option value="">10개씩</option>
                  <option value="">20개씩</option>
                  <option value="">30개씩</option>
                  <option value="">40개씩</option>
                  <option value="">50개씩</option>
                  <option value="">100개씩</option>
                  <option value="">150개씩</option>
                  <option value="">200개씩</option>
               </select>
            </p>
         </div>
         <div class="manage_table" id="sms_table">
            <table class="mt10">
               <colgroup>
                  <col width="50">
                  <col width="50">
                  <col width="80">
                  <col width="120">
                  <col width="150">
                  <col width="110">
                  <col width="110">
                  <col width="">
                  <col width="50">
                  <col width="50">
               </colgroup>
               <thead>
                  <tr>
                     <th><input type="checkbox" name="" value=""></th>
                     <th>번호</th>
                     <th>구분</th>
                     <th>유형</th>
                     <th>전송번호/회신번호</th>
                     <th>접수시간</th>
                     <th>전송시간</th>
                     <th>예약전송내용</th>
                     <th>수정</th>
                     <th>상세</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- <tr>
                     <td colspan="9" style="height:305px;">전송내역이 없습니다.</td>
                  </tr> -->
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>1</td>
                     <td>일반문자</td>
                     <td><span class="t_sms">SMS(단문)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left">(광고)짧아서아쉬운2월!따뜻하고희망찬일만가득하시고웃을일만가득한행복한한달되시길바래요</td>
                     <td><a href="msg_reserve_edit.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>2</td>
                     <td>일반문자</td>
                     <td><span class="t_lms">LMS(장문)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left">계절의 여왕 5월이 찾아 왔습니다. 5월의 푸르름처럼 당신께 늘 새롭고 좋은일만 가득하길 바랍니다. 행복한 5월 되시길 기원합니다.</td>
                     <td><a href="msg_reserve_edit=lms.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup=lms.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>1</td>
                     <td>일반문자</td>
                     <td><span class="t_mms">MMS(이미지)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left">계절의 여왕 5월이 찾아 왔습니다. 5월의 푸르름처럼 당신께 늘 새롭고 좋은일만 가득하길 바랍니다. 행복한 5월 되시길 기원합니다.</td>
                     <td><a href="msg_reserve_edit=mms.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup=mms.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
               </tbody>
            </table>
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
         <div class="manage_table" id="rcs_table">
            <table class="mt10">
               <colgroup>
                  <col width="50">
                  <col width="50">
                  <col width="80">
                  <col width="120">
                  <col width="150">
                  <col width="110">
                  <col width="110">
                  <col width="">
                  <col width="50">
                  <col width="50">
               </colgroup>
               <thead>
                  <tr>
                     <th><input type="checkbox" name="" value=""></th>
                     <th>번호</th>
                     <th>구분</th>
                     <th>유형</th>
                     <th>전송번호/회신번호</th>
                     <th>접수시간</th>
                     <th>전송시간</th>
                     <th>예약전송내용</th>
                     <th>수정</th>
                     <th>상세</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- <tr>
                     <td colspan="9" style="height:300px;">전송내역이 없습니다.</td>
                  </tr> -->
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>1</td>
                     <td>RCS문자</td>
                     <td><span class="t_sms">SMS(단문)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left">12312312312312123123123123123123123123123123231231231231231231231231231231231</td>
                     <td><a href="msg_reserve_edit=rcs.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup=rcs.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>1</td>
                     <td>RCS문자</td>
                     <td><span class="t_lms">LMS(장문)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left"></td>
                     <td><a href="msg_reserve_edit=rcs_lms.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup=rcs_lms.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="" value=""></td>
                     <td>1</td>
                     <td>RCS문자</td>
                     <td><span class="t_mms">MMS(이미지)</span></td>
                     <td>01012345678 외 <strong>0건</strong><br><span class="t_gray">/ 01012345678</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                     <td class="t_left"></td>
                     <td><a href="msg_reserve_edit=rcs_mms.php" onclick="window.open(this.href, '', 'left=560, top=300, width=660, height=400'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.812 7.312-3-3.02.959-.938q.396-.396.948-.396.552 0 .948.396l1.104 1.104q.375.396.375.969t-.396.948Zm-.916.917-8.854 8.854h-3v-3l8.854-8.854Z"/></svg></a></td>
                     <td><a href="msg_reserve_popup=rcs_mms.php" onclick="window.open(this.href, '', 'left=560, top=160, width=660, height=650'); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m15.938 17.188-5.021-5.021q-.625.437-1.365.698-.74.26-1.594.26-2.125 0-3.614-1.5-1.49-1.5-1.49-3.625t1.49-3.625q1.489-1.5 3.614-1.5t3.625 1.5q1.5 1.5 1.5 3.625 0 .854-.25 1.594-.25.739-.687 1.344l5 5.02Zm-7.98-5.813q1.417 0 2.407-.979.989-.979.989-2.396 0-1.417-.989-2.396-.99-.979-2.407-.979-1.416 0-2.396.979-.979.979-.979 2.396 0 1.417.979 2.396.98.979 2.396.979Z"></path></svg></a></td>
                  </tr>
               </tbody>
            </table>
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
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>