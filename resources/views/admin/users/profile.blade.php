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

<img  height="50px" class="rounded-circle" src="{{$user->avatar}}">
</div>

        <div class="form-group">
            <input type="file" class="form-control-file" name="avatar">
        </div>

        <div class="form-group">
            <label for="username" >UserName</label>

                <input
                name="username"
        {{-- class="form-control{{$errors->has('username') ? 'is-invalid':''}}" --}}
        class="form-cotrol @error('username') is-invalid @enderror"
                type="text"
                 class="form-control"
                 id="username"
                 value={{$user->username}}>

                 @error('username')
        <div class="invalid-feedback">{{$message}}</div>
                    @enderror

        </div>

        <div class="form-group">
            <label for="name" >Name</label>

                <input name="name"
                type="text"
                 class="form-control"
                 id="name"
                 value={{$user->name}}>

                 @error('name')
        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

        </div>


        <div class="form-group">
            <label for="email" >Email</label>

                <input name="email"
                type="text"
                 class="form-control"
                 id="email"
                 value={{$user->email}}>

                 @error('email')
                 <div class="alert alert-danger">{{$message}}</div>
                             @enderror

        </div>

        <div class="form-group">
            <label for="password" >Password</label>

                <input name="password"
                type="text"
                 class="form-control"
                 id=""
                >
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                            @enderror

        </div>
        <div class="form-group">
            <label for="password-confirm" >Confirm Password</label>

                <input name="password_confirmation"
                type="text"
                 class="form-control"
                 id="password_confirmation"
                >
                @error('password_confirmation')
                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
        </div>


                <button type="submit" class="btn btn-primary">Submit</button>


    </form>


</div>

    </h1>
    @endsection
</x-admin-master>
