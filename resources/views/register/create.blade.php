<x-layout>
    <session class="px-6 py-5">
        <main class="max-w-lg mx-auto mt-20 bg-gray-100  border border-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <div>
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username"
                        value="{{old('username')}}">
                </div class="pt-2">

                @error('username')

                <P class="text-red-500 text-xs mt-1">{{$message}}</P>
                @enderror

                <div class="pt-2">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                        value="{{old('name')}}">
                </div>
                @error('name')

                <P class="text-red-500 text-xs mt-1">{{$message}}</P>
                @enderror

                <div class="pt-2">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email"
                        value="{{old('email')}}">
                </div>
                @error('email')

                <P class="text-red-500 text-xs mt-1">{{$message}}</P>
                @enderror

                <div class="pt-2">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password">
                </div>
                @error('password')

                <P class="text-red-500 text-xs mt-1">{{$message}}</P>
                @enderror


                <div class="pt-2 mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-2 hover:bg-blue-500">Submit</button>
                </div>

                @if($errors->any())

                @foreach ($errors->all() as $error)

                <li class="text-red-500 text-xs">{{$error}}</li>
                @endforeach

                @endif



            </form>

        </main>

    </session>
</x-layout>