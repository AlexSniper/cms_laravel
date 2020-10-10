<x-admin-master>
    @section('content')
    <h1>
        {{-- @if(Auth::check()) --}}
        Hi {{$user->name}}
        {{-- @endif profile --}}
<div class="col-sm-6">
<form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
<div class="mb-4">

    <img  height="50px" class="rounded-circle" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/12715463_10201450219413165_1547790819211680626_n.jpg?_nc_cat=104&_nc_sid=09cbfe&_nc_ohc=hru4Bdqyw64AX-nPLXh&_nc_ht=scontent-yyz1-1.xx&oh=c8a8a7f5df150e46575278d7cda64a67&oe=5FA40B78" alt="">
</div>

        <div class="form-group">
            <input type="file" class="form-control-file" name="avatar" id="exampleInputFile">
        </div>

        <div class="form-group">
            <label for="username" >UserName</label>

                <input name="username"
                type="text"
                 class="form-control"
                 id="username"
                 value={{$user->username}}>

        </div>


        <div class="form-group">
            <label for="email" >Email</label>

                <input name="email"
                type="text"
                 class="form-control"
                 id="email"
                 value={{$user->email}}>

        </div>

        <div class="form-group">
            <label for="password" >Password</label>

                <input name="password"
                type="text"
                 class="form-control"
                 id="password"
                >

        </div>
        <div class="form-group">
            <label for="password-confirm" >Confirm Password</label>

                <input name="password_confirmation"
                type="text"
                 class="form-control"
                 id="password_confirmation"
                >

        </div>


                <button type="submit" class="btn btn-primary">Submit</button>


    </form>


</div>

    </h1>
    @endsection
</x-admin-master>
