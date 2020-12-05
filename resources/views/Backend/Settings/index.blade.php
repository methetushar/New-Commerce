@extends('Backend.App')

@section('title') {{ $pageTitle }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('Layouts.FlashNotify')
    <div class="row user">
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">Site Logo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer-seo" data-toggle="tab">Footer &amp; SEO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">Social Links</a></li>
                    <li class="nav-item"><a class="nav-link" href="#analytics" data-toggle="tab">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">Payments</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('Backend.Settings.general')
                </div>
                <div class="tab-pane fade" id="site-logo">
                    @include('Backend.Settings.logo')
                </div>
                <div class="tab-pane fade" id="footer-seo">
                    @include('Backend.Settings.footer_seo')
                </div>
                <div class="tab-pane fade" id="social-links">
                    @include('Backend.Settings.social_links')
                </div>
                <div class="tab-pane fade" id="analytics">
                    @include('Backend.Settings.analytics')
                </div>
                <div class="tab-pane fade" id="payments">
                    @include('Backend.Settings.payments')
                </div>
            </div>
        </div>
    </div>
@endsection
