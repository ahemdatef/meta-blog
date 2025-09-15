<x-app-layout>
     <x-page-heading>All Comments</x-page-heading>

     @foreach ($comments as $comment)

          <div class="flex justify-between items-center mt-10 px-3 py-2 rounded-lg border-b border-white/10 space-x-3">
               <div class="self-start">
                    <img src="{{ asset('storage/' . $comment->user->image) }}" alt="" width="40" class="rounded">
               </div>

               <div class="flex-1">
                    <h3 class="text-xl self-start text-gray-300">{{ $comment->user->name }}</h3>

                    <p class="text-lg mt-4 ml-2 mb-2 text-gray-200 border-l border-white/10 pl-2">
                         {{ $comment->comment_body }}
                    </p>
               </div>

               <p class="self-end text-xs text-gray-400">{{ $comment->created_at }}</p>

          </div>

     @endforeach
     <div class="mt-6">
          {{ $comments->links() }}
     </div>

</x-app-layout>