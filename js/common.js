var mcwModule = (function () {

  "use strict";

  var cachedDOM = {};
  var cache = {};

  var cacheDOM = function () {
    var self = {};

    self.mobileMenuButton = $('.hamburger');
    self.mobileMenu = $('.l-header__menu-wrapper');
    self.searchWrapper = $('.m-search-from');
    self.searchInput = $('.m-search-from__input');
    self.footerDropdownMenu = $(".m-dropdown-menu");
    self.footerDropdownMenuItem = $(".m-dropdown-menu__item");
    self.haritageSection = $(".l-harritage");
    self.haritageTopSection = $(".m-harritage");
    self.historyCard = $(".m-history-card");
    self.grapeLeaf = $(".m-grape-leaf__leaf");
    self.windowWidth = $(window).width();
    self.subMenu = $('.sub-menu');
    self.menuItem = $(".m-menu__list > .menu-item");
    self.angleMobileMenu = $(".m-menu__angle-btn");
    return self;
  };

  var toggleMenu = function () {
    cachedDOM.mobileMenuButton.click(function (e) {
      e.stopPropagation();
      cachedDOM.mobileMenuButton.toggleClass('is-active');
      cachedDOM.mobileMenu.toggleClass('l-header__menu-wrapper--opened');
    });

    $(document).on('click', function (e) {
      if ($(cachedDOM.mobileMenu).has(e.target).length === 0) {
        cachedDOM.mobileMenuButton.removeClass('is-active');
        cachedDOM.mobileMenu.removeClass('l-header__menu-wrapper--opened');
        cachedDOM.subMenu.removeClass('sub-menu--opened');
      }
    });
  };

  var addItemSubMenu = function () {
    cachedDOM.subMenu
    .prepend('<li id="back_to_main" class="sub-menu__back-to-menu"><span><i class="i-icon-arrowleft"></i>BACK TO MAIN MENU</span></li>');
  };

  var _prependBtnMobileMenu = function () {
    var angleBtn = '<button class="m-menu__angle-btn"><i class="i-icon-arrowright"></i></button>';

    cachedDOM.menuItem.find(".sub-menu").each(function (index, element) {
      $(element).parent().prepend(angleBtn);
    });
  };

  var openSubMenuMobile = function () {

    $(window).on('resize', function () {

      if ($(window).width() < 1170) {
        _prependBtnMobileMenu();

        $(".m-menu__angle-btn").click(function (e) {
          e.stopPropagation();
          $(this).parent().find(".sub-menu").addClass('sub-menu--opened');
        });

        $(".sub-menu__back-to-menu").on('click', function (e) {
          e.stopPropagation();
          cachedDOM.subMenu.removeClass('sub-menu--opened');
        });
      }
    });
  };

  var toggleSearch = function () {
    cachedDOM.searchInput.on('click', function (event) {
      cachedDOM.searchInput.val(cache.serchInputValue);
      cachedDOM.searchWrapper.addClass('m-search-from--active');
      event.stopPropagation();
    });
  };

  var outsideSearchClick = function () {
    cachedDOM.searchInput.blur(function () {
      var getInputValue = cachedDOM.searchInput.val();
      cache.serchInputValue = getInputValue;
      cachedDOM.searchInput.val('');
      cachedDOM.searchWrapper.removeClass('m-search-from--active');
    });
  };

  var footerDropDownMenu = function () {
    cachedDOM.footerDropdownMenu.click(function (e) {
      e.stopPropagation();
      cachedDOM.footerDropdownMenu.removeClass("m-dropdown-menu--active");
      $(this).addClass("m-dropdown-menu--active");
    });

    $(document).on('touchstart click', function (e) {
      cachedDOM.footerDropdownMenu.removeClass("m-dropdown-menu--active");
    });

    cachedDOM.footerDropdownMenuItem.on('click', function (e) {
      e.preventDefault();
    });
  };

  var fixObjectFitImages = function () {
    //if (!Modernizr.objectfit) {
      $('.m-horizontal-card__image-wrapper').each(function () {
        var $container = $(this),
        imgUrl = $container.find('img').prop('src');
        if (imgUrl) {
          $container
          .css('backgroundImage', 'url(' + imgUrl + ')')
          .addClass('compat-object-fit');
        }
      });
   // }
 };

 var accordion = function () {
  $('.m-product-search__accordion').on('click', function (event) {
    event.preventDefault();
    $(this).toggleClass('m-product-search__accordion_open');
    $(this).parent().find('.m-product-search__accordion-element').slideToggle(400);
  });
}

var fixedMenu = function() {
  var stickySidebar = $('.m-product-search__wrapper');
  if (stickySidebar.length > 0) {
    var stickyHeight = stickySidebar.height(),
    sidebarTop = stickySidebar.offset().top;
  }
  $('.m-product-search__accordion').on('click', function() {
    setTimeout(function() {
      if (stickySidebar.length > 0) {
        stickyHeight = stickySidebar.height();
      }
    }, 420);
  });
  $(window).scroll(function () {
    if (stickySidebar.length > 0) {
      var scrollTop = $(window).scrollTop();
      if (sidebarTop < scrollTop) {
        stickySidebar.css('top', scrollTop - sidebarTop);
        var sidebarBottom = stickySidebar.offset().top + stickyHeight,
        stickyStop = $('.m-product-search').offset().top + $('.m-product-search').height();
        if (stickyStop < sidebarBottom) {
          var stopPosition = $('.m-product-search').height() - stickyHeight;
          stickySidebar.css('top', stopPosition);
        }
      }
      else {
        stickySidebar.css('top', '0');
      }
    }
  });
  $(window).resize(function () {
    if (stickySidebar.length > 0) {
      stickyHeight = stickySidebar.height();
    }
  });
}

var toggleFilter = function () {
  $('.m-product-search__refine').on('click', function(event) {
    $('.m-input-group__clear, .m-product-search__close, .m-product-search__title, .m-product-search__search input, .m-product-search__search .m-btn, .m-product-search__list').toggle(400);
    $('.m-product-search').toggleClass('m-product-search_active');
  });
  $('.m-product-search__close').on('click', function(event) {
   $('.m-input-group__clear, .m-product-search__close, .m-product-search__title, .m-product-search__search input, .m-product-search__search .m-btn, .m-product-search__list').toggle(400);
   $('.m-product-search').toggleClass('m-product-search_active');
 });
};

var init = function () {
  cachedDOM = cacheDOM();
  toggleMenu();
  addItemSubMenu();
  openSubMenuMobile();
  toggleSearch();
  outsideSearchClick();
  footerDropDownMenu();
  fixObjectFitImages();
  accordion();
  fixedMenu();
  toggleFilter();
};

return {
  init: init
}
})();

$(document).ready(function (event) {
  mcwModule.init();
});
