@extends('layout.layout')

@section('navigationbar')
    @include('layout.navigation')
@endsection



@section('contents')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-8">
          <div class="col-sm-8">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-8">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class=""></i></button>
              </div>
            </div>

            <form method="post" action="{{ route('projects.store') }}">
                {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" required name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control"  required name="description" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select" name="status">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Date Created</label>
                <input type="date" id="inputProjectLeader" required name="date" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Sponser</label>
                <input type="text" id="inputProjectLeader" name="project_sponsor" class="form-control">
              </div><div class="form-group">
                <label for="inputProjectLeader">Project Type</label>
                <input type="text" id="inputProjectLeader" name="project_type" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Create new Porject" class="btn btn-success">
            </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


@endsection

@section('modals')

@endsection

@section('pagejs')
@endsection
