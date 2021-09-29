@extends('layouts.settings.default')
@push('css_lib')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('vendor/summernote/summernote-bs4.min.css')}}">
    {{--dropzone--}}
    <link rel="stylesheet" href="{{asset('vendor/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
@endpush
@section('settings_title',trans('lang.web_settings'))
@section('settings_content')
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="card shadow-sm">
        <div class="card-header">
            <ul class="nav nav-tabs d-flex flex-row align-items-start card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{!! url('settings/web_settings') !!}"><i class="fas fa-envelope mr-2"></i>{{trans('lang.web_settings')}}@if(setting('mail_driver') === 'smtp')
                            <span class="badge ml-2 badge-success">{{trans('lang.active')}}</span>@endif
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            {!! Form::open(['url' => ['settings/update'], 'method' => 'patch']) !!}
            <div class="row">
                <div class="d-flex flex-column col-sm-12 col-md-8">

                <!-- Phone -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('phone', trans("lang.user_phone_number"), ['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('phone', setting('phone'),  ['class' => 'form-control','placeholder'=>  trans("lang.user_phone_number_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.user_phone_number_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('website', trans("lang.user_web"), ['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('website', setting('website'),  ['class' => 'form-control','placeholder'=>  trans("lang.web_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.web_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('email', trans("lang.user_email"),['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('email', setting('email'),  ['class' => 'form-control','placeholder'=>  trans("lang.user_email_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.user_email_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('address', trans("lang.user_address"),['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('address', setting('address'),  ['class' => 'form-control','placeholder'=>  trans("lang.user_address_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.user_address_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Latitude -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('latitude', trans("lang.latitude"),['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('latitude', setting('latitude'),  ['class' => 'form-control','placeholder'=>  trans("lang.latitude_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.latitude_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Longitude -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('longitude', trans("lang.longitude"),['class' => 'col-4 control-label text-right']) !!}
                        <div class="col-8">
                            {!! Form::text('longitude', setting('longitude'),  ['class' => 'form-control','placeholder'=>  trans("lang.longitude_placeholder")]) !!}
                            <div class="form-text text-muted">
                                {{ trans("lang.longitude_help") }}
                            </div>
                        </div>
                    </div>

                    <!-- Theme Color -->
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('web_theme_color', trans("lang.web_theme_color"), ['class' => 'col-md-4 control-label text-right']) !!}
                        <div class="col-8">
                            <div class="input-group colorpicker-component">
                                {!! Form::text('web_theme_color', setting('web_theme_color'),  ['class' => 'form-control','placeholder'=>  trans("lang.web_theme_color_placeholder"),'autocomplete' => 'off']) !!}
                                <div class=" input-group-append ">
                                    <span class="input-group-addon input-group-text"><i class="fas fa-square" style="color:{{ setting('web_theme_color') }}"></i></span>
                                </div>
                            </div>
                            <div class="form-text text-muted">
                                {{ trans("lang.web_theme_color_help") }}
                            </div>
                        </div>
                    </div> 
                </div>
            
                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn bg-{{setting('theme_color')}} mx-md-3 my-lg-0 my-xl-0 my-md-0 my-2">
                        <i class="fas fa-save"></i> {{trans('lang.save')}} {{trans('lang.web_app_setting')}}</button>
                    <a href="{!! route('users.index') !!}" class="btn btn-default"><i class="fas fa-undo"></i> {{trans('lang.cancel')}}</a>
                </div>

            </div>
            {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    @include('layouts.media_modal',['collection'=>null])
@endsection
@push('scripts_lib')
    <!-- iCheck -->

    <!-- select2 -->
    <script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    {{--dropzone--}}
    <script src="{{asset('vendor/dropzone/min/dropzone.min.js')}}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
        <script src="{{asset('vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script type="text/javascript">
            $(".colorpicker-component, input[name$='color']").colorpicker({
                format: 'hex',
            });
            $('.colorpicker-component').on('colorpickerChange', function (event) {
                $(this).find('.fa-square').css('color', event.color.toString());
            });
            Dropzone.autoDiscover = false;
            var dropzoneFields = [];
        </script>
@endpush
