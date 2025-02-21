@extends('backend.layouts')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Edit Faq</div>
                    <div class="card-body">
                        <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="image" class="form-label">Upload Gambar</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror" value="{{ old('description', $faq->description) }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @if ($faq->image)
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Current Image</label>
                                        <br>
                                        <img src="{{ asset($faq->image) }}" alt="Gambar faq" class="img-thumbnail"
                                            width="200">
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <label for="description" class="form-label">Upload Description</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description', $faq->description) }}</textarea>
                                @error('description')
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
