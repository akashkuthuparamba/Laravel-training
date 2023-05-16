@props(['name'])
@error($name)

<P class="text-red-500 text-xs mt-1">{{$message}}</P>
@enderror