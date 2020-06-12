$(document).ready(function () {
  var width = $(window).width()
  var height = $(window).height()

  //page preloader
  $(window).on('load', function () {
    $('#status').fadeOut()
    $('#preloader').delay(350).fadeOut('slow')
    $('html').delay(350).removeClass('overflow')
  })

  //scrollWidth
  var div = document.createElement('div')
  div.style.overflowY = 'scroll'
  div.style.width = '50px'
  div.style.height = '50px'
  div.style.visibility = 'hidden'
  document.body.appendChild(div)
  var scrollWidth = div.offsetWidth - div.clientWidth
  document.body.removeChild(div)

//slider
  $('.slider-block').slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    fade: true,
    cssEase: 'linear',
    appendArrows: $('.arrows-block')
  })

  $('a.scrollto').on('click', function (event) {
    var link = $(this)
    var menuItem = $(this).data('tabs')
    $('.top-menu-list a').eq(menuItem).addClass('active')
    $('.top-menu-list a').not(':eq(' + menuItem + ')').removeClass('active')
    $('html, body').stop().animate({
      scrollTop: $(link.attr('href')).offset().top - 100
    }, 500)
    event.preventDefault()
  })

  $('#btn-menu').on('click', function () {
    $('#btn-menu').stop().toggleClass('js-open')
    $('.top-menu-list').stop().slideToggle(200)
  })

  function onlyInteger (selector) {
    $(selector).on('input', (event) => {
      event.target.value = event.target.value
        .replace(/[^\d]/g, '')
    })
  }

  onlyInteger('.integer')

  $(window).scroll(function () {
    if ($(this).scrollTop() > 350 && $(this).width() > 768) {
      $('#up').fadeIn()
    } else {
      $('#up').fadeOut()
    }
  })
  $('#up').click(function (a) {
    a.preventDefault()
    $('html, body').animate({
      scrollTop: 0
    }, 'slow')
  })

  //validate file image
  $(function () {
    $('input[type=file]').change(function () {
      var val = $(this).val().toLowerCase(),
        regex = new RegExp('(.*?)\.(jpg|jpeg|gif|png)$')
      if (!(regex.test(val))) {
        $(this).val('')
        $('#file-name').html('.jpg .jpeg .gif .png')
      } else {
        $('#file-name').html($(this)[0].files[0].name)
      }
    })
  })

//validate email
  function validateEmail (email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    return re.test(email)
  }

//validate form
  var inputFile = $('#file')
  var inputCaptcha = $('#captcha_code')
  var inputText = $('#form-block .empty-valid')

  $('#form-block').on('submit', function (e) {

    var error = false
    var result = $('#email')
    var email = result.val()

    if (validateEmail(email)) {
      result.parent('.input-wrap').removeClass('input-wrap-error')
    } else {
      error = true
      result.parent('.input-wrap').addClass('input-wrap-error')
    }

    if (inputFile.val() === '') {
      error = true
      inputFile.parent().parent('.input-group').addClass('input-wrap-error')
    } else {
      inputFile.parent().parent('.input-group').removeClass('input-wrap-error')
    }

    if (inputCaptcha.val() === '') {
      error = true
      inputCaptcha.parent('.input-wrap').addClass('input-wrap-error')
    } else {
      inputCaptcha.parent('.input-wrap').removeClass('input-wrap-error')
    }

    for (var i = 0; i < inputText.length; i++) {
      if (inputText[i].value === '') {
        error = true
        inputText[i].parentElement.classList.add('input-wrap-error')
      } else {
        inputText[i].parentElement.classList.remove('input-wrap-error')
      }
    }

    if (error) {
      e.preventDefault()
    }
  })

  $('#form-block input, #form-block textarea').on('focus', function () {
    this.parentElement.classList.remove('input-wrap-error')
  })
  inputFile.on('click', function () {
    this.parentElement.classList.remove('input-wrap-error')
  })

//modal

  var modal = $('.modal')
  var closeBtn = $('.modal .close')
  $('.modal.js-open').fadeIn()

  $(closeBtn).on('click', function () {
    $(modal).removeClass('js-open').fadeOut()
    setTimeout(function () {
      $('html').removeClass('overflow')
      $('body, header').css({
        'padding-right': 0,
      })
    }, 350)

  })
  $(modal).on('click', function (event) {

    if ($(event.target).data('modal') == 'modal-wrap') {
      $(modal).removeClass('js-open').fadeOut()
      setTimeout(function () {
        $('html').removeClass('overflow')
        $('body, header').css({
          'padding-right': 0,
        })
      }, 350)

    }
  })

  var btnShowModal = $('.show-modal-form')
  var margin = 10
  $(btnShowModal).on('click', function (e) {
    e.preventDefault()
    $('html').addClass('overflow')
    $('#modal-form-wrap').fadeIn()
    $('body, header').css({
      'padding-right': scrollWidth,
    })
    var formModalHeight = $('.form-modal-content').outerHeight()
    if (formModalHeight < height) {
      margin = Math.floor((height - formModalHeight) / 2)
      $('.form-modal-content').css({
        'margin-top': margin + 'px',
        'margin-bottom': margin + 'px'
      })
    } else {
      $('.form-modal-content').css({
        'margin-top': margin + 'px',
        'margin-bottom': margin + 'px'
      })
    }
  })

  var headerHeightScroll = 100
  if (width < 992) {
    headerHeightScroll = 50
  }

//header scroll
  var $menu = $('header')
  $(window).scroll(function () {
    if ($(this).scrollTop() > headerHeightScroll && $('html').not('.overflow') && width > 575) {
      $menu.addClass('scroll')
    } else if ($(this).scrollTop() <= headerHeightScroll && $('html').not('.overflow') && width > 575) {
      $menu.removeClass('scroll')
    }
  })

  var section = $('#tabs-block .section-item')
  $('.tabs-btn').on('click', function () {
    var tabItem = $(this).data('tabs')
    section.eq(tabItem).fadeIn(350)
    section.not(':eq(' + tabItem + ')').fadeOut(250)

  })

})

