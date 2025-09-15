<x-app-layout>

     <div class="mt-10 text-center">
          <x-page-heading>{{ $post->title }}</x-page-heading>
     </div>

     <div class="mt-20">

          <div class="w-[900px] h-[440px]">
               <img src="{{ asset('storage/' . $post->image) }}" alt="" class="m-auto w-full h-full object-cover">
          </div>

          <div class="mt-20 text-gray-300 leading-loose font-light">
               {{ $post->body }}
          </div>
     </div>

     <div class="mt-20 flex space-x-4 items-center">
          <img src="{{ asset('storage/' . $post->user->image) }}" alt="" class="rounded-full" width="40">

          <div>
               <p>{{ $post->user->name }}</p>
               <p class="text-xs mt-1 text-gray-500">{{ $post->created_at }}</p>
          </div>
     </div>

     <div class="mt-10 space-y-6">
          <x-section-heading>Add Comment</x-section-heading>

          @auth
               <form action="/posts/{{ $post->id }}/comments" method="POST" class="mb-6" class="">
                    @csrf
                    <textarea type="text" name="comment_body" placeholder="Add Comment..."
                         class="mt-2 px-4 py-2 bg-white/10 rounded-lg w-full max-w-xl"></textarea>

                    <x-forms.button>Comment</x-forms.button>

               </form>
          @endauth

          @guest
               <h3 class="text-sm text-gray-400">Please login to comment...</h3>
          @endguest

          <a href="/posts/{{ $post->id }}/comments">
               <x-button>All Comments</x-button>
          </a>
     </div>

</x-app-layout>