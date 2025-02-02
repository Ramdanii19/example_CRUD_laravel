@extends('layout')

@section('konten')

<div class="d-flex">
  <h4>Data Siswa</h4>
  <div class="ms-auto">
    <a class="btn btn-success" href="{{route('siswa.tambah')}}">Tambah Siswa</a>
  </div>
</div>

<table class="table">
  <tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Jenis Kelamin</th>
    <th>Hobi</th>
    <th>Aksi</th>
  </tr>
  @foreach($siswa as $no=>$data)
  <tr>
    <td>{{ $no+1 }}</td>
    <td>{{$data->nis}}</td>
    <td>{{$data->nama}}</td>
    <td>{{$data->alamat}}</td>
    <td>{{$data->no_hp}}</td>
    <td>{{$data->jenis_kelamin}}</td>
    <td>{{$data->hobi}}</td>
    <td>
      <a href="{{route('siswa.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
      <a href="{{route('siswa.delete', $data->id)}}" class="btn btn-sm btn-danger">Delete </a>
    </td>
  </tr>
  @endforeach
</table>
@endsection