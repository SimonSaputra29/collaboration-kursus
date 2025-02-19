@extends('backend.layouts')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Team</h4>
                    <a href="{{ route('team.create') }}" class="ms-auto">
                        <button class="btn btn-primary btn-round">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Github</th>
                                <th>Instagram</th>
                                <th>LinkedIn</th>
                                <th>Phone</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $member)
                                <tr>
                                    <td>
                                        <img src="{{ asset($member->image) }}" alt="Profile Image" width="50" height="50" class="rounded-circle">
                                    </td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->role }}</td>
                                    <td>
                                        @if($member->github)
                                            <a href="{{ $member->github }}" target="_blank" class="text-primary">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @else
                                            <i class="fas fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($member->instagram)
                                            <a href="{{ $member->instagram }}" target="_blank" class="text-danger">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        @else
                                            <i class="fas fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($member->linkedin)
                                            <a href="{{ $member->linkedin }}" target="_blank" class="text-info">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        @else
                                            <i class="fas fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>{{ $member->phone_number ?? '-' }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="{{ route('team.edit', $member->id) }}" class="btn btn-link btn-primary btn-lg">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('team.destroy', $member->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
