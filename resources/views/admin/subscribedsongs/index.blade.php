@extends('layouts.app')

@section('content')

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="">
        <div class="row">
            <div class="col-md-3 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-9 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                @include('layouts.header')
                
                   
                   
                        <h2>Beat Mix Purchased List</h2>
    
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
                              @foreach($data as $fetch2)

                              @php $fetch3=App\beatmixsongs::where('id',$fetch2->song_id)->get()@endphp
                                

                                @foreach($fetch3 as $fetch)

                                <tr>
                                <td>{{$fetch->name}}</td>
                                <td>{{$fetch->songslist}}</td>
                                <td>
                                  
                                  <li track="{{asset('beatmixmusic/'.$fetch->songslist)}}" cover="images/051621-cover.png" title="{{$fetch->songslist}}"></li>
                                </td>
                                
                                <td>Play</td>
                            </tr>
                                @endforeach
                                
                                @endforeach
                           
                          </tbody>
                        </table>
                      </div>
                
            </div>
        </div>

    </div>



    <!-- Modal -->


</body>
@endsection
