@extends('admin.parent')

@section('content')

<form action="{{route('siswa.store')}}" method="post">
@csrf
@method('POST')

<label for="" class="form-control">Nama siswa</label>
<input type="text"class="form-control" name="name" >

<label for="" class="form-control">Phone siswa</label>
<input type="number"class="form-control" name="phone" >

<label for="" class="form-control">Address siswa</label>
<textarea class="form-control" cols="30" rows="10"
name="address" ></textarea>

<button type="submit" class="btn btn-primary mt-3"> Add Siswa</button>

</form>

@endsection

