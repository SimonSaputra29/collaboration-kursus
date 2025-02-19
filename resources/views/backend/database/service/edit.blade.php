@extends('backend.layouts')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Edit Service</div>
                    <div class="card-body">
                        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="category_service_id" class="form-label">Kategori Service</label>
                                <select name="category_service_id" id="category_service_id"
                                    class="form-control @error('category_service_id') is-invalid @enderror">
                                    <option value="" disabled>Pilih Kategori</option>
                                    @foreach ($categoryService as $category)
                                        <option value="{{ $category->id }}" 
                                            {{ $service->category_service_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_service_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $service->title) }}" required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="overview" class="form-label">Overview</label>
                                <input type="text" name="overview" id="overview"
                                    class="form-control @error('overview') is-invalid @enderror"
                                    value="{{ old('overview', $service->overview) }}" required>
                                @error('overview')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" id="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="4" required>{{ old('description', $service->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="url" name="link" id="link"
                                    class="form-control @error('link') is-invalid @enderror"
                                    value="{{ old('link', $service->link) }}" required>
                                @error('link')
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
    @include('backend.components.ckeditor')
@endsection
