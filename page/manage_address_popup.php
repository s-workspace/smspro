<!DOCTYPE html>
<html lang="en" style="min-width:750px; max-width:750px;">
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
<body style="min-width:750px; max-width:750px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>주소록 대량 입력</h1>
      </div>
      <div class="popup_content">
         <div class="popup_search_box">
            <span><strong>그룹선택 : </strong></span>
            <select name="group1" id="group1">
            <option value="">그룹 선택</option>
            <option value="0001">가족</option>
            <option value="0005">기타</option>
            <option value="0004">업체</option>
            <option value="0003">직장</option>
            <option value="0002">친구</option>
            </select>
            <select name="group2" id="group2">
            <option value="">상세그룹</option>
            </select>
         </div>
      <div class="popup_address_register">
        <table cellspacing="0" cellpadding="0" border="0">
          <colgroup>
            <col width="128">
            <col width="100">
            <col width="120">
            <col width="120">
            <col width="120">
            <col width="120">
          </colgroup>
          <thead>
            <tr>
              <th>전화번호</th>
              <th>이름</th>
              <th>메모1</th>
              <th>메모2</th>
              <th>메모3</th>
              <th>메모4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="6" class="manage_address_text">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <textarea></textarea>
            </td>
            </tr>
            <tr>
              <td colspan="6" class="manage_address_bottom">
                <ul>
                   <li>
                     <a href="#">전체목록 삭제</a>
                  </li>
                  <li>
                     <span>총 인원 : <span class="t_red">0</span> 명</span>
                     <a href="">인원확인</a>
                  </li>
                </ul>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="manage_address_notice">
          - <span><strong>전화번호</strong>는 필수 입력 사항 입니다.</span><br>
          - 전화번호 작성 후 이름은 띄어쓰기로 작성해 주시고, 이름과 메모1, 메모2는 콤마(,)로 구분 후에 [인원확인] 버튼을 누르시면<br>
          &nbsp; 각 위치에 맞게 작성이 됩니다. 예) 01012345478 홍길동 , 메모1 , 메모2
        </div>
        <div class="pop_btn">
          <input type="button" value="저장하기">
          <input type="button" value="취소" onclick="window.close();">
        </div>
      </div>
   </div>
</body>
</html>