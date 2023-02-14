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
<script src="../javascript/template.js"></script>
<script src="../javascript/msg.js"></script>
<body>
   <!-- 변수 등록 가이드 -->
   <div class="VarGuide_layer layer">
      <h1>변수 등록 가이드</h1>
      <div class="VarGuide">
         <h1>#{변수}란?</h1>
         <span>주소록에 저장된 변수내용을 불러와 자동 치환하여 수신자별로 다른 내용을 발송할 수 있습니다.</span><br>
         <h1>#{변수} 등록 가이드</h1>
         <span>1. 주소록에 변수 저장</span>
         <table>
            <colgroup>
               <col width="100">
               <col width="80">
               <col width="90">
               <col width="90">
               <col width="90">
               <col width="90">
            </colgroup>
            <thead>
               <th>휴대폰 번호</th>
               <th>이름</th>
               <th>#{1}</th>
               <th>#{2}</th>
               <th>#{3}</th>
               <th>#{4}</th>
            </thead>
            <tbody>
               <tr>
                  <td>01012345678</td>
                  <td>홍길동</td>
                  <td>우수회원</td>
                  <td></td>
                  <td></td>
                  <td></td>
               </tr>
            </tbody>
         </table>
         <br><span>2. 변수를 이용하여 메시지 작성</span>
         <p>#{이름}님, 이번 달 #{1} 입니다.</p>
         <br><span>3. 전송 내용 예시</span>
         <p>홍길동님, 이번 달 우수회원 입니다.</p>
      </div>
      <div class="layer_bottom">
         <a href="" class="layer_cancel">닫기</a>
      </div>
   </div>
   <!-- 변수 등록 가이드 끝 -->

   <?php include 'sh_layer.php'; ?>
   <?php include 'variable_layer.php'; ?>
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
         <div class='msg_wrap'>
            <div class="write_box">
               <div class="msg_content msg_write">
                  <div class="msg_wbox mt40">
                     <div class="rcs_box rcs_cell_box">
                        <div class="rcs_box_con">
                           <i>
                              <p>* 브랜드 선택</p>
                              <div class="select_box brand_sel">
                                 <span>브랜드 선택</span>
                                 <ul>
                                    <li><a href="brand.php">브랜드 연동</a></li>
                                    <li class="target">브랜드1</li>
                                    <li class="target">브랜드2</li>
                                 </ul>
                              </div>
                           </i>
                           <i>
                              <p>* 타이틀 유형</p>
                              <div class="select_box title_sel">
                                 <span>승인</span>
                                 <ul>
                                    <li>승인</li>
                                    <li>입금</li>
                                    <li>출금</li>
                                    <li>출고</li>
                                    <li>취소</li>
                                    <li>주문</li>
                                    <li>명세서</li>
                                    <li>배송</li>
                                    <li>예약</li>
                                    <li>회원가입</li>
                                    <li>인증</li>
                                    <li>안내</li>
                                 </ul>
                              </div>
                           </i>
                        </div>
                        <div class="rcs_box_con mt10">
                           <i>
                              <p>* 템플릿 속성</p>
                              <input type="text" value="타이틀 선택형 | 서술형(description)" readonly>
                           </i>
                        </div>
                        <div class="rcs_box_con mt10">
                           <i>
                              <p>* 템플릿 명</p>
                              <input type="text" placeholder="템플릿명을 입력해 주세요. (30자 이내)" maxlength="30">
                           </i>
                        </div>
                     </div>
                     <div class="msg_table temp_table">
                        <i>
                           <div class="rcs_text_box">
                              <textarea name="" class="rcs_text" placeholder="메시지 내용은 고정부 메시지와 변수명에 들어가는
메시지를 합쳐서 총 90자 이내로 작성해주세요.
(90자 초과시 전송 불가)"></textarea>
                              <div class="t_byte">
                                 <b>0</b><span>/90자</span>
                              </div>
                           </div>
                        </i>
                        <div class="btn_box mt10">
                           <ul>
                              <li><a href="">내용저장</a></li>
                              <li><a href="" id="return_btn3">다시쓰기</a></li>
                              <li><a href="" class="action_btn sh_btn3">특수문자</a></li>
                              <li><a href="" class="action_btn variable_btn3">#{변수}</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="btn_upload on">
                        <h1><img src="../images/common/addbox_icon.png" alt="">버튼 추가</h1>
                        <ul>
                           <li class="this">미사용</li>
                           <li class="btn-01">1개</li>
                           <li class="btn-02">2개</li>
                        </ul>
                        <div class="add_btn btn-01 none">
                           <h1>- 버튼 01</h1>
                           <div class="btn_input">
                              <i>
                                 <p>버튼명</p>
                                 <input type="text" class="btnName" placeholder="이름을 입력해 주세요." maxlength="16">
                              </i>
                              <i>
                                 <p>버튼타입</p>
                                 <div class="select_box">
                                    <span>URL 연결</span>
                                    <ul>
                                       <li class="url_sel">URL 연결</li>
                                       <li class="num_sel">전화연결</li>
                                    </ul>
                                 </div>
                              </i>
                           </div>
                           <div class="btn_input sub_input i_url">
                              <i>
                                 <p>URL 주소</p>
                                 <input type="text" placeholder="https://를 포함한 URL을 입력해 주세요.">
                              </i>
                           </div>
                           <div class="btn_input sub_input i_num none">
                              <i>
                                 <p>전화연결</p>
                                 <input type="text" placeholder="전화번호를 입력해 주세요.">
                              </i>
                           </div>
                        </div>
                        <div class="add_btn btn-02 none">
                           <h1>- 버튼 02</h1>
                           <div class="btn_input">
                              <i>
                                 <p>버튼명</p>
                                 <input type="text" class="btnName" placeholder="이름을 입력해 주세요." maxlength="16">
                              </i>
                              <i>
                                 <p>버튼타입</p>
                                 <div class="select_box">
                                    <span>URL 연결</span>
                                    <ul>
                                       <li class="url_sel">URL 연결</li>
                                       <li class="num_sel">전화연결</li>
                                    </ul>
                                 </div>
                              </i>
                           </div>
                           <div class="btn_input sub_input i_url">
                              <i>
                                 <p>URL 주소</p>
                                 <input type="text" placeholder="https://를 포함한 URL을 입력해 주세요.">
                              </i>
                           </div>
                           <div class="btn_input sub_input i_num none">
                              <i>
                                 <p>전화연결</p>
                                 <input type="text" placeholder="전화번호를 입력해 주세요.">
                              </i>
                           </div>
                        </div>
                     </div>
                     <div class="temp_bottom">
                        <i>
                           <h1>템플릿 등록 안내</h1>
                           <h2>
                              <span>※ 변수명은 20자 이내의 한글, 영문, 숫자, ‘_’ 만 가능합니다.</span>
                              <span>※ 특수문자, 공란, 줄바꿈 그리고 {{description}} 변수명 사용 불가합니다.</span>
                              <span>※ 버튼에 들어가는 글자는 90자 제한 대상에 포함되지 않습니다.</span>
                              <span>※ 검수 요청하신 템플릿은 영업일 기준 2~3일 이내 순차 처리되며,</span>
                              <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;반려된 템플릿은 수정하여 재검수 요청해야 합니다.</span>
                              <span>※ 정보성 메시지만 보낼 수 있으며, 광고 등 정책에 위배되는 메시지 발송 시</span>
                              <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;반려된 템플릿은 수정하여 재검수 요청해야 합니다.</span>
                           </h2>
                        </i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="msg_box">
               <div class="msg_con">
                  <div class="msg_view_box">
                     <div class="msg_top">
                        <h1><</h1>
                        <p><img src="../images/msg/user_icon.png" alt=""></p>
                     </div>
                     <div class="msg_view">
                        <div class="image_preview"><img id="img"/></div>
                        <div class="msg_view_text">
                           <h1 id="rcs_title" class="n00"></h1>
                           <span>내용 미리보기</span>
                           <div class="btn_view">
                              <button class="btn-01">버튼명</button>
                              <button class="btn-02">버튼명</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h1>* 기종에 따라 다르게 보일 수 있습니다.</h1>
            </div>
         </div>
         <div class="msg_bottom">
            <div class="temp_bottom">
               <i></i>
               <a href="">템플릿 승인 요청</a>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>