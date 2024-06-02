<style>
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    background-color: #fff;
    z-index: 99999999999 !important;
}

article.blog .post_info h2 {
    margin-top: 7px;
}

article.blog .post_info p {
    margin-bottom: 0;
}

article.blog .post_info h2 a:hover {
    color: {{ $general_color }} !important;
}

.tags a:hover {
    background-color: {{ $general_color }} !important;
    color: #fff !important;
}

.widget ul.cats a:hover {
    color: {{ $general_color }} !important;
}

.comments-list h3 a:hover {
    color: {{ $general_color }} !important;
}

[data-loader="circle-side"] {
    position: absolute;
    width: 50px;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-left: -25px;
    margin-top: -25px;
    -webkit-animation: circle infinite 0.95s linear;
    -moz-animation: circle infinite 0.95s linear;
    -o-animation: circle infinite 0.95s linear;
    animation: circle infinite 0.95s linear;
    border: 2px solid {{ $general_color }};
    border-top-color: rgba(0, 0, 0, 0.2);
    border-right-color: rgba(0, 0, 0, 0.2);
    border-bottom-color: rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    border-radius: 100%;
}

@-webkit-keyframes circle {
    0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-moz-keyframes circle {
    0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-o-keyframes circle {
    0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes circle {
    0% {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

html * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

body {
    background: #fff;
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 1.7;
    font-family: Poppins, Helvetica, sans-serif;
    color: #444;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #222;
    font-weight: 500;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

p {
    margin-bottom: 20px;
}

strong {
    font-weight: 600;
}

label {
    font-weight: 500;
    margin-bottom: 3px;
}

hr {
    margin-top: 25px;
    margin-bottom: 25px;
    border-color: #ededed;
}

a {
    color: {{ $general_color }};
    text-decoration: none;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    outline: 0;
}

a:focus,
a:hover {
    color: #111;
    text-decoration: none;
    outline: 0;
}

.btn_1,
a.btn_1 {
    border: none;
    background: {{ $general_color }};
    outline: 0;
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    padding: 8px 25px;
    color: #fff;
    font-weight: 500;
    text-align: center;
    font-size: 0.875rem;
    text-transform: capitalize;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    line-height: normal;
}

.btn_1:focus,
a.btn_1:focus {
    outline: 0;
}

.btn_1:hover,
a.btn_1:hover {
    -webkit-filter: brightness(115%);
    filter: brightness(115%);
}

.btn_1.full-width,
a.btn_1.full-width {
    display: block;
    width: 100%;
    text-align: center;
}

.btn_1.small,
a.btn_1.small {
    font-size: 12px;
    font-size: 0.75rem;
    padding: 7px 15px;
}

.btn_1.medium,
a.btn_1.medium {
    font-size: 18px;
    font-size: 1.125rem;
    padding: 15px 30px;
}

.btn_1.outline,
.btn_1.outline,
a.btn_1.outline {
    border: 2px solid {{ $general_color }};
    color: {{ $general_color }};
    padding: 6px 15px;
    background: 0 0;
}

.btn_1.outline:hover,
a.btn_1.outline:hover {
    background: {{ $general_color }};
    color: #fff !important;
}

.btn_1.outline:focus,
a.btn_1.outline:focus {
    outline: 0;
}

.btn_1.gray,
a.btn_1.gray {
    background: #f0f0f0;
    color: #111 !important;
}

.btn_1.gray:hover,
a.btn_1.gray:hover {
    background-color: #ffc107;
    color: #111 !important;
}

a.btn_play {
    background: #fff;
    display: block;
    width: 45px;
    height: 45px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    line-height: 50px;
    text-align: center;
    position: absolute;
    bottom: 30px;
    right: 30px;
    font-size: 32px;
    font-size: 2rem;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    color: #999;
    z-index: 99;
}

@media (max-width: 767px) {
    a.btn_play {
        display: none;
    }
}

a.btn_play:hover {
    color: {{ $general_color }};
}

.pulse_bt {
    display: block;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    box-shadow: 0 0 0 rgba(255, 255, 255, 0.4);
    animation: pulseanime 2.5s infinite;
    -webkit-animation: pulseanime 2.5s infinite;
}

.pulse_bt:hover {
    animation: none;
}

@-webkit-keyframes pulseanime {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }

    70% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
    }

    100% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
}

@keyframes pulseanime {
    0% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }

    70% {
        -moz-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
    }

    100% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
}

.container {
    max-width: 1280px !important;
}

@media (max-width: 991px) {
    .container {
        max-width: 100% !important;
    }
}

.small-gutters {
    margin-right: -5px !important;
    margin-left: -5px !important;
}

.small-gutters>[class*="col-"] {
    padding-right: 5px !important;
    padding-left: 5px !important;
}

.frame {
    height: 3px;
    width: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 99;
}

/* .frame.white {
    background: url(../img/frame_white.png) 0 0 repeat-x;
    background-size: 10px 3px;
} */

/* .frame.gray {
    background: url(../img/frame_gray.png) 0 0 repeat-x;
    background-size: 10px 3px;
} */

.frame.black {
    background: url(../img/frame_footer.png) 0 0 repeat-x;
    background-size: 10px 3px;
    top: -3px;
}

header {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    padding: 15px;
    z-index: 99999;
}

@media (max-width: 991px) {
    header.header {
        padding: 10px;
    }
}

header.header .logo_sticky {
    display: none;
}

header.header.sticky {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border-bottom: 1px solid #ededed;
    background-color: #fff;
}

@media (max-width: 991px) {
    header.header.sticky {
        padding: 10px 15px;
    }
}

header.header.sticky .logo_normal {
    display: none;
}

header.header.sticky .logo_sticky {
    display: inline-block;
}

header.header.sticky a.btn_top:hover {
    background-color: {{ $general_color }};
    color: #fff !important;
}

header.header_in {
    padding: 15px 0;
    background-color: #fff;
    position: relative;
    border-bottom: 1px solid #ededed;
}

header.header_in.is_sticky {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
}

header.header_in ul#top_menu li a {
    color: #444;
}

@media (max-width: 991px) {
    header.header_in {
        padding: 10px 0;
    }

    header.header_in #logo a {
        z-index: 9;
        position: relative;
    }
}

header a.open_close {
    position: absolute;
    left: 10px;
    top: 2px;
    z-index: 999;
    color: #fff;
    font-size: 32px;
    font-size: 2rem;
    display: none;
    width: 25px;
    height: 25px;
}

@media (max-width: 991px) {
    header a.open_close {
        display: block;
    }
}

header a.open_close span {
    display: none;
}

header a.open_close:hover {
    opacity: 0.8;
}

.header_in a.open_close,
header.sticky a.open_close {
    color: #444;
}

#logo {
    float: left;
    width: 100px;
    height: 35px;
}

#logo a {
    width: 100% !important;
    height: 100% !important;
}

#logo a img {
    width: 100% !important;
    height: 100% !important;
}


@media (max-width: 991px) {
    #logo {
        float: none;
        width: 100%;
        text-align: center;
    }

    #logo img {
        width: auto;
        height: 28px;
    }
}

.main-menu {
    position: relative;
    z-index: 9;
    top: 1px;
    float: right;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.main-menu ul,
.main-menu ul li {
    position: relative;
    margin: 0;
    padding: 0;
}

.main-menu ul a,
.main-menu ul li a {
    position: relative;
    margin: 0;
    padding: 0;
    display: block;
    padding: 10px;
}

.main-menu>ul>li>a {
    color: #fff;
    padding: 5px 8px;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 500;
}

.main-menu>ul>li:hover>a {
    color: {{ $general_color }};
}

header.header_in .main-menu>ul>li>a,
header.sticky .main-menu>ul>li>a {
    color: #444;
}

header.header_in .main-menu>ul>li:hover>a,
header.sticky .main-menu>ul>li:hover>a {
    opacity: 1;
    color: {{ $general_color }};
}

#close_in,
#header_menu {
    display: none;
}

@media only screen and (min-width: 992px) {
    .main-menu {
        width: auto;
    }

    .main-menu a {
        white-space: nowrap;
    }

    .main-menu ul li {
        display: inline-block;
    }

    .main-menu ul li.submenu:hover>a:after,
    .main-menu ul li.submenu:hover>a:before {
        bottom: -10px;
        opacity: 0;
    }

    .main-menu ul ul {
        position: absolute;
        border-top: 2px solid {{ $general_color }};
        z-index: 1;
        visibility: hidden;
        left: 3px;
        top: 110%;
        margin: 0;
        display: block;
        padding: 0;
        background: #fff;
        min-width: 210px;
        -webkit-box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
        -moz-box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
        transform: scale(0.4);
        transform-origin: 10% top;
        transition: 0.15s linear, 0.1s opacity cubic-bezier(0.39, 0.575, 0.565, 1),
            0.15s transform cubic-bezier(0.1, 1.26, 0.83, 1);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        opacity: 0;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -webkit-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .main-menu ul ul:before {
        bottom: 100.3%;
        left: 12%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: {{ $general_color }};
        border-width: 7px;
        margin-left: -7px;
    }

    .main-menu ul li:hover>ul {
        padding: 0;
        visibility: visible;
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
        -webkit-transition-duration: 0s, 0.2s, 0.2s;
        transition-duration: 0s, 0.2s, 0.2s;
    }

    .main-menu ul ul li {
        display: block;
        height: auto;
        padding: 0;
    }

    .main-menu ul ul li a {
        font-size: 13px;
        font-size: 0.8125rem;
        color: #444;
        border-bottom: 1px solid #dd33332e;
        display: block;
        padding: 12px 15px;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .main-menu ul ul li:last-child a {
        border-bottom: none;
    }

    .main-menu ul ul li:first-child a:hover {
        -webkit-border-radius: 3px 3px 0 0;
        -moz-border-radius: 3px 3px 0 0;
        -ms-border-radius: 3px 3px 0 0;
        border-radius: 3px 3px 0 0;
    }

    .main-menu ul ul li:last-child a {
        border-bottom: none;
    }

    .main-menu ul ul li:last-child a:hover {
        -webkit-border-radius: 0 0 3px 3px;
        -moz-border-radius: 0 0 3px 3px;
        -ms-border-radius: 0 0 3px 3px;
        border-radius: 0 0 3px 3px;
    }

    .main-menu ul ul li:hover>a {
        background-color: #f9f9f9;
        color: {{ $general_color }};
        padding-left: 18px;
    }

    .main-menu ul ul li.third-level>a {
        font-weight: 400 !important;
    }

    .main-menu ul ul li.third-level>a:hover {
        background-color: #f9f9f9;
        color: {{ $general_color }};
        padding-left: 18px;
        opacity: 1;
    }

    .main-menu ul ul li.third-level>a:after {
        font-family: ElegantIcons;
        content: "\35";
        float: right;
        font-size: 16px;
        font-size: 1rem;
        margin-top: -2px;
    }

    .main-menu ul ul ul {
        position: absolute;
        border-top: 0;
        z-index: 1;
        height: auto;
        left: 100%;
        top: 0;
        margin: 0;
        padding: 0;
        background: #fff;
        min-width: 190px;
        -webkit-box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
        -moz-box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.175);
    }

    .main-menu ul ul ul:before {
        border-width: 0;
        margin-left: 0;
    }
}

@media only screen and (max-width: 991px) {
    #header_menu {
        display: block;
        text-align: center;
        position: relative;
        padding: 30px 0 25px 0;
        background-color: #fff;
    }

    #header_menu a.open_close {
        position: absolute;
        right: 15px;
        top: 0;
        left: inherit;
        color: #fff !important;
    }

    .main-menu ul li a:hover,
    a.show-submenu:hover {
        color: {{ $general_color }} !important;
        background-color: #f9f9f9;
        opacity: 1 !important;
    }

    .main-menu ul li {
        border-top: none;
        border-bottom: 1px solid #ededed;
        color: #fff;
    }

    .main-menu ul li a {
        padding: 15px !important;
    }

    .main-menu a,
    .main-menu li {
        display: block;
        color: #333 !important;
    }

    .main-menu li {
        position: relative;
    }

    .main-menu ul>li {
        padding-bottom: 0;
    }

    .main-menu ul>li i {
        float: right;
    }

    .main-menu>ul>li.submenu:hover>a:after {
        transform: rotate(180deg);
        color: {{ $general_color }};
    }
/*
    .main-menu ul>li.submenu>a:after {
        font-family: ElegantIcons;
        font-size: 21px;
        font-size: 1.3125rem;
        content: "\33";
        color: #444;
        line-height: 1;
        float: right;
        display: inline-block;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    } */

    .main-menu ul li.submenu ul {
        border-left: 1px solid #ededed;
        margin: 0 0 10px 25px;
    }

    .main-menu ul li.submenu ul li {
        border: 0;
        font-size: 13px;
        font-size: 0.8125rem;
    }

    .main-menu ul li.submenu ul ul {
        border-left: none;
        margin: 0 0 0 15px;
    }

    .main-menu {
        overflow-y: scroll;
        transform: translateX(-102%);
        top: 0;
        left: 0;
        bottom: 0;
        width: 55%;
        height: 100%;
        position: fixed;
        z-index: 999;
        background-color: #fff;
        -webkit-transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -moz-transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -ms-transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -o-transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        transition: all 0.5s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .main-menu.show {
        transform: translateX(0);
    }

    .main-menu .show-submenu+ul {
        display: none;
        visibility: hidden;
    }

    .main-menu a.show-submenu+ul.show_normal {
        display: block;
        visibility: visible;
    }
}

@media only screen and (max-width: 480px) {
    .main-menu {
        width: 100%;
    }
}

a.btn_top {
    border-radius: 3px;
    padding-left: 12px !important;
    padding-right: 12px !important;
    color: #fff !important;
    background-color: {{ $general_color }};
}

a.btn_top.order {
    border: 1px solid rgba(255, 255, 255, 0);
    background-color: {{ $general_color }};
    color: #fff !important;
}

a.btn_top.order:hover {
    background-color: #262626;
}

@media (max-width: 991px) {
    a.btn_top {
        background-color: #262626;
        color: #fff !important;
        border: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        border-radius: 0;
    }
}

.sticky a.btn_top.order {
    border: 1px solid rgba(255, 255, 255, 0);
    background-color: {{ $general_color }};
    color: #fff !important;
}

.sticky a.btn_top.order:hover {
    background-color: #262626;
}

ul#top_menu {
    float: right;
    margin: 0 25px 0 25px;
    padding: 0;
    list-style: none;
    font-size: 13px;
    font-size: 0.8125rem;
}

@media (max-width: 991px) {
    ul#top_menu {
        position: absolute;
        top: 12px;
        right: 15px;
        float: none;
        margin: -2px 0 0 10px;
    }
}

ul#top_menu li {
    float: left;
    margin: 0;
    line-height: 1;
}

ul#top_menu li a {
    color: #fff;
    font-size: 18px;
}

.sticky ul#top_menu li a {
    color: #000;
}

.sticky ul#top_menu li a:hover {
    /* color: {{ $general_color }} !important; */
}

ul#top_menu li a:hover::after {
    color: {{ $general_color }} !important;
}


ul#top_menu li a.cart_bt,
ul#top_menu li a.search-overlay-menu-btn {
    display: block;
    width: 22px;
    height: 23px;
    position: absolute;
    top: 7px;
    -moz-transition: opacity 0.5s ease;
    -o-transition: opacity 0.5s ease;
    -webkit-transition: opacity 0.5s ease;
    -ms-transition: opacity 0.5s ease;
    transition: opacity 0.5s ease;
    /* color: #fff; */
}

ul#top_menu li a.cart_bt.cart_bt,
ul#top_menu li a.search-overlay-menu-btn.cart_bt {
    top: 5px;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

@media (max-width: 991px) {

    ul#top_menu li a.cart_bt.cart_bt,
    ul#top_menu li a.search-overlay-menu-btn.cart_bt {
        top: 2px;
    }
}

@media (max-width: 991px) {

    ul#top_menu li a.cart_bt,
    ul#top_menu li a.search-overlay-menu-btn {
        top: 2px;
        right: 5px;
    }
}

ul#top_menu li a.cart_bt strong,
ul#top_menu li a.search-overlay-menu-btn strong {
    font-size: 10px;
    font-size: 0.625rem;
    font-weight: 700;
    width: 16px;
    height: 16px;
    text-indent: 0;
    display: block;
    text-align: center;
    position: absolute;
    bottom: -4px;
    right: -3px;
    line-height: 17px !important;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    background-color: #262626;
    color: #fff !important;
}

@media (max-width: 767px) {

    ul#top_menu li a.cart_bt strong,
    ul#top_menu li a.search-overlay-menu-btn strong {
        bottom: -3px;
    }
}

ul#top_menu li a.search-overlay-menu-btn {
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

/* .sticky ul#top_menu li a.cart_bt:before,
.sticky ul#top_menu li a.search-overlay-menu-btn:before {
    color: #444;
} */

ul#top_menu li a.search-overlay-menu-btn {
    position: relative;
    margin-right: 10px;
}

@media (max-width: 991px) {
    ul#top_menu li a.search-overlay-menu-btn {
        top: 3px;
        right: 25px;
    }
}

/* ul#top_menu li a.search-overlay-menu-btn:before {
    font-family: ElegantIcons;
    content: "\55";
} */

/* .sticky ul#top_menu li a.search-overlay-menu-btn:before {
    color: #444;
} */

.dropdown-cart .dropdown-menu {
    margin-top: 11px !important;
    transform: translate(30px, 30px) !important;
    border: none;
    min-width: 0;
    padding: 15px;
    width: 260px;
    top: 100%;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.175);
    -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.175);
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.175);
    font-size: 13px;
    font-size: 0.8125rem;
    border-top: 2px solid {{ $general_color }};
}

.dropdown-cart .dropdown-menu:before {
    bottom: 100%;
    right: 5%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: {{ $general_color }};
    border-width: 7px;
    margin-left: -7px;
}

@media (max-width: 767px) {
    .dropdown-cart .dropdown-menu {
        display: none !important;
    }
}

.dropdown-cart .dropdown-menu .total_drop {
    font-size: 16px;
    font-size: 1rem;
}

.dropdown-cart .dropdown-menu .total_drop strong {
    float: left;
}

.dropdown-cart .dropdown-menu .total_drop span {
    float: right;
    font-weight: 600;
}

.dropdown-cart .dropdown-menu .total_drop .btn_1 {
    margin-top: 5px;
    display: block;
}

.dropdown-cart .dropdown-menu ul {
    padding: 0;
    list-style: none;
}

.dropdown-cart .dropdown-menu ul li {
    border-bottom: 1px solid #ededed;
    margin: 0 0 10px 0 !important;
    padding: 0 15px 10px 60px;
    display: block;
    min-height: 60px;
    position: relative;
    float: none !important;
}

.dropdown-cart .dropdown-menu ul li figure {
    width: 50px;
    height: 50px;
    overflow: hidden;
    position: absolute;
    margin: 0;
    left: 0;
    top: 0;
    border: 1px solid #ededed;
}

.dropdown-cart .dropdown-menu ul li figure img {
    width: auto;
    height: 50px;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%) scale(1.1);
    -moz-transform: translate(-50%, -50%) scale(1.1);
    -ms-transform: translate(-50%, -50%) scale(1.1);
    -o-transform: translate(-50%, -50%) scale(1.1);
    transform: translate(-50%, -50%) scale(1.1);
}

.dropdown-cart .dropdown-menu ul li a.action {
    color: #999;
    position: absolute;
    right: 0;
    top: 0;
    width: 15px;
    height: 15px;
}

.dropdown-cart .dropdown-menu ul li a.action i {
    font-size: 16px;
    font-weight: 400;
    color: #777;
}

.dropdown-cart .dropdown-menu ul li a.action i:hover {
    color: #1a1a1a;
}

.dropdown-cart .dropdown-menu ul li strong {
    color: #444;
    margin-top: 5px;
    display: inline-block;
    color: #333;
    font-weight: 600;
}

.dropdown-cart .dropdown-menu ul li strong span {
    display: block;
    font-weight: 400;
    margin-bottom: 5px;
}

.dropdown-cart .dropdown-menu a.btn_1 {
    height: auto;
    line-height: 1.4;
}

.dropdown-cart .dropdown-menu a.btn_1.outline {
    background-color: transparent;
}

.dropdown-cart .dropdown-menu a.btn_1.outline:hover {
    -webkit-filter: brightness(none !important);
    filter: brightness(none !important);
    color: #fff !important;
    background-color: {{ $general_color }};
}

.dropdown-cart .dropdown-menu a.btn_1:hover {
    color: #fff !important;
    background-color: {{ $general_color }};
}

.hero_single {
    width: 100%;
    position: relative;
    text-align: center;
    margin: 0;
    color: #fff;
}

.hero_single .opacity-mask {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.hero_single .opacity-mask h1,
.hero_single .opacity-mask h3 {
    color: #fff;
    line-height: 1;
    font-size: 48px;
    font-size: 3rem;
    margin: 0;
    font-weight: 500;
}

@media (max-width: 767px) {

    .hero_single .opacity-mask h1,
    .hero_single .opacity-mask h3 {
        font-size: 38px;
        font-size: 2.375rem;
    }
}

.hero_single .opacity-mask p {
    font-size: 1.5rem;
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .hero_single .opacity-mask p {
        font-size: 21px;
        font-size: 1.3125rem;
    }
}

.hero_single.version_2 {
    height: 680px;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

@media (max-width: 767px) {
    .hero_single.version_2 {
        height: 480px;
    }
}

.hero_single.version_2 .opacity-mask h1,
.hero_single.version_2 .opacity-mask h3 {
    font-size: 56px;
    font-size: 3.5rem;
    margin-top: 15px;
}

.hero_single.version_2 .opacity-mask h1:before,
.hero_single.version_2 .opacity-mask h3:before {
    content: url("../img/divider.svg");
    display: block;
    margin-bottom: 15px;
}

@media (max-width: 767px) {

    .hero_single.version_2 .opacity-mask h1,
    .hero_single.version_2 .opacity-mask h3 {
        font-size: 36px;
        font-size: 2.25rem;
    }
}

.hero_single.version_2 .opacity-mask p {
    font-size: 36px;
    font-size: 2.25rem;
    font-family: Lora, serif;
}

@media (max-width: 767px) {
    .hero_single.version_2 .opacity-mask p {
        font-size: 21px;
        font-size: 1.3125rem;
    }
}

.hero_single.inner_pages {
    height: 400px;
    background-position: center center;
    background-repeat: no-repeat;
    background-color: #ededed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

@media (max-width: 991px) {
    .hero_single.inner_pages {
        background-attachment: scroll;
    }
}

/* .hero_single.inner_pages h1:before {
    content: url("../img/divider.svg");
    display: block;
    margin-bottom: 15px;
} */

.hero_single.inner_pages p {
    font-family: Lora, serif;
}

@keyframes smoothScroll {
    0% {
        transform: translateY(-200px);
    }

    100% {
        transform: translateY(0);
    }
}

#carousel-home,
#carousel-home-2 {
    position: relative;
}

#carousel-home .static,
#carousel-home-2 .static {
    position: static;
}

#carousel-home .cover,
#carousel-home-2 .cover {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 2;
    opacity: 1 !important;
}

#carousel-home .owl-carousel .owl-slide,
#carousel-home-2 .owl-carousel .owl-slide {
    height: 660px;
    position: relative;
}

@media (max-width: 767px) {

    #carousel-home .owl-carousel .owl-slide,
    #carousel-home-2 .owl-carousel .owl-slide {
        height: 480px;
    }
}

#carousel-home .owl-carousel .owl-slide-animated,
#carousel-home-2 .owl-carousel .owl-slide-animated {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
    visibility: hidden;
    -moz-transition: all 50ms ease;
    -o-transition: all 50ms ease;
    -webkit-transition: all 50ms ease;
    -ms-transition: all 50ms ease;
    transition: all 50ms ease;
}

#carousel-home .owl-carousel .owl-slide-animated.is-transitioned,
#carousel-home-2 .owl-carousel .owl-slide-animated.is-transitioned {
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
    opacity: 1;
    visibility: visible;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#carousel-home .owl-carousel .owl-slide-title.is-transitioned,
#carousel-home-2 .owl-carousel .owl-slide-title.is-transitioned {
    transition-delay: 0.2s;
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    -o-transition-delay: 0.2s;
}

#carousel-home .owl-carousel .owl-slide-subtitle.is-transitioned,
#carousel-home-2 .owl-carousel .owl-slide-subtitle.is-transitioned {
    transition-delay: 0.35s;
    -webkit-transition-delay: 0.35s;
    -moz-transition-delay: 0.35s;
    -o-transition-delay: 0.35s;
}

#carousel-home .owl-carousel .owl-slide-cta.is-transitioned,
#carousel-home-2 .owl-carousel .owl-slide-cta.is-transitioned {
    transition-delay: 0.5s;
    -webkit-transition-delay: 0.5s;
    -moz-transition-delay: 0.5s;
    -o-transition-delay: 0.5s;
}

#carousel-home .owl-carousel .owl-dots,
#carousel-home-2 .owl-carousel .owl-dots {
    bottom: 15px;
    width: 100%;
    position: absolute;
}

#carousel-home .owl-carousel .owl-dots {
    top: 48%;
    right: 40px;
    width: 30px;
    bottom: 0;
    transform: translateY(-50%);
    height: 0;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
}

.slide-text {
    padding-top: 15px;
    font-size: 21px;
    font-size: 1.3125rem;
}

.slide-text h2,
.slide-text h3 {
    font-size: 46px;
    font-size: 2.875rem;
    font-weight: 900;
    text-transform: uppercase;
    line-height: 1;
}

@media (max-width: 767px) {

    .slide-text h2,
    .slide-text h3 {
        font-size: 42px;
        font-size: 2.625rem;
    }
}

.slide-text strong {
    font-weight: 700;
    font-size: 28px;
    font-size: 1.75rem;
}

.slide-text.white {
    color: #fff;
}

.slide-text.white h2,
.slide-text.white h3 {
    color: #fff;
}

#carousel-home-2 .owl-carousel .owl-slide {
    height: 680px;
}

@media (max-width: 767px) {
    #carousel-home-2 .owl-carousel .owl-slide {
        height: 540px;
    }
}

#carousel-home-2 .owl-carousel .owl-slide .static {
    position: static;
    flex-direction: column;
    height: 100%;
}

#carousel-home-2 .owl-item.active.center {
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
}

@media (max-width: 767px) {
    #carousel-home-2 .owl-item.active.center {
        border: 0;
    }
}

#icon_drag_mobile {
    position: absolute;
    right: 20px;
    bottom: 20px;
    background: url(../img/drag_icon.svg) 0 0 no-repeat;
    width: 50px;
    height: 30px;
    opacity: 0.6;
    z-index: 99;
    display: none;
}

@media (max-width: 767px) {
    #icon_drag_mobile {
        display: block;
    }
}

ul#banners_grid {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
}

ul#banners_grid li {
    position: relative;
    width: 33.33%;
    float: left;
    border-top: 5px solid #fff;
    border-right: 5px solid #fff;
}

ul#banners_grid li:last-child {
    border-right: none;
}

@media (max-width: 767px) {
    ul#banners_grid li {
        width: 100%;
        float: none;
        border-right: none;
    }
}

a.img_container {
    position: relative;
    overflow: hidden;
    z-index: 0;
    display: block;
    width: 100%;
    height: 250px;
    margin-top: 25px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

@media (max-width: 767px) {
    a.img_container {
        width: 100%;
        float: none;
        height: 150px;
    }
}

a.img_container img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

@media (max-width: 1199px) {

    a.img_container img {
        height: 100%;
        width: auto;
        max-width: inherit;
    }
}

@media (max-width: 767px) {

    a.img_container img {
        width: 100%;
        height: auto;
    }
}

a.img_container:hover img {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
}

a.img_container .short_info {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    box-sizing: border-box;
    color: #fff;
    padding: 0 15px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    -webkit-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    transition: all 0.4s ease;
    text-align: center;
}

a.img_container .short_info h3 {
    color: #fff;
    font-size: 26px;
    font-size: 1.625rem;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
    font-weight: 900;
}

a.img_container .short_info p {
    font-family: Lora, serif;
    font-size: 18px;
    font-size: 1.125rem;
    margin-bottom: 0;
}

.header-video {
    position: relative;
    overflow: hidden;
    background-color: #d3d3d3;
    height: 580px !important;
}

.header-video h1,
.header-video h3 {
    color: #fff;
    line-height: 1;
    font-size: 48px;
    font-size: 3rem;
    margin: 0;
    font-weight: 500;
}

@media (max-width: 767px) {

    .header-video h1,
    .header-video h3 {
        font-size: 36px;
        font-size: 2.25rem;
    }
}

.header-video p {
    font-size: 28px;
    font-size: 1.75rem;
    font-weight: 300;
    display: block;
}

@media (max-width: 767px) {
    .header-video p {
        font-size: 21px;
        font-size: 1.3125rem;
    }
}

#hero_video {
    position: relative;
    background-size: cover;
    color: #fff;
    width: 100%;
    height: 100%;
    z-index: 99;
}

.header-video video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
}

#hero_video iframe {
    height: 100%;
    width: 100%;
}

.teaser-video {
    width: 100%;
    height: auto;
}

.header-video--media {
    width: 100%;
    height: auto;
}

@media (max-width: 1024px) {
    #hero_video {
        background: #ededed url(../img/slides/slide_home_1.jpg) center center no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: center;
    }

    .header-video {
        background: 0 0;
    }
}

.call_section {
    background-position: center center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    border-radius: 10px;
    overflow: hidden;
    padding: 120px 0px;
}

@media (max-width: 767px) {
    .call_section {
        padding: 60px 0;
    }
}

.call_section .box_1 {
    background-color: #262626;
    color: #fff;
    padding: 45px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.call_section .box_1 p {
    opacity: 0.8;
    font-size: 16px;
    font-size: 1rem;
}

.call_section .box_1 h2 {
    color: #fff;
    font-size: 42px;
    font-size: 2.625rem;
    margin-bottom: 20px;
}

.call_section .box_1 h2 span {
    font-size: 24px;
    font-size: 1.5rem;
    font-family: Lora, serif;
    display: block;
}

.call_section_img {
    background: #262626;
    padding: 20px;
    height: 100%;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.call_section_img img {
    height: 100% !important;
    object-fit: cover !important;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.home_intro figure {
    position: relative;
    display: inline-block;
}

.home_intro figure img {
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}


.home_intro figure::before {
    position: absolute;
    content: "";
    width: 200px;
    height: 200px;
    background: {{ $general_color }};
    bottom: -10px;
    right: -10px;
    z-index: -1;
    border-radius: 5px;
}

.main_title {
    position: relative;
    margin-bottom: 25px;
    position: relative;
}

.main_title span {
    width: 120px;
    height: 2px;
    background-color: {{ $general_color }};
    display: block;
    position: relative;
}

.main_title span em {
    width: 15px;
    height: 15px;
    top: -7px;
    left: 0;
    background-color: {{ $general_color }};
    display: block;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

@media (max-width: 767px) {
    .main_title {
        margin-bottom: 10px;
    }
}

.main_title h2 {
    font-size: 32px;
    font-size: 2rem;
    max-width: 600px;
    margin: 20px 0 0 0;
}

@media (max-width: 767px) {
    .main_title h2 {
        font-size: 26px;
        font-size: 1.625rem;
    }
}

.main_title p {
    max-width: 600px;
    font-size: 18px;
    font-size: 1.125rem;
    font-weight: 300;
}

.main_title a {
    position: absolute;
    right: 65px;
    bottom: 0;
    font-weight: 500;
}

@media (max-width: 991px) {
    .main_title a {
        display: none;
    }
}

.main_title.center {
    text-align: center;
}

.main_title.center span {
    margin: auto;
}

.main_title.center span em {
    margin: auto;
}

.main_title.center h2 {
    max-width: inherit;
    font-size: 34px;
    font-size: 2.125rem;
}

@media (max-width: 767px) {
    .main_title.center h2 {
        font-size: 28px;
        font-size: 1.75rem;
    }
}

.main_title.center p {
    font-size: 21px;
    font-size: 1.3125rem;
    font-weight: 300;
    max-width: inherit;
}

.main_title.version_2 a {
    right: 0;
}

@media (max-width: 767px) {
    .main_title.version_2 a {
        display: none;
    }
}

.banner {
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    overflow: hidden;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: relative;
    /* margin-bottom: 60px; */
}

.banner .wrapper {
    color: #fff;
    padding: 30px;
}

.banner .wrapper .text {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
}

@media (max-width: 767px) {
    .banner .wrapper {
        padding: 30px;
    }
}

.banner .wrapper small {
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
}

.banner .wrapper h3 {
    color: #fff;
    font-size: 29px;
    text-align: center;
    margin: 0;
    font-weight: 900;
}

.banner .wrapper p {
    font-size: 15px;
    font-family: Lora, serif;
    text-align: center;
}

.menu_item {
    position: relative;
    padding: 7px 0 0 115px;
    margin-bottom: 30px;
    min-height: 80px;
}

.menu_item figure {
    position: absolute;
    left: 0;
    top: 0;
    width: 100px;
    height: 100px;
    border-radius: 5px;
    overflow: hidden;
}

.menu_item figure img {
    width: 100% !important;
    height: 100% !important;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

.menu_item .menu_title {
    background-position: 0 13px;
    background-size: 4px 4px;
    background-repeat: repeat-x;
}

.menu_item .menu_title h3 {
    background-color: #fff;
    font-size: 18px;
    font-size: 1.125rem;
    display: inline-block;
    margin: 0;
    padding-right: 3px;
}

.menu_item .menu_title em {
    float: right;
    font-weight: 600;
    font-style: normal;
    background-color: {{ $general_color }} !important;
    color: #fff;
    height: 25px;
    padding: 2px 7px 0px 7px;
    border-radius: 3px;
}

.menu_item p {
    font-family: Lora, serif;
    margin-bottom: 0;
}

.menu_item .btn_1 {
    text-transform: capitalize;
    font-size: 12px !important;
    margin-top: 5px;
    padding: 5px 15px;
}

.menu_item.order {
    cursor: pointer;
    -moz-transition: all 0.1s ease;
    -o-transition: all 0.1s ease;
    -webkit-transition: all 0.1s ease;
    -ms-transition: all 0.1s ease;
    transition: all 0.1s ease;
}

.menu_item.order a.add_to_cart {
    position: absolute;
    left: 2px;
    top: 65px;
    background-color: {{ $general_color }};
    color: #fff;
    font-size: 11px;
    font-size: 0.6875rem;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    line-height: 1;
    padding: 6px 8px;
    font-weight: 600;
    opacity: 0;
}

@media (max-width: 991px) {
    .menu_item.order a.add_to_cart {
        opacity: 1;
        left: -2px;
    }
}

.menu_item.order a.add_to_cart:hover {
    -webkit-filter: brightness(115%);
    filter: brightness(115%);
    opacity: 1;
}

.menu_item.order:hover a.add_to_cart {
    opacity: 1;
    left: -2px;
}

.menu_item figure a:hover img {
    transform: scale(1.1);
}

.menu_item .menu_title em,
.menu_item .menu_title h3 {
    background-color: #fff;
}

.menu_item_grid {
    text-align: center;
    margin-bottom: 30px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    padding-bottom: 20px;
    border-radius: 5px;
    overflow: hidden;
    background: #fff;
}

.menu_item_grid h3 {
    font-size: 18px;
    margin: 15px 0 0 0;
}

.menu_item_grid p {
    font-family: Lora, serif;
    margin: 0 0 10px 0;
}

.new_price {
    color: {{ $general_color }};
    font-weight: 500;
    font-size: 16px;
}

.old_price {
    color: #999;
    text-decoration: line-through;
    display: inline-block;
    white-space: nowrap;
    font-weight: 500;
    font-size: 16px;
}

.menu_item_grid .add_to_cart {
    margin-top: 10px;
}


.card-body .menu_item .menu_title em,
.card-body .menu_item .menu_title h3 {
    background-color: #f9f9f9;
}

.homepage .menu_item .menu_title em,
.homepage .menu_item .menu_title h3 {
    background-color: #f4f4f4;
}

.tabs_menu {
    margin-top: 15px;
}

.tabs_menu .nav-tabs {
    border: none;
    border-bottom: 2px solid #ededed;
    display: flex;
    justify-content: center;
}

@media (max-width: 767px) {
    .tabs_menu .nav-tabs {
        display: none;
    }
}

.tabs_menu .nav-tabs .nav-item {
    text-transform: uppercase;
    font-weight: 500;
}

.tabs_menu .tab-content .card {
    border: none;
    background-color: #f9f9f9;
    padding: 0 45px;
}

@media (max-width: 991px) {
    .tabs_menu .tab-content .card {
        padding: 0;
    }
}

.tabs_menu .tab-content .card .card-header {
    padding: 0;
    border: 0;
    background-color: #f8f8f8;
}

.tabs_menu .tab-content .card .card-header a {
    display: block;
    font-size: 18px;
    padding: 15px;
    color: #222;
}

.tabs_menu .tab-content .card .card-body {
    padding: 45px 0 20px 0;
}

@media (max-width: 991px) {
    .tabs_menu .tab-content .card .card-body {
        padding: 25px 15px 5px 15px;
    }
}

@media (max-width: 991px) {
    .tabs_menu .tab-content .card .card-body.reviews .add_bottom_45 {
        padding-bottom: 25px;
    }
}

@media (min-width: 768px) {
    .tabs_menu .tab-content .card {
        border: none;
    }

    .tabs_menu .tab-content .card .card-header {
        display: none;
    }

    .tabs_menu .tab-content .card .collapse {
        display: block;
    }
}

@media (max-width: 767px) {
    .tabs_menu .tab-content {
        margin-bottom: 25px;
    }

    .tabs_menu .tab-content .card-header a:after {
        font-family: ElegantIcons;
        width: 20px;
        display: block;
        float: right;
    }

    .tabs_menu .tab-content .card-header a.collapsed:after {
        content: "\50";
    }

    .tabs_menu .tab-content .card-header a:after {
        content: "\4f";
    }

    .tabs_menu .tab-content .fade:not(.show) {
        opacity: 1;
    }

    .tabs_menu .tab-content .tab-pane {
        display: block !important;
        opacity: 1;
    }
}

.tabs_menu.homepage .tab-content .card {
    background-color: #fff;
}

.tabs_menu.homepage .tab-content .card .card-body .menu_item .menu_title em,
.tabs_menu.homepage .tab-content .card .card-body .menu_item .menu_title h3 {
    background-color: #fff;
}

.tabs_menu.homepage .tab-content .card .card-header {
    background-color: #fff;
}

.box_booking {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    margin-bottom: 25px;
    background-color: #fff;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    -o-border-radius: 5px;
}

.box_booking_2 .main input {
    margin-bottom: 20px;
}

.shop_setails_img {
    max-height: 420px;
    overflow: hidden;
    margin: 0;
    border-radius: 5px;
}

.shop_setails_img img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

.box_booking .head {
    text-align: center;
    padding: 23px 20px 18px 20px;
    background-color: #fff;
    border-bottom: 1px solid {{ $general_color }};
}

.box_booking .head h3 {
    font-size: 1.5rem;
    margin: 0;
}

.box_booking .head small {
    display: block;
}

.box_booking .head .offer {
    color: #e74747;
    font-weight: 500;
    font-size: 16px;
    font-size: 1rem;
}

.box_booking .main {
    padding: 25px;
}

.box_booking .main ul {
    list-style: none;
    padding: 0;
}

.box_booking .main ul li {
    margin-bottom: 8px;
}

.box_booking .main ul li.total {
    font-size: 18px;
    font-size: 1.125rem;
    font-weight: 600;
    color: #e74747;
    text-transform: uppercase;
}

.box_booking .main ul li a {
    padding-left: 30px;
    color: #444;
    display: inline-block;
    position: relative;
}

.box_booking .main ul li a:before {
    font-family: ElegantIcons;
    content: "\4f";
    font-size: 21px;
    font-size: 1.3125rem;
    position: absolute;
    left: 0;
    top: -2px;
    line-height: 1;
}

.box_booking .main ul li a:hover {
    color: #e74747;
}

.box_booking .main ul li span {
    float: right;
    font-weight: 500;
}

.box_booking .form-group {
    margin: 0 0 10px 0;
}

.box_booking textarea {
    height: 130px;
}

.opt_order {
    border-top: 1px solid #ededed;
    border-bottom: 1px solid #ededed;
    margin-bottom: 20px;
    padding: 15px 0 5px 0;
}

.table.cart-list {
    margin-bottom: 30px;
}

.table.cart-list tbody>tr:nth-child(2n + 1)>td {
    background-color: #fff !important;
}

.table.cart-list tbody tr {
    border-bottom: 1px solid #ddd;
}

.table.cart-list tbody {
    border: 1px solid #ddd;
}

.table.cart-list thead th {
    border: none;
    font-weight: 500;
    background: {{ $general_color }};
    color: #fff;
    padding-top: 10px;
    border-right: 1px solid #ddd;
}

.table.cart-list td {
    border-right: 1px solid #ddd !important;
}

.table.cart-list td {
    vertical-align: middle;
    padding: 0.75rem;
}

.table.cart-list td.options i {
    font-size: 26px;
}

.table.cart-list td h4 {
    margin: 0;
    font-size: 16px;
    font-size: 1rem;
}

.table.cart-list td p {
    margin: 0;
    font-size: 13px;
    font-size: 0.8125rem;
    color: #444;
}

.table.cart-list td figure {
    width: 60px;
    height: 60px;
    overflow: hidden;
    display: inline-block;
    float: left;
    margin: 0;
    margin-right: 15px;
    border: 1px solid #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    overflow: hidden;
}

.table.cart-list td figure img {
    width: 60px;
    height: auto;
}

@media (max-width: 767px) {
    .table.cart-list td figure {
        float: none;
    }
}

.table.cart-list td .dropdown-options {
    border: none;
    margin: 0;
}

.table.cart-list td .dropdown-options>a {
    padding: 0;
    display: inline-block;
    color: {{ $general_color }};
}

.table.cart-list td .dropdown-options>a:after {
    display: none;
}

.table.cart-list td .dropdown-options>a:hover {
    color: #111;
}

.table.cart-list td .dropdown-menu {
    background-color: #fff;
    min-width: 250px;
    margin-left: -105px !important;
    padding: 15px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    font-size: 13px;
    font-size: 0.8125rem;
}

@media (max-width: 991px) {
    .table.cart-list td .dropdown-menu {
        margin-left: -205px;
    }
}

.table.cart-list td .dropdown-menu label {
    font-weight: 400;
}

.table.cart-list td .dropdown-menu a {
    color: #fff;
}

.table.cart-list td .dropdown-menu a.btn_1 {
    display: block;
    padding: 7px 15px;
}

.table.cart-list td .dropdown-menu h5 {
    border-bottom: 1px solid #ededed;
    padding-bottom: 10px;
    margin-bottom: 10px !important;
    font-size: 14px;
    font-size: 0.875rem;
}

.table.cart-list td .dropdown-menu ul {
    list-style: none;
    padding: 0;
}

.table.cart-list td .dropdown-menu ul li label small {
    float: right;
    padding-top: 3px;
}

.box_booking .dropdown {
    border: 1px dotted #c8c8c8;
    padding: 0;
    margin-bottom: 5px;
}

.box_booking .dropdown a {
    padding: 15px 15px 12px 15px;
    line-height: 1;
    color: #444;
    font-weight: 500;
    display: block;
    position: relative;
}

.box_booking .dropdown a:after {
    font-family: food;
    font-size: 21px;
    font-size: 1.3125rem;
    font-weight: 700;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    position: absolute;
    right: 10px;
    top: 10px;
}

.box_booking .dropdown.show a {
    color: #333;
}

.box_booking .dropdown.show a:after {
    transform: rotateY(360deg);
    color: #333;
}

.box_booking .dropdown .dropdown-menu {
    font-size: 14px;
    font-size: 0.875rem;
    background: #f8f8f8;
    border: 1px solid #ddd;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    padding: 15px;
    width: 100.5%;
    left: -1px !important;
    right: -1px !important;
    margin: 5px 0 0 0;
}

.box_booking .dropdown .dropdown-menu h4 {
    text-align: center;
    font-size: 14px;
    font-size: 0.875rem;
    text-transform: uppercase;
}

.dropdown.time a:after {
    content: "\0057";
}

.dropdown.time {
    margin-bottom: 25px;
}

.dropdown.day a:after {
    font-family: ElegantIcons;
    content: "\e023";
    font-weight: 300;
}

.radio_select ul {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    text-align: center;
}

.radio_select ul li {
    display: inline-block;
    margin: 0;
    width: 23.5%;
}

.radio_select.chose_day ul li {
    width: 43.5%;
}

.radio_select input[type="radio"] {
    opacity: 0;
    position: fixed;
    width: 0;
}

.radio_select label {
    display: inline-block;
    text-align: center;
    width: 100%;
    padding: 8px;
    border: 1px dotted #c8c8c8;
    background-color: #fff;
    font-size: 16px;
    font-size: 1rem;
}

.radio_select label em {
    display: block;
    color: red;
    font-style: normal;
    font-size: 11px;
    font-size: 0.6875rem;
    font-weight: 500;
}

.radio_select label:hover {
    background-color: #dfd;
}

.radio_select input[type="radio"]:focus+label {
    border: 1px solid transparent;
    background-color: {{ $general_color }};
    color: #fff;
}

.radio_select input[type="radio"]:focus+label em {
    color: #ff6;
}

.radio_select input[type="radio"]:checked+label {
    border: 1px solid transparent;
    background-color: {{ $general_color }};
    color: #fff;
}

.radio_select input[type="radio"]:checked+label em {
    color: #ff6;
}

#message {
    position: fixed;
    bottom: 15px;
    left: 15px;
    background-color: {{ $general_color }};
    color: #fff;
    padding: 12px 12px 10px 40px;
    font-weight: 500;
    line-height: 1;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.3);
    display: none;
}

#message:before {
    font-family: ElegantIcons;
    content: "\52";
    font-size: 21px;
    position: absolute;
    left: 10px;
    top: 7px;
    line-height: 1;
}

.box_booking_2 {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    margin-bottom: 25px;
    background-color: #fff;
    overflow: hidden;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}

.box_booking_2 .head {
    text-align: center;
    padding: 23px 20px 18px 20px;
    background-color: {{ $general_color }};
    color: #fff;
}

.box_booking_2 .head h3 {
    font-size: 24px;
    font-size: 1.5rem;
    margin: 0;
    color: #fff;
}

.box_booking_2 .head small {
    display: block;
}

.box_booking_2 .head a {
    color: #fff;
    text-decoration: underline;
}

.box_booking_2 .main {
    padding: 25px;
}

.box_booking_2 .main ul {
    list-style: none;
    padding: 0;
}

.box_booking_2 .main ul li {
    font-weight: 500;
    margin-bottom: 5px;
}

.box_booking_2 .main ul li span {
    float: right;
    font-weight: 400;
}

.box_booking_2 .main ul li.total {
    font-size: 16px;
    font-size: 1rem;
    font-weight: 600;
    color: #e74747;
    text-transform: uppercase;
}

.box_booking_2 .main ul li.total span {
    font-weight: 600;
}

.payment_select {
    background-color: #f0f0f0;
    padding: 15px 15px 12px 15px;
    margin-bottom: 20px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
}

.payment_select label {
    font-size: 16px;
    display: inline-block;
    margin-bottom: 0;
    line-height: 1.4;
}

.payment_select i {
    float: right;
    font-size: 24px;
}

.payment_select#paypal {
    background: #f0f0f0 url(../img/paypal_2.svg) center right no-repeat;
}

#confirm {
    text-align: center;
    padding: 60px 15px;
}

@-webkit-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }

    100% {
        stroke-dashoffset: 0;
    }
}

@-ms-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }

    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes checkmark {
    0% {
        stroke-dashoffset: 50px;
    }

    100% {
        stroke-dashoffset: 0;
    }
}

@-webkit-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }

    100% {
        stroke-dashoffset: 480px;
    }
}

@-ms-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }

    100% {
        stroke-dashoffset: 480px;
    }
}

@keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px;
    }

    100% {
        stroke-dashoffset: 480px;
    }
}

.inlinesvg .svg svg {
    display: inline;
}

.icon--order-success svg path {
    -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
    animation: checkmark 0.25s ease-in-out 0.7s backwards;
}

.icon--order-success svg circle {
    -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
    animation: checkmark-circle 0.6s ease-in-out backwards;
}

.item-img {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.item-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.magnific-gallery .item {
    margin-bottom: 25px;
    border-radius: 5px;
    overflow: hidden;
}

.item-img .content {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.65);
    z-index: 1;
    display: flex;
    justify-content: center;
    flex-direction: column;
    height: 100%;
    width: 100%;
    transition: 0.2s ease-in-out;
    opacity: 0;
}

.item-img .content a {
    opacity: 0;
    transition: 0.2s ease;
    font-size: 24px;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.comment_info a:last-child {
    background: #f33;
    color: #fff;
    font-size: 12px;
    padding: 2px 15px 4px 15px;
    border-radius: 30px;
    font-weight: 600;
}

.item:hover .content {
    opacity: 1;
}

.item:hover .content a {
    opacity: 1;
    color: #fff;
}

.grid ul {
    margin: 0 0 25px 0;
    padding: 0;
    width: 100%;
    text-align: center;
}

.grid ul li {
    display: inline-block;
    margin: 0;
    padding: 0;
    margin: -3px;
    min-height: 100%;
    width: 25%;
    list-style: none;
}

@media (max-width: 991px) {
    .grid ul li {
        width: 50%;
    }
}

@media (max-width: 767px) {
    .grid ul li {
        width: 100%;
        min-height: 100%;
        float: none;
    }
}

.box_contacts {
    background-color: #fff;
    padding: 30px 15px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 14px;
    font-size: 0.875rem;
    -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
}

.box_contacts h2 {
    font-weight: 400;
    margin: 10px 0 10px 0;
    font-size: 21px;
    font-size: 1.3125rem;
}

.box_contacts i {
    font-size: 46px;
    font-size: 2.875rem;
    color: {{ $general_color }};
}

.box_contacts a {
    color: #444;
    display: block;
}

.box_contacts a:hover {
    color: #111;
}

.box_contacts small {
    display: block;
    color: #777;
    font-size: 14px;
    font-size: 0.875rem;
}

.box_contacts small a {
    color: #777;
}

.box_contacts small a:hover {
    color: #111;
}

iframe.map_contact {
    border: 0;
    width: 100%;
    height: 372px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    overflow: hidden;
}

.write_review h1 {
    font-size: 28px;
    font-size: 1.75rem;
}

.rating {
    display: inline-block;
    position: relative;
}

.rating-input {
    display: none;
}

.rating-input:checked~.rating-star,
.rating:hover .rating-star:hover,
.rating:hover .rating-star:hover~.rating-star {
    background-position: 0 0;
}

.rating-star,
.rating:hover .rating-star {
    cursor: pointer;
    float: right;
    display: block;
    margin-right: 3px;
    width: 37px;
    height: 37px;
    background: url(../img/stars.svg) 0 -38px;
}

.margin_120_100 {
    padding-top: 120px;
    padding-bottom: 100px;
}

@media (max-width: 767px) {
    .margin_120_100 {
        padding-top: 60px;
        padding-bottom: 40px;
    }
}

.margin_80_60 {
    padding-top: 80px;
    padding-bottom: 60px;
}

.margin_60_40 {
    padding-top: 60px;
    padding-bottom: 40px;
}

.margin_60_30 {
    padding-top: 60px;
    padding-bottom: 30px;
}

.margin_30_40 {
    padding-top: 30px;
    padding-bottom: 40px;
}

.margin_detail {
    padding-top: 30px;
    padding-bottom: 15px;
}

@media (max-width: 991px) {
    .margin_detail {
        padding-top: 20px;
        padding-bottom: 15px;
    }
}

.add_bottom_10 {
    padding-bottom: 10px;
}

.add_bottom_15 {
    padding-bottom: 15px;
}

.add_bottom_25 {
    padding-bottom: 25px;
}

.add_bottom_45 {
    padding-bottom: 45px;
}

.add_top_30 {
    margin-top: 30px;
}

.add_top_60 {
    margin-top: 60px;
}

.mb_5 {
    margin-bottom: 5px;
}

@media (max-width: 767px) {
    .margin_mobile {
        padding-top: 30px;
        padding-bottom: 10px;
    }
}

.bg_gray {
    background-color: #f4f4f4;
}

.bg_gray.pattern {
    background: #f4f4f4 url(../img/pattern_2.svg) repeat;
}

.pattern_2 {
    background: url(../img/reserve_bg.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: scroll;
    /* margin-top: 120px; */
}

.pattern_calendar {
    margin-top: 120px;
}

.pattern_calendar .main_title {
    padding-top: 60px;
}

@media (max-width: 767px) {
    .pattern_2 {
        background: 0 0;
    }
}

.ribbon {
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 1;
    padding: 7px 8px 4px 8px;
    font-weight: 600;
    min-width: 40px;
    z-index: 9;
}

.ribbon.off {
    background-color: #f30;
}

.ribbon.new {
    background-color: #93c;
}

.ribbon.hot {
    background-color: #0c0;
}

.opacity-mask {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
}

.layer {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    min-width: 100%;
    min-height: 100%;
    z-index: 999;
    background-color: rgba(0, 0, 0, 0.35);
    -moz-transition: all 0.1s ease;
    -o-transition: all 0.1s ease;
    -webkit-transition: all 0.1s ease;
    -ms-transition: all 0.1s ease;
    transition: all 0.1s ease;
    opacity: 0;
    visibility: hidden;
}

.layer-is-visible {
    opacity: 1;
    visibility: visible;
}

.container_check {
    display: block;
    position: relative;
    padding-left: 30px;
    line-height: 1.7;
    margin-bottom: 8px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.container_check input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.container_check input:checked~.checkmark {
    background-color: #000;
    border: 1px solid transparent;
}

.container_check .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #d2d8dd;
    background-color: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.container_check .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    left: 7px;
    top: 3px;
    width: 5px;
    height: 10px;
    border: solid #fff;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.container_check input:checked~.checkmark:after {
    display: block;
}

.container_radio {
    display: block;
    position: relative;
    padding-left: 30px;
    line-height: 1.7;
    margin-bottom: 8px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.container_radio input {
    position: absolute;
    opacity: 0;
}

.container_radio input:checked~.checkmark:after {
    opacity: 1;
}

.container_radio .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #d2d8dd;
    background-color: #fff;
    border-radius: 50%;
}

.container_radio .checkmark:after {
    display: block;
    content: "";
    position: absolute;
    opacity: 0;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    top: 3px;
    left: 3px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: {{ $general_color }};
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.form-control {
    padding: 10px;
    height: 40px;
    font-size: 14px;
    font-size: 0.875rem;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #d2d8dd;
}

.form-control:focus {
    border-color: #ccc;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.05);
}

.form-control.text_area {
    height: 150px !important;
}

.form-group {
    position: relative;
    border-radius: 3px;
    overflow: hidden;
}

.loader {
    position: absolute;
    right: 10px;
    top: 10px;
    color: #fff;
    font-size: 18px;
    font-size: 1.125rem;
    -webkit-animation: rotation 2s infinite linear;
    animation: rotation 2s infinite linear;
}

.loader.newsletter {
    right: -22px;
}

.loader.register {
    color: #444;
}

.error_message {
    font-weight: 500;
    color: #e3464c;
}

.nav-link {
    display: block;
    padding: 0 15px;
    height: 30px;
    font-size: 15px;
    font-size: 0.9375rem;
    color: #444;
}

.nav-link:focus,
.nav-link:hover {
    text-decoration: none;
}

.nav-link.disabled {
    color: #6c757d;
}

.nav-tabs {
    border: none;
    border-bottom: 2px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -2px;
}

.nav-tabs .nav-link {
    border: none;
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    border-bottom: 2px solid {{ $general_color }};
    color: {{ $general_color }};
    background-color: transparent;
}

.pagination_fg {
    text-align: center;
    margin-top: 15px;
}

.pagination_fg a {
    color: #333;
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color 0.3s;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    margin: 0 2px;
}

.pagination_fg a:hover {
    background-color: #f0f0f0;
}

.pagination_fg a.active {
    background-color: {{ $general_color }};
    color: #fff;
}

#toTop {
    position: fixed;
    right: 15px;
    opacity: 0;
    visibility: hidden;
    bottom: 15px;
    z-index: 999;
    transition: 0.35s;
    transform: scale(0.7);
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.6);
    opacity: 1;
    transition: all 0.3s;
    border-radius: 50%;
    text-align: center;
    font-size: 32px;
    font-size: 2rem;
    color: #fff;
    cursor: pointer;
}

#toTop.visible {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

#toTop:after {
    font-family: ElegantIcons;
    content: "\32";
    position: relative;
    display: block;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

#toTop:hover {
    background-color: {{ $general_color }};
}

footer {
    background-color: #282C35 !important;
    padding: 60px 0 10px 0;
    color: rgba(255, 255, 255, 0.6);
    position: relative;
}

footer hr {
    border-color: rgba(255, 255, 255, 0.15);
    margin: 30px 0 30px 0;
}

footer h3 {
    font-size: 18px;
    font-size: 1.125rem;
    margin-bottom: 15px;
    color: #fff;
}

footer ul {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
}

footer a {
    color: rgba(255, 255, 255, 0.6);
    display: block;
}

footer a:hover {
    color: #fff;
}

footer .footer_wp {
    position: relative;
    padding-left: 40px;
}

@media (max-width: 1199px) {
    footer .footer_wp {
        padding-bottom: 15px;
    }
}

@media (max-width: 767px) {
    footer .footer_wp {
        padding-left: 0;
        padding-bottom: 10px;
    }
}

footer .footer_wp i {
    position: absolute;
    left: 0;
    top: 0;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    background: {{ $general_color }};
    color: #fff;
    font-size: 15px;
    border-radius: 50%;
}

@media (max-width: 767px) {
    footer .footer_wp i {
        display: none;
    }
}

footer .copy {
    padding-top: 5px;
}

@-webkit-keyframes rotation {
    from {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
    }

    to {
        -webkit-transform: rotate(359deg);
        -moz-transform: rotate(359deg);
        -ms-transform: rotate(359deg);
        -o-transform: rotate(359deg);
        transform: rotate(359deg);
    }
}

@media (max-width: 767px) {
    #newsletter {
        margin-top: 20px;
    }
}

#newsletter h6 {
    margin: 15px 0 15px 0;
}

#newsletter input[type="email"] {
    height: 40px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    padding-left: 15px;
    background-color: {{ $general_color }};
    color: #fff;
    border-radius: 40px;
    /* border: 2px solid {{ $general_color }} !important; */
    border: none;
}

#newsletter input[type="email"]::placeholder {
    color: #fff;
}

#newsletter input[type="email"]:focus {
    border: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}

#newsletter button[type="submit"] {
    position: absolute;
    color: {{ $general_color }};
    font-size: 1.5rem;
    top: 0;
    right: 0;
    border: 0;
    opacity: 1;
    width: 50px;
    height: 40px;
    line-height: 40px;
    cursor: pointer;
    background-color: #fff;
    transition: all 0.3s ease-in-out;
    outline: 0;
    border-radius: 0px 40px 40px 0px;
}

#newsletter button[type="submit"]:hover {
    -webkit-filter: brightness(115%);
    filter: brightness(115%);
}

#message-newsletter #success_page {
    color: #fff;
    opacity: 0.6;
}

.follow_us ul {
    margin: 0 0 25px 0;
    padding: 0;
    list-style: none;
    margin-top: 15px;
}

@media (max-width: 767px) {
    .follow_us ul {
        float: none;
    }
}

.follow_us ul li {
    display: inline-block;
    margin: 0 5px;
}

.follow_us ul li a {
    width: 30px;
    height: 30px;
    display: block;
    background: #fff;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    color: {{ $general_color }};
}

.follow_us ul li a img {
    width: 30px;
    height: 30px;
}

.follow_us ul li a:hover {
    -webkit-transform: translateY(-5px);
    -moz-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    -o-transform: translateY(-5px);
    transform: translateY(-5px);
}

.search-overlay-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    background-color: rgba(0, 0, 0, 0.9);
    -webkit-transition: transform 0.3s ease 0s, opacity 0.3s ease 0s,
        visibility 0s ease 0.3s;
    -moz-transition: transform 0.3s ease 0s, opacity 0.3s ease 0s,
        visibility 0s ease 0.3s;
    -ms-transition: transform 0.3s ease 0s, opacity 0.3s ease 0s,
        visibility 0s ease 0.3s;
    -o-transition: transform 0.3s ease 0s, opacity 0.3s ease 0s,
        visibility 0s ease 0.3s;
    transition: transform 0.3s ease 0s, opacity 0.3s ease 0s,
        visibility 0s ease 0.3s;
    opacity: 0;
    visibility: hidden;
    z-index: 999999;
    text-align: center;
}

.search-overlay-menu.open {
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.3s ease 0s, transform 0.3s ease 0s;
    -moz-transition: opacity 0.3s ease 0s, transform 0.3s ease 0s;
    -ms-transition: opacity 0.3s ease 0s, transform 0.3s ease 0s;
    -o-transition: opacity 0.3s ease 0s, transform 0.3s ease 0s;
    transition: opacity 0.3s ease 0s, transform 0.3s ease 0s;
}

.search-overlay-menu.open form {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.search-overlay-menu form {
    height: 70px;
    position: absolute;
    top: 50%;
    left: 0;
    margin: -35px auto 0;
    width: 60%;
    left: 20%;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    -moz-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}

.search-overlay-menu form button {
    background: 0 0;
    border: medium none;
    font-size: 32px;
    font-size: 2rem;
    position: absolute;
    right: 0;
    top: 15px;
    color: #c6c6c6;
    outline: 0;
    cursor: pointer;
}

@media (max-width: 767px) {
    .search-overlay-menu form button {
        font-size: 24px;
        font-size: 1.5rem;
        top: 8px;
    }
}

@media (max-width: 767px) {
    .search-overlay-menu form {
        width: 80%;
        left: 10%;
        height: 50px;
        margin: -25px auto 0;
    }
}

.search-overlay-menu input[type="search"] {
    height: 100%;
    width: 100%;
    color: #fff;
    background: 0 0;
    border-top: 0 solid transparent;
    border-bottom: 2px solid #909090 !important;
    border-left: 0 solid transparent;
    border-right: 0px solid transparent;
    font-size: 42px;
    font-size: 2.625rem;
    font-weight: 300;
    outline: 0;
    padding: 10px 0 10px 0;
}

@media (max-width: 767px) {
    .search-overlay-menu input[type="search"] {
        font-size: 24px;
        font-size: 1.5rem;
    }
}

.closebt {
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    position: absolute;
    font-size: 32px;
    font-size: 2rem;
    top: 15px;
    right: 25px;
    color: #fff;
    opacity: 0.6;
    width: 30px;
    height: 30px;
    display: block;
}

.closebt:hover {
    opacity: 1;
}

.cookie_popup {
    display: none !important;
}

.popup_wrapper {
    background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 100%;
    z-index: 9999999;
    opacity: 0;
}

.popup_wrapper .popup_content {
    background-color: #fff;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    width: 500px;
    -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.35);
    -moz-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.35);
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.35);
}

@media (max-width: 767px) {
    .popup_wrapper .popup_content {
        width: 300px;
    }
}

.popup_wrapper .popup_content .content {
    height: 100%;
    position: relative;
}

.popup_wrapper .popup_content.newsletter_c {
    width: 800px;
}

@media (max-width: 767px) {
    .popup_wrapper .popup_content.newsletter_c {
        width: 300px;
    }
}

.popup_wrapper .popup_content.newsletter_c figure {
    position: absolute;
    overflow: hidden;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0;
}

.popup_wrapper .popup_content.newsletter_c figure img {
    height: 100%;
    width: auto;
}

.popup_wrapper .popup_content.newsletter_c .content {
    height: 100%;
    padding: 120px 60px;
    text-align: center;
    display: flex;
    align-items: center;
    background-color: #fff;
}

@media (max-width: 767px) {
    .popup_wrapper .popup_content.newsletter_c .content {
        padding: 30px 30px 15px 30px;
        height: auto;
    }
}

.popup_wrapper .popup_content.newsletter_c .content .wrapper {
    width: 100%;
}

.popup_wrapper .popup_content.newsletter_c .content .wrapper h3 {
    font-size: 21px;
    font-size: 1.3125rem;
    margin-top: 25px;
}

.popup_wrapper .popup_close {
    width: 25px;
    height: 25px;
    position: absolute;
    top: 10px;
    right: 15px;
    z-index: 9999;
    font-size: 28px;
    font-size: 1.75rem;
    color: #555;
    cursor: pointer;
}

.popup_wrapper .popup_close:hover {
    color: #222;
}

#cookie-bar {
    background: rgba(0, 0, 0, 0.8);
    height: auto;
    line-height: 24px;
    color: #eee;
    text-align: center;
    padding: 15px 0;
    font-weight: 400;
    font-size: 13px;
    font-size: 0.8125rem;
    font-weight: 500;
}

#cookie-bar p {
    margin: 0;
    padding: 0;
}

#cookie-bar a {
    color: #fff;
    display: inline-block;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    text-decoration: none;
    padding: 2px 10px;
    margin-left: 8px;
}

@media (max-width: 767px) {
    #cookie-bar a {
        display: block;
        max-width: 150px;
        margin: auto;
        margin-bottom: 5px;
    }
}

#cookie-bar .cb-enable {
    background: #b3bac4;
}

#cookie-bar .cb-enable:hover {
    background: #fff;
    color: #262626;
}

#cookie-bar .cb-disable {
    background: #900;
}

#cookie-bar .cb-disable:hover {
    background: #b00;
}

#cookie-bar .cb-policy {
    background: {{ $general_color }};
}

#cookie-bar .cb-policy:hover {
    background: #fff;
    color: #262626;
}

#cookie-bar.fixed {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999999;
}

#cookie-bar.fixed.bottom {
    bottom: 0;
    top: auto;
}

@media (max-width: 767px) {
    #cookie-bar {
        padding: 5px 0;
    }
}

#success_page {
    padding: 30px 0;
    text-align: center;
}

#success_page h5 {
    margin-top: 15px;
}

#success_page h5 span {
    display: block;
    margin-top: 7px;
    font-size: 16px;
}

.box_how {
    padding: 30px 25px;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 10px;
    background: {{ $general_color }};
}

.box_how h3 {
    font-size: 22px;
    color: #fff;
}

.box_how p {
    margin-bottom: 0;
    color: #fff;
}

.box_how figure {
    width: 100px;
    height: 100px;
    padding: 20px;
    overflow: hidden;
    border-radius: 50%;
    background: #fff;
}

.box_how figure img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

@media (max-width: 991px) {
    .box_how {
        text-align: left;
        margin-bottom: 15px;
    }
}

@media (max-width: 991px) {
    .box_how figure {
        float: right;
        margin: 0 0 0 15px;
    }
}

@media (max-width: 991px) {
    .box_how figure img {
        width: 80px;
        height: auto;
    }
}

#staff {
    margin: 40px 0 0 0;
}

@media (max-width: 767px) {
    #staff {
        margin-bottom: 30px;
    }
}

#staff .item {
    background-color: #fff;
    margin-bottom: 15px;
    border-radius: 5px;
    overflow: hidden;
}

#staff .item .title {
    position: absolute;
    bottom: 0;
    left: 0;
    text-align: center;
    width: 100%;
    z-index: 9;
}

#staff .item .title h4 {
    background-color: #262626;
    display: inline-block;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    -ms-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
    color: #fff;
    padding: 10px 15px;
    margin: 0;
    font-size: 1rem;
    opacity: 0;
}

#staff .item .title h4 em {
    display: block;
    font-size: 13px;
    font-size: 0.8125rem;
    font-weight: 300;
    margin-top: 3px;
}

#staff .item a {
    position: relative;
    display: block;
}

#staff .owl-item {
    opacity: 0.5;
    transform: scale(0.85);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translateZ(0) scale(0.85, 0.85);
    transition: all 0.3s ease-in-out 0s;
    overflow: hidden;
}

#staff .owl-item.active.center {
    opacity: 1;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translateZ(0) scale(1, 1);
    transform: scale(1);
}

#staff .owl-item.active.center .item .title h4,
#staff .owl-item.active.center .item .views {
    opacity: 1;
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
}

.animated.flip {
    -webkit-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip;
}

@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
        opacity: 0;
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        opacity: 1;
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    }

    100% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}

@keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
        opacity: 0;
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        opacity: 1;
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    }

    100% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX;
}

.call_section.testimonials {
    text-align: center;
}

.call_section.testimonials h3 {
    color: #fff;
    font-size: 2rem;
    margin-bottom: 70px;
}

.box_overlay {
    background-color: {{ $general_color }};
    padding: 45px 45px 45px 225px;
    color: #fff;
    position: relative;
    margin-bottom: 20px;
}

@media (max-width: 767px) {
    .box_overlay {
        padding: 30px;
    }
}

.pic {
    position: absolute;
    left: 45px;
    top: 45px;
    text-align: left;
}

@media (max-width: 767px) {
    .pic {
        position: static;
        margin-bottom: 20px;
        width: 100%;
        text-align: center;
    }
}

.pic h4 {
    position: absolute;
    left: 95px;
    top: 18px;
    color: #fff;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 500;
}

@media (max-width: 767px) {
    .pic h4 {
        position: static;
    }
}

.pic h4 small {
    display: block;
    color: #fff;
    margin-top: 3px;
}

.pic figure {
    width: 80px;
    height: 80px;
    overflow: hidden;
    border-radius: 5px;
}

@media (max-width: 767px) {
    .pic figure {
        margin: 0 auto 10px;
    }
}

.pic figure img {
    width: 80px;
    height: auto;
}

.comment {
    border-left: 1px solid rgba(255, 255, 255, 0.3);
    padding-left: 30px;
    font-size: 21px;
    font-size: 1.3125rem;
    font-family: Lora, serif;
    line-height: 1.3;
    text-align: left;
}

@media (max-width: 767px) {
    .comment {
        text-align: center;
        border: 0;
        padding: 0;
    }
}

#error_page {
    width: 100%;
    height: 680px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #665b46 url(../img/pattern.svg) repeat;
    color: #fff;
}

@media (max-width: 767px) {
    #error_page img {
        width: 250px;
        height: auto;
    }
}

#error_page p {
    font-size: 21px;
    font-size: 1.3125rem;
}

@media (max-width: 767px) {
    #error_page p {
        font-size: 18px;
        font-size: 1.125rem;
    }
}

@media (max-width: 767px) {
    #error_page {
        padding: 60px 0 0 0;
        height: 500px;
    }
}

.search_bar {
    position: relative;
    margin-bottom: 60px;
}

.search_bar input[type="text"] {
    border: 0;
    height: 50px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    padding-left: 15px;
    -webkit-box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.15);
}

.search_bar input[type="submit"] {
    position: absolute;
    right: -1px;
    color: #fff;
    font-weight: 600;
    top: 0;
    border: 0;
    padding: 0 25px;
    height: 50px;
    cursor: pointer;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    -ms-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
    background-color: #262626;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.search_bar input[type="submit"]:focus {
    outline: 0;
}

.search_bar input[type="submit"]:hover {
    -webkit-filter: brightness(115%);
    filter: brightness(115%);
}

.total_drop a {
    border: none !important;
    background: {{ $general_color }} !important;
    color: #fff !important;
}

.total_drop a:hover {
    color: #fff !important;
}

.sticky .total_drop a {
    color: #fff;
}

.swal2-top-end {
    z-index: 9999999 !important;
    background-color: red;
}
</style>
