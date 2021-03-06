<x-home-master>
    @section('content')
   <!-- Title -->


   <h1 class="mt-4">{{$post->title}}</h1>


   <!-- Author -->
   <p class="lead">
     by
   <a href="#">{{$post->user->name}}</a>
   </p>
   <img width="100px" class="img-profile rounded-circle" src="/uploads/avatars/{{$post->user->avatar}}">


   <hr>

   <!-- Date/Time -->
   <p>Posted on {{$post->created_at}}</p>

   <hr>

   <!-- Preview Image -->

   <img width=auto class="img-fluid rounded" src="{{$post->path}}" alt="">

   <hr>

   <!-- Post Content -->
   <p class="lead"> {{$post->body}}</p>



   <blockquote class="blockquote">
     <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
     <footer class="blockquote-footer">Someone famous in
       <cite title="Source Title">Source Title</cite>
     </footer>
   </blockquote>


   <hr>

   <!-- Comments Form -->
   <div class="card my-4">
     <h5 class="card-header">Leave a Comment:</h5>
     <div class="card-body">
       <form>
         <div class="form-group">
           <textarea class="form-control" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
     </div>
   </div>

   <!-- Single Comment -->
   <div class="media mb-4">
     <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
     <div class="media-body">
       <h5 class="mt-0">Commenter Name</h5>

     </div>
   </div>

   <!-- Comment with nested comments -->
   <div class="media mb-4">
@endsection

</x-home-master>
