<x-app-layout>

     <div class="text-center mt-10">
          <x-page-heading>Create Post</x-page-heading>
     </div>

     <x-forms.form method="POST" action="/posts" enctype="multipart/form-data">
          <x-forms.input label="Title" name="title" />
          <x-forms.input label="Category" name="category" />
          <x-forms.input label="Avatar" name="image" type="file" />

          <x-forms.textarea label="Post Body" name="body" />

          <x-forms.button>Publish</x-forms.button>
     </x-forms.form>
</x-app-layout>