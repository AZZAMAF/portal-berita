@extends('admin.parent')

@section('content')

<div class="container card">
    <div class="col-md-4" >
        <a href="{{route('home')}}" class="btn btn-warning mt-3 center">Back to Home</a>

    </div>

<div>
    <a href="{{route('siswa.create')}}" class="btn btn-primary mt-3 center"> Create siswa</a>

</div>

<div class="container">
    <table class="table table-striped">
        <thead>
           <td>No</td>
           <td>Name</td>
           <td>Phone</td>
           <td>Address</td>
           <td>Action</td>
        </thead>
        <body>
            @foreach ( $siswa as $row )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->address}}</td>
                <td><a href="{{route('siswa.show',$row->id)}}}" class="btn btn-primary">
                    Show
                </a>
                <a href="{{route('siswa.edit',$row->id)}}" class="btn btn-warning">
                    Edit
                </a>

                <form action="{{route('siswa.destroy',$row->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger m-1" type="submit">
                        Delete
                    </button>
                </form>
                </td>

            </tr>
            @endforeach
        </body>
    </table>
</div>


</div>
@endsection
