@extends('layouts.app')

@section('content')

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
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
                    <a href="{{asset('betmixsongscreate')}}" class="btn btn-dark">Add new Music</a>
                    <div class="container">
                        <h2>Beat Mix Music List</h2>
    
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Song</th>
                              <th>Action</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($data as $fetch)
                                <tr>
                                <td>{{$fetch->name}}</td>
                                <td>{{$fetch->songslist}}</td>
                                <td><a href="{{url('betmixsongsdelete/'.$fetch->id)}}">
                                        <i class="fa fa-trash" aria-hidden="true" style="font-size: 20px;"></i>
                                    </a>
                                    <a href="{{url('betmixsongsedit/'.$fetch->id)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"  style="font-size: 20px;"></i>
                                    </a>
                            </td>
                                <td></td>
                            </tr>
                                @endforeach
                           
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->


</body>
@endsection
