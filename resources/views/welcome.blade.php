@extends('layouts.master')
@section('content')
<div class="container paddding">
<div class="row mx-0">
<div class="col-md-8 animate-box"
data-animate-effect="fadeInLeft">
<div>
<div class="fh5co_heading
fh5co_heading_border_bottom py-2 mb-4">News</div>
</div>
<div class="row pb-4">
<div class="col-md-5">
<div class="fh5co_hover_news_img">
<div class="fh5co_news_img"><img
src="{{asset('template/images/nathan-mcbride-229637.jpg')}}"
alt=""/></div>
<div></div>
</div>
</div>
<div class="col-md-7 animate-box">
<a href="single.html" class="fh5co_magna
py-2"> Magna aliqua ut enim ad minim veniam quis
nostrud quis xercitation ullamco. </a>
Thomson Smith - April 18,2016
<div class="fh5co_consectetur"> Amet
consectetur adipisicing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua. Ut enim
ad minim veniam, quis nostrud exercitation.
</div>
</div>
</div>
</div>
<div class="col-md-3 animate-box"data-animate-effect="fadeInRight">
    <div>
    <div class="fh5co_heading
    fh5co_heading_border_bottom py-2 mb-4">Kategory</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
    <a href="#" class="fh5co_tagg">Business</a>
    <a href="#" class="fh5co_tagg">Technology</a>
    <a href="#" class="fh5co_tagg">Sport</a>
    <a href="#" class="fh5co_tagg">Art</a>
    <a href="#" class="fh5co_tagg">Lifestyle</a>
    </div>
    </div>
    </div>
    <div class="row mx-0 animate-box"
    data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
    <a href="#" class="btn_mange_pagging"><i class="fa
    fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
    <a href="#" class="btn_pagging">1</a>
    <a href="#" class="btn_pagging">2</a>
    <a href="#" class="btn_pagging">3</a>
    <a href="#" class="btn_pagging">...</a>
    <a href="#" class="btn_mange_pagging">Next <i
    class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
    </div>
    </div>
    </div>
    @endsection