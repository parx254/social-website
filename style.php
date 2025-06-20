/* Reset & Base Styles */
 *, footer ul {
	 list-style: none;
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}
/* Style links globally */
 a {
	 text-decoration: none;
	 cursor: pointer;
}
/* Forms */
 @font-face {
	 font-family: MontHeavy;
	 src: url("webfonts/Mont-Heavy.ttf") format("opentype");
}
 @font-face {
	 font-family: MontLight;
	 src: url("webfonts/Mont-Light.ttf") format("opentype");
}
 @font-face {
	 font-family: MontRegular;
	 src: url("webfonts/Mont-Regular.ttf") format("opentype");
}
 @font-face {
	 font-family: MontBold;
	 src: url("webfonts/Mont-Bold.ttf") format("opentype");
}
/* Base styles for body */
 body {
	 font-family: MontRegular, sans-serif;
	 color: #222;
	 -webkit-font-smoothing: antialiased;
	 -moz-osx-font-smoothing: auto;
	 overflow-x: hidden;
}
/* Typography */
 h1, h2, h3, h4, h5 {
	 font-family: MontBold, sans-serif;
	 color: #000;
	 text-decoration: none;
}
/* Components */
 #toggle, .dropdown, nav #menu {
	 float: right;
}
 #resize, #toggle {
	 visibility: hidden;
}
/* Layout */
 .column a, .feedPostTitle img:hover, .feedposts a:hover, .feedposts button:hover, .postcontent button:hover, .videofeedPostTitle img:hover, .videofeedposts button:hover, nav #menu #response1 a, nav #menu #response1 ul li:hover:not(active) {
	 moz-transition: 0.2s ease-in-out 0.2s;
	 o-transition: 0.2s ease-in-out 0.2s;
	 webkit-transition: 0.2s ease-in-out 0.2s;
}
/* Style links globally */
 a {
	 cursor: pointer;
}
 #resize, #resize #menu li, #toggle .span, body {
	/* Base styles for body */
	 background: #fff;
}
 #resize.active, .coverpic, .dropdown, .topslide {
	 overflow: hidden;
}
 .feed a:hover, .feedposts a:hover, .login a:hover, .messageuser p:hover, .myprofplaces a:hover {
	 text-decoration: underline;
}
/* Utilities */
 .centered a, .column a, .footer li, .footer-list, .footer-list li, .map-info-window .info-link, a, footer a, footer p, footer p:hover, h1, h2, h3, h4, h5, ul li a, ul li a:hover {
	 text-decoration: none;
}
 #toggle, #toggle.on #two, from {
	 opacity: 0;
}
 40%, from {
	 transform: translateY(10px);
}
 0%, 100%, 20%, 50%, 80%, to {
	 transform: translateY(0);
}
 .row::after, .search-box::before {
	 content: "";
}
 60% {
	 transform: translateY(5px);
}
 0% {
	 opacity: 0.4;
}
 100% {
	 opacity: 1;
	 transform: rotate(360deg);
}
/* Heading 1 styles */
 h1 {
	 color: #000;
	 font-family: MontBold, sans-serif;
	 font-size: 32px;
	 letter-spacing: 1px;
}
 #resize #menu li a, h2, h3, h4, h5 {
	 font-family: MontBold;
}
 .centered a, .hero-text, .hero-text h1, .myprofplaces h3, .profile h1, .title, h2, h3, h4, h5 {
	 color: #fff;
}
 h2 {
	 font-size: 26px;
}
 h3 {
	 font-size: 24px;
}
 h4 {
	 font-size: 22px;
}
 .map-info-window .info-desc, .map-info-window .info-title, a {
	/* Style links globally */
	 font-family: MontRegular, sans-serif;
}
/* Style links globally */
 a {
	 cursor: pointer;
	 color: #0047ab;
}
 a:hover {
	 color: #34be9d;
}
 .feedpost a {
	 cursor: pointer;
	 font-size: 14px;
}
 .login p, h5, p {
	 font-size: 14px;
}
 .feedposts2 p {
	 font-size: 20px;
}
 .column a, p {
	 font-size: 14px;
}
 .age h3, .bio h3, .city h3, .column a:hover, .column h5, .feedposts a:visited, .feedposts i, .gallerytitle h1, .login p, .logintitle h3, .myprofplaces h1, .postcontent i, .profile h2, .title h1, nav #menu #response1 a:hover {
	 color: #000;
}
 .gallerytitle h2 {
	 color: #000;
	 text-align: Center;
}
 .bodycontainer p, .leftcontent p, .rightcontent p, p {
	 text-align: left;
}
 p {
	 max-width: 1680px;
}
 #resize #menu li, .button-gap .btn, .cell, .cell1, .city-hero-text, .feed, .feed p, .feedimg, .feedposts p, .footer, .hero-text, .inbox, .leftcontent, .login, .login p, .maintitle, .message, .message p, .postcontenttop video, .prof_actions, .rightcontent, .secondtitle, .sent, .title h1, .weather-container, nav #menu #response1 li, table {
	 text-align: center;
}
 nav-down {
	 bottom: -40px;
}
 nav .logo {
	 float: left;
	 height: 50px;
	 margin: 0;
	 position: static;
	 width: 200px;
}
 #buttons li, .cell a, .cell1 a, .cell1 video, .feedPost, .feedimg, .feedpost a, .messageuser a, .messageuser p, .placesvisited a, .postcontenttop video, .prof_actions, .prof_actions form, .profilepic, .social-icons, nav #menu li, nav .logo a, nav .logo img {
	 display: inline-block;
}
 .column a, .dropdown:hover .dropdown-content, .footer:hover, .img, .profile img, .show, nav #menu #response1 li, nav #menu li a:hover .tooltip {
	 display: block;
}
 .weather-container {
	 background: 0 0;
	 margin-top: 40px;
}
 .temp, .weather {
	 color: #000;
	 margin: 0;
}
 .home-scroll-down, .scroll-down {
	 animation: 2s 2s infinite bounce;
	 background-size: 14px auto;
	 border-radius: 50%;
	 bottom: 30px;
	 display: block;
	 height: 32px;
	 left: 50%;
	 margin-left: -16px;
	 margin-top: 20px;
	 position: relative;
	 transition: 0.2s ease-in;
	 width: 32px;
	 z-index: 2;
}
 .home-scroll-down:before, .scroll-down:before {
	 border: 2px solid #fff;
	 border-width: 0 0 2px 2px;
	 content: "";
	 display: block;
	 height: 12px;
	 left: 50%;
	 position: relative;
	 top: calc(50% - 7px);
	 transform: translate(-50%, -50%) rotate(-45deg);
	 width: 12px;
}
 .coverpic {
	 border-bottom-left-radius: 5px;
	 border-bottom-right-radius: 5px;
	 height: 250px;
	 min-height: 200px;
	 background-color: #000;
	 position: initial;
	 width: 100%;
}
 .coverpic .container, .topslide .container {
	 position: relative;
	 z-index: 2;
}
 #resize, #resize.active, #toggle, .coverpic video, .search-box, .search-box:before {
	 position: absolute;
}
 .coverpic img {
	 height: 100%;
	 width: 100%;
	 opacity: 0.5;
}
 .coverpic video, .topslide video {
	 min-height: 100%;
	 width: auto;
	 top: 50%;
	 min-width: 100%;
}
 .coverpic video {
	 height: auto;
	 left: 50%;
	 opacity: 0.25;
	 transform: translate(-50%, -50%);
	 z-index: 0;
}
 .bodycontainer {
	 display: block;
	 margin: 0 auto;
	 max-width: 1600px;
}
 .button-image, .logintitle, nav #menu {
	 max-width: 100%;
}
/* Navigation bar styling */
 nav {
	 top: 0;
	 background-color: #fff;
	 border-bottom: 1px solid #f9f9f9;
	 border-radius: 5px;
	 padding: 0 5px;
	 margin: 2px auto;
	 left: 80px;
	 right: 80px;
	 max-width: 1600px;
}
 nav .logo img {
	 height: auto;
	 margin: 20px 22px;
	 max-width: 160px;
}
 nav #menu {
	 max-height: 100%;
}
 nav #menu li {
	 cursor: pointer;
	 transition: 0.3s ease-out;
}
 nav #menu li.select {
	 color: #000;
	 padding: 23px 16px;
}
 nav #menu li.select:hover {
	 border-bottom: transparent;
}
 #resize ul li:hover:not(select), nav #menu li a.active-page, nav #menu li.active, nav #menu li.active:hover, nav ul li:hover:not(active) {
	 border-bottom: 2px solid #000;
}
 nav #menu li a {
	 display: block;
	 position: relative;
}
 nav #menu li.active {
	 background: 0;
	 cursor: hand;
}
 nav #menu li.active:hover {
	 background: 0;
}
 nav #menu #response1 {
	 background-color: #fff;
	 border-radius: 20px;
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	 margin-left: 20px;
}
 nav #menu #response1 a {
	 padding: 0;
	 text-transform: none;
}
 nav #menu #response1 li:last-child {
	 border-bottom-left-radius: 20px;
	 border-bottom-right-radius: 20px;
}
 nav #menu #response1 ul li:hover:not(active) {
	 border-bottom: 2px solid #000;
	 transition: 0.2s ease-in-out 0.2s;
}
 .dropbtn:hover {
	 background: 0 0;
}
 .dropbtn, nav #menu li a {
	 color: #000;
	 font-weight: 600;
	 padding: 21px 16px;
	 cursor: pointer;
	 text-transform: uppercase;
}
 .column a, nav #menu #response1 a {
	 color: #222;
	 transition: 0.2s ease-in-out 0.2s;
}
 .dropbtn {
	 background-color: transparent;
	 border: none;
	 font: inherit;
	 margin: 0;
	 outline: 0;
}
 .dropdown-content, .responsive-image {
	 border-radius: 5px;
}
 .dropdown-content, nav {
	/* Navigation bar styling */
	 position: absolute;
	 z-index: 1;
}
 .dropdown-content {
	 background-color: #fff;
	 box-shadow: 0 0 30px #333;
	 display: none;
	 left: 0;
	 right: 0;
	 padding: 10px;
}
 #resize {
	 display: table;
	 height: 100%;
	 margin: 0;
	 opacity: 0.2;
	 top: 0;
	 transition: 0.5s ease-out;
	 width: 100%;
	 z-index: 1;
}
 #resize #menu {
	 height: 100%;
	 margin: auto;
	 width: 90%;
}
 #resize #menu li {
	 cursor: hand;
	 display: block;
	 height: 20%;
	 min-height: 10px;
	 position: static;
	 text-transform: uppercase;
}
 #resize li:first-child {
	 margin-top: 0;
}
 #resize #menu li a {
	 align-items: center;
	 color: #000;
	 display: flex;
	 height: 100%;
	 justify-content: center;
}
 #resize.active {
	 height: 100%;
	 margin: 0;
	 opacity: 0.99;
	 padding-bottom: 40px;
	 padding-top: 40px;
	 visibility: visible;
}
 #toggle, #toggle .span {
	 transition: 0.3s ease-out;
}
 #toggle {
	 cursor: hand;
	 height: 20px;
	 right: 20px;
	 top: 5px;
	 width: 20px;
	 z-index: 999;
}
 #toggle .span {
	 backface-visibility: hidden;
	 height: 2px;
	 margin: 5px auto;
}
 #toggle.on .span {
	 background: #000;
}
 #toggle.on #one {
	 transform: rotate(45deg) translateX(0) translateY(2px);
}
 #toggle.on #three {
	 transform: rotate(-45deg) translateX(8px) translateY(-10px);
}
 .leftcontent {
	 float: left;
	 height: auto;
	 padding: 0 6px;
	 width: 50%;
}
 .rightcontent {
	 float: right;
	 height: auto;
	 padding: 0 6px;
}
 .column {
	 background-color: #fff;
	 float: left;
	 height: inherit;
	 padding: 2px;
	 width: 20%;
}
 .column a {
	 float: none;
	 padding: 8px;
	 text-align: left;
}
 .feedposts a:hover {
	 transition: 0.2s ease-in-out 0.2s;
}
 .home-scroll-down:hover, .scroll-down:hover {
	 webkit-animation: paused;
}
 .row:after {
	 clear: both;
	 display: table;
}
 #hide input[type="file"] {
	 display: none;
	 margin: 10px;
}
 #hide input[type="file"]:active + label {
	 background-color: #2d6c7a;
	 background-image: none;
	 color: #fff;
}
 .feedposts p {
	 padding: 10px;
	 overflow-x: auto;
	 overflow-y: auto;
	 font-size: 14px;
	 text-align: left;
	 word-wrap: break-word;
}
 #searchbox2 input {
	 border: 2px solid #999;
	 color: #ccc;
	 font-size: 17px;
	 padding: 10px;
	 transition: 0.3s ease-in-out 0.3s;
	 width: 80%;
}
 #searchbox2 input:focus {
	 border-color: rgba(82, 168, 236, 0.8);
	 outline: 0;
}
 :placeholder {
	 position: fixed;
}
 .search-box {
	 background: 0;
	 display: none;
	 line-height: 60px;
	 right: 140;
}
 .search-box:before {
	 border-left: 1px solid transparent;
	 border-right: 1px solid transparent;
	 border-top: 1px solid transparent;
	 right: 0;
	 top: 1px;
}
 .search-box input[type="text"] {
	 background: #fff;
	 border: 2px solid #f5f5f5;
	 border-radius: 20px;
	 font-size: 14px;
	 margin-left: 20px;
	 margin-top: 10px;
	 outline: 0;
	 padding: 5px 10px;
}
 .cover {
	 padding: 10% 0;
}
 .cover.top {
	 display: flex;
	 display: -ms-flexbox;
	 display: -webkit-box;
	 height: 100vh;
	 padding: 15% 0 10%;
}
 .topslide {
	 background-color: #000;
	 clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 20%));
	 max-height: 1600px;
	 min-height: 400px;
	 position: relative;
	 webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 20%));
	 width: 100%;
}
 .cell1 video::-webkit-media-controls, .topslide video::-webkit-media-controls {
	 display: none !important;
}
 .topslide video {
	 height: auto;
	 left: 50%;
	 moz-transform: translateX(-50%) translateY(-50%);
	 ms-transform: translateX(-50%) translateY(-50%);
	 opacity: 0.1;
	 o-transform: translateX(-50%) translateY(-50%);
	 pointer-events: none;
	 position: absolute;
	 transform: translateX(-50%) translateY(-50%);
	 webkit-transform: translateX(-50%) translateY(-50%);
	 z-index: 0;
}
 .city-hero-text, .hero-text {
	 left: 50%;
	 position: absolute;
	 top: 50%;
	 transform: translate(-50%, -50%);
}
 .city-hero-text, .city-hero-text h1, .city-hero-text h2 {
	 color: #fff;
	 opacity: 1 !important;
}
 .button-gap .btn, .topslide .button-gap .btn {
	 background-color: transparent;
	 border-radius: 20px;
	 display: block;
	 margin-left: auto;
	 margin-right: auto;
	 margin-top: 1px;
	 text-decoration: none;
	 transition: 0.5s ease-in-out 0.5s;
	 width: 200px;
}
 .button-gap .btn, .login .fill, .login .fill input, .responsive-image:hover, .topslide .button-gap .btn {
	 moz-transition: 0.5s ease-in-out 0.5s;
	 o-transition: 0.5s ease-in-out 0.5s;
	 webkit-transition: 0.5s ease-in-out 0.5s;
}
 .hero #response5 ul li:hover:not(select), .location #response4 li a, .location #response4 ul li:hover:not(select), .location input[type="text"], .location input[type="text"]:focus, .login .fill input, .login .fill input:focus, input[type="submit"] {
	/* Submit button styles */
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
}
 .topslide .button-gap .btn {
	 border: 2px solid #fff;
	 color: #fff;
	 padding: 10px;
	 text-align: center;
}
 .login-group.submit:hover, .postcontent button, .topslide .button-gap .btn:hover {
	 background: #fff;
	 color: #000;
}
 .button-gap .btn {
	 border: 2px solid #000;
	 color: #000;
	 padding: 6px;
}
 .button-gap .btn:hover, form .submit:hover {
	 background: #000;
	 color: #fff;
}
 .active {
	 background: linear-gradient(to right, #f9f9f9, #fbf7f5);
}
 .fade {
	 animation-duration: 2s;
	 animation-name: fade;
	 webkit-animation-duration: 2s;
	 webkit-animation-name: fade;
}
 .gallerytitle {
	 text-align: left;
	 background: 0;
	 border-radius: 10px;
	 color: #fff;
}
 .logintitle {
	 font-size: 25px;
	 padding: 0 1rem;
	 text-align: center;
}
 .container {
	 margin: 0 auto;
	 max-width: 1600px;
	 padding: 40px 0;
}
 .login .fill input, .maintitle {
	 margin-bottom: 20px;
	 margin-top: 20px;
}
 .grid {
	 display: flex;
	 flex-direction: row;
	 flex-wrap: nowrap;
	 overflow-x: auto;
	 overflow-y: hidden;
	 max-width: 100%;
	 gap: 12px;
	 padding: 8px 0;
	 scroll-behavior: smooth;
}
 .cell {
	 flex: 0 0 auto;
	 border-radius: 12px;
	 overflow: hidden;
	 transition: 0.3s ease-in-out 0.3s;
}
 .cell:hover {
	 transform: scale(1.02);
}
 .contact-us .secondtitle, .location #response4, .location .secondtitle, .myprofplaces .bodycontainer, .myprofplaces h3, form#contact-form {
	 transform: skewY(1.5deg);
}
 .cell img {
	 filter: brightness(80%);
	 transition: filter 0.3s;
}
 .cell img:hover {
	 filter: brightness(100%);
}
 .responsive-image {
	 width: 100%;
	 height: auto;
	 display: block;
	 object-fit: cover;
}
 .responsive-image:hover {
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
	 transition: box-shadow 0.4s ease-in-out;
}
 .centered {
	 font-family: MontBold, sans-serif;
	 padding: 10px 8px;
	 text-align: left;
	 background: #fff;
	 color: #fff;
	 font-size: 14px;
}
 .maintitle {
	 font-size: 25px;
	 max-width: 100%;
}
 .login {
	 line-height: 90px;
	 margin: 10% 5%;
	 vertical-align: middle;
}
 .login .fill, .login .fill input {
	 background: 0;
	 border-radius: 0;
	 color: grey;
	 outline: 0;
	 transition: 0.3s ease-in-out 0.3s;
	 width: 100%;
}
 .hero #response5 li a:hover, .login .fill span {
	 color: #0047ab;
}
 .login .fill input {
	 border: 0;
	 border-bottom: 2px solid #fff;
	 font-size: 14px;
	 color: #fff;
	 height: 18px;
}
 .location input[type="text"]:focus, .login .fill input:focus {
	 border-bottom: 2px solid #0047ab;
	 box-shadow: none;
	 transition: 0.3s ease-in-out 0.3s;
}
 .message {
	 margin-left: auto;
	 margin-right: auto;
	 padding-bottom: 6px;
	 padding-top: 6px;
	 width: 50%;
}
 .message textarea {
	 width: 90%;
}
 .sent {
	 padding-bottom: 2%;
	 padding-top: 2%;
	 width: 50%;
}
 .arrow-up {
	 border-bottom: 310px solid #000;
	 border-left: 310px solid transparent;
	 border-right: 310px solid transparent;
	 height: 0;
	 margin-bottom: 0;
	 position: static;
	 width: 100%;
	 z-index: 0;
}
 .content, .feedimg video, .footer, .location, .postcontent, .postcontenttop {
	 position: relative;
}
 .content {
	 float: right;
	 margin-right: 10%;
	 text-align: left;
}
 .myfollowers, .places, .posts {
	 float: left;
}
 .location {
	 text-align: center;
	 background: #000;
	 margin-top: 80px;
	 overflow: visible;
	 padding-bottom: 460px;
	 padding-top: 40px;
	 transform: skewY(-1.5deg);
	 transform-origin: 100%;
}
 .location #response4 {
	 display: block;
	 margin: 0 25%;
	 position: absolute;
	 text-align: left;
	 transition-duration: 1s;
	 width: 50%;
	 z-index: 1;
}
 .location input[type="text"] {
	 background: 0;
	 border: 0;
	 border-bottom: 2px solid #fff;
	 font-size: 14px;
	 border-radius: 0;
	 font-family: 'MontRegular';
	 color: #fff;
	 height: 18px;
	 outline: 0;
	 padding: 16px;
	 transform: skewY(1.5deg);
	 transition: 0.3s ease-in-out 0.3s;
	 width: 50%;
}
 .location #response4 li {
	 color: #34be9d;
	 cursor: hand;
	 display: inline-block;
	 text-align: center;
	 width: 100%;
}
 .hero #response5 ul li:hover:not(select), .location #response4 ul li:hover:not(select) {
	 color: #000;
	 transition: 0.3s ease-in-out 0.3s;
}
 .hero #response5 li a, .hero #response5 li a:hover, .location #response4 li a, .location #response4 li a:hover {
	 font-weight: 600;
	 position: relative;
}
 .location #response4 li a {
	 border-bottom: 1px solid #fff;
	 color: #fff;
	 display: list-item;
	 font-size: 14px;
	 padding: 6px;
	 text-align: left;
	 transition: 0.3s ease-in-out 0.3s;
}
 .location #response4 li a:hover {
	 border-bottom: 1px solid #34be9d;
	 color: #34be9d;
}
 .posts {
	 margin-left: 10%;
}
 .inbox, .sent {
	 margin: 5px 5px 5px 10px;
}
 .feedPost2 {
	 margin-bottom: 2px;
	 text-align: left;
	 margin-top: -10px;
}
 .feed {
	 padding-bottom: 80px;
	 padding-top: 20px;
}
 .feed a {
	 color: #222;
	 display: list-item;
}
 .bottomprof, .feedPost2, .feedimg video, .myprofplaces {
	 display: inline-block;
	 width: 100%;
}
 .feedimg video {
	 background: #d3d3d3;
	 border-radius: 5px;
	 height: auto;
	 max-width: 800px;
	 overflow: hidden;
	 text-align: center;
	 z-index: 0;
}
 .places {
	 border-left: solid #000;
	 text-align: center;
}
/* Submit button styles */
 input[type="submit"] {
	 background: #fff;
	 border-radius: 5px;
	 color: #000;
	 cursor: pointer;
	 margin: 2px;
	 padding: 5px 20px;
	 transition: 0.3s ease-in-out 0.3s;
}
 input:hover[type="submit"] {
	 background: #000;
	 color: #fff;
}
 .prof_names, .profile {
	/* User profile card styling */
	 text-align: center;
	 width: 100%;
}
 .prof_names {
	 border-radius: 5px;
	 margin-top: -15px;
	 padding: 10px;
	 background-color: transparent;
}
 .prof_names .text-box h2, .prof_names .text-box h5 {
	 background: 0 0;
	 color: #fff;
	 margin: 5px 0;
}
/* User profile card styling */
 .profile {
	 border-radius: 10px;
	 display: block;
	 background: #0047ab;
	 margin: 20px auto;
	 padding: 20px;
	 box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
}
 .myfollowees, .myfollowers {
	 padding: 10px 0;
	 text-align: left;
}
 .profile input[type="text"], .profile textarea {
	 padding: 12px;
	 margin-bottom: 15px;
	 font-size: 14px;
	 background-color: #1a1a1a;
}
 .profile input[type="text"]:focus, .profile textarea:focus {
	 outline: 0;
	 border-bottom-color: #0047ab;
}
 .profile button, .profile input[type="submit"] {
	 background-color: #0047ab;
	 color: #fff;
	 border: none;
	 padding: 12px 20px;
	 font-size: 16px;
	 border-radius: 6px;
	 cursor: pointer;
	 transition: background-color 0.3s;
	 margin-top: 10px;
}
 .profile button:hover, .profile input[type="submit"]:hover {
	 background-color: #0047ab;
}
 .profile input[type="text"], .profile textarea {
	 background-position: 0 center;
	 border: none;
	 border-bottom: 2px solid #fff;
	 border-radius: 0;
	 color: #000;
	 height: 40px;
	 background: transparent;
	 border: none;
	 outline: 0;
	 transition: 0.3s ease-in-out 0.3s;
	 width: 100%;
}
 .prof_new input[type="text"] {
	 background: 0 0;
	 border: none;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 color: #fff;
	 height: 60px;
	 outline: 0;
	 transition: 0.3s ease-in-out 0.3s;
	 width: 90%;
}
 .editprofposts textarea:focus, .prof_new2 input[type="date"], .prof_new2 input[type="text"], .profile textarea:focus, .profpost textarea:focus, button.highlighted, button.highlighted:hover {
	 border-bottom: 2px solid #0047ab;
}
 .profile img {
	 border: 5px solid #fff;
	 border-radius: 50%;
	 height: 140px;
	 margin: -102px auto 1px;
	 opacity: 0.99 !important;
	 width: 140px;
	 z-index: 1;
}
 .myfollowees, .myfollowers {
	 display: inline-block;
	 width: 50%;
}
 .myfollowees {
	 float: right;
}
 .myfollowees a, .myfollowers a {
	 color: #0047ab;
	 padding: 2px;
	 font-family: 'MontBold';
	 font-size: 14px;
}
 #editHere, .age, .bio, .city, .nums, .placesvisited, .prof_section, .profilepic, .tab-nav .tab-item.active::after, .tab-nav .tab-item:hover::after {
	 width: 100%;
}
 .nums {
	 height: auto;
}
 .age, .bio, .city {
	 display: inline-block;
	 margin: 10px 0;
	 font-size: 14px;
	 text-align: left;
}
 .prof_section {
	 max-width: 1600px;
	 padding: 20px;
	 min-height: 100px;
	 margin: 30px auto 0;
	 background-color: #f7f7f7;
	 border-radius: 10px;
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
	 transition: box-shadow 0.3s;
}
 .prof_new, .prof_new2 textarea, .profpost input[type="text"] {
	 border-radius: 25px;
}
 .form-group, textarea {
	/* Base textarea styles */
	 transition: 0.3s ease-in-out 0.3s;
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
	 outline: 0;
}
 .prof_section:hover {
	 box-shadow: 0 6px 20px rgba(0, 194, 203, 0.3);
}
 .prof_section i {
	 color: #0047ab;
	 font-size: 18px;
	 margin-right: 6px;
	 vertical-align: middle;
}
 .prof_new {
	 border-style: solid;
	 display: block;
	 margin-left: 10%;
	 padding: 3%;
	 text-align: center;
	 width: 80%;
}
 .prof_new2 {
	 margin-left: 25%;
	 text-align: left;
	 width: 50%;
}
 .profpost {
	 background: #fff;
	 border-radius: 5px;
	 display: inline-block;
	 margin: 0 0 80px;
	 padding: 10px;
	 width: 100%;
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}
 .profpost:hover {
	 box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
	 transform: translateY(-2px);
	 transition: all 0.2s ease-in-out 0.2s;
}
 .profpost input[type="text"] {
	 border: 0;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 padding: 10px;
}
 .myprofplaces, .myprofposts {
	 margin-left: auto;
	 margin-right: auto;
}
/* Base textarea styles */
 textarea {
	 background: 0;
	 border: 0;
	 font-size: 14px;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 color: #000;
	 height: 60px;
	 width: 100%;
}
 textarea::placeholder {
	 color: #000;
}
 .myprofposts {
	 max-width: 2000px;
	 text-align: left;
	 background: #f9f9f9;
	 border-radius: 12px;
	 margin: 20px auto;
	 display: grid;
	 grid-template-columns: repeat(3, 1fr);
	 gap: 16px;
}
 .myprofplaces {
	 background: #000;
	 color: #fff;
	 display: table;
	 margin-top: 80px;
	 overflow: visible;
	 padding: 40px 0 120px;
	 transform: skewY(-1.5deg);
	 transform-origin: 100%;
}
 .myprofplaces p, .postcontent {
	 display: inline-block;
	 vertical-align: top;
}
 .postcontent {
	 background: #fff;
	 border-radius: 12px;
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
	/* padding: 4px;
	 */
}
 .postcontent p {
	 margin: 10px;
	 overflow-x: auto;
	 overflow-y: auto;
	 font-size: 14px;
	 text-align: left;
	 word-wrap: break-word;
}
 .postcontent:hover {
	 box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
	 transform: translateY(-2px);
	 transition: all 0.2s ease-in-out 0.2s;
}
 .postcontenttop {
	 overflow: hidden;
	 width: auto;
}
 .object-fit_fill {
	 max-width: 100%;
	 object-fit: fill;
}
 .object-fit_none {
	 object-fit: none;
}
 .object-fit_scale-down {
	 object-fit: scale-down;
}
 button#changePic {
	 background: 0;
	 border: 0;
	 border-radius: 0;
	 color: #000;
	 cursor: hand;
	 padding: 2px 5px;
	 transition: 0.2s;
	 webkit-border-radius: 5px;
}
 #changeHere {
	 display: none;
	 margin: 4px auto;
	 padding: 10px;
	 width: 100%;
}
 .contact-form {
	 background: 0;
	 color: #fff;
	 width: 100%;
}
 .contact-form::placeholder {
	 color: #000;
	 opacity: 1;
}
 .contact-form:-ms-input-placeholder, .contact-form::-ms-input-placeholder {
	 color: #fff;
}
 .form-group {
	 background: 0;
	 border: 0;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 color: #000;
	 margin-bottom: 16px;
	 margin-left: 25%;
	 margin-top: 16px;
	 width: 50%;
}
 .form-group:focus {
	 border-bottom: 2px solid #34be9d;
	 box-shadow: none;
}
 .form-group input {
	 color: #fff;
	 height: 45px;
}
 form .submit {
	 background: 0;
	 border: 2px solid #000;
	 border-radius: 20px;
	 color: #000;
	 cursor: hand;
	 margin-top: 20px;
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
}
 .cell1 video:hover, .messageuser p, .openbtn, .profpost button {
	 moz-transition: 0.2s ease-in-out 0.2s;
	 webkit-transition: 0.2s ease-in-out 0.2s;
}
 footer a, footer p {
	 color: #222;
	 font-size: 14px;
}
 .feedposts, .footer, .footer-content, .intro, .videofeedposts {
	 margin-left: auto;
	 margin-right: auto;
}
/* Footer base styles */
 .footer {
	 background-color: #fff;
	 padding: 30px 80px;
	 transition: 0.2s ease-in-out 0.2s;
	 width: 100%;
}
 .footer li {
	 max-width: 2000px;
}
 .footer a {
	 color: #2c3643;
}
 footer p:hover, ul li a, ul li a:hover {
	 color: #000;
}
 .footer-content {
	 border-bottom: 1px solid #f5f5f5;
	 display: flex;
	 flex-wrap: wrap;
	 justify-content: space-between;
	 max-width: 1600px;
	 padding: 0 10px 10px;
	 text-transform: uppercase;
}
 .select-icon {
	 display: inline-block;
	 height: 15px;
	 position: absolute;
	 right: 15px;
	 top: 50%;
	 transform: translateY(-70%);
	 width: 15px;
}
 .footer-about, table {
	 margin-left: auto;
	 margin-right: auto;
}
 .footer-list li:not(active) {
	 border-top: 2px solid transparent;
}
 .footer-responsive-content {
	 display: none;
}
 .footer-list h3 {
	 color: #fff;
	 font-weight: 500;
	 margin-bottom: 10px;
}
 .footer-list li {
	 margin: 5px 0;
}
 .footer-about {
	 display: flex;
	 flex-wrap: wrap;
	 justify-content: space-between;
	 max-width: 1600px;
	 padding-bottom: 10px;
	 padding-top: 30px;
}
 .cell1, .hero, .infologin h3, .infologin h4, .intro2 h2, .location h1, .location h2, .login h1, .login h2, .login h3, .login h4, .login-group.submit a, .social-icon:hover {
	 color: #fff;
}
 .about-list {
	 align-items: center;
	 display: flex;
}
 .about-list, .copyright {
	 color: #222;
	 margin: 5px 0;
	 font-size: 14px;
}
 .about-list li {
	 color: #767676;
	 margin: 0 5px;
}
 .feedposts button:hover, .videofeedposts button:hover {
	 float: right;
	 transition: 0.2s ease-in-out 0.2s;
}
 .feedposts button, .videofeedposts button {
	 background: #fff;
	 border-radius: 50%;
	 color: #000;
	 float: right;
	 padding: 5px;
}
 button:hover {
	 background: #0047ab;
}
 .videofeedposts button {
	 cursor: hand;
	 webkit-border-radius: 5px;
}
 .feedposts button {
	 background: #111 1;
	 border-radius: 5px;
	 margin: 2px;
	 transition: 0.2s ease-in-out 0.2s;
	 padding: 5px;
}
 .feedposts button:hover {
	 background: #34be9d;
}
 .postcontent button:hover {
	 transition: 0.2s ease-in-out 0.2s;
	 background: #34be9d;
}
 .cell1 video:hover, .feedPostTitle img:hover, .openbtn {
	 transition: 0.2s ease-in-out 0.2s;
}
 .feedposts button, .postcontent button, button {
	 cursor: hand;
}
 .postcontent button {
	 border-radius: 5px;
	 float: right;
	 background: #0047ab;
	 padding: 5px;
	 margin: 2px;
}
 .postcontent button i {
	 color: #fff;
}
 .openbtn:hover, button.openbtn:hover {
	 filter: brightness(85%) !important;
}
 button {
	 border: 0;
	 border-radius: 5px;
	 padding: 5px 25px;
}
 .feedposts, .videofeedposts {
	 max-width: 2000px;
	 text-align: left;
	 background: #f9f9f9;
	 border-radius: 12px;
	 display: grid;
	 padding: 2px;
	 grid-template-columns: repeat(3, 1fr);
	 gap: 16px;
}
 .videofeedPostTitle {
	 padding-top: 1px;
	 text-align: center;
}
 .feedPostTitle img, .videofeedPostTitle img {
	 border: 2px solid #fff;
	 border-radius: 50%;
	 display: inline-block;
	 height: 46px;
	 margin-left: 2px;
	 width: 46px;
	 z-index: 99;
}
 .feedPostTitle img, .videofeedPostTitle img:hover {
	 border: 2px solid #fff;
}
 .feedPost {
	 background: #fff;
	 border-radius: 12px;
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
	/* padding: 4px;
	 */
}
 .feedPost:hover {
	 box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
	 transform: translateY(-2px);
	 transition: all 0.2s ease-in-out 0.2s;
}
 .feedimg {
	 height: auto;
	 overflow: hidden;
	 position: initial;
	 width: 100%;
	/* border-top-right-radius: 12px;
	 */
	/* border-top-left-radius: 12px;
	 */
}
 .cell1, .hero, .postcontenttop video {
	 position: relative;
}
 .feedimg img, .postcontenttop img, .postcontenttop video {
	/* border-radius: 12px!important;
	 */
	 max-height: 240px;
	 width: 100%;
	 border-top-right-radius: 12px;
	 border-top-left-radius: 12px;
}
 .object-fit_cover {
	 max-width: 100%;
	 object-fit: cover;
}
 .openbtn {
	 border: 0;
	 border-radius: 0;
	 color: #fff;
	 cursor: hand;
	 height: 100%;
	 margin-bottom: 0;
	 margin-top: 0;
	 o-transition: 0.2s ease-in-out 0.2s;
	 padding: 15px;
}
 .intro p, .intro3 p, .prof_actions {
	 margin-bottom: 20px;
	 margin-top: 20px;
}
 .postcontenttop video {
	 max-width: 800px;
	 overflow: hidden;
	 z-index: 0;
}
 .login-group.submit {
	 background: 0;
	 border: 2px solid #fff;
	 border-radius: 20px;
	 color: #fff;
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
}
 .intro, .intro h1, h2 {
	 color: #000;
	 text-align: center;
}
 .intro, .intro3 {
	 display: table;
	 max-width: 1600px;
	 padding: 40px 0;
}
 .intro, header {
	 background: #fff;
}
 .social-icons {
	 background: 0;
	 border: 2px solid #000;
	 border-radius: 50%;
	 color: #000;
	 moz-transition: 0.5s ease-in-out;
	 o-transition: 0.5s ease-in-out;
	 padding: 6px;
	 transition: 0.5s ease-in-out 0.5s;
	 webkit-transition: 0.5s ease-in-out;
}
 .centered i, .info-login-group.submit:hover, .rightside, .social-icons:hover {
	 background: #000;
	 color: #fff;
}
 .prof_actions {
	 border-radius: 8px;
	 width: 100%;
}
 .city-hero-text h1 {
	 color: #fff;
	 text-shadow: none;
	 text-transform: capitalize;
}
 .prof_actions p {
	 font-size: 12px;
	 margin-top: 3px;
}
 .cell1 video {
	 bottom: 0;
	 min-width: 100%;
	 opacity: 0.2;
	 right: 0;
	 z-index: -100;
}
 .cell1, .cell1 video {
	 background: #000;
	 height: auto;
	 object-fit: fill;
	 width: calc(100% / 3);
}
 .myprofvideoposts, table {
	 max-width: 2000px;
	 width: 100%;
}
 .cell1 {
	 padding: 0;
}
 .cell1 video:hover {
	 opacity: 0.3;
}
 .hero, .prof_info, .profileinfo {
	 border-radius: 5px;
}
 .button-gap, .socialcontainer {
	 margin-bottom: 6px;
	 margin-top: 6px;
}
 .weather-container h3, span {
	 display: inline-block;
	 vertical-align: middle;
}
 .bottomprof {
	 padding-bottom: 20px;
	 padding-top: 20px;
}
 .placesvisited {
	 color: #fff;
	 display: inline-block;
	 padding: 8px 0;
	 text-align: left;
	 vertical-align: top;
}
 .hero, .infologin {
	 text-align: center;
}
 .hero #response5 li a, .hero input[type="text"], .hero input[type="text"]:focus {
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
}
 .messageuser a, .messageuser p {
	 color: #2c3643;
	 text-align: center;
	 transition: 0.2s ease-in-out 0.2s;
}
 .editprofposts button, .profpost button {
	 cursor: hand;
	 background: #efefef;
	 margin: 10px 0;
	 o-transition: 0.2s ease-in-out 0.2s;
	 padding: 5px;
	 transition: 0.2s ease-in-out 0.2s;
	 webkit-border-radius: 5px;
}
 .editprofposts button:hover, .profpost button:hover {
	 background: #0047ab;
}
 .follow img, .profile button {
	 moz-transition: 0.2s ease-in-out 0.2s;
	 o-transition: 0.2s ease-in-out 0.2s;
	 transition: 0.2s ease-in-out 0.2s;
	 webkit-transition: 0.2s ease-in-out 0.2s;
}
 .profileinfo {
	 background: #000;
	 max-width: 1600px;
	 padding: 10px;
}
 .prof_info {
	 background: #000;
	 margin-top: 5px;
	 padding: 10px;
}
 .intro1, .intro2 {
	 margin-left: auto;
	 margin-right: auto;
	 padding: 40px 0;
	 transform-origin: 100%;
	 overflow: visible;
}
 .myprofvideoposts {
	 align-items: center;
	 background: #fff;
	 display: table;
	 margin-left: auto;
	 margin-right: auto;
}
 .follow, .follow img, .followuser, .hero #response5 li {
	 display: inline-block;
}
 .hero #response5, .hero #response5 li {
	 color: #fff;
	 text-align: left;
	 width: 100%;
}
 .hero input[type="text"] {
	 background: 0;
	 border: 2px solid #fff;
	 border-radius: 16px;
	 color: #fff;
	 font-size: 14px;
	 height: 18px;
	 margin-bottom: 8px;
	 margin-top: 8px;
	 padding: 16px;
	 transition: 0.3s ease-in-out 0.3s;
	 width: 100%;
}
 .hero input[type="text"]:focus {
	 border: 2px solid #000;
	 box-shadow: none;
	 transition: 0.3s ease-in-out 0.3s;
}
 .hero #response5 {
	 background: 0;
	 border-radius: 25px;
	 display: block;
	 margin-left: 0;
	 transition-duration: 1s;
	 z-index: 1;
}
 .hero #response5 li {
	 cursor: hand;
}
 .hero #response5 li a {
	 color: #fff;
	 display: list-item;
	 padding: 4px;
	 transition: 0.3s ease-in-out 0.3s;
}
 input:focus, textarea:focus {
	 outline: 0;
}
 .hero input[type="text"]::placeholder, .location input[type="text"]::placeholder {
	 color: #fff;
}
 .overlay input[type="search"]::placeholder {
	 color: #000;
}
 #output {
	 border: 3px solid #fff;
	 border-radius: 5px;
	 height: 100px;
	 width: 100px;
}
 .intro1 {
	 background: #0047ab;
}
 .intro2, .leftside, .profile button, table button {
	 background: #fff;
}
 .profile button {
	 padding: 5px;
	 background: #0047ab;
	 color: #fff;
}
 .profile button:hover {
	 background: #34be9d;
}
 .follow img {
	 border: 2px solid #fff;
	 border-radius: 50%;
	 height: 80px;
	 width: 80px;
}
 .info-login-group.submit, input.form-group, table button {
	 moz-transition: 0.3s ease-in-out 0.3s;
	 o-transition: 0.3s ease-in-out 0.3s;
	 transition: 0.3s ease-in-out 0.3s;
	 webkit-transition: 0.3s ease-in-out 0.3s;
}
 .follow img:hover {
	 border: 2px solid #000;
}
 .leftside, .rightside {
	 float: right;
	 height: 100vh;
	 moz-transition: 0.5s ease-in-out 0.5s;
	 o-transition: 0.5s ease-in-out 0.5s;
	 transition: 0.5s ease-in-out 0.5s;
	 webkit-transition: 0.5s ease-in-out 0.5s;
	 width: 50%;
}
 .leftside {
	 color: #000;
	 float: left;
}
 .my-input, select {
	 background-color: transparent;
	 color: #000;
	 font-weight: 700;
}
 .center-fit {
	 margin: auto;
	 max-height: 100vh;
	 max-width: 100%;
	 width: 100%;
}
 .leftside:hover {
	 filter: brightness(85%);
}
 .centered i {
	 border-radius: 50%;
	 font-size: 22px;
	 padding: 6px;
}
 input:-webkit-autofill:focus textarea:-webkit-autofill, select:-webkit-autofill, select:-webkit-autofill:focus, select:-webkit-autofill:hover, textarea:-webkit-autofill:hover textarea:-webkit-autofill:focus {
	 webkit-box-shadow: 0 0 0 1000px #fff inset !important;
}
 .infologin {
	 line-height: 90px;
	 margin: 10% 5%;
	 vertical-align: middle;
}
 .bioupdate, .messages {
	 margin-bottom: 100px;
}
 input:-webkit-autofill, input:-webkit-autofill:active, input:-webkit-autofill:focus, input:-webkit-autofill:hover {
	 webkit-box-shadow: 0 0 0 30px #000 inset !important;
}
 .prof_actions button {
	 background: 0;
	 border-radius: 0;
	 color: #000;
	 text-transform: uppercase;
	 padding: 3px 6px;
}
 .prof_actions button:hover {
	 background: #fff;
	 border-radius: 0;
	 color: #0047ab;
	 text-transform: uppercase;
}
 .prof_actions i {
	 border-radius: 50%;
	 color: #000;
	 padding: 5px;
}
 .editprofposts h3, .editprofposts i, .info-login-group.submit a, .infologin h1, .infologin h2, .intro2 .centered a, .postphoto h3, .postvideo h3, .profpost i, .tp-ac__list {
	 color: #000;
}
 .bioupdate i, .login a, .myprofplaces a {
	 color: #fff;
}
 .info-login-group.submit {
	 background: 0;
	 border: 2px solid #000;
	 border-radius: 20px;
	 color: #000;
}
 .login a {
	 display: inline;
}
 login::placeholder {
	 color: #fff;
	 opacity: 1;
}
 .follow {
	 padding: 8px;
}
 input:-webkit-autofill {
	 webkit-text-fill-color: #fff !important;
}
 .myprofplaces a:hover {
	 color: #fff;
}
 .my-input {
	 border: 1px solid transparent;
	 border-bottom: 2px solid #fff;
	 border-radius: 0;
	 padding: 4px;
	 width: 100%;
}
 select {
	 appearance: none;
	 border: 0;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 cursor: pointer;
	 font-size: 14px;
	 margin-left: 2px;
	 moz-appearance: none;
	 padding: 10px;
	 transition: color 0.3s, background-color 0.3s, border-bottom-color 0.3s;
	 webkit-appearance: none;
}
 select::-ms-expand {
	 display: none;
}
 select:focus, select:hover {
	 background-color: #fff;
	 border-bottom-color: #dcdcdc;
	 color: #34be9d;
}
 .centered a {
	 color: #000;
	 padding-left: 2px;
}
 table {
	 background: #f9f9f9;
	 border-radius: 10px;
	 color: #000;
	 padding: 5px;
	 box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
	 border: 0;
}
 table button {
	 padding: 5px;
	 color: #fff;
	 background: #0047ab;
}
 table button:hover {
	 color: #fff;
	 background: #34be9d;
}
 .bioupdate {
	 background: #000;
	 border-radius: 20px;
}
 .bioupdate form {
	 padding: 20px;
}
 .followuser {
	 float: right;
	 padding: 5px;
	 text-align: left;
	 width: 50%;
}
 .messageuser {
	 float: left;
	 padding: 5px;
	 text-align: right;
	 width: 50%;
}
 .contact-us {
	 background: #f9f9f9;
	 margin-top: 40px;
	 overflow: visible;
	 padding-bottom: 60px;
	 padding-top: 40px;
	 transform: skewY(-1.5deg);
	 transform-origin: 100%;
}
 input.form-group {
	 background: 0;
	 border: 0;
	 border-bottom: 2px solid #000;
	 border-radius: 0;
	 color: #000;
	 height: 18px;
	 outline: 0;
	 padding: 16px;
	 width: 50%;
}
 .editprofposts {
	 background: #fff;
	 border-radius: 5px;
	 margin: 20px 0;
	 padding: 10px;
	 box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}
 .tooltip {
	 background: #fff;
	 border-radius: 2px;
	 bottom: -55px;
	 color: #222;
	 display: none;
	 font-size: 10px;
	 font-weight: 700;
	 left: -35px;
	 letter-spacing: 3px;
	 padding: 10px;
	 position: absolute;
	 text-transform: uppercase;
}
 nav #menu li a .tooltip:before {
	 border-bottom: 1px solid transparent;
	 border-left: 1px solid transparent;
	 border-right: 1px solid transparent;
	 border-top: 1px solid #fff;
	 content: "";
	 position: absolute;
	 transform: translateX(-50%);
}
 #myid {
	 color: #fff;
	 transform-origin: 100%;
}
 .text-box {
	 align-items: left;
	 display: flex;
	 justify-content: left;
	 position: relative;
}
 .hidden {
	 display: none;
}
 .text-box h2 {
	 align-items: center;
	 justify-content: center;
	 position: relative;
	 text-transform: capitalize;
}
 .text-box h2, .text-box h5 {
	 border-radius: 2px;
	 color: #fff;
	 display: block;
	 padding: 0.2em;
}
 .prof_names .textbox h3 {
	 background-color: #000 !important;
}
 .intro2 .text-box h2 {
	 background-color: #000;
	 color: #fff;
}
 .text-box h5 {
	 background-color: transparent;
}
 .rightcontent {
	 padding-left: 0;
	 width: 100%;
}
 .places {
	 margin-top: 2%;
}
 .city-hero-text h1 {
	 font-size: 42px;
}
 .feedPost2 {
	 padding-bottom: 2px;
	 padding-top: 2px;
}
 .myprofplaces h3 {
	 margin-bottom: 16px;
	 overflow: visible;
	 transform-origin: 100%;
}
 .gm-style-iw-d {
	 padding: 0 !important;
	 overflow: hidden !important;
}
 .gm-style-iw-c {
	 padding: 0 !important;
	 border-radius: 4px !important;
}
 .gm-style-iw-ch, .gm-ui-hover-effect {
	 display: none !important;
}
 .map-info-window {
	 max-width: 200px;
	 animation: 0.3s ease-out fadeIn;
}
 .map-info-window img {
	 width: 100%;
	 height: auto;
	 border-radius: 4px 4px 0 0;
	 display: block;
}
 .map-info-window .info-body {
	 padding: 8px 10px;
}
 .map-info-window .info-title {
	 font-size: 14px;
	 font-weight: 700;
	 margin-bottom: 2px;
}
 .map-info-window .info-desc {
	 font-size: 12px;
	 margin: 0 0 4px;
	 color: #bbb;
}
 .map-info-window .info-link {
	 font-size: 12px;
}
 to {
	 opacity: 1;
}
 .tab-nav {
	 all: unset;
	 display: block;
	 border-bottom: 3px solid #0047ab;
	 margin: 20px 0;
}
 .tab-nav ul {
	 display: flex;
	 list-style: none;
	 padding: 0;
	 margin: 0;
}
 .tab-nav .tab-item {
	 font-weight: 700;
	 padding: 6px 10px;
	 cursor: pointer;
	 background: 0 0;
	 color: #000;
	 position: relative;
	 border: none;
	 border-radius: 0;
	 transition: color 0.3s;
}
 .tab-nav .tab-item::after {
	 content: "";
	 position: absolute;
	 left: 0;
	 bottom: 0;
	 height: 2px;
	 width: 0;
	 background-color: #111;
	 transition: width 0.3s;
}
 .tab-nav .tab-item.active, .tab-nav .tab-item:hover {
	 color: #111;
}
/* Media Queries */
/* Responsive styles for tablets and smaller devices */
 @media only screen and (max-width: 768px) {
	/* Navigation bar styling */
	/* Footer base styles */
	/* Heading 1 styles */
	 .leftcontent, .message, .overlay-content, .rightcontent {
		 text-align: center;
	}
	 #changeHere, .footer-about, .footer-content, .hero #response4, .hero #response4 li a, .leftside, .overlay, nav #menu {
		 display: none;
	}
	 nav .logo img {
		 margin: 12px 22px;
	}
	 .noscroll {
		 overflow: hidden;
	}
	 .leftcontent {
		 float: left;
		 height: auto;
		 padding-bottom: 12px;
		 padding-right: 12px;
		 width: 50%;
	}
	 .feedposts p, .feedposts2 p, .form-group, .hero-text .btn, .location #response4 li a, .placesvisited, .prof_section, .profileinfo p, p {
		 font-size: 14px;
	}
	 .cell1, .postcontent {
		 grid-template-columns: repeat(2, 1fr);
	}
	 .age, .bio, .city, .footer-list li, .overlay, .profile, .rightside, nav {
		/* Navigation bar styling */
		 width: 100%;
	}
	 #toggle {
		 margin-top: 6px;
		 opacity: 1;
		 visibility: visible;
	}
	 nav, nav .logo {
		 position: static;
		 background: #fff;
	}
	 nav .logo {
		 height: 0;
		 margin: 0;
		 max-width: 80%;
	}
	 nav {
		 height: inherit;
		 margin: 0px;
		 z-index: 1;
	}
	 .overlay {
		 background-color: #fff;
		 height: 100%;
		 left: 0;
		 opacity: 0.99;
		 position: fixed;
		 top: 0;
		 z-index: 1;
	}
	 .message {
		 padding: 5px;
		 width: 100%;
	}
	 input#searchbox2[type="search"] {
		 background: 0;
		 border: 0;
		 border-bottom: 2px solid #000;
		 border-radius: 0;
		 color: #000;
		 height: 18px;
		 font-family: 'MontRegular';
		 font-size: 14px;
		 margin-top: 8px;
		 moz-transition: 0.3s ease-in-out 0.3s;
		 o-transition: 0.3s ease-in-out 0.3s;
		 padding: 16px;
		 transition: 0.3s ease-in-out 0.3s;
		 webkit-appearance: none;
		 webkit-transition: 0.3s ease-in-out 0.3s;
		 width: 100%;
	}
	 input#searchbox2[type="search"]:focus {
		 border-bottom: 2px solid #34be9d;
	}
	 .overlay #response2 {
		 background: 0;
	}
	 .overlay #response2 li a {
		 background: 0;
		 border-bottom: 1px solid #000;
		 color: #000;
		 padding: 8px;
	}
	 .overlay #response2 li a:hover {
		 border-bottom: 1px solid #0047ab;
		 color: #0047ab;
	}
	 .overlay #response2 li {
		 color: #fff;
		 display: block;
		 text-align: left;
	}
	 .overlay-content {
		 margin: auto;
		 position: relative;
		 top: 0;
		 width: 80%;
	}
	 .overlay .closebtn {
		 color: #000;
		 cursor: hand;
		 font-size: 32px;
	}
	 .overlay .closebtn:hover {
		 color: #ccc;
	}
	 .overlay input[type="text"] {
		 background: #fff;
		 border: 0;
		 border-radius: 0;
		 float: left;
		 padding: 15px;
		 width: 100%;
	}
	 .overlay input[type="text"]:hover {
		 background: #f1f1f1;
	}
	 .footer-content .footer-responsive-content, .footer-responsive-content .footer-responsive-content, .footer-list ul .footer-responsive-content, .footer-list li .footer-responsive-content {
		 display: flex;
		 flex-wrap: nowrap;
		 overflow-x: auto;
		 background: #fff;
	}
	 .footer-content .footer-list, .footer-responsive-content .footer-list, .footer-list ul .footer-list, .footer-list li .footer-list {
		 flex: 0 0 20%;
		 max-width: 20%;
		 text-align: center;
	}
	 .footer-content .footer-list a, .footer-responsive-content .footer-list a, .footer-list ul .footer-list a, .footer-list li .footer-list a, .footer-content .footer-list button, .footer-responsive-content .footer-list button, .footer-list ul .footer-list button, .footer-list li .footer-list button {
		 display: flex;
		 flex-direction: column;
		 justify-content: center;
		 align-items: center;
		 width: 100%;
		 padding: 12px 0;
		 text-decoration: none;
		 border: none;
	}
	 
	 .footer-content {
		 display: flex;
		 flex-wrap: wrap;
		 justify-content: center;
		 gap: 10px;
	}
	 .footer-list {
		 flex: 1 1 20%;
		 text-align: center;
	}
	 .footer-list ul {
		 justify-content: center;
	}
	 .footer-list li {
		 width: 100%;
	}
	 .footer-list li a, .footer-list li button {
		 display: flex;
		 justify-content: center;
		 width: 100%;
		 padding: 12px;
		 border: none;
		 text-decoration: none;
		 font-size: 14px;
		 color: inherit;
		 cursor: pointer;
	}
	 .footer-list i {
		 font-size: 14px;
	}
	 .footer-list li.active {
		 background: #fff;
		 border-top: 2px solid #000;
	}
	 .footer-list li.not-active {
		 background: #fff;
		 border-top: 2px solid transparent;
	}
	 .footer-list .openbtn {
		 border: none;
		 cursor: pointer;
		 padding: 12px;
		 color: #fff;
	}
	 .footer-about {
		 padding: 20px;
		 text-align: center;
	}
	 .footer-about .copyright {
		 font-size: 13px;
		 color: #888;
	}
	 .footer-about .about-list {
		 list-style: none;
		 padding: 0;
		 margin: 10px 0 0;
		 display: flex;
		 justify-content: center;
		 gap: 10px;
	}
	 .footer-about .about-list a {
		 font-size: 18px;
		 color: #000;
		 text-decoration: none;
	}
	 .footer-responsive-content {
		 display: flex;
		 justify-content: space-around;
		 flex-wrap: wrap;
		 background: #f9f9f9;
	}
	 .footer-responsive-content .footer-list {
		 flex: 1 0 20%;
		 max-width: 20%;
	}
	 .footer-content {
		 display: flex;
	}
	 #changeHere {
		 margin: auto;
		 width: 100%;
	}
	 .rightcontent {
		 float: right;
		 height: auto;
		 padding-bottom: 12px;
		 padding-left: 12px;
		 width: 50%;
	}
	 .feedPost, .feedposts, .videofeedposts {
		 text-align: left;
	}
	 .footer {
		 background: #fff;
		 border-top: 1px solid #f5f5f5;
		 bottom: 0;
		 left: 0;
		 position: fixed;
		 right: 0;
		 padding: 0;
	}
	 .footer-content {
		 padding-top: 50px;
	}
	 .feedPost, .profpost {
		 display: inline-block;
	}
	 .feedPost {
		/* padding: 8px;
		 */
		 position: relative;
	}
	 .bodycontainer {
		 margin: 0 8px;
	}
	 .city-hero-text h1 {
		 font-size: 38px;
	}
	 .nums, h3 {
		 font-size: 18px;
	}
	 .profileinfo {
		 font-size: 12px;
	}
	 h1 {
		 font-size: 28px;
	}
	 h2 {
		 font-size: 22px;
	}
	 .form-group.submit, h4 {
		 font-size: 18px;
	}
	 h5 {
		 font-size: 16px;
	}
	 .intro3 {
		 padding: 30px 0;
	}
	 .rightcontent {
		 display: visible;
	}
	 .profilepic img {
		 height: 120px;
		 width: 120px;
	}
	 .login {
		 border-radius: 5px;
		 font-size: 14px;
		 margin: 5%;
		 text-align: center;
		 width: 90%;
	}
	 .myprofplaces, .myprofposts {
		 display: grid;
		 float: left;
		 width: 100%;
		 grid-template-columns: repeat(2, 1fr);
	}
	 .myprofplaces {
		 float: right;
		 padding-bottom: 200px;
		 text-align: center;
	}
	 .text {
		 font-size: 35px;
	}
	 .intro {
		 padding: 20px 0;
	}
	 .placesvisited {
		 width: calc(100% / 2);
	}
}
 @media screen and (max-width: 600px) {
	/* User profile card styling */
	 .profile {
		 padding: 15px;
	}
	 .profile input[type="text"], .profile textarea {
		 font-size: 14px;
	}
	 .profile button, .profile input[type="submit"] {
		 width: 100%;
	}
}
/* Responsive styles for tablets and smaller devices */
 @media screen and (max-width: 768px) {
	 .prof_section {
		 padding: 15px;
		 margin-top: 20px;
	}
	 .prof_section i {
		 font-size: 14px;
	}
	 .footer-list li {
		 margin: 0px 0;
	}
	 .feedposts {
		 grid-template-columns: repeat(2, 1fr);
	}
	 .footer-list {
		 flex: 1 0 33.33%;
		 max-width: 33.33%;
	}
	 .footer-responsive-content .footer-list {
		 flex: 1 0 25%;
		 max-width: 20%;
	}
	 .footer-content {
		 display: none;
	}
	 .footer-responsive-content {
		 display: flex;
		 background: #fff;
	}
}
/* Responsive styles for mobile phones */
 @media screen and (max-width: 480px) {
	 .cell {
		 width: 33%;
	}
	 .cell img {
		 max-width: 2000px;
	}
	 .postvideo {
		 margin-top: 60px;
	}
	 .footer-list {
flex: 1 0 33.33%;
max-width: 33.33%;
}

.footer-responsive-content .footer-list {
flex: 1 0 25%;
max-width: 20%;
}

.footer-content {
display: none;
}

.footer-responsive-content {
display: flex;
background: #fff;
}
	 .feedposts {
		 grid-template-columns: repeat(1, 1fr);
	}
	 .feedPost, .leftcontent, .rightcontent {
		 padding-right: 0;
	}
	 .feedPost, .feedPost2 {
		 display: inline-block;
		 text-align: left;
	}
	 .column {
		 height: auto;
	}
	 .leftcontent {
		 padding-left: 0;
	}
	 .cell1, .column, .feedPost2, .feedimg, .leftcontent, .places, .placesvisited, .postcontent, .prof_section, .profilepic {
		 width: 100%;
	}
	 .myfollowees, .myfollowers {
		 width: 50%;
	}
	 .feedPost, .rightcontent {
		 padding-left: 0;
		 width: 100%;
	}
	 .feedPost {
		 position: relative;
	}
	 .myprofplaces, .myprofposts {
		 grid-template-columns: repeat(1, 1fr);
	}
}
 @media screen and (min-width: 480px) {
	 .postphoto, .postvideo {
		 display: inline-block;
		 float: left;
		 padding: 2px;
		 width: 50%;
	}
	 .postvideo {
		 float: right;
	}
	 .cell {
		 width: calc(100% / 4);
	}
}
 @media screen and (min-width: 768px) {
	 .cell {
		 width: calc(100% / 5);
	}
	 .bodycontainer {
		 background: 0;
		 padding: 0 80px;
		 text-align: left;
	}
	 .intro p {
		 max-width: 100%;
		 text-align: left;
	}
	 .profileinfo input, .profileinfo textarea {
		 border: 1px solid #000;
	}
	 .profpost h4 {
		 font-size: 16px;
	}
	 #resize {
		 visibility: hidden !important;
	}
}
 
