@extends('admin.parent')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">slider</h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('slider.index') }}">slider</a></li>
                </ol>
            </nav>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <td><img src="{{$row->image}}" class="w-25" alt="">
                    </td>
                    <td>
                        <a href="{{route('slider.show',$row->id)}}" class="btn btn-primary"></a>
                    </td>
                @endforeach
            @endif

            <div class="container d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('slider.create') }}">
                    <i class="bx bxs-plus-square"><span> Add slider</span></i>
                </a>
            </div>

            <div class="card container mt-3">
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Image</th>
                                <th scope="col">url</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $slider as $row )
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>
                                    <img src="{{$row->image}}" class="w-25" alt="">
                                </td>
                                <td>{{$row->url}}</td>
                                <td>
                                    <a href="{{route('slider.show',$row->id)}}" class="btn btn-primary m-2">
                                    <i class="bi bi-eye"></i>show
                                </a>
                                <a href="{{route('slider.edit',$row->id)}}" class="btn btn-warning m-2">
                                    <i class="bi bi-eye"></i>edit
                                </a>
                                <form action="{{route('slider.destroy',$row->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>delete
                                    </button>
                                </form>


                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- End Table with stripped rows -->
            </div>

        </div>
    </div>
@endsection
