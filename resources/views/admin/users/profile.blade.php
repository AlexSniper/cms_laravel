<x-admin-master>
    @section('content')
    <h1>
        {{-- @if(Auth::check()) --}}
        {{$user->name}}'s
        {{-- @endif profile --}}
<div class="col-sm-6">
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" >Name</label>

                <input name="name"
                type="text"
                 class="form-control"
                 id="name"
                 value={{$user->name}}>

        </div>


        <div class="form-group">
            <label for="email" >Name</label>

                <input name="email"
                type="text"
                 class="form-control"
                 id="email"
                 value={{$user->email}}>

        </div>


        <div class="form-group">
            <label for="">Game Publisher</label>
            <div class="col-sm-9">
                <input name="publisher" type="text" class="form-control" id=""
                       placeholder=" Publisher">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
            <div class="col-sm-9">
                <input name="releasedate" type="text" class="form-control" id="releasedateid"
                       placeholder="Release Date">
            </div>
        </div>

                <button type="submit" class="btn btn-primary">Submit</button>


    </form>


</div>

    </h1>
    @endsection
</x-admin-master>
