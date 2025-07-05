@extends('layouts.app')

@section('content')
    <div>

        <x-navbar></x-navbar>
        <section class="">
            <div class="flex items-center w-full bg-center bg-no-repeat bg-cover h-96 "
                style="background-image: url('{{ URL::asset('image/banner-1.jpg') }}')">
                <div
                    class="flex flex-col items-center justify-center w-full h-full text-center text-white bg-center 0 backdrop-brightness-50">
                    <h1 class="mb-5 font-semibold text-9xl">ElShoes</h1>
                    <p class="text-2xl italic font-regural">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores,
                        ad.</p>
                    <a href="#menu" class="px-4 py-2 mt-3 border ">Find More!</a>
                </div>
            </div>
        </section>
        <section class="flex  my-14 mx-14">
            <div class="w-64 h-full ">
                <div>
                    <p class="text-4xl font-semibold">Kategori</p>
                </div>
                <div class="p-3 mt-3">
                    <ul class="flex flex-col gap-3 font-semibold">
                        @foreach ($categories as $category)
                            <a href="?category={{ $category['id'] }}"
                                class="cursor-pointer hover:underline">{{ $category['name'] }}</a>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="w-full h-full ">
                <form class="flex justify-center bg-white h-14" method="GET" action="">
                    <input type="text" name="search" class="w-full p-4 m-2 mx-32 border rounded border-yellow"
                        placeholder="Search Menu...">
                </form>
                <div class="grid w-full grid-cols-3 gap-2  m-14 ">
                    @forelse($datas as $data)
                        <a href="/detail/{{ $data['id'] }}" class="bg-center bg-cover rounded h-96 w-80"
                            style="background-image: url('{{ Storage::url($data['images'][0]) }}')">
                            <div class="flex flex-col-reverse h-full ">
                                <div class="p-3 text-black bg-white">
                                    <h1 class="text-lg font-semibold uppercase">{{ $data['name'] }}</h1>
                                    <h2 class="text-lg">{{ number_format($data['price'] ?? 0) }}</h2>
                                </div>
                            </div>
                        </a>
                    @empty
                        <h1>Tak ada data</h1>
                    @endforelse
                </div>
            </div>

        </section>
        <x-footter></x-footter>


    </div>
@endsection
