


@if(\Illuminate\Support\Facades\Auth::guard('web')->check())
    <p>You are log in as user</p>
    <div>
        <p> Welcome : {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
    </div>



    @else

<p>you are loged out </p>
@endif



@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
    <p>You are log in as Admin</p>
    <div>
        <p> Welcome : {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
    </div>



@else

    <p>you are loged out admin</p>
@endif