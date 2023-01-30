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
               <li><a href="template_create.php">템플릿 등록</a></li>
               <li class="this"><a href="template_list.php">템플릿 목록</a></li>
            </ul>
         </div>
         <div class="template_list_view mt20">
            <div class="template_list_top">
               <i>
                  <select name="" id="">
                     <option value="">브랜드 선택</option>
                     <option value="">브랜드1</option>
                  </select>
                  <select name="" id="">
                     <option value="">상태(전체)</option>
                     <option value="">저장</option>
                     <option value="">반려</option>
                     <option value="">승인대기</option>
                     <option value="">승인완료</option>
                     <option value="">처리중</option>
                     <option value="">처리중(삭제)</option>
                  </select>
               </i>
               <i>
                  <select name="" id="">
                     <option value="">템플릿명</option>
                     <option value="">내용</option>
                  </select>
                  <input type="text">
                  <input type="button" value="검색">
               </i>
            </div>
            <div class="template_table">
               <table>
                  <colgroup>
                     <col width="150">
                     <col width="240">
                     <col width="160">
                     <col width="160">
                     <col width="120">
                     <col width="80">
                     <col width="80">
                  </colgroup>
                  <thead>
                     <tr>
                        <th>등록일</th>
                        <th>템플릿명</th>
                        <th>템플릿유형</th>
                        <th>옵션</th>
                        <th>상태</th>
                        <th>등록자</th>
                        <th>관리</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td colspan="6" style="height: 200px;" class="none">등록된 템플릿이 없습니다.</td>
                     </tr>
                     <tr>
                        <td>2022-12-27</td>
                        <td><a href="template_list=view.php">프리 템플릿(자동생성)</a></td>
                        <td>타이틀 선택형</td>
                        <td>기본(free)</td>
                        <td>-</td>
                        <td>관리자</td>
                        <td>-</td>
                     </tr>
                     <tr>
                        <td>2022-12-27</td>
                        <td><a href="template_list=view2.php">프리 템플릿</a></td>
                        <td>타이틀 자유형</td>
                        <td>기본(free)</td>
                        <td>-</td>
                        <td>관리자</td>
                        <td>-</td>
                     </tr>
                     <tr>
                        <td>2022-12-27</td>
                        <td><a href="template_list=view3.php">회원가입 안내</a></td>
                        <td>타이틀 선택형</td>
                        <td>서술(description)</td>
                        <td><span class="t_blue">승인완료</span></td>
                        <td>관리자</td>
                        <td><input type="button" value="삭제" class="btn2"></input></td>
                     </tr>
                     <tr>
                        <td>2022-12-27</td>
                        <td><a href="template_list=view4.php">입금확인 안내</a></td>
                        <td>타이틀 선택형</td>
                        <td>스타일(cell)</td>
                        <td><span>승인대기</span></td>
                        <td>관리자</td>
                        <td>-</td>
                     </tr>
                  </tbody>
               </table>
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
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>