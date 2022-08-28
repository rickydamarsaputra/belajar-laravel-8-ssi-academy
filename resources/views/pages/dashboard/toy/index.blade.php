@extends('layout.dashboard')
@section('page_title', 'List Toy')

@section('page_content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>@yield('page_title') Page</h1>
    <a href="{{ route('toy.create.view') }}" class="btn btn-primary">
      <i class="fas fa-plus-circle"></i> Add Toy
    </a>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($toys as $toy)
                  <tr>
                    <td>{{ ($loop->iteration + $toys->firstItem() - 1) }}</td>
                    <td>{{ $toy->name }}</td>
                    <td>{{ $toy->stock }}</td>
                    <td>Rp.{{ number_format($toy->price) }}</td>
                    <td class="d-flex justify-content-center">
                      <a href="{{ route('toy.delete', $toy->id) }}" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-info mx-2">Detail</a>
                      <a href="#" class="btn btn-success">Update</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            {{ $toys->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection