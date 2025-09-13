@props(['post', 'size' => '330'])

<div
     class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-300 flex flex-col">

     <div>
          <img src="https://picsum.photos/{{ $size }}" alt="" class="m-auto w-full rounded">
     </div>

     <div class="py-8">
          <a href="#" class="text-sm text-blue-400">
               {{ $post->category->name }}
          </a>
          <a href="posts/{{ $post->id }}">
               <h3 class="font-bold text-2xl transition-colors duration-300 group-hover:text-blue-600 mt-1">
                    {{ $post->title }}
               </h3>
          </a>

          <p class="text-sm mt-2 text-gray-400">{{ str_split($post->body, '100')[0] }}</p>
     </div>

     <div class="flex flex-start gap-3 items-center mt-auto">
          <div>
               <img src="https://picsum.photos/40" alt="" class="rounded-full">
          </div>

          <div>
               <p class="text-[14px]">{{ $post->user->name }}</p>
               <p class="text-[10px] text-gray-300">{{ $post->created_at }}</p>
          </div>
     </div>
</div>