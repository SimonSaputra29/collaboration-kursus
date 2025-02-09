@extends('backend.layouts')

@section('content')
<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Superiority Image</div>
                <div class="card-body">
                    <form action="{{ route('categoryService.update', $categoryService->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $categoryService->title) }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="overview" class="form-label">Overview</label>
                            <input type="text" name="overview" id="overview"
                                class="form-control @error('overview') is-invalid @enderror"
                                value="{{ old('overview', $categoryService->overview) }}">
                            @error('overview')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
