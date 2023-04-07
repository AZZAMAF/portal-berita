@extends('admin.parent')

@section('content')
     <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Breadcrumbs</h5>

              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href={{route('home')}}><i class ="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('slider.index')}}">SLIDER</a></li>
                  <li class="breadcrumb-item active">CREATE</li>
                </ol>

              </nav>

              <div class="card">
                <div class="card-body">
                      <!-- Multi Columns Form -->
              <form class="row g-3" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="col-md-12">
                  <label for="inputUrlname" class="form-label">url name</label>
                  <input type="url" class="form-control" id="inputName5" value="{{old('string')}}" name="url"required>
                </div>


                <div class="col-md-12">
                    <label for="inputImageSlider" class="form-label">Image name</label>
                    <input type="file" class="form-control" id="inputImageNews" value="{{old('image')}}" name="image" required>
                  </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
                </div>
              </div>

            </div>
          </div>

@endsection

