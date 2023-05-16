@auth
<x-panel>
    <form action="/posts/{{$post->slug}}/comments" method="POST">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="pl-3">Want to participate?</h2>
        </header>

        <div class="mt-6">

            <textarea name="body" class="w-full text-sm focus:outline-none  focus:ring" cols="30" rows="5"
                placeholder="Quick ,thing of something to say!"></textarea>

            @error('body')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror

        </div>

        <div class="flex justify-end border-t border-gray-200 pt-5">

          <x-form.button>Post</x-form.button>
        </div>
    </form>

</x-panel>

@else

<a href="/register" class="hover:underline hover:text-blue-600">Register</a> or <a href="/login"
    class="hover:underline  hover:text-blue-600">Log in<a> to leave a comment
@endauth