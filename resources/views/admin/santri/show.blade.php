@extends('admin.parent')

@section('content')
    <label for=""class="form-label">Name siswa</label>
    <input type="text" class="form-label"value="{{ $santri->name }}" readonly>

    <label for=""class="form-label m-3">Phone siswa</label>
    <input type="text" class="form-label"value="{{ $santri->phone }}" readonly>


<label for="" class="form-control">City Santri</label>
<input type="string"class="form-control" name="city" value="{{$santri->city}}" >

<label for="" class="form-control">Date Santri</label>
<input type="date"class="form-control" name="date" value="{{$santri->date}}">

    <label for=""class="form-label m-3">Address Siswa</label>
    <textarea class="form-label m-3" cols="30" rows="10" readonly>{!! $santri->address !!}</textarea>

    <a href="{{route('santri.index')}}" class="btn btn-outline-info">BACK</a>
@endsection
