@extends('backend.layouts')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title ms-4">Why Us</h4>
                    <a href="{{ route('whyUs.create') }}" class="ms-auto">
                        <button class="btn btn-primary btn-round">
                            <i class="fa fa-plus"></i>
                            Add Why Us
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
                                <th>Title</th>
                                <th>Description</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
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
                                            <a href="{{ route('whyUs.edit', $item->id) }}">
                                                <button type="button" class="btn btn-link btn-primary btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
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
