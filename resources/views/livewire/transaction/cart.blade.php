<div>
    <x-navbar></x-navbar>

    <section class="p-14 min-h-screen flex gap-6">
        <div class="w-full grow bg-white shadow-md rounded-lg overflow-hidden p-5">
            <div class="text-2xl font-semibold ">Keranjang</div>
            <div class="m-5 min-h-screen">
                @forelse($datas as $data)
                    <div class="flex gap-3 py-3 border-b-2">
                        <div class="h-32 aspect-square bg-cover bg-center "
                            style="background-image: url('{{ Storage::url($data['product']['images'][0]) }}')">
                        </div>
                        <div class="grow">
                            <div class="uppercase text-2xl ">{{ $data['product']['name'] }}</div>
                            <div class="text-lg">Rp. {{ number_format($data['product']['price']) }}</div>
                            <div class="text-sm">{{ $data['quantity'] }}x</div>
                            <div class="text-sm">Stok: {{ $data['product']['stock'] }} pcs</div>
                            {{-- <input type="hidden" value="{{ $data['id_cart_222121'] }}" name="id"> --}}

                            <div class="flex gap-2 pt-2 text-white">
                                {{-- <a href="/addFormCart/{{ $data['id_cart_222121'] }}" class="bg-yellow-500 px-3 ">+</a>
                             <a href="/DelFormCart/{{ $data['id_cart_222121'] }}" class="bg-red-500 px-3 ">-</a> --}}
                            </div>
                        </div>
                        <div class="flex flex-col ">
                            <div class="grow text-end">
                                {{-- <a href="/DestroyFormCart/{{ $data['id_cart_222121'] }}"
                                 class="bg-red-500 px-3 text-white">X</a> --}}
                            </div>
                            <div class="text-xl font-semibold">Total: Rp. {{ number_format($total_price) }}</div>
                        </div>
                    </div>
                @empty
                    <div>
                        <h1>Tak ada data</h1>
                    </div>
                @endforelse


            </div>


        </div>
        <div class="w-8/12 bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-5">
                <h1 class="text-xl font-semibold mb-6">Detail Order</h1>
            </div>
            <div class="px-5 flex flex-col gap-5">
                @csrf
                <div class="">
                    <h1>Nama</h1>
                    <input type="text" name="nama" class="border w-full p-2" value="{{ Auth::user()['name'] }}">
                </div>
                <div class="">
                    <h1>Alamat</h1>
                    <input type="text" name="alamat" class="border w-full p-2"
                        value="{{ Auth::user()['address']['city'] }}">
                </div>


                <form wire:submit.prevent="checkout">
                    <div class="py-5 flex justify-end">
                        <input type="hidden" name="total" value="{{ $total_price }}">
                        <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Lanjutkan Belanja
                        </a>
                        <button type="submit"
                            class="flex-inline items-center gap-3 bg-yellow-500 py-2 px-3 rounded ml-4">
                            <div wire:loading wire:target="checkout">
                                @component('components.spinner', [
                                    'width' => 'w-4',
                                    'height' => 'h-4',
                                    'color' => 'fill-black',
                                ])
                                @endcomponent
                            </div>
                            Selesaikan Pembelian
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    @if (session('token'))
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ObID6qlSaz-_VuGA"></script>
        <script type="text/javascript">
            snap.pay(
                '{{ session('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         token ') }}', {
                    // Optional
                    onSuccess: function(result) {
                        window.location.href = 'http://127.0.0.1:8000/checkout';
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    }
                });
        </script>
    @endif

    <x-footter></x-footter>

</div>
