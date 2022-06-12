@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dishes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dishes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/dish/create" class="btn btn-success">Create</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                  <table id="dishes" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Dish Name</th>
                      <th>Category Name</th>
                      <th>Created</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dishes as $dish)
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $dish->category->name }}</td>
                        <td>{{ $dish->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="form-row">
                                <a href="/dish/{{ $dish->id }}/edit" class="btn btn-warning" style="height: 40px; margin-right: 10px;" >Edit</a>
                                <form action="{{ route('dish.destroy',$dish->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
