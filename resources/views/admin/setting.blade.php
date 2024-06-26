@extends('admin.master_layout')
@section('title')
    <title>{{ __('admin.Settings') }}</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('admin.Settings') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">


                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link active" id="general-setting-tab" data-toggle="tab"
                                                        href="#generalSettingTab" role="tab"
                                                        aria-controls="generalSettingTab"
                                                        aria-selected="true">{{ __('admin.General Setting') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logoTab"
                                                        role="tab" aria-controls="logoTab"
                                                        aria-selected="true">{{ __('admin.Logo and Favicon') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="themeColor-tab" data-toggle="tab"
                                                        href="#themeColorTab" role="tab" aria-controls="themeColorTab"
                                                        aria-selected="true">{{ __('admin.Theme color') }}</a>
                                                </li>


                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="cookie-tab" data-toggle="tab" href="#cookieTab"
                                                        role="tab" aria-controls="cookieTab"
                                                        aria-selected="true">{{ __('admin.Cookie Consent') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="recaptcha-tab" data-toggle="tab"
                                                        href="#recaptchaTab" role="tab" aria-controls="recaptchaTab"
                                                        aria-selected="true">{{ __('admin.Google Recaptcha') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="pusher-tab" data-toggle="tab" href="#pusherTab"
                                                        role="tab" aria-controls="pusherTab"
                                                        aria-selected="true">{{ __('admin.Pusher Credential') }}</a>
                                                </li>


                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="blog-comment-tab" data-toggle="tab"
                                                        href="#blogCommentTab" role="tab" aria-controls="blogCommentTab"
                                                        aria-selected="true">{{ __('admin.Blog Comment') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="tawk-chat-tab" data-toggle="tab"
                                                        href="#tawkChatTab" role="tab" aria-controls="tawkChatTab"
                                                        aria-selected="true">{{ __('admin.Tawk Chat') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="google-analytic-tab" data-toggle="tab"
                                                        href="#googleAnalyticTab" role="tab"
                                                        aria-controls="googleAnalyticTab"
                                                        aria-selected="true">{{ __('admin.Google Analytic') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="custom-pagination-tab" data-toggle="tab"
                                                        href="#customPaginationTab" role="tab"
                                                        aria-controls="customPaginationTab"
                                                        aria-selected="true">{{ __('admin.Custom Pagination') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="social-login-tab" data-toggle="tab"
                                                        href="#socialLoginTab" role="tab"
                                                        aria-controls="socialLoginTab"
                                                        aria-selected="true">{{ __('admin.Social Login') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="facebook-pixel-tab" data-toggle="tab"
                                                        href="#facebookPixelTab" role="tab"
                                                        aria-controls="facebookPixelTab"
                                                        aria-selected="true">{{ __('admin.Facebook Pixel') }}</a>
                                                </li>

                                                <li class="nav-item border rounded mb-1">
                                                    <a class="nav-link" id="database-generate-tab" data-toggle="tab"
                                                        href="#databaseTab" role="tab" aria-controls="databaseTab"
                                                        aria-selected="true">{{ __('Database generate') }}</a>
                                                </li>



                                            </ul>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9">
                                            <div class="border rounded">
                                                <div class="tab-content no-padding" id="settingsContent">

                                                    <div class="tab-pane fade show active" id="generalSettingTab"
                                                        role="tabpanel" aria-labelledby="general-setting-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-general-setting') }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Frontend Root URL') }}
                                                                        </label>
                                                                        <input type="text"
                                                                            value="{{ $setting?->frontend_url }}"
                                                                            class="form-control" name="frontend_url">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Phone number required on the register page') }}</label>
                                                                        <select name="phone_number_required"
                                                                            id="" class="form-control">
                                                                            <option
                                                                                {{ $setting?->phone_number_required == 1 ? 'selected' : '' }}
                                                                                value="1">{{ __('admin.Enable') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $setting?->phone_number_required == 0 ? 'selected' : '' }}
                                                                                value="0">{{ __('admin.Disable') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Default Phone Code') }}</label>
                                                                        <select name="default_phone_code"
                                                                            id="default_phone_code"
                                                                            class="form-control select2">

                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Multi Vendor System') }}</label>
                                                                        <select name="multivendor" id=""
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $setting?->enable_multivendor == 1 ? 'selected' : '' }}
                                                                                value="1">{{ __('admin.Enable') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $setting?->enable_multivendor == 0 ? 'selected' : '' }}
                                                                                value="0">{{ __('admin.Disable') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Layout') }}</label>
                                                                        <select name="layout" id=""
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $setting?->text_direction == 'rtl' ? 'selected' : '' }}
                                                                                value="rtl">
                                                                                {{ __('admin.RTL (right to left)') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $setting?->text_direction == 'ltr' ? 'selected' : '' }}
                                                                                value="ltr">
                                                                                {{ __('admin.LTR (left to right)') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Sidebar Large Header') }}</label>
                                                                        <input type="text" name="lg_header"
                                                                            class="form-control"
                                                                            value="{{ $setting?->sidebar_lg_header }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Sidebar Small Header') }}</label>
                                                                        <input type="text" name="sm_header"
                                                                            class="form-control"
                                                                            value="{{ $setting?->sidebar_sm_header }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Contact Email') }}</label>
                                                                        <input type="email" name="contact_email"
                                                                            class="form-control"
                                                                            value="{{ $setting?->contact_email }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('Vat/Tax %') }}</label>
                                                                        <input type="text" name="tax"
                                                                            class="form-control" placeholder="5%"
                                                                            value="{{ $setting?->tax }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Timezone') }}</label>
                                                                        <select name="timezone" id=""
                                                                            class="form-control select2">
                                                                            <option
                                                                                {{ $setting->timezone == 'Asia/Dhaka' ? 'selected' : '' }}
                                                                                value="Asia/Dhaka">Asia/Dhaka</option>
                                                                        </select>
                                                                    </div>

                                                                    <button class="btn btn-primary"
                                                                        type="submit">{{ __('admin.Update') }}</button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="logoTab" role="tabpanel"
                                                        aria-labelledby="logo-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-logo-favicon') }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Existing Logo') }}</label>
                                                                        <div>
                                                                            <img src="{{ asset($setting->logo) }}"
                                                                                alt="" width="200px">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.New Logo') }}</label>
                                                                        <input type="file" name="logo"
                                                                            class="form-control-file">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Existing Favicon') }}</label>
                                                                        <div>
                                                                            <img src="{{ asset($setting->favicon) }}"
                                                                                alt="" width="50px">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.New Favicon') }}</label>
                                                                        <input type="file" name="favicon"
                                                                            class="form-control-file">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="themeColorTab" role="tabpanel"
                                                        aria-labelledby="themeColor-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-theme-color') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Primary color') }}</label>
                                                                        <input type="color" class="form-control"
                                                                            name="theme_one"
                                                                            value="{{ $setting->theme_one }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Secondary color') }}</label>
                                                                        <input type="color" class="form-control"
                                                                            name="theme_two"
                                                                            value="{{ $setting->theme_two }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-pane fade" id="cookieTab" role="tabpanel"
                                                        aria-labelledby="cookie-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-cookie-consent') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="">{{ __('admin.Allow Cookie Consent') }}</label>
                                                                                <select name="allow" id=""
                                                                                    class="form-control">
                                                                                    <option
                                                                                        {{ $cookieConsent?->status == 1 ? 'selected' : '' }}
                                                                                        value="1">
                                                                                        {{ __('admin.Enable') }}</option>
                                                                                    <option
                                                                                        {{ $cookieConsent?->status == 0 ? 'selected' : '' }}
                                                                                        value="0">
                                                                                        {{ __('admin.Disable') }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label
                                                                            for="cookie_text">{{ __('admin.Message') }}</label>
                                                                        <textarea class="form-control text-area-5" name="message" id="cookie_text" cols="30" rows="5">{{ $cookieConsent?->message }}</textarea>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="recaptchaTab" role="tabpanel"
                                                        aria-labelledby="recaptcha-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form
                                                                    action="{{ route('admin.update-google-recaptcha') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Recaptcha') }}</label>
                                                                        <select name="allow" id="allow"
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $googleRecaptcha?->status == 1 ? 'selected' : '' }}
                                                                                value="1">{{ __('admin.Enable') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $googleRecaptcha?->status == 0 ? 'selected' : '' }}
                                                                                value="0">{{ __('admin.Disable') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Captcha Site Key') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="site_key"
                                                                            value="{{ $googleRecaptcha?->site_key }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Captcha Secret Key') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="secret_key"
                                                                            value="{{ $googleRecaptcha?->secret_key }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="pusherTab" role="tabpanel"
                                                        aria-labelledby="pusher-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-pusher') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.App Id') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="app_id" value="{{ $pusher?->app_id }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.App Key') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="app_key"
                                                                            value="{{ $pusher?->app_key }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.App Secret') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="app_secret"
                                                                            value="{{ $pusher?->app_secret }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.App Cluster') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="app_cluster"
                                                                            value="{{ $pusher?->app_cluster }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="tab-pane fade" id="blogCommentTab" role="tabpanel"
                                                        aria-labelledby="blog-comment-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form
                                                                    action="{{ route('admin.update-facebook-comment') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Blog Comment Type') }}</label>
                                                                        <select name="comment_type" id="comment_type"
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $facebookComment?->comment_type == 1 ? 'selected' : '' }}
                                                                                value="1">
                                                                                {{ __('admin.Menual Comment') }}</option>
                                                                            <option
                                                                                {{ $facebookComment?->comment_type == 0 ? 'selected' : '' }}
                                                                                value="0">
                                                                                {{ __('admin.Facebook Comment') }}</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Facebook App Id') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="app_id"
                                                                            value="{{ $facebookComment?->app_id }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="tawkChatTab" role="tabpanel"
                                                        aria-labelledby="tawk-chat-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-tawk-chat') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Live Chat') }}</label>
                                                                        <select name="allow" id="tawk_allow"
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $tawkChat?->status == 1 ? 'selected' : '' }}
                                                                                value="1">{{ __('admin.Enable') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $tawkChat?->status == 0 ? 'selected' : '' }}
                                                                                value="0">{{ __('admin.Disable') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Widget Id') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="widget_id"
                                                                            value="{{ $tawkChat?->widget_id }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Property Id') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="property_id"
                                                                            value="{{ $tawkChat?->property_id }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="googleAnalyticTab" role="tabpanel"
                                                        aria-labelledby="google-analytic-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form
                                                                    action="{{ route('admin.update-google-analytic') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Google Analytic') }}</label>
                                                                        <select name="allow" id="tawk_allow"
                                                                            class="form-control">
                                                                            <option
                                                                                {{ $googleAnalytic?->status == 1 ? 'selected' : '' }}
                                                                                value="1">{{ __('admin.Enable') }}
                                                                            </option>
                                                                            <option
                                                                                {{ $googleAnalytic?->status == 0 ? 'selected' : '' }}
                                                                                value="0">{{ __('admin.Disable') }}
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Analytic Tracking Id') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="analytic_id"
                                                                            value="{{ $googleAnalytic?->analytic_id }}">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="customPaginationTab" role="tabpanel"
                                                        aria-labelledby="custom-pagination-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form
                                                                    action="{{ route('admin.update-custom-pagination') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50%">
                                                                                    {{ __('admin.Section Name') }}</th>
                                                                                <th width="50%">
                                                                                    {{ __('admin.Quantity') }}</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($customPaginations as $customPagination)
                                                                                <tr>
                                                                                    <td>{{ $customPagination?->page_name }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="number"
                                                                                            value="{{ $customPagination?->qty }}"
                                                                                            name="quantities[]"
                                                                                            class="form-control">
                                                                                        <input type="hidden"
                                                                                            value="{{ $customPagination?->id }}"
                                                                                            name="ids[]">
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>


                                                                    </table>
                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="socialLoginTab" role="tabpanel"
                                                        aria-labelledby="social-login-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-social-login') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Login with Facebook') }}</label>
                                                                        <div>
                                                                            @if ($socialLogin?->is_facebook == 1)
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    checked data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_facebook_login">
                                                                            @else
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_facebook_login">
                                                                            @endif

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Facebook App Id') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->facebook_client_id }}"
                                                                            class="form-control" name="facebook_app_id">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Facebook App Secret') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->facebook_secret_id }}"
                                                                            class="form-control"
                                                                            name="facebook_app_secret">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Facebook Redirect Url') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->facebook_redirect_url }}"
                                                                            class="form-control"
                                                                            name="facebook_redirect_url">
                                                                    </div>



                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Login with Gmail') }}</label>
                                                                        <div>
                                                                            @if ($socialLogin?->is_gmail == 1)
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    checked data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_gmail_login">
                                                                            @else
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_gmail_login">
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Gmail Client Id') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->gmail_client_id }}"
                                                                            class="form-control" name="gmail_client_id">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Gmail Secret Id') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->gmail_secret_id }}"
                                                                            class="form-control" name="gmail_secret_id">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Gmail Redirect Url') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $socialLogin?->gmail_redirect_url }}"
                                                                            class="form-control"
                                                                            name="gmail_redirect_url">
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="facebookPixelTab" role="tabpanel"
                                                        aria-labelledby="facebook-pixel-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-facebook-pixel') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Allow Facebook Pixel') }}</label>
                                                                        <div>
                                                                            @if ($facebookPixel?->status == 1)
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    checked data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_facebook_pixel">
                                                                            @else
                                                                                <input id="status_toggle" type="checkbox"
                                                                                    data-toggle="toggle"
                                                                                    data-on="{{ __('admin.Enable') }}"
                                                                                    data-off="{{ __('admin.Disable') }}"
                                                                                    data-onstyle="success"
                                                                                    data-offstyle="danger"
                                                                                    name="allow_facebook_pixel">
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            for="">{{ __('admin.Facebook App Id') }}</label>
                                                                        <input type="text"
                                                                            value="{{ $facebookPixel?->app_id }}"
                                                                            class="form-control" name="app_id">
                                                                    </div>
                                                                    <button
                                                                        class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="databaseTab" role="tabpanel"
                                                        aria-labelledby="database-generate-tab">
                                                        <div class="card m-0">
                                                            <div class="card-body">
                                                                <form action="{{ route('admin.update-database') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="alert alert-warning" role="alert">
                                                                        <p>{{ __('This feature not a regular feature, this will be use for version update. You can not trigger the button as your mind. When need to trigger the button we will mention on our version documentation') }}
                                                                        </p>
                                                                    </div>
                                                                    <button
                                                                        class="btn btn-primary">{{ __('Update Database') }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </section>
    </div>

    <script>
        let default_phone_code = "{{ $setting->default_phone_code }}"
        let arr = [{
                "name": "Afghanistan",
                "dial_code": "+93",
                "code": "AF"
            },
            {
                "name": "Aland Islands",
                "dial_code": "+358",
                "code": "AX"
            },
            {
                "name": "Albania",
                "dial_code": "+355",
                "code": "AL"
            },
            {
                "name": "Algeria",
                "dial_code": "+213",
                "code": "DZ"
            },
            {
                "name": "AmericanSamoa",
                "dial_code": "+1684",
                "code": "AS"
            },
            {
                "name": "Andorra",
                "dial_code": "+376",
                "code": "AD"
            },
            {
                "name": "Angola",
                "dial_code": "+244",
                "code": "AO"
            },
            {
                "name": "Anguilla",
                "dial_code": "+1264",
                "code": "AI"
            },
            {
                "name": "Antarctica",
                "dial_code": "+672",
                "code": "AQ"
            },
            {
                "name": "Antigua and Barbuda",
                "dial_code": "+1268",
                "code": "AG"
            },
            {
                "name": "Argentina",
                "dial_code": "+54",
                "code": "AR"
            },
            {
                "name": "Armenia",
                "dial_code": "+374",
                "code": "AM"
            },
            {
                "name": "Aruba",
                "dial_code": "+297",
                "code": "AW"
            },
            {
                "name": "Australia",
                "dial_code": "+61",
                "code": "AU"
            },
            {
                "name": "Austria",
                "dial_code": "+43",
                "code": "AT"
            },
            {
                "name": "Azerbaijan",
                "dial_code": "+994",
                "code": "AZ"
            },
            {
                "name": "Bahamas",
                "dial_code": "+1242",
                "code": "BS"
            },
            {
                "name": "Bahrain",
                "dial_code": "+973",
                "code": "BH"
            },
            {
                "name": "Bangladesh",
                "dial_code": "+880",
                "code": "BD"
            },
            {
                "name": "Barbados",
                "dial_code": "+1246",
                "code": "BB"
            },
            {
                "name": "Belarus",
                "dial_code": "+375",
                "code": "BY"
            },
            {
                "name": "Belgium",
                "dial_code": "+32",
                "code": "BE"
            },
            {
                "name": "Belize",
                "dial_code": "+501",
                "code": "BZ"
            },
            {
                "name": "Benin",
                "dial_code": "+229",
                "code": "BJ"
            },
            {
                "name": "Bermuda",
                "dial_code": "+1441",
                "code": "BM"
            },
            {
                "name": "Bhutan",
                "dial_code": "+975",
                "code": "BT"
            },
            {
                "name": "Bolivia, Plurinational State of",
                "dial_code": "+591",
                "code": "BO"
            },
            {
                "name": "Bosnia and Herzegovina",
                "dial_code": "+387",
                "code": "BA"
            },
            {
                "name": "Botswana",
                "dial_code": "+267",
                "code": "BW"
            },
            {
                "name": "Brazil",
                "dial_code": "+55",
                "code": "BR"
            },
            {
                "name": "British Indian Ocean Territory",
                "dial_code": "+246",
                "code": "IO"
            },
            {
                "name": "Brunei Darussalam",
                "dial_code": "+673",
                "code": "BN"
            },
            {
                "name": "Bulgaria",
                "dial_code": "+359",
                "code": "BG"
            },
            {
                "name": "Burkina Faso",
                "dial_code": "+226",
                "code": "BF"
            },
            {
                "name": "Burundi",
                "dial_code": "+257",
                "code": "BI"
            },
            {
                "name": "Cambodia",
                "dial_code": "+855",
                "code": "KH"
            },
            {
                "name": "Cameroon",
                "dial_code": "+237",
                "code": "CM"
            },
            {
                "name": "Canada",
                "dial_code": "+1",
                "code": "CA"
            },
            {
                "name": "Cape Verde",
                "dial_code": "+238",
                "code": "CV"
            },
            {
                "name": "Cayman Islands",
                "dial_code": "+ 345",
                "code": "KY"
            },
            {
                "name": "Central African Republic",
                "dial_code": "+236",
                "code": "CF"
            },
            {
                "name": "Chad",
                "dial_code": "+235",
                "code": "TD"
            },
            {
                "name": "Chile",
                "dial_code": "+56",
                "code": "CL"
            },
            {
                "name": "China",
                "dial_code": "+86",
                "code": "CN"
            },
            {
                "name": "Christmas Island",
                "dial_code": "+61",
                "code": "CX"
            },
            {
                "name": "Cocos (Keeling) Islands",
                "dial_code": "+61",
                "code": "CC"
            },
            {
                "name": "Colombia",
                "dial_code": "+57",
                "code": "CO"
            },
            {
                "name": "Comoros",
                "dial_code": "+269",
                "code": "KM"
            },
            {
                "name": "Congo",
                "dial_code": "+242",
                "code": "CG"
            },
            {
                "name": "Congo, The Democratic Republic of the Congo",
                "dial_code": "+243",
                "code": "CD"
            },
            {
                "name": "Cook Islands",
                "dial_code": "+682",
                "code": "CK"
            },
            {
                "name": "Costa Rica",
                "dial_code": "+506",
                "code": "CR"
            },
            {
                "name": "Cote d'Ivoire",
                "dial_code": "+225",
                "code": "CI"
            },
            {
                "name": "Croatia",
                "dial_code": "+385",
                "code": "HR"
            },
            {
                "name": "Cuba",
                "dial_code": "+53",
                "code": "CU"
            },
            {
                "name": "Cyprus",
                "dial_code": "+357",
                "code": "CY"
            },
            {
                "name": "Czech Republic",
                "dial_code": "+420",
                "code": "CZ"
            },
            {
                "name": "Denmark",
                "dial_code": "+45",
                "code": "DK"
            },
            {
                "name": "Djibouti",
                "dial_code": "+253",
                "code": "DJ"
            },
            {
                "name": "Dominica",
                "dial_code": "+1767",
                "code": "DM"
            },
            {
                "name": "Dominican Republic",
                "dial_code": "+1849",
                "code": "DO"
            },
            {
                "name": "Ecuador",
                "dial_code": "+593",
                "code": "EC"
            },
            {
                "name": "Egypt",
                "dial_code": "+20",
                "code": "EG"
            },
            {
                "name": "El Salvador",
                "dial_code": "+503",
                "code": "SV"
            },
            {
                "name": "Equatorial Guinea",
                "dial_code": "+240",
                "code": "GQ"
            },
            {
                "name": "Eritrea",
                "dial_code": "+291",
                "code": "ER"
            },
            {
                "name": "Estonia",
                "dial_code": "+372",
                "code": "EE"
            },
            {
                "name": "Ethiopia",
                "dial_code": "+251",
                "code": "ET"
            },
            {
                "name": "Falkland Islands (Malvinas)",
                "dial_code": "+500",
                "code": "FK"
            },
            {
                "name": "Faroe Islands",
                "dial_code": "+298",
                "code": "FO"
            },
            {
                "name": "Fiji",
                "dial_code": "+679",
                "code": "FJ"
            },
            {
                "name": "Finland",
                "dial_code": "+358",
                "code": "FI"
            },
            {
                "name": "France",
                "dial_code": "+33",
                "code": "FR"
            },
            {
                "name": "French Guiana",
                "dial_code": "+594",
                "code": "GF"
            },
            {
                "name": "French Polynesia",
                "dial_code": "+689",
                "code": "PF"
            },
            {
                "name": "Gabon",
                "dial_code": "+241",
                "code": "GA"
            },
            {
                "name": "Gambia",
                "dial_code": "+220",
                "code": "GM"
            },
            {
                "name": "Georgia",
                "dial_code": "+995",
                "code": "GE"
            },
            {
                "name": "Germany",
                "dial_code": "+49",
                "code": "DE"
            },
            {
                "name": "Ghana",
                "dial_code": "+233",
                "code": "GH"
            },
            {
                "name": "Gibraltar",
                "dial_code": "+350",
                "code": "GI"
            },
            {
                "name": "Greece",
                "dial_code": "+30",
                "code": "GR"
            },
            {
                "name": "Greenland",
                "dial_code": "+299",
                "code": "GL"
            },
            {
                "name": "Grenada",
                "dial_code": "+1473",
                "code": "GD"
            },
            {
                "name": "Guadeloupe",
                "dial_code": "+590",
                "code": "GP"
            },
            {
                "name": "Guam",
                "dial_code": "+1671",
                "code": "GU"
            },
            {
                "name": "Guatemala",
                "dial_code": "+502",
                "code": "GT"
            },
            {
                "name": "Guernsey",
                "dial_code": "+44",
                "code": "GG"
            },
            {
                "name": "Guinea",
                "dial_code": "+224",
                "code": "GN"
            },
            {
                "name": "Guinea-Bissau",
                "dial_code": "+245",
                "code": "GW"
            },
            {
                "name": "Guyana",
                "dial_code": "+595",
                "code": "GY"
            },
            {
                "name": "Haiti",
                "dial_code": "+509",
                "code": "HT"
            },
            {
                "name": "Holy See (Vatican City State)",
                "dial_code": "+379",
                "code": "VA"
            },
            {
                "name": "Honduras",
                "dial_code": "+504",
                "code": "HN"
            },
            {
                "name": "Hong Kong",
                "dial_code": "+852",
                "code": "HK"
            },
            {
                "name": "Hungary",
                "dial_code": "+36",
                "code": "HU"
            },
            {
                "name": "Iceland",
                "dial_code": "+354",
                "code": "IS"
            },
            {
                "name": "India",
                "dial_code": "+91",
                "code": "IN"
            },
            {
                "name": "Indonesia",
                "dial_code": "+62",
                "code": "ID"
            },
            {
                "name": "Iran, Islamic Republic of Persian Gulf",
                "dial_code": "+98",
                "code": "IR"
            },
            {
                "name": "Iraq",
                "dial_code": "+964",
                "code": "IQ"
            },
            {
                "name": "Ireland",
                "dial_code": "+353",
                "code": "IE"
            },
            {
                "name": "Isle of Man",
                "dial_code": "+44",
                "code": "IM"
            },
            {
                "name": "Israel",
                "dial_code": "+972",
                "code": "IL"
            },
            {
                "name": "Italy",
                "dial_code": "+39",
                "code": "IT"
            },
            {
                "name": "Jamaica",
                "dial_code": "+1876",
                "code": "JM"
            },
            {
                "name": "Japan",
                "dial_code": "+81",
                "code": "JP"
            },
            {
                "name": "Jersey",
                "dial_code": "+44",
                "code": "JE"
            },
            {
                "name": "Jordan",
                "dial_code": "+962",
                "code": "JO"
            },
            {
                "name": "Kazakhstan",
                "dial_code": "+77",
                "code": "KZ"
            },
            {
                "name": "Kenya",
                "dial_code": "+254",
                "code": "KE"
            },
            {
                "name": "Kiribati",
                "dial_code": "+686",
                "code": "KI"
            },
            {
                "name": "Korea, Democratic People's Republic of Korea",
                "dial_code": "+850",
                "code": "KP"
            },
            {
                "name": "Korea, Republic of South Korea",
                "dial_code": "+82",
                "code": "KR"
            },
            {
                "name": "Kuwait",
                "dial_code": "+965",
                "code": "KW"
            },
            {
                "name": "Kyrgyzstan",
                "dial_code": "+996",
                "code": "KG"
            },
            {
                "name": "Laos",
                "dial_code": "+856",
                "code": "LA"
            },
            {
                "name": "Latvia",
                "dial_code": "+371",
                "code": "LV"
            },
            {
                "name": "Lebanon",
                "dial_code": "+961",
                "code": "LB"
            },
            {
                "name": "Lesotho",
                "dial_code": "+266",
                "code": "LS"
            },
            {
                "name": "Liberia",
                "dial_code": "+231",
                "code": "LR"
            },
            {
                "name": "Libyan Arab Jamahiriya",
                "dial_code": "+218",
                "code": "LY"
            },
            {
                "name": "Liechtenstein",
                "dial_code": "+423",
                "code": "LI"
            },
            {
                "name": "Lithuania",
                "dial_code": "+370",
                "code": "LT"
            },
            {
                "name": "Luxembourg",
                "dial_code": "+352",
                "code": "LU"
            },
            {
                "name": "Macao",
                "dial_code": "+853",
                "code": "MO"
            },
            {
                "name": "Macedonia",
                "dial_code": "+389",
                "code": "MK"
            },
            {
                "name": "Madagascar",
                "dial_code": "+261",
                "code": "MG"
            },
            {
                "name": "Malawi",
                "dial_code": "+265",
                "code": "MW"
            },
            {
                "name": "Malaysia",
                "dial_code": "+60",
                "code": "MY"
            },
            {
                "name": "Maldives",
                "dial_code": "+960",
                "code": "MV"
            },
            {
                "name": "Mali",
                "dial_code": "+223",
                "code": "ML"
            },
            {
                "name": "Malta",
                "dial_code": "+356",
                "code": "MT"
            },
            {
                "name": "Marshall Islands",
                "dial_code": "+692",
                "code": "MH"
            },
            {
                "name": "Martinique",
                "dial_code": "+596",
                "code": "MQ"
            },
            {
                "name": "Mauritania",
                "dial_code": "+222",
                "code": "MR"
            },
            {
                "name": "Mauritius",
                "dial_code": "+230",
                "code": "MU"
            },
            {
                "name": "Mayotte",
                "dial_code": "+262",
                "code": "YT"
            },
            {
                "name": "Mexico",
                "dial_code": "+52",
                "code": "MX"
            },
            {
                "name": "Micronesia, Federated States of Micronesia",
                "dial_code": "+691",
                "code": "FM"
            },
            {
                "name": "Moldova",
                "dial_code": "+373",
                "code": "MD"
            },
            {
                "name": "Monaco",
                "dial_code": "+377",
                "code": "MC"
            },
            {
                "name": "Mongolia",
                "dial_code": "+976",
                "code": "MN"
            },
            {
                "name": "Montenegro",
                "dial_code": "+382",
                "code": "ME"
            },
            {
                "name": "Montserrat",
                "dial_code": "+1664",
                "code": "MS"
            },
            {
                "name": "Morocco",
                "dial_code": "+212",
                "code": "MA"
            },
            {
                "name": "Mozambique",
                "dial_code": "+258",
                "code": "MZ"
            },
            {
                "name": "Myanmar",
                "dial_code": "+95",
                "code": "MM"
            },
            {
                "name": "Namibia",
                "dial_code": "+264",
                "code": "NA"
            },
            {
                "name": "Nauru",
                "dial_code": "+674",
                "code": "NR"
            },
            {
                "name": "Nepal",
                "dial_code": "+977",
                "code": "NP"
            },
            {
                "name": "Netherlands",
                "dial_code": "+31",
                "code": "NL"
            },
            {
                "name": "Netherlands Antilles",
                "dial_code": "+599",
                "code": "AN"
            },
            {
                "name": "New Zealand",
                "dial_code": "+64",
                "code": "NZ"
            },
            {
                "name": "Nicaragua",
                "dial_code": "+505",
                "code": "NI"
            },
            {
                "name": "Niger",
                "dial_code": "+227",
                "code": "NE"
            },
            {
                "name": "Nigeria",
                "dial_code": "+234",
                "code": "NG"
            },
            {
                "name": "Niue",
                "dial_code": "+683",
                "code": "NU"
            },
            {
                "name": "Norfolk Island",
                "dial_code": "+672",
                "code": "NF"
            },
            {
                "name": "Northern Mariana Islands",
                "dial_code": "+1670",
                "code": "MP"
            },
            {
                "name": "Norway",
                "dial_code": "+47",
                "code": "NO"
            },
            {
                "name": "Oman",
                "dial_code": "+968",
                "code": "OM"
            },
            {
                "name": "Pakistan",
                "dial_code": "+92",
                "code": "PK"
            },
            {
                "name": "Palau",
                "dial_code": "+680",
                "code": "PW"
            },
            {
                "name": "Palestinian Territory, Occupied",
                "dial_code": "+970",
                "code": "PS"
            },
            {
                "name": "Panama",
                "dial_code": "+507",
                "code": "PA"
            },
            {
                "name": "Papua New Guinea",
                "dial_code": "+675",
                "code": "PG"
            },
            {
                "name": "Paraguay",
                "dial_code": "+595",
                "code": "PY"
            },
            {
                "name": "Peru",
                "dial_code": "+51",
                "code": "PE"
            },
            {
                "name": "Philippines",
                "dial_code": "+63",
                "code": "PH"
            },
            {
                "name": "Pitcairn",
                "dial_code": "+872",
                "code": "PN"
            },
            {
                "name": "Poland",
                "dial_code": "+48",
                "code": "PL"
            },
            {
                "name": "Portugal",
                "dial_code": "+351",
                "code": "PT"
            },
            {
                "name": "Puerto Rico",
                "dial_code": "+1939",
                "code": "PR"
            },
            {
                "name": "Qatar",
                "dial_code": "+974",
                "code": "QA"
            },
            {
                "name": "Romania",
                "dial_code": "+40",
                "code": "RO"
            },
            {
                "name": "Russia",
                "dial_code": "+7",
                "code": "RU"
            },
            {
                "name": "Rwanda",
                "dial_code": "+250",
                "code": "RW"
            },
            {
                "name": "Reunion",
                "dial_code": "+262",
                "code": "RE"
            },
            {
                "name": "Saint Barthelemy",
                "dial_code": "+590",
                "code": "BL"
            },
            {
                "name": "Saint Helena, Ascension and Tristan Da Cunha",
                "dial_code": "+290",
                "code": "SH"
            },
            {
                "name": "Saint Kitts and Nevis",
                "dial_code": "+1869",
                "code": "KN"
            },
            {
                "name": "Saint Lucia",
                "dial_code": "+1758",
                "code": "LC"
            },
            {
                "name": "Saint Martin",
                "dial_code": "+590",
                "code": "MF"
            },
            {
                "name": "Saint Pierre and Miquelon",
                "dial_code": "+508",
                "code": "PM"
            },
            {
                "name": "Saint Vincent and the Grenadines",
                "dial_code": "+1784",
                "code": "VC"
            },
            {
                "name": "Samoa",
                "dial_code": "+685",
                "code": "WS"
            },
            {
                "name": "San Marino",
                "dial_code": "+378",
                "code": "SM"
            },
            {
                "name": "Sao Tome and Principe",
                "dial_code": "+239",
                "code": "ST"
            },
            {
                "name": "Saudi Arabia",
                "dial_code": "+966",
                "code": "SA"
            },
            {
                "name": "Senegal",
                "dial_code": "+221",
                "code": "SN"
            },
            {
                "name": "Serbia",
                "dial_code": "+381",
                "code": "RS"
            },
            {
                "name": "Seychelles",
                "dial_code": "+248",
                "code": "SC"
            },
            {
                "name": "Sierra Leone",
                "dial_code": "+232",
                "code": "SL"
            },
            {
                "name": "Singapore",
                "dial_code": "+65",
                "code": "SG"
            },
            {
                "name": "Slovakia",
                "dial_code": "+421",
                "code": "SK"
            },
            {
                "name": "Slovenia",
                "dial_code": "+386",
                "code": "SI"
            },
            {
                "name": "Solomon Islands",
                "dial_code": "+677",
                "code": "SB"
            },
            {
                "name": "Somalia",
                "dial_code": "+252",
                "code": "SO"
            },
            {
                "name": "South Africa",
                "dial_code": "+27",
                "code": "ZA"
            },
            {
                "name": "South Sudan",
                "dial_code": "+211",
                "code": "SS"
            },
            {
                "name": "South Georgia and the South Sandwich Islands",
                "dial_code": "+500",
                "code": "GS"
            },
            {
                "name": "Spain",
                "dial_code": "+34",
                "code": "ES"
            },
            {
                "name": "Sri Lanka",
                "dial_code": "+94",
                "code": "LK"
            },
            {
                "name": "Sudan",
                "dial_code": "+249",
                "code": "SD"
            },
            {
                "name": "Suriname",
                "dial_code": "+597",
                "code": "SR"
            },
            {
                "name": "Svalbard and Jan Mayen",
                "dial_code": "+47",
                "code": "SJ"
            },
            {
                "name": "Swaziland",
                "dial_code": "+268",
                "code": "SZ"
            },
            {
                "name": "Sweden",
                "dial_code": "+46",
                "code": "SE"
            },
            {
                "name": "Switzerland",
                "dial_code": "+41",
                "code": "CH"
            },
            {
                "name": "Syrian Arab Republic",
                "dial_code": "+963",
                "code": "SY"
            },
            {
                "name": "Taiwan",
                "dial_code": "+886",
                "code": "TW"
            },
            {
                "name": "Tajikistan",
                "dial_code": "+992",
                "code": "TJ"
            },
            {
                "name": "Tanzania, United Republic of Tanzania",
                "dial_code": "+255",
                "code": "TZ"
            },
            {
                "name": "Thailand",
                "dial_code": "+66",
                "code": "TH"
            },
            {
                "name": "Timor-Leste",
                "dial_code": "+670",
                "code": "TL"
            },
            {
                "name": "Togo",
                "dial_code": "+228",
                "code": "TG"
            },
            {
                "name": "Tokelau",
                "dial_code": "+690",
                "code": "TK"
            },
            {
                "name": "Tonga",
                "dial_code": "+676",
                "code": "TO"
            },
            {
                "name": "Trinidad and Tobago",
                "dial_code": "+1868",
                "code": "TT"
            },
            {
                "name": "Tunisia",
                "dial_code": "+216",
                "code": "TN"
            },
            {
                "name": "Turkey",
                "dial_code": "+90",
                "code": "TR"
            },
            {
                "name": "Turkmenistan",
                "dial_code": "+993",
                "code": "TM"
            },
            {
                "name": "Turks and Caicos Islands",
                "dial_code": "+1649",
                "code": "TC"
            },
            {
                "name": "Tuvalu",
                "dial_code": "+688",
                "code": "TV"
            },
            {
                "name": "Uganda",
                "dial_code": "+256",
                "code": "UG"
            },
            {
                "name": "Ukraine",
                "dial_code": "+380",
                "code": "UA"
            },
            {
                "name": "United Arab Emirates",
                "dial_code": "+971",
                "code": "AE"
            },
            {
                "name": "United Kingdom",
                "dial_code": "+44",
                "code": "GB"
            },
            {
                "name": "United States",
                "dial_code": "+1",
                "code": "US"
            },
            {
                "name": "Uruguay",
                "dial_code": "+598",
                "code": "UY"
            },
            {
                "name": "Uzbekistan",
                "dial_code": "+998",
                "code": "UZ"
            },
            {
                "name": "Vanuatu",
                "dial_code": "+678",
                "code": "VU"
            },
            {
                "name": "Venezuela, Bolivarian Republic of Venezuela",
                "dial_code": "+58",
                "code": "VE"
            },
            {
                "name": "Vietnam",
                "dial_code": "+84",
                "code": "VN"
            },
            {
                "name": "Virgin Islands, British",
                "dial_code": "+1284",
                "code": "VG"
            },
            {
                "name": "Virgin Islands, U.S.",
                "dial_code": "+1340",
                "code": "VI"
            },
            {
                "name": "Wallis and Futuna",
                "dial_code": "+681",
                "code": "WF"
            },
            {
                "name": "Yemen",
                "dial_code": "+967",
                "code": "YE"
            },
            {
                "name": "Zambia",
                "dial_code": "+260",
                "code": "ZM"
            },
            {
                "name": "Zimbabwe",
                "dial_code": "+263",
                "code": "ZW"
            }
        ];

        let html = ''
        arr.forEach(element => {
            html +=
                `<option value="${element.code}" ${element.code == default_phone_code ? 'selected' : ''}>${element.name} (${element.dial_code})</option>`
        });

        $("#default_phone_code").html(html);
    </script>
@endsection
