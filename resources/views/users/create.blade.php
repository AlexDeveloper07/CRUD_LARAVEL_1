@extends('layouts.template')

@section('title', 'user_create')

@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form class="w-full max-w-lg bg-gray-100 rounded-lg shadow-md px-6 py-4" action="{{ route('users.store') }}"
            method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nombre:</label>
                @error('name')
                    <small>*{{ $message }}</small>
                @enderror
                <input name="name" type="text"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese su nombre" value="{{ old('name') }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                @error('email')
                    <small>*{{ $message }}</small>
                @enderror
                <input name="email" type="email"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese su Email" value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Contraseña:</label>
                @error('password')
                    <small>*{{ $message }}</small>
                @enderror
                <input name="password" type="password"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese su Email" value="{{ old('email') }}">
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear
                    registro</button>
            </div>
        </form>
    </div>
@endsection
