<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../favicon.ico">
   <link rel="stylesheet" href="../css/reset.css">
   <link rel="stylesheet" href="../css/tax.css">
   <link rel="stylesheet" href="../css/SUIT.css">
   <title>문자프로 - 메시지 통합 플랫폼</title>
</head>
  <body>
    <div class="tax_wrap">
      <div class="tax_top">
        <a href="tax.php"><img src="../images/tax/tax_tit.png" alt=""></a>
        <img src="../images/tax/tax_logo.png" alt="">
      </div>
      <div class="tax_box mt20">
        <div class="tax_box_left">
          <div class="tax_con" id="tax_member">
            <p>[사업자] <strong>admin</strong> 회원</p>
            <p class="mt20">2022년 1/4분기내 결제요금<br><strong>세금계산서 출력</strong>이 가능합니다.</p>
          </div>
          <div class="tax_con mt10" id="tax_current">
            <a href="tax=info.php"><img src="../images/tax/img_left_m_myinfo.gif" alt="발급 등록 정보 확인"></a>
            <h1><img src="../images/tax/left_arrow.gif" alt="">&nbsp;<b>문자프로</b>&nbsp;결제정보 연동 현황</h1>
            <ul>
              <li><span><img src="../images/tax/img_pg_on.gif" alt="">무통장결제</span><p>: 정보연동</p></li>
              <li><span><img src="../images/tax/img_pg_off.gif" alt="">신용카드결제</span><p>: PG사연동</p></li>
              <li><span><img src="../images/tax/img_pg_off.gif" alt="">핸드폰결제</span><p>: PG사연동</p></li>
              <li><span><img src="../images/tax/img_pg_off.gif" alt="">즉시이체결제</span><p>: PG사연동</p></li>
            </ul>
          </div>
          <div class="tax_con mt10" id="tax_customer">
            <img src="../images/tax/customer_tit.png" alt="">
            <ul class="mt5">
              <li>담당 : 김선미 과장</li>
              <li>전화 : 1599-7944</li>
              <li>팩스 : 062-350-0704</li>
            </ul>
          </div>
        </div>
        <div class="tax_box_right">
          <div class="tax_con" id="tax_member_info">
            <h1><img src="../images/tax/tax_member_tit.png" alt="세금 계산서 발행자 기본 정보"></h1>
            <div class="tax_member_con">
              <ul>
                <li><span>회사명</span><p>: (주)이노포스트</p></li>
                <li><span>사업자등록번호</span><p>: 410-86-00477</p></li>
                <li><span>업종</span><p>: 서비스</p></li>
                <li><span>전화</span><p>: 1599-7944</p></li>
              </ul>
              <ul>
                <li><span>대표자명</span><p>: 이경훈</p></li>
                <li><span>통신판매번호</span><p>: 2007-0213호</p></li>
                <li><span>업태</span><p>: 인터넷자료제공</p></li>
                <li><span>팩스</span><p>: 062)350-0704</p></li>
              </ul>
            </div>
          </div>
          <div class="tax_con mt10" id="document_con">
            <h1>
              <img src="../images/tax/document_tit03.png" alt="무통장 결제내역 출력">
            </h1>
            <div class="info_table">
              <table>
                <colgroup>
                  <col width="105px">
                  <col width="">
                  <col width="105px">
                  <col width="130px">
                </colgroup>
                <tbody>
                  <tr>
                    <td colspan="4" style="text-align:center;"><strong>세금계산서 공급받는자 정보</strong></td>
                  </tr>
                  <tr>
                    <td>법인명(상호)</td>
                    <td>이노포스트</td>
                    <td>사업자등록번호</td>
                    <td>410-86-00477</td>
                  </tr>
                  <tr>
                    <td>사업장주소</td>
                    <td>광주광역시 서구 천변좌로 268 (양동) 1701호 (양동,KDB 빌딩)</td>
                    <td>대표자명</td>
                    <td>이경훈</td>
                  </tr>
                  <tr>
                    <td>업태</td>
                    <td>통신판매업</td>
                    <td>종목</td>
                    <td>인터넷</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="sel_box">
              <div class="left">
                <img src="../images/tax/ico_arrow_b.gif" alt="">
                <strong>사업자</strong>
              </div>
              <div class="right">
                <select name="year">
                  <option value="2022" selected="">2022년</option>
                  <option value="2021">2021년</option>
                  <option value="2020">2020년</option>
                  <option value="2019">2019년</option>
                  <option value="2018">2018년</option>
                </select>
                <select name="part">
                  <option value="1" selected="">1사분기</option>
                  <option value="2">2사분기</option>
                  <option value="3">3사분기</option>
                  <option value="4">4사분기</option>
                </select>
                <label for="">검색</label>
              </div>
            </div>
            <div class="document_table document_list">
              <table>
                <colgroup>
                  <col width="50">
                  <col width="125">
                  <col width="105">
                  <col width="95">
                  <col width="105">
                  <col width="70">
                  <col width="50">
                </colgroup>
                <thead>
                  <tr>
                    <th>연번</th>
                    <th>결제일</th>
                    <th>결제금액</th>
                    <th>입금구분</th>
                    <th>계산서</th>
                    <th>확인</th>
                    <th>출력</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td colspan="7" style="height:150px;">분기별 결제가 없습니다.</td>
                  </tr> -->
                  <tr>
                    <td>1</td>
                    <td>2022년 01월 03일</td>
                    <td>1,500,000원</td>
                    <td>무통장</td>
                    <td><a href="#" id="bill">세금계산서</a></td>
                    <td><a href="#"><img src="../images/tax/ico_true.gif" alt="승인완료"></a></td>
                    <td><a href="#"><img src="../images/tax/ico_trueprint2.gif" alt="출력"></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="page">
              <div class="button">
                <ul>
                  <li class="page_btn"><a href="#"><img src="../images/common/prev02.png" alt=""></a></li>
                  <li class="page_btn"><a href="#"><img src="../images/common/prev.png" alt=""></a></li>
                  <li class="this"><a href="#">1</a></li>
                  <li class="page_btn"><a href="#"><img src="../images/common/next.png" alt=""></a></li>
                  <li class="page_btn"><a href="#"><img src="../images/common/next02.png" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">Copyright ⓒ SMSPRO. All rights Reserved.</div>
    </div>
  </body>
</html>
