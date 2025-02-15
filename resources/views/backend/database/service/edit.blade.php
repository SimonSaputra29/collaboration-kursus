@extends('backend.layouts')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Service</div>
                <div class="card-body">
                    <form action="{{ route('superiorityImage.update', $superiorityImage->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if($superiorityImage->image)
                            <div class="mb-3">
                                <label class="form-label">Gambar Saat Ini</label>
                                <br>
                                <img src="{{ asset($superiorityImage->image) }}" alt="Gambar superiorityImage" class="img-thumbnail" width="200">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
