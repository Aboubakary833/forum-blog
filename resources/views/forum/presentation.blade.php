@extends('forum.layouts.main')
@section('content')
<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>

@include('forum.components.header2')


<section class="hero-area bg-dark overflow-hidden section-padding">
    <span class="stroke-shape stroke-shape-1 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-2 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-3 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-4 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-5 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-6 stroke-shape-white"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mr-auto">
                <div class="hero-content">
                    <h2 class="section-title fs-50 pb-3 text-white lh-65">Votre forum Q&A , Votre Communauté !!!</h2>
                    <p class="lh-26 text-white">Posez vos différentes questions et obtenez rapidement des solutions adéquates</p>
                    <div class="hero-btn-box pt-30px">
                        <a href="#for-developers" class="btn theme-btn mr-2 page-scroll">Poser votre Question <i class="la la-angle-down icon ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="generic-img-box generic-img-box-layout-2">
        <img class="lazy" src="{{asset('forum/images/img1.jpg')}}"  alt="image">
        <img class="lazy" src="{{asset('forum/images/img2.jpg')}}"  alt="image">
        <img class="lazy" src="{{asset('forum/images/img3.jpg')}}"  alt="image">
        <img class="lazy" src="{{asset('forum/images/img4.jpg')}}"  alt="image">
        <img class="lazy" src="{{asset('forum/images/img5.jpg')}}"  alt="image">
        <img class="lazy" src="{{asset('forum/images/img6.jpg')}}"  alt="image">
    </div>
</section>

<section class="get-started-area section--padding pattern-bg" id="for-developers">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title pb-3">Conçu pour les developpeurs , par des developpeurs</h2>
            <p class="section-desc w-50 mx-auto">Ce forum est conçu pour tous developpeurs,Programeurs desirant exposer certaines inquiétudes afin de trouver des solutions adéquates et rapidement mais aussi  partager son expériences avec les autres.
            </p>
        </div>
    </div><!-- end container -->
</section>

<section class="get-started-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 responsive-column-half">
                <div class="media media-card align-items-center">
                    <div class="icon-element icon-element-lg mr-4 shadow-sm rounded-rounded border border-gray">
                        <svg aria-hidden="true" class="svg-icon-color-1" width="45" height="45" viewBox="0 0 48 48"><path opacity=".2" d="M29.22 38.1a3.4 3.4 0 014.81-4.82l8.81 8.81a3.4 3.4 0 01-4.81 4.81l-8.81-8.8z"></path><path d="M18.5 5a1 1 0 100 2c.63 0 1.24.05 1.84.15a1 1 0 00.32-1.98A13.6 13.6 0 0018.5 5zm7.02 1.97a1 1 0 10-1.04 1.7 11.5 11.5 0 015.44 8.45 1 1 0 001.98-.24 13.5 13.5 0 00-6.38-9.91zM18.5 0a18.5 18.5 0 1010.76 33.55c.16.57.46 1.12.9 1.57L40 44.94A3.5 3.5 0 1044.94 40l-9.82-9.82c-.45-.45-1-.75-1.57-.9A18.5 18.5 0 0018.5 0zM2 18.5a16.5 16.5 0 1133 0 16.5 16.5 0 01-33 0zm29.58 15.2a1.5 1.5 0 112.12-2.12l9.83 9.83a1.5 1.5 0 11-2.12 2.12l-9.83-9.83z"></path></svg>
                    </div>
                    <div class="media-body">
                        <p class="pb-3 fs-18">Trouver les meilleurs reponses a tes questions , <br> Aide également les autres </p>
                        <a href="home-2.html" class="btn theme-btn theme-btn-white">Poser une question <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
                <div class="media media-card align-items-center">
                    <div class="icon-element icon-element-lg mr-4 shadow-sm rounded-rounded border border-gray">
                        <svg aria-hidden="true" class="svg-icon-color-2" width="45" height="45" viewBox="0 0 48 48"><path opacity=".2" d="M12 22a2 2 0 00-2 2v19a4 4 0 004 4h24a4 4 0 004-4V26a4 4 0 00-4-4H12zm6 7a5 5 0 117.67 4.23l.05.35c.15.84.36 1.8.61 2.86A2.06 2.06 0 0124.35 39h-2.7a2.06 2.06 0 01-1.98-2.56c.29-1.2.52-2.3.66-3.2l-.19-.14A5 5 0 0118 29z"></path><path d="M23 24a5 5 0 00-2.86 9.1l.2.13c-.15.91-.38 2-.67 3.21A2.06 2.06 0 0021.65 39h2.7c1.32 0 2.3-1.26 1.98-2.56a46.74 46.74 0 01-.6-2.86l-.06-.35A5 5 0 0023 24zm0 2a3 3 0 011.76 5.43l-.16.11a2 2 0 00-.91 2c.16.98.4 2.12.7 3.37.01.05-.02.09-.04.09h-2.7c-.02 0-.05-.04-.04-.09.3-1.25.54-2.4.7-3.36a2 2 0 00-.78-1.92l-.13-.09A3 3 0 0123 26zM12 12.44V18H9a3 3 0 00-3 3v21a3 3 0 003 3h28a3 3 0 003-3V21a3 3 0 00-3-3h-3v-5.56C34 6.2 29.36 1 23 1S12 6.19 12 12.44zM23 3c5.14 0 9 4.18 9 9.44V18H14v-5.56C14 7.18 17.86 3 23 3zM9 20h28a1 1 0 011 1v21a1 1 0 01-1 1H9a1 1 0 01-1-1V21a1 1 0 011-1z"></path></svg>
                    </div>
                    <div class="media-body">
                        <p class="pb-3 fs-18">Trouver une assistance<br>Et de façon spontanée</p>
                        <a href="free-demo.html" class="btn theme-btn theme-btn-white">Proposer des solutions <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<hr class="border-top-gray">

<section class="info-area section--padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title pb-3">Language,Framework ,Librairy ... </h2>
            <p class="section-desc">Des exemples de techno .</p>
        </div>
        <div class="row pt-60px align-items-center">
            <div class="col responsive-column-half card card-item case-card text-center">
                <div class="card-body">
                    <svg aria-hidden="true" width="96" height="96" viewBox="0 0 96 96"><path d="M78.2 14.36a1.73 1.73 0 011.27-1.85 37.5 37.5 0 017.66-1.5c1.09-.09 1.98.8 1.9 1.89-.21 2.6-.79 5.19-1.56 7.8a1.71 1.71 0 01-1.66 1.28c-4.27-.16-7.08-3.56-7.62-7.62zM34.55 77.77l3.55-2.84-10-11-3.36 2.69c-.89.7-1 2.02-.23 2.86l7.34 8.08c.7.77 1.88.86 2.7.21zM70.1 37.93a7 7 0 100-14 7 7 0 000 14zm-7 7a7 7 0 11-14 0 7 7 0 0114 0z" opacity=".2"></path><path d="M75.5 27a7 7 0 11-14 0 7 7 0 0114 0zm-7 4a4 4 0 100-8 4 4 0 000 8zm-14 17a7 7 0 100-14 7 7 0 000 14zm4-7a4 4 0 11-8 0 4 4 0 018 0zM27.21 70.41l2.93 3.23a3.47 3.47 0 004.74.37l2.82-2.25c.95.34 2.03.25 2.95-.33.8-.51 1.95-1.26 3.35-2.2v8.29c0 3.02 3.6 4.6 5.82 2.56l8.25-7.56a3.5 3.5 0 001.03-1.77l3.84-16.33c1.7-1.53 3.4-3.13 5.08-4.8 11.26-11.2 22.04-25.83 22.92-41.56a3.32 3.32 0 00-3.5-3.5c-15.71.86-30.38 11.47-41.59 22.54a161.7 161.7 0 00-5.19 5.4 1.5 1.5 0 00-.54.05l-18.35 4.83c-.74.2-1.4.63-1.87 1.25l-5.18 6.8A3.47 3.47 0 0017.48 51H26c-.83 1.21-1.5 2.2-1.95 2.92a3.42 3.42 0 00.38 4.2l.4.43-2.06 2.06a3.47 3.47 0 00-.11 4.79l2.53 2.79-.75.75a1.5 1.5 0 002.12 2.12l.65-.65zM87.95 7.9c-.17 2.9-.7 5.78-1.53 8.61a9.21 9.21 0 01-5.8-2.27 7.13 7.13 0 01-2.6-4.88 39.23 39.23 0 019.59-1.8c.2 0 .35.15.34.34zM47.96 29.24c7.87-7.77 17.2-15.02 27.15-18.87a10.32 10.32 0 003.54 6.13 12.33 12.33 0 006.8 2.95c-3.8 10.29-11.39 19.93-19.54 28.03A169.1 169.1 0 0139.04 68.9c-.15.1-.37.08-.53-.09l-4.68-5.02 10.73-10.73a1.5 1.5 0 00-2.12-2.12L31.78 61.6l-5.16-5.53a.42.42 0 01-.06-.52 167.03 167.03 0 0121.4-26.31zm-18.3 34.48l-2.35 2.35-2.43-2.69a.47.47 0 01.01-.65l1.99-1.99 2.78 2.98zm-.33 4.57l2.37-2.37 3.64 3.89L33 71.67a.47.47 0 01-.65-.05l-3.03-3.33zM47 67.15c3.38-2.4 7.6-5.56 12.06-9.34l-2.88 12.25a.47.47 0 01-.14.24l-8.25 7.56a.47.47 0 01-.79-.34V67.15zm-9.8-30.73A177.28 177.28 0 0028.11 48H17.48a.47.47 0 01-.37-.76l5.17-6.8a.47.47 0 01.26-.16l14.67-3.86zM14.06 81.44a1.5 1.5 0 010 2.12l-7 7a1.5 1.5 0 01-2.12-2.12l7-7a1.5 1.5 0 012.12 0zm9-6.88a1.5 1.5 0 00-2.12-2.12l-5 5a1.5 1.5 0 002.12 2.12l5-5zm-7-4.12a1.5 1.5 0 010 2.12l-7 7a1.5 1.5 0 01-2.12-2.12l7-7a1.5 1.5 0 012.12 0zm9 12.12a1.5 1.5 0 00-2.12-2.12l-5 5a1.5 1.5 0 002.12 2.12l5-5z"></path></svg>
                    <h5 class="card-title pt-4 pb-2">DevOps engineers</h5>
                    <p class="card-text">This is just a simple text made for this unique and awesome template.</p>
                </div><!-- end card-body -->
            </div><!-- end col -->
            <div class="col responsive-column-half card card-item case-card text-center">
                <div class="card-body">
                    <svg aria-hidden="true" width="96" height="96" viewBox="0 0 96 96"><path d="M86 26.5a6.5 6.5 0 100-13 6.5 6.5 0 000 13zm-52 25a6.5 6.5 0 100-13 6.5 6.5 0 000 13zm-15 40a6.5 6.5 0 100-13 6.5 6.5 0 000 13zM72.5 60a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" opacity=".2"></path><path d="M75 17a8 8 0 116.49 7.86L68.04 50.79A7.98 7.98 0 0163 65a8 8 0 01-7.85-9.55l-17-9.84a8 8 0 01-8.56 4.27L20.21 75.2a8 8 0 11-2.8-1.08l9.38-25.32a8 8 0 1112.19-6.18l17.3 10.02a8 8 0 019.12-3.27l13.29-25.63A8 8 0 0175 17zm8-5a5 5 0 100 10 5 5 0 000-10zM31 37a5 5 0 100 10 5 5 0 000-10zM16 77a5 5 0 100 10 5 5 0 000-10zm42-20a5 5 0 1010 0 5 5 0 00-10 0z"></path></svg>
                    <h5 class="card-title pt-4 pb-2">Data scientists</h5>
                    <p class="card-text">This is just a simple text made for this unique and awesome template.</p>
                </div><!-- end card-body -->
            </div><!-- end col -->
            <div class="col responsive-column-half card card-item case-card text-center case-card-is-active">
                <div class="card-body">
                    <svg aria-hidden="true" width="96" height="96" viewBox="0 0 96 96"><path d="M33.3 60.21a1 1 0 01-.04-1.46l41.1-40.1a1 1 0 01.33-.22l10.83-4.17a1 1 0 011.31 1.25l-3.26 9.78a1 1 0 01-.22.37L43.17 67.8a1 1 0 01-1.4.05l-8.48-7.64zm-9.19 19.02a1 1 0 00.38.98l2.12 1.61a1 1 0 01.11 1.49l-9.1 9.48a3 3 0 01-4.29.04l-5.1-5.1a3 3 0 01.11-4.35l12.5-11.28a1 1 0 011.33-.01l2.38 2.08a1 1 0 01.33.94l-.77 4.12z" opacity=".2"></path><path d="M91.4 5.56a1.5 1.5 0 00-1.87-1.98l-15 5c-.24.07-.44.2-.61.38l-9.2 9.6.26-1.85a1.5 1.5 0 00-.86-1.58l-11-5a1.5 1.5 0 00-1.93.64l-4.51 8.12c-2.16-.21-4.27-.2-6.35 0l-4.52-8.12a1.5 1.5 0 00-1.93-.64l-11 5a1.5 1.5 0 00-.84 1.73l1.77 7.06c-.9.76-1.6 1.62-2.22 2.46-.32.44-.63.9-.93 1.33v.01a245.75 245.75 0 01-.71 1.01l-7.98-2.65a1.5 1.5 0 00-1.85.84l-5 12a1.5 1.5 0 00.77 1.95l8 3.56c-.2 2.27-.2 4.93 0 7.14l-8 3.56a1.5 1.5 0 00-.77 1.95l5 12a1.5 1.5 0 001.85.84l2.58-.86-9.57 8.84a1.5 1.5 0 00-.04 2.16l9 9a1.5 1.5 0 002.12 0l7.77-7.76 10.05 4.57c.73.33 1.6.02 1.96-.7l3.53-7.06c2.19.22 4.34.2 6.45-.02l5.48 7.31c.4.54 1.13.74 1.76.5l10-4c.62-.26 1-.9.93-1.57l-.9-8.13a21 21 0 003.99-4.01l7.06 1.77a1.5 1.5 0 001.73-.84l5-11a1.5 1.5 0 00-.5-1.84L74.1 51.8c.24-2.24.22-4.44 0-6.6l6.28-4.48c.57-.4.78-1.15.52-1.8l-3.59-8.64a1.5 1.5 0 00-.58-.7l8.35-8.53c.14-.14.25-.3.32-.5l6-15zM20.01 68.1c.1-.09.18-.19.25-.3 1 1.46 2.1 2.94 3.55 4.24l-1.67 6.7-.65.64-5.94-5.94a1.5 1.5 0 00-.86-.43l5.32-4.9zM13 74.58c.02.36.17.7.44.98l5.94 5.94L15 85.88l-6.84-6.84L13 74.58zm12.34 3.74l1.62-6.46a1.5 1.5 0 00-.53-1.54c-1.7-1.33-2.8-2.93-4.13-4.86l-.57-.82a1.5 1.5 0 00-1.7-.56l-7.68 2.56-3.9-9.36 7.66-3.4c.6-.28.96-.91.88-1.57a37.6 37.6 0 010-8.61 1.5 1.5 0 00-.88-1.57l-7.66-3.4 3.9-9.37 7.68 2.56c.6.2 1.26 0 1.65-.5.45-.57.86-1.15 1.24-1.7l.22-.32.87-1.24a10.1 10.1 0 012.35-2.43c.5-.36.75-.99.6-1.6l-1.7-6.78 8.6-3.91 4.33 7.79c.3.53.89.84 1.5.76a29.4 29.4 0 017.61 0 1.5 1.5 0 001.51-.76l4.33-7.8 8.72 3.97-.7 4.87-6.23 6.5a14.06 14.06 0 00-4.86-2.61A21.77 21.77 0 0043.5 25C31.49 25 23 34.69 23 46.5c0 11.76 8.53 22.1 20.6 22.1C55.47 68.6 66 58.44 66 46.5a10.2 10.2 0 00-1.14-4.65l-.02-.02a4.72 4.72 0 00-.03-.06l9.84-10.06 3 7.26-6.02 4.3A1.5 1.5 0 0071 44.7c.32 2.5.35 5.04 0 7.61-.07.55.17 1.1.62 1.42l6 4.28-3.98 8.74-6.79-1.7a1.5 1.5 0 00-1.54.53c-1.66 2.12-2.65 3.29-4.68 4.7-.45.31-.7.85-.63 1.4l.87 7.86L53 82.69l-5.31-7.08a1.5 1.5 0 00-1.39-.59c-2.5.32-5.04.35-7.61 0a1.5 1.5 0 00-1.54.82l-3.36 6.7-8.32-3.78a1.5 1.5 0 00-.14-.43zm37.38-53.34a1.5 1.5 0 001.26-1.27l.01-.06 10.54-11 7.36 7.36-43.73 44.7a17.18 17.18 0 01-8-5.76l32.56-33.97zM49.1 29c1.62.55 2.93 1.23 3.74 1.94L28.47 56.38A20.59 20.59 0 0126 46.5C26 36.14 33.34 28 43.5 28c1.58 0 3.68.35 5.61 1zm-5.52 36.6c-.67 0-1.34-.04-1.99-.11l20.96-21.43.02.04v.02c.21.59.42 1.42.42 2.38 0 10.23-9.12 19.1-19.4 19.1zm39.86-48.27l-6.42-6.42L87.4 7.45l-3.96 9.88z"></path></svg>
                    <h5 class="card-title pt-4 pb-2">Software engineers</h5>
                    <p class="card-text">This is just a simple text made for this unique and awesome template.</p>
                </div><!-- end card-body -->
            </div><!-- end col -->
            <div class="col responsive-column-half card card-item case-card text-center">
                <div class="card-body">
                    <svg aria-hidden="true" width="96" height="96" viewBox="0 0 96 96"><path d="M67.37 12.9A38.67 38.67 0 0050.8 9a38.02 38.02 0 00-16.47 3.9c-.38.3-.44.74-.19 1.2l4.74 7.49c.24.35.79.61 1.29.6.1-.01.21-.04.32-.07 1.01-.29 6.76-1.88 10.4-1.88 3.7 0 9.6 1.65 10.45 1.9.07.02.14.04.22.04.44.05 1-.15 1.25-.6l4.73-7.49c.26-.44.2-.9-.18-1.18zM19 77.5a7.84 7.84 0 007.79 7.88 3.98 3.98 0 003.93-3.9v-18.5A4 4 0 0026.8 59a7.84 7.84 0 00-7.8 7.89v10.6zm57.94 6.88c4.3 0 7.78-3.54 7.78-7.89V65.9a7.84 7.84 0 00-7.78-7.9A4 4 0 0073 61.99v18.5a3.98 3.98 0 003.94 3.89zM49 92h6a3 3 0 000-6h-6a3 3 0 000 6z" opacity=".2"></path><path d="M54.5 12a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM50 10.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM42.5 12a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM11 43.69a37.1 37.1 0 0119.3-32.54l1.99 2.93C20.7 19.81 13.95 30.6 13.95 44.57a1.5 1.5 0 003 0c0-13 6.27-22.8 17-27.96l.05-.02 1.66 2.44c.38.57 1.1.8 1.74.57a34.63 34.63 0 0111.47-1.97c4.03 0 7.94.63 11.45 1.96.66.25 1.4 0 1.79-.58l1.33-2.06c10.35 5.35 16.59 14.92 16.59 27.62a1.5 1.5 0 003 0c0-13.74-6.78-24.26-17.95-30.14l1.99-3.06A37.8 37.8 0 0175 17.41a36.77 36.77 0 0111 26.28V64h-3v-1.23c0-5.26-4.7-9.27-10.13-9.27-3.06 0-5.87 2.31-5.87 5.43v18.23c0 3.05 2.83 5.34 5.87 5.34.2 0 .4 0 .59-.02-.07.39-.21.77-.4 1.06-.28.43-.5.46-.56.46H54.74a4.5 4.5 0 00-4.24-3h-6a4.5 4.5 0 000 9h6a4.5 4.5 0 004.24-3H72.5a3.7 3.7 0 003.07-1.83c.6-.92.93-2.08.93-3.17v-.03a1.78 1.78 0 000-.09c3.74-1.32 6.5-4.62 6.5-8.65V73h4.33c2.46 0 4.17-2.19 4.17-4.5 0-1.74-.97-3.41-2.5-4.13V43.69c0-11.12-4.5-21.1-11.88-28.41A40.39 40.39 0 0048.5 3.5C26.1 3.5 8 21.45 8 43.69v20.48a4.5 4.5 0 00-3 4.33C5 70.81 6.7 73 9.17 73H13v.23c0 5.26 4.7 9.27 10.13 9.27 3.04 0 5.87-2.3 5.87-5.34V58.93c0-3.12-2.8-5.43-5.87-5.43C17.7 53.5 13 57.51 13 62.77V64h-2V43.69zM37.5 16.4L33 9.8a37.72 37.72 0 0115.5-3.3 37.5 37.5 0 0115.89 3.49l-4.16 6.39a37.63 37.63 0 00-22.73.03zm14.25 68.26a1.5 1.5 0 000 1.66c-.27.4-.73.67-1.25.67h-6a1.5 1.5 0 010-3h6c.52 0 .98.27 1.25.67zM23.13 56.5c1.7 0 2.87 1.26 2.87 2.43v18.23c0 1.06-1.14 2.34-2.87 2.34-4.08 0-7.13-2.96-7.13-6.27V62.77c0-3.31 3.05-6.27 7.13-6.27zM9.17 67H13v3H9.17C8.69 70 8 69.5 8 68.5S8.69 67 9.17 67zM70 58.93c0-1.17 1.16-2.43 2.87-2.43 4.08 0 7.13 2.96 7.13 6.27v10.46c0 3.31-3.05 6.27-7.13 6.27-1.73 0-2.87-1.28-2.87-2.34V58.93zM83.5 70v-3h3.83c.48 0 1.17.5 1.17 1.5s-.69 1.5-1.17 1.5H83.5z"></path></svg>
                    <h5 class="card-title pt-4 pb-2">Support teams</h5>
                    <p class="card-text">This is just a simple text made for this unique and awesome template.</p>
                </div><!-- end card-body -->
            </div><!-- end col -->
            <div class="col responsive-column-half card card-item case-card text-center">
                <div class="card-body">
                    <svg aria-hidden="true" width="96" height="96" viewBox="0 0 96 96"><path opacity=".2" d="M36 47.5a9.48 9.48 0 01-3.67 7.5h5.76a1 1 0 01.7.29l1.39 1.36A9.5 9.5 0 0157.87 54h7.7a9.5 9.5 0 1113.86 0H83a4 4 0 014 4v23a2 2 0 01-2 2H64v10a1 1 0 01-1 1H36a1 1 0 01-1-1V83H16a1 1 0 01-1-1V59a4 4 0 014-4h1.67a9.48 9.48 0 015.83-17 9.5 9.5 0 019.5 9.5z"></path><path d="M13 44.5A11 11 0 1130.98 53h.52a1.5 1.5 0 010 3H15.54C13.5 56 12 57.54 12 59.21V78h4.38a1.5 1.5 0 01-.38-1V63a1.5 1.5 0 013 0v14c0 .38-.14.73-.38 1h9.06a1.5 1.5 0 010 3H10.5A1.5 1.5 0 019 79.5V59.21c0-3.5 3.03-6.21 6.54-6.21h1.48A10.98 10.98 0 0113 44.5zm11-8a8 8 0 100 16 8 8 0 000-16zm23 8A11 11 0 0040.02 64h-1.33C35.12 64 32 66.73 32 70.3v20.2c0 .83.67 1.5 1.5 1.5h27c.83 0 1.5-.67 1.5-1.5V70.3c0-3.57-3.12-6.3-6.7-6.3h-1.32A11 11 0 0047 44.5zm-8 11a8 8 0 1116 0 8 8 0 01-16 0zm-4 14.8c0-1.7 1.55-3.3 3.7-3.3h16.6c2.15 0 3.7 1.6 3.7 3.3V89h-4V75a1.5 1.5 0 00-3 0v14H42V75a1.5 1.5 0 00-3 0v14h-4V70.3zm35-36.8A11 11 0 0176.98 53h1.7A6.28 6.28 0 0185 59.21V79.5c0 .83-.67 1.5-1.5 1.5H66.32a1.5 1.5 0 010-3h8.06a1.5 1.5 0 01-.38-1V63a1.5 1.5 0 013 0v14c0 .38-.14.73-.38 1H82V59.21A3.28 3.28 0 0078.68 56H62.5a1.5 1.5 0 010-3h.52A11 11 0 0170 33.5zm8 11a8 8 0 10-16 0 8 8 0 0016 0z"></path><path d="M12.5 11a1.5 1.5 0 000 3h13a1.5 1.5 0 000-3h-13zM11 17.5c0-.83.67-1.5 1.5-1.5h9a1.5 1.5 0 010 3h-9a1.5 1.5 0 01-1.5-1.5zm-5-10C6 6.67 6.67 6 7.5 6h25c.83 0 1.5.67 1.5 1.5v15c0 .83-.67 1.5-1.5 1.5H29v6a1.5 1.5 0 01-2.4 1.2L17 24H7.5A1.5 1.5 0 016 22.5v-15zM9 9v12h8.5c.32 0 .64.1.9.3L26 27v-6h5V9H9zm60.5 3a1.5 1.5 0 000 3h13a1.5 1.5 0 000-3h-13zM68 18.5c0-.83.67-1.5 1.5-1.5h8a1.5 1.5 0 010 3h-8a1.5 1.5 0 01-1.5-1.5zM87.5 7c.83 0 1.5.67 1.5 1.5v16c0 .83-.67 1.5-1.5 1.5H76.42l-7.15 4.29A1.5 1.5 0 0167 29v-3h-2.5a1.5 1.5 0 01-1.5-1.5v-16c0-.83.67-1.5 1.5-1.5h23zM86 23V10H66v13h4v3.35l5.23-3.14c.23-.14.5-.21.77-.21h10zm-42.5 4a1.5 1.5 0 000 3h9a1.5 1.5 0 000-3h-9zM59 22.5c0-.83-.67-1.5-1.5-1.5h-19c-.83 0-1.5.67-1.5 1.5v12c0 .83.67 1.5 1.5 1.5H41v4.5a1.5 1.5 0 002.56 1.06L49.12 36h8.38c.83 0 1.5-.67 1.5-1.5v-12zM40 24h16v9h-8.12L44 36.88V33h-4v-9z" opacity=".35"></path></svg>
                    <h5 class="card-title pt-4 pb-2">Engineering leaders</h5>
                    <p class="card-text">This is just a simple text made for this unique and awesome template.</p>
                </div><!-- end card-body -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END INFO AREA
================================= -->

<hr class="border-top-gray">

<!-- ================================
         START PACKAGE AREA
================================= -->
<section class="package-area section--padding bg-vertical-gradient-gray">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title pb-3">Unlock siloed knowledge with <br> Disilab for Teams</h2>
            <p class="section-desc w-50 mx-auto pb-4">This is just a simple text made for this unique and awesome template,
                you can replace it with any text.
            </p>
            <div class="toggle-switch d-inline-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Discount available if billed annually">
                <span class="fs-14 mr-1">Monthly</span>
                <input type="checkbox" class="toggle-input"/>
                <span class="fs-14 ml-1">Yearly</span>
            </div>
        </div>
        <div class="row pt-60px">
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item">
                    <div class="card-body">
                        <h5 class="bg-gray fs-20 py-2 px-4 rounded-rounded d-inline-block">Basic</h5>
                        <p class="card-text pt-3 pb-5">Private knowledge base for teams</p>
                        <div class="card-price border-bottom border-bottom-gray mb-4 pb-4">
                            <span class="price-month fs-35 fw-bold text-black">$7 USD</span>
                            <span class="price-year fs-35 fw-bold text-black d-none">$6 USD</span>
                            <p class="card-text pt-1 fs-15">per teammate / month</p>
                        </div>
                        <ul class="generic-list-item package-list pb-4">
                            <li><i class="la la-check text-success"></i> Free 30 day trial</li>
                            <li><i class="la la-check text-success"></i> ChatOps integrations - Slack & Microsoft Teams</li>
                            <li><i class="la la-check text-success"></i> Your own private space hosted on disilab.com</li>
                            <li><i class="la la-check text-success"></i> Fully searchable archive</li>
                        </ul>
                        <a href="#" class="btn theme-btn theme-btn-outline w-100">Start your free trial <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h5 class="bg-gray fs-20 py-2 px-4 rounded-rounded d-inline-block">Business</h5>
                            <span class="badge badge-success py-1 px-2 fs-13">Most used</span>
                        </div>
                        <p class="card-text pt-3 pb-5">Private knowledge base with SSO and premium features</p>
                        <div class="card-price border-bottom border-bottom-gray mb-4 pb-4">
                            <span class="price-month fs-35 fw-bold text-black">$14 USD</span>
                            <span class="price-year fs-35 fw-bold text-black d-none">$12 USD</span>
                            <p class="card-text pt-1 fs-15">per teammate / month</p>
                        </div>
                        <ul class="generic-list-item package-list pb-4">
                            <li><i class="la la-check text-success"></i> Long-form knowledge with Articles</li>
                            <li><i class="la la-check text-success"></i> Additional integrations — ChatOps, Jira, GitHub & Okta</li>
                            <li><i class="la la-check text-success"></i> Group content together into Collections</li>
                            <li><i class="la la-check text-success"></i> Single sign-on (SSO) with SAML</li>
                            <li><i class="la la-check text-success"></i> Reporting and analytics</li>
                            <li><i class="la la-check text-success"></i> Priority customer support</li>
                            <li><i class="la la-check text-success"></i> 99.5% uptime</li>
                        </ul>
                        <a href="#" class="btn theme-btn w-100">Get started <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item">
                    <div class="card-body">
                        <h5 class="bg-gray fs-20 py-2 px-4 rounded-rounded d-inline-block">Enterprise</h5>
                        <p class="card-text pt-3 pb-5">Standalone knowledge base with enhanced security and flexible hosting</p>
                        <div class="card-price border-bottom border-bottom-gray mb-4 pb-4">
                            <span class="fs-35 fw-bold text-black">Custom pricing</span>
                            <p class="card-text pt-1 fs-15">Let’s talk about what you need</p>
                        </div>
                        <ul class="generic-list-item package-list pb-4">
                            <li><i class="la la-check text-success"></i> Premium features of Business plus...</li>
                            <li><i class="la la-check text-success"></i> ChatOps, Jira, GitHub & Okta integrations</li>
                            <li><i class="la la-check text-success"></i> Unlimited Teams within your instance</li>
                            <li><i class="la la-check text-success"></i> Single sign-on with AD or SAML</li>
                            <li><i class="la la-check text-success"></i> Flexible hosting options — cloud or on-premises</li>
                            <li><i class="la la-check text-success"></i> Robust read and write API</li>
                            <li><i class="la la-check text-success"></i> Your own customer success and community building representative</li>
                            <li><i class="la la-check text-success"></i> 99.5% uptime SLA and priority support</li>
                        </ul>
                        <a href="#" class="btn theme-btn theme-btn-outline w-100">Request a demo <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END PACKAGE AREA
================================= -->

<!-- ================================
         START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section--padding">
    <div class="container">
        <div class="testimonial-carousel owl-carousel owl-theme owl-action-styled">
            <div class="carousel-card text-center">
                <p class="section-desc w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa deserunt dolor ea iure iusto magnam minima, recusandae sequi sunt? Corporis delectus deserunt dicta exercitationem ipsum, iusto magnam minus molestias numquam perspiciatis porro provident quae rem. Placeat saepe, sed. Vitae?</p>
                <div class="divider bg-transparent my-4"><span class="mx-auto"></span></div>
                <h3 class="pb-1 fs-17">Director of Product Management</h3>
                <span>Microsoft</span>
            </div><!-- end carousel-card -->
            <div class="carousel-card text-center">
                <p class="section-desc w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa deserunt dolor ea iure iusto magnam minima, recusandae sequi sunt? Corporis delectus deserunt dicta exercitationem ipsum, iusto magnam minus molestias numquam perspiciatis porro provident quae rem. Placeat saepe, sed. Vitae?</p>
                <div class="divider bg-transparent my-4"><span class="mx-auto"></span></div>
                <h3 class="pb-1 fs-17">Director of Engineering</h3>
                <span>Elastic Cloud</span>
            </div><!-- end carousel-card -->
        </div><!-- end owl-carousel -->
    </div><!-- end container -->
</section>
<!-- ================================
         END TESTIMONIAL AREA
================================= -->

<hr class="border-top-gray">

<!-- ================================
         START CTA AREA
================================= -->
<section class="get-started-area section--padding pattern-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="info-box text-center">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm mx-auto">
                        <svg class="svg-icon-color-1" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 480 480" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M240,0c-26.51,0-48,21.49-48,48s21.49,48,48,48c26.499-0.026,47.974-21.501,48-48C288,21.49,266.51,0,240,0z M240,80
                                            c-17.673,0-32-14.327-32-32s14.327-32,32-32c17.673,0,32,14.327,32,32S257.673,80,240,80z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M272,104h-1.888l-1.688,0.84c-17.901,8.913-38.947,8.913-56.848,0l-1.688-0.84H208c-22.08,0.026-39.974,17.92-40,40v48
                                            c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C311.974,121.92,294.08,104.026,272,104z M296,192c0,4.418-3.582,8-8,8
                                            h-96c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.034,9.92,67.408,0
                                            c12.56,0.894,22.294,11.344,22.296,23.936V192z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M408,264c-26.51,0-48,21.49-48,48c0,26.51,21.49,48,48,48c26.51,0,48-21.49,48-48
                                            C455.974,285.501,434.499,264.026,408,264z M408,344c-17.673,0-32-14.327-32-32c0-17.673,14.327-32,32-32
                                            c17.673,0,32,14.327,32,32C440,329.673,425.673,344,408,344z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M440,368h-1.888l-1.688,0.8c-17.901,8.912-38.947,8.912-56.848,0l-1.688-0.8H376c-22.08,0.026-39.974,17.92-40,40v48
                                            c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C479.974,385.92,462.08,368.026,440,368z M464,456c0,4.418-3.582,8-8,8
                                            h-96c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.033,9.92,67.408,0
                                            C454.265,384.958,463.998,395.408,464,408V456z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M72,264c-26.51,0-48,21.49-48,48c0,26.51,21.49,48,48,48s48-21.49,48-48C119.974,285.501,98.499,264.026,72,264z M72,344
                                            c-17.673,0-32-14.327-32-32c0-17.673,14.327-32,32-32s32,14.327,32,32C104,329.673,89.673,344,72,344z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M104,368h-1.888l-1.688,0.8c-17.901,8.912-38.947,8.912-56.848,0l-1.688-0.8H40c-22.08,0.026-39.974,17.92-40,40v48
                                            c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C143.974,385.92,126.08,368.026,104,368z M128,456c0,4.418-3.582,8-8,8
                                            H24c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.033,9.92,67.408,0
                                            C118.265,384.958,127.998,395.408,128,408V456z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M319.372,406.276c-0.004-0.009-0.008-0.018-0.012-0.028c-1.732-4.065-6.431-5.956-10.495-4.224c0,0,0,0,0,0
                                            c-36.125,15.14-76.245,17.902-114.104,7.856l7.488-2.2c4.242-1.242,6.674-5.686,5.432-9.928s-5.686-6.674-9.928-5.432l-32,9.384
                                            c-0.12,0-0.208,0.136-0.32,0.176c-0.741,0.276-1.437,0.662-2.064,1.144c-0.278,0.15-0.545,0.318-0.8,0.504
                                            c-0.844,0.753-1.513,1.681-1.96,2.72c-0.434,1.046-0.641,2.172-0.608,3.304c0.195,1.083,0.462,2.152,0.8,3.2
                                            c0.048,0.112,0,0.24,0.088,0.352l16,30.616c2.046,3.919,6.881,5.438,10.8,3.392s5.438-6.881,3.392-10.8l-6.512-12.448
                                            c43.014,12.93,89.195,10.417,130.552-7.104C319.189,415.039,321.093,410.345,319.372,406.276z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M453.656,210.344c-3.124-3.123-8.188-3.123-11.312,0l-11.32,11.32c-6.624-70.07-51.111-130.876-115.888-158.4
                                            c-4.065-1.732-8.764,0.159-10.496,4.224c-1.732,4.065,0.159,8.764,4.224,10.496c58.11,24.697,98.504,78.669,105.816,141.384
                                            l-9.024-9.024c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l24,24c3.12,3.128,8.186,3.135,11.314,0.014
                                            c0.005-0.005,0.01-0.01,0.014-0.014l24-24C456.791,218.528,456.784,213.464,453.656,210.344z"/>
                                    </g>
                                </g>
                            <g>
                                    <g>
                                        <path d="M175.768,69.272c-0.026-0.467-0.095-0.93-0.208-1.384c0-0.072-0.088-0.12-0.12-0.2c-0.032-0.08,0-0.136,0-0.2
                                            c-0.218-0.389-0.47-0.759-0.752-1.104c-0.259-0.469-0.565-0.911-0.912-1.32c-0.473-0.419-0.997-0.776-1.56-1.064
                                            c-0.281-0.239-0.581-0.456-0.896-0.648l-32-14.616c-4.087-1.678-8.761,0.275-10.439,4.362c-1.587,3.865,0.068,8.301,3.799,10.182
                                            l16.568,7.576C86.875,104.237,47.955,169.256,48,240c0,4.418,3.582,8,8,8s8-3.582,8-8c-0.04-62.293,32.901-119.952,86.584-151.552
                                            l-5.784,12.088c-1.907,3.977-0.236,8.747,3.736,10.664c1.079,0.527,2.263,0.801,3.464,0.8c3.072-0.004,5.87-1.767,7.2-4.536
                                            l16-33.384c0-0.08,0-0.168,0.064-0.248c0.208-0.547,0.353-1.116,0.432-1.696c0.137-0.431,0.239-0.872,0.304-1.32
                                            C175.973,70.295,175.896,69.778,175.768,69.272z"/>
                                    </g>
                                </g>
                        </svg>
                    </div>
                    <div class="info-body">
                        <h5 class="pb-4 fs-28 fw-bold">Hire your technical talent</h5>
                        <p class="pb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a href="talent.html" class="btn theme-btn">Disilab Talent <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-2">
                <div class="icon-element shadow-sm mx-auto mb-4">Or</div>
            </div>
            <div class="col-lg-5">
                <div class="info-box text-center">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm mx-auto">
                        <svg class="svg-icon-color-2" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M500.71,446.149l-92.7-92.7c2.548-3.879,2.118-9.141-1.293-12.552c-3.41-3.41-8.674-3.841-12.552-1.293l-24.737-24.737
                                        c18.489-27.447,30.128-59.238,33.495-92.395c4.611-45.412-6.37-91.445-30.92-129.622c-2.987-4.645-9.174-5.988-13.818-3.002
                                        c-4.644,2.987-5.988,9.174-3.002,13.818c45.911,71.392,35.6,166.844-24.517,226.961c-70.95,70.95-186.394,70.95-257.345,0
                                        c-70.95-70.949-70.95-186.393,0-257.344c60.181-60.181,152.594-70.842,224.73-25.931c4.686,2.917,10.853,1.485,13.772-3.203
                                        c2.919-4.687,1.484-10.853-3.203-13.772C270.552,6.677,224.901-3.693,180.068,1.174C134.551,6.117,91.62,26.705,59.18,59.143
                                        c-78.746,78.747-78.746,206.878,0,285.624c39.374,39.374,91.093,59.06,142.813,59.06c39.403,0,78.798-11.44,112.741-34.292
                                        l24.613,24.613c-3.698,3.918-3.639,10.089,0.195,13.924c1.953,1.953,4.511,2.929,7.07,2.929c2.468,0,4.93-0.917,6.854-2.733
                                        l92.563,92.563c7.45,7.45,17.244,11.169,27.065,11.169c9.911,0,19.85-3.791,27.423-11.364
                                        C515.591,485.56,515.679,461.117,500.71,446.149z M335.366,361.889l26.402-26.402l18.11,18.11l-26.402,26.402L335.366,361.889z
                                         M486.376,486.496c-7.28,7.279-19.036,7.367-26.207,0.194l-92.553-92.553l26.402-26.402l92.552,92.553
                                        C493.742,467.461,493.655,479.217,486.376,486.496z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M345.044,59.381l-0.217-0.217c-3.892-3.916-10.223-3.935-14.14-0.043c-3.916,3.892-3.936,10.223-0.043,14.14l0.26,0.261
                                        c1.953,1.953,4.511,2.929,7.07,2.929s5.118-0.976,7.07-2.929C348.948,69.618,348.948,63.287,345.044,59.381z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M201.993,47.981c-84.902,0-153.975,69.073-153.975,153.975s69.073,153.975,153.975,153.975
                                        s153.975-69.073,153.975-153.975S286.895,47.981,201.993,47.981z M201.993,335.934c-73.876,0-133.978-60.102-133.978-133.978
                                        S128.117,67.978,201.993,67.978s133.978,60.102,133.978,133.978S275.869,335.934,201.993,335.934z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M240.041,188.963c6.228-8.096,9.944-18.22,9.944-29.201v-13.096c0-26.463-21.529-47.992-47.992-47.992
                                        s-47.992,21.529-47.992,47.992v13.096c0,10.981,3.715,21.106,9.944,29.201c-31.8,5.997-55.937,33.966-55.937,67.484v5.166
                                        c0,5.522,4.476,9.998,9.998,9.998h167.972c5.522,0,9.998-4.476,9.998-9.998v-5.166
                                        C295.978,222.93,271.841,194.961,240.041,188.963z M173.998,146.666c0-15.436,12.559-27.995,27.995-27.995
                                        s27.995,12.559,27.995,27.995v13.096c0,15.436-12.559,27.995-27.995,27.995s-27.995-12.559-27.995-27.995V146.666z
                                         M128.243,251.614c2.434-24.589,23.236-43.86,48.455-43.86h50.591c25.219,0,46.021,19.271,48.455,43.86H128.243z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M442.305,11.987c-5.522,0-9.998,4.476-9.998,9.998v12.428c0,5.521,4.476,9.998,9.998,9.998s9.998-4.476,9.998-9.998
                                        V21.986C452.303,16.463,447.827,11.987,442.305,11.987z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M442.305,71.547c-5.522,0-9.998,4.476-9.998,9.998v12.428c0,5.522,4.476,9.998,9.998,9.998s9.998-4.476,9.998-9.998
                                        V81.546C452.303,76.024,447.827,71.547,442.305,71.547z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M478.299,47.981h-12.428c-5.522,0-9.998,4.476-9.998,9.998s4.476,9.998,9.998,9.998h12.428
                                        c5.522,0,9.998-4.476,9.998-9.998S483.821,47.981,478.299,47.981z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M418.738,47.981H406.31c-5.522,0-9.998,4.476-9.998,9.998s4.476,9.998,9.998,9.998h12.428
                                        c5.522,0,9.998-4.476,9.998-9.998S424.261,47.981,418.738,47.981z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M61.937,412.008c-5.522,0-9.998,4.476-9.998,9.998v12.428c0,5.522,4.476,9.998,9.998,9.998s9.998-4.476,9.998-9.998
                                        v-12.428C71.935,416.484,67.459,412.008,61.937,412.008z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M61.937,471.568c-5.522,0-9.998,4.476-9.998,9.998v12.428c0,5.522,4.476,9.998,9.998,9.998s9.998-4.476,9.998-9.998
                                        v-12.428C71.935,476.044,67.459,471.568,61.937,471.568z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M97.931,448.002H85.503c-5.522,0-9.998,4.476-9.998,9.998s4.476,9.998,9.998,9.998h12.428
                                        c5.522,0,9.998-4.476,9.998-9.998S103.453,448.002,97.931,448.002z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M38.371,448.002H25.943c-5.522,0-9.998,4.476-9.998,9.998s4.476,9.998,9.998,9.998h12.428
                                        c5.522,0,9.998-4.476,9.998-9.998S43.893,448.002,38.371,448.002z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="info-body">
                        <h5 class="pb-4 fs-28 fw-bold">Reach developers worldwide</h5>
                        <p class="pb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a href="advertising.html" class="btn theme-btn">Disilab Advertising <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END CTA AREA
================================= -->

<hr class="border-top-gray">

<!-- ================================
         START CTA AREA
================================= -->
<section class="get-started-area section--padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Learn and grow with Disilab</h2>
        </div>
        <div class="row pt-50px">
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box px-2">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm">
                        <svg class="svg-icon-color-1" width="40" viewBox="0 -25 424 424" xmlns="http://www.w3.org/2000/svg"><path d="m167.289062 272.132812c-1.601562 0-3.214843-.550781-4.53125-1.671874l-45.296874-38.570313c-1.5625-1.332031-2.460938-3.277344-2.460938-5.332031 0-2.050782.902344-3.996094 2.460938-5.328125l45.296874-38.570313c2.941407-2.507812 7.359376-2.152344 9.867188.789063 2.503906 2.945312 2.152344 7.363281-.792969 9.867187l-39.035156 33.242188 39.035156 33.242187c2.945313 2.507813 3.296875 6.925781.792969 9.867188-1.386719 1.628906-3.355469 2.464843-5.335938 2.464843zm0 0"/><path d="m256.710938 272.132812c-1.980469 0-3.949219-.835937-5.332032-2.464843-2.507812-2.941407-2.152344-7.359375.789063-9.867188l39.035156-33.242187-39.035156-33.242188c-2.941407-2.503906-3.296875-6.921875-.789063-9.867187 2.503906-2.941407 6.925782-3.296875 9.863282-.789063l45.296874 38.570313c1.5625 1.332031 2.460938 3.277343 2.460938 5.328125 0 2.054687-.898438 4-2.460938 5.332031l-45.296874 38.570313c-1.316407 1.121093-2.929688 1.671874-4.53125 1.671874zm0 0"/><path d="m195.964844 301.0625c-.480469 0-.964844-.050781-1.453125-.152344-3.78125-.796875-6.203125-4.511718-5.40625-8.292968l28.230469-134.035157c.796874-3.78125 4.507812-6.203125 8.292968-5.40625 3.78125.796875 6.203125 4.507813 5.40625 8.292969l-28.230468 134.035156c-.695313 3.296875-3.601563 5.558594-6.839844 5.558594zm0 0"/><path d="m377 374.085938h-330c-25.914062 0-47-21.082032-47-47v-280.085938c0-25.914062 21.085938-47 47-47h330c25.914062 0 47 21.085938 47 47v280.085938c0 25.917968-21.085938 47-47 47zm-330-360.085938c-18.195312 0-33 14.804688-33 33v280.085938c0 18.195312 14.804688 33 33 33h330c18.195312 0 33-14.804688 33-33v-280.085938c0-18.195312-14.804688-33-33-33zm0 0"/><path d="m417 112.089844h-410c-3.867188 0-7-3.132813-7-7 0-3.863282 3.132812-7 7-7h410c3.867188 0 7 3.136718 7 7 0 3.867187-3.132812 7-7 7zm0 0"/><path d="m119.601562 78.59375c-12.210937 0-22.152343-9.941406-22.152343-22.152344 0-12.214844 9.941406-22.152344 22.152343-22.152344 12.214844 0 22.152344 9.9375 22.152344 22.152344 0 12.210938-9.9375 22.152344-22.152344 22.152344zm0-30.304688c-4.492187 0-8.152343 3.65625-8.152343 8.152344s3.660156 8.152344 8.152343 8.152344c4.496094 0 8.152344-3.65625 8.152344-8.152344s-3.65625-8.152344-8.152344-8.152344zm0 0"/><path d="m51.539062 78.378906c-12.214843 0-22.152343-9.9375-22.152343-22.152344 0-12.214843 9.9375-22.152343 22.152343-22.152343 12.214844 0 22.152344 9.9375 22.152344 22.152343 0 12.214844-9.9375 22.152344-22.152344 22.152344zm0-30.304687c-4.492187 0-8.152343 3.660156-8.152343 8.152343 0 4.496094 3.660156 8.152344 8.152343 8.152344 4.496094 0 8.152344-3.65625 8.152344-8.152344 0-4.492187-3.65625-8.152343-8.152344-8.152343zm0 0"/><path d="m187.664062 78.804688c-12.210937 0-22.148437-9.9375-22.148437-22.152344 0-12.210938 9.9375-22.148438 22.148437-22.148438 12.214844 0 22.152344 9.9375 22.152344 22.148438 0 12.214844-9.9375 22.152344-22.152344 22.152344zm0-30.304688c-4.492187 0-8.148437 3.65625-8.148437 8.152344s3.65625 8.152344 8.148437 8.152344c4.496094 0 8.152344-3.65625 8.152344-8.152344s-3.65625-8.152344-8.152344-8.152344zm0 0"/></svg>
                    </div>
                    <div class="info-body">
                        <h3 class="fs-18 pb-3 fw-bold">Write the script of the future</h3>
                        <p>This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box px-2">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm">
                        <svg class="svg-icon-color-2" width="40" viewBox="0 0 569 569.54905" xmlns="http://www.w3.org/2000/svg"><path d="m1.527344 52.246094 37.984375 66.46875c1.28125 2.246094 3.425781 3.871094 5.933593 4.5l35.4375 8.859375 121.542969 121.542969 13.429688-13.425782-123.445313-123.441406c-1.214844-1.21875-2.738281-2.082031-4.40625-2.5l-34.050781-8.542969-32.339844-56.625 27.726563-27.726562 56.648437 32.371093 8.546875 34.050782c.414063 1.671875 1.28125 3.199218 2.496094 4.414062l123.445312 123.445313 13.425782-13.429688-121.542969-121.542969-8.859375-35.417968c-.628906-2.511719-2.253906-4.660156-4.5-5.945313l-66.472656-37.980469c-3.707032-2.109374-8.371094-1.484374-11.394532 1.527344l-37.980468 37.984375c-3.0546878 3.003907-3.71875 7.675781-1.625 11.414063zm0 0"/><path d="m396.3125 187.144531-208.902344 208.90625-13.429687-13.429687 208.90625-208.902344zm0 0"/><path d="m150.847656 403.441406c-1.71875-2.859375-4.804687-4.605468-8.140625-4.605468h-56.972656c-3.332031 0-6.421875 1.746093-8.136719 4.605468l-28.488281 47.476563c-1.808594 3.007812-1.808594 6.769531 0 9.78125l28.488281 47.476562c1.714844 2.855469 4.804688 4.605469 8.136719 4.605469h56.972656c3.335938 0 6.421875-1.75 8.140625-4.605469l28.484375-47.476562c1.808594-3.011719 1.808594-6.773438 0-9.78125zm-13.511718 90.347656h-46.226563l-22.789063-37.980468 22.789063-37.984375h46.226563l22.789062 37.984375zm0 0"/><path d="m456.0625 227.914062c62.714844.210938 113.730469-50.460937 113.941406-113.175781.03125-9.546875-1.140625-19.054687-3.488281-28.308593-1.265625-5.089844-6.417969-8.1875-11.507813-6.921876-1.671874.417969-3.195312 1.28125-4.414062 2.496094l-59.109375 59.070313-46.898437-15.628907-15.640626-46.886718 59.109376-59.121094c3.707031-3.710938 3.703124-9.722656-.007813-13.429688-1.222656-1.222656-2.761719-2.089843-4.445313-2.503906-60.820312-15.402344-122.605468 21.414063-138.007812 82.230469-2.339844 9.226563-3.507812 18.710937-3.476562 28.230469.023437 7.476562.792968 14.929687 2.308593 22.25l-207.957031 207.953125c-7.320312-1.511719-14.773438-2.28125-22.246094-2.308594-62.933594 0-113.949218 51.015625-113.949218 113.949219 0 62.929687 51.015624 113.945312 113.949218 113.945312 62.929688 0 113.945313-51.015625 113.945313-113.945312-.023438-7.476563-.796875-14.929688-2.308594-22.25l49.785156-49.785156 21.773438 21.773437c3.710937 3.707031 9.71875 3.707031 13.429687 0l4.746094-4.75c4.164062-4.136719 10.894531-4.136719 15.058594 0 4.160156 4.148437 4.167968 10.882813.019531 15.042969-.003906.003906-.011719.011718-.019531.019531l-4.746094 4.746094c-3.707031 3.707031-3.707031 9.71875 0 13.425781l113.273438 113.273438c29.792968 30.066406 78.316406 30.285156 108.382812.492187 30.0625-29.792969 30.28125-78.320313.488281-108.382813-.160156-.164062-.324219-.328124-.488281-.492187l-113.273438-113.269531c-3.707031-3.707032-9.71875-3.707032-13.425781 0l-4.746093 4.746094c-4.167969 4.140624-10.894532 4.140624-15.0625 0-4.15625-4.148438-4.167969-10.882813-.019532-15.039063.007813-.007813.015625-.011719.019532-.019531l4.75-4.75c3.707031-3.707032 3.707031-9.71875 0-13.425782l-21.773438-21.773437 49.785156-49.785156c7.320313 1.511719 14.773438 2.285156 22.246094 2.308593zm37.308594 322.851563c-6.898438-.011719-13.738282-1.257813-20.195313-3.683594l74.160157-74.164062c11.191406 29.769531-3.867188 62.972656-33.636719 74.164062-6.496094 2.441407-13.382813 3.691407-20.328125 3.683594zm-107.574219-246.792969c-10.515625 12.542969-8.867187 31.238282 3.675781 41.75 11.023438 9.238282 27.089844 9.230469 38.101563-.027344l106.5625 106.65625c1.15625 1.160157 2.238281 2.382813 3.285156 3.625l-81.1875 81.1875c-1.246094-1.042968-2.46875-2.125-3.628906-3.285156l-106.644531-106.652344c10.515624-12.542968 8.867187-31.238281-3.675782-41.75-11.023437-9.242187-27.09375-9.230468-38.105468.023438l-15.191407-15.191406 81.613281-81.492188zm38.34375-95.503906-215.410156 215.367188c-2.363281 2.359374-3.3125 5.785156-2.507813 9.023437 13.027344 51.160156-17.886718 103.195313-69.050781 116.21875-51.160156 13.027344-103.195313-17.886719-116.222656-69.050781-13.023438-51.160156 17.890625-103.195313 69.054687-116.222656 15.476563-3.9375 31.691406-3.9375 47.167969 0 3.238281.792968 6.65625-.15625 9.023437-2.503907l215.359376-215.371093c2.359374-2.359376 3.308593-5.785157 2.496093-9.019532-12.9375-50.5625 17.5625-102.039062 68.125-114.980468 9.554688-2.441407 19.4375-3.378907 29.28125-2.765626l-50.089843 50.109376c-2.542969 2.539062-3.433594 6.300781-2.296876 9.710937l18.988282 56.976563c.949218 2.832031 3.175781 5.058593 6.011718 6l56.976563 18.992187c3.40625 1.136719 7.167969.25 9.710937-2.289063l50.089844-50.089843c.113282 1.8125.171875 3.605469.171875 5.390625.265625 52.175781-41.8125 94.6875-93.988281 94.957031-8.066406.039063-16.105469-.953125-23.917969-2.953125-3.238281-.808594-6.664062.136719-9.023437 2.496094h.050781zm0 0"/><path d="m491.273438 477.578125-13.429688 13.429687-94.953125-94.953124 13.425781-13.429688zm0 0"/></svg>
                    </div>
                    <div class="info-body">
                        <h3 class="fs-18 pb-3 fw-bold">Support open source</h3>
                        <p>This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box px-2">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm">
                        <svg class="svg-icon-color-3" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M346,319c-5.522,0-10,4.477-10,10v69c0,27.57-22.43,50-50,50H178.032c-5.521,0-9.996,4.473-10,9.993l-0.014,19.882
                                        l-23.868-23.867c-1.545-3.547-5.081-6.008-9.171-6.008H70c-27.57,0-50-22.43-50-50V244c0-27.57,22.43-50,50-50h101
                                        c5.522,0,10-4.477,10-10s-4.478-10-10-10H70c-38.598,0-70,31.402-70,70v154c0,38.598,31.402,70,70,70h59.858l41.071,41.071
                                        c1.913,1.913,4.47,2.929,7.073,2.929c1.287,0,2.586-0.249,3.821-0.76c3.737-1.546,6.174-5.19,6.177-9.233L188.024,468H286
                                        c38.598,0,70-31.402,70-70v-69C356,323.477,351.522,319,346,319z"/>
                            </g>
                             <g>
                                 <path d="M366.655,0h-25.309C261.202,0,196,65.202,196,145.346s65.202,145.345,145.345,145.345h25.309
                                        c12.509,0,24.89-1.589,36.89-4.729l37.387,37.366c1.913,1.911,4.469,2.927,7.071,2.927c1.289,0,2.589-0.249,3.826-0.762
                                        c3.736-1.548,6.172-5.194,6.172-9.238v-57.856c15.829-12.819,28.978-29.012,38.206-47.102
                                        C506.687,190.751,512,168.562,512,145.346C512,65.202,446.798,0,366.655,0z M441.983,245.535
                                        c-2.507,1.889-3.983,4.847-3.983,7.988v38.6l-24.471-24.458c-1.904-1.902-4.458-2.927-7.07-2.927c-0.98,0-1.97,0.145-2.936,0.442
                                        c-11.903,3.658-24.307,5.512-36.868,5.512h-25.309c-69.117,0-125.346-56.23-125.346-125.346S272.23,20,341.346,20h25.309
                                        C435.771,20,492,76.23,492,145.346C492,185.077,473.77,221.595,441.983,245.535z"/>
                            </g>
                            <g>
                                <path d="M399.033,109.421c-1.443-20.935-18.319-37.811-39.255-39.254c-11.868-0.815-23.194,3.188-31.863,11.281
                                        c-8.55,7.981-13.453,19.263-13.453,30.954c0,5.523,4.478,10,10,10c5.522,0,10-4.477,10-10c0-6.259,2.522-12.06,7.1-16.333
                                        c4.574-4.269,10.552-6.382,16.842-5.948c11.028,0.76,19.917,9.649,20.677,20.676c0.768,11.137-6.539,20.979-17.373,23.403
                                        c-8.778,1.964-14.908,9.592-14.908,18.549v24.025c0,5.523,4.478,10,10,10c5.523,0,10-4.477,9.999-10v-23.226
                                        C386.949,148.68,400.468,130.242,399.033,109.421z"/>
                            </g>
                             <g>
                                 <path d="M363.87,209.26c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07
                                        c0,2.64,1.071,5.22,2.93,7.08c1.86,1.86,4.44,2.92,7.07,2.92s5.21-1.06,7.07-2.92c1.86-1.87,2.93-4.44,2.93-7.08
                                        C366.8,213.7,365.729,211.12,363.87,209.26z"/>
                            </g>
                            <g>
                                <path d="M275,310H64c-5.522,0-10,4.477-10,10s4.478,10,10,10h211c5.523,0,10-4.477,10-10S280.522,310,275,310z"/>
                            </g>
                            <g>
                                <path d="M282.069,368.93C280.21,367.07,277.63,366,275,366s-5.21,1.07-7.07,2.93c-1.861,1.86-2.93,4.44-2.93,7.07
                                        s1.07,5.21,2.93,7.07c1.86,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.861-1.86,2.931-4.43,2.931-7.07
                                        C285,373.37,283.929,370.79,282.069,368.93z"/>
                            </g>
                            <g>
                                <path d="M235.667,366H64c-5.522,0-10,4.477-10,10s4.478,10,10,10h171.667c5.523,0,10-4.477,10-10S241.189,366,235.667,366z"/>
                            </g>
                            <g>
                                <path d="M210,254H64c-5.522,0-10,4.477-10,10s4.478,10,10,10h146c5.523,0,10-4.477,10-10S215.522,254,210,254z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="info-body">
                        <h3 class="fs-18 pb-3 fw-bold">Acquire and share knowledge</h3>
                        <p>This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box px-2">
                    <div class="icon-element icon-element-lg mb-4 shadow-sm">
                        <svg class="svg-icon-color-4" width="40" viewBox="-26 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="m457.085938 68.828125-21.878907-19.265625 21.878907-19.261719c3.402343-3 4.566406-7.675781 2.96875-11.917969-1.605469-4.246093-5.570313-6.988281-10.105469-6.988281h-90.539063v-3.890625c0-4.144531-3.359375-7.503906-7.503906-7.503906s-7.503906 3.359375-7.503906 7.503906v101.203125l-61.628906 33.464844c-.339844-2.710937-1.152344-5.375-2.4375-7.882813l-8.683594-16.953124c-5.960938-11.640626-20.28125-16.253907-31.914063-10.296876l-6.714843 3.4375c-5.640626 2.890626-9.816407 7.796876-11.761719 13.828126-1.945313 6.027343-1.425781 12.453124 1.464843 18.089843l8.683594 16.957031c2.027344 3.957032 5.023438 7.089844 8.546875 9.285157-4.609375 6.207031-6.796875 13.839843-9.046875 21.769531l-1.617187 5.726562c-1.128907 3.988282 1.191406 8.136719 5.179687 9.261719.679688.195313 1.367188.285157 2.042969.285157 3.273437 0 6.28125-2.15625 7.21875-5.464844l1.617187-5.714844c3.289063-11.597656 5.308594-17.808594 11.738282-21.300781l11.527344-6.261719 1.421874-.726562c.472657-.242188.914063-.515626 1.363282-.785157l82.15625-44.613281c-.519532 10.269531-6.046875 19.972656-15.148438 25.5l-53.425781 32.460938c-.0625.035156-.125.070312-.183594.109374l-16.628906 10.101563c-3.539063 2.152344-4.667969 6.769531-2.515625 10.3125 2.027344 3.339844 6.246094 4.527344 9.6875 2.851563l-12.617188 38.140624-9.222656 3.78125-25.078125 10.277344 7.226563-25.546875c1.125-3.988281-1.191406-8.136719-5.179688-9.265625-3.992187-1.132812-8.136718 1.191406-9.265625 5.179688l-11.417969 40.378906c-.148437.519531-.246093 1.089844-.269531 1.632812l-2.988281 54.890626c-.089844 2.09375.355469 6.050781-.613281 8.09375l-33.1875 69.820312h-24.117188c-14.128906 0-25.621093 11.492188-25.621093 25.617188v21.660156c-3.234376-1.480469-6.824219-2.308594-10.609376-2.308594h-61.246093c-14.125 0-25.617188 11.488281-25.617188 25.617188v26.875h-18.015625c-4.144531 0-7.503906 3.359374-7.503906 7.503906 0 4.144531 3.359375 7.503906 7.503906 7.503906h442.4375c4.144532 0 7.503906-3.359375 7.503906-7.503906 0-4.144532-3.359374-7.503906-7.503906-7.503906h-19.515625v-193.417969c0-14.125-11.492187-25.617188-25.617187-25.617188h-45.398438v-130.910156c8.320313-11.277344 11.402344-26.058594 7.539063-40.105469-.605469-2.207031-2.1875-4.019531-4.296875-4.914062-1.035156-.441406-2.144532-.636719-3.242188-.59375v-13.699219h90.535156c4.539063 0 8.503907-2.742187 10.105469-6.984375 1.601563-4.242188.4375-8.921875-2.964843-11.921875zm-221.539063 60.085937c.714844-2.214843 2.246094-4.019531 4.316406-5.078124l6.714844-3.4375c1.265625-.648438 2.617187-.957032 3.953125-.957032 3.164062 0 6.222656 1.730469 7.761719 4.734375l8.6875 16.957031c2.027343 3.960938.714843 8.761719-2.890625 11.1875l-2.445313 1.324219-5.160156 2.644531c-4.269531 2.1875-9.527344.492188-11.714844-3.78125l-8.6875-16.953124c-1.058593-2.070313-1.25-4.429688-.535156-6.640626zm-15.078125 272.925782c-2.550781-1.164063-5.324219-1.925782-8.238281-2.195313l8.238281-10.941406zm35.628906-60.464844c3.609375-4.324219 4.605469-9.375 5.410156-13.445312.203126-.96875 3.90625-21.195313 3.90625-21.195313s3.503907 2.183594 3.871094 2.339844c.253906.113281.433594.363281.460938.65625l4.082031 41.496093h-25.148437zm44.375-41.417969-6.335937 51.234375h-5.230469l-4.222656-42.929687c-.539063-5.5-3.90625-10.300781-8.839844-12.6875l-7.546875-4.785157 5.027344-27.863281s21.179687 25.160157 21.671875 25.800781c4.382812 5.699219 5.882812 7.980469 5.476562 11.230469zm-81.054687 36.316407c1.515625-4.5625 2.21875-9.207032 2.101562-13.929688l2.726563-50.0625 34.707031-14.222656-6.308594 34.945312c-.019531.09375-.039062.191406-.050781.285156l-5.21875 28.894532c-.679688 2.992187-1.273438 7.53125-3.140625 9.996094l-50.707031 67.351562h-4.179688zm-178.890625 133.839843c0-5.847656 4.757812-10.605469 10.609375-10.605469h61.246093c5.851563 0 10.613282 4.757813 10.613282 10.605469v26.878907h-82.46875zm97.472656 0v-44.964843c0-5.851563 4.761719-10.609376 10.613281-10.609376h61.246094c5.851563 0 10.609375 4.757813 10.609375 10.609376v71.84375h-82.464844v-26.878907zm277.417969-166.539062v193.417969h-82.464844v-44.992188c0-4.144531-3.359375-7.503906-7.503906-7.503906-4.148438 0-7.507813 3.359375-7.507813 7.503906v44.992188h-82.464844v-120.152344c0-5.847656 4.757813-10.605469 10.609376-10.605469h61.246093c5.851563 0 10.609375 4.757813 10.609375 10.605469v37.617187c0 4.144531 3.359375 7.503907 7.503906 7.503907 4.148438 0 7.503907-3.359376 7.503907-7.503907v-110.882812c0-5.851563 4.761719-10.609375 10.613281-10.609375h8.265625c.023437 0 .050781.003906.078125.003906.023438 0 .050781-.003906.074219-.003906h52.824219c5.851562 0 10.613281 4.761718 10.613281 10.609375zm-71.855469-25.617188c-14.125 0-25.617188 11.492188-25.617188 25.617188v49.960937c-2.6875-1.226562-5.617187-2.003906-8.699218-2.230468l6.121094-49.5c1.203124-9.648438-3.71875-16.042969-8.476563-22.230469-.503906-.65625-29.671875-35.289063-29.671875-35.289063l17.894531-54.101562 49.289063-29.945313v117.71875zm15.847656-205.234375v-46.316406h79.386719l-17.097656 15.054688c-2.328125 2.050781-3.664063 5.003906-3.664063 8.105468 0 3.101563 1.335938 6.054688 3.664063 8.105469l17.097656 15.054687h-79.386719zm0 0"/></svg>
                    </div>
                    <div class="info-body">
                        <h3 class="fs-18 pb-3 fw-bold">Find career opportunities</h3>
                        <p>This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END CTA AREA
================================= -->

<!-- ================================
         START CTA AREA
================================= -->
<section class="get-started-area pt-70px pb-70px bg-gray position-relative z-index-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-4">
                <h2 class="section-title fs-30 lh-40">Build a private community to share technical or non-technical knowledge</h2>
            </div>
            <div class="col-lg-5 text-right">
                <a href="free-demo.html" class="btn theme-btn">Create a free team <i class="la la-arrow-right icon ml-1"></i></a>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- ================================
         END CTA AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Company</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="advertising.html">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions.html">Terms of Service</a></li>
                        <li><a href="privacy-policy.html">Cookie Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="faq.html">Knowledge Base</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline-block">
                    <img src="images/logo-white.png" alt="footer logo" class="footer-logo">
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- Modal -->
<div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Good to see you again!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Email</label>
                        <input class="form-control form--control" type="email" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Password</label>
                        <div class="input-group mb-1">
                            <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter password">
                            <div class="input-group-append">
                                <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                    <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                    <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="custom-control custom-checkbox fs-14">
                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                            <label class="custom-control-label custom--control-label" for="rememberMe">Remember me!</label>
                        </div>
                        <a href="javascript:void(0)" class="lost-pass-btn fs-14 hover-underline">Forgot Password?</a>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn theme-btn w-100">
                            Login to Account <i class="la la-arrow-right icon ml-1"></i>
                        </button>
                    </div>
                    <p class="create-account-text text-right fs-14 pt-1">
                        New to disilab? <a class="signup-btn text-color hover-underline" href="javascript:void(0)">Create account</a>
                    </p>
                    <div class="icon-element my-4 mx-auto shadow-sm fs-25">Or</div>
                    <div class="text-center">
                        <p class="fs-15 pb-3">Login with your social network</p>
                        <button class="btn theme-btn bg-8 mb-2 mr-2"><i class="la la-facebook mr-1"></i> Facebook</button>
                        <button class="btn theme-btn bg-9 mb-2 mr-2"><i class="la la-twitter mr-1"></i> Twitter</button>
                        <button class="btn theme-btn bg-10 mb-2 mr-2"><i class="la la-google mr-1"></i> Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="signUpModalTitle">Welcome! create your account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Name</label>
                        <input class="form-control form--control" type="text" name="text" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Email</label>
                        <input class="form-control form--control" type="email" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Password</label>
                        <div class="input-group mb-1">
                            <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter password">
                            <div class="input-group-append">
                                <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                    <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                    <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                </button>
                            </div>
                        </div>
                        <p class="fs-14 lh-20">Your password must be at least 6 characters long and must contain letters, numbers and special characters. Cannot contain whitespace.</p>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox fs-14">
                            <input type="checkbox" class="custom-control-input" id="agreeCheckBox">
                            <label class="custom-control-label custom--control-label" for="agreeCheckBox">By signing up, you agree to our <a href="privacy-policy.html" class="text-color hover-underline">Privacy Policy.</a></label>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn theme-btn w-100">
                            Register Account <i class="la la-arrow-right icon ml-1"></i>
                        </button>
                    </div>
                    <p class="create-account-text text-right fs-14">
                        Already on disilab? <a class="login-btn text-color hover-underline" href="javascript:void(0)">Log in</a>
                    </p>
                    <div class="icon-element my-4 mx-auto shadow-sm fs-25">Or</div>
                    <div class="text-center">
                        <p class="fs-15 pb-3">Create account with your social network</p>
                        <button class="btn theme-btn bg-8 mb-2 mr-2"><i class="la la-facebook mr-1"></i> Facebook</button>
                        <button class="btn theme-btn bg-9 mb-2 mr-2"><i class="la la-twitter mr-1"></i> Twitter</button>
                        <button class="btn theme-btn bg-10 mb-2 mr-2"><i class="la la-google mr-1"></i> Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-container recover-form" id="recoverModal" tabindex="-1" role="dialog" aria-labelledby="recoverModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="recoverModalTitle">Reset password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="fs-15 lh-20 pb-3">
                    Enter your username or email to reset your password.
                    You will receive an email with instructions on how to reset your password. If you are experiencing problems
                    resetting your password <a href="contact.html" class="text-color hover-underline">contact us</a> or <a href="#" class="text-color hover-underline">send us an email</a>
                </p>
                <form method="post">
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Email</label>
                        <input class="form-control form--control" type="text" name="text" placeholder="Email address">
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn theme-btn w-100">
                            Get New Password <i class="la la-arrow-right icon ml-1"></i>
                        </button>
                        <p class="create-account-text text-right fs-14">
                            Not a member? <a class="text-color signup-btn hover-underline" href="javascript:void(0)">Create account</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection