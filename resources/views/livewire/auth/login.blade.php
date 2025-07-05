<section class="h-screen bg-cover " style="background-image: url('{{ URL::asset('image/banner-1.jpg') }}')">
    <div class="flex flex-col items-center justify-center h-screen ">
        <div class="w-[500px] h-[500px] rounded-xl flex shadow-xl">

            <div class="flex flex-col w-full p-10 bg-white grow">
                <div class="flex justify-center text-2xl font-semibold">Login</div>
                <form class="flex flex-col gap-5 pt-9" wire:submit.prevent="login">
                    <div>
                        <h1>Email</h1>
                        <input type="text" wire:model="email" class="w-full p-2 mt-1 border border-black rounded">
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <h1>Password</h1>
                        <input type="password" name="password" wire:model="password"
                            class="w-full p-2 mt-1 border border-black rounded">
                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <a href="/regist" class="underline">Belum pernah masuk?</a>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full p-2 px-4 text-white border rounded cursor-pointer bg-cappucino">
                            <div class="flex justify-center gap-3">
                                <div wire:loading>
                                    @component('components.spinner')
                                    @endcomponent
                                </div>
                                Submit
                            </div>
                            </b>

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
