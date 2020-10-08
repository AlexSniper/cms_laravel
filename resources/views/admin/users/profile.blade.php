<x-admin-master>
    @section('content')
    <h1>
        @if(Auth::check())
        {{$user->name}}'s
        @endif profile


    </h1>
    @endsection
</x-admin-master>
