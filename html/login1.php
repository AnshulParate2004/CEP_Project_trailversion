<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <meta name="description" content="Sign into your Starfall account to access member content">
    <title>Sign In</title>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <style>
        body, td, th {
          font-family: Trebuchet MS, Verdana, sans-serif;
          background: #ddfc8f;
          color: #006600;
          padding: 0px;
          margin: 0px;
        }
        a{
          display: block;
          font-size: 14px;
        }
        h1{
          font-size: 28px;
          color: #006600;
          margin-top: 0;
        }
        .form-block .sign-in-btn{
          width: 50%;
          padding-top: 12px;
        }
        .sf-header{
          max-width: 660px;
          margin: 5px auto;
          position: relative;
          overflow: hidden;
          display: flex;
        }
        .sf-header span{
          display: flex;
          padding: 5px;
        }
        .sf-header span .info{
          padding: 6px 0 0 20px;
        }
        .sf-header a.site-logo{
          position: absolute;
          right: 0;
          bottom: 0;
        }
        .sf-signin{
            background-color:#ddfc8f;
            max-width: 660px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            display: flex;
            border: 2px solid #006600;
            border-radius: 5px;
        }

        .sf-login-block{
          background-color:#b2f948;
          width: 70%;
          padding: 36px;
          text-align: center;
        }

        .form-block a{
          padding-top: 20px;
        }
        .form-block label{
          margin-top: 10px;
          text-align: end;
        }
        .email-label{
          margin-left: 13px;
        }
        .form-block input{
          margin-top: 10px;
          width: 80%;
        }
        .sf-error-msg{
          color: #9a1305;
        }

        .form-block .form-style label.label_error,
        .sf-access-code-block label.label_error {
          color: #a80101;
          font-weight: bold;
          display: inline-block;
          word-break: break-word;
        }

        *::-ms-backdrop, .form-block .form-style label.label_error {           
            width: 25%;
            text-align: right; 
          } /* IE11 */

        *::-ms-backdrop,.sf-access-code-block label.label_error  {
            width: 100% !important;
            text-align: center !important; 
            overflow-x: hidden;
            word-wrap: break-word;
        }  

        .form-block input.inputs_error,
        .sf-access-code-block input.inputs_error {
          border: 1px solid #cc0000;
          outline-offset: 0px;
          outline: 4px solid #cc0000;
        }

        .error-messages {
          background-color: #ab0101;
          color: #fff;
          padding: 15px;
          display: none;
        }

        .sf-access-code-block a.about-access-code{
          font-size: 14px !important;
        }

        @media (max-width: 767px) {
          .error-messages {
            padding: 10px;
          }
        }
        .sf-jointoday-block{
          background-color:#fdf85f;
          width: 30%;
          padding: 20px;
          border-left: 2px solid #006600;
          text-align: center;
        }

        .sf-jointoday-block a img{
          width: 75%;
        }

        .sub-heading{
          font-weight: bold;
          font-size: 18px;
          margin: 18px 0;
        }

        .sf-access-code-block{
          background-color:#fefdc4;
          padding: 10px;
          margin: 25px 0;
          border: 2px solid #006600;
          border-radius: 5px;
          text-align: center;
        }
        .register-code{
          width: 100%;
          margin: 10px 0;
        }

        .enter-code-label{
          font-size: 14px;
        }
        .enter-code{
          margin-top: 15px;
          max-width: 99%;
        }
        .sf-access-code-block a{
          font-size: 10px;
          display: block;
          margin-bottom: 14px;
        }
        .sf-bottom{
          display: flex;
          justify-content: center;
        }
        .sf-bottom p{
          font-size: 10px;
        }

        .js-email, .js-password{
          min-width: 180px;
          max-width: 238px;
          max-height: 21px;
        }

        .modal-content {
          background: #fff;
          border: 1px solid #000;
          padding: 0;
          max-width: 500px;
          font-size: 18px;
          margin: 0 auto;
          opacity: 0;
          height: 0;
          visibility: hidden;
          transition: opacity 0.35s ease;
          -webkit-transition: opacity 0.35s ease;
          -moz-transition: opacity 0.35s ease;
          -ms-transition: opacity 0.35s ease;
          -o-transition: opacity 0.35s ease;
        }

        .modal-content > div {
          visibility: hidden;
          height: 0;
        }

        .modal-content.show {
          opacity: 1;
          height: auto;
          visibility: visible;
          padding: 15px;
          position: absolute;
          top: 30px;
          left: 15px;
          right: 15px;
        }

        .modal-content.show > div {
          visibility: visible;
          height: auto;
        }

        body.overlay {
          pointer-events: none;
        }

        body.overlay .modal-content.show {
          pointer-events: auto;
          max-height: 50vh;
          overflow-y: auto;
        }

        /* .modal-content h1{
          font-size: 28px;
          color: #424242;
        } */

        .modal-content h3 {
          margin-bottom: 5px;
        }

        .modal-content p {
          line-height: 22px;
          margin-top: 0;
        }

        .close-icon {
          float: right;
          font-weight: bold;
          font-size: 26px;
          cursor: pointer;
        }

        .close-icon a {
          text-decoration: none;
          color: #000;
        }

        .close-modal {
          border: none;
          background: transparent;
          position: absolute;
          top: 0;
          right: 0;
          cursor: pointer;
        }

        .email-label { grid-area: email-label; }
        #email { grid-area: email-input; }
        .password-label { grid-area: password-label; }
        #password { grid-area: password-input; }
        .form-style{
          display: grid;
          grid-template-areas:
            'email-label email-input email-input email-input email-input email-input'
            'password-label password-input password-input password-input password-input password-input';
          grid-gap: 10px;
        }
        /* mobile css */
        @media (max-width: 767px) {
          .sf-signin{
              display: inherit;
              margin: 0 5px;
          }
          .sf-signin .sf-login-block{
            width: inherit;
          }
          .sf-signin .sf-jointoday-block{
            width: inherit;
            border-left: none;
          }
          .sf-jointoday-block a img {
            width: 40%;
          }
          .sf-access-code-block input{
            width: 50%;
            margin-bottom: 5px;
          }
        }

        @media print {
           #mainPage, #print-icon, #cancel { display: none !important; }
           .modal-content.show{overflow-y: visible !important; width: 100% !important; border: 0 !important; margin: 0 !important; padding: 0 !important;}
        }

    </style>
        <script src="../scripts/jquery-3.2.1.min.js"></script>
    <script src="../scripts/about-access-codes.js"></script>
    <script>
        function showRedoMessage(message) {
           var errorElement = document.getElementById("error-messages");
           errorElement.innerHTML = message;
           errorElement.style.display = "block";
       }
       function hideRedoMessage() {
           document.getElementById("error-messages").style.display = "none";
       }
       function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\><');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
       function showErrorMessage(message)
       {
          if(!message){
              message = getParameterByName("error");
              message.replace(/(?:\r\n|\r|\n)/g, '<br>');
              console.log(message);
          }
          if(message != null && message != ''){
            showRedoMessage(message);
            var codeEL = $("#enter-code");
            var label = $(".enter-code-label");
            codeEL.addClass("inputs_error");
            codeEL.attr("aria-labelledby", "error-messages");
            codeEL.focus();
            label.addClass("label_error");
            label.text(message);
          }            
       }
      function validateLogin(frm){
        //return false;
        var email = document.forms["signin-form"]["email"];
        var password = document.forms["signin-form"]["password"];
        // Email validation
        var label = $(".email-label");
        if (email.value === "") {
          showRedoMessage('Enter email');
          var email = $("#email");
          email.addClass("inputs_error");
          email.attr("aria-labelledby", "error-messages");
          label.addClass("label_error");
          label.text('Enter email');
          email.focus();
          return false;
        } else {
          if (
            email.value.length < 6 ||
            email.value.length > 254 ||
            email.value.indexOf("@") < 1 ||
            email.value.indexOf(".") < 1 ||
            //email.value.indexOf(".") <= email.value.indexOf("@") + 1 ||
            email.value.length - email.value.lastIndexOf(".") < 3 ||
            email.value.indexOf('"') > -1 ||
            email.value.indexOf("<") > -1 ||
            email.value.indexOf(">") > -1
          ) {
            showRedoMessage('Valid email required');
            var email = $("#email");
            email.addClass("inputs_error");
            email.attr("aria-labelledby", "error-messages");
            label.addClass("label_error");
            label.text('Valid email required');
            email.focus();
            return false;
          }
        }
        var email = $("#email");
        email.removeClass("inputs_error");
        var label = $(".email-label");
        label.removeClass("label_error");
        label.text("Email");
        hideRedoMessage();

        // Password validation
        var label = $(".password-label");
        if (password.value === "") {
          showRedoMessage('Enter password');
          var password = $("#password");
          password.addClass("inputs_error");
          password.attr("aria-labelledby", "error-messages");
          label.addClass("label_error");
          label.text('Enter password');
          password.focus();
          return false;
        } else {
          if (password.value.length < 5 || password.value.indexOf('"') > -1) {
            if (password.value.length < 5) {
              showRedoMessage('Password is too short');
              label.text('Password is too short');
            }
            if (password.value.indexOf('"') > -1) {
              showRedoMessage('Cannot contain quote');
              label.text('Cannot contain quote');
            }
            var password = $("#password");
            password.addClass("inputs_error");
            password.attr("aria-labelledby", "error-messages");
            label.addClass("label_error");
            password.focus();
            return false;
          }
        }
        var password = $("#password");
        password.removeClass("inputs_error");
        var label = $(".password-label");
        label.removeClass("label_error");
        label.text("Password");
        hideRedoMessage();
        return true;
      }
      function validateAccessCode(frm){
        var codeEL = $("#enter-code");
        var label = $(".enter-code-label");
        var code = codeEL.val().trim();
        if(code === ""){
          showRedoMessage('Enter code');
          codeEL.addClass("inputs_error");
          codeEL.attr("aria-labelledby", "error-messages");
          codeEL.focus();
          label.addClass("label_error");
          label.text('Enter code');
          return false;
        }
        var firstLetter = code.charAt(0).toUpperCase();          
        code = code.replace(/ /g, "");
        code = code.replace(/-/g, "");

        if (!code.match(/^[0-9a-zA-Z]+$/) || !(firstLetter == 'H' || firstLetter == 'C' || firstLetter == 'S' || firstLetter == 'T')){
          showRedoMessage('Invalid code');
          codeEL.addClass("inputs_error");
          codeEL.attr("aria-labelledby", "error-messages");
          codeEL.focus();
          label.addClass("label_error");
          label.text('Invalid code');
          return false;
        }
        if(code.length < 20){
          showRedoMessage('Code too short');
          codeEL.addClass("inputs_error");
          codeEL.attr("aria-labelledby", "error-messages");
          codeEL.focus();
          label.addClass("label_error");
          label.text('Code too short');
          return false;
        }else  if(code.length > 20){
          showRedoMessage('Code too long');
          codeEL.addClass("inputs_error");
          codeEL.attr("aria-labelledby", "error-messages");
          codeEL.focus();
          label.addClass("label_error");
          label.text('Code too long');
          return false;
        }        
        return true;
      }
      $(document).ready(function () {
          var SignIn = function () {
            var self = this;
            this.init = function () {
              this.bindForm();
            }
            this.bindForm = function () {
              var form = document.getElementById('signin-form');
              form.addEventListener('submit', function (event) {
                  event.preventDefault();
                  self.doValidate(this);
              });
            }
            this.doValidate = function (f) {
              if (validateLogin(f)) {                      
                  $(f).submit();
              }
            }
          };
          var signApp = new SignIn();
          signApp.init();

          var AccessCode = function () {
            var self = this;
            this.init = function () {
              this.bindForm();
            }
            this.bindForm = function () {
              var form = document.getElementById('code-form');
              form.addEventListener('submit', function (event) {
                  event.preventDefault();
                  self.doValidate(this);
              });
            }
            this.doValidate = function (f) {
              if (validateAccessCode(f)) {                      
                  $(f).submit();
              }
            }
          };
          var ac = new AccessCode();
          ac.init();
      });       
    </script>
    </head>

<body>
    <div id="error-messages" class="error-messages"></div>
    <div id="mainPage" aria-hidden="false" role="main" class="main-content">
        <div class="sf-header">
            <span><a href="../html/www.starfall.com.html"><img src="../images/back-mobile.png" width="27" height="27" alt="Back" border="0" valign="middle"></a>
                <a href="../html/www.starfall.com.html" class="info" style="text-decoration:none;">Main Index</a></span>
            <a href="../html/www.starfall.com.html" class="site-logo">
                <img src="../images/starfall.png" style="width:143px; height:39px; border:0;" alt="Starfall.com">
            </a>
        </div>
        <div class="sf-signin">
            <div class="sf-login-block">
                <h1>Sign In</h1>
                <div class="sub-heading">Already a Member? Enter your Email
                    and Password below</div>
                    <div></div>
                <form name="signin-form" id="signin-form" method="post" action="login2.php?&signin=1" novalidate>
                    <div class="form-block">
                        <div class="form-style">
                            <label id="email_label" for="email" style="display:none">Email for Sign in</label>
                            <label class="email-label">Email:</label>
                            <input id="email" aria-labelledby="email_label" type="email" alt="Email for Sign in" title="Email for Sign in" class="form-control js-email" name="Email" placeholder="email"><br>
                            <label id="password_label" for="password" style="display:none">Password for Sign in</label>
                            <label class="password-label">Password:</label>
                            <input id="password" aria-labelledby="password_label" type="password" alt="Password for Sign in" title="Password for Sign in" class="form-control js-password" name="Password" placeholder="password">
                        </div>
                        <input type="image" class="sign-in-btn" src="imgs/sign-in.png" alt="Sign in" title="Sign in" border="0" name="LOGIN" id="LOGIN">
                        <a href="../html/login1b.php.html" class="forgot-password">Have you forgotten your password?</a>
                    </div>
                </form>
            </div>
            <div class="sf-jointoday-block">
                <div class="sub-heading">Not yet a member?</div>
                <a href="../html/ways-to-join.html" title="Join today"><img src="../images/join-today.png" alt="Join today" style="border:0;"></a>
                <div class="sf-access-code-block ie-access">
                    <form action="certificate1.php?" method="post" id="code-form" name="code-form" novalidate>
                        <div class="sub-heading">Have an Access Code?</div>
                        <label class="enter-code-label" for="enter-code">Enter your code below:</label>
                        <input id="enter-code" type="text" alt="Access code if you already have one" title="Access code if you already have one" class="form-control enter-code" name="cert" placeholder="">
                        <input type="image" class="register-code" src="imgs/register-code.png" alt="Register Your Access Code" title="Register Your Access Code" border="0">
                        <a href="../html/javascript:void(0).html" class="about-access-code" alt="About Access Codes" title="About Access Codes">About Access Codes</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="sf-bottom">
            <p class="copyright">© 2002–
                2025 Starfall Education</p>
        </div>
    </div>
    <div class="modal-content" id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
        <div class="article">
            <a href="" class="print-icon" onclick="window.print(); return false;">
                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path d="M4,6.4 C3.5581722,6.4 3.2,6.7581722 3.2,7.2 C3.2,7.6418278 3.5581722,8 4,8 C4.4418278,8 4.8,7.6418278 4.8,7.2 C4.8,6.7581722 4.4418278,6.4 4,6.4 Z M13.6,3.2 L12.8,3.2 L12.8,0.8 C12.8,0.3581722 12.4418278,0 12,0 L4,0 C3.5581722,0 3.2,0.3581722 3.2,0.8 L3.2,3.2 L2.4,3.2 C1.0745166,3.2 0,4.2745166 0,5.6 L0,10.4 C0,11.7254834 1.0745166,12.8 2.4,12.8 L3.2,12.8 L3.2,15.2 C3.2,15.6418278 3.5581722,16 4,16 L12,16 C12.4418278,16 12.8,15.6418278 12.8,15.2 L12.8,12.8 L13.6,12.8 C14.9254834,12.8 16,11.7254834 16,10.4 L16,5.6 C16,4.2745166 14.9254834,3.2 13.6,3.2 Z M4.8,1.6 L11.2,1.6 L11.2,3.2 L4.8,3.2 L4.8,1.6 Z M11.2,14.4 L4.8,14.4 L4.8,11.2 L11.2,11.2 L11.2,14.4 Z M14.4,10.4 C14.4,10.8418278 14.0418278,11.2 13.6,11.2 L12.8,11.2 L12.8,10.4 C12.8,9.9581722 12.4418278,9.6 12,9.6 L4,9.6 C3.5581722,9.6 3.2,9.9581722 3.2,10.4 L3.2,11.2 L2.4,11.2 C1.9581722,11.2 1.6,10.8418278 1.6,10.4 L1.6,5.6 C1.6,5.1581722 1.9581722,4.8 2.4,4.8 L13.6,4.8 C14.0418278,4.8 14.4,5.1581722 14.4,5.6 L14.4,10.4 Z" id="path-1" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="print-icon">
                            <g id="Shape" fill="#000000" fill-rule="nonzero">
                                <path d="M4,6.4 C3.5581722,6.4 3.2,6.7581722 3.2,7.2 C3.2,7.6418278 3.5581722,8 4,8 C4.4418278,8 4.8,7.6418278 4.8,7.2 C4.8,6.7581722 4.4418278,6.4 4,6.4 Z M13.6,3.2 L12.8,3.2 L12.8,0.8 C12.8,0.3581722 12.4418278,0 12,0 L4,0 C3.5581722,0 3.2,0.3581722 3.2,0.8 L3.2,3.2 L2.4,3.2 C1.0745166,3.2 0,4.2745166 0,5.6 L0,10.4 C0,11.7254834 1.0745166,12.8 2.4,12.8 L3.2,12.8 L3.2,15.2 C3.2,15.6418278 3.5581722,16 4,16 L12,16 C12.4418278,16 12.8,15.6418278 12.8,15.2 L12.8,12.8 L13.6,12.8 C14.9254834,12.8 16,11.7254834 16,10.4 L16,5.6 C16,4.2745166 14.9254834,3.2 13.6,3.2 Z M4.8,1.6 L11.2,1.6 L11.2,3.2 L4.8,3.2 L4.8,1.6 Z M11.2,14.4 L4.8,14.4 L4.8,11.2 L11.2,11.2 L11.2,14.4 Z M14.4,10.4 C14.4,10.8418278 14.0418278,11.2 13.6,11.2 L12.8,11.2 L12.8,10.4 C12.8,9.9581722 12.4418278,9.6 12,9.6 L4,9.6 C3.5581722,9.6 3.2,9.9581722 3.2,10.4 L3.2,11.2 L2.4,11.2 C1.9581722,11.2 1.6,10.8418278 1.6,10.4 L1.6,5.6 C1.6,5.1581722 1.9581722,4.8 2.4,4.8 L13.6,4.8 C14.0418278,4.8 14.4,5.1581722 14.4,5.6 L14.4,10.4 Z" id="path-2" />
                            </g>
                            <g id="Colors/@7E8F9F-Clipped">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1" />
                                </mask>
                                <g id="path-3" />
                                <g id="Colors/@7E8F9F" mask="url(#mask-2)" fill="#7E8F9F" fill-rule="nonzero">
                                    <g transform="translate(-4.000000, -4.000000)" id="Rectangle">
                                        <rect x="0" y="0" width="24" height="24" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <h1 class="modalTitle" id="modalTitle" tabindex="0">What is an access code?</h1>
            <div class="authors">
                <div class="item-info">
                    Updated on March 26, 2020
                </div>
            </div>
            <div class="article-body" id="modalDescription">
                <p>An access code is used one time to create a new Starfall membership account or to add time to an existing membership. Those who join or renew with a purchase order or by mail, fax, or phone will usually receive an access code via email.</p>
                <p><span style="text-decoration: underline;">Using an access code:</span></p>
                <ul>
                    <li>It is easiest to copy (ctrl/cmd+c) and paste (ctrl/cmd+v) a code into the access code field if you received it digitally</li>
                    <li>Zeros and the letter "O" are interchangeable - you can use either to enter your code</li>
                    <li>The access code field is not case sensitive - you can use both upper and lowercase letters</li>
                </ul>
                <p><span style="text-decoration: underline;">You do<strong> not</strong> need an access code if you:</span></p>
                <ul>
                    <li>Join Starfall or renew a membership online</li>
                    <li>Renew an existing membership via email, fax, or phone and include your membership email address(es) with your order.</li>
                </ul>
                <p>An access code is good for a specific amount of membership time, usually a year, and for a membership level. Membership levels are Home, Teacher, Classroom, and School. When purchasing more time for an existing membership, Starfall Customer Service (who generates the access code) will need the level of current membership in order to ensure the level of the new access code matches the current membership level.</p>
                <p>Refer to the following articles for detailed information about membership levels and using access codes:</p>
                <p><a href="../html/help-me-choose-a-membership.html" target="_blank">Help me choose a membership.</a></p>
                <p><a href="../html/use-an-access-code-to-create-a-new-membership-account.html" target="_blank">Use an access code to create a new membership account.</a></p>
                <p><a href="../html/use-an-access-code-to-add-more-time-to-an-active-or-expired-membership-account.html" target="_blank">Add more time to an existing membership account with an access code.</a></p>
                <p>&#160;</p>
            </div>
        </div>
        <button id="modalCloseButton" class="close-modal" title="Close details dialog">
            <img id="cancel" src="../images/close.png" alt="close the details dialog">
        </button>
    </div>
    <script>
    // report login errors from server
    $(document).ready(function() {
        var errorEmail = '';
        var errorPass = '';
        var errorCert = 'Enter your code below:';

        // reset everything first
        $('label').removeClass("label_error");
        $('label').defaultValue;

        if (errorEmail) {
            var label = $(".email-label");
            var email = $("#email");

            email.addClass("inputs_error");
            email.attr("aria-labelledby", "error-messages");
            label.addClass("label_error");
            label.text(errorEmail);
            email.focus();

            showRedoMessage(errorEmail);
            return false;
        }

        if (errorPass) {
            var label = $(".password-label");
            var password = $("#password");

            password.addClass("inputs_error");
            password.attr("aria-labelledby", "error-messages");
            label.addClass("label_error");
            label.text('Password not correct');
            password.focus();

            showRedoMessage('Password not correct');
            return false;
        }

        if (errorCert && errorCert !== 'Enter your code below:') {
            var codeEL = $("#enter-code");
            var label = $(".enter-code-label");

            codeEL.addClass("inputs_error");
            codeEL.attr("aria-labelledby", "error-messages");
            codeEL.focus();
            label.addClass("label_error");
            label.text(errorCert);

            showErrorMessage(errorCert);
            return false;
        }

    });
    </script>
</body>

</html>