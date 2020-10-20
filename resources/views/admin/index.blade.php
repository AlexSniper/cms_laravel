<x-admin-master>
    @section('content')
    <img src="/uploads/avatars/{{auth()->user()->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
     {{-- @if(auth()->user()->userHasRole('admin')) --}}

    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
{{-- @endif --}}
    @endsection
</x-admin-master>
