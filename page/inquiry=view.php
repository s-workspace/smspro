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
                <col width="80px">
                <col width="80px">
              </colgroup>
              <tbody>
                <tr>
                  <th>제목</th>
                  <td>문자전송 결과확인 및 실패보상 안내</td>
                  <th>작성자</th>
                  <td>관리자</td>
                </tr>
                <tr>
                  <td colspan="4" class="view_content">
                    <pre>
                     %%%%%% 문자메세지 전송결과 및 실패보상 안내 %%%%%
   
                      1. [문자대량전송] 페이지에서 개인의 주소록 또는 자료를 등록하신후 메세지를 작성하여 문자전송을 합니다.
   
                      2. 문자전송후 [전송내역보기]에서 발송메세지의 성공/실패 여부를 확인하셔야 합니다.
   
                      3. 전송내역관리 페이지에서 상세보기(돋보기 아이콘)을 누르시면 함께 발송된 전화번호별 전송 성공/실패 여부를 확인 하실 수 있습니다. 또한 해당 페이지 로딩 완료와 동시에 실패건에 대한 보상이 이루어져 회원님의 결제콜로 실패건수 만큼 추가 됩니다.
   
                      4. 전송내역상세보기 페이지를 보시면 각 성공/실패 전화번호를 다시 주소록에 저장하시거나 엑셀로 저장이 가능합니다.
   
                      ※ 이동통신사에서 보내주는 결과값은 최장 48시간까지 걸릴수 있는 부분으로, 문자모아에서는 다음날 자동으로 보상처리를 해드리지 않고 회원님들께서 언제든지 확인하시면서 실패값을 보상받으시는 방식을 택하고 있습니다.
   
                      문자메세지 전송 및 기타 사용법에 문의 있으시면 언제든지 고객센터로 전화 주시기 바랍니다.
   
                      감사합니다.</pre>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="sub_bottom">
              <a href="inquiry.php" class="btn2">목록보기</a>
              <a href="" class="bl4">삭제하기</a>
            </div>
          </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>