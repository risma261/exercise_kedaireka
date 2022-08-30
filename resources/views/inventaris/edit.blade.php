@extends('layout.main')
@section('konten')
  <body>
    <form action="{{route('inventaris.update', $inventaris->id)}}" method="post" class="m-6">
        @csrf
        @method('PUT')
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
        <input class="form-control" id="exampleFormControlInput1" placeholder="Isi Nama" value="{{$inventaris ->KodeBarang}}" name="kodebarang">
        </div>
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
        <input class="form-control" id="exampleFormControlInput1" value="{{$inventaris->JenisBarang}}" name="jenisbarang"></input>
        </div>
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Merk Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{$inventaris->MerkBarang}}" placeholder="isi jenis barang" name="merkbarang"></input>
        </div>
        <div class="m-3">
        <label for="jumlah" class="form-label">Isi Jumlah</label>
        <input type="number" class="form-control" id="jumlah" value="1"  value="{{$inventaris->Jumlah}}" placeholder="isi jenis barang" name="jumlah"></input>
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection
