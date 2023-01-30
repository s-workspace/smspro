<!DOCTYPE html>
<html lang="en" style="min-width: 810px; max-width: 810px;">
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
<script>
   $(function(){
      // 엑셀파일 불러오기
      $(".excel_table td").on("click",function(){
         $(".excel_table td").removeClass("fill");
         $(".excel_table td").siblings().removeClass("cell_on");
         $(".excel_table td").siblings().css("box-shadow", "none");
         $(this).addClass("cell_on");
         $(this).siblings().addClass("fill");
      });
      // 엑셀파일 불러오기 끝
   });
</script>
<body style="min-width: 810px; max-width: 810px;">
   <div class="popup_wrap">
      <div class="popup_title">
         <h1>엑셀파일 불러오기</h1>
      </div>
      <div class="popup_info">
         <ul>
            <li><strong>Active X <b>비설치 방식</b></strong>으로 모든 운영체제 호환</li>
            <li>엑셀(xls, xlsx, csv 등 모든파일)로 저장된 전화번호, 이름을 쉽게 전송목록으로 보낼 수 있습니다.</li>
            <li>전화번호 열에서 앞 <strong>0이 빠진 경우</strong>는 전송목록으로 보내기를 누르시면 <strong>자동으로 0이 추가</strong>됩니다.</li>
         </ul>
      </div>
      <div class="excel_popup">
         <div class="excel_table">
            <table>
            <colgroup>
               <col width="50">
               <col width="115">
               <col width="115">
               <col width="115">
               <col width="115">
               <col width="115">
            </colgroup>
            <thead>
               <tr>
               <th style="min-width: 50px;">&nbsp;</th>
               <th>A</th>
               <th>B</th>
               <th>C</th>
               <th>D</th>
               <th>E</th>
               </tr>
            </thead>
            <tbody>
               <tr>
               <th>1</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr><tr>
               <th>2</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>3</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>4</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>5</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>6</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>7</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>8</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>9</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>10</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>11</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>12</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>13</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>14</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>15</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>16</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>17</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>18</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>19</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>20</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>21</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>22</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>23</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>24</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>25</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>26</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>27</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>28</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>29</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>30</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>31</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>32</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>33</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>34</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
               <tr>
               <th>35</th>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               </tr>
            </tbody>
            </table>
         </div>
         <div class="excel_btn">
            <input type="button" value="엑셀파일 열기">
            <ul>
               <li>
                  <span><img src="../images/common/r_arrow.png" alt="">엑셀 시트 선택</span>
                  <select id="select_sheet" name="sheet_default">
                     <option value="undefined">엑셀시트 선택</option>
                  </select>
               </li>
               <li>
                  <span><img src="../images/common/r_arrow.png" alt="">전화번호 열 선택</span>
                  <select id="phonenum_select" name="sheet_default"><option value="undefined">전화번호 열 선택</option><option value="0">A</option><option value="1">B</option><option value="2">C</option><option value="3">D</option><option value="4">E</option></select>
               </li>
               <li>
                  <span><img src="../images/common/r_arrow.png" alt="">이름 열 선택</span>
                  <select id="name_select" name="sheet_default"><option value="undefiend">이름 열 선택</option><option value="0">A</option><option value="1">B</option><option value="2">C</option><option value="3">D</option><option value="4">E</option></select>
               </li>
            </ul>
            <a href="">전송목록으로 보내기</a>
         </div>
      </div>
   </div>
</body>
</html>