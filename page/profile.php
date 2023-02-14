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
      $('#dType_box').on('change', function(){
         var selected = $('#dType_box option:selected').val();
         if (selected == 2) {
            $('#dList').show();
            $('#dList_detail').show();
         }
         else {
            $('#dList').hide();
            $('#dList_detail').hide();
         }
         console.log(selected);
      });
      $('#dList select').on('change', function(){
         var selected = $('#dList option:selected').val();
         if (selected == 2) {
            $('#dList_detail01').hide();
            $('#dList_detail02').show();
         }
         else {
            $('#dList_detail01').show();
            $('#dList_detail02').hide();
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
               <li class="this"><a href="profile.php">회원기본 정보</a></li>
               <li><a href="callback_manage.php">발신번호 관리</a></li>
               <li><a href="brand.php">브랜드 관리</a></li>
               <li><a href="security.php">보안설정</a></li>
            </ul>
         </div>
         <div class="info_box on">
            <!-- <h1><img src="../images/common/info.png" alt="">발신번호가 등록되어 있지 않습니다. 원활한 메시지 전송을 위해 발신번호를 등록해 주세요.</h1> -->
            <h1><img src="../images/common/check.png" alt="">발신번호가 등록되었습니다.</h1>
            <a href="callback_manage.php">발신번호 관리</a>
         </div>
         <div class="info_box">
            <h1><img src="../images/common/info.png" alt="">브랜드가 등록되어 있지 않습니다. RCS 서비스 이용을 원하시면 브랜드를 등록해 주세요.</h1>
            <a href="brand.php">브랜드 관리</a>
         </div>
         <div class="info_box">
            <h1><img src="../images/common/info.png" alt="">담당자 본인인증이 등록되어 있지 않습니다. 발신번호 등록제 시행에 따라, 담당자 본인인증 절차가 필요합니다.</h1>
            <!-- <h1><img src="../images/common/check.png" alt="">담당자 본인인증이 완료 되었습니다.<b>(담당자 재직증명서를 접수해야 최종 완료 처리 됩니다.)</b><span>팩스: 062-350-0704 / 이메일: help@smsmoa.com 으로 접수 가능</span></h1> -->
            <a href="">담당자 본인인증</a>
         </div>
         <div class="proflie">
            <div class="title2">
               <h1><img src="../images/common/account_icon.png" alt="">회원정보</h1>
            </div>
            <div class="proflie_box">
               <ul>
                  <li><h1>아이디</h1><span>admin</span></li>
                  <li><h1>비밀번호</h1><a href="pw_popup.php" class="btn2" onclick="window.open(this.href, '', 'left=700, top=200, width=400, height=500'); return false;">비밀번호 변경</a></li>
                  <li><h1>보안 로그인</h1><span class="t_red" style="margin-right: 10px;">비활성화</span><a href="security.php" style="line-height: 30px;" class="bl3">설정</a></li>
                  <li><h1>담당자 이름</h1><input type="text"></li>
                  <li><h1>휴대폰</h1><input type="text"></li>
                  <li><h1>연락처</h1><input type="text"></li>
                  <li><h1>회사명</h1><input type="text"></li>
                  <li><h1>대표자</h1><input type="text"></li>
                  <li><h1>사업자등록번호</h1><input type="text"></li>
                  <li><h1>종사업자번호</h1><input type="text" placeholder="보유업체만 입력"></li>
                  <li><h1>업태</h1><input type="text"></li>
                  <li><h1>종목</h1><input type="text"></li>
                  <li style="flex: 100%;"><h1>주소</h1><input type="text" placeholder="우편번호" style="width: 230px; margin-right: 5px;" onclick="window.open(href='find_address.php', '', 'left=690, top=200, width=490, height=550'); return false;"><a href="" class="bl3" onclick="window.open(href='find_address.php', '', 'left=690, top=200, width=490, height=550'); return false;">주소찾기</a><input type="text" placeholder="상세주소" class="mt10"></li>
                  <li style="flex: 464px;"><h1>증빙 서류</h1>
                     <select class="" name="" id="dType_box">
                        <option value="1">전자세금계산서</option>
                        <option value="2">현금영수증</option>
                        <option value="3">영수증</option>
                      </select>
                  </li>
                  <li style="flex: 464px;"><h1>이메일</h1><input type="text" placeholder="증빙서류 수신메일"></li>
                  <li style="flex: 464px;" id="dList">
                     <select class="" name="">
                        <option value="1">지출증빙용</option>
                        <option value="2">소득공제용</option>
                      </select>
                  </li>
                  <li style="flex: 464px;" id="dList_detail">
                     <input type="text" placeholder="사업자 번호" id="dList_detail01">
                     <input type="text" placeholder="휴대폰 번호" id="dList_detail02" style="display: none;">
                  </li>
                  <li style="flex: 100%;">
                     <div class="check_con">
                        <input type="checkbox" id="chk_A" checked>
                        <label for="chk_A" class="on">문자메시지를 통한 서비스 및 이벤트 정보수신에 동의함</label>
                     </div>
                     <div class="check_con mt10">
                        <input type="checkbox" id="chk_B" checked>
                        <label for="chk_B" class="on">이메일을 통한 서비스 및 이벤트 정보수신에 동의함</label>
                     </div>
                     <p class="mt10 t_gray" style="font-size: 14px;">※ 단, 사이트 이용에 관한 중요정보(약관변경, 사이트정책변경 등)는 수신동의 여부에 상관없이 통지 할 수 있습니다.</p>
                     <div class="info_wrap">
                        <span>
                           - 관할 경찰청 및 사이버수사대 연계로 발송자의 수사자료(실명회원정보, IP접속내역, 입금정보) 제출<br>
                           - 스팸발송시 <b>발견즉시 ID 삭제처리되며, 이때 잔여량도 함께 삭제/환불조치 없음</b>
                        </span>
                     </div>
                  </li>
                  <li style="display: flex; flex: 100%; justify-content: flex-end;"><a href="" class="btn2">정보수정</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>