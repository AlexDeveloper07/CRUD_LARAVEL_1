@extends('layouts.template')

@section('title', 'user_edit')

@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form class="w-full max-w-lg bg-gray-100 rounded-lg shadow-md px-6 py-4" action="{{ route('users.update', $user) }}"
            method="POST">

            @csrf

            @method('put')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nombre:</label>
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
                <input name="name" type="text"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese su nombre" value="{{ old('name', $user->name) }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
                <input name="email" type="email"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese su email" value="{{ old('email', $user->email) }}">
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-gray-900 bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg shadow-yellow-500/50 dark:shadow-lg dark:shadow-yellow-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Actualizar
                    datos</button>
            </div>
        </form>
    </div>

@endsection
