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
               <li><a href="msg_transmit.php">전송내역 관리</a></li>
               <li class="this"><a href="stat_manage.php">전송내역 통계</a></li>
            </ul>
         </div>
         <div class="stat_box">
            <div class="selbox_top mt20">
               <p>
                  <a href="stat_manage.php" class="bl4">포인트 사용내역 보기</a>
                  <a href="stat_manage=point.php" class="bl4">포인트 충전내역 보기</a>
                  <a href="stat_manage=number.php" class="btn2">전송건수 보기</a>
               </p>
               <p>
                  <select name="" id="">
                     <option value="">일반문자</option>
                     <option value="">RCS문자</option>
                  </select>
                  <select name="" id="">
                     <option value="">2022년</option>
                     <option value="">2021년</option>
                     <option value="">2020년</option>
                  </select>
                  <select name="" id="">
                     <option value="">1월</option>
                     <option value="">2월</option>
                     <option value="">3월</option>
                     <option value="">4월</option>
                     <option value="">5월</option>
                     <option value="">6월</option>
                     <option value="">7월</option>
                     <option value="">8월</option>
                     <option value="">9월</option>
                     <option value="">10월</option>
                     <option value="">11월</option>
                     <option value="">12월</option>
                  </select>
                  <input type="button" value="보기" class="btn2">
               </p>
            </div>
            <div class="selbox_top">
               <h1>전송 건수 통계 : <span>일반문자</span></h1>
            </div>
            <table cellpadding="0" cellspacing="0">
               <colgroup>
                  <col width="">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
                  <col width="90">
               </colgroup>
               <thead>
                  <tr>
                     <th rowspan="2">날짜</th>
                     <th colspan="3">총 전송 건</th>
                     <th colspan="3">성공 건</th>
                     <th colspan="3">실패 건</th>
                  </tr>
                  <tr>
                     <th>SMS</th><th>LMS</th><th>MMS</th>
                     <th>SMS</th><th>LMS</th><th>MMS</th>
                     <th>SMS</th><th>LMS</th><th>MMS</th>
                  </tr>
               </thead>
               <!-- <tbody>
                  <tr>
                     <td colspan="10" style="height: 300px;">등록된 내용이 없습니다.</td>
                  </tr>
               </tbody> -->
               <tbody>
                  <tr>
                     <td>2022년 1월 1일</td>
                     <td>132</td> 
                     <td>13,026</td> 
                     <td>0</td>
                     <td>131</td> 
                     <td>12,800</td> 
                     <td>0</td>
                     <td>1</td> 
                     <td>226</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 2일</td>
                     <td>156</td> 
                     <td>10,647</td> 
                     <td>0</td>
                     <td>156</td> 
                     <td>10,497</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>150</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 3일</td>
                     <td>152</td> 
                     <td>17,670</td> 
                     <td>0</td>
                     <td>152</td> 
                     <td>17,386</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>284</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 4일</td>
                     <td>142</td> 
                     <td>13,574</td> 
                     <td>0</td>
                     <td>142</td> 
                     <td>13,347</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>227</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 5일</td>
                     <td>36</td> 
                     <td>5,892</td> 
                     <td>0</td>
                     <td>36</td> 
                     <td>5,762</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>130</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 6일</td>
                     <td>79</td> 
                     <td>734</td> 
                     <td>0</td>
                     <td>79</td> 
                     <td>724</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>10</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 7일</td>
                     <td>169</td> 
                     <td>7,318</td> 
                     <td>0</td>
                     <td>169</td> 
                     <td>7,204</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>114</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 8일</td>
                     <td>156</td> 
                     <td>11,139</td> 
                     <td>0</td>
                     <td>156</td> 
                     <td>10,899</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>240</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 9일</td>
                     <td>175</td> 
                     <td>9,784</td> 
                     <td>0</td>
                     <td>175</td> 
                     <td>9,642</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>142</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 10일</td>
                     <td>147</td> 
                     <td>8,226</td> 
                     <td>0</td>
                     <td>147</td> 
                     <td>8,053</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>173</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 11일</td>
                     <td>320</td> 
                     <td>8,803</td> 
                     <td>0</td>
                     <td>320</td> 
                     <td>8,626</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>177</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 12일</td>
                     <td>20</td> 
                     <td>5,392</td> 
                     <td>0</td>
                     <td>19</td> 
                     <td>5,241</td> 
                     <td>0</td>
                     <td>1</td> 
                     <td>151</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 13일</td>
                     <td>34</td> 
                     <td>836</td> 
                     <td>0</td>
                     <td>34</td> 
                     <td>809</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>27</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 14일</td>
                     <td>199</td> 
                     <td>2,789</td> 
                     <td>0</td>
                     <td>199</td> 
                     <td>2,753</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>36</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 15일</td>
                     <td>260</td> 
                     <td>12,073</td> 
                     <td>0</td>
                     <td>260</td> 
                     <td>11,654</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>419</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 16일</td>
                     <td>191</td> 
                     <td>8,460</td> 
                     <td>0</td>
                     <td>191</td> 
                     <td>8,306</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>154</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 17일</td>
                     <td>191</td> 
                     <td>8,966</td> 
                     <td>0</td>
                     <td>191</td> 
                     <td>8,776</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>190</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 18일</td>
                     <td>124</td> 
                     <td>8,641</td> 
                     <td>0</td>
                     <td>124</td> 
                     <td>8,461</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>180</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 19일</td>
                     <td>35</td> 
                     <td>5,533</td> 
                     <td>0</td>
                     <td>35</td> 
                     <td>5,405</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>128</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 20일</td>
                     <td>23</td> 
                     <td>292</td> 
                     <td>0</td>
                     <td>23</td> 
                     <td>289</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>3</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 21일</td>
                     <td>178</td> 
                     <td>2,518</td> 
                     <td>0</td>
                     <td>178</td> 
                     <td>2,486</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>32</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 22일</td>
                     <td>165</td> 
                     <td>9,677</td> 
                     <td>0</td>
                     <td>164</td> 
                     <td>9,512</td> 
                     <td>0</td>
                     <td>1</td> 
                     <td>165</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 23일</td>
                     <td>175</td> 
                     <td>8,533</td> 
                     <td>0</td>
                     <td>175</td> 
                     <td>8,388</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>145</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 24일</td>
                     <td>177</td> 
                     <td>7,962</td> 
                     <td>0</td>
                     <td>177</td> 
                     <td>7,815</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>147</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 25일</td>
                     <td>179</td> 
                     <td>7,843</td> 
                     <td>0</td>
                     <td>179</td> 
                     <td>7,647</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>196</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 26일</td>
                     <td>31</td> 
                     <td>6,569</td> 
                     <td>0</td>
                     <td>30</td> 
                     <td>6,442</td> 
                     <td>0</td>
                     <td>1</td> 
                     <td>127</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 27일</td>
                     <td>36</td> 
                     <td>540</td> 
                     <td>0</td>
                     <td>36</td> 
                     <td>535</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>5</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 28일</td>
                     <td>224</td> 
                     <td>2,448</td> 
                     <td>0</td>
                     <td>224</td> 
                     <td>2,401</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>47</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 29일</td>
                     <td>292</td> 
                     <td>10,049</td> 
                     <td>0</td>
                     <td>292</td> 
                     <td>9,832</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>217</td> 
                     <td>0</td>
                  </tr>
                  <tr>
                     <td>2022년 1월 30일</td>
                     <td>171</td> 
                     <td>6,902</td> 
                     <td>0</td>
                     <td>171</td> 
                     <td>6,792</td> 
                     <td>0</td>
                     <td>0</td> 
                     <td>110</td> 
                     <td>0</td>
                  </tr>
               </tbody>
               <thead class="thead_bottom">
                  <tr>
                     <th>합계</th>
                     <th colspan="3">227,205 건</th>
                     <th colspan="3">222,849 건</th>
                     <th colspan="3">4,356 건</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>