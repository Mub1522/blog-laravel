<x-layout>
    <x-slot name="title">Posts Prueba</x-slot>
    <ul>
        @foreach ($posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
    </ul>
    {{$posts->links()}}
</x-layout>