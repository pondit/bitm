@extends('layouts.master')

@section('css')

    <!-- Timeline CSS -->
    <link href="{!! asset('dist/css/timeline.css') !!}" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="{!! asset('bower_components/morrisjs/morris.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! asset('dist/css/sb-admin-2.css') !!}" rel="stylesheet">

@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Articles</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Articles List view table
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>serial no</th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $key=>$article)
                                <tr class="gradeA">
                                    <td>{!! $article->id !!}</td>
                                    <td>{!! $article->title !!}</td>
                                    <td>{!! $article->summary !!}</td>
                                    <td>{!! $article->created_at !!}</td>
                                    <td>
                                        <a href="{{url('article/'.$article->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i>Update</a>
                                        {!! Form::open(array('method'=>'DELETE', 'route'=>array('article.destroy',$article->id)))!!}
                                        {!! Form::submit('Delete', array('class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("Are you sure want to Delete?");'))!!}
                                        {!! Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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
        <!-- DataTables JavaScript -->
    <script src="{!! asset('bower_components/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true,
                "order": [[ 3, "desc" ]]
            });
        });
    </script>

@endsection
