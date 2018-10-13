@extends('layouts.user')
@section('title', 'add house')
@section('content')
        <!-- Main content edit.blade.php-->
    <section class="content container-fluid">    
        <div class="box box-info" style="position: relative; left: 0px; top: 0px;">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Report</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="{{route('reports.update',[$report->id])}}" method="post">
              <input type="hidden" name="_method" value="put">                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{$report->email}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{$report->subject}}">
                </div>
                
                <div class="form-group">
                  <textarea name="description" class="form-control" id="" cols="30" rows="5">
                      {{$report->description}}
                  </textarea>
                </div>
              
            
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            </form>
            </div>
          </div>
    
    </section>
    <!-- /.content -->
@endsection
