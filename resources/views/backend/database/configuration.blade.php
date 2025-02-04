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
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="logo" class="form-label">Logo Web</label>
                                    <input type="file" name="logo" id="logo"
                                        class="form-control @error('logo') is-invalid @enderror"
                                        onchange="previewImage('logo', 'logoPreview')">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if (isset($configuration->logo))
                                        <img id="logoPreview" src="{{ asset($configuration->logo) }}" alt="Gambar Lama"
                                            class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="logoPreview" src="" alt="Preview Gambar" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>
                                <div class="col-md mb-3">
                                    <label for="title_logo" class="form-label">Judul Logo</label>
                                    <input type="file" name="title_logo" id="title_logo"
                                        class="form-control @error('title_logo') is-invalid @enderror"
                                        onchange="previewImage('title_logo', 'pathLogoPreview')">
                                    @error('title_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if (isset($configuration->title_logo))
                                        <img id="pathLogoPreview" src="{{ asset($configuration->title_logo) }}"
                                            alt="Logo Lama" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <img id="pathLogoPreview" src="" alt="Preview Logo" class="mt-2"
                                            style="max-width: 200px; display: none;">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="website_name" class="form-label">Nama Web</label>
                                    <input type="text" name="website_name"
                                        class="form-control @error('website_name') is-invalid @enderror"
                                        value="{{ old('website_name', $configuration->website_name ?? '') }}">
                                    @error('website_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <label for="title" class="form-label">Judul</label>
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
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address', $configuration->address ?? '') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <label for="phone_number" class="form-label">Nomor Hp</label>
                                    <input type="integer" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        value="{{ old('phone_number', $configuration->phone_number ?? '') }}">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <label for="email_address" class="form-label">Alamat Email</label>
                                    <input type="email" name="email_address"
                                        class="form-control @error('email_address') is-invalid @enderror"
                                        value="{{ old('email_address', $configuration->email_address ?? '') }}">
                                    @error('email_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" name="instagram"
                                        class="form-control @error('instagram') is-invalid @enderror"
                                        value="{{ old('instagram', $configuration->instagram ?? '') }}">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input type="text" name="youtube"
                                        class="form-control @error('youtube') is-invalid @enderror"
                                        value="{{ old('youtube', $configuration->youtube ?? '') }}">
                                    @error('youtube')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <label for="map" class="form-label">Map</label>
                                    <input type="text" name="map"
                                        class="form-control @error('map') is-invalid @enderror"
                                        value="{{ old('map', $configuration->map ?? '') }}">
                                    @error('map')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary w-100">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
