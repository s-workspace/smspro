<!DOCTYPE html>
<html lang="en" style="min-width:490px; max-width:490px;">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content active="IE=edge">
   <meta name="viewport" content active="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/common.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<body style="min-width:490px; max-width:490px;">
<script src="../javascript/script.js"></script>
  <div class="popup_container">
    <div class="address_title">
      <img src="../images/address/title_search.gif" alt="주소 및 우편번호 찾기">
    </div>
    <div class="address_search_box">
      <input type="hidden" name="page" value="">
      <input type="hidden" name="iform1" value="">
      <input type="hidden" name="iform2" value="">
      <input type="hidden" name="iform3" value="">
      <input type="hidden" name="iform4" value="">
      <div class="search_box">
        <input type="text" id="keyword" name="keyword" value="" class="address_input address_input_bg" style="background-color:#fff;">
        <input type="image" src="../images/address/btn_search.gif" alt="찾아보기">
      </div>
      <div class="tip_content">
        <ul>
          <li class=""><img src="../images/address/icon_tip.gif" alt="주소 검색 Tip : 도로명, 건물명, 지번에 대해 통합검색이 가능합니다."></li>
          <li class="none">
            <span>검색결과가 많습니다. <b>'도로명+건물번호'</b> 또는 <b>'지역명+지번'</b> 으로<br>
            검색하면, 보다 정확한 결과를 확인하실 수 있습니다.
          </span>
          </li>
          <li class="tip_list none">아래 주소를 클릭해 주세요.</li>
        </ul>
      </div>
    </div>
    <div class="address_search_result">
      <div class="no_result">
        <strong>검색어를 입력하세요!</strong>
        <br><br>
        <span>'도로명+건물번호' 또는 '지역명+지번'으로<br>검색하면, 보다 정확한 결과를 확인하실 수 있습니다.</span>
      </div>
      <div class="search_result_list none">
         <ul>
            <li><span id="section_num_0" class="post_red">61925</span></li>
            <li>
               <dl>
                  <dt><img src="../images/address/icon_roadname.gif" alt="도로명 주소"></dt>
                  <dd><span id="street_addr_0">광주광역시 서구 천변좌로 268 (양동)</span></dd>
               </dl>
            </li>
            <li style="color: #888;"><img src="../images/address/icon_areaname.gif" alt="지번 주소"><span id="jibun_addr_0">광주광역시 서구 양동 60-37 케이디비생명보험(주)</span></li>
         </ul>
      </div>
      <div class="search_result_list last_reuslt none">
         <ul>
            <li><span id="section_num_0" class="post_red">61925</span></li>
            <li>
               <dl>
                  <dt><img src="../images/address/icon_roadname.gif" alt="도로명 주소"></dt>
                  <dd><span id="street_addr_0">광주광역시 서구 천변좌로 268 (양동)</span></dd>
               </dl>
            </li>
            <li style="color: #888;"><img src="../images/address/icon_areaname.gif" alt="지번 주소"><span id="jibun_addr_0">광주광역시 서구 양동 60-37 케이디비생명보험(주)</span></li>
         </ul>
      </div>
   </div>
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
</body>
</html>
