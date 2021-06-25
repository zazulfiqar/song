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
                    <h1>Hello,  {{ Auth::user()->name }} </h1>
                    <div class="row">
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
@endsection
