@extends('backend.layouts')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Category Service</h4>
                    <a href="{{ route('ourProgram.create') }}" class="ms-auto">
                        <button class="btn btn-primary btn-round">
                            <i class="fa fa-plus"></i>
                            Add Category Service
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
                                <th>Title</th>
                                <th>Overview</th>
                                <th>Image</th>
                                <th>link</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Overview</th>
                                <th>Image</th>
                                <th>link</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ourPrograms as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->overview }}</td>
                                    <td><img src="{{ asset($data->image) }}" alt="Image" style="width: 100px;"></td>
                                    <td>
                                        {!! $data->link ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>' !!}
                                    </td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Edit untuk Modal -->
                                            <a href="{{ route('ourProgram.edit', $data->id) }}">
                                                <button type="button" class="btn btn-link btn-primary btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <!-- Tombol Hapus -->
                                            <form id="delete-form-{{ $data->id }}"
                                                action="{{ route('ourProgram.destroy', $data->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button type="button" class="btn btn-link btn-danger" title="Remove"
                                                onclick="confirmDelete({{ $data->id }})">
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
