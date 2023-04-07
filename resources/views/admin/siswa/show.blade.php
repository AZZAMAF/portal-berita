@extends('admin.parent')

@section('content')
    <label for=""class="form-label">Name siswa</label>
    <input type="text" class="form-label"value="{{ $siswa->name }}" readonly>

    <label for=""class="form-label m-3">Phone siswa</label>
    <input type="text" class="form-label"value="{{ $siswa->phone }}" readonly>

    <label for=""class="form-label m-3">Address Siswa</label>
    <textarea class="form-label m-3" cols="30" rows="10" readonly>{!! $siswa->address !!}</textarea>

    <a href="{{route('siswa.index')}}" class="btn btn-outline-info">BACK</a>
@endsection
