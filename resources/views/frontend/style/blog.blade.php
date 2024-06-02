<style>
    .breadcrumbs.blog {
    padding-top: 10px
}

article.blog {
    margin-bottom: 30px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    overflow: hidden
}

article.blog figure {
    height: 260px;
    overflow: hidden;
    position: relative;
    margin-bottom: 0
}

@media (max-width: 991px) {
    article.blog figure {
        height: 210px
    }
}

@media (max-width: 767px) {
    article.blog figure {
        height: 220px
    }
}

article.blog figure .preview {
    position: absolute;
    top: 50%;
    left: 0;
    margin-top: -12px;
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
    text-align: center;
    opacity: 0;
    visibility: hidden;
    width: 100%;
    -webkit-transition: all 0.6s;
    transition: all 0.6s;
    z-index: 2
}

article.blog figure .preview span {
    background-color: #fcfcfc;
    background-color: rgba(255, 255, 255, 0.8);
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    border-radius: 20px;
    display: inline-block;
    color: #222;
    font-size: 0.75rem;
    padding: 5px 10px
}

article.blog figure:hover .preview {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0)
}

article.blog figure img {
    -webkit-transform: translate(-50%, -50%) scale(1);
    -moz-transform: translate(-50%, -50%) scale(1);
    -ms-transform: translate(-50%, -50%) scale(1);
    -o-transform: translate(-50%, -50%) scale(1);
    transform: translate(-50%, -50%) scale(1);
    -moz-transition: 0.3s;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    width: auto;
    height: 400px;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden
}

article.blog figure img:hover {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
    -moz-transform: translate(-50%, -50%) scale(1.1);
    -ms-transform: translate(-50%, -50%) scale(1.1);
    -o-transform: translate(-50%, -50%) scale(1.1);
    transform: translate(-50%, -50%) scale(1.1)
}

@media (max-width: 991px) {
    article.blog figure img {
        height: inherit;
        max-width: 100%
    }
}

article.blog .post_info {
    padding: 20px 30px 30px 30px;
    position: relative;
    box-sizing: border-box
}

article.blog .post_info small {
    font-weight: 500;
    color: #999;
    font-size: 13px;
    font-size: 0.8125rem
}

article.blog .post_info h2 {
    font-size: 21px;
    font-size: 1.3125rem
}

article.blog .post_info h2 a {
    color: #333
}

article.blog .post_info h2 a:hover {
    color: {{ $general_color }}
}

article.blog .post_info ul {
    margin: 0 -30px 0 -30px;
    padding: 20px 30px 0 30px;
    width: 100%;
    box-sizing: content-box;
    border-top: 1px solid #ededed
}

article.blog .post_info ul li {
    display: inline-block;
    position: relative;
    padding: 12px 0 0 50px;
    font-weight: 500;
    font-size: 12px;
    font-size: 0.75rem;
    color: #999
}

article.blog .post_info ul li .thumb {
    width: 40px;
    height: 40px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    display: inline-block;
    position: absolute;
    left: 0;
    top: 0
}

article.blog .post_info ul li .thumb img {
    width: 40px;
    height: auto;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

article.blog .post_info ul li:last-child {
    float: right;
    padding-left: 0;
    line-height: 1
}

article.blog .post_info ul li:last-child i {
    font-size: 14px;
    font-size: 0.875rem;
    margin-right: 5px;
    position: relative;
    top: 3px
}

@media (max-width: 991px) {
    article.blog .post_info ul {
        position: static;
        width: auto
    }
}

.alignleft {
    float: left;
    margin: 0 15px 10px 0;
    width: 80px;
    height: 80px;
    overflow: hidden;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    position: relative
}

.alignleft img {
    width: auto;
    height: 80px;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.comments-list {
    padding: 0;
    list-style: none
}

.comments-list h3 {
    font-size: 14px;
    font-size: 0.875rem;
    padding: 0 0 0;
    margin: 0;
    text-transform: capitalize
}

.comments-list h3 a {
    color: #555
}

.comments-list h3 a:hover {
    color: {{ $general_color }}
}

.comments-list li {
    margin-bottom: 10px;
    display: table;
    width: 100%
}

.comments-list li:last-child {
    margin-bottom: 0
}

.comments-list small {
    color: #555
}

.widget-title {
    padding: 15px 0;
    margin-bottom: 20px;
    /* border-bottom: 1px solid #ededed */
}

.widget-title h4 {
    margin: 0;
    font-weight: 500;
    line-height: 1;
    font-size: 1rem;
    background: {{ $general_color }};
    padding: 8px 10px 10px 10px;
    color: #fff;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
}

.widget-title.first {
    padding-top: 0
}

.widget {
    position: relative;
    display: block;
    margin-bottom: 15px
}

.widget ul.cats {
    list-style: none;
    padding: 0
}

.widget ul.cats li {
    padding: 0 0 5px 2px;
    position: relative
}

.widget ul.cats a {
    color: #555
}

.widget ul.cats a:hover {
    color: {{ $general_color }}
}

.widget ul.cats a span {
    position: absolute;
    right: 0;
    width: 25px;
    height: 25px;
    background: {{ $general_color }};
    color: #fff;
    text-align: center;
    line-height: 25px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
}

.tags a {
    background-color: #f0f0f0;
    padding: 3px 10px;
    font-size: 13px;
    margin: 0 0 4px;
    letter-spacing: 0.4px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    display: inline-block;
    color: #333
}

.tags a:hover {
    background-color: {{ $general_color }};
    color: #fff
}

.search_blog .form-group {
    position: relative
}

.search_blog .form-group button[type="submit"] {
    outline: none;
    color: #444;
    font-size: 21px;
    font-size: 1.3125rem;
    background: none;
    border: 0;
    position: absolute;
    top: 5px;
    right: 0
}

.search_blog .form-group button[type="submit"]:hover {
    color: {{ $general_color }}
}

.singlepost {
    background-color: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    padding: 30px 30px 1px 30px;
    margin-bottom: 25px;
    -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1)
}

.singlepost figure {
    margin: -30px -30px 30px -30px
}

.singlepost h1 {
    font-size: 1.75rem;
    font-weight: 600;
    margin-bottom: 15px;
}

@media (max-width: 767px) {
    .singlepost h1 {
        font-size: 21px;
        font-size: 1.3125rem
    }
}

.singlepost p {
    line-height: 1.8
}

.postmeta {
    padding-bottom: 10px
}

.postmeta ul {
    padding: 0;
    margin: 0;
    margin-bottom: 10px
}

.postmeta ul li {
    display: inline-block;
    margin: 0 15px 5px 0;
    color: #777
}

.postmeta ul li i {
    margin-right: 3px
}

.postmeta ul li a {
    color: #777
}

.postmeta ul li a:hover {
    color: {{ $general_color }}
}

.postmeta ul li a i {
    margin-right: 3px
}

/* .dropcaps p:first-child::first-letter {
    color: #fff;
    background-color: {{ $general_color }};
    float: left;
    font-size: 64px;
    line-height: 1;
    margin: 10px 15px 0 0 !important;
    padding: 12px
} */

#comments {
    padding: 10px 0 0px 0;
    margin-bottom: 30px
}

#comments ul {
    padding: 0;
    margin: 0;
    list-style: none
}

#comments ul li {
    padding: 25px 0 0 0;
    list-style: none
}

#comments .replied-to {
    margin-left: 35px
}

@media (max-width: 767px) {
    #comments .replied-to {
        margin-left: 20px
    }
}

.avatar {
    float: left;
    margin-right: 25px;
    width: 100px;
    height: 100px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 5px;
    position: relative;
}

@media (max-width: 767px) {
    .avatar {
        float: none;
        margin: 0 0 5px 0
    }
}

.avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
}

.comment_right {
    display: table;
    background-color: #fff1f1;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    padding: 20px 20px 0 20px;
    position: relative;
}

.comment_right:after,
.comment_right:before {
    right: 95%;
    top: 50px;
    border: solid transparent;
    content: " ";
    height: 5px;
    width: 100px;
    background: #fff1f1;
    position: absolute;
    pointer-events: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    z-index: -1;
}

.comment_right:after {
    background-color: transparent;
    border-right-color: #f7f7f7;
    border-width: 15px;
    margin-top: -15px
}

.comment_info {
    padding-bottom: 7px
}

.comment_info span {
    padding: 0 10px
}
</style>
