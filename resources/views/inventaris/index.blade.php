@extends('layout.main')
@section('konten')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h1>Latihan Laravel</h1>
    <a href="{{route('inventaris.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>Kode Barang</th>
      <th>Jenis Barang</th>
      <th>Merk Barang</th>
      <th>Jumlah</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inventariss as $no => $inventaris)
    <tr>
      <td>{{ $no + 1 }}</td>
      <td>{{ $inventaris->KodeBarang }}</td>
      <td>{{ $inventaris->JenisBarang }}</td>
      <td>{{ $inventaris->MerkBarang }}</td>
      <td>{{ $inventaris->Jumlah }}</td>
      <td>
      <a href="{{route('inventaris.edit', $inventaris->id)}}" type="button" class="btn btn-success">edit</a>
      <form action="{{route('inventaris.destroy', $inventaris->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">hapus</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{  $inventariss -> links() }}
        </div>
    </div>
@endsection
