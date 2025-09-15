<x-app-layout>

    <div class="space-y-24">

        <section class="mt-10">
            <div class="text-center">
                <x-page-heading>Resources and insights</x-page-heading>
                <p class="mt-6 font-light">The latest industry news, interviews, technologies, and
                    resources.</p>

                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label=false name="q" placeholder="Music..." />
                </x-forms.form>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Posts</x-section-heading>


            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($recentPosts as $post)
                    <x-recent-card :$post />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Blog Posts</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($posts as $post)
                    <x-blog-card :size="180" :$post />
                @endforeach
            </div>
        </section>

        <a href="/posts">
            <x-button>
                All Posts
            </x-button>
        </a>

    </div>

</x-app-layout>