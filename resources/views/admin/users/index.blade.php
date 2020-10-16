<x-admin-master>
    @section('content')

<h1>Users</h1>
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered" id="users-Table" width="100%" cellspacing="0">
        <thead>
          <tr>

              <th>id</th>
              <th>Username</th>
              <th>Avatar</th>
              <th>Name</th>
              <th>Registred</th>
              <th>Updeted Profile date</th>

          </tr>
        </thead>
        <tfoot>
          <tr>

            <th>id</th>
              <th>Username</th>
              <th>Avatar</th>
              <th>Name</th>
              <th>Registred</th>
              <th>Updeted Profile date</th>

          </tr>
        </tfoot>
        <tbody>
            @foreach($users as $user)
            <tr>
              <td>
                  {{$user->id}}
              </td>

              <td>
                  {{$user->username}}
              </td>

                  <td>
                      <img  height="90px"  width="90px" src="/uploads/avatars/{{ $user->avatar}}" alt="">
                  </td>
              <td>
                  {{$user->name}}
              </td>
              <td>
                {{$user->created_at}}
          </td>

              <td>
                  {{$user->updated_at}}
            </td>
              <td>


            </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

 <!-- Page level plugins -->
 <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

    @endsection
</x-admin-master>