<x-layout>
    <session class="px-6 py-5">
        <main class="max-w-lg mx-auto mt-20 bg-gray-100  border border-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In</h1>

            <!-- ----------form-------- -->
            <form action="/session" method="POST" class="mt-10">
                @csrf  
                <x-form.input name="email" type="email" autocomplete="username" />
                <x-form.input name="password" type="password" autocomplete="new-password" />

                <x-form.button>Log in</x-form.button>

                

                

                @if($errors->any())

                    @foreach ($errors->all() as $error)

                        <li class="text-red-500 text-xs">{{$error}}</li>
                    @endforeach

                @endif


               
            </form>

            <!-- ----------End form-------- -->
        </main>    
    </session>    
</x-layout>    