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
               <li class="this"><a href="">문의하기</a></li>
            </ul>
         </div>
         <div class="selbox_top mt20">
            <p></p>
            <p>
               <select name="" id="">
                  <option value="">제목</option>
                  <option value="">내용</option>
                  <option value="">답변</option>
               </select>
               <input type="text">
               <input type="button" value="검색" class="btn2">
               <a href="inquiry=write.php" class="bl3">문의하기</a>
            </p>
         </div>
         <div class="inq_wrap">
            <ul>
               <!-- <li class="list_none">등록된 내용이 없습니다.</li> -->
               <li><span><b>필독</b></span><i><a href="inquiry=view.php"><strong>문자전송 결과확인 및 실패보상 안내</strong></a></i><h1>관리자</h1><strong>2022-11-01</strong><h3></h3></li>
               <li><span>10</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_n">답변대기</b></h3></li>
               <li><span>9</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>8</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>7</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>6</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>5</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>4</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>3</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>2</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
               <li><span>1</span><i><a href="">2022년 10월분 세금계산서 발행마감 안내(~11/10)</a></i><h2>김**</h2><strong>2022-11-01</strong><h3><b class="inq_y">답변완료</b></h3></li>
            </ul>
         </div>
         <div class="page">
            <ul>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M9.312 14.604 4.688 10l4.624-4.604.709.708L6.125 10l3.896 3.896Zm5.271 0L9.979 10l4.604-4.604.729.708L11.396 10l3.916 3.896Z"></path></svg></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M11.979 14.604 7.375 10l4.604-4.604.709.708L8.812 10l3.876 3.896Z"></path></svg></a></li>
               <li class="this"><a href=""><span>1</span></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m8.021 14.604-.709-.708L11.188 10 7.312 6.104l.709-.708L12.625 10Z"></path></svg></a></li>
               <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m5.417 14.604-.729-.708L8.604 10 4.688 6.104l.729-.708L10.021 10Zm5.271 0-.709-.708L13.875 10 9.979 6.104l.709-.708L15.312 10Z"></path></svg></a></li>
            </ul>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>