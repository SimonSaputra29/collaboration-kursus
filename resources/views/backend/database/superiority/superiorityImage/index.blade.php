@extends('backend.layouts')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Superiority Image</h4>
                    <a class="ms-auto" href="{{ route('superiorityImage.create') }}">
                        <button class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i>
                            Add image
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
                                <th>Image</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($superiorityImage as $image)
                                <tr>
                                    <td><img src="{{ asset($image->image) }}" alt="Image" style="width: 100px;"></td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Edit untuk Modal -->
                                            <a href="{{ route('superiorityImage.edit', $image->id) }}">
                                            <button type="button" class="btn btn-link btn-primary btn-lg"
                                                >
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            </a>
                                            <!-- Tombol Hapus -->
                                            <form id="delete-form-{{ $image->id }}"
                                                action="{{ route('superiorityImage.destroy', $image->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button type="button" class="btn btn-link btn-danger" title="Remove"
                                                onclick="confirmDelete({{ $image->id }})">
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
