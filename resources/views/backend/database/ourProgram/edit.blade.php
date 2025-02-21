@extends('backend.layouts')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Edit ourProgram</div>
                    <div class="card-body">
                        <form action="{{ route('ourProgram.update', $ourProgram->id) }}" method="POST" enctype="multipart/form-data">
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
                                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $ourProgram->title) }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @if ($ourProgram->image)
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Current Image</label>
                                        <br>
                                        <img src="{{ asset($ourProgram->image) }}" alt="Gambar ourProgram" class="img-thumbnail"
                                            width="200">
                                    </div>
                                @endif
                                <div class="col mb-3">
                                    <label for="overview" class="form-label">Overview</label>
                                    <textarea name="overview" id="overview" class="form-control @error('overview') is-invalid @enderror" rows="4" required>{{ old('overview', $ourProgram->overview) }}</textarea>
                                    @error('overview')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="link" class="form-label">Link</label>
                                <textarea name="link" id="link" class="form-control @error('link') is-invalid @enderror" rows="4" required>{{ old('link', $ourProgram->link) }}</textarea>
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
@endsection
