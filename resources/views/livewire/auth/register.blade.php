<section class="h-screen bg-cover " style="background-image: url('{{ URL::asset('image/banner-1.jpg') }}')">
    <div class="flex flex-col items-center justify-center h-screen ">
        <div class="flex w-1/2 h-auto shadow-xl rounded-xl">
            <div class="flex flex-col w-full p-10 bg-white grow">
                <div class="flex gap-3 text-2xl font-semibold items-center-safe">
                    <div>Register</div>
                    <div wire:loading>
                        @component('components.spinner', ['color' => 'fill-black'])
                        @endcomponent
                    </div>
                </div>
                <form wire:submit.prevent="register" class="flex flex-col gap-5 pt-5">
                    <div>
                        <h1>Nama</h1>
                        <input type="text" wire:model="nama" class="w-full p-2 mt-1 border border-black rounded">
                        @error('nama')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <h1>Email</h1>
                        <input type="email" wire:model="email" class="w-full p-2 mt-1 border border-black rounded">
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="">
                        <h1>Password</h1>
                        <input type="text" wire:model="password" class="w-full p-2 mt-1 border border-black rounded">
                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-4">
                        <a href="{{ route('login') }}" class="underline"> Sudah punya akun?</a>
                        <button type="submit"
                            class="p-2 px-4 text-white border rounded cursor-pointer bg-cappucino">Register</b>
                    </div>
                </form>
            </div>

        </div>
    </div>

    @error('error')
        @component('components.toast', ['color' => 'red'])
            {{ $message }}
        @endcomponent
    @enderror
</section>
