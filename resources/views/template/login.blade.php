@extends('template.main')

@section('body')
    <div class="flex flex-col h-screen justify-center px-4 md:px-0">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-14" src="logo.png" alt="Your Company">
            <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login to your account
            </h2>
        </div>

        <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-3" action="" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" autocomplete="username" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 ps-3">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 ps-3">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Login</button>
                </div>
            </form>

            <p class="mt-3 text-center text-sm text-gray-500">
                Belum registrasi?
                <a href="{{ url('/registrasi') }}"
                    class="font-semibold leading-6 text-blue-500 hover:text-indigo-300">Registrasi</a>
            </p>
        </div>
    </div>
@endsection
