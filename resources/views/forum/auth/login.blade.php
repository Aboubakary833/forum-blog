
@extends('forum.layouts.main')
@section('content')
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<section class="login-area pt-80px pb-80px position-relative">
    <div class="shape-bg position-absolute top-0 left-0 w-100 h-100 opacity-2 z-index-n1"></div>
    <div class="container">
        <form action="#" class="card card-item login-form">
            <div class="card-body row p-0">
                <div class="col-lg-6">
                    <div class="form-content py-4 pr-60px pl-60px border-right border-right-gray h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('forum/images/undraw-remotely.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-5 mx-auto">
                    <div class="form-action-wrapper py-5">
                        <div class="form-group">
                            <h3 class="fs-22 pb-3 fw-bold">Connexion</h3>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18">Adresse Email</label>
                            <input type="email" name="email" class="form-control form--control" placeholder="Entrer votre Email">
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18">Mot de passe</label>
                            <div class="input-group">
                                <input class="form-control form--control password-field" type="password" name="password" placeholder="Entrez votre mot de passe">
                                <div class="input-group-append">
                                    <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                        <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#a1a1a1"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#a1a1a1"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div><!-- end form-group -->
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <div class="custom-control custom-checkbox fs-14">
                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                <label class="custom-control-label custom--control-label" for="rememberMe">Se souvenir de moi !</label>
                            </div>
                            <a href="recover-password.html" class="btn-text fs-14 hover-underline fw-regular">Mot de passe oublié?</a>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <button id="send-message-btn" class="btn theme-btn w-100" type="submit">Se connecter<i class="la la-arrow-right icon ml-1"></i></button>
                        </div><!-- end form-group -->

                    </div><!-- end form-action-wrapper -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </form>
        <p class="text-black text-center fs-15">N'avez vous pas de compte ? <a href="{{ route('register') }}" class="text-color hover-underline">S'inscrire</a></p>
    </div><!-- end container -->
</section>
@endsection
