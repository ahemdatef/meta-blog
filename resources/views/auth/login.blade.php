<x-app-layout>

     <div class="text-center mt-20">
          <x-page-heading>Login</x-page-heading>

     </div>
     <x-forms.form method="POST" action="/login">
          <x-forms.input label="Email" name="email" type="email" />
          <x-forms.input label="Password" name="password" type="password" />

          <x-forms.button>Login</x-forms.button>
     </x-forms.form>

</x-app-layout>