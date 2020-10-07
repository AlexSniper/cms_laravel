<x-admin-master>

    @section('content')

        <h1>Create</h1>



<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf

<p>{{$userId}}</p>
{{-- <p>{{$$userRole}}</p> --}}
<div class="form-group">
<input type="hidden" name="user_id" value="{{$userId}}">
</div>
            {{-- <input type="hidden" value={{$userId}} name="user_id"> --}}
{{-- <input name="user_id"   id="user_id"type="hidden" value=1> --}}


           <div class="form-group">
                <label for="title" >Title</label>
                <div class="col-sm-9">
                    <input
                    name="title"
                    type="text"
                    class="form-control"
                    id="title"
                   aria-describedby=""
                    placeholder="Enter Title">
                </div>
            </div>

           <div class="form-group">
                <label for="file">File</label>
                    <input name="path"
                     type="file"
                      class="form-control-file"
                      id="path">
                </div>



            <div class="form-group">
             <textarea name="body"  class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


        </form>

    @endsection

</x-home-master>
