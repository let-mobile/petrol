@extends('layouts.master')
@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page">All Units</li>
                </ol>
            </nav>
            <h1 class="m-0">List</h1>
        </div>
        <a href="{{ route('create_unit') }}" class="btn btn-success ml-3">Add Unit</a>
    </div>
</div>
<div class="container-fluid page__container">
    <div class="card">
        <div class="table-reponsive">
            <div class="container table-responsive text-center row">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($unit->isNotEmpty())
                    @foreach ($unit as $units)
                    <tr>
                      <td> {{ $units->id ?? '' }} </td>
                      <td> {{ $units->name ?? '' }} </td>
                      <td> {{ $units->created_at ?? '' }}</td>
                      <td>
                        <a href="{{ url ('unit/edit/'.$units->id) }}"  class="btn btn-success">Edit</a>
                        <a href="{{ url ('unit/destroy/'.$units->id) }}"  class="btn btn-danger">Delete</a>

                      </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
