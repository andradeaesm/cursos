<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">


            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Criar Curso</h2>
                <a href="{{ route('cursos.index') }}"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-primary-600 transition duration-200">
                    Voltar Cursos
                </a>
            </div>






            <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                        address</label>
                    <input type="text" name="nome"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="nome do curso"  />
                        @error('nome')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-6">
                    <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição
                        </label>
                    <textarea name="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    @error('descricao')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>



                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>
                        <label for="professor"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Professor</label>
                        <input type="text" name="professor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="nome do professor" />
                            @error('professor')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="imagem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagem</label>
                        <input type="file" name="imagem"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Doe" />
                            @error('imagem')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label for="valor"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                        <input type="text" name="valor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="valor" />
                            @error('valor')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="vagas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vagas</label>
                        <input type="text" name="vagas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="numero de vagas" />
                            @error('vagas')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="duracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duração</label>
                        <input type="text" name="duracao"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="nr meses" />
                            @error('duracao')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label for="categoria_id">Categoria</label>
                        <select name="categoria_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Selecione uma categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gravar Curso</button>
            </form>

        </div>
    </div>
</x-layouts.app>
