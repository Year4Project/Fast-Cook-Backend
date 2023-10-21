@extends("layouts.admin_app")

@section("content")

<div class="container-fluid">
    

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Manager</h1>
        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Manager</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Of Manager</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color: black">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($userTable as $userTable)
                        <tr>
                            <th>{{ $userTable->id }}</th>
                            <th>{{ $userTable->name }}</th>
                            <th>{{ $userTable->email }}</th>
                            <th>{{ $userTable->role }}</th>
                            <th>{{ $userTable->status }}</th>
                            <th>
                                <a href="" class="btn btn-danger">Delete</a>
                                <a href="" class="btn btn-primary">Update</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



@endsection