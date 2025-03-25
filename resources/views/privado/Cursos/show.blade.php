<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">


            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Consultar Curso</h2>
                <a href="{{ route('cursos.index') }}"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-primary-600 transition duration-200">
                    Voltar Cursos
                </a>
            </div>

            
                <div class="mb-6">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                        </label>
                    <input type="text" name="nome"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="nome do curso" value="{{ $curso->nome }}" disabled />
                        
                </div>
                <div class="mb-6">
                    <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição
                        </label>
                    <textarea name="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $curso->descricao }}</textarea>
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
                            placeholder="nome do professor" value="{{ $curso->professor }}" disabled/>
                            @error('professor')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="categoria_id">Categoria</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $curso->categoria->nome}}" disabled>
                        
                    </div>




                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label for="valor"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
                        <input type="text" name="valor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="valor" value="{{$curso->valor}}" disabled/>
                            @error('valor')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="vagas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vagas</label>
                        <input type="text" name="vagas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="numero de vagas" value="{{$curso->vagas}}" disabled/>
                            @error('vagas')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="duracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duração</label>
                        <input type="text" name="duracao"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="nr meses" value="{{$curso->duracao}}" disabled/>
                            @error('duracao')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    

                </div>

                <img src="{{ asset($curso->imagem)}}" class="w-150">

        </div>
    </div>
</x-layouts.app>
