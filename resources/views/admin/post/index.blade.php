<x-admin-master>
    @section('content')
    <h1>All Posts
@if(Session::has('message'))
<div class="alert alert-danger">{{Session::get('message')}}</div>
@elseif(session('post-created-message'))
    <div class="alert alert-success">{{Session::get('post-created-message')}}</div>
    @else
    <div class="alert alert-success">{{Session::get('post-updated-message')}}</div>
@endif

    </h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>

                    <th>id</th>
                    <th>Owner</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updeted</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>

                  <th>id</th>
                  <th>Owner</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Created at</th>
                  <th>Updeted</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>


                  @foreach($posts as $post)

                  <tr>

                    <td>

                        {{$post->id}}

                    </td>



                    <td>

                        {{$post->user->name}}

                    </td>



                    <td>

                    <a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a>

                </td>
                        <td>

                            <img  height="90px"  width="90px" src="{{$post->path}}" alt="">

                        </td>

                    <td>

                        {{$post->created_at}}

                    </td>

                    <td>

                        {{$post->updated_at}}

                    </td>

                    <td>

{{-- Policy So only owner of the post can  see delete button  --}}
                        @can('view',$post)

                    <form action="{{route('post.destroy', $post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE') {{--Sending delete request --}}

                            <button type="submit" class="btn btn-danger">Delete</button></td>
                        </form>

                        @endcan


                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    @endsection

    @section('scripts')



     <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>