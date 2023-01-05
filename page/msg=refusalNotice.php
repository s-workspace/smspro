<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/common.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="../javascript/console.js"></script>
<script src="../javascript/msg.js"></script>
<body>
   <!-- 수신거부 처리결과 팝업 -->
   <div class="layer_popup">
      <a href="refusal_list_popup.php" onclick="window.open(this.href, '', 'left=500, top=200, width=685, height=550'); return false;"><img src="../images/popup/refusalNotice_popup.png" alt=""></a>
      <span class="layer_popup_close"><img src="../images/common/close_icon.png" alt=""></span>
   </div>
   <!-- 수신거부 처리결과 팝업 -->

   <!-- 버튼 생성 레이어 -->
   <div class="btn_layer layer">
      <h1>버튼 생성</h1>
      <div class="input_layer">
         <i>
            <p>버튼명</p>
            <input type="text" id="btnName" placeholder="이름을 입력해 주세요.">
         </i>
         <i>
            <p>버튼타입</p>
            <div class="select_box">
               <span></span>
               <ul>
                  <li id="url_sel">URL 링크</li>
                  <li id="num_sel">전화연결</li>
               </ul>
            </div>
         </i>
      </div>
      <div class="input_layer sub_input" id="url">
         <i>
            <p>URL 주소</p>
            <input type="text" placeholder="https://를 포함한 URL을 입력해 주세요.">
         </i>
      </div>
      <div class="input_layer sub_input" id="num">
         <i>
            <p>전화연결</p>
            <input type="text" placeholder="전화번호를 입력해 주세요.">
         </i>
      </div>
      <div class="layer_bottom">
         <a href="" class="get_btn">추가</a>
         <a href="" class="layer_cancel">취소</a>
      </div>
   </div>
   <!-- 버튼 생성 레이어 끝 -->

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

   <!-- 전송레이어 -->
   <div class="send_layer layer">
      <div class="send_layer_top">
         <img src="../images/common/infoRed_icon.png" alt="">
         <h1>광고 메시지를 전송하는 경우</h1>
         <h2>표기의무 사항을 꼭 지켜주세요.</h2>
         <h3>(미준수 시 과태료 및 이용에 불이익이 있을 수 있습니다.)</h3>
         <a href="guide03.php" target="_blank">광고메시지 표기의무 확인하기</a>
      </div>
      <ul class="send_layer_con">
         <li><h1>· 수신자</h1> : <span>200명</span></li>
         <li><h1>· 전송메시지</h1> : <span>RCS LMS</span></li>
         <li><h1>· 전송단가</h1> : <span>25원</span></li>
      </ul>
      <div class="layer_bottom ct">
         <a href="">전송하기</a>
         <a href="" class="layer_cancel">취소</a>
      </div>
   </div>
   <!-- 전송레이어 끝 -->

   <?php include 'sh_layer.php'; ?>
   <?php include 'variable_layer.php'; ?>
   <?php include 'msgload_layer=rec.php'; ?>
   <?php include 'msgload_layer=rec_mms.php'; ?>
   <?php include 'msgload_layer=sms.php'; ?>
   <?php include 'msgload_layer=lms.php'; ?>
   <?php include 'msgload_layer=mms.php'; ?>
   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li class="this"><a href="">메시지 전송</a></li>
            </ul>
         </div>
         <div class='msg_wrap'>
            <div class="write_box">
               <div class="reply_num_box">
                  <div class="title">
                     <h1><img src="../images/msg/call_icon.png" alt="">발신번호 선택</h1>
                     <ul>
                        <li><a href="callback_manage.php">발신번호 관리</a></li>
                     </ul>
                  </div>
                  <div class="reply_num_con" id="often_num">
                     <h1>발신번호(보내는사람)</h1>
                     <ul>
                        <li class="on this"><span>01012345678</span></li>
                     </ul>
                     <h1 id="all_num_btn">발신번호 전체 보기</h1>
                  </div>
                  <div class="reply_num_con" id="all_num">
                     <ul>
                        <li class="on"><span>01012345678</span></li>
                        <li class="on"><span>01012345678</span></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                     </ul>
                  </div>
               </div>
               <div class="msg_content msg_write">
                  <div class="title">
                     <h1><img src="../images/msg/write_icon.png" alt="">메시지 작성</h1>
                  </div>
                  <div class="msg_wbox">
                     <div class="rcs_box">
                        <div class="rcs_box_con">
                           <i>
                              <p>브랜드 선택</p>
                              <div class="select_box brand_sel">
                                 <span>선택안함(일반문자 전송)</span>
                                 <ul>
                                    <li id="brand_none">선택안함(일반문자 전송)</li>
                                    <li><a href="">브랜드 연동</a></li>
                                    <li class="target">브랜드1</li>
                                    <li class="target">브랜드2</li>
                                 </ul>
                              </div>
                           </i>
                           <i>
                              <p>템플릿 선택</p>
                              <div class="select_box template_sel">
                                 <span>선택안함(직접입력)</span>
                                 <ul>
                                    <li>선택안함(직접입력)</li>
                                    <li>템플릿1</li>
                                    <li>템플릿2</li>
                                 </ul>
                              </div>
                           </i>
                        </div>
                     </div>
                     <div class="msg_table">
                        <i>
                           <div class="msg_tit">
                              <input type="text" placeholder="제목 입력(20자 이내 / SMS인 경우 제목 전송불가)" maxlength="20">
                           </div>
                           <div class="msg_text sms">
                              <h1 class="type01 none">[선거운동정보]</h1>
                              <h1 class="type02 none">(광고)</h1>
                              <textarea name="" id="text_box" placeholder="내용 입력
- 90Byte 초과시 LMS로 자동 전환
- LMS 전환시 최대 2000Byte 까지 입력 가능
- 이미지 업로드시 MMS로 자동 전환">20**년 **월 **일 귀하가 요청하신 수신거부가 정상처리되었습니다.(업체명)</textarea>
                              <h2 class="type01 none">홍길동<br>불법수집정보 신고 118<br>무료수신거부 0808718744</h2>
                              <h2 class="type02 none">무료수신거부 0808718744</h2>
                              <div class="t_byte">
                                 <b>71</b><span>/90Byte</span><h1 class="msg_t1">SMS 단문</h1><h1 class="msg_t2">LMS 장문</h1><h1 class="msg_t3">MMS 이미지</h1>
                              </div>
                           </div>
                        </i>
                        <div class="btn_box">
                           <ul>
                              <li><a href="" class="myMsg">메시지 불러오기</a></li>
                              <li><a href="" class="recMsg">전송내역 불러오기</a></li>
                              <li><a href="">내용저장</a></li>
                              <li><a href="" id="return_btn">다시쓰기</a></li>
                              <li><a href="" class="action_btn sh_btn">특수문자</a></li>
                              <li><a href="" class="action_btn variable_btn">#{변수}</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="img_upload">
                        <h1><img src="../images/common/addbox_icon.png" alt="">이미지 업로드</h1>
                        <ul>
                           <li>
                              <dl>
                                 <dd><p></p></dd>
                                 <dd><p></p></dd>
                                 <dd><p></p></dd>
                              </dl>
                           </li>
                           <li><span>※ 이미지는 최대 3장, jpg/jpeg 파일만 첨부 가능</span></li>
                           <li><span>※ 미리보기 화면에 업로드된 이미지 클릭시 삭제</span></li>
                        </ul>
                     </div>
                     <div class="btn_upload">
                        <h1><img src="../images/common/addbox_icon.png" alt="">버튼 추가</h1>
                        <ul>
                           <li>
                              <a href="" class="add_btn">버튼 생성하기</a>
                           </li>
                           <li><span>※ 버튼 최대 3개 추가 가능</span></li>
                           <li><span>※ 미리보기 화면에 추가된 버튼 클릭시 삭제</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="msg_type_wrap">
                  <div class="title">
                     <h1><img src="../images/msg/msg_icon.png" alt="">메시지 유형 선택</h1>
                     <ul>
                     <li><a href="080_service.php" target="_blank">080 수신거부 서비스 신청</a></li>
                     </ul>
                  </div>
                  <div class="check_con mt10" id="msgSet01_wrap">
                     <input type="checkbox" name="" value="" id="msgSet01">
                     <label for="msgSet01"><span>선거메시지 전송</span></label>
                     <p>- <b>선거운동정보</b> + 후보자번호 + 불법수집 정보 신고 118 + <b>080번호</b> 삽입</p>
                  </div>
                  <div class="check_con mt20" id="msgSet02_wrap">
                     <input type="checkbox" name="" value="" id="msgSet02">
                     <label for="msgSet02"><span>광고메시지 전송</span></label>
                     <p>- <b>(광고) + 080번호</b> 자동 삽입</p>
                  </div>
                  <div class="check_con mt20">
                     <input type="checkbox" name="" value="" id="msgSet03">
                     <label for="msgSet03"><span>내 문자함에 자동 저장</span></label>
                     <p>- 메시지 관리 → <b>[나의 메시지]</b> 저장</p>
                  </div>
                  <div class="check_con mt20">
                     <input type="checkbox" name="" value="" id="msgSet04">
                     <label for="msgSet04"><span>실패시 대체문자 전송</span></label>
                     <p>- <b>RCS 전송 실패시</b>일반문자로 대체 전송</p>
                  </div>
               </div>
               <div class="msg_content return_write">
                  <div class="title">
                     <h1><img src="../images/msg/write_icon.png" alt="">대체문자 작성</h1>
                  </div>
                  <div class="msg_wbox">
                     <div class="msg_table">
                        <i>
                           <div class="msg_tit">
                              <input type="text" placeholder="제목 입력(20자 이내 / SMS인 경우 제목 전송불가)" maxlength="20">
                           </div>
                           <div class="msg_text sms">
                              <h1 class="type01 none">[선거운동정보]</h1>
                              <h1 class="type02 none">(광고)</h1>
                              <textarea name="" id="text_box2" placeholder="내용 입력
- 90Byte 초과시 LMS로 자동 전환
- LMS 전환시 최대 2000Byte 까지 입력 가능
- 이미지 업로드시 MMS로 자동 전환">20**년 **월 **일 귀하가 요청하신 수신거부가 정상처리되었습니다.(업체명)</textarea>
                              <h2 class="type01 none">홍길동<br>불법수집정보 신고 118<br>무료수신거부 0808718744</h2>
                              <h2 class="type02 none">무료수신거부 0808718744</h2>
                              <div class="t_byte">
                                 <b>71</b><span>/90Byte</span><h1 class="msg_t1">SMS 단문</h1><h1 class="msg_t2">LMS 장문</h1><h1 class="msg_t3">MMS 이미지</h1>
                              </div>
                           </div>
                        </i>
                        <div class="btn_box">
                           <ul>
                              <li><a href="" class="myMsg">메시지 불러오기</a></li>
                              <li><a href="" class="recMsg">전송내역 불러오기</a></li>
                              <li><a href="">내용저장</a></li>
                              <li><a href="" id="return_btn2">다시쓰기</a></li>
                              <li><a href="" class="action_btn sh_btn2">특수문자</a></li>
                              <li><a href="" class="action_btn variable_btn2">#{변수}</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="img_upload">
                        <h1><img src="../images/common/addbox_icon.png" alt="">이미지 업로드</h1>
                        <ul>
                           <li>
                              <dl>
                                 <dd><p></p></dd>
                                 <dd><p></p></dd>
                                 <dd><p></p></dd>
                              </dl>
                           </li>
                           <li><span>※ 이미지는 최대 3장, jpg/jpeg 파일만 첨부 가능</span></li>
                           <li><span>※ 미리보기 화면에 업로드된 이미지 클릭시 삭제</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="rec_wrap">
                  <div class="title">
                     <h1><img src="../images/msg/callback_icon.png" alt="">수신번호 입력</h1>
                     <span>엑셀에서 복사해오기
                     <b>
                        <img src="../images/common/info_icon.png" alt="">
                        <div class="info_popup">
                           <span>엑셀파일에서 해당열 복사 후<br>전화번호/이름 입력란에 붙여넣기 가능</span>
                        </div>
                     </b>
                     </span>
                  </div>
                  <div class="rec_box">
                     <div class="rec_con">
                        <div class="rec_top">
                           <ul>
                              <li>전화번호</li>
                              <li>이름</li>
                           </ul>
                        </div>
                        <div class="rec_text">
                           <div class="rec_notice">
                              <p>· 이름입력 : 띄어쓰기</p>
                              <p>· 다음열 입력 : Enter</p>
                              <p></p>
                              <p>&nbsp;<b>인원확인</b> 버튼을 누르시면</p>
                              <p>&nbsp;각자리에 맞게 배열이 됩니다.</p>
                           </div>
                           <ul class="text_line">
                              <li></li>
                              <li></li>
                           </ul>
                           <textarea name=""></textarea>
                        </div>
                        <div class="rec_ft">
                        <span>총 인원 <b>0</b> 명</span>
                           <a href="#">인원확인</a>
                        </div>
                     </div>
                     <div class="btn_box">
                        <ul>
                           <li><a href="address_loader.php" onclick="window.open(this.href, '', 'left=440, top=150, width=1030, height=680'); return false;">주소록 불러오기</a></li>
                           <li><a href="excel_loader.php" onclick="window.open(this.href, '', 'left=540, top=150, width=810, height=635'); return false;">엑셀파일 불러오기</a></li>
                           <li><a href="#">주소록에 저장</a></li>
                           <li><a href="#">전체목록 삭제</a></li>
                           <li><a href="#">중복번호 제거</a></li>
                           <li><a href="#">번호오류 제거</a></li>
                        </ul>
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
                        <span>01012345678</span>
                     </div>
                     <div class="msg_view">
                        <div class="image_preview"><img id="img"/></div>
                        <div class="msg_view_text">
                           <h1 class="msg_title"></h1>
                           <h1 class="ads01 refusal_none">[선거운동정보]</h1>
                           <h1 class="ads02 refusal_none">(광고)</h1>
                           <span>20**년 **월 **일 귀하가 요청하신 수신거부가 정상처리되었습니다.(업체명)</span>
                           <h2 class="ads01 refusal_none">홍길동<br>불법수집정보 신고 118<br>무료수신거부 0808718744</h2>
                           <h2 class="ads02 refusal_none">무료수신거부 0808718744</h2>
                           <div class="btn_view"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <h1>* 기종에 따라 다르게 보일 수 있습니다.</h1>
            </div>
         </div>
         <div class="msg_bottom">
            <div class="title">
               <h1><img src="../images/msg/clock_icon.png" alt="">전송 시간</h1>
            </div>
            <div class="msg_bottom_box">
               <div class="send_time_wrap">
                  <div class="radio_con">
                     <ul>
                     <li>
                        <input type="radio" name="opt" value="" id="sType_01" class="opt" checked="">
                        <label for="sType_01"><span>즉시전송</span></label>
                     </li>
                     <li>
                        <input type="radio" name="opt" id="sType_02" class="opt" value="">
                        <label for="sType_02"><span>예약전송</span></label>
                     </li>
                     <li>
                        <input type="radio" name="opt" id="sType_03" class="opt" value="">
                        <label for="sType_03"><span>반복예약</span></label>
                     </li>
                     </ul>
                  </div>
                  <div class="reserve_con ads01">
                     <span>※ 공용 080 사용 시 <b class="t_red">예약 불가</b></span>
                  </div>
                  <div class="reserve_con" id="reserveLayer01">
                     <span><img src="../images/common/arrow_tit.png" alt="">예약날짜 선택<b class="t_gray">(전송 30분이내 예약취소 불가능)</b></span>
                     <span class="mt10">
                        <i class="date_input"><input type="text" value="2022-12-30"></i>
                        <i class="time_input"><input type="text" value="오전 07:00"></i>
                     </span>
                  </div>
                  <div class="reserve_con" id="reserveLayer02">
                     <span><img src="../images/common/arrow_tit.png" alt="">예약시간 : <h1>매년 12월 28일 10시 48분</h1></span>
                     <span class="mt5"><img src="../images/common/arrow_tit.png" alt="">반복기간 : <h1>2021-12-29 ~ 2021-12-29</h1></span>
                  </div>
                  <div class="repeatSetLayer">
                     <div class="repeatSetLayer_top">
                     <h1>반복예약</h1>
                     <a href="" class="repeatSetLayer_close"><img src="../images/common/close_icon02.png" alt=""></a>
                     </div>
                     <div class="repeatSetLayer_con">
                     <p><span>반복명칭</span><input type="text"></p>
                     <p><span>기준선택</span><input type="radio" name="reserType01" id="reserType01" class="opt02" checked=""><label for="reserType01">매년</label><input type="radio" name="reserType02" id="reserType02" class="opt02"><label for="reserType02">매월</label><input type="radio" name="reserType03" id="reserType03" class="opt02"><label for="reserType03">매주</label></p>
                     <p class="reserTypeCon on" id="reserTypeCon01"><span>예약시간</span><i class="date_input"><input type="text" value="2022-12-30"></i><i class="time_input"><input type="text" value="오전 07:00"></i></p>
                     <p class="reserTypeCon" id="reserTypeCon02">
                        <span>예약시간</span>
                        <select name="repeat_day" id="repeat_day">
                           <option value="01">01일</option>
                           <option value="02">02일</option>
                           <option value="03">03일</option>
                           <option value="04">04일</option>
                           <option value="05">05일</option>
                           <option value="06">06일</option>
                           <option value="07">07일</option>
                           <option value="08">08일</option>
                           <option value="09">09일</option>
                           <option value="10">10일</option>
                           <option value="11">11일</option>
                           <option value="12">12일</option>
                           <option value="13">13일</option>
                           <option value="14">14일</option>
                           <option value="15">15일</option>
                           <option value="16">16일</option>
                           <option value="17">17일</option>
                           <option value="18">18일</option>
                           <option value="19">19일</option>
                           <option value="20">20일</option>
                           <option value="21">21일</option>
                           <option value="22">22일</option>
                           <option value="23">23일</option>
                           <option value="24">24일</option>
                           <option value="25">25일</option>
                           <option value="26">26일</option>
                           <option value="27">27일</option>
                           <option value="28">28일</option>
                           <option value="29" selected="">29일</option>
                           <option value="30">30일</option>
                           <option value="31">31일</option>
                        </select>
                        <i class="time_input"><input type="text" value="오전 07:00"></i>
                     </p>
                     <p class="reserTypeCon" id="reserTypeCon03">
                        <span>예약시간</span>
                        <select name="repeat_week" id="repeat_week" style="width:80px;">
                           <option value="0">일요일</option>
                           <option value="1">월요일</option>
                           <option value="2">화요일</option>
                           <option value="3" selected="">수요일</option>
                           <option value="4">목요일</option>
                           <option value="5">금요일</option>
                           <option value="6">토요일</option>
                        </select>
                        <i class="time_input"><input type="text" value="오전 07:00"></i>
                     </p>
                     <p><span>반복기간</span><i class="date_input"><input type="text" value="2022-12-30"></i><b>-</b><i class="date_input"><input type="text" value="2022-12-30"></i></p>
                     <h1>(매월/매년 : 최대 3년, 매주 : 최대 34개월)</h1>
                     </div>
                     <div class="repeatSetLayer_btn">
                     <a href="" class="repeatSetLayer_close">선택완료</a>
                     </div>
                  </div>
               </div>
               <div class="send_box">
                  <a href="" id="send_btn">전송하기</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>