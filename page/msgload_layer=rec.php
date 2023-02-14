<!-- 최근 전송내역 레이어 -->
<div class="layer my_msg_layer" id="myMsg_rec">
   <div class="layer_con">
      <div class="tab_menu">
         <h1>전송내역 불러오기</h1>
         <div class="search_box">
            <input type="text">
            <input type="button" value="검색">
         </div>
      </div>
      <div class="recent_table_top">
         <ul>
           <li>
              <select class="msgload_rec">
                 <option value="1">SMS / LMS</option>
                 <option value="2">MMS</option>
              </select>
           </li>
           <li>
             <label for="year" style="display:none;">검색 년도</label>
             <select name="year" id="year" style="width: 80px;">
               <option value="2021" selected="">2021년</option>
               <option value="2020">2020년</option>
               <option value="2019">2019년</option>
             </select>
           </li>
           <li>
             <label for="month" style="display:none;">검색 월</label>
             <select name="month" id="month" style="width: 65px;">
               <option value="01">01월</option>
               <option value="02">02월</option>
               <option value="03">03월</option>
               <option value="04">04월</option>
               <option value="05">05월</option>
               <option value="06">06월</option>
               <option value="07">07월</option>
               <option value="08">08월</option>
               <option value="09">09월</option>
               <option value="10">10월</option>
               <option value="11">11월</option>
               <option value="12">12월</option>
             </select>
           </li>
           <li><input type="button" value="보기"></li>
           <p>※ 전송내용 클릭시&nbsp;<b>내용, 발신번호 전송폼에 셋팅</b></p>
         </ul>
         <p>전체 [<span>0</span> 건]</p>
      </div>
      <div class="manage_table">
         <table class="mt10">
            <colgroup>
               <col width="50">
               <col width="120">
               <col width="110">
               <col width="">
               <col width="110">
            </colgroup>
            <thead>
               <tr>
                  <th>번호</th>
                  <th>유형</th>
                  <th>전송시간</th>
                  <th>전송내용</th>
                  <th>발신번호</th>
               </tr>
            </thead>
            <tbody>
               <!-- <tr>
                  <td colspan="8" style="height:305px;">전송내역이 없습니다.</td>
               </tr> -->
               <tr>
                  <td>1</td>
                  <td><span class="t_sms">SMS(단문)</span></td>
                  <td>2021-2-29 <br><span class="t_gray">11:32:12</span></td>
                  <td class="t_left">(광고)짧아서아쉬운2월!따뜻하고희망찬일만가득하시고웃을일만가득한행복한한달되시길바래요</td>
                  <td>01012345678</td>
               </tr>
               <!-- <tr>
                  <td>4</td>
                  <td><span class="t_sms">SMS(단문)</span></td>
                  <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                  <td class="t_left">12312312312312123123123123123123123123123123231231231231231231231231231231231</td>
                  <td>01012345678</td>
               </tr>
               <tr>
                  <td>3</td>
                  <td><span class="t_lms">LMS(장문)</span></td>
                  <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                  <td class="t_left"></td>
                  <td>01012345678</td>
               </tr>
               <tr>
                  <td>2</td>
                  <td><span class="t_lms">LMS(장문)</span></td>
                  <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                  <td class="t_left"></td>
                  <td>01012345678</td>
               </tr>
               <tr>
                  <td>1</td>
                  <td><span class="t_lms">LMS(장문)</span></td>
                  <td>2021-12-31 <br><span class="t_gray">11:32:12</span></td>
                  <td class="t_left"></td>
                  <td>01012345678</td>
               </tr> -->
            </tbody>
         </table>
      </div>
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
   <div class="layer_bottom">
      <a href="" class="layer_cancel">닫기</a>
   </div>
</div>
<!-- 최근 전송내역 레이어 끝 -->