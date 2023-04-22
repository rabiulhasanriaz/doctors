@extends('backend.master.app')
@section('tips','menu-open')
@section('tips_add','active')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        @if (session()->has('delMsg'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('delMsg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Education Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Education Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 offset-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tips Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('backend.tips.tips-add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title" required>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Context</label>
                    <textarea id="summernote" name="context" required>
                      
                    </textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Seq.</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Image</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{!! nl2br($blog->context) !!}</td>
                                <td>
                                  <img src="{{ $blog->image }}" alt="">
                                </td>
                                <td>
                                  <a href="" class="btn btn-warning btn-sm">Edit</a> | 
                                  <a href="{{ route('backend.tips.blog-delete', $blog->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?')">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    
      
    </section>
    <!-- /.content -->
    </div>
@endsection
@section('custom_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="{{asset('assets/backend/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('custom_script')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );
        } );
    </script>

<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
     
    })
  </script>
@endsection