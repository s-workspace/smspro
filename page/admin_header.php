<!-- 레이어 시작 -->
<div class="layer_cover"></div>

<!-- 체험안내 레이어 -->
<div class="exinfo_layer">
   <i>
      <svg viewBox="0 0 448 512"><path fill="#f8f9fa" d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-176 86c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
      <span>현재 체험 페이지를 이용중 입니다.<br>원활한 이용을 위해 회원가입을 해주세요.</span>
      <a href="join.php">회원가입</a>
   </i>
</div>
<!-- 레이어 끝 -->

<div class="admin_header">
   <div class="menu">
      <a href="msg.php">메시지 전송</a>
      <a href="payment.php">충전하기</a>
      <a href="notice.php">공지사항</a>
      <a href="inquiry.php">문의하기</a>
   </div>
   <i>
      <div class="tool_wrap">
         <span id="bookmark_btn"><h1><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m5.062 18 1.313-5.542L2 8.729l5.75-.5L10 3l2.25 5.25 5.75.479-4.375 3.729L14.938 18 10 15.062Z"/></svg>즐겨찾는 메뉴</h1>
            <div class="bookmark_menu">
               <h1>즐겨찾는 메뉴<a href="bookmark_popup.php" onclick="window.open(this.href, '', 'left=500, top=200, width=900, height=600'); return false;">설정</a></h1>
               <dl>
                  <dd><a href="msg.php">메시지 전송</a></dd>
                  <dd><a href="address.php">주소록 관리</a></dd>
                  <dd><a href="message.php">메시지 관리</a></dd>
                  <dd><a href="msg_transmit.php">전송내역 관리</a></dd>
                  <dd><a href="msg_reserve.php">예약내역 관리</a></dd>
               </dl>
            </div>
         </span>
         <span href="" id="theme_btn"><h1><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M10 18q-1.646 0-3.104-.625-1.458-.625-2.552-1.719t-1.719-2.552Q2 11.646 2 10q0-1.667.625-3.115.625-1.447 1.719-2.541Q5.438 3.25 6.896 2.625T10 2q1.667 0 3.115.625 1.447.625 2.541 1.719 1.094 1.094 1.719 2.541Q18 8.333 18 10q0 1.646-.625 3.104-.625 1.458-1.719 2.552t-2.541 1.719Q11.667 18 10 18Zm.75-1.542q2.438-.291 4.094-2.114Q16.5 12.521 16.5 10q0-2.521-1.656-4.344-1.656-1.823-4.094-2.114Z"/></svg>테마설정</h1>
            <div class="theme_menu">
               <h1>테마설정</h1>
               <dl>
                  <dd id="light" class="this"></dd>
                  <dd id="darkblue"></dd>
                  <dd id="blue"></dd>
                  <dd id="red"></dd>
                  <dd id="purple"></dd>
                  <dd id="dark"></dd>
               </dl>
            </div>
         </span>
      </div>
      <div class="top_btn">
         <ul>
            <li><a href="profile.php">마이페이지</a></li>
            <li><a href="../index.php">로그아웃</a></li>
         </ul>
      </div>
   </i>
</div>