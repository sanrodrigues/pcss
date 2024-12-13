@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            @hasSection('page-title')
            <h3 class="mb-0">@yield('page-title')</h3>
            @endif

            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>
        <div class="col-sm-6">
            Actions
        </div>
    </div> <!--end::Row-->
@endsection
