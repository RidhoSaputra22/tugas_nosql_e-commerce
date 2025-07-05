<div>
    <x-navbar></x-navbar>
    <!-- Detail Produk -->
    <section class="py-14">
        <div class="min-h-screen mx-auto w-3/4">
            <div class=" flex flex-col md:flex-row gap-8">
                <!-- Gambar Produk -->
                <div class="md:w-full aspect-square">
                    <div class="bg-white md:p-4 rounded-lg shadow border border-gray-300 h-full bg-cover bg-center bg-no-repeat "
                        style="background-image: url('{{ Storage::url($data['images'][0]) }}');">
                    </div>
                </div>

                <!-- Informasi Produk -->
                <div class="md:w-full">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $data['nama'] }}</h1>
                    <div class="flex items-center mb-4">

                    </div>
                    <div class="mb-6">
                        <p class="text-3xl font-bold text-cappucino-600 ">
                            {{ $data->name }}
                        <p class="text-gray-600 ">{{ $data['description'] }}</p>
                        <p class="text-gray-600 ">Rp. {{ number_format($data['price']) }}</p>
                    </div>

                    <div>
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-800 mb-2">Jumlah</h3>
                            <div class=" items-center gap-3 inline-flex">
                                <button wire:click="decrement"
                                    class="text-white bg-cappucino cursor-pointer  w-8 aspect-square   border border-cappucino shadow-sm ">
                                    <div wire:loading wire:target="decrement">
                                        @component('components.spinner')
                                        @endcomponent
                                    </div>
                                    <div wire:loading.remove wire:target="decrement">-</div>
                                </button>
                                <input type="text"
                                    class="text-gray-600 p-1 border border-gray-300 shadow-sm w-16 h-8 text-center"
                                    wire:model="qty">
                                <button wire:click="increment"
                                    class="text-white bg-cappucino cursor-pointer w-8 aspect-square  border border-cappucino shadow-sm">
                                    <div wire:loading wire:target="increment">
                                        @component('components.spinner')
                                        @endcomponent
                                    </div>
                                    <div wire:loading.remove wire:target="increment">+</div>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-end mb-2">
                            <div class="text-gray-600 ">
                                Total
                            </div>
                            <div class=" font-semibold">
                                Rp {{ number_format($data->price * $qty) }}
                            </div>
                        </div>

                        <div class="flex gap-4 mb-8">

                            <button wire:click="addToCart"
                                class="flex-1 items-center bg-cappucino cursor-pointer text-white py-3 px-6 rounded-lg hover:bg-cappucino-700 transition duration-300">
                                <div wire:loading wire:target="addToCart">
                                    @component('components.spinner', [
                                        'width' => 'w-4',
                                        'height' => 'h-4',
                                    ])
                                    @endcomponent
                                </div>
                                Tambah ke Keranjang
                            </button>
                        </div>

                        <div class="border-t pt-6">
                            <h3 class="font-semibold text-gray-800 mb-4">Informasi Produk</h3>
                            <div class="space-y-2">
                                <p class="flex justify-between text-sm">
                                    <span class="text-gray-600">Stok</span>
                                    <span class="text-gray-800">{{ $data->stock }}
                                        pcs</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footter></x-footter>

    @error('error')
        @component('components.toast', ['color' => 'red'])
            {{ $message }}
        @endcomponent

    @enderror

</div>
