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
               <li class="this"><a href="inquiry.php">문의하기</a></li>
            </ul>
         </div>
         <div class="view_table">
            <p>※ 질문 후 연락처를 남겨주시면 더욱 빠르게 답변을 받으실 수 있습니다.</p>
            <table>
              <colgroup>
                <col width="80px">
                <col width="">
              </colgroup>
              <tbody>
                <tr>
                  <th>제목</th>
                  <td><input type="text" name="" value=""></td>
                </tr>
                <tr>
                  <td colspan="2" class="view_content">
                    <textarea name="name" rows="8" cols="80"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="sub_bottom">
              <a href="" class="btn2">등록하기</a>
              <a href="inquiry.php" class="bl4">취소하기</a>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>