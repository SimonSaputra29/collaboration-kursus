@extends('backend.layouts')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Services</h4>
                    <a href="{{ route('service.create') }}" class="ms-auto">
                        <button class="btn btn-primary btn-round">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabel Daftar Service -->
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Overview</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $item)
                                <tr>
                                    <td>{{ $item->category->title }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->overview }}</td>
                                    <td>{!! Str::limit($item->description, 50) !!}</td>
                                    <td>
                                        {!! $item->link ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>' !!}
                                    </td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('service.edit', $item->id) }}"
                                                class="btn btn-link btn-primary btn-lg">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('service.destroy', $item->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
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
