@extends('admin.layouts.master')
@section('content')



<div class="card-body">
    <div class="container table-responsive text-center row">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>

              <th>Role-name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                  @foreach ($role as $row)

                  <td>{{$row->name }}</td>
                  <td>
                  <div>
                    <a href="{{url('delete')}}/{{ $row->id }}" class="btn btn-danger">delete</a>
                    <a href="{{url('update')}}" class="btn btn-info" data-toggle="modal" data-target="#edit">
                        Edit
                      </a>
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
</div>
@endsection
