@extends('layouts.template')

@section('title', 'user')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <table class="border-collapse w-full">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-6 py-3 text-lg font-semibold text-gray text-left">Nombre</th>
                    <th class="border border-gray-300 px-6 py-3 text-lg font-semibold text-gray text-left">Email</th>
                    <th class="border border-gray-300 px-6 py-3 text-lg font-semibold text-gray text-center">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-6 py-4">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $user->email }}</td>
                        <td class="border border-gray-300 px-6 py-4">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('users.edit', $user) }}"
                                    class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
                                    <i class="fas fa-pencil-alt"></i> Editar...
                                </a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <i class="fas fa-trash-alt"></i> Eliminar...
                                    </button>
                                </form>
                            </div>
                        </td>                                                
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        {{ $users->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
