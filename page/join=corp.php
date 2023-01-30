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
<script src="../javascript/script.js"></script>
<body>
   <?php include 'terms_layer.php'; ?>
   <div class="join_wrap">
      <dl>
         <dd>로그인 정보</dd>
         <dd class="this">회원 정보</dd>
         <dd>가입완료</dd>
      </dl>
      <div class="join_box">
         <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m12 15-5-5 5-5 1.062 1.062L9.125 10l3.937 3.938Z"/></svg>홈으로</a>
         <h1>회원가입</h1>
         <p>회원가입을 위해 필요한 정보를 입력해 주세요.</p>
         <div class="join_member">
            <i>
               <h1>아이디</h1>
               <input type="text" name="id" id="id" placeholder="영문 또는 숫자 6~15, 예) admin123">
            </i>
            <i>
               <h1>비밀번호</h1>
               <input type="password" name="pw" id="pw" placeholder="영문 + 숫자 6~20자(생일, 전화번호, 일련번호 사용불가)">
            </i>
            <i>
               <h1>비밀번호 확인</h1>
               <input type="password" name="pwChk" id="pwChk" placeholder="비밀번호를 다시 한번 입력해 주세요.">
            </i>
            <div class="member_type01">
               <i>
                  <h1>회사명</h1>
                  <input type="text" name="" placeholder="회사명을 입력해 주세요.">
               </i>
               <i>
                  <h1>사업자등록번호</h1>
                  <input type="text" name="biznum" id="biznum" placeholder="- 구분없이 입력해 주세요.">
               </i>
               <div class="flex10">
                  <i>
                     <h1>대표자명</h1>
                     <input type="text" name="" placeholder="대표자명 입력">
                  </i>
                  <i>
                     <h1>담당자명</h1>
                     <input type="text" name="" placeholder="담당자명 입력">
                  </i>
               </div>
               <div class="flex10">
                  <i>
                     <h1>업태</h1>
                     <input type="text" name="" placeholder="업태 입력">
                  </i>
                  <i>
                     <h1>종목</h1>
                     <input type="text" name="" placeholder="종목 입력">
                  </i>
               </div>
               <i>
                  <h1>사업장주소</h1>
                  <input type="text" name="" placeholder="우편번호 입력" class="postal" onclick="window.open(href='find_address.php', '', 'left=690, top=200, width=490, height=550'); return false;">
               </i>
               <i>
                  <input type="text" name="" placeholder="" class="postal_text none">
               </i>
               <i>
                  <input type="text" name="" placeholder="상세주소를 입력해 주세요.">
               </i>
               <i>
                  <h1>휴대폰 번호</h1>
                  <input type="text" name="" value="010-1234-5678" readonly class="block">
               </i>
               <i>
                  <h1>전화번호</h1>
                  <input type="text" name="" placeholder="전화번호를 입력해 주세요. (선택사항)">
               </i>
               <i>
                  <h1>팩스번호</h1>
                  <input type="text" name="" placeholder="팩스번호를 입력해 주세요. (선택사항)">
               </i>
               <i>
                  <h1>이메일</h1>
                  <input type="text" name="" placeholder="현재 사용중인 이메일을 입력해 주세요.">
               </i>
               <i>
                  <h1>증빙서류</h1>
                  <select name="billDoc" id="billDoc">
                     <option value="0">선택</option>
                     <option value="1">전자세금계산서</option>
                     <option value="2">현금영수증</option>
                     <option value="3">영수증</option>
                  </select>
               </i>
               <i id="receipt_box" class="none">
                  <h1></h1>
                  <select name="receipt" id="receipt">
                     <option value="1">지출증빙용</option>
                     <option value="2">소득공제용</option>
                  </select>
               </i>
               <i id="rec01" class="none">
                  <h1>사업자등록번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
               <i id="rec02" class="none">
                  <h1>휴대폰 번호</h1>
                  <input type="text" name="" placeholder="- 구분없이 입력해 주세요.">
               </i>
            </div>
            <div class="cont_box">
               <h2>약관동의</h2>
               <div class="counsel_label all_agree">
                  <input type="checkbox" id="sign_all" name="agree" value="">
                  <label for="sign_all"><span>전체동의</span></label>
               </div>
               <div class="counsel_label">
                  <input type="checkbox" id="sign_agree01" class="sign_agree" name="agree" value="">
                  <label for="sign_agree01"><span>불법스팸 전송금지 동의</span></label>
                  <b class="t_red">(필수)</b>
                  <a href="#" id="termsType03_btn">자세히보기</a>
               </div>
               <div class="counsel_label">
                  <input type="checkbox" id="sign_agree02" class="sign_agree" name="agree" value="">
                  <label for="sign_agree02"><span>서비스 안내 및 이벤트 정보 수신에 동의</span></label>
                  <b class="t_gray">(선택)</b>
               </div>
            </div>
         </div>
         <div class="join_btn">
            <a href="join=success.php">회원가입</a>
            <a href="../index.php">취소</a>
         </div>
        </div>
      <div class="join_copy">
         Copyright ⓒ SMSPRO. All rights Reserved.
      </div>
   </div>
</body>
</html>