@extends('layout.dashboard')
@section('page_title', 'Add Toy')

@section('page_content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>@yield('page_title') Page</h1>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('toy.create.action') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Toy Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="enter toy name...">
                @error('name')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">Toy Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="enter toy stock...">
                @error('stock')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Toy Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="enter toy price...">
                @error('price')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Toy Description</label>
                <textarea id="desc" name="desc"></textarea>
                @error('desc')<small class="form-text text-danger">{{ $message }}</small>@enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    $('#desc').summernote();
  });
</script>
@endpush