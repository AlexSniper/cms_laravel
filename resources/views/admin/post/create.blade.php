<x-admin-master>

    @section('content')

        <h1>Create</h1>


<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" >Game Title</label>
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
                    <input name="post_image"
                     type="file"
                      class="form-control-file"
                      id="post_image">
                </div>

            <div class="form-group">
             <textarea name="body"  class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


        </form>

    @endsection

</x-home-master>
