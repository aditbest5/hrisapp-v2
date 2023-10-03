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

    <div class="container-fluid px-5 pt-5">
        <div class="d-flex flex-row justify-content-end">
            <div class="d-flex flex-column justify-contet-end gap-0">
                <h1 class="text-wrap w-2 fs-1 fst-italic text-light"><span
                        class="fs-4 d-flex flex-row justify-content-end text-warning">Employee</span>
                    List
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
                    <a href="/add-employee"> <button class="border rounded-pill btn btn-secondary py-3 px-5"><i
                                class="fa-solid fa-plus fa-lg px-2"></i>Add</button></a>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Employee Code</th>
                            <th>Employee Name</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Department</th>
                            <th>Date of Joining</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Employee Code</th>
                            <th>Employee Name</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Department</th>
                            <th>Date of Joining</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->kode }}</td>
                                <td>{{ $employee->nama }}</td>
                                <td>{{ $employee->jobtitle->kode }} - {{ $employee->jobtitle->nama }}</td>
                                <td>{{ $employee->status_karyawan }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->hp }}</td>
                                <td>{{ $employee->jobtitle->division->department->kode }}</td>
                                <td>{{ $employee->tgl_kontrak }}</td>
                                <td class="d-flex flex-row">
                                    <i class="fa-solid fa-eye fa-lg"></i>
                                    <a href="/edit-employee/{{ $employee->id }}"><i
                                            class="fa-solid fa-pen-to-square fa-lg text-black"></i></a>
                                    <i class="fa-solid fa-print fa-lg"></i>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $employee->id }}"><i
                                            class="fa-solid fa-trash fa-lg text-black"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @foreach ($employees as $employee)
            <!-- Modal -->
            <div class="modal fade" id="deleteModal{{ $employee->id }}" tabindex="-1"
                aria-labelledby="deleteModalLabel{{ $employee->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="deleteModalLabel{{ $employee->id }}">Delete Warning!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure delete this data?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="/delete-employee/{{ $employee->id }}" method="POST">
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
