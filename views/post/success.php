<?php
use kartik\icons\Icon;

$this->params['breadcrumbs'][] = ['label' => 'Success Registration'];
?>
<div id="success">
    <div class="col-md-8 col-md-offset-2">
        <h2><p>Вы успешно зарегистрировались.</p></h2>
    </div>
</div>
<div class="container content">
    <div class="col-md-6 col-md-offset-3">
        <div class="testimonials">
            <div class="active item">
                <blockquote><p>Hey everybody! I'm glad to see you on my blog. There will be lots of information about me, about web and other news in IT-field.</p></blockquote>
                <div class="carousel-info">
                    <img alt="" src="/images/cv/cv-photo-2.jpg" class="pull-left">
                    <div class="pull-left">
                        <span class="testimonials-name">Denis Yevduschenko</span>
                        <span class="testimonials-post">Web software developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #success p{
        text-align: center;
    }

    /* Content */
    .content {
        padding-top: 100px;
    }

    /* Testimonials */
    .testimonials blockquote {
        background: #f8f8f8 none repeat scroll 0 0;
        border: medium none;
        color: #666;
        display: block;
        font-size: 14px;
        line-height: 20px;
        padding: 15px;
        position: relative;
    }
    .testimonials blockquote::before {
        width: 0;
        height: 0;
        right: 0;
        bottom: 0;
        content: " ";
        display: block;
        position: absolute;
        border-bottom: 20px solid #fff;
        border-right: 0 solid transparent;
        border-left: 15px solid transparent;
        border-left-style: inset; /*FF fixes*/
        border-bottom-style: inset; /*FF fixes*/
    }
    .testimonials blockquote::after {
        width: 0;
        height: 0;
        right: 0;
        bottom: 0;
        content: " ";
        display: block;
        position: absolute;
        border-style: solid;
        border-width: 20px 20px 0 0;
        border-color: #e63f0c transparent transparent transparent;
    }
    .testimonials .carousel-info img {
        border: 1px solid #f5f5f5;
        border-radius: 150px !important;
        height: 75px;
        padding: 3px;
        width: 75px;
    }
    .testimonials .carousel-info {
        overflow: hidden;
    }
    .testimonials .carousel-info img {
        margin-right: 15px;
    }
    .testimonials .carousel-info span {
        display: block;
    }
    .testimonials span.testimonials-name {
        color: #e6400c;
        font-size: 16px;
        font-weight: 300;
        margin: 23px 0 7px;
    }
    .testimonials span.testimonials-post {
        color: #656565;
        font-size: 12px;
    }
</style>