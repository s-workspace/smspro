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
      $('.free_tpl').click(function(e){
         e.preventDefault();
         $('.layer_cover').show();
         $('.template_layer').fadeIn('300');
      });
   });
</script>
<body>

   <!-- 템플릿 등록레이어 -->
   <div class="template_layer layer">
      <i>
         <span>
            이미 등록된 템플릿 입니다.<br>
            기본(free)템플릿은 1개만 등록 가능합니다.
         </span>
         <a href="" class="layer_cancel">확인</a>
      </i>
   </div>
   <!-- 템플릿 등록레이어 끝 -->

   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li class="this"><a href="template_create.php">템플릿 등록</a></li>
               <li><a href="template_list.php">템플릿 목록</a></li>
            </ul>
         </div>
         <div class="tpl_wrap">
            <div class="tpl_con">
               <h1>타이틀 선택형</h1>
               <ul>
                  <li>
                     <a href="template_manage=t1_des.php">
                        <div class="tpl_box" style="height: 250px;">
                           <h4>주문</h4>
                           <span>
                              김** 고객님<br>
                              주문내역 입니다.<br>
                              주문금액 : 50,000원<br>
                              주문번호 : 2022-07-5625<br>
                              배송주소 : 서울 영등포구 여의도동 12-31<br>
                              상풍명 : 오늘의북 외 5권<br>
                              배송이 시작되면 안내 메시지가 발송됩니다.
                           </span>
                           <button>상세 주문내역 보기</button>
                        </div>
                        <i>서술(description)</i>
                     </a>
                  </li>
                  <li>
                     <a href="template_manage=t1_cell.php">
                        <div class="tpl_box" style="height: 250px;">
                           <h4>예약</h4>
                           <h3>설치예약 안내</h3>
                           <span>
                              <div class="tpl_cell">
                                 <p>상뭄명</p>
                                 <p>김치냉장고 k338S11</p>
                              </div>
                              <div class="tpl_cell">
                                 <p>결제금액</p>
                                 <p>1,500,600원</p>
                              </div>
                              <div class="tpl_cell">
                                 <p>설치비용</p>
                                 <p>50,000원</p>
                              </div>
                              <div class="tpl_cell line">
                                 <p>설치일자</p>
                                 <p>9월 5일 오후 2시 이후</p>
                              </div>
                              해당일에 설치예약이 완료되었습니다.
                           </span>
                           <button>설치예약 확인</button>
                        </div>
                        <i>스타일(cell)</i>
                     </a>
                  </li>
                  <li class="free_tpl">
                     <a href="">
                        <div class="tpl_box" style="height: 250px;">
                           <h4>알림</h4>
                           <span>
                              김** 고객님의 9월 사용금액<br>
                              168,200원이 신한은행에서 금일 출금<br>
                              예정입니다.<br>
                              출금 계좌의 잔액을 확인해주세요.<br>
                              출금계좌 : 신한 123-4567-88899<br>
                              예금주 : 김**<br>
                              출금예정일 : 2022년 9월 5일<br>
                              문의사항은 고객센터로 문의주세요.<br>
                              고객센터 : 1234-5678
                           </span>
                        </div>
                        <i>기본(free)</i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="tpl_con">
               <h1>타이틀 자유형</h1>
               <ul>
                  <li>
                     <a href="template_manage=t2_des.php">
                        <div class="tpl_box" style="height: 260px;">
                           <h4 class="line">주문<b>50,000원</b></h4>
                           <span>
                              김** 고객님<br>
                              주문내역 입니다.<br>
                              주문금액 : 50,000원<br>
                              주문번호 : 2022-07-5625<br>
                              배송주소 : 서울 영등포구 여의도동 12-31<br>
                              상풍명 : 오늘의북 외 5권<br>
                              배송이 시작되면 안내 메시지가 발송됩니다.
                           </span>
                           <button>상세 주문내역 보기</button>
                        </div>
                        <i>서술(description)</i>
                     </a>
                  </li>
                  <li>
                     <a href="template_manage=t2_cell.php">
                        <div class="tpl_box" style="height: 260px;">
                        <h4 class="line">설치예약<b>50,000원</b></h4>
                           <h3 class="t_blue">내일 7.9(토) 배송예정</h3>
                           <span>
                              <div class="tpl_cell">
                                 <p>상뭄명</p>
                                 <p>김치냉장고 k338S11</p>
                              </div>
                              <div class="tpl_cell">
                                 <p>결제금액</p>
                                 <p>1,500,600원</p>
                              </div>
                              <div class="tpl_cell">
                                 <p>설치비용</p>
                                 <p>50,000원</p>
                              </div>
                              <div class="tpl_cell line">
                                 <p>설치일자</p>
                                 <p>9월 5일 오후 2시 이후</p>
                              </div>
                              해당일에 설치예약이 완료되었습니다.
                           </span>
                           <button>설치예약 확인</button>
                        </div>
                        <i>스타일(cell)</i>
                     </a>
                  </li>
                  <li class="free_tpl">
                     <a href="">
                        <div class="tpl_box" style="height: 260px;">
                           <h4 class="line">알림</h4>
                           <span>
                              김** 고객님의 9월 사용금액<br>
                              168,200원이 신한은행에서 금일 출금<br>
                              예정입니다.<br>
                              출금 계좌의 잔액을 확인해주세요.<br>
                              출금계좌 : 신한 123-4567-88899<br>
                              예금주 : 김**<br>
                              출금예정일 : 2022년 9월 5일<br>
                              문의사항은 고객센터로 문의주세요.<br>
                              고객센터 : 1234-5678
                           </span>
                        </div>
                        <i>기본(free)</i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>