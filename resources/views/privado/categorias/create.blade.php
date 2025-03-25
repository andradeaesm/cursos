<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">

            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Criar Categoria</h2>
                <a href="{{ route('categorias.index') }}"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-primary-600 transition duration-200">
                    Voltar Categorias
                </a>
            </div>


            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da Categoria</label>
                    <input type="text" name="nome"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nome da categoria" />
                        @error('nome')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Gravar Categoria
                </button>
            </form>


        </div>
    </div>
</x-layouts.app>
