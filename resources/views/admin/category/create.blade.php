@extends('layouts.app')
@section('title','Category')

@push('css')

@endpush

@section('content')
<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Add New Category</h6>
        </div>
    </div>
    <div class="card-content">
        <form role="form" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data" class="text-start">
            @csrf
            @method('POST')
            <label class="form-label mt-3">Category Name</label>
            <div class="input-group input-group-outline">
                <input type="text" name="name" class="form-control">
            </div>
            <label class="form-label my-2">Category Image</label>
            <div class="input-group input-group-outline">
                <input type="file" name="image" id="editimage" class="form-control">
            </div>
            <div class="form-group mt-3">
                <a href="{{ route('admin.category.index') }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>


@endsection

@push('js')

@endpush