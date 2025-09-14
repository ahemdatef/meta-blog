<x-app-layout>

     <div class="text-center mt-10">
          <x-page-heading>Register</x-page-heading>
     </div>

     <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
          <x-forms.input label="Your Name" name="name" />
          <x-forms.input label="Email" name="email" type="email" />
          <x-forms.input label="Password" name="password" type="password" />
          <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

          <x-forms.input label="Avatar" name="image" type="file" />

          <x-forms.button>Register</x-forms.button>
     </x-forms.form>
</x-app-layout>