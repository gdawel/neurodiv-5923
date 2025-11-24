<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-4xl font-bold text-slate-500">Detalhes do Pedido</h1>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">Cliente</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2  text-gray-800 dark:text-gray-200">
                            {{-- <div>{{ $detalhesCliente->firstName }} {{ $detalhesCliente->lastName }}</div> --}}
                            <div>{{ auth()->user()->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 22h14" />
                            <path d="M5 2h14" />
                            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                        </svg>
                    </div>
                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">Data do Pedido / Nº</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">{{ $pedido->created_at->format('d-m-Y') }} / {{ $pedido->id}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                            <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                        </svg>
                    </div>
                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">Situação do Pedido</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">{{ $pedido->orderStatus }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                            <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                        </svg>
                    </div>
                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">Situação do Pagamento</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <span class="bg-green-500 py-1 px-3 rounded text-white shadow">{{ $pedido->paymentStatus }}</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @if($pedido->paymentStatus != 'pago' )
            <div class="bg-white overflow-x-auto rounded-lg shadow-md py-6 px-16 mt-4">
                <p class="text-center"><strong>PEDIDO PENDENTE DE PAGAMENTO: </strong>nosso sistema identificou que o pedido está com o pagamento pendente.<br>
                    Para que os testes sejam liberados é importante efetuar o pagamento.<br>
                    Caso já tenha efetuado o pagamento, entre em contato com o suporte da SOBRARE.<br>
                </p>
                <p class="bg-red-500 block text-center text-white py-2 px-4 rounded-lg mt-4 w-full">
                    ENTRE EM CONTATO COM A SOBRARE</p>
            </div>
        @elseif(!$temHistoricoMedico->historicomedico)
            <div class="bg-white overflow-x-auto rounded-lg shadow-md py-6 px-16 mt-4">
                <p><strong>PREENCHER HISTÓRICO MÉDICO: </strong>nosso sistema identificou que o histórico médico
                    ainda não foi preenchido. Para que os testes sejam liberados é importante preencher o histórico médico.
                </p>
                <a href="/historico/{{ $pedido->id}}" class="bg-green-500 block text-center text-white py-2 px-4 rounded-lg mt-4 w-full">
                    PREENCHER HISTÓRICO MÉDICO</a>
            </div>
        @else
            <div class="flex flex-col md:flex-row gap-4 mt-4">
                <div class="w-full">
                    <div class="bg-white overflow-x-auto rounded-lg shadow-md py-6 px-16 ">
                        <p><strong>IMPORTANTE SABER:</strong> os testes são inteiramente controlados pelo sistema. Devem ser respondidos
                            na ordem que forem liberados. Ao finalizar um teste, o próximo será liberado, bem como a emissão
                            do relatório do(s) teste(s) finalizado(s).
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 mt-4">
                <div class="w-full">
                    <div class="bg-white overflow-x-auto rounded-lg shadow-md mb-4">
                        <table class="w-full">
                            <thead class="hidden md:table-header-group">
                                <tr>
                                    <th class="text-left font-semibold uppercase px-4 py-3">Nome do Teste</th>
                                    <th class="text-left font-semibold uppercase px-4 py-3">Situação</th>
                                    <th class="text-left font-semibold uppercase px-4 py-3">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($itensDoPedido as $item)
                                    <tr wire:key="{{ $item->id }}" class="block md:table-row mb-4 md:mb-0 border md:border-0 rounded-lg md:rounded-none md:border-t">
                                        
                                        <td class="p-4 w-full md:w-auto block md:table-cell">
                                            <div class="flex items-center gap-4">
                                                <img class="h-12 w-12 md:h-16 md:w-16 flex-shrink-0" src="{{ asset('images/sobrare_logo_redondo.png') }}" alt="{{ $item->testes->nomeTeste }}">
                                                <div>
                                                    <p class="font-semibold text-gray-800">{{ $item->testes->nomeTeste }}</p>
                                                    @if($item->testeStatus == "gerando")
                                                        <p class="text-xs text-gray-500 mt-1">(*) O relatório demora alguns minutos para ser gerado. Por favor, aguarde 5 minutos e atualize a página</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-4 block md:table-cell md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Situação: </span>
                                            <span>{{ $item->testeStatus }}</span>
                                        </td>

                                        <td class="p-4 block md:table-cell md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Ação: </span>
                                            
                                            @if($item->testeStatus == "novo")
                                                <button disabled class="text-gray-500 bg-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center whitespace-nowrap">Aguardando</button>
                                            @elseif($item->testeStatus == "iniciado")
                                                <a wire:navigate href="/responderteste?cctt={{ $item->testes->id }}&ccxx={{ $pedido->id}}&ccii={{ $item->id }}" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center whitespace-nowrap">Responder</a>
                                            @elseif($item->testeStatus == "pendente")
                                                <a wire:navigate href="/relatorios?cctt={{ $item->testes->id }}&ccxx={{ $pedido->id}}&ccii={{ $item->id }}" class="text-white bg-gradient-to-br from-blue-600 to-purple-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center whitespace-nowrap">Emitir Relatório</a>
                                            @else
                                                @if($item->controleRelatorio)
                                                    <a href="{{ route('reports.download', ['report' => $item->controleRelatorio->id]) }}" target="_blank" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center whitespace-nowrap">Baixar Relatório</a>
                                                @else
                                                    <div class="flex flex-col items-start">
                                                        <button disabled class="text-gray-500 bg-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center whitespace-nowrap">Relatório Inexistente(*)</button>
                                                        <p class="text-xs text-gray-500 mt-1">(*) Verifique se o teste foi respondido ou reporte o erro.</p>
                                                    </div>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>