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
            <x-section-heading>All Posts</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($allPosts as $post)
                    <x-recent-card :$post />
                @endforeach
            </div>

            <div class="mt-8">
                {{ $allPosts->links() }}
            </div>

        </section>

    </div>

</x-app-layout>