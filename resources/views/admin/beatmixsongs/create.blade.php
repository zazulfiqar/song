@extends('layouts.app')

@section('content')

<!------ Include the above in your HEAD tag ---------->


<body class="home">

    <div class="">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                @include('layouts.header')
                <div class="user-dashboard">
                  @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                    <a href="{{asset('betmixsongs')}}" class="btn btn-dark">List of Music</a>
                    <div class="container">
                        <h2>Beat Mix Music Create</h2>
    
                        <form action="{{asset('betmixsongsstore')}}"  method="post" enctype="multipart/form-data">
                          @csrf 
                          @method('post')
                          
                          
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="input" class="form-control" placeholder="Enter title" name="name">
                          </div>

                          <div class="form-group">
                            <label for="title">Mp3 File</label>
                            <input type="file" class="form-control" placeholder="Enter title" name="songslist">
                          </div>
                         
                          
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                      </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->


</body>
@endsection
