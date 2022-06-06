@extends('layout.master')
@section('content')
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <ul class="breadcrumb-list pb-2">
                <li><a href="#">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><a href="#">Blog</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>{{$post->title}}</li>
            </ul>
            <h2 class="section-title">{{$post->title}}</h2>
            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                    <img src="{{asset('storage/'.$post->avatar)}}" data-src="images/img1.jpg" alt="avatar" class="rounded-full lazy">
                </a>
                <div class="media-body">
                    <h5 class="fs-14 fw-medium">Par <a href="#">{{$post->name}}</a></h5>
                    <small class="meta d-block lh-20">
                        <span class="mr-2">{{ DATE_FORMAT($post->created_at, 'Y-m-d')}}</span>
                        <span class="mr-2 fs-15">.</span>
                        <a href="#comments" class="page-scroll text-gray"><i class="la la-comment mr-1"></i>3</a>
                    </small>
                </div>
            </div>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->
<!-- ================================
         START BLOG AREA
================================= -->
<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-item">
                    <div class="card-body">
                        {!! $post->body !!}
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="pb-3 fs-20">3 Comments</h4>
                        <ul class="comments-list pt-3" id="comments">
                            <li class="mb-3">
                                <div class="comment-avatar">
                                    <img class="lazy" src="images/img-loading.png" data-src="images/img1.jpg" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black">Majed Badawi</span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray">8 hours ago</span>
                                    <p class="comment-text pt-1 pb-2 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cumque nihil impedit quo minus.</p>
                                    <a href="#" class="comment-reply text-color hover-underline" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i>Reply</a>
                                </div>
                            </li>
                            <li class="mb-3 comment-reply">
                                <div class="comment-avatar">
                                    <img class="lazy" src="images/img-loading.png" data-src="images/img2.jpg" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black">Kevin Martin</span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray">8 hours ago</span>
                                    <p class="comment-text pt-1 pb-2 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cumque nihil impedit quo minus.</p>
                                    <a href="#" class="comment-reply text-color hover-underline" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i>Reply</a>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="comment-avatar">
                                    <img class="lazy" src="images/img-loading.png" data-src="images/img3.jpg" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black">Aaron Aiken</span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray">8 hours ago</span>
                                    <p class="comment-text pt-1 pb-2 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cumque nihil impedit quo minus.</p>
                                    <a href="#" class="comment-reply text-color hover-underline" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i>Reply</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <form method="post" class="card card-item">
                    <div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h4 class="fs-20">Leave a Reply</h4>
                            <p class="fs-14">Your email address will not be published. Required fields are marked *</p>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-13 text-black lh-20">Name</label>
                            <input class="form-control form--control" type="text" name="text" placeholder="Your name">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-13 text-black lh-20">Email</label>
                            <input class="form-control form--control" type="email" name="email" placeholder="Your email">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12">
                            <label class="fs-13 text-black lh-20">Message</label>
                            <textarea class="form-control form--control" name="message" rows="5" placeholder="Your comment here..."></textarea>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12 mb-0">
                            <div class="custom-control custom-checkbox fs-14 mb-3">
                                <input type="checkbox" class="custom-control-input" id="saveAll">
                                <label class="custom-control-label custom--control-label" for="saveAll">Save my name and email in this browser for the next time I comment.</label>
                            </div>
                            <button class="btn theme-btn" type="submit">Post Comment </button>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </form>
            </div><!-- end col-lg-8 -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->
@endsection
