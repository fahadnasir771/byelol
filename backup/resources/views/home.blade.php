@extends('layouts.app')
<style type="text/css">
    .pagination{
        margin: 0;
        float: right;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body" style="overflow-x: scroll;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Log Off At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0 @endphp
                            @foreach($users as $user)
                                @php $i++ @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{date('l jS \of F Y h:i:s A', strtotime($user->created_at))}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.setInterval(function(){
            $.ajax({
                method:'get',
                url:'{{route('user.data')}}',
                data:{_token:'{{csrf_token()}}'},
                success:function(response){
                    $('.card').html(response);
                }
            });
        }, 1000);

        window.setInterval(function(){
            location.reload();
        }, 100000);
    </script>
@endsection


