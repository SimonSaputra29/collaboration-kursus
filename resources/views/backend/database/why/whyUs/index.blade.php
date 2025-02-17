@extends('backend.layouts')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Kenapa Kita</h4>
                    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Tambah Kenapa Kita
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal Tambah Gambar -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">New</span>
                                    <span class="fw-light">Kenapa Kita</span>
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Silakan unggah gambar keunggulan baru di sini.</p>
                                <form method="POST" action="{{ route('whyUs.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            @error('title') is-invalid @enderror>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <input type="text" name="description" id="description" class="form-control"
                                            @error('description') is-invalid @enderror>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Pilih Gambar</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Daftar Gambar -->
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($whyUs as $item)
                                <tr>
                                    <td><img src="{{ asset($item->image) }}" alt="Image" style="width: 100px;"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Edit untuk Modal -->
                                            <button type="button" class="btn btn-link btn-primary btn-lg"
                                                data-bs-toggle="modal" data-bs-target="#editRowModal"
                                                data-image="{{ asset($item->image) }}"
                                                data-action="{{ route('whyUs.update', $item->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- Modal Edit Gambar -->
                                            <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0">
                                                            <h5 class="modal-title">
                                                                <span class="fw-mediumbold">Edit</span>
                                                                <span class="fw-light"> Kenapa Kita </span>
                                                            </h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="small">Silakan unggah data baru untuk menggantikan
                                                                data yang ada.</p>
                                                            <form id="editForm" method="POST"
                                                                action="{{ route('whyUs.update', $item->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="title">Judul</label>
                                                                    <input type="text" name="title" id="title"
                                                                        class="form-control"
                                                                        @error('title') is-invalid @enderror
                                                                        value="{{ old('title', $item->title ?? '') }}">
                                                                    @error('title')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="description">Deskripsi</label>
                                                                    <input type="text" name="description"
                                                                        id="description" class="form-control"
                                                                        @error('description') is-invalid @enderror
                                                                        value="{{ old('description', $item->description ?? '') }}">
                                                                    @error('description')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image">Pilih Gambar</label>
                                                                    <input type="file" name="image" id="editImage"
                                                                        class="form-control @error('image') is-invalid @enderror">
                                                                    @error('image')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="modal-footer border-0">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tombol Hapus -->
                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ route('whyUs.destroy', $item->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button type="button" class="btn btn-link btn-danger" title="Remove"
                                                onclick="confirmDelete({{ $item->id }})">
                                                <i class="fa fa-times"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Script untuk mengisi data gambar pada modal edit
        $('#editRowModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Tombol yang memicu modal
            var imageSrc = button.data('image'); // Ambil URL gambar
            var action = button.data('action'); // Ambil URL form action (update)

            var modal = $(this);
            modal.find('form').attr('action', action); // Set form action untuk update
            modal.find('#editImage').val(''); // Reset input file
        });
    </script>
@endpush
