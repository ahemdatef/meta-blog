<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
          rel="stylesheet">
     <title>MetaBlog></title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary text-white pt-6 font-inter  mb-16">

     <div class="px-10">
          <nav class="flex justify-between items-center border-b border-white/15 py-4">
               <div>
                    <a href="/" class="text-3xl">Meta<span class="text-blue-600">Blog</span></a>
               </div>

               <div class="space-x-6 text-sm font-medium">
                    <a href="/posts">Blog</a>
                    <a href="">About</a>
                    <a href="">Contact</a>
               </div>

               @guest
                    <div class="space-x-6">
                         <a href="/login">Login</a>
                         <a href="/register">Register</a>
                    </div>
               @endguest

               @auth
                    <div class="space-x-6 flex items-center">
                         <a href="/posts/create">Create Post</a>

                         <form action="/logout" method="POST">
                              @csrf
                              @method('DELETE')

                              <button class="cursor-pointer">Logout</button>
                         </form>
                    </div>
               @endauth
          </nav>

          <main class="mx-auto max-w-[1280px]">
               {{ $slot }}
          </main>
     </div>

</body>

</html>