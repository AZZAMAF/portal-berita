@extends('admin.parent')
@section('content')

<form action="{{route('siswa.update',$siswa->id)}}" method="post">
@csrf
@method('PUT')

<label for="" class="form-control m-1">Nama siswa</label>
<input type="text"class="form-control" name="name"
value="{{$siswa->name}}" >

<label for="" class="form-control m-1">Phone siswa</label>
<input type="number"class="form-control" name="phone" value="{{$siswa->phone}}">

<label for="" class="form-control m-1">Address siswa</label>
<textarea class="form-control" cols="30" rows="10" name="address" value="{{$siswa->address}}"></textarea>



<button type="submit" class="btn btn-primary mt-3"> Add Siswa</button>

</form>

@endsection
