@extends('layouts.master')
@section('content')
<div class="container-fluid page__heading-container">
  <div class="page__heading d-flex align-items-end">
      <div class="flex">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active"
                      aria-current="page">Role Manager</li>
              </ol>
          </nav>
          <h1 class="m-0">Create</h1>
      </div>
      <a href="{{url('users')}}" class="btn btn-info ml-3">All Users</a>
  </div>
</div>
<div class="container-fluid page__container">
  <div class="card card-form">
      <div class="row no-gutters">
          <div class="col-lg-2 card-body">
          </div>
          <div class="col-lg-8 card-form__body card-body">
              @include('partials.alerts')
              <form method="POST" id="validate-form" enctype="multipart/form-data" action="{{ url('users')}}/{{$user->id }}">
                  @csrf
                  @method('PUT')
                  <div class="col-12 col-md-10 mb-3">
                      <label for="name" class="required">Title</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Payment Plan name" name="name" value="{{$user->name ?? ''}}">
                      <div class="invalid-feedback">Please provide title.</div>
                  </div>
                  <div class="col-12 col-md-10 mb-3">
                    <label for="email" class="required">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Payment Plan Title" name="email" value="{{$user->email ?? ''}}">
                    <div class="invalid-feedback">Please provide title.</div>
                </div>



                        @foreach ($role as $value)
                        <div class="col-12 col-md-4 mb-1">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="invalidCheck0{{ $value->id ?? '' }}" type="checkbox" <?=in_array($value->id,$user_role)?'checked':''?> value="{{ $value->id }}" name="roles[]">
                                    <label class="custom-control-label"
                                        for="invalidCheck0{{ $value->id ?? '' }}">
                                        {{ $value->name ?? '' }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endforeach



                  <div class="col-12 col-md-10 mb-3">
                      <button id="form-validate" class="btn btn-primary" type="submit">Update</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
