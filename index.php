<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/SUIT.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
   $(function (){
      
      // 체험하기
      $('.inner_close span').click(function(){
         $('.inner').slideUp();
      });
      // 체험하기 끝

      // Scroll Top
      $(".move_top").click(function(){
         $('html, body').animate({ scrollTop: $("body").offset().top }, 300);
      });
      // Scroll Top 끝

      // 배너 이벤트
      var swiper = new Swiper(".banner", {
        slidesPerView: 'auto',
        parallax: true,
        speed: 1000,
         autoplay: {
            delay: 6000,
            disableOnInteraction: false,
         },
         navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
         },
         pagination: {
          el: ".swiper-pagination",
          clickable: true,
        }
      });
      // 배너 이벤트 끝

      // 네비 이벤트
      var offsetTop = $('.nav').offset().top;
      var s1Top = $('#s1').offset().top - 300;
      var s2Top = $('#s2').offset().top - 300;
      var s3Top = $('#s3').offset().top - 300;
      var s4Top = $('#s4').offset().top - 300;

      $(window).scroll(function(){
         var scrollTop = 0;

         scrollTop = $(window).scrollTop() - 110;

         if (scrollTop > offsetTop) $(".nav").addClass('on');
         else $(".nav").removeClass('on');

         if(scrollTop > s1Top) {
            $('.nav li').eq(1).addClass('this');
            $('.nav li').eq(1).siblings().removeClass('this');
         }
         if(scrollTop > s2Top) {
            $('.nav li').eq(2).addClass('this');
            $('.nav li').eq(2).siblings().removeClass('this');
         } 
         if(scrollTop > s3Top) {
            $('.nav li').eq(3).addClass('this');
            $('.nav li').eq(3).siblings().removeClass('this');
         } 
         if(scrollTop > s4Top) {
            $('.nav li').eq(4).addClass('this');
            $('.nav li').eq(4).siblings().removeClass('this');
         } 
      });

      $('.tag').click(function(e){
         e.preventDefault();
         $(".nav").addClass('on');
         var offsetTop = $('.active').offset().top - 80;
         scrollTop = $(window).scrollTop();
         if(scrollTop > offsetTop) $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
         else $('html,body').animate({scrollTop:$(this.hash).offset().top - 100}, 500);
      });
      // 네비 이벤트 끝

      // 스크롤 이벤트
      var amount = $('.active').length;
      var obj = {};

      for (var i = 0; i < amount; i++) {
         obj['active_'+ i] = $('.active').eq(i).offset().top - 800;
      }

      $(window).on('scroll', function() {
         var scroll = $(window).scrollTop();
         
         for (var i = 0; i < amount; i++) {
            if (scroll > obj['active_' + i]) {
               $('.active').eq(i).addClass('on');
            }
            else if (scroll < obj['active_' + i]) {
               $('.active').eq(i).removeClass('on');
            }
         }
      });

      var d_amount = $('.d_active').length;
      var d_obj = {};

      for (var i = 0; i < d_amount; i++) {
         d_obj['d_active_'+ i] = $('.d_active').eq(i).offset().top - 1300;
      }

      $(window).on('scroll', function() {
         var scroll = $(window).scrollTop();
         
         for (var i = 0; i < d_amount; i++) {
            if (scroll > d_obj['d_active_' + i]) {
               $('.d_active').eq(i).addClass('on');
            }
            else if (scroll < d_obj['d_active_' + i]) {
               $('.d_active').eq(i).removeClass('on');
            }
         }
      });
      // 스크롤 이벤트 끝

      // RCS 미리보기
      var swiper2 = new Swiper(".phone_wrap", {
        speed: 1000,
         autoplay: {
            delay: 6000,
            disableOnInteraction: false,
         },
        effect: "creative",
        creativeEffect: {
          prev: {
            translate: ["-120%", 0, -500],
          },
          next: {
            translate: ["120%", 0, -500],
          },
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      // RCS 미리보기 끝
   });
 </script>
<body>
   <div class="move_top">
      <span><img src="images/main/arrow_top.png" alt=""></span>
   </div>
   <div class="inner">
      <div class="wrap">
         <div class="inner_close">
            <i>
               <input type="checkbox" id="week">
               <label for="week">일주일간 보지 않기</label>
            </i>
            <span><img src="images/main/close.png" alt=""></span>
         </div>
         <a href="page/msg.php"></a>
      </div>
   </div>
   <div class="swiper banner">
      <div class="header">
         <div class="wrap">
            <div class="logo">
               <a href=""><img src="images/common/logo2.png" alt=""></a>
            </div>
            <div class="menu_btn">
               <a href="page/join.php">회원가입</a>
               <a href="page/login.php">로그인</a>
            </div>
         </div>
      </div>
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="wrap">
               <i>
                  <div class="title" data-swiper-parallax="-600">빠르고 다양한 문자 서비스<br>메시지 통합 플랫폼</div>
                  <div class="subtitle" data-swiper-parallax="-1200">#SMS #LMS #MMS #RCS</div>
               </i>
               <!-- <i><img src="images/main/banner01.png" alt=""></i> -->
               <i><img src="images/main/banner_con01.png" alt=""></i>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="wrap">
               <i>
                  <div class="title" data-swiper-parallax="-600">새로워진 기업용 문자 서비스<br>RCS 기업 메시지</div>
                  <div class="subtitle" data-swiper-parallax="-1200">신뢰성 있는 메시지로 기업의 이미지를 향상시켜 보세요.</div>
               </i>
               <!-- <i><img src="images/main/banner02.png" alt=""></i> -->
               <i><img src="images/main/banner_con02.png" alt=""></i>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="wrap">
               <i>
                  <div class="title" data-swiper-parallax="-600">설치없이 간편하게 이용하는<br>웹기반 서비스</div>
                  <div class="subtitle" data-swiper-parallax="-1200">메시지 전송에 불필요한 업무를 줄이세요.</div>
               </i>
               <!-- <i><img src="images/main/banner03.png" alt=""></i> -->
               <i><img src="images/main/banner_con03.png" alt=""></i>
            </div>
         </div>
      </div>
      <div class="swiper_button_box">
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="nav">
         <div class="wrap">
            <ul>
               <li><a href="page/login.php"><h1>SMSPRO SERVICE</h1><h2>시작하기<span></span></h2></a></li>
               <li><a href="#s1" class="tag"><p></p>서비스 소개</a></li>
               <li><a href="#s2" class="tag"><p></p>RCS 기능</a></li>
               <li><a href="#s3" class="tag"><p></p>이용안내</a></li>
               <li><a href="#s4" class="tag"><p></p>문의하기</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="section" id=s1>
      <div class="wrap">
         <div class="msg_kind">
            <i>
               <span><img src="images/main/sms.png" alt="">단문 전송</span>
               <h1>간단한 안내 문자<br>빠르고 간편하게</h1>
               <h2>짧은 알림이나 정보전달 저렴한 가격에 보내세요.</h2><br>
               <h2>일반문자 | 최대 90Byte 입력</h2>
               <h3>기업문자 | 최대 최대 100자 입력, 액션버튼 1개 추가</h3>
            </i>
            <img src="images/main/msg_kind01.png" alt="">
         </div>
         <div class="msg_kind active">
            <i>
               <span><img src="images/main/lms.png" alt="">장문 전송</span>
               <h1>긴 내용의 광고/안내 문자<br>풍부한 메시지 전송</h1>
               <h2>다양한 정보 전달, 대량전송 걱정없이 보내세요.</h2><br>
               <h2>일반문자 | 최대 2,000Byte 입력</h2>
               <h3>기업문자 | 최대 1,300자 입력, 액션버튼 3개 추가</h3>
            </i>
            <img src="images/main/msg_kind02.png" alt="">
         </div>
         <div class="msg_kind active">
            <i>
               <span><img src="images/main/mms.png" alt="">이미지 전송</span>
               <h1>이미지와 함께 내용 전달<br>광고/홍보, 상품 소개</h1>
               <h2>시각적인 메시지 전송으로 도달 효과를 높혀 보세요.</h2><br>
               <h2>일반문자 | 이미지(300KB) 첨부 가능</h2>
               <h3>기업문자 | 이미지(1MB) 첨부 가능, 액션버튼 3개 추가</h3>
            </i>
            <img src="images/main/msg_kind03.png" alt="">
         </div>
      </div>
   </div>
   <div class="section active" id="s2">
      <div class="wrap">
         <div class="sec_tit">
            <h1>새로운 문자 서비스의 시작</h1>
            <h2>채팅<b>+</b>RCS 메시지를 만나보세요!</h2>
         </div>
         <div class="rcs_info">
            <div class="rcs_icon_wrap">
               <div class="rcs_icon d_active">
                  <p><img src="images/main/rcs_icon01.png" alt=""></p>
                  <i>
                     <h1>신뢰할 수 있는 메시지</h1>
                     <span>RCS 메시지는 기업용 메시지로<br>사전에 승인된 기업만 사용할 수 있습니다.</span>
                  </i>
               </div>
               <div class="rcs_icon d_active">
                  <p><img src="images/main/rcs_icon02.png" alt=""></p>
                  <i>
                     <h1>다양한 유형의 레이아웃</h1>
                     <span>여러가지 형태의 메시지를 제공하여<br>더욱 효과적으로 정보를 전달할 수 있습니다.</span>
                  </i>
               </div>
               <div class="rcs_icon d_active">
                  <p><img src="images/main/rcs_icon03.png" alt=""></p>
                  <i>
                     <h1>브랜드 홍보</h1>
                     <span>RCS에서 제공하는 브랜드 홈 관리로<br>기업의 브랜드를 소개해 보세요!</span>
                  </i>
               </div>
               <div class="rcs_icon d_active">
                  <p><img src="images/main/rcs_icon04.png" alt=""></p>
                  <i>
                     <h1>동일한 가격으로 다양한 기능 지원</h1>
                     <span>버튼, 슬라이드 이미지, 동영상, 지도 삽입 등<br>다양한 기능을 지원해 드립니다.</span>
                  </i>
               </div>
               <div class="rcs_icon d_active">
                  <p><img src="images/main/rcs_icon05.png" alt=""></p>
                  <i>
                     <h1>고객과 빠른 소통</h1>
                     <span>RCS에서 제공하는 대화형 메시지 기능으로<br>신속하고 정확하게 상담이 가능합니다.</span>
                  </i>
               </div>
            </div>
            <div class="swiper phone_wrap">
               <ul class="swiper-wrapper">
                  <li class="swiper-slide"><img src="images/main/phone01.png" alt=""></li>
                  <li class="swiper-slide"><img src="images/main/phone02.png" alt=""></li>
                  <li class="swiper-slide"><img src="images/main/phone03.png" alt=""></li>
               </ul>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="section bg active">
      <div class="wrap">
         <div class="sec_tit">
            <h1>문자 서비스 유형마다 다른점은?</h1>
            <h2>일반 문자와  RCS 문자의 차이점을 비교해 보세요.</h2>
         </div>
         <div class="rcs_info_table">
            <table>
               <thead>
                  <tr>
                     <th class="th_t1"></th>
                     <th><span>SMS 단문</span>일반 문자</th>
                     <th>RCS 문자</th>
                     <th><span>LMS 장문</span>일반 문자</th>
                     <th>RCS 문자</th>
                     <th><span>MMS 이미지</span>일반 문자</th>
                     <th>RCS 문자</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th>글자 입력</th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                  <tr>
                     <th class="th_t2">최대 글자수</th>
                     <td>최대 90Byte</td>
                     <td>최대 100자</td>
                     <td>최대 2,000Byte</td>
                     <td>최대 1,300자</td>
                     <td>최대 2,000Byte</td>
                     <td>최대 1,300자</td>
                  </tr>
                  <tr>
                     <th>기능</th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                  <tr>
                     <th class="th_t2">제목</th>
                     <td>X</td>
                     <td>O</td>
                     <td>O</td>
                     <td>O</td>
                     <td>O</td>
                     <td>O</td>
                  </tr>
                  <tr>
                     <th class="th_t2">액션버튼</th>
                     <td>X</td>
                     <td>O</td>
                     <td>X</td>
                     <td>O</td>
                     <td>X</td>
                     <td>O</td>
                  </tr>
                  <tr>
                     <th class="th_t2">스타일</th>
                     <td>X</td>
                     <td>O</td>
                     <td>X</td>
                     <td>O</td>
                     <td>X</td>
                     <td>O</td>
                  </tr>
                  <tr>
                     <th class="th_t2">이미지</th>
                     <td>X</td>
                     <td>X</td>
                     <td>X</td>
                     <td>X</td>
                     <td>300 KB</td>
                     <td>1 MB</td>
                  </tr>
                  <tr>
                     <th>요금</th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                  <tr>
                     <th class="th_t2">최저 단가</th>
                     <td>1O 원</td>
                     <td>10 원</td>
                     <td>30 원</td>
                     <td>30 원</td>
                     <td>80 원</td>
                     <td>80 원</td>
                  </tr>
               </tbody>
            </table>
            <i>
               <a href="page/guide07.php" target="blank">RCS 서비스 이용 안내<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M4.5 17q-.625 0-1.062-.438Q3 16.125 3 15.5v-11q0-.625.438-1.062Q3.875 3 4.5 3H10v1.5H4.5v11h11V10H17v5.5q0 .625-.438 1.062Q16.125 17 15.5 17Zm3.562-4L7 11.938 14.438 4.5H12V3h5v5h-1.5V5.562Z"></path></svg></a>
            </i>
         </div>
      </div>
   </div>
   <div class="section bn" id="s3">
      <div class="wrap">
         <div class="sec_tit">
            <h1>문자 서비스 이용이 처음이세요?</h1>
            <h2><a href="page/guide.php" target="_blank">이용가이드 전체보기<img src="images/main/arrow_icon02.png" alt=""></a></h2>
         </div>
         <div class="service_info">
            <ul>
               <li class="active"><a href="page/guide01.php" target="_blank">
                  <h1>발신번호 사전등록</h1>
                  <span>전송전에 미리 발신번호를<br>등록해 주세요.</span>
                  <p>자세히 보기<img src="images/main/arrow_icon.png" alt=""></p>
               </a></li>
               <li class="active"><a href="page/guide03.php" target="_blank">
                  <h1>광고성 메시지 작성안내</h1>
                  <span>광고성 메시지 전송전<br>반드시 확인해 주세요.</span>
                  <p>자세히 보기<img src="images/main/arrow_icon.png" alt=""></p>
               </a></li>
               <li class="active"><a href="page/guide05.php" target="_blank">
                  <h1>통신사별 스팸필터링</h1>
                  <span>문자 전송 성공인데<br>문자가 오지 않나요?</span>
                  <p>자세히 보기<img src="images/main/arrow_icon.png" alt=""></p>
               </a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="section bn" id="s4">
      <div class="wrap">
         <div class="sec_tit">
            <h1>이용에 궁금한 점이 있으신가요?</h1>
            <h2>아래 번호로 문의해 주시면 빠르게 답변해 드립니다.</h2>
         </div>
         <div class="cs_box">
            <img src="images/main/phone_icon.gif" alt="">
            <h1>1599-1234</h1>
            <h2>운영시간 : 평일 09:00 ~ 18:00 (주말/공휴일 휴무)</h2>
            <a href="tel:1599-1234">상담신청</a>
         </div>
      </div>
   </div>
   <div class="section bn" id="s5">
      <div class="end_box">
         <div class="wrap">
            <span>메시지 통합 플랫폼</span>
            <h1>나에게 알맞는 문자 서비스 지금 시작해보세요.</h1>
            <a href="page/login.php">지금 시작하기</a>
         </div>
      </div>
   </div>
   <div class="footer">
      <div class="ft_inner">
         <div class="wrap">
            <ul>
               <li><a href="http://www.innopost.com/" target="_blank">회사소개</a></li>
               <li class="t_blue"><a href="page/policy_privacy.php" target="_blank">개인정보취급방침</a></li>
               <li><a href="page/policy_use.php" target="_blank">이용약관</a></li>
               <li><a href="page/policy_spam.php" target="_blank">스팸정책</a></li>
               <li><a href="page/guide05.php" target="_blank">이동통신사별 스팸안내</a></li>
               <li><a href="page/guide03.php" target="_blank">광고전송 법령안내</a></li>
            </ul>
            <span>대표번호<b>1599-1234</b></span>
         </div>
      </div>
      <div class="wrap">
         <div class="ft_bottom">
            <ul>
               <li>(주)이노포스트</li>
               <li>대표 : 이경훈</li>
               <li>사업장 주소 : 광주 서구 천변좌로 268, 17F (KDB빌딩)</li>
               <li>사업자번호 : 410-86-00477</li>
               <li>통신판매업신고 : 2007-0213호</li>
               <li>특수유형부가통신 : 제3-03-15-0002호</li>
               <li>개인정보 관리 : 이기홍</li>
               <li>서비스 관리 : 박창윤 ( help@smsbox.co.kr )</li>
               <li>전자세금계산서 관리 : 김선미 ( inno_tax@innopost.com )</li>
            </ul>
            <span>Copyright ⓒ SMSPRO. All rights Reserved.</span>
            <a href="http://www.ftc.go.kr/bizCommPop.do?wrkr_no=4108600477" onclick="window.open(this.href, '', 'left=550, top=120, width=750, height=700'); return false;"><b>사업자정보확인</b></a>
         </div>
      </div>
   </div>
</body>
</html>