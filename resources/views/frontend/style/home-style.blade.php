
<style>
    .custom-teste {
        background: {{ $general_color }} !important;
    }

    .owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: 0 0 !important;
    border: 2px solid {{ $general_color }};
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}


.owl-theme .owl-dots .owl-dot span::before {
    content: '';
    background-color: {{ $general_color }} !important;
    display: block;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-top: -4px;
    margin-left: -4px;
    opacity: 0;
    visibility: hidden;
    transform: scale(0);
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

</style>

