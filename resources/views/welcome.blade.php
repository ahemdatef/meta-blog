<x-app-layout>

    <div class="space-y-24">

        <section class="mt-10">
            <div class="text-center">
                <x-page-heading>Resources and insights</x-page-heading>
                <p class="mt-6 font-light">The latest industry news, interviews, technologies, and
                    resources.</p>

                <form action="/search">
                    <input type="text" name="search" placeholder="technologies..."
                        class="mt-6 px-4 py-2 bg-white/10 rounded-lg w-full max-w-xl">
                </form>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Posts</x-section-heading>


            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-recent-card />
                <x-recent-card />
                <x-recent-card />
            </div>

        </section>

        <section>
            <x-section-heading>Blog Posts</x-section-heading>

            <div class="mt-6">
                <div>
                    <x-blog-card :size="180" />
                </div>
            </div>
        </section>

        <a href="/posts">
            <x-button>
                All Posts
            </x-button>
        </a>

    </div>

</x-app-layout>