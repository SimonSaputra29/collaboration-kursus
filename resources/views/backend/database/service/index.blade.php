@extends('backend.layouts')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Services</h4>
                    <a href="{{ route('service.create') }}" class=" ms-auto">
                    <button class="btn btn-primary btn-round">
                        <i class="fa fa-plus"></i>
                        Add
                    </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabel Daftar Gambar -->
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Overview</th>
                                <th>Description</th>
                                <th>link</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Overview</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($services as $item)
                                <tr>
                                    <td><img src="{{ asset($item->image) }}" alt="Image" style="width: 100px;"></td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Edit untuk Modal -->
                                            <button type="button" class="btn btn-link btn-primary btn-lg"
                                                data-action="{{ route('superiorityImage.update', $image->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- Tombol Hapus -->
                                            <form id="delete-form-{{ $image->id }}" action="{{ route('superiorityImage.destroy', $image->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="{{ route('service.update', $item->id) }}">
                                            <button type="button" class="btn btn-link btn-danger" title="Remove"                                                >
                                                <i class="fa fa-times"></i>
                                            </button>
                                            </a>

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
