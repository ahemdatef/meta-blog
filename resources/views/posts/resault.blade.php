<x-app-layout>

     <x-page-heading>Resault</x-page-heading>

     <div class="space-y-6 mt-10">
          @foreach ($posts as $post)
               <x-blog-card :$post />
          @endforeach
     </div>

</x-app-layout>