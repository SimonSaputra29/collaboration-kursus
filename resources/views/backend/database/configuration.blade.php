@extends('backend.layouts')

@section('content')
    <div class="container mt-10 ">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header bg-primary text-white">Configuration Settings</div>

                    <div class="card-body">
                        <form action="{{ route('configuration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Path Gambar -->
                            <div class="row">
                                <!-- Path Gambar -->
                                <div class="col-md mb-3">
                                    <label for="path" class="form-label">Website Image</label>
                                    <input type="file" name="path" id="path"
                                        class="form-control @error('path') is-invalid @enderror"
                                        onchange="previewImage('path', 'pathPreview')">
                                    @error('path')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika gambar ada di database, tampilkan -->
                                    @if (isset($configuration->path))
                                        <img id="pathPreview" src="{{ asset($configuration->path) }}" alt="Gambar Lama"
                                            class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathPreview" src="" alt="Preview Gambar" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>

                                <!-- Path Logo -->
                                <div class="col-md mb-3">
                                    <label for="path_logo" class="form-label">Title Image</label>
                                    <input type="file" name="path_logo" id="path_logo"
                                        class="form-control @error('path_logo') is-invalid @enderror"
                                        onchange="previewImage('path_logo', 'pathLogoPreview')">
                                    @error('path_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika logo ada di database, tampilkan -->
                                    @if (isset($configuration->path_logo))
                                        <img id="pathLogoPreview" src="{{ asset($configuration->path_logo) }}"
                                            alt="Logo Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathLogoPreview" src="" alt="Preview Logo" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>
                            </div>

                            <!-- Website Name -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="website_name" class="form-label">Website Name</label>
                                    <input type="text" name="website_name"
                                        class="form-control @error('website_name') is-invalid @enderror"
                                        value="{{ old('website_name', $configuration->website_name ?? '') }}">
                                    @error('website_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $configuration->title ?? '') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror">{{ old('meta_keywords', $configuration->meta_keywords ?? '') }}</textarea>
                                    @error('meta_keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="meta_descriptions" class="form-label">Meta Descriptions</label>
                                    <textarea name="meta_descriptions" class="form-control @error('meta_descriptions') is-invalid @enderror">{{ old('meta_descriptions', $configuration->meta_descriptions ?? '') }}</textarea>
                                    @error('meta_descriptions')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="footer" class="form-label">Footer</label>
                                    <input type="text" name="footer"
                                        class="form-control @error('footer') is-invalid @enderror"
                                        value="{{ old('footer', $configuration->footer ?? '') }}">
                                    @error('footer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="path_alert" class="form-label">Title Image</label>
                                    <input type="file" name="path_alert" id="path_alert"
                                        class="form-control @error('path_alert') is-invalid @enderror"
                                        onchange="previewImage('path_alert', 'pathLogoPreview')">
                                    @error('path_alert')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <!-- Cek jika logo ada di database, tampilkan -->
                                    @if (isset($configuration->path_alert))
                                        <img id="pathLogoPreview" src="{{ asset($configuration->path_alert) }}"
                                            alt="Logo Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathLogoPreview" src="" alt="Preview Logo" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif

                                    <div class="col-md">
                                        <div class="form-group form-group-default">
                                            <label for="pdf">Upload PDF</label>
                                            <input type="file" name="pdf" id="pdf"
                                                class="form-control @error('pdf') is-invalid @enderror"
                                                onchange="previewFileName('pdf', 'pdfPreview')">
                                            @error('pdf')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div id="pdfPreview" class="text-muted mt-2">
                                            @if ($configuration->pdf)
                                                Current PDF: <a href="{{ asset($configuration->pdf) }}"
                                                    target="_blank">{{ basename($configuration->pdf) }}</a>
                                            @else
                                                <span>No PDF uploaded yet.</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Tambahkan input lainnya sesuai kebutuhan -->

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary w-100">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
