<!DOCTYPE html>
<html lang="en" style="min-width:660px; max-width:660px;">
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
<body style="min-width:660px; max-width:660px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>예약내역 수정하기(일반문자)</h1>
      </div>
      <div class="popup_content">
         <div class="detail_top" style="border-bottom: 1px dashed #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <div class="detail_con">
               <div class="detail_list">
                  <ul>
                     <li><span><strong>회신번호</strong></span><input type="text" value="01012345678"></li>
                     <li>
                        <span><strong>예약일시</strong></span>
                        <input type="text" value="2021-06-11">
                        <a href=""><img src="../images/msg/calendar_icon.png" alt=""></a>
                        <select name="reserve_hour" id="reserve_hour">
                           <option value="00">00시</option>
                           <option value="01">01시</option>
                           <option value="02">02시</option>
                           <option value="03">03시</option>
                           <option value="04">04시</option>
                           <option value="05">05시</option>
                           <option value="06">06시</option>
                           <option value="07">07시</option>
                           <option value="08">08시</option>
                           <option value="09">09시</option>
                           <option value="10">10시</option>
                           <option value="11">11시</option>
                           <option value="12">12시</option>
                           <option value="13">13시</option>
                           <option value="14">14시</option>
                           <option value="15">15시</option>
                           <option value="16">16시</option>
                           <option value="17">17시</option>
                           <option value="18" selected="">18시</option>
                           <option value="19">19시</option>
                           <option value="20">20시</option>
                           <option value="21">21시</option>
                           <option value="22">22시</option>
                           <option value="23">23시</option>
                         </select>
                         <select name="reserve_minute" id="reserve_minute" style="width:60px;">
                           <option value="00" selected="">00분</option>
                           <option value="01">01분</option>
                           <option value="02">02분</option>
                           <option value="03">03분</option>
                           <option value="04">04분</option>
                           <option value="05">05분</option>
                           <option value="06">06분</option>
                           <option value="07">07분</option>
                           <option value="08">08분</option>
                           <option value="09">09분</option>
                           <option value="10">10분</option>
                           <option value="11">11분</option>
                           <option value="12">12분</option>
                           <option value="13">13분</option>
                           <option value="14">14분</option>
                           <option value="15">15분</option>
                           <option value="16">16분</option>
                           <option value="17">17분</option>
                           <option value="18">18분</option>
                           <option value="19">19분</option>
                           <option value="20">20분</option>
                           <option value="21">21분</option>
                           <option value="22">22분</option>
                           <option value="23">23분</option>
                           <option value="24">24분</option>
                           <option value="25">25분</option>
                           <option value="26">26분</option>
                           <option value="27">27분</option>
                           <option value="28">28분</option>
                           <option value="29">29분</option>
                           <option value="30">30분</option>
                           <option value="31">31분</option>
                           <option value="32">32분</option>
                           <option value="33">33분</option>
                           <option value="34">34분</option>
                           <option value="35">35분</option>
                           <option value="36">36분</option>
                           <option value="37">37분</option>
                           <option value="38">38분</option>
                           <option value="39">39분</option>
                           <option value="40">40분</option>
                           <option value="41">41분</option>
                           <option value="42">42분</option>
                           <option value="43">43분</option>
                           <option value="44">44분</option>
                           <option value="45">45분</option>
                           <option value="46">46분</option>
                           <option value="47">47분</option>
                           <option value="48">48분</option>
                           <option value="49">49분</option>
                           <option value="50">50분</option>
                           <option value="51">51분</option>
                           <option value="52">52분</option>
                           <option value="53">53분</option>
                           <option value="54">54분</option>
                           <option value="55">55분</option>
                           <option value="56">56분</option>
                           <option value="57">57분</option>
                           <option value="58">58분</option>
                           <option value="59">59분</option>
                         </select>
                     </li>
                  </ul>
               </div>
               <div class="reserve_notice" style="height:110px;">
                  <ul>
                     <li>- <strong>예약시간 30분 전</strong> 예약내용/회신번호/예약시간을 수정하실 수 있습니다.</li>
                     <li>- <span class="t_blue">예약된 수신번호 수정은 불가하오니, 예약 취소 후 재예약</span>하시기 바랍니다.</li>
                  </ul>
               </div>
            </div>
            <div class="detail_phone">
               <div class="d_byte">
                  <b>86</b><span>/90Byte</span>
               </div>
               <div class="detail_text">
                  <textarea name="msg">(광고)짧아서아쉬운2월!따뜻하고희망찬일만가득하시고웃을일만가득한행복한한달되시길바래요</textarea>
               </div>
            </div>
         </div>
         <div class="pop_btn">
            <input type="button" value="수정완료">
            <input type="button" value="취소" onclick="window.close();">
        </div>
      </div>
   </div>
</body>
</html>