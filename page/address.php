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
<script>
   $(function(){
      $('#gr_add').click(function(e){
         e.preventDefault();
         $('.layer_cover').show();
         $('.Group_layer').fadeIn('300');
      });
   });
</script>
<body>
   <!-- 그룹 등록 레이어 -->
   <div class="Group_layer layer">
      <h1>그룹 등록</h1>
      <ul class="input_name_box">
         <li>
            <input type="text" id="group_name" name="group_name" placeholder="그룹명을 입력해 주세요.">
            <input type="button" value="추가">
         </li>
         <li>
            <select name="group1" id="group1">
            <option value="">그룹선택</option>
          </select>
            <input type="text" id="group_name" name="group_name" placeholder="하위 그룹명을 입력해 주세요.">
            <input type="button" value="추가">
         </li>
      </ul>
      <div class="layer_bottom ct">
         <a href="">저장</a>
         <a href="" class="layer_cancel">닫기</a>
      </div>
   </div>
   <!-- 그룹 등록 레이어 끝 -->

   <?php include 'admin_header.php'; ?>
   <?php include 'side_bar.php'; ?>
   <div class="container">
      <div class="wrap">
         <div class="title_top">
            <ul>
               <li class="this"><a href="">주소록 관리</a></li>
            </ul>
         </div>
         <div class="address_wrap">
            <div class="flex">
               <div class="group_list">
                  <div class="group_tit">
                     <h1>그룹 목록</h1>
                  </div>
                  <div class="group_top">
                     <i>
                        <select name="group1" id="group1Reg">
                           <option value="">그룹선택</option>
                           <option value="0001">가족</option>
                           <option value="0005">기타</option>
                           <option value="0004">업체</option>
                           <option value="0003">직장</option>
                           <option value="0002">친구</option>
                        </select>
                        <input type="text" placeholder="그룹명">
                        <input type="button" value="추가">
                     </i>
                     <span>※ 그룹은 총 50개까지 등록하실 수 있습니다.</span>
                  </div>
                  <div class="group_box_top">
                     <ul>
                        <li>그룹</li>
                        <li>관리</li>
                     </ul>
                  </div>
                  <div class="group_box">
                     <div class="group_box_tit">
                        <i>
                           <input type="checkbox" id="ChkAll">
                           <label for="ChkAll">전체<b>(1)</b></label>
                        </i>
                     </div>
                     <ul>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_open.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">가족<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li class="gl">
                           <i>
                              <span></span>
                              <input type="checkbox">
                              <label for="">가족01<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_modify04.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_delete02.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder_more.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">업체<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                        <li>
                           <i>
                              <a href=""><img src="../images/common/icon_folder.png" alt=""></a>
                              <input type="checkbox">
                              <label for="">기타<b>(1)</b></label>
                           </i>
                           <i>
                              <a href=""><img src="../images/common/icon_add.png" alt=""></a>
                              <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                           </i>
                        </li>
                     </ul>
                  </div>
                  <div class="group_bottom font_dt">
                     <i>
                        <a href="" id="AdRefusal_btn">수신거부번호<span>(0)</span></a>
                     </i>
                     <i>
                        <a href="manage_refusal_popup.php" onclick="window.open(this.href, '', 'left=700, top=200, width=340, height=500'); return false;"><img src="../images/common/icon_add.png" alt=""></a>
                        <a href=""><img src="../images/common/icon_number_down.png" alt=""></a>
                     </i>
                  </div>
                  <div class="group_list_bottom">
                     <i>
                        <a href="" id="gr_add">그룹등록</a>
                        <a href="">그룹삭제</a>
                        <a href="">엑셀저장</a>
                     </i>
                     <a href="">선택한 그룹을 전송리스트에 추가</a>
                  </div>
               </div>
               <div class="address_list">
                  <div class="address_tit">
                     <h1>연락처 목록</h1>
                     <i>
                        <a href="manage_address_popup.php" class="bl4" onclick="window.open(this.href, '', 'left=520, top=150, width=750, height=680'); return false;">주소록 대량 입력</a>
                        <a href="manage_excel_loader.php" class="bl3" onclick="window.open(this.href, '', 'left=520, top=150, width=810, height=690'); return false;">엑셀자료 일괄 입력</a>
                     </i>
                  </div>
                  <div class="address_top">
                     <i>
                        <select name="group_sel01" id="group_sel01">
                           <option value="">그룹선택</option>
                           <option value="0001">가족</option>
                           <option value="0005">기타</option>
                           <option value="0004">업체</option>
                           <option value="0003">직장</option>
                           <option value="0002">친구</option>
                        </select>
                        <select name="group_sel02" id="group_sel02">
                           <option value="">하위그룹</option>
                        </select>
                        <span>에</span>
                        <input type="text" name="" value="" placeholder="전화번호">
                        <input type="text" name="" value="" placeholder="이름">
                        <input type="button" value="빠른추가">
                     </i>
                     <div class="add_address_btn font_dt">
                        <ul>
                           <li class="this"><a href="#">전체</a></li>
                           <li><a href="#">ㄱ</a></li>
                           <li><a href="#">ㄴ</a></li>
                           <li><a href="#">ㄷ</a></li>
                           <li><a href="#">ㄹ</a></li>
                           <li><a href="#">ㅁ</a></li>
                           <li><a href="#">ㅂ</a></li>
                           <li><a href="#">ㅅ</a></li>
                           <li><a href="#">ㅇ</a></li>
                           <li><a href="#">ㅈ</a></li>
                           <li><a href="#">ㅊ</a></li>
                           <li><a href="#">ㅋ</a></li>
                           <li><a href="#">ㅌ</a></li>
                           <li><a href="#">ㅍ</a></li>
                           <li><a href="#">ㅎ</a></li>
                           <li><a href="#">A~Z</a></li>
                           <li><a href="#">0~9</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="address_box_tit AdList_tit">
                     <table>
                        <colgroup>
                           <col width="40">
                           <col width="105">
                           <col width="70">
                           <col width="90">
                           <col width="90">
                           <col width="90">
                           <col width="90">
                           <col width="70">
                        </colgroup>
                        <thead>
                           <th><input type="checkbox"></th>
                           <th>전화번호</th>
                           <th>이름</th>
                           <th>#{1}</th>
                           <th>#{2}</th>
                           <th>#{3}</th>
                           <th>#{4}</th>
                           <th>그룹</th>
                           <th>관리</th>
                        </thead>
                     </table>
                  </div>
                  <div class="address_box_tit AdRefusal_tit none">
                     <table>
                        <colgroup>
                           <col width="40">
                           <col width="200">
                           <col width="200">
                           <col width="200">
                           <col width="">
                        </colgroup>
                        <thead>
                           <tr>
                              <th><input type="checkbox"></th>
                              <th>수신거부번호</th>
                              <th>등록자</th>
                              <th>등록일시</th>
                              <th>삭제</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="AdList_table">
                     <div class="address_box">
                        <table>
                           <colgroup>
                              <col width="40">
                              <col width="105">
                              <col width="70">
                              <col width="90">
                              <col width="90">
                              <col width="90">
                              <col width="90">
                              <col width="70">
                           </colgroup>
                           <tbody>
                              <tr>
                                 <td><input type="checkbox"></td>
                                 <td>01012345678</td>
                                 <td>홍길동</td>
                                 <td>우수회원</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td>기타</td>
                                 <td>
                                    <div class="flex_center">
                                       <a href=""><img src="../images/common/icon_modify.png" alt=""></a>
                                       <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
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
                  <div class="AdRefusal_table none">
                     <div class="address_box">
                        <table>
                           <colgroup>
                              <col width="40">
                              <col width="200">
                              <col width="200">
                              <col width="200">
                              <col width="">
                           </colgroup>
                           <tbody>
                              <!-- <tr>
                                 <td colspan="5" class="list_none" style="height: 419px;">선택된 그룹이 없습니다.<br>그룹을 선택하세요.</td>
                              </tr> -->
                              <tr>
                                 <td><label for="" style="display:none;">연락처 선택</label><input type="checkbox"></td>
                                 <td>01012345678</td>
                                 <td><span>사용자 등록</span></td>
                                 <td><span>2021-06-09 15:54</span></td>
                                 <td>
                                    <p>
                                       <a href=""><img src="../images/common/icon_delete.png" alt=""></a>
                                    </p>
                                 </td>
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
                  <div class="address_bottom font_dt">
                     <i>
                        <select name="part" id="part">
                           <option value="1">전화번호</option>
                           <option value="2">이름</option>
                        </select>
                        <input type="text" name="" value="">
                        <input type="button" value="검색">
                     </i>
                     <i>
                        <select name="data_scale" id="data_scale">
                           <option value="100">100개씩 보기</option>
                           <option value="200">200개씩 보기</option>
                           <option value="300">300개씩 보기</option>
                           <option value="500">500개씩 보기</option>
                           <option value="700">700개씩 보기</option>
                           <option value="1000" selected="">1,000개씩 보기</option>
                        </select>
                     </i>
                  </div>
                  <div class="address_list_bottom">
                     <i>
                        <select name="group_sel01" id="group_sel01">
                           <option value="">그룹선택</option>
                           <option value="0001">가족</option>
                           <option value="0005">기타</option>
                           <option value="0004">업체</option>
                           <option value="0003">직장</option>
                           <option value="0002">친구</option>
                        </select>
                        <select name="group_sel02" id="group_sel02">
                           <option value="">하위그룹</option>
                        </select>
                        <span>으로</span>
                        <a href="">이동</a>
                        <a href="">복사</a>
                        <a href="">중복제거</a>
                        <a href="">선택삭제</a>
                     </i>
                     <i>
                        <a href="">선택한 번호를 전송리스트에 추가</a>
                        <p>※ 주소는 최대 50,000개 까지 등록하실 수 있습니다.</p>
                     </i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>