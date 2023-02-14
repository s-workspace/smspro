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
   <!-- 브랜드 연동 레이어 -->
   <div class="brand_layer layer">
      <h1>브랜드 연동</h1>
      <ul class="brand_box">
         <div class="brand_box_top">
            <h1>
               RCS 브랜드를 문자프로와 연동합니다. 브랜드 연동을 위해 <b>사업자인증이 필요</b>합니다.
            </h1>
            <ul class="input_name_box">
               <li>
                  <input type="text" id="brand_id" name="brand_id" placeholder="브랜드 ID를 입력해 주세요.">
               </li>
               <li>
                  <input type="text" id="brand_key" name="brand_key" placeholder="브랜드 Key를 입력해 주세요.">
               </li>
            </ul>
         </div>
         <i>
            <p>
               사업자 인증<br><br>
               <b>사업자 인증을 위해 제출서류를 팩스나 이메일로 보내주세요.</b><br>
               <b class="mt10 t_blue">팩스번호 062)350-0704 &nbsp;&nbsp;/&nbsp;&nbsp; 이메일 help@smspro.co.kr</b>
            </p>
         </i>
         <i>
            <p>
               사업자와 증빙서류의 사업자가 상이한 경우<br><br>
               <b>1. RCS 발신번호 위탁서</b><br>
               <b>2. 발신번호 별 통신서비스 가입증명원</b><br>
               <b>3. 위임인 서류</b><br>
            </p>
         </i>
         <i style="border:none; padding:0;">
            <p>* 위임인 서류<br>
               <b class="mt10">- 법인의 경우: 법인인감증명서, 사업자등록증(명)</b><br>
               <b>- 개인의 경우: 개인인감증명서, 신분증 사본(*개인정보 마스킹 처리 필수)</b>
            </p>
         </i>
         <i>
            <p>
               [발급서류 유효기간]<br>
               <b class="mt10">- 최근 1개월 이내 발급 서류 : 통신서비스 가입증명원</b><br>
               <b>- 최근 6개월 이내 발급 서류 : 법인인감증명서, 개인인감증명서, 사업자등록증(명)</b><br>
               <b>* 신분증 마스킹 처리: 이름, 생년월일, 성별, 증명사진, 발급기관(기관명, 기관 날인) 정보를 제외한 개인정보는 마스킹 처리하신 후 첨부해 주세요.</b><br>
            </p>
         </i>
      </ul>
      <div class="layer_bottom ct">
         <a href="">신청</a>
         <a href="" class="bl3 layer_cancel">취소</a>
      </div>
   </div>
   <!-- 브랜드 연동 레이어 끝 -->

   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li><a href="profile.php">회원기본 정보</a></li>
               <li><a href="callback_manage.php">발신번호 관리</a></li>
               <li class="this"><a href="brand.php">브랜드 관리</a></li>
               <li><a href="security.php">보안설정</a></li>
            </ul>
         </div>
         <div class="brand">
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">RCS 서비스 안내</h1>
            </div>
            <h1>신뢰성 있는 메시지 전송을 위해 기업 브랜딩을 제공하며 <br>버튼, 슬라이드 이미지, 동영상, 지도 삽입 등 다양한 기능을 지원합니다.</h1>
            <a href="https://www.rcsbizcenter.com/intro/service" target="_blank">자세히 보기</a>
            <h2>1. 브랜드 생성시 필요사항</h2>
            <h1>- 브랜드명</h1>
            <h1>- 프로필 이미지</h1>
            <h1>- 발신번호</h1>
            <h1>- 카테고리 설정</h1>
            <h1>- 통신서비스 가입증명원</h1>
            <h2>2. RCS Biz Center 가입 후 브랜드 생성</h2>
            <a href="guide07.php" target="_blank">가이드 보기</a>
            <h2>3. 브랜드 생성 후 대행사 지정</h2>
            <h1>브랜드 승인이 완료되었다면 RCS Biz Center 로그인 후 브랜드 관리 메뉴에서 대행사를 지정해 주세요.</h1>
            <h2>4. API Client IP 등록</h2>
            <h1>대행사 지정 후 내 정보관리 메뉴에서 API Client IP 등록란에 문자프로 IP 주소 211.51.213.22를 등록해 해주세요.</h1>
            <h2>5. 생성한 브랜드를 연동</h2>
            <a href="" class="brand_add btn2">브랜드 연동신청</a>
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">연동된 브랜드 목록</h1>
            </div>
            <table>
               <colgroup>
                  <col width="300">
                  <col width="300">
                  <col width="300">
                  <col width="80">
               </colgroup>
               <thead>
                  <tr>
                     <th>브랜드명</th>
                     <th>브랜드 아이디</th>
                     <th>승인일</th>
                     <th>관리</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td colspan="4" style="height: 200px;">연동된 브랜드가 없습니다.</td>
                  </tr>
                  <!-- <tr>
                     <td>팝시스넷</td>
                     <td>BR.HTnZ130KUw</td>
                     <td>2022-12-29 14:16:28</td>
                     <td><input type="button" value="삭제" class="btn2"></td>
                  </tr> -->
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