@extends('layouts.apps')

@section('content')
    <!-- <div class="container">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="row justify-content-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="card-header">Dashboard</div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                @if (session('status'))
    <div class="alert alert-success" role="alert">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {{ session('status') }}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
    @endif

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                You are logged in!
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->

    <div class="container-fluid px-4 pt-5">
        <div class="d-flex flex-row justify-content-end">
            <div class="d-flex flex-column justify-contet-end gap-0">
                <h1 class="text-wrap w-2 fs-1 fst-italic text-light"><span
                        class="fs-4 d-flex flex-row justify-content-end text-warning">Data</span>
                    Division
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <form class="border rounded-pill">
                    <div class="input-group">
                        <input class="form-control border-0 rounded-pill bg-transparent text-white" type="text"
                            placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-warning border rounded-pill" id="btnNavbarSearch" type="button"><i
                                class="fas fa-search"></i>
                            Enter</button>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <div class="text-light d-flex flex-row gap-2 my-3">
                    <button class="border border-light rounded-pill p-2 btn btn-dark nav-link dropdown-toggle text-light"
                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Start
                        Period</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <span class="p-2">to</span>
                    <button class="border border-light rounded-pill p-2 btn btn-dark nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">End
                        Period</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="d-flex flex-row gap-4 mb-4">
                    <button class="border rounded-pill py-3 px-5 btn btn-info"><i
                            class="fa-solid fa-print fa-lg px-2 py-2"></i>Print</button>
                    <button class="border rounded-pill p-3 btn btn-success"><i
                            class="fa-solid fa-download fa-lg px-2"></i>Export
                        to
                        Excel</button>
                    <a href="/add-division"> <button class="border rounded-pill btn btn-secondary py-3 px-5"><i
                                class="fa-solid fa-plus fa-lg px-2"></i>Add</button></a>
                </div>
            </div>
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/create-department" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="code" class="col-form-label">Department Code</label>
                                    <input type="text" class="form-control" id="code" name="code">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Department Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="col-form-label">Description</label>
                                    <textarea class="form-control" id="desc" name="desc"></textarea>
                                </div>
                                <div class="mb-3 d-flex flex-column">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select class="border rounded-5 p-2 w-50" name="status" id="status">
                                        <option value="1" selected>Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Department Code</th>
                            <th>Division Code</th>
                            <th>Division Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Department Code</th>
                            <th>Division Code</th>
                            <th>Division Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($divisions as $division)
                            <tr>
                                <td>{{ $division->department->kode }}</td>
                                <td>{{ $division->kode }}</td>
                                <td>{{ $division->nama }}</td>
                                <td>{{ $division->keterangan }}</td>
                                <td>{{ $division->status ? 'Active' : 'Inactive' }}</td>
                                <td class="d-flex flex-row">
                                    <i class="fa-solid fa-eye fa-lg"></i>
                                    <a href="/edit/division={{ $division->id }}"><i
                                            class="fa-solid fa-pen-to-square fa-lg text-black"></i></a>
                                    <i class="fa-solid fa-print fa-lg"></i>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $division->id }}"><i
                                            class="fa-solid fa-trash fa-lg text-black"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        @foreach ($divisions as $division)
            <div class="modal fade" id="deleteModal{{ $division->id }}" tabindex="-1"
                aria-labelledby="deleteModalLabel{{ $division->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="deleteModalLabel{{ $division->id }}">Delete Warning!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure delete this data?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="/delete-division/{{ $division->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
