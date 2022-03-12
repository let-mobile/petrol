@if (\Session::has('success'))
    <div class="alert alert-dismissible bg-success text-white border-0 fade show mb-3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Success - </strong> {!! \Session::get('success') !!}
        @php
            Session::forget('success');
        @endphp
    </div>
@endif
@if (\Session::has('error'))
    <div class="alert alert-dismissible bg-danger text-white border-0 mb-3 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Error - </strong> {!! \Session::get('error') !!}
        @php
            Session::forget('error');
        @endphp
</div>
@endif
@if (\Session::has('warning'))
    <div class="alert alert-dismissible bg-warning text-white border-0 mb-3 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Warning - </strong>{!! \Session::get('warning') !!}
        @php
            Session::forget('warning');
        @endphp
    </div>
@endif
@if (\Session::has('delete'))
    <div class="alert alert-dismissible bg-warning text-white border-0 mb-3 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Delete - </strong>{!! \Session::get('delete') !!}
        @php
            Session::forget('warning');
        @endphp
    </div>
@endif
@if ($errors->any())
<div class="alert alert-soft-warning d-flex  align-items-center mb-3" role="alert">
    <i class="material-icons mr-3">error_outline</i>
    <div class="text-body">
        <strong>Please Fill All the fields below.</strong> 
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error ?? '' }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif