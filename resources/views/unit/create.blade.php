@extends('layouts.master')
@section('content')
<div class="container-fluid page__heading-container">
  <div class="page__heading d-flex align-items-end">
      <div class="flex">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active"
                      aria-current="page">User Manager</li>
              </ol>
          </nav>
          <h1 class="m-0">Create</h1>
      </div>
      <a href= "{{ url('units') }}" class="btn btn-info ml-3">All Units</a>

  </div>
</div>
<div class="container-fluid page__container">
  <div class="card card-form">
      <div class="row no-gutters">
          <div class="col-lg-2 card-body">
          </div>
          <div class="col-lg-8 card-form__body card-body">
              @include('partials.alerts')
              <form method="POST" id="validate-form" enctype="multipart/form-data" action="{{ url ('units') }}">
                  @csrf
                  @if(session()->has('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div>
                  @endif
                  <div class="col-12 col-md-10 mb-3">
                      <label for="name" class="required">Name</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Unit Name" name="name" value="{{old('name') ?? ''}}">
                      <div class="invalid-feedback">Please provide Unit Name.</div>
                  </div>
                  <div class="col-12 col-md-10 mb-3">
                      <button id="form-validate" class="btn btn-primary" type="submit">Create</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
