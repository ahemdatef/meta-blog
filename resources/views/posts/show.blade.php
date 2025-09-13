<x-app-layout>

     <div class="mt-10 text-center">
          <x-page-heading>{{ $post->title }}</x-page-heading>
     </div>

     <div class="mt-20">

          <div>
               <img src="https://picsum.photos/990/440" alt="" class="m-auto w-full object-cover">
          </div>

          <div class="mt-20 text-gray-300 leading-loose font-light">
               {{ $post->body }}
          </div>
     </div>

     <div class="mt-20 flex space-x-4 items-center">
          <img src="https://picsum.photos/60" alt="" class="rounded-full">

          <div>
               <p>{{ $post->user->name }}</p>
               <p class="text-xs mt-1 text-gray-500">{{ $post->created_at }}</p>
          </div>
     </div>

     <div class="mt-10">
          <x-section-heading>Add Comment</x-section-heading>

          <form action="/comments" method="POST" class="mb-6">
               @csrf
               <input type="text" name="comment" placeholder="Add Comment..."
                    class="mt-2 px-4 py-2 bg-white/10 rounded-lg w-full max-w-xl" />
          </form>

          <a href="/posts/{{ $post->id }}/comments">
               <x-button>All Comments</x-button>
          </a>
     </div>

</x-app-layout>