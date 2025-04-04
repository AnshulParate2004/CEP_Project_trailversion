function Indices() {
  var self = this;
  this.start = function() {
    if (typeof self.individualKickOff === "function") {
      self.individualKickOff(); // in index page
    }
    self.indicesKickOff(); //sfindices.js
  };

  this.openSidebar = function() {
    $('.sidebar').show();
    setTimeout(function() {
      $('.sidebar').addClass('show');
    },100);
    //move tab indices
    $('.top-nav').find('a, button').attr('tabindex',-1);
    $('main').find('a').attr('tabindex',-1);
    $('.sidebar').find('a, button').removeAttr('tabindex');
    document.addEventListener('keydown', self.handleEscapesidebar);
    $('.close-sidebar').focus();
  }

  this.closeSidebar = function() {
    $('.sidebar').removeClass('show');
    setTimeout(function() {
      $('.sidebar').hide();
    },500);
    $('.top-nav').find('a, button').removeAttr('tabindex');
    $('main').find('a').removeAttr('tabindex');
    $('.sidebar').find('a,button').attr('tabindex',-1);
    $('.hamburger').focus();
    document.removeEventListener('keydown', self.handleEscapesidebar);
  }

  this.handleEscapesidebar = function(event) {
    if (event.key === 'Escape' || event.key === 'Esc') {
      self.closeSidebar();
    }
  }

  this.scaleContentContainers = function(baseViewportWidth, baseViewportHeight, baseTopNavHeight, baseFontSize, contentContainer) {
    baseViewportWidth = baseViewportWidth !== undefined ? baseViewportWidth : 1024;
    baseViewportHeight = baseViewportHeight !== undefined ? baseViewportHeight : 688;
    baseTopNavHeight = baseTopNavHeight !== undefined ? baseTopNavHeight : 80;
    baseFontSize = baseFontSize !== undefined ? baseFontSize : 9;
    contentContainer = contentContainer !== undefined ? contentContainer : '.content-container';
    var container = document.querySelector(contentContainer);
    var topNav = document.querySelector('.top-nav');
    var body = document.querySelector('body');
    var topNavContentContainer = document.querySelector('.top-nav-content-container');
    var viewportWidth = window.innerWidth;
    var viewportHeight = window.innerHeight;

    var scaleFactor = Math.min(viewportWidth / baseViewportWidth, viewportHeight / (baseViewportHeight+baseTopNavHeight));

    var topNavHeight = baseTopNavHeight * scaleFactor;

    var availableHeight = viewportHeight - topNavHeight;

    var width = Math.min(viewportWidth, (availableHeight) * (baseViewportWidth / baseViewportHeight));
    var height = width * (baseViewportHeight / baseViewportWidth);

    if (container !== null) {
      container.style.width = width + 'px';
      container.style.height = height + 'px';
    }

    if (topNav != null) {
      topNav.style.height = topNavHeight + 'px';
      topNav.style.visibility = 'visible';
    }

    document.body.style.height = (topNavHeight + height) + 'px';

    if (topNavContentContainer != null) {
      var topNavContentContainerWidth = baseViewportWidth * (width / baseViewportWidth);
      topNavContentContainer.style.width = topNavContentContainerWidth + 'px';
    }

    var fontSize = baseFontSize * (width / baseViewportWidth);
    body.style.fontSize = fontSize + 'pt';
  };

  this.indicesKickOff = function() {

    window.addEventListener('resize', function () {
      if (typeof self.individualResize === "function") {
        self.individualResize(); //function in index template
      }
    });

    window.dispatchEvent(new Event('resize')); //To scale the content
    if (typeof CanvasResizer !== 'undefined') {
      var Resize = new CanvasResizer.Resize();
      Resize.framework = null;
      Resize.rotateIconContainer = document.getElementById("rotate_icon_container");
      Resize.start();
    }
  }
}


