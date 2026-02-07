(function ($) {
  "use strict";

  const __Main = {
    sliders: new Set(),
    vanillaListeners: [],
    registerSlider(selector) {
      this.sliders.add(selector);
    },
    addVanillaListener(el, type, handler, options) {
      el.addEventListener(type, handler, options);
      this.vanillaListeners.push({ el, type, handler, options });
    },
    cleanup() {
      // destroy slick sliders
      this.sliders.forEach((sel) => {
        const $el = $(sel);
        if ($el.length && $el.hasClass('slick-initialized')) {
          try { $el.slick('unslick'); } catch (e) { /* ignore */ }
        }
      });
      // remove namespaced jquery events
      $(document).off('.mainjs');
      $(window).off('.mainjs');
      // remove vanilla listeners
      this.vanillaListeners.forEach(({ el, type, handler, options }) => {
        try { el.removeEventListener(type, handler, options); } catch (e) { /* ignore */ }
      });
      this.vanillaListeners = [];
      this.sliders.clear();
    }
  };

  $(document).ready(function () {

    // ========================= Mobile Menu Sidebar & Offcanvas Js Start ========
    $('.toggle-mobileMenu').on('click.mainjs', function () {
      $('.mobile-menu').addClass('active');
      $('.side-overlay').addClass('show');
      $('body').addClass('scroll-hide-sm');
    });

    $('.close-button, .side-overlay').on('click.mainjs', function () {
      $('.mobile-menu').removeClass('active');
      $('.side-overlay').removeClass('show');
      $('body').removeClass('scroll-hide-sm');
    });
    // ============== Mobile Menu Sidebar & Offcanvas Js End ========

    // ============== Mobile Nav Menu Dropdown Js Start =======================
    const windowWidth = $(window).width();

    $('.has-submenu').on('click.mainjs', function () {
      const thisItem = $(this);

      if (windowWidth < 992) {
        if (thisItem.hasClass('active')) {
          thisItem.removeClass('active')
        } else {
          $('.has-submenu').removeClass('active')
          $(thisItem).addClass('active')
        }

        const submenu = thisItem.find('.nav-submenu');

        $('.nav-submenu').not(submenu).slideUp(300);
        submenu.slideToggle(300);
      }

    });
    // ============== Mobile Nav Menu Dropdown Js End =======================

    // ===================== Scroll Back to Top Js Start ======================
    const progressPath = document.querySelector('.progress-wrap path');
    if (progressPath) {
      const pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
      const updateProgress = function () {
        const scroll = $(window).scrollTop();
        const height = $(document).height() - $(window).height();
        const progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
      }
      updateProgress();
      $(window).on('scroll.mainjs', updateProgress);
      const offset = 50;
      const duration = 550;
      jQuery(window).on('scroll.mainjs', function () {
        if (jQuery(this).scrollTop() > offset) {
          jQuery('.progress-wrap').addClass('active-progress');
        } else {
          jQuery('.progress-wrap').removeClass('active-progress');
        }
      });
      jQuery('.progress-wrap').on('click.mainjs', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
      })
    }
    // ===================== Scroll Back to Top Js End ======================

    // ========================== add active class to ul>li top Active current page Js Start =====================
    function dynamicActiveMenuClass(selector) {
      let FileName = window.location.pathname.split("/").reverse()[0];

      if (FileName === "" || FileName === "index.html") {
        selector.find("li.nav-menu__item.has-submenu").eq(0).addClass("activePage");
      } else {
        selector.find("li").removeClass("activePage");

        selector.find("li").each(function () {
          const anchor = $(this).find("a");
          if ($(anchor).attr("href") == FileName) {
            $(this).addClass("activePage");
          }
        });

        selector.children("li").each(function () {
          if ($(this).find(".activePage").length) {
            $(this).addClass("activePage");
          }
        });
      }
    }

    if ($('ul').length) {
      dynamicActiveMenuClass($('ul'));
    }
    // ========================== add active class to ul>li top Active current page Js End =====================

    // ========================== Select2 Js Start =================================
    $('.js-example-basic-single').select2();
    // ========================== Select2 Js End =================================

    $('.search-icon').on('click.mainjs', function () {
      $('.search-box').addClass('active');
    });
    $('.search-box__close').on('click.mainjs', function () {
      $('.search-box').removeClass('active');
    });
    // ========================== Select2 Js End =================================

    // ========================== Category Dropdown Responsive Js Start =================================
    $('.responsive-dropdown .has-submenus-submenu').on('click.mainjs', function () {

      const wWidth = $(window).width();
      if (wWidth < 992) {
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          $(this).children('.submenus-submenu').slideUp();
        } else {
          $('.responsive-dropdown .has-submenus-submenu').removeClass('active');
          $('.responsive-dropdown .has-submenus-submenu').children('.submenus-submenu').slideUp();

          $(this).addClass('active');
          $(this).children('.submenus-submenu').slideDown();
        }
      }
    });
    // ========================== Category Dropdown Responsive Js End =================================

    // ========================== On Click Category menu show Js Start =================================
    $('.category__button').on('click.mainjs', function () {
      $('.responsive-dropdown').addClass('active');
      $('.side-overlay').addClass('show');
      $('body').addClass('scroll-hide-sm');
    });
    $('.side-overlay, .close-responsive-dropdown').on('click.mainjs', function () {
      $('.responsive-dropdown').removeClass('active');
      $('.side-overlay').removeClass('show');
      $('body').removeClass('scroll-hide-sm');
    });
    // ========================== On Click Category menu show Js End =================================

    // ========================== Set Language in dropdown Js Start =================================
    $('.selectable-text-list li').each(function () {
      const thisItem = $(this);

      thisItem.on('click.mainjs', function () {
        const listText = thisItem.text();
        thisItem.parent().parent().find('.selected-text').text(listText);
      });
    });
    // ========================== Set Language in dropdown Js End =================================

    // ========================= Banner Slider Js Start ==============
    $('.banner-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 1000,
      dots: false,
      pauseOnHover: true,
      fade: true,
      cssEase: 'linear',
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      infinite: true,
      nextArrow: '#banner-next',
      prevArrow: '#banner-prev',
    });
    __Main.registerSlider('.banner-slider');
    // ========================= Banner Slider Js End ===================

    // ========================= Category Js Start ===================
    const categoryButton = document.querySelector('.category-button');
    const categoryDropdown = document.querySelector('.category-dropdown');

    if (categoryButton && categoryDropdown) {
      const onCategoryButtonClick = function (event) {
        event.stopPropagation();
        this.classList.toggle('active');
        categoryDropdown.classList.toggle('active');
      };
      const onCategoryDropdownClick = function (event) {
        event.stopPropagation();
        categoryButton.classList.add('active');
        categoryDropdown.classList.add('active');
      };
      const onBodyClick = function () {
        categoryButton.classList.remove('active');
        categoryDropdown.classList.remove('active');
      };

      __Main.addVanillaListener(categoryButton, 'click', onCategoryButtonClick);
      __Main.addVanillaListener(categoryDropdown, 'click', onCategoryDropdownClick);
      __Main.addVanillaListener(document.querySelector('body'), 'click', onBodyClick);
    }
    // ========================= Category Js End ===================

    // ========================= hot deals Slider Js Start ==============
    $('.product-one-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#product-one-next',
      prevArrow: '#product-one-prev',
      responsive: [
        { breakpoint: 1400, settings: { slidesToShow: 5, arrows: false } },
        { breakpoint: 1300, settings: { slidesToShow: 5, arrows: false } },
        { breakpoint: 1199, settings: { slidesToShow: 4, arrows: false } },
        { breakpoint: 991, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 768, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 2, arrows: false } },
      ]
    });
    __Main.registerSlider('.product-one-slider');
    // ========================= hot deals Slider Js End ===================

    // ========================= Banner Three Slider Js Start ==============
    $('.banner-three-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      fade: true,
      cssEase: 'linear',
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#banner-three-next',
      prevArrow: '#banner-three-prev',
    });
    __Main.registerSlider('.banner-three-slider');
    // ========================= Banner Three Slider Js End ===================

    // ========================= feature-item-wrapper Slider Js Start ==============
    $('.feature-item-wrapper').slick({
      slidesToShow: 10,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#feature-item-wrapper-next',
      prevArrow: '#feature-item-wrapper-prev',
      responsive: [
        { breakpoint: 1699, settings: { slidesToShow: 9 } },
        { breakpoint: 1599, settings: { slidesToShow: 8 } },
        { breakpoint: 1399, settings: { slidesToShow: 6 } },
        { breakpoint: 992, settings: { slidesToShow: 5 } },
        { breakpoint: 768, settings: { slidesToShow: 4 } },
        { breakpoint: 575, settings: { slidesToShow: 3 } },
        { breakpoint: 424, settings: { slidesToShow: 2 } },
        { breakpoint: 359, settings: { slidesToShow: 1 } },
      ]
    });
    __Main.registerSlider('.feature-item-wrapper');
    // ========================= feature-item-wrapper Slider Js End ===================

    // ========================= feature-three-item-wrapper Slider Js Start ==============
    $('.feature-three-item-wrapper').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#feature-item-wrapper-next',
      prevArrow: '#feature-item-wrapper-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 5 } },
        { breakpoint: 1399, settings: { slidesToShow: 4 } },
        { breakpoint: 992, settings: { slidesToShow: 3 } },
        { breakpoint: 768, settings: { slidesToShow: 3 } },
        { breakpoint: 575, settings: { slidesToShow: 2 } },
        { breakpoint: 424, settings: { slidesToShow: 2 } },
        { breakpoint: 359, settings: { slidesToShow: 1 } },
      ]
    });
    __Main.registerSlider('.feature-three-item-wrapper');
    // ========================= feature-three-item-wrapper Slider Js End ===================

    // ========================= Banner two Slider Js Start ==============
    $('.banner-item-two__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 1500,
      dots: true,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      fade: true,
      cssEase: 'linear',
      nextArrow: '#banner-next',
      prevArrow: '#banner-prev',
      responsive: [{ breakpoint: 767, settings: { slidesToShow: 1 } }]
    });
    __Main.registerSlider('.banner-item-two__slider');
    // ========================= Banner two Slider Js End ===================

    // ========================= flash-sales Slider Js Start ==============
    $('.flash-sales__slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#flash-next',
      prevArrow: '#flash-prev',
      responsive: [{ breakpoint: 991, settings: { slidesToShow: 1, arrows: false } }]
    });
    __Main.registerSlider('.flash-sales__slider');
    // ========================= flash-sales Slider Js End ==================

    // ========================= hot-deals Slider Js Start ==============
    $('.hot-deals-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#deals-next',
      prevArrow: '#deals-prev',
      responsive: [
        { breakpoint: 1399, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 1199, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.hot-deals-slider');
    // ========================= hot-deals Slider Js End ===================

    // ========================= deals-week Slider Js Start ==============
    $('.deals-week-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#deal-week-next',
      prevArrow: '#deal-week-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 5, arrows: false } },
        { breakpoint: 1399, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 1199, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.deals-week-slider');
    // ========================= deals-week Slider Js End ===================

    // ========================= top-selling-product Slider Js Start ==============
    $('.top-selling-product-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#top-selling-next',
      prevArrow: '#top-selling-prev',
      responsive: [
        { breakpoint: 1399, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 1199, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.top-selling-product-slider');
    // ========================= top-selling-product Slider Js End ===================

    // ========================= organic-food Slider Js Start ==============
    $('.organic-food__slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#organic-next',
      prevArrow: '#organic-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 6, arrows: false } },
        { breakpoint: 1399, settings: { slidesToShow: 4, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.organic-food__slider');
    // ========================= organic-food Slider Js End ===================

    // ========================= new-arrival Slider Js Start ==============
    $('.new-arrival__slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#new-arrival-next',
      prevArrow: '#new-arrival-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 6, arrows: false } },
        { breakpoint: 1399, settings: { slidesToShow: 4, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.new-arrival__slider');
    // ========================= new-arrival Slider Js End ===================

    // ========================= short-product-list Slider Js Start ==============
    $('.short-product-list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      prevArrow: '<button type="button" class="slick-prev border border-gray-100 w-30 h-30 bg-transparent rounded-pill position-absolute hover-bg-main-600 hover-text-white hover-border-main-600 transition-1"><i class="ph ph-caret-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next border border-gray-100 w-30 h-30 bg-transparent rounded-pill position-absolute hover-bg-main-600 hover-text-white hover-border-main-600 transition-1"><i class="ph ph-caret-right"></i></button>',
    });
    __Main.registerSlider('.short-product-list');
    // ========================= short-product-list Slider Js End ===================

    // ========================= Copy Coupon Code Js Start ===================
    const copyCouponBtn = document.querySelector('.copy-coupon-btn');
    const copyText = document.querySelector('.copy-text');

    if (copyCouponBtn && copyText) {
      copyText.style.display = 'none';

      const onCopyClick = function () {
        const text = this.textContent;
        navigator.clipboard.writeText(text);
        this.classList.add('copied');
        copyText.innerHTML = 'Copied';
        copyText.style.display = 'inline-block';

        setTimeout(() => {
          this.classList.remove('copied');
          copyText.style.display = 'none';
        }, 2000);
      };

      __Main.addVanillaListener(copyCouponBtn, 'click', onCopyClick);
    }
    // ========================= Copy Coupon Code Js End ===================

    // ========================= brand-slider Slider Js Start ==============
    $('.brand-slider').slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#brand-next',
      prevArrow: '#brand-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 7, arrows: false } },
        { breakpoint: 1399, settings: { slidesToShow: 6, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 5, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 4, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 359, settings: { slidesToShow: 2, arrows: false } },
      ]
    });
    __Main.registerSlider('.brand-slider');
    // ========================= brand-slider Slider Js End ===================

    // ========================= Category Two Js Start ===============================
    $('.category-two .category__button').on('click.mainjs', function () {
      $('.category-two .category__button').toggleClass('active')
      $('.responsive-dropdown.style-two').addClass('active').slideToggle(400);
    });
    // ========================= Category Two Js End ===============================

    // ========================= Featured Products Slider Js Start ==============
    $('.featured-product-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#featured-products-next',
      prevArrow: '#featured-products-prev',
      responsive: [{ breakpoint: 991, settings: { slidesToShow: 1, arrows: false } }]
    });
    __Main.registerSlider('.featured-product-slider');
    // ========================= Featured Products Slider Js End ==================

    // ========================= recommended-slider Slider Js Start ==============
    $('.recommended-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#recommended-next',
      prevArrow: '#recommended-prev',
      responsive: [
        { breakpoint: 1399, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 1199, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.recommended-slider');
    // ========================= recommended-slider Slider Js End ===================

    // ========================= vendor-card list Slider Js Start ==============
    $('.vendor-card__list.style-two').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#vendor-next',
      prevArrow: '#vendor-prev',
    });
    __Main.registerSlider('.vendor-card__list.style-two');
    // ========================= vendor-card list Slider Js End ===================

    // ========================= top-brand Slider Js Start ==============
    $('.top-brand__slider').slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#topBrand-next',
      prevArrow: '#topBrand-prev',
      responsive: [
        { breakpoint: 1599, settings: { slidesToShow: 7, arrows: false } },
        { breakpoint: 1399, settings: { slidesToShow: 6, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 5, arrows: false } },
        { breakpoint: 575, settings: { slidesToShow: 4, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 359, settings: { slidesToShow: 2, arrows: false } },
      ]
    });
    __Main.registerSlider('.top-brand__slider');
    // ========================= top-brand Slider Js End ===================

    // ========================= Product Details Thumbs Slider Js Start ===================
    $('.product-details__thumb-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.product-details__images-slider'
    });
    __Main.registerSlider('.product-details__thumb-slider');

    $('.product-details__images-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.product-details__thumb-slider',
      dots: false,
      arrows: false,
      focusOnSelect: true
    });
    __Main.registerSlider('.product-details__images-slider');
    // ========================= Product Details Thumbs Slider Js End ===================

    // ========================= Increment & Decrement Js Start ===================
    const minus = $('.quantity__minus');
    const plus = $('.quantity__plus');

    $(plus).on('click.mainjs', function () {
      const input = $(this).siblings('.quantity__input');
      let value = parseInt(input.val(), 10) || 0;
      value++;
      input.val(value);
    });

    $(minus).on('click.mainjs', function () {
      const input = $(this).siblings('.quantity__input');
      let value = parseInt(input.val(), 10) || 0;
      if (value > 1) {
        value--;
      }
      input.val(value);
    });
    // ========================= Increment & Decrement Js End ===================

    // ========================= Color List Js Start ===================
    $('.color-list__button').on('click.mainjs', function () {
      $('.color-list__button').removeClass('border-gray-900');

      if (!$(this).hasClass('border-gray-900')) {
        $(this).addClass('border-gray-900');
        $(this).removeClass('border-gray-50');
      } else {
        $(this).removeClass('border-gray-900');
        $(this).addClass('border-gray-50');
      };
    });
    // ========================= Color List Js End ===================

    // ========================== Range Slider Js Start =====================
    $(function () {
      $("#slider-range").slider({
        range: true,
        min: 0,
        max: 25,
        values: [0, 25],
        slide: function (event, ui) {
          $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
      });
      $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));
    });
    // ========================== Range Slider Js End =====================

    // ========================== List Grid Js Start ================================
    $('.list-btn').on('click.mainjs', function () {
      $('.grid-btn').addClass('border-gray-100');
      $('.grid-btn').removeClass('border-main-600 text-white bg-main-600');
      $('.list-grid-wrapper').removeClass('list-view');

      $(this).removeClass('border-gray-100');
      $(this).addClass('border-main-600 text-white bg-main-600');
      $('.list-grid-wrapper').addClass('list-view');
    });

    $('.grid-btn').on('click.mainjs', function () {
      $('.list-btn').addClass('border-gray-100');
      $('.list-btn').removeClass('border-main-600 text-white bg-main-600');
      $('.list-grid-wrapper').removeClass('list-view');

      $(this).removeClass('border-gray-100');
      $(this).addClass('border-main-600 text-white bg-main-600');
    });
    // ========================== List Grid Js End ================================

    // ========================== Shop Sidebar Js Start ================================
    $('.sidebar-btn').on('click.mainjs', function () {
      $(this).addClass('bg-main-600 text-white');
      $('.shop-sidebar').addClass('active');
      $('.side-overlay').addClass('show');
      $('body').addClass('scroll-hide-sm');
    });

    $('.side-overlay, .shop-sidebar__close').on('click.mainjs', function () {
      $('.sidebar-btn').removeClass('bg-main-600 text-white');
      $('.shop-sidebar').removeClass('active');
      $('.side-overlay').removeClass('show');
      $('body').removeClass('scroll-hide-sm');
    });
    // ========================== Shop Sidebar Js End ================================

    // ========================== Remove Tr Js Start ================================
    $('.remove-tr-btn').on('click.mainjs', function () {
      $(this).closest('tr').addClass('d-none')
    });
    // ========================== Remove Tr Js End ================================

    // ========================== Checkout Payment Method Js Start ================================
    $('.payment-item .form-check-input:checked').closest('.payment-item').find('.payment-item__content').show();

    $('.payment-item .form-check-input').on('change.mainjs', function () {
      $('.payment-item__content').hide();
      $(this).closest('.payment-item').find('.payment-item__content').show();
    });
    // ========================== Checkout Payment Method Js End ================================

    // ================== Password Show Hide Js Start ==========
    $(".toggle-password").on('click.mainjs', function () {
      $(this).toggleClass("active");
      const input = $($(this).attr("id"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    // ========================= Password Show Hide Js End ===========================

    // ========================= Background Image Js Start ===================
    $(".bg-img").css('background-image', function () {
      const bg = 'url(' + $(this).data("background-image") + ')';
      return bg;
    });
    // ========================= Background Image Js End ===================

    // ========================== Text Slide Js Start =====================
    $('.text-slider').marquee({
      pauseOnHover: true,
      allowCss3Support: true,
      css3easing: 'linear',
      easing: 'linear',
      delayBeforeStart: 0,
      duration: 7000,
      gap: 20,
      pauseOnCycle: false,
      startVisible: true
    });
    // ========================== Text Slide Js End =====================

    // ========================== Trending Products Js Start =====================
    $('.expand-btn').on('click.mainjs', function () {
      $(this).toggleClass('bg-main-two-600 text-white');
      $(this).parent().find('.expand-icons').toggleClass('d-flex');

      if ($(this).children('i').hasClass('ph ph-plus')) {
        $(this).children('i').removeClass('ph ph-plus')
        $(this).children('i').addClass('ph ph-x')
      } else {
        $(this).children('i').removeClass('ph ph-x')
        $(this).children('i').addClass('ph ph-plus')
      }
    });

    $('.wishlist-btn').on('click.mainjs', function () {
      if ($(this).children('i').hasClass('ph ph-heart')) {
        $(this).children('i').removeClass('ph ph-heart')
        $(this).children('i').addClass('ph-fill ph-heart text-main-two-600')
      } else {
        $(this).children('i').removeClass('ph-fill ph-heart text-main-two-600')
        $(this).children('i').addClass('ph ph-heart')
      }
    });
    // ========================== Trending Products Js End =====================

    // ========================== Wishlist Button Js Start =====================
    const wishlistBtnTwos = document.querySelectorAll('.wishlist-btn-two');

    if (wishlistBtnTwos) {
      wishlistBtnTwos.forEach(wishlistBtnTwo => {
        const handler = function () {
          this.classList.toggle('active');
        };
        __Main.addVanillaListener(wishlistBtnTwo, 'click', handler);
      });
    }
    // ========================== Wishlist Button Js End =====================

    // ========================== Instagram Slider Js Start =====================
    $('.instagram-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#instagram-next',
      prevArrow: '#instagram-prev',
      responsive: [
        { breakpoint: 1299, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 768, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 1, arrows: false } },
      ]
    });
    __Main.registerSlider('.instagram-slider');
    // ========================== Instagram Slider Js End =====================

    // ========================== Testimonials Thumbs Slider Js Start =====================
    $('.testimonials-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.testimonials-thumbs-slider',
      dots: true,
      centerMode: true,
      focusOnSelect: true,
      fade: true,
      cssEase: 'linear',
      dots: false,
      arrows: false,
    });
    __Main.registerSlider('.testimonials-slider');

    $('.testimonials-thumbs-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 1500,
      dots: false,
      pauseOnHover: true,
      arrows: true,
      draggable: true,
      rtl: $('html').attr('dir') === 'rtl' ? true : false,
      speed: 900,
      infinite: true,
      nextArrow: '#testi-next',
      prevArrow: '#testi-prev',
      asNavFor: '.testimonials-slider',
      responsive: [
        { breakpoint: 1299, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 992, settings: { slidesToShow: 3, arrows: false } },
        { breakpoint: 768, settings: { slidesToShow: 2, arrows: false } },
        { breakpoint: 424, settings: { slidesToShow: 2, arrows: false } },
      ]
    });
    __Main.registerSlider('.testimonials-thumbs-slider');
    // ========================== Testimonials Thumbs Slider Js End =====================

    // ========================= Wow Js Start ===================
    if (typeof WOW === 'function') {
      new WOW().init();
    }
    // ========================= Wow Js End ===================

    // ========================= AOS Animation Js Start ===================
    if (typeof AOS === 'object' && AOS.init) {
      AOS.init({
        offset: 40,
        duration: 1000,
        once: true,
        easing: 'ease',
      });
    }
    // ========================= AOS Animation Js End ===================

    // ========================= Counter Up Js End ===================
    const counterUp = window.counterUp && window.counterUp.default;

    if (counterUp) {
      const callback = (entries) => {
        entries.forEach((entry) => {
          const el = entry.target;
          if (entry.isIntersecting && !el.classList.contains('is-visible')) {
            counterUp(el, { duration: 2000, delay: 16 });
            el.classList.add('is-visible');
          }
        });
      };

      const IO = new IntersectionObserver(callback, { threshold: 1 });

      const counterNumbers = document.querySelectorAll('.counter');
      if (counterNumbers.length > 0) {
        counterNumbers.forEach((counterNumber) => {
          IO.observe(counterNumber);
        });
      }
    }
    // ========================= Counter Up Js End ===================

    // end document ready
  });

  // ========================= Preloader Js Start =====================
  $(window).on("load.mainjs", function () {
    $('.preloader').fadeOut();
  });
  // ========================= Preloader Js End=====================

  // ========================= Header Sticky Js Start ==============
  $(window).on('scroll.mainjs', function () {
    if ($(window).scrollTop() >= 260) {
      $('.header').addClass('fixed-header');
    } else {
      $('.header').removeClass('fixed-header');
    }
  });
  // ========================= Header Sticky Js End===================

  // Cleanup on pagehide / beforeunload
  window.addEventListener('pagehide', function () {
    if (window.__MAIN_CLEANUP_CALLED) return;
    window.__MAIN_CLEANUP_CALLED = true;
    if (window.__Main && typeof window.__Main.cleanup === 'function') {
      window.__Main.cleanup();
    } else {
      // try to call local __Main if available
      try { __Main.cleanup(); } catch (e) { /* ignore */ }
    }
  });

  window.addEventListener('beforeunload', function () {
    try { __Main.cleanup(); } catch (e) { /* ignore */ }
  });

  // expose cleanup for debugging/explicit call
  window.__Main = __Main;

})(jQuery);
