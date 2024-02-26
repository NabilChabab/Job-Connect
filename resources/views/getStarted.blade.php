@extends('layouts.app')

@section('content')
<div class="container">
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
          <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                  <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                  <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0 bg-transparent border-0">
                        <div class="card-body text-center d-flex gap-5">
                            <a href="{{route('register.index')}}" class="btn btn-success btn-lg flex-grow-1">I AM HERE TO FIND A JOB</a>
                            <a href="{{route('companyRegister.index')}}" class="btn btn-primary btn-lg flex-grow-1">I AM HERE TO HIRE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <footer class="footer py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Pricing
                </a>
              </div>
              <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                  Copyright © <script>
                    document.write(new Date().getFullYear())
                  </script> Soft by Creative Tim.
                </p>
              </div>
            </div>
          </div>
        </footer>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
</div>
@endsection