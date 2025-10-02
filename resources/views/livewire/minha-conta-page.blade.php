<div>
    <div class="w-full max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-slate-800">Minha Conta</h1>
        <p class="mt-2 text-slate-600">Atualize suas informações pessoais aqui.</p>

        <form wire:submit="save" class="mt-8 bg-white p-8 rounded-lg shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail (não pode ser alterado)</label>
                    <input type="email" id="email" wire:model="email" readonly class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 cursor-not-allowed py-3 px-4">
                </div>
                
                <div class="md:col-span-3 mt-4 border-t pt-6">
                    <h2 class="text-lg font-semibold text-slate-700">Informações que podem ser modificadas:</h2>
                </div>

                <div class="md:col-span-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                    <input type="text" id="name" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4">
                    @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                    <input type="date" id="data_nascimento" wire:model="data_nascimento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4">
                    @error('data_nascimento') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="estado_nascimento" class="block text-sm font-medium text-gray-700">Estado de Nascimento</label>
                    <select id="estado_nascimento" wire:model="estado_nascimento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4">
                        <option value="">Selecione...</option>
                        @foreach($estados as $estado)
                            <option value="{{ $estado->uf }}" @if($estado->uf == $estado_nascimento) selected @endif>
                                {{ $estado->estado }}
                            </option>
                        @endforeach
                    </select>
                    @error('estado_nascimento') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="sexo_biologico" class="block text-sm font-medium text-gray-700">Sexo Biológico</label>
                    <select id="sexo_biologico" wire:model="sexo_biologico" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4">
                        <option value="">Selecione...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                    @error('sexo_biologico') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="mt-8 flex justify-end space-x-4">
                <button type="button" wire:click="cancel" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Cancelar e Voltar
                </button>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Confirmar Alterações
                </button>
            </div>
        </form>

        {{-- NOVA SEÇÃO SOBRE A LGPD --}}
        <div class="mt-12 border-t border-gray-200 pt-8">
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1.75-5.25a.75.75 0 00-1.5 0v3.5a.75.75 0 001.5 0v-3.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-yellow-800">Aviso Importante sobre a LGPD (Lei Geral de Proteção de Dados)</h3>
                        <div class="mt-2 text-sm text-yellow-700 space-y-3">
                            <p>
                                Este sistema de testes coleta e processa informações que podem ser consideradas <strong>dados sensíveis</strong> de acordo com a Lei Geral de Proteção de Dados (LGPD), Lei nº 13.709/2018. Estes dados incluem informações sobre sua saúde, histórico e características pessoais, que são essenciais para a geração dos seus relatórios.
                            </p>
                            <p>
                                A LGPD garante a você o direito de solicitar a exclusão dos seus dados pessoais. Caso você deseje que a SOBRARE exclua permanentemente todas as suas informações de nosso banco de dados — incluindo seus dados de cadastro, respostas dos testes e relatórios gerados — é necessário fazer uma solicitação formal.
                            </p>
                            <p>
                                Por favor, envie um e-mail para <strong class="underline">[faleconosco@sobrare.com.br]</strong> com o assunto "Solicitação de Exclusão de Dados - LGPD". No corpo do e-mail, informe seu nome completo e o e-mail cadastrado nesta plataforma, solicitando a remoção de todos os seus dados pessoais e sensíveis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>