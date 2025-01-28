*, footer ul {
    list-style: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a {
    text-decoration: none;
    cursor: pointer;
}

h1, h2, h3, h4, h5 {
    text-decoration: none;
}

.row::after, .search-box::before {
    content: "";
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(10px);
    }
    60% {
        transform: translateY(5px);
    }
}

@-webkit-keyframes fade {
    0% {
        opacity: 0.4;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fade {
    0% {
        opacity: 0.4;
    }
    100% {
        opacity: 1;
    }
}

@-webkit-keyframes spinner {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes spinner {
    100% {
        transform: rotate(360deg);
    }
}

@font-face {
    font-family: "VisbyRoundCFHeavy";
    src: url("webfonts/VisbyRoundCF-Heavy.otf") format("opentype");
}

@font-face {
    font-family: "VisbyRoundCFLight";
    src: url("webfonts/VisbyRoundCF-Light.otf") format("opentype");
}

@font-face {
    font-family: "VisbyRoundCFRegular";
    src: url("webfonts/VisbyRoundCF-Regular.otf") format("opentype");
}

@font-face {
    font-family: "VisbyRoundCFBold";
    src: url("webfonts/VisbyRoundCF-Bold.otf") format("opentype");
}

body {
    background: #fff;
    color: #222;
    font-family: "VisbyRoundCFRegular", sans-serif;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}

h1 {
    color: #000;
    font-family: VisbyRoundCFBold, sans-serif;
    font-size: 32px;
    letter-spacing: 1px;
}

.profile h1, h5 {
    color: #fff;
}

h2 {
    font-family: VisbyRoundCFBold;
    font-size: 26px;
}

h3 {
    font-family: VisbyRoundCFBold;
    font-size: 24px;
}

h4 {
    font-family: VisbyRoundCFBold;
    font-size: 22px;
}

h5 {
    font-family: VisbyRoundCFBold;
}

a {
    /* font-family: VisbyRoundCFRegular, sans-serif; */
}

.login p, h5, p {
    font-size: 16px;
}

.profile h1, h2, h3, h4 {
    color: #fff;
}

.profile h2 {
    color: #000;
}

.gallerytitle h2 {
    color: #000;
    text-align: Center;
}

p {
    max-width: 1680px;
    text-align: left;
}

.feed p, .leftcontent {
    text-align: center;
}

.messageuser p:hover, .myprofplaces a:hover {
    text-decoration: underline;
}

.centered a, .hero-text h1 {
    color: #fff;
}

nav-down {
    bottom: -40px;
}

.disco, .fallen, .hidden, .magic, .tiger {
    display: none;
}

.footer:hover, .show {
    display: block;
}

.weather-container {
    background: transparent;
    margin-top: 40px;
    text-align: center;
}

.temp, .weather {
    color: #000;
    margin: 0;
}

.home-scroll-down, .scroll-down {
    animation: bounce 2s infinite 2s;
    background-size: 14px auto;
    border-radius: 50%;
    bottom: 30px;
    display: block;
    height: 32px;
    left: 50%;
    margin-left: -16px;
    margin-top: 20px;
    position: relative;
    transition: all 0.2s ease-in;
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
    background-color: black;
    overflow: hidden;
    position: initial;
    width: 100%;
}

.coverpic .container {
    position: relative;
    z-index: 2;
}

.coverpic img {
    height: 100%;
    width: 100%;
    opacity: 0.5;
}

.coverpic video {
    height: auto;
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    opacity: 0.25;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: auto;
    z-index: 0;
}

.bodycontainer {
    display: block;
    margin: 0 auto;
    max-width: 1600px;
}

.feedposts2 p {
    font-size: 20px;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropbtn:hover {
    background: none;
}

.dropbtn, nav #menu li a {
    color: #000;
    font-weight: 600;
    padding: 21px 16px;
    text-transform: uppercase;
}

.column a, nav #menu #response1 a {
    color: #222;
    transition: 0.2s ease-in-out;
}

.dropbtn {
    background-color: transparent;
    border: none;
    font: inherit;
    margin: 0;
    outline: none;
}

.dropdown-content, .responsive-image {
    border-radius: 5px;
}

.leftcontent {
    float: left;
    height: auto;
    padding: 0 6px;
    width: 50%;
}

.bodycontainer p, .leftcontent p, .rightcontent p {
    text-align: left;
}

.rightcontent {
    float: right;
    height: auto;
    padding: 0 6px;
    text-align: center;
    width: 50%;
}

nav {
    position: relative;
    top: 0;
    background-color: #fff;
    border-bottom: 1px solid #f9f9f9;
    border-radius: 5px;
    margin: 2px auto;
    padding: 0 20px;
    left: 80px;
    right: 80px;
    max-width: 1600px;
}

.feedposts p, .login p, .message p {
    text-align: center;
}

.dropdown-content, nav {
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

.column a, .dropdown:hover .dropdown-content {
    display: block;
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
    font-size: 12px;
    padding: 8px;
    text-align: left;
    text-decoration: none;
}


.hidebutton, .hidebutton1, .hidebutton2, .hidebutton3, .hidebutton4, .showbutton, .showbutton1, .showbutton1:hover, .showbutton2, .showbutton2:hover, .showbutton3, .showbutton3:hover, .showbutton4, .showbutton4:hover, .showbutton:hover {
    background: 0 0 !important;
    font-size: 16px;
    padding: 16px 20px;
}

.column a:hover, .column h5, nav #menu #response1 a:hover {
    color: #000;
}

.column a, .feedposts a:hover {
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
}

.feedposts a:hover {
    text-decoration: underline;
    transition: .2s ease-in-out;
}

.showbutton, .showbutton1 {
    transition: .5s ease-in-out;
}

.showbutton {
    border: 2px solid transparent;
    color: #fff;
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.hidebutton, .showbutton1:hover, .showbutton:hover {
    border: 2px solid #fff;
}

.hidebutton, .hidebutton1, .showbutton1, .showbutton1:hover, .showbutton2, .showbutton:hover {
    color: #fff;
    margin: 2px;
}

.showbutton1 {
    border: 2px solid transparent;
    font-family: VisbyRoundCFBold;
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.showbutton2, .showbutton3 {
    transition: .5s ease-in-out;
}

.hidebutton1, .showbutton2 {
    border: 2px solid #fff;
    font-family: VisbyRoundCFBold;
}

.showbutton2 {
    border: 2px solid transparent;
    /* font-family: VisbyRoundCFBold; */
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.hidebutton2 {
    color: #fff;
    margin: 2px;
}

.hidebutton2, .showbutton2:hover, .showbutton3, .showbutton3:hover, .showbutton4:hover {
    border: 2px solid #fff;
    font-family: VisbyRoundCFBold;
}

.showbutton3 {
    border: 2px solid transparent;
    color: #fff;
    font-family: VisbyRoundCFBold;
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.hidebutton3 {
    border: 2px solid #fff;
}

.hidebutton3, .hidebutton4, .showbutton4 {
    color: #fff;
    font-family: VisbyRoundCFBold;
}

.showbutton4 {
    border: 2px solid transparent;
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.hidebutton4 {
    border: 2px solid #fff;
}

.home-scroll-down:hover, .scroll-down:hover {
    webkit-animation: paused;
}

#buttons li, nav #menu li, nav .logo img {
    display: inline-block;
}

.row:after {
    clear: both;
    display: table;
}

#hide input[type=file] {
    display: none;
    margin: 10px;
}

#hide input[type=file]:active+label {
    background-color: #2d6c7a;
    background-image: none;
    color: #fff;
}

.feedposts p {
    text-align: left;
    word-wrap: break-word;
}

#resize #menu li, .button-gap .btn, .city-hero-text, .hero-text, .title h1, nav #menu #response1 li {
    text-align: center;
}

nav .logo {
    float: left;
    height: 50px;
    margin: 0;
    position: static;
    width: 200px;
}

nav .logo a {
    display: inline-block;
}

#resize, #resize.active, #toggle, .search-box {
    position: absolute;
}

nav .logo img {
    height: auto;
    margin: 20px 22px;
    max-width: 160px;
}

.button-image, nav #menu {
    max-width: 100%;
}

nav #menu {
    float: right;
    max-height: 100%;
}

nav #menu li {
    cursor: hand;
    transition: all .3s ease-out;
}

nav #menu li.select {
    color: #000;
    padding: 23px 16px;
}

nav #menu li.select:hover {
    border-bottom: transparent;
}

nav #menu li a {
    display: block;
    position: relative;
}

nav #menu li.active {
    background: 0;
    border-bottom: 2px solid #000;
    cursor: hand;
}

nav #menu li.active:hover {
    background: 0;
    border-bottom: 2px solid #000;
}

nav #menu li a.active-page, nav ul li:hover:not(active) {
    border-bottom: 2px solid #000;
}

nav #menu #response1 {
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
    margin-left: 20px;
}

nav #menu #response1 a {
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    padding: 0;
    text-transform: none;
    webkit-transition: .2s ease-in-out;
}

nav #menu #response1 li {
    display: block;
}

nav #menu #response1 li:last-child {
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

#resize ul li, #response1 ul li {}

nav #menu #response1 ul li:hover:not(active) {
    border-bottom: 2px solid #000;
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    transition: .2s .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
}

#searchbox2 input {
    border: 2px solid #999;
    color: #ccc;
    font-size: 17px;
    padding: 10px;
    transition: all 1s;
    width: 80%;
}

#searchbox2 input:focus {
    border-color: rgba(82, 168, 236, .8);
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
    position: absolute;
    right: 0;
    top: 1px;
}

.search-box input[type=text] {
    background: #fff;
    border: 2px solid #f5f5f5;
    border-radius: 20px;
    font-size: 14px;
    margin-left: 20px;
    margin-top: 10px;
    outline: 0;
    padding: 5px 10px;
}

#resize {
    background: #fff;
    display: table;
    height: 100%;
    margin: 0;
    opacity: .2;
    top: 0;
    transition: all .5s ease-out;
    visibility: hidden;
    width: 100%;
    z-index: 1;
}

#resize #menu {
    height: 100%;
    margin: auto;
    width: 90%;
}

#resize #menu li {
    background: #fff;
    cursor: hand;
    display: block;
    height: 20%;
    min-height: 10px;
    position: static;
    text-transform: uppercase;
}

#resize li:nth-child(1) {
    margin-top: 0;
}

#resize #menu li a {
    align-items: center;
    color: #000;
    font-family: VisbyRoundCFBold;
    display: flex;
    height: 100%;
    justify-content: center;
}

#resize.active {
    height: 100%;
    margin: 0;
    opacity: .99;
    overflow: hidden;
    padding-bottom: 40px;
    padding-top: 40px;
    visibility: visible;
}

#resize ul li:hover:not(select) {
    border-bottom: 2px solid #000;
}

#toggle, #toggle .span {
    transition: all .3s ease-out;
}

#toggle {
    cursor: hand;
    float: right;
    height: 20px;
    right: 20px;
    top: 5px;
    visibility: hidden;
    width: 20px;
    z-index: 999;
}

#toggle .span {
    backface-visibility: hidden;
    background: #fff;
    height: 2px;
    margin: 5px auto;
}

#toggle.on .span {
    background: #000;
}

#toggle.on #one {
    transform: rotate(45deg) translateX(0) translateY(2px);
}

#toggle, #toggle.on #two {
    opacity: 0;
}

#toggle.on #three {
    transform: rotate(-45deg) translateX(8px) translateY(-10px);
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
    overflow: hidden;
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
    min-height: 100%;
    min-width: 100%;
    moz-transform: translateX(-50%) translateY(-50%);
    ms-transform: translateX(-50%) translateY(-50%);
    opacity: .1;
    o-transform: translateX(-50%) translateY(-50%);
    pointer-events: none;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    webkit-transform: translateX(-50%) translateY(-50%);
    width: auto;
    z-index: 0;
}

.topslide .container {
    position: relative;
    z-index: 2;
}

.city-hero-text, .hero-text {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}

.hero-text {
    color: #fff;
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
    transition: .5s ease-in-out;
    width: 200px;
}

.button-gap .btn, .login .fill, .login .fill input, .responsive-image:hover, .topslide .button-gap .btn {
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.topslide .button-gap .btn {
    border: 2px solid #fff;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.topslide .button-gap .btn:hover {
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

.img {
    display: block;
}

.title {
    color: #fff;
}

#wrapper, .cell1 video, .center-fit {}

.gallerytitle {
    text-align: left;
}

.cell, .login, .maintitle, .message, .secondtitle {
    text-align: center;
}

.gallerytitle {
    background: 0;
    border-radius: 10px;
    color: #fff;
}

.feedposts a:visited, .feedposts i, .gallerytitle h1, .login p, .logintitle h3, .postcontent i, .title h1 {
    color: #000;
}

.logintitle {
    font-size: 25px;
    max-width: 100%;
    padding: 0 1rem;
    text-align: center;
}

.container {
    margin: 0 auto;
    max-width: 1600px;
    padding: 40px 0px;
}

.centered {
    cursor: hand;
    margin-bottom: 8px;
    margin-top: 8px;
    padding-left: 4px;
    text-align: left;
    font-family: VisbyRoundCFBold, sans-serif;

}

.responsive-image {
    height: auto;
    max-width: 100%;
    width: 100%;
}

.responsive-image:hover {
    box-shadow: 0 0 4px 2.5px rgba(0, 0, 0, .2);
    transition: .5s .5s ease-in-out;
}

.cell img:hover {
    filter: brightness(100%);
}

.cell {
    color: #fff;
    padding: 3px;
    padding-bottom: 6px;
    position: relative;
}

.cell img {
    filter: brightness(80%);
}

.cell img, .cell video {
    display: inline-block;
    height: auto;
    width: 100%;
}

.grid {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    max-width: 2000px;
}

.maintitle {
    font-size: 25px;
    margin-bottom: 20px;
    margin-top: 20px;
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
    color: #808080;
    outline: 0;
    transition: .3s .3s ease-in-out;
    width: 100%;
}

.login .fill span {
    color: #489eea;
}

.login .fill input {
    border: 0;
    border-bottom: 2px solid #fff;
    font-size: 16px;
    color: #fff;
    height: 18px;
    margin-bottom: 20px;
    margin-top: 20px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.location input[type=text]:focus, .login .fill input:focus {
    border-bottom: 2px solid #489eea;
    box-shadow: none;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
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

.content {
    float: right;
    margin-right: 10%;
    position: relative;
    text-align: left;
}

.location {
    position: relative;
    text-align: center;
}

.location #response4 {
    display: block;
    margin: 0% 25% 0% 25%;
    position: absolute;
    text-align: left;
    transition-duration: 1s;
    width: 50%;
    z-index: 1;
}

.location {
    background: #000;
    margin-top: 80px;
    overflow: visible;
    padding-bottom: 460px;
    padding-top: 40px;
    transform: skewY(-1.5deg);
    transform-origin: 100%;
}

.location input[type=text] {
    background: 0;
    border: 0;
    border-bottom: 2px solid #fff;
    font-size: 16px;
    border-radius: 0;
    color: #fff;
    height: 18px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    outline: 0;
    padding: 16px;
    transform: skewY(1.5deg);
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 50%;
}

.location #response4 li {
    color: #489eea;
    cursor: hand;
    display: inline-block;
    text-align: center;
    width: 100%;
}

.hero #response5 ul li:hover:not(select), .location #response4 ul li:hover:not(select) {
    color: #000;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.location #response4 li a, input[type=submit] {
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.location #response4 li a, .location #response4 li a:hover {
    font-weight: 600;
    position: relative;
}

.location #response4 li a {
    border-bottom: 1px solid #fff;
    color: #fff;
    display: list-item;
    padding: 6px;
    text-align: left;
    transition: .3s ease-in-out;
}

.inbox, .sent {}

.location #response4 li a:hover {
    border-bottom: 1px solid #489eea;
    color: #489eea;
}

.location #response4 {
    transform: skewY(1.5deg);
}

.posts {
    float: left;
    margin-left: 10%;
}

.profile img {
    display: block;
}

.inbox {
    margin: 5px 5px 5px 10px;
}

.feed, .inbox, .sent {
    text-align: center;
}

.sent {
    margin: 5px 5px 5px 10px;
}

.feedPost2 {
    margin-bottom: 2px;
    text-align: left;
}

.feed {
    padding-bottom: 80px;
    padding-top: 20px;
}

.feed a {
    color: #222;
    display: list-item;
}

.feed a:hover {
    text-decoration: underline;
}

.feedPost2, .feedimg video {
    display: inline-block;
    width: 100%;
}

.feedPost2 {
    margin-top: -30px;
}

.feedimg video {
    background: #d3d3d3;
    border-radius: 5px;
    height: auto;
    max-width: 800px;
    overflow: hidden;
    position: relative;
    text-align: center;
    z-index: 0;
}

.places {
    border-left: solid #000;
    float: left;
    text-align: center;
}

input[type=submit] {
    background: #fff;
    border-radius: 5px;
    color: #000;
    cursor: pointer;
    margin: 2px;
    padding: 5px 20px;
    transition: .3s .3s ease-in-out;
}

input:hover[type=submit] {
    background: #000;
    color: #fff;
}

.prof_names, .profile {
    text-align: center;
    width: 100%;
}

.prof_names {
    border-radius: 5px;
    margin-top: -15px;
    padding: 10px;
}

.prof_names .text-box h2, .prof_names .text-box h5 {
    background: transparent;
    /* color: #489eea; */
}

.profile {
    border-radius: 5px;
    display: table;
    background: #000;
    margin: 0 auto;
    margin-top: 5px;
}

.profile input[type=text], .profile input[type=text], .profile textarea {
    background-position-x: 0px;
    background-position-y: center;
    border-top-width: 0px;
    border-right-width: 0px;
    border-left-width: 0px;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #fff;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    color: #fff;
    height: 40px;
    outline-width: 0px;
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
    transition-delay: 0.3s;
    transition-behavior: normal;
    transition-property: all;
    width: 30%;
}

, .prof_new input[type=text], {
    background: 0;
    border: 0;
    border-bottom: 2px solid #000;
    border-radius: 0;
    color: #000;
    height: 60px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    outline: 0;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 90%;
}

.prof_new2 input[type=date], .prof_new2 input[type=text], .profile textarea:focus {
    border-bottom: 2px solid #489eea;
}

.profile img {
    border: 5px solid #fff;
    border-radius: 50%;
    height: 140px;
    margin: -102px auto 1px;
    opacity: .99 !important;
    width: 140px;
    z-index: 1;
}

.myfollowees, .myfollowers {
    display: inline-block;
    width: 50%;
}

.age, .bio, .city, .nums {
    width: 100%;
}

.myfollowers {
    float: left;
    text-align: left;
    padding: 10px 0px;
}

.myfollowees a, .myfollowers a {
    color: #fff;
}

.myfollowees {
    float: right;
    text-align: left;
    padding: 10px 0px;
}

.myfollowees a {
    padding: 2px;
}

.nums {
    height: auto;
}

.age h3, .bio h3, .city h3, .myprofplaces h1 {
    color: #000;
}

.age, .bio, .city {
    color: #fff;
}

.prof_section {
    border-radius: 8px;
    margin-top: 20px;
    max-width: 1600px;
    padding: 10px;
}

.prof_section i {
    color: #fff;
}

.age, .city, .bio {
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: left;
}

.prof_section {
    width: 100%;
}

.prof_new {
    border-radius: 25px;
    border-style: solid;
    display: block;
    margin-left: 10%;
    padding: 3%;
    text-align: center;
    width: 80%;
}

.bottomprof, .myprofplaces {
    display: inline-block;
    width: 100%;
}

.prof_new2 {
    margin-left: 25%;
    text-align: left;
    width: 50%;
}

.prof_new2 textarea, .profpost input[type=text] {
    border-radius: 25px;
}

.profpost {
    background: #f9f9f9;
    border-radius: 5px;
    display: inline-block;
    margin: 0px 0px 80px 0px;
    padding: 10px;
    width: 100%;
}

.profpost input[type=text] {
    border: 0;
    border-bottom: 2px solid #000;
    border-radius: 0;
    padding: 10px;
}

.myprofplaces, .myprofposts {
    margin-left: auto;
    margin-right: auto;
}

textarea {
    background: 0;
    border: 0;
    border-bottom: 2px solid #000;
    border-radius: 0;
    color: #000;
    height: 60px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    outline: 0;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 100%;
}

textarea::placeholder {
    color: #000;
}

.editprofposts textarea:focus, .profpost textarea:focus {
    border-bottom: 2px solid #489eea;
}

.myprofposts {
    align-items: center;
    background: #fff;
    width: 100%;
}

.login, .myprofplaces, .myprofposts {
    padding-bottom: 20px;
    padding-top: 20px;
}

.myprofplaces {
    background: #000;
    color: #fff;
    display: table;
    margin-top: 80px;
    overflow: visible;
    padding: 40px 0px 120px 0px;
    transform: skewY(-1.5deg);
    transform-origin: 100%;
}
.myprofplaces .bodycontainer {
    transform: skewY(1.5deg);
}

.myprofplaces p {
    margin-top: 6px;
}

.myprofplaces h3 {
    color: #fff;
}

.myprofposts h1, h3, h4 {}

.myprofplaces p, .postcontent {
    display: inline-block;
    vertical-align: top;
    width: calc(100% / 3);
}

.postcontent {
    padding: 4px;
    /* width: 240px; */
    position: relative;
    text-align: left;
}

.postcontent p {
    margin-top: 5px;
    /* max-height: 240px; */
    overflow-x: auto;
    overflow-y: auto;
    text-align: left;
    word-wrap: break-word;
}

.footer {
    text-align: center;
}

.postcontenttop {
    overflow: hidden;
    position: relative;
    width: auto;
}

.footer {
    position: relative;
}

.contact-us .secondtitle {
    transform: skewY(1.5deg);
}

.location .secondtitle {
    transform: skewY(1.5deg);
}

.form-group {}

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

#changeHere, button#changePic:hover {}

button#changePic {
    background: 0;
    border: 0;
    border-radius: 0;
    color: #000;
    cursor: hand;
    padding: 2px 5px;
    transition: .2s;
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
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    outline: 0;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 50%;
}

.form-group:focus {
    border-bottom: 2px solid #489eea;
    box-shadow: none;
}

.form-group input {
    color: #fff;
    height: 45px;
}

.footer-list h3, form .submit {}

form .submit {
    background: 0;
    border: 2px solid #000;
    border-radius: 20px;
    color: #000;
    cursor: hand;
    margin-top: 20px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.footer li, footer a, footer p {
    text-decoration: none;
}

footer a, footer p {
    color: #222;
}

.footer, .footer-content {
    margin-left: auto;
    margin-right: auto;
}

.footer {
    background-color: #ffff;
    border-top: 1px solid #f5f5f5;
    padding: 30px 80px;
    transition: .2s ease-in-out;
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
    text-decoration: none;
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

.footer-list, .footer-list li {
    margin: 0 10px 10px;
    text-decoration: none;
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
    margin-left: auto;
    margin-right: auto;
    max-width: 1600px;
    padding-bottom: 10px;
    padding-top: 30px;
}

.login-group.submit a, .social-icon:hover {
    color: #fff;
}

.about-list {
    align-items: center;
    display: flex;
}

.feedPost, .feedimg, .postcontenttop video {
    display: inline-block;
}

.about-list, .copyright {
    color: #222;
    margin: 5px 0;
}

.about-list li {
    color: #767676;
    margin: 0 5px;
}

.feedposts button:hover, .videofeedposts button:hover {
    background: #000;
    color: #fff;
    float: right;
    transition: .2s .2s ease-in-out;
}

.feedposts button, .videofeedposts button {
    background: #fff;
    border: 1px solid #000;
    border-radius: 50%;
    color: #000;
    float: right;
    padding: 5px;
}

.videofeedposts button {
    cursor: hand;
    webkit-border-radius: 5px;
}

.feedposts button {
    border: 1px solid #fff;
    border-radius: 50%;
    margin: 2px;
    padding: 5px;
}

.feedposts button:hover {
    background: #fff;
    border: 1px solid #000;
}

.openbtn, button {
    background: #000;
    color: #000;
}

.feedPostTitle img:hover, .feedposts button:hover, .postcontent button:hover, .videofeedPostTitle img:hover, .videofeedposts button:hover {
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
}

.postcontent button:hover {
    border: 1px solid #000;
    transition: .2s .2s ease-in-out;
}

.cell1 video:hover, .feedPostTitle img:hover, .openbtn {
    transition: all .2s ease-in-out;
}

.feedposts button, .postcontent button, button {
    cursor: hand;
}

.postcontent button {
    border: 1px solid #fff;
    border-radius: 50%;
    float: right;
    padding: 5px;
}

.feedposts, .intro, .videofeedposts {
    margin-left: auto;
    margin-right: auto;
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
}

.videofeedPostTitle {
    padding-top: 1px;
    text-align: center;
}

.feedPostTitle img, .videofeedPostTitle img {
    border: 2px solid #fff;
    border-radius: 50%;
    display: inline-block;
    height: 60px;
    width: 60px;
    z-index: 99;
}

.feedPost {
    padding: 4px;
    position: relative;
    text-align: left;
    vertical-align: top;
    width: calc(100%/3);
}

.cell1, .feedPostTitle, .feedimg, .postcontenttop video, .prof_actions, table {
    text-align: center;
}

.feedPostTitle {}

.feedPostTitle img:hover, .videofeedPostTitle img:hover {
    border-color: #000;
}

.feedimg {
    height: auto;
    /* max-width: 240px; */
    overflow: hidden;
    position: initial;
    width: 100%;
}

.cell1, .hero, .postcontenttop video {
    position: relative;
}

.feedimg img, .postcontenttop img, .postcontenttop video {
    border-radius: 5px;
    max-height: 240px;
    /* max-width: 240px; */
    width: 100%;
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
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    padding: 15px;
    webkit-transition: .2s ease-in-out;
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
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.login-group.submit:hover, .postcontent button {
    background: #fff;
    color: #000;
}

.intro, .intro h1, h2 {
    color: #000;
    text-align: center;
}

.intro {
    display: table;
    max-width: 1600px;
    padding: 40px 0px;
}

.intro3 {
    display: table;
    max-width: 1600px;
    padding: 40px 0;
}

.intro3 h1, h2 {}

.intro3 p {
    margin-bottom: 20px;
    margin-top: 20px;
}

.cell a, .cell1 a, .cell1 video, .feedpost a, .messageuser a, .messageuser p, .prof_actions, .profilepic, .social-icons {
    display: inline-block;
}

.intro p {
    margin-bottom: 20px;
    margin-top: 20px;
}

.intro, header {
    background: #fff;
}

.social-icons {
    background: 0;
    border: 2px solid #000;
    border-radius: 50%;
    color: #000;
    moz-transition: .5s ease-in-out;
    o-transition: .5s ease-in-out;
    padding: 6px;
    transition: .5s .5s ease-in-out;
    webkit-transition: .5s ease-in-out;
}

.social-icons:hover {
    background: #000;
    color: #fff;
}

.prof_actions form {
    display: inline-block;
}

.profilepic {
    width: 50%;
}

.prof_actions {
    border-radius: 8px;
    margin-bottom: 20px;
    margin-top: 20px;
    width: 100%;
}

.prof_actions button {
    padding: 3px 6px;
}

.city-hero-text h1 {
    color: #fff;
    font-size: 42px;
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
    opacity: .2;
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
    opacity: .3;
}

.feedpost a {}

table {
    border: 0;
    margin-left: auto;
    margin-right: auto;
}

.intro2 h2, .location h2 {
    color: #fff;
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
    color: #FFFFFF;
    display: inline-block;
    padding: 8px 0;
    text-align: left;
    /* transform: skewY(1.5deg); */
    vertical-align: top;
    width: calc(100% / 3);
}

.placesvisited a {
    display: inline-block;
}

.cell1 video:hover, .messageuser p, .profpost button {
    moz-transition: .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
}

.messageuser a, .messageuser p {
    color: #2c3643;
    text-align: center;
    transition: all .2s ease-in-out;
}

.cell1, .hero, .infologin h3, .infologin h4, .location h1, .login h1, .login h2, .login h3, .login h4 {
    color: #fff;
}

.editprofposts button, .profpost button {
    background: #fff;
    border-radius: 50%;
    cursor: hand;
    margin: 10px 0px;
    o-transition: .2s ease-in-out;
    padding: 5px;
    transition: .2s .2s ease-in-out;
    webkit-border-radius: 5px;
}

.editprofposts button:hover, .profpost button:hover {
    background: #489eea;
}

.profileinfo {
    background: #000000;
    border-radius: 5px;
    max-width: 1600px;
    padding: 10px;
}

.prof_info {
    background: #000000;
    border-radius: 5px;
    margin-top: -15px;
    margin-top: 5px;
    padding: 10px;
}

.myprofvideoposts {
    align-items: center;
    background: #fff;
    display: table;
    margin-left: auto;
    margin-right: auto;
}

.hero {
    border-radius: 5px;
    text-align: center;
}

.hero #response5, .hero #response5 li {
    color: #fff;
    text-align: left;
    width: 100%;
}

.hero input[type=text] {
    background: 0;
    border: 2px solid #fff;
    border-radius: 16px;
    color: #fff;
    font-size: 16px;
    height: 18px;
    margin-bottom: 8px;
    margin-top: 8px;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    padding: 16px;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 100%;
}

.hero input[type=text]:focus {
    border: 2px solid #000;
    box-shadow: none;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
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
    display: inline-block;
}

.hero #response5 li a, .hero #response5 li a:hover {
    font-weight: 600;
    position: relative;
}

.hero #response5 li a {
    color: #fff;
    display: list-item;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    padding: 4px;
    transition: .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.hero #response5 li a:hover {
    color: #489eea;
}

input:focus, textarea:focus {
    outline: 0;
}

.hero input[type=text]::placeholder, .location input[type=text]::placeholder {
    color: #fff;
}

.overlay input[type=search]::placeholder {
    color: #000;
}

#output {
    border: 3px solid #fff;
    border-radius: 5px;
    height: 100px;
    width: 100px;
}

.intro2 {
    background: #f9f9f9;
    margin-left: auto;
    margin-right: auto;
    overflow: visible;
    padding: 40px 0px;
    transform-origin: 100%;
}

.profile button {
    background: transparent;
    border-radius: 50%;
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    padding: 5px;
    transition: all .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
}

.profile button:hover {
    background: #489eea;
}

.follow img {
    border: 2px solid #fff;
    border-radius: 50%;
    display: inline-block;
    height: 80px;
    moz-transition: .2s ease-in-out;
    o-transition: .2s ease-in-out;
    transition: all .2s ease-in-out;
    webkit-transition: .2s ease-in-out;
    width: 80px;
}

.follow img:hover {
    border: 2px solid #000;
}

.centered i, .rightside {
    background: #000;
    color: #fff;
}

.leftside, .rightside {
    float: right;
    height: 100vh;
    moz-transition: .6s ease-in-out;
    o-transition: .6s ease-in-out;
    transition: .6s .6s ease-in-out;
    webkit-transition: .6s ease-in-out;
    width: 50%;
}

.leftside {
    background: #fff;
    color: #000;
    float: left;
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
    text-align: center;
    vertical-align: middle;
}

input:-webkit-autofill, input:-webkit-autofill:active, input:-webkit-autofill:focus, input:-webkit-autofill:hover {
    webkit-box-shadow: 0 0 0 30px #000 inset !important;
}

.prof_actions button {
    background: 0;
    border-radius: 0;
    color: #000;
    text-transform: uppercase;
}

.prof_actions button:hover {
    border-bottom: 1px solid #489eea;
}

.prof_actions i {
    border-radius: 50%;
    color: #000;
    padding: 5px;
}



.info-login-group.submit a, .infologin h1, .infologin h2 {
    color: #000;
}

.info-login-group.submit {
    background: 0;
    border: 2px solid #000;
    border-radius: 20px;
    color: #000;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

.info-login-group.submit:hover {
    background: #000;
    color: #fff;
}

.login a {
    color: #fff;
    display: inline;
}

.login a:hover {
    text-decoration: underline;
}

login::placeholder {
    color: #fff;
    opacity: 1;
}

.follow {
    display: inline-block;
    padding: 8px;
}

form {
    /* color: #fff; */
}

form#contact-form {
    transform: skewY(1.5deg);
}

input:-webkit-autofill {
    webkit-text-fill-color: #fff !important;
}

@media screen and (max-width: 480px) {
    .cell {
        width: 50%;
    }

    .cell img {
        max-width: 2000px;
    }

    .postvideo {
        margin-top: 60px;
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

    .coverpic {}

    .bodycontainer {
        background: 0;
        padding: 0px 80px;
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

@media only screen and (max-width: 768px) {
    .leftside, .overlay, nav #menu {
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
        text-align: center;
        width: 50%;
    }

    .feedposts p, .feedposts2 p, .hero-text .btn, .prof_section, .location #response4 li a {
        font-size: 14px;
    }

    .cell1 {
        width: 50%;
    }

    .rightside, nav {
        width: 100%;
    }

    #toggle {
        margin-top: 6px;
        opacity: 1;
        visibility: visible;
    }

    nav, nav .logo {
        position: static;
    }

    nav .logo {
        height: 0;
        margin: 0;
        max-width: 80%;
    }

    nav {
        height: inherit;
        z-index: 1;
    }

    .postcontent {
        width: 50%;
    }

    .age, .bio, .city, .overlay, .profile {
        width: 100%;
    }

    nav, nav .logo {
        background: #fff;
    }

    .overlay {
        background-color: #fff;
        height: 100%;
        left: 0;
        opacity: .99;
        position: fixed;
        top: 0;
        z-index: 1;
    }

    .message {
        padding: 5px;
        text-align: center;
        width: 100%;
    }

    input#searchbox2[type=search] {
        background: 0;
        border: 0;
        border-bottom: 2px solid #000;
        border-radius: 0px;
        color: #000;
        height: 18px;
        font-size: 16px;
        margin-top: 8px;
        moz-transition: .3s ease-in-out;
        o-transition: .3s ease-in-out;
        padding: 16px;
        transition: .3s .3s ease-in-out;
        webkit-appearance: none;
        webkit-transition: .3s ease-in-out;
        width: 100%;
    }

    input#searchbox2[type=search]:focus {
        border-bottom: 2px solid #489eea;
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
        border-bottom: 1px solid #489eea;
        color: #489eea;
    }

    .overlay #response2 li {
        color: #fff;
        display: block;
        text-align: left;
    }

    .overlay-content {
        margin: auto;
        position: relative;
        text-align: center;
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

    .overlay input[type=text] {
        background: #fff;
        border: 0;
        border-radius: 0;
        float: left;
        padding: 15px;
        width: 100%;
    }

    .overlay input[type=text]:hover {
        background: #f1f1f1;
    }

    .footer, .overlay #response2 li a:hover {
        moz-transition: .2s ease-in-out;
        o-transition: .2s ease-in-out;
        transition: .2s .2s ease-in-out;
        webkit-transition: .2s ease-in-out;
    }

    .footer {
        background: #fff;
        border-top: 1px solid #f5f5f5;
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
    }

    .footer-list, .footer-list li {
        margin: 0;
        text-decoration: none;
        width: 20%;
    }

    .footer-list li {
        width: 100%;
    }

    .footer-list li.active {
        background: #fff;
        border-top: 2px solid #000;
    }

    .footer-list li.not-active {
        background: #fff;
        border-top: 2px solid transparent;
    }

    .footer-list ul a {
        padding: 10px;
        vertical-align: middle;
    }

    .footer-content {
        display: none;
    }

    .footer-responsive-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0;
    }

    .footer-responsive-content a {
        display: list-item;
        text-decoration: none;
    }

    .footer-about {
        display: none;
    }

    .location #response4 {}

    #changeHere {
        margin: auto;
        width: 100%;
    }

    .rightcontent {
        float: right;
        height: auto;
        padding-bottom: 12px;
        padding-left: 12px;
        text-align: center;
        width: 50%;
    }

    .footer {
        padding: 0;
    }

    .footer-content {
        padding-top: 50px;
    }

    .feedPost, .profpost {
        display: inline-block;
    }

    .feedPost {
        padding: 8px;
        position: relative;
        text-align: left;
        width: 50%;
    }

    .feedposts, .videofeedposts {
        text-align: left;
    }

    .feedPostTitle, p {}

    .bodycontainer {
        margin: 0px 8px;
    }

    .city-hero-text h1 {
        font-size: 38px;
    }

    .nums, h3 {
        font-size: 20px;
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

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 16px;
    }

    p {
        font-size: 14px;
    }

    .intro3 {
        padding: 30px 0;
    }

    .form-group {
        font-size: 14px;
    }

    .form-group.submit {
        font-size: 18px;
    }

    .placesvisited {
        font-size: 14px;
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
        font-size: 15px;
        margin: 5%;
        text-align: center;
        width: 90%;
    }

    .myprofplaces, .myprofposts {
        display: table-cell;
        float: left;
        width: 100%;
    }

    .myprofplaces {
        float: right;
        padding-bottom: 200px;
        text-align: center;
    }

    .topslide {}

    #changeHere, .hero #response4, .hero #response4 li a {
        display: none;
    }

    .text {
        font-size: 35px;
    }

    .intro {
        padding: 20px 0px;
    }

    .profileinfo p {
        font-size: 14px;
    }

    .placesvisited {
        width: calc(100% / 2);
    }
}

@media screen and (max-width: 480px) {
    .feedPost, .leftcontent {
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

    .rightcontent {
        padding-right: 0;
    }

    .cell1, .column {
        width: 100%;
    }

    .myfollowers {
        width: 50%;
    }

    .feedPost {
        padding-left: 0;
        position: relative;
        width: 100%;
    }

    .myfollowees {
        width: 50%;
    }

    .feedPost2, .feedimg, .leftcontent, .places, .postcontent, .prof_section, .profilepic {
        width: 100%;
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

    .topslide {}

    .placesvisited {
        width: 100%;
    }

    .feedPost2 {
        padding-bottom: 2px;
        padding-top: 2px;
    }
}

.myprofplaces h3 {
    margin-bottom: 16px;
    overflow: visible;
    transform: skewY(1.5deg);
    transform-origin: 100%;
}

.myprofplaces a {
    color: #fff;
}

.myprofplaces a:hover {
    color: #fff;
    text-decoration: underline;
}

.my-input {
    background-color: transparent;
    border: 1px solid transparent;
    border-bottom: 2px solid #fff;
    border-radius: 0;
    color: #000;
    font-weight: 700;
    padding: 4px;
    width: 100%;
}

button.highlighted, button.highlighted:hover {
    border-bottom: 2px solid #489eea;
}

select {
    appearance: none;
    background-color: transparent;
    border: 0;
    border-bottom: 2px solid #000;
    border-radius: 0;
    color: #000;
    cursor: pointer;
    font-size: 100%;
    font-weight: 700;
    margin-left: 2px;
    moz-appearance: none;
    padding: 10px;
    transition: color .3s ease, background-color .3s ease, border-bottom-color .3s ease;
    webkit-appearance: none;
}

select::-ms-expand {
    display: none;
}

select:focus, select:hover {
    background-color: #fff;
    border-bottom-color: #dcdcdc;
    color: #489eea;
}

.postphoto h3, .postvideo h3 {
    color: #000;
}

#editHere {
    width: 100%;
}

.profpost i {
    color: #000;
}

.centered a {
    color: #000;
    padding-left: 2px;
}

.intro2 .centered a {
    color: #000;
}

.messages {
    margin-bottom: 100px;
}

table {
    background: #f9f9f9;
    border-radius: 5px;
    color: #000;
    padding: 5px;
}

table button {
    background: #fff;
    border-radius: 50%;
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    padding: 5px;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
}

table button:hover {
    background: #489eea;
}

.bioupdate {
    background: #000;
    border-radius: 20px;
    margin-bottom: 100px;
}

.bioupdate i {
    color: #fff;
}

.bioupdate form {
    padding: 20px;
}

.followuser {
    display: inline-block;
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
    moz-transition: .3s ease-in-out;
    o-transition: .3s ease-in-out;
    outline: 0;
    padding: 16px;
    transition: .3s .3s ease-in-out;
    webkit-transition: .3s ease-in-out;
    width: 50%;
}

.editprofposts {
    background: #f9f9f9;
    border-radius: 5px;
    margin: 20px 0px;
    padding: 10px;
}

.editprofposts h3, .editprofposts i, .tp-ac__list {
    color: #000;
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

nav #menu li a:hover .tooltip {
    display: block;
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
    color: #FFFFFF;
    transform-origin: 100%;
}

.myprofplaces .text-box h2 {
    /* transform: skewY(1.5deg); */
    /* transform-origin: 100%; */
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
    display: flex;
    justify-content: center;
    position: relative;
    text-transform: capitalize;
}

.text-box h2, .text-box h5 {
    border-radius: 2px;
    color: #fff;
    display: block;
    padding: .2em;
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