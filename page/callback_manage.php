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
               <li><a href="profile.php">회원기본 정보</a></li>
               <li class="this"><a href="callback_manage.php">발신번호 관리</a></li>
               <li><a href="brand.php">브랜드 관리</a></li>
               <li><a href="security.php">보안설정</a></li>
            </ul>
         </div>
         <div class="callback">
            <div class="layer_raw">
               <p><strong><img src="../images/common/icon_law.png"><span>제84조의2</span> (전화번호의 거짓표시 금지 및 이용자 보호)</strong><span class="close_btn"><a href="#" onclick="$('.layer_raw').hide();return false;"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M6.4 19 5 17.6l5.6-5.6L5 6.4 6.4 5l5.6 5.6L17.6 5 19 6.4 13.4 12l5.6 5.6-1.4 1.4-5.6-5.6Z"/></svg></a></span></p>
               <div class="layer_raw_con">
                  <ul>
                     <li>① 누구든지 다른 사람을 속여 재산상 이익을 취하거나 폭언·협박·희롱 등의 위해를 입힐 목적으로 전화(문자메시지를 포함한다.<br>이하 이 조에서 같다)를 하면서 송신인의 전화번호를 변작하는 등 거짓으로 표시하여서는 아니 된다.</li>
                     <li>② 누구든지 영리를 목적으로 송신인의 전화번호를 변작하는 등 거짓으로 표시할 수 있는 서비스를 제공하여서는 아니된다.<br>다만, 공익을 목적으로 하거나 수신인에게 편의를 제공하는 등 정당한 사유가 있는 경우에는 그러하지 아니하다.</li>
                     <li>③ 전기통신사업자는 거짓으로 표시된 전화번호로 인한 이용자의 피해를 예방하기 위하여 다음 각 호의 조치를 하여야한다.<br>다만, 제2항 단서에 따른 정당한 사유가 있는 경우는 제외한다.</li>
                     <li style="padding-left:15px; color:#aaa;"> 1. 변작 등 거짓으로 표시된 전화번호의 전화 발신을 차단하거나 송신인의 정상적인 전화번호로 정정하여 수신인에게<br>  송출하기 위한 조치<br>  2. 국외에서 국내로 발신된 전화에 대한 국외발신 안내를 위한 조치<br>  3. 변작 등 거짓으로 표시한 전화번호를 송신한자의 해당 회선에 대한 전기통신역무 제공의 중지를 위한 조치<br>  4. 그 밖에 이용자 보호를 위하여 미래창조과학부장관이 정하는 사항</li>
                     <li>④ 미래창조과학부장관은 제3항에 따른 조치의 이행 여부를 확인하거나 이용자의 피해가 확산되는 것을 방지하기 위하여 전기통신사업자에게<br>다음 각 호에 해당하는 자료의 열람·제출을 요청하거나 필요한 검사를 할 수 있다.</li>
                     <li style="padding-left:15px; color:#aaa;">1. 변작 등 거짓으로 표시된 전화번호의 전화 발신을 차단한 경우 해당 전화번호, 차단시각, 발신 사업자명<br>  2. 수신자가 변작 등 거짓으로 표시된 전화번호에 대하여 신고한 경우 발신 사업자명<br>  3. 그 밖에 제3항 각 호의 조치 이행 여부를 확인할 수 있는 관계 자료</li>
                     <li>⑤ 미래창조과학부장관은 제3항에 따른 조치의 이행 여부를 확인하고 제4항에 따른 조치를 시행하기 위하여 대통령령으로 정하는 바에 따라<br>정보통신망 이용촉진 및 정보보호 등에 관한 법률」 제52조에 따른 한국인터넷진흥원에 업무를 위탁하고 이에 소요되는 비용을 지원할 수 있다.</li>
                     <li>⑥ 미래창조과학부장관은 제2항 단서에 따른 정당한 사유, 제3항 각 호에 따른 조치 및 제4항의 이행을 위한 구체적인 절차·방법을 정하여 고시할 수 있다.</li>
                     <li>⑦ 제4항에 따른 자료의 열람·제출 및 검사에 대하여는 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」 제64조, 제64조의2 및 제69조를 준용한다.</li>
                     <li class="mt_10">[본조신설 2014.10.15.]</li>
                     <li class="mt_10">참조 : 국가법령정보센터 (<a href="http://www.law.go.kr/lsInfoP.do?lsiSeq=160782&amp;efYd=20150416#0000" target="_blank" class="page_link">http://www.law.go.kr/lsInfoP.do?lsiSeq=160782&amp;efYd=20150416#0000</a>)</li>
                  </ul>
               </div>
            </div>
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">발신번호 등록 안내</h1>
               <a href="" id="law_btn" onclick="$('.layer_raw').toggle(); return false;"><img src="../images/common/icon_law.png" alt="">전기통신사업법 <strong>제84조의 2</strong></a>
            </div>
            <div class="callback_nt">
               <h1>전기통신사업법 제 84조의 2에 의거 <strong class="t_red">2015년 1월 12일부터 등록된 발신번호만 전송</strong>이 가능합니다.</h1>
               <ul>
                  <li>
                     <span>· 번호형식</span>
                     <p>세칙에 준수한 번호<b>(8~11자리 이내)</b></p>
                  </li>
                  <li>
                     <span>· 번호등록</span>
                     <p>최대 10개까지 등록 가능</p>
                  </li>
                  <li>
                     <span>· 인증방법</span>
                     <p>본인인증 / 통신가입증명원<b>(FAX / E-mail 접수)</b></p>
                  </li>
               </ul>
            </div>
            <div class="title2">
               <h1><img src="../images/msg/call_icon.png" alt="">자주쓰는 발신번호 목록</h1>
            </div>
            <div class="callback_table">
               <dl>
                  <dt>대표</dt>
                  <dt>발신번호</dt>
                  <dt>메모</dt>
                  <dt>상태/관리</dt>
                  <dt>대표</dt>
                  <dt>발신번호</dt>
                  <dt>메모</dt>
                  <dt>상태/관리</dt>
               </dl>
               <ul>
                  <li>
                     <span><p class="rep">대표</p></span>
                     <span><strong>01012345678</strong></span>
                     <span>
                        <input type="text">
                        <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                     </span>
                     <span>
                        <b class="t_red">인증완료</b>
                        <a href=""><img src="../images/common/icon_top.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_bottom.png" alt=""></a>
                     </span>
                  </li>
                  <!-- <li>
                     <span><input type="radio"></span>
                     <span>01012345678</span>
                     <span>
                        <input type="text">
                        <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                     </span>
                     <span>
                        <b class="t_red">인증완료</b>
                        <a href=""><img src="../images/common/icon_top.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_bottom.png" alt=""></a>
                     </span>
                  </li> -->
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
               </ul>
               <span class="callback_table_btn">
                  <a href="">삭제</a>
                  <a href="">대표번호 설정</a>
                  <a href="">대표번호 해제</a>
                  <a href="">순서적용</a>
               </span>
            </div>
            <div class="title2">
               <h1><img src="../images/msg/call_icon.png" alt="">전체 발신번호 목록</h1>
               <a href="callback_manage=reg.php" class="bl4" onclick="window.open(this.href, '', 'left=660, top=200, width=595, height=660'); return false;">발신번호 등록하기</a>
            </div>
            <div class="callback_table">
               <ul>
                  <li>
                     <span><input type="radio"></span>
                     <span>01012345678</span>
                     <span><b class="t_red">인증완료</b></span>
                     <span>[자주사용번호]</span>
                  </li>
                  <!-- <li>
                     <span><input type="radio"></span>
                     <span>01012345678</span>
                     <span><b class="t_red">인증완료</b></span>
                     <span>[자주사용번호]</span>
                  </li> -->
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
                  <li class="list_right">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </li>
               </ul>
               <span class="callback_table_btn">
                  <a href="">삭제</a>
                  <a href="">자주사용번호 설정</a>
               </span>
            </div>
            <div class="title2">
               <h1><img src="../images/common/notice_icon.png" alt="">통신 가입 증명원 접수</h1>
            </div>
            <div class="callback_nt" style="padding:0; border: none;">
               <h1>대표번호는 발신번호 등록 후 해당 서류를 메일 또는 팩스로 접수 바랍니다.</h1>
               <ul>
                  <li>
                     <span>· 팩스 062-350-0704</span>
                  </li>
                  <li>
                     <span>·  문의 1599-8744</span>
                  </li>
               </ul>
            </div>
            <div class="info_wrap mt10">
               <span>
                  - 발신번호 명의자가 직원인 경우 - ( 재직증명서 + 통신가입증명원 등록 가능 )<br>
                  - 발신번호 명의자가 사업자인 경우 - ( 사업자등록증 + 통신가입증명원 등록 가능 )<br>
                  - 발신번호 명의자가 타사(타인)인 경우<br>
                  - ( 관계확인문서(위-수탁계약서, 본사-지사 증빙서류 등), 사업자등록증, 통신가입증명원, 위임장, 대리인 신분증 사본, 재직증명서 )<br>
                  - 대표번호는 8자리만 허용되며 관리자 승인처리 후 사용 가능합니다.(통신 가입 증명원)<br>
               </span>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>