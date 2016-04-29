@extends('layouts.master')

@section('css')

        <!-- Timeline CSS -->
<link href="{!! asset('dist/css/timeline.css') !!}" rel="stylesheet">


<!-- Morris Charts CSS -->
<link href="{!! asset('bower_components/morrisjs/morris.css') !!}" rel="stylesheet">

<link href="{!! asset('dist/css/sb-admin-2.css') !!}" rel="stylesheet">

@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Article</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::model($editArticle, ['method'=>'PATCH','route' => ['article.update',$editArticle->id]]) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Title') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control','required','autofocus']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('sub_title', 'Sub-Title') !!}
                                    {!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('html_summary', 'Summery') !!}
                                    {!! Form::textarea('html_summary', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('html_details', 'Details') !!}
                                    {!! Form::textarea('html_details', null, ['class' => 'form-control']) !!}
                                </div>
                                {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                                {!! Form::reset('Reset', array('class'=>'btn btn-warning')) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('js')
    <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('html_details'),{
            uiColor: '#AADC6E'
        };
    </script>
    <script>CKEDITOR.replace('html_summary');</script>
@endsection
