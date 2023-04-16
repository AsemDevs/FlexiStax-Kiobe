/*global $, alert, console*/

jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');

    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});


jQuery(function($) {
  // Bootstrap menu magic
  $(".navbar-toggler").click(function () {
    $(".d-lg-block").addClass(" d-none");

  });
  
  $(".closebtn").click(function () {
    $(".d-lg-block").removeClass(" d-none");
});
});

// Primary Navbar Js
function closePrimary_Nav() {
  var nav_collapse = document.getElementById("navbarSupportedContent");
  nav_collapse.classList.remove("show");
  
}
if (window.innerWidth <= 767.98) { // Set when you want it removed
  jQuery(function ($) {
    $('.dropdown-toggle').click(function openNav() {
        $('.dropdown-menu').width("100vw");
      });
  });
}

jQuery(function ($) {

  $(document).ready(function(){
    $('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
    $('.dropdown-submenu > a').on("click", function(e) {
    var dropdown = $(this).parent().find(' > .show');
      $('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
      $(this).next('.dropdown-menu').toggleClass('show');
      e.stopPropagation();
    });
    $('.dropdown').on("hidden.bs.dropdown", function() {
      $('.dropdown-menu.show').removeClass('show');
    });
  });
  
  $("dropdown-toggle").click(function(){
    $("ul").each(function(){
      $("ul").classList.remove("show");
    });
  });

 
});

// End Primary Navbar Js


//Adjust Header Height automatically
jQuery(function ($) {

  'use strict';
  var myHeader = $('.header');

  myHeader.height($(window).height()/1.125);
});

// Header Section Slider
jQuery(document).ready(function($){

  if ($(".img-slider").length > 0) {
    function headerSlider() {
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.rec-btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active-slide');

        btns.forEach((btn) => {
          btn.classList.remove('active-slide');
        });
      });

      slides[manual].classList.add('active-slide');
      btns[manual].classList.add('active-slide');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active-slide');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active-slide');
          });

        slides[i].classList.add('active-slide');
        btns[i].classList.add('active-slide');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 5000);
      }
      repeater();
    }
    repeat();
    }
    headerSlider();
  }
  
});


// Mobile Kiobe App Section Slider
jQuery(document).ready(function($){

  if ($(".kiobe-app-img-slider").length > 0) {
    function kiobeAppSlider() {
    var slides = document.querySelectorAll('.kiobe-app-slide');
    var btns = document.querySelectorAll('.kiobe-app-btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('app-active-slide');

        btns.forEach((btn) => {
          btn.classList.remove('app-active-slide');
        });
      });

      slides[manual].classList.add('app-active-slide');
      btns[manual].classList.add('app-active-slide');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('app-active-slide');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('app-active-slide');
          });

        slides[i].classList.add('app-active-slide');
        btns[i].classList.add('app-active-slide');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 5000);
      }
      repeater();
    }
    repeat();
    }

    if (window.innerWidth <= 820) { // Set when you want it removed

      kiobeAppSlider(); 
     }
}

});

// Multi-platform Slider
jQuery(document).ready(function($){

  if ($(".multi-platform-img-slider").length > 0) {
function multiPlatformSlider() {
  var slides = document.querySelectorAll('.multi-platform-slide');
  var btns = document.querySelectorAll('.multi-platform-btn');
  let currentSlide = 1;
  
  // Javascript for image slider manual navigation
  var manualNav = function(manual){
    slides.forEach((slide) => {
      slide.classList.remove('multi-active-slide');
  
      btns.forEach((btn) => {
        btn.classList.remove('multi-active-slide');
      });
    });
  
    slides[manual].classList.add('multi-active-slide');
    btns[manual].classList.add('multi-active-slide');
  }
  
  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      manualNav(i);
      currentSlide = i;
    });
  });
  
   // Javascript for image slider autoplay navigation
   var repeat = function(activeClass){
    let active = document.getElementsByClassName('multi-active-slide');
    let i = 1;
  
    var repeater = () => {
      setTimeout(function(){
        [...active].forEach((activeSlide) => {
          activeSlide.classList.remove('multi-active-slide');
        });
  
      slides[i].classList.add('multi-active-slide');
      btns[i].classList.add('multi-active-slide');
      i++;
  
      if(slides.length == i){
        i = 0;
      }
      if(i >= slides.length){
        return;
      }
      repeater();
    }, 5000);
    }
    repeater();
  }
  repeat();
  }
  if (window.innerWidth <= 820) { // Set when you want it removed
    multiPlatformSlider();
   }
}
});

// Tabable Stocks tabs
function openStock(evt, stockName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.querySelectorAll(".tabable-container.tabable-stocks .tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.querySelectorAll(".tabable-container.tabable-stocks .tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(stockName).style.display = "block";
  evt.currentTarget.className += " active-tab";
}


// Tabable Platforms tabs
function openPlatform(evt, platformName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.querySelectorAll(".tabable-container.tabable-platforms .tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.querySelectorAll(".tabable-container.tabable-platforms .tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(platformName).style.display = "block";
  evt.currentTarget.className += " active-tab";
}


function openDevice(evt, modeName) {
  // Declare all variables
  var i, tabcontent, tablinks;
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.querySelectorAll(".trade-with-kiobe .tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active-tab"
  tablinks = document.querySelectorAll(".trade-with-kiobe .tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  var ele = document.getElementsByClassName(modeName);
for (var i = 0; i < ele.length; i++ ) {
    ele[i].style.display = "block";
  }
  evt.currentTarget.className += " active-tab";

}
function openMode(evt, modeName) {
  // Declare all variables
  var i, tabcontent, tablinks;
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.querySelectorAll(".trade-with-kiobe .tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.querySelectorAll(".trade-with-kiobe .tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-mode", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  var ele = document.getElementsByClassName(modeName);
for (var i = 0; i < ele.length; i++ ) {
    ele[i].style.display = "block";
  }
  evt.currentTarget.className += " active-mode";

}

function swithcMode() {
  var web_plat = document.querySelectorAll(".web-platform-btn");
  var mobile_App = document.querySelectorAll('.mobile-app-btn');
  var webDark_btn = document.querySelectorAll('.dark-mode-btn');
  var light_btn = document.querySelectorAll('.light-mode-btn');
  var tabWeb = document.querySelectorAll(".trade-with-kiobe .tab-web");
  var tabMobile = document.querySelectorAll(".trade-with-kiobe .tab-mobile");
  var mobile_dark = document.querySelectorAll(".trade-with-kiobe .mobile-dark");
  var web_dark = document.querySelectorAll(".trade-with-kiobe .web-dark");


  if(web_plat[0].classList.contains("active-tab") || web_plat[1].classList.contains("active-tab")) {
      for(var i = 0; i < webDark_btn.length; i++) {
        webDark_btn[i].classList.add("active-mode");
        light_btn[i].classList.remove("active-mode");
        tabMobile[0].style.display = "none";
        tabMobile[1].style.display = "none";
        tabWeb[0].style.display = "block";
        tabWeb[1].style.display = "block";
    }
  } else if (mobile_App[0].classList.contains("active-tab") || mobile_App[1].classList.contains("active-tab")) {
      for(var i = 0; i < light_btn.length; i++) {
        webDark_btn[i].classList.remove("active-mode");
        light_btn[i].classList.add("active-mode");
        tabMobile[0].style.display = "block";
        tabMobile[1].style.display = "block";
        tabWeb[0].style.display = "none";
        tabWeb[1].style.display = "none";
    }
  }
  for(var i = 0; i < mobile_dark.length; i++) {
    if (mobile_dark[i].style.display=="block" || web_dark[i].style.display=="block") {
      webDark_btn[i].classList.add("active-mode");
      light_btn[i].classList.remove("active-mode");
    }else {
      webDark_btn[i].classList.remove("active-mode");
      light_btn[i].classList.add("active-mode");
    }
  }

}
jQuery(function ($) {
  $(".dark-mode-btn").click(function () {
    $(".dark-mode-btn").addClass("active-mode");
    $(".light-mode-btn").removeClass("active-mode");
    // if(web_plat[0].classList.contains("active-tab") || web_plat[1].classList.contains("active-tab")) {
    //   $(".web-dark").css("display", "block");
    // }
  });
  $(".light-mode-btn").click(function () {
    $(".dark-mode-btn").removeClass("active-mode");
    $(".light-mode-btn").addClass("active-mode");
    // if(mobile_App[0].classList.contains("active-tab") || mobile_App[1].classList.contains("active-tab")) {
    //   $(".mobile-dark").css("display", "block");
    // }
  });
});

// Tabable Accounts Pricing tabs and Education Tabs
function openBox(evt, BoxName) {

  let i, tabcontent, tablinks;
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.querySelectorAll(".tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.querySelectorAll(".tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(BoxName).style.display = "block";
  evt.currentTarget.className += " active-tab";
}

jQuery(function ($) {
    $('.education-section-desktop .carousel').carousel({
      interval: false
    });
});

function toggleRow(tab) {
  jQuery(function ($) {

  $(tab).toggle();

});

}


// Dynamic Progress bar 

function Dynamic_progress_bar_desk() {

  var i = 0;
  var j = 0;
  var currency_movers = document.querySelectorAll(".education-section-desktop .currency-movers-bar");
  var bar_movers = currency_movers[0];
  var bar_movers_client = currency_movers[1];
  var bars_num_client = bar_movers_client.querySelectorAll(".education-section-desktop #percent-l").length;
  var bars_num_movers = bar_movers.querySelectorAll(".education-section-desktop #percent-r").length;
  var elem1 = bar_movers_client.querySelectorAll(".education-section-desktop #myBar");
  var elem2 = bar_movers.querySelectorAll(".education-section-desktop #myBar");

  var data_label_l_array_client = new Array();
  var data_label_r_array_client = new Array();
  for(i = 0; i < bars_num_client; i++) {
    var data_label_l = bar_movers_client.querySelectorAll(".education-section-desktop #percent-l")[i];
    var data_label_r = bar_movers_client.querySelectorAll(".education-section-desktop #percent-r")[i];
    var data_label_l_value = data_label_l.getAttribute("data-label");
    var data_label_r_value = 100 - data_label_l_value;
    data_label_l_array_client[i]=data_label_l_value;
    data_label_r_array_client[i]=data_label_r_value;
    data_label_l.innerHTML = data_label_l_array_client[i] + "%";
    data_label_r.innerHTML = data_label_r_array_client[i] + "%";

    elem1[i].style.width = data_label_l_array_client[i] + "%";
  }

  var data_label_array_movers = new Array();
  for (j = 0; j < bars_num_movers; j++ ) {
    var data_label_r = bar_movers.querySelectorAll(".education-section-desktop #percent-r")[j];
    var data_label_r_value = data_label_r.getAttribute("data-label");
    data_label_array_movers[j] = data_label_r_value;
    data_label_r.innerHTML = data_label_array_movers[j] + "%";

    elem2[j].style.width = data_label_array_movers[j] + "%";
  }

}

jQuery(function ($) {
  if ($(".education-section").length > 0) {
    Dynamic_progress_bar_desk();
  }
});

function Dynamic_progress_bar_resp() {

  var i = 0;
  var j = 0;
  var currency_movers = document.querySelectorAll(".education-section-mobile .currency-movers-bar");
  var bar_movers = currency_movers[0];
  var bar_movers_client = currency_movers[1];
  var bars_num_client = bar_movers_client.querySelectorAll("#percent-l").length;
  var bars_num_movers = bar_movers.querySelectorAll("#percent-r").length;
  var elem1 = bar_movers_client.querySelectorAll("#myBar");
  var elem2 = bar_movers.querySelectorAll("#myBar");

  var data_label_l_array_client = new Array();
  var data_label_r_array_client = new Array();
  for(i = 0; i < bars_num_client; i++) {
    var data_label_l = bar_movers_client.querySelectorAll("#percent-l")[i];
    var data_label_r = bar_movers_client.querySelectorAll("#percent-r")[i];
    var data_label_l_value = data_label_l.getAttribute("data-label");
    var data_label_r_value = 100 - data_label_l_value;
    data_label_l_array_client[i]=data_label_l_value;
    data_label_r_array_client[i]=data_label_r_value;
    data_label_l.innerHTML = data_label_l_array_client[i] + "%";
    data_label_r.innerHTML = data_label_r_array_client[i] + "%";

    elem1[i].style.width = data_label_l_array_client[i] + "%";
  }

  var data_label_array_movers = new Array();
  for (j = 0; j < bars_num_movers; j++ ) {
    var data_label_r = bar_movers.querySelectorAll("#percent-r")[j];
    var data_label_r_value = data_label_r.getAttribute("data-label");
    data_label_array_movers[j] = data_label_r_value;
    data_label_r.innerHTML = data_label_array_movers[j] + "%";

    elem2[j].style.width = data_label_array_movers[j] + "%";
  }

}


jQuery(function ($) {
  if ($(".education-section").length > 0) {
    if ( document.getElementsByClassName("education-section-mobile")[0].style.display=="none") {
      Dynamic_progress_bar_desk();
    
    } else {
      Dynamic_progress_bar_resp();
    }
  }
});

// Education Page Courses Tab: Courses Carousel Counter
jQuery(function ($) {

  let elCarousel = $('.carousel');
  let elCarouselItem = $('.carousel-item');
  let elCarouselCounter = $('.slide-num');

  elCarousel.each(function () {
      let $carousel = $(this);
      let totalItems = $carousel.find(elCarouselItem).length;
      if (totalItems < 10) {
          totalItems = '' + totalItems;
      }
      $carousel.find(elCarouselCounter).html('1/' + totalItems + '');
  });

  elCarousel.on('slid.bs.carousel', function () {
      let $carousel = $(this);
      let currentIndex = $carousel.find('div.active').index() + 1;
      if (currentIndex < 10) {
          currentIndex = '' + currentIndex
      }
      let ti = $carousel.find(elCarouselItem).length;
      if (ti < 10) {
          ti = '' + ti;
      }
      $carousel.find(elCarouselCounter).html('' + currentIndex + '/' + ti + '');
  });
});


if (document.getElementsByClassName("carousel-track").length > 0){
  
  var btc_price_url = 'https://api.stockdio.com/data/financial/prices/v1/getlatestprice?app-key=DA7451347AE840FD8B63F0CD9B84112D&stockExchange=CRYPTO&symbol=BTC%2FUSD';

  fetch(btc_price_url)
    .then(function(response) {
      return response.json();
    })
    .then(function (btc_price) {
      var btc = document.getElementsByClassName("btc-price");
      Array.from(btc).forEach(element => {
        element.innerHTML = btc_price.data.price;
      });
    });

  var eur_price_url = 'https://api.stockdio.com/data/financial/prices/v1/getlatestprice?app-key=DA7451347AE840FD8B63F0CD9B84112D&stockExchange=FOREX&symbol=EUR%2FUSD';
  fetch(eur_price_url)
    .then(function(response) {
      return response.json();
    })
    .then(function (eur_price) {
      var eur = document.getElementsByClassName("eur-price");
      Array.from(eur).forEach(element => {
        element.innerHTML = eur_price.data.price;
      });
    });

  var fb_price_url = 'https://api.stockdio.com/data/financial/prices/v1/getlatestprice?app-key=DA7451347AE840FD8B63F0CD9B84112D&stockExchange=USA&symbol=FB';
  fetch(fb_price_url)
    .then(function(response) {
      return response.json();
    })
    .then(function (fb_price) {
      var fb = document.getElementsByClassName("fb-price");
      Array.from(fb).forEach(element => {
        element.innerHTML = fb_price.data.price;
      });
    });

  var tsla_price_url = 'https://api.stockdio.com/data/financial/prices/v1/getlatestprice?app-key=DA7451347AE840FD8B63F0CD9B84112D&stockExchange=USA&symbol=TSLA';
  fetch(tsla_price_url)
    .then(function(response) {
      return response.json();
    })
    .then(function (tsla_price) {
      var tsla = document.getElementsByClassName("tsla-price");
      Array.from(tsla).forEach(element => {
        element.innerHTML = tsla_price.data.price;
      });
    });
}

// Toggle footer menu
jQuery(function ($) {
  if ($(".row.sitemap-nav").length > 0) {

    $( ".sitemap-nav li:first-of-type" ).each(function() {
      $(this).click(function() {
        $(this).siblings().toggle();
      });
    });
  }
});
