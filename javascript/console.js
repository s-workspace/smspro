$(function(){

  // 모달 팝업 닫기
  $('.modal_close').click(function(e){
    e.preventDefault();
    $('.modal_wrap').hide();
  });

  // 모달 일주일 닫기
  $('.date_close').click(function(){
    dateClose();
  });

  $(document).ready(function() {
    cookiedata = document.cookie; 
  
    if ( cookiedata.indexOf("dateClose=done") < 0) $('.modal_wrap').show();
    else $('.modal_wrap').hide();
  });

  function setCookie(name, value, expiredays) { 
    var todayDate = new Date(); 
    todayDate.setDate(todayDate.getDate() + expiredays);
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
  }

  function dateClose() { 
    setCookie( "dateClose", "done", 7);
    $('.modal_wrap').hide();
  }

  // 알림
  window.setTimeout(function(){
      $('.report').hide('600');
  },10000);
  $('.report_close').click(function(){
      $(this).parent('.report').hide();
  });
  // 알림 끝

  // 낮은 해상도
  $(window).on('load resize', function(){
    if(window.innerHeight < 810) {
      $('.side_bar > ul').addClass('scroll');
      $('.my_msg_layer').addClass('short');
      $('.brand_layer').addClass('short');
    }
    else {
      $('.side_bar > ul').removeClass('scroll');
      $('.my_msg_layer').removeClass('short');
      $('.brand_layer').removeClass('short');
    }
  });
  // 낮은 해상도 끝

  // 사이드바 스크롤
  $(window).on('load resize', function(){
    if(window.innerHeight < 810) $('.side_bar > ul').addClass('scroll');
    else $('.side_bar > ul').removeClass('scroll');
  });
  // 사이드바 스크롤 끝

  // 입력 이벤트
  $('.select_box').click(function(){
    $(this).find("ul").toggle('300');
    $(this).parents('i').siblings().find(".select_box ul").hide('300');
  });

  $('.select_box ul li').click(function(){
    var select = $(this).html();
    $(this).parents('.select_box').find('span').html(select);
  });
  
  $('input').on({
    'focus' : function() {
        $(this).addClass('focus');
    },
    'blur' : function() {
        $(this).removeClass('focus');
    }
  });

  $('select').on({
    'focus' : function() {
        $(this).addClass('focus');
    },
    'blur' : function() {
        $(this).removeClass('focus');
    }
  });

  $('.msg_text textarea').on({
    'focus' : function() {
        $(this).parents('.msg_text').addClass('focus');
    },
    'blur' : function() {
        $(this).parents('.msg_text').removeClass('focus');
    }
  });
  // 입력 이벤트 끝

  // 즐겨찾는 메뉴
  $('#bookmark_btn').click(function(){
    $(this).siblings().find('div').hide('300');
    $('.bookmark_menu').toggle('300');
  });
  // 즐겨찾는 메뉴 끝

  // 테마설정
  $('#theme_btn').click(function(){
    $(this).siblings().find('div').hide('300');
    $('.theme_menu').toggle('300');
  });
  // 테마설정 끝

  // 레이어 공통
  $('.layer_cancel').click(function(e){
    e.preventDefault();
    $('.layer_cover').hide();
    $('.layer').hide();
  });

  $('.layer_popup_close').click(function(){
    $(this).parent().hide();
  });
  // 레이어 공통 끝

  // 다크모드
  // 로컬스토리지 데이터 읽기
  let Theme = localStorage.getItem('theme');
  const dark = document.querySelector('#dark');
  const light = document.querySelector('#light');
  const blue = document.querySelector('#blue');
  const darkblue = document.querySelector('#darkblue');
  const red = document.querySelector('#red');
  const purple = document.querySelector('#purple');

  const DarkMode = () => {
    document.documentElement.className = ('dark');
    localStorage.setItem('theme', 'setDark');
    $('#dark').siblings().removeClass('this');
    $('#dark').addClass('this');
  };

  const lightMode = () => {
    document.documentElement.className = ('light');
    localStorage.setItem('theme', "setLight");
    $('#light').siblings().removeClass('this');
    $('#light').addClass('this');
  };

  const blueMode = () => {
    document.documentElement.className = ('blue');
    localStorage.setItem('theme', "setBlue");
    $('#blue').siblings().removeClass('this');
    $('#blue').addClass('this');
  };

  const darkblueMode = () => {
    document.documentElement.className = ('darkblue');
    localStorage.setItem('theme', "setDarkblue");
    $('#darkblue').siblings().removeClass('this');
    $('#darkblue').addClass('this');
  };

  const redMode = () => {
    document.documentElement.className = ('red');
    localStorage.setItem('theme', "setRed");
    $('#red').siblings().removeClass('this');
    $('#red').addClass('this');
  };

  const purpleMode = () => {
    document.documentElement.className = ('purple');
    localStorage.setItem('theme', "setPurple");
    $('#purple').siblings().removeClass('this');
    $('#purple').addClass('this');
  };

  if (Theme === 'setDark') DarkMode();
  else if (Theme === 'setLight') lightMode();
  else if (Theme === 'setBlue') blueMode();
  else if (Theme === 'setDarkblue') darkblueMode();
  else if (Theme === 'setRed') redMode();
  else if (Theme === 'setPurple') purpleMode();
  
  dark.addEventListener('click', () => {
    DarkMode();
  });
  
  light.addEventListener('click', () => {
    lightMode();
  });

  blue.addEventListener('click', () => {
    blueMode();
  });

  darkblue.addEventListener('click', () => {
    darkblueMode();
  });

  red.addEventListener('click', () => {
    redMode();
  });

  purple.addEventListener('click', () => {
    purpleMode();
  });
  // 로컬스토리지 데이터 읽기 끝
  // 다크모드 끝

  // 체크박스
  $(".check_con label").on("click",function(){
    $(this).toggleClass("on");
    $(".an_msg_box").toggleClass("hide");
  });
  // 체크박스 끝

  // 메뉴선택
  $('.side_bar > ul > li > a.over').click(function(e){
    e.preventDefault();
    var $subMenu = $(this).parent().find('.sub_menu');
    $(this).toggleClass('on');
    $(this).parent().siblings().find('.over').removeClass('on');
    $subMenu.toggle('300');
    $(this).parent().siblings().find('.sub_menu').slideUp();
  });
  //  메뉴선택 끝

  //  메뉴구분
  $(document).ready(function(){
    $(".side_bar > ul > li").removeClass('this');
    $(".sub_menu > li").removeClass('this');
    $(".menu_list > li > a.over").removeClass('on');
    $(".admin_header > a").removeClass('this');
    var url = $(location).attr('href');

    $.each($(".side_bar > ul > li"), function() {
      var href = $(this).find("a").attr("href");
      if(url.indexOf(href) > 0) {
        $(this).addClass("this");
        return false;
      }
    });
    $.each($(".sub_menu > li"), function() {
      var href = $(this).find("a").attr("href");
      if(url.indexOf(href) > 0) {
        $(this).addClass("this");
        $(this).parents('li').addClass('this');
        $(this).parents('li').find('.over').addClass('on');
        return false;
      }
    });
    $.each($(".admin_header > .menu > a"), function() {
      var href = $(this).attr("href");
      if(url.indexOf(href) > 0) {
        $(this).addClass("this");
        return false;
      }
    });
  });
  //  메뉴구분 끝
  
  // 주소록 관리
  $('.address_box td').eq(3).hover(function(){
      var td = $(this).html();
      $(this).attr('title',td);
  });
  $('.address_box td').eq(4).hover(function(){
      var td = $(this).html();
      $(this).attr('title',td);
  });
  $('.address_box td').eq(5).hover(function(){
      var td = $(this).html();
      $(this).attr('title',td);
  });
  $('.address_box td').eq(6).hover(function(){
      var td = $(this).html();
      $(this).attr('title',td);
  });
  $('#AdRefusal_btn').click(function(e){
    e.preventDefault();
    $('.AdList_table').addClass('none');
    $('.AdList_tit').addClass('none');
    $('.AdRefusal_table').removeClass('none');
    $('.AdRefusal_tit').removeClass('none');
  });
  $('#ChkAll').click(function(){
    $('.AdRefusal_table').addClass('none');
    $('.AdRefusal_tit').addClass('none');
    $('.AdList_table').removeClass('none');
    $('.AdList_tit').removeClass('none');
  });
  // 주소록 관리 끝

  // 보안설정
  $('.sec_set_mode p').click(function(){
    $(this).parent().toggleClass('on');
    $(this).parents('.sec_set_top').next('ul').find('.sec_set_cover').toggleClass('none');
  });
  // 보안설정 끝

  // 견적서 발행
  $(".es_type").click(function(){
    $('.es_type').siblings('input').prop('disabled', true);
    $('.es_type').siblings('input').addClass('block');
    if ($(this).is(':checked')) {
      $(this).siblings('input').prop('disabled', false);
      $(this).siblings('input').removeClass('block');
    }
  });
  // 견적서 발행 끝

  // 브랜드 연동
  $('.brand_add').click(function(e){
    e.preventDefault();
    $('.layer_cover').show();
    $('.brand_layer').fadeIn();
  });
  // 브랜드 연동 끝

  // 요금선택
  $('.payment_list li').click(function(){
    $(this).addClass('this');
    $(this).siblings().removeClass('this');
  });

});
