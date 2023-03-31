@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Import Excel File') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.word.import')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Choose excel file, have 5 information: Word - Pronunciation - Class - Definition - Example </label>
        <br>
        <input type="file" name="file">
        <br><br>
        <button type="submit" class="btb btn-outline-info rounded">Import</button>
    </form>
@endsection
