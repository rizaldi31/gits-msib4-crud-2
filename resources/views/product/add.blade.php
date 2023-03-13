@extends('app')

@section('content')
    <form action="{{ url('/api/product') }}" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
            <div id="emailHelp" class="form-text">Nama produk tidak boleh lebih dari 255</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="product_description">
        </div>
        <select class="form-select" aria-label="Default select example" name="category_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{$item->id}} - {{ $item->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
@endsection
