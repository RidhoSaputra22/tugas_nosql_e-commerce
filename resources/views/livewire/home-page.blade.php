<div>
    <x-navbar></x-navbar>
    <section>
        <div class="flex items-center w-full h-screen bg-center bg-no-repeat bg-cover "
            style="background-image: url('{{ URL::asset('image/banner-3.jpg') }}')">

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

    <section class="h-auto pt-24 bg-contain" id="about">
        <div class="mx-10">
            <p class="flex justify-center pb-24 text-4xl font-semibold bg-white">Tentang SepatuKu</p>
            <div class="flex">
                <div class="w-1/2 py-3 bg-no-repeat bg-cover h-96 "
                    style="background-image: url('{{ URL::asset('image/banner-1.jpg') }}');">
                </div>
                <div class="w-full px-10 bg-white">
                    <h1 class="text-4xl font-semibold">SepatuKu</h1>
                    <p class="mt-4 text-lg">Di <strong>SepatuKu</strong>, kami bangga menyajikan berbagai koleksi sepatu
                        yang sesuai untuk berbagai kebutuhan dan gaya. Dari sepatu formal untuk ke kantor, hingga sepatu
                        olahraga untuk aktivitas sehari-hari, semua pilihan tersedia dengan desain terkini dan
                        kenyamanan maksimal. Kamu bisa menemukan sepatu dengan berbagai bahan berkualitas, mulai dari
                        kulit asli hingga material sintetis yang tahan lama.

                    </p>
                    <p class="mt-4 text-lg">
                        Apapun gaya dan aktivitasmu, <strong>SepatuKu</strong> menyediakan pilihan sepatu yang tepat
                        untuk menunjang penampilan dan kenyamananmu setiap hari.


                </div>
            </div>
        </div>
    </section>

    <section id="produk-unggulan" class="h-screen mx-24 ">
        <div class="pt-24">
            <p class="flex justify-center text-4xl font-semibold py-14">Produk Unggulan Kami</p>
        </div>
        <div class="flex justify-center">
            <div class=" h-96">
                <div class="grid grid-cols-4 h-96 gap-14">

                    @foreach ($datas as $data)
                        <a href="/detail/{{ $data['id'] }}" class="bg-center bg-cover rounded h-96 w-80"
                            style="background-image: url('{{ Storage::url($data['images'][0]) }}')">
                            <div class="flex flex-col-reverse h-full ">
                                <div class="p-3 text-black bg-white">
                                    <h1 class="text-lg font-semibold uppercase">{{ $data['name'] }}</h1>
                                    <h2 class="text-lg">Rp. {{ number_format($data['price'] ?? 0) }}</h2>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <div class="mt-14">
                    <a href="/shop" class="px-4 py-2 mt-5 border">Lihat Selengkapnya . . .</a>
                </div>
            </div>
        </div>
    </section>

    <section class="flex h-screen bg-lime-900">
        <div class="w-full h-full bg-cover" style="background-image: url('{{ URL::asset('image/banner-2.jpg') }}')">
        </div>
        <div class="w-full m-32 text-white">
            <h1 class="font-semibold text-8xl">Satu Langkah Nyaman, Sejuta Gaya</h1>
            <p class="mt-5 text-lg">
                Di <strong>SepatuKu</strong>, kamu bisa menemukan sepatu berkualitas tinggi tanpa perlu khawatir soal
                harga. Cocok untuk kamu yang ingin tampil stylish tanpa kompromi terhadap kenyamanan!
            </p>
            <div class="mt-5">

                <a href="#menu" class="px-4 py-2 border ">Beli Sekarang</a>
            </div>
        </div>

    </section>
    <section id="produk-unggulan" class="h-screen ">
        <div class="pt-24">
            <p class="flex justify-center text-4xl font-semibold py-14">Testimoni</p>
        </div>
        <div class="flex justify-center h-96">
            <div class="grid grid-cols-3 gap-24 h-96 ">
                <div class="rounded shadow-2xl h-96 w-80 ">
                    <div class="flex justify-center p-6 ">
                        <div>
                            <div class="w-24 h-24 bg-cover rounded-full"
                                style="background-image: url('{{ URL::asset('image/person-3.jpg') }}')"></div>
                            <div class="flex justify-center text-lg font-semibold">Jefri</div>
                        </div>
                    </div>
                    <div class="mx-3 text-center">
                        <p>SepatuKu adalah tempat favorit saya untuk belanja sepatu. Pilihan modelnya keren-keren, dan
                            yang paling penting harganya sangat terjangkau. Saya selalu dapat sepatu yang nyaman dan
                            stylish di sini!</p>
                    </div>
                </div>
                <div class="rounded shadow-2xl h-96 w-80 ">
                    <div class="flex justify-center p-6 ">
                        <div>
                            <div class="w-24 h-24 bg-cover rounded-full"
                                style="background-image: url('{{ URL::asset('image/person-2.jpg') }}')"></div>
                            <div class="flex justify-center text-lg font-semibold">Sarah</div>
                        </div>
                    </div>
                    <div class="mx-3 text-center">
                        <p>Beli sepatu olahraga di SepatuKu, dan kualitasnya luar biasa! Nyaman dipakai untuk jogging
                            dan terlihat modern. Sangat puas dengan pelayanan dan produknya. Pasti akan balik lagi!</p>
                    </div>
                </div>
                <div class="rounded shadow-2xl h-96 w-80 ">
                    <div class="flex justify-center p-6 ">
                        <div>
                            <div class="w-24 h-24 bg-cover rounded-full"
                                style="background-image: url('{{ URL::asset('image/person-1.png') }}')"></div>
                            <div class="flex justify-center text-lg font-semibold">Alex</div>
                        </div>
                    </div>
                    <div class="mx-3 text-center">
                        <p>Suka belanja di SepatuKu. Pelayanannya cepat dan stafnya sangat membantu. Sepatunya banyak
                            pilihan dengan berbagai ukuran, dan kualitasnya tidak mengecewakan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footter></x-footter>
</div>
