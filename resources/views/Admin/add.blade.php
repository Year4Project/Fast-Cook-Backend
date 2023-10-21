@extends("layouts.admin_app")

@section("content")

<div class="container-fluid">
    
    <!-- Content Row -->
    <div class="row align-items-end">

        <form method="post" action="{{ route('admin.add') }}">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required placeholder="Name">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" required placeholder="Username">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="{{ old('email')}}" name="email" required placeholder="Email">
                <div style="color: red">{{ $errors->first('email')}}</div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required placeholder="Password">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

    </div>
</div>



@endsection