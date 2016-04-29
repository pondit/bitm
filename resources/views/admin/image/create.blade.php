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
                <h1 class="page-header">Add Image</h1>
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
                                {!! Form::open(['route' => 'imageupload.store', 'files'=> true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('img_path', 'Image') !!}
                                        {!! Form::file('img_path') !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('img_caption', 'Image Caption') !!}
                                        {!! Form::text('img_caption', null, ['class' => 'form-control']) !!}
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