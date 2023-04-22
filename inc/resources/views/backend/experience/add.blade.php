@extends('backend.master.app')
@section('exp','menu-open')
@section('exp_add','active')
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
            <h3 class="card-title">Add Experience Details</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('backend.education.education-add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" class="form-control" name="desig" id="exampleInputEmail1" placeholder="Enter Designation" required>
                  </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Institution</label>
                <input type="text" class="form-control" name="institution" id="exampleInputEmail1" placeholder="Enter Instituion" required>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Duration(Start)</label>
                        <select name="startYear" id="" class="form-control" required>
                          <option value="">Year</option>
                          @foreach ($years as $year)
                              <option value="{{ $year }}">{{ $year }}</option>
                          @endforeach
                      </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Duration(End)</label>
                        <select name="endYear" id="" class="form-control">
                            <option value="">Year</option>
                            @foreach ($years as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="year" id="exampleInputEmail1" placeholder="Enter Year" required> --}}
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Continuing</label>
                        <input type="checkbox" class="form-control" name="current" id="exampleInputEmail1">
                      </div>
                  </div>
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Responsibilities</label>
                <textarea id="summernote" name="res">
                  
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
                            <th>Instituin</th>
                            <th>Major</th>
                            <th>Year</th>
                            <th>Grade. Point/Remarks</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $edu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $edu->institution }}</td>
                            <td>
                                @if ($edu->major == 1)
                                    Science 
                                @elseif($edu->major == 2)
                                    Commerce
                                @elseif($edu->major == 3)
                                    Arts
                                @elseif($edu->major == 4)
                                    Others
                                @endif
                            <td>{{ $edu->year }}</td>
                            <td>{{ $edu->grading_point ?? $edu->remark }}</td>
                            <td></td>
                        </tr>
                        @endforeach --}}
                        
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

  <div class="modal fade" id="practice_modal">
    <div class="modal-dialog">
       <form id="companydata">
            <div class="modal-content">
            <input type="hidden" id="color_id" name="color_id" value="">
            <div class="modal-body">
                <input type="text" name="name" id="name" value="" class="form-control">
            </div>
            <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
        </div>
       </form>
    </div>
</div>
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