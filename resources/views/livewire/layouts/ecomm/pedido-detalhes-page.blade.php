<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-4xl font-bold text-slate-500">Detalhes do Pedido</h1>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                        <svg class="flex-shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M22 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                    </div>
                    <div class="grow">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Cliente</p>
                        <div class="mt-1">
                            <div>{{ $detalhesCliente->firstName }} {{ $detalhesCliente->lastName }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                        <svg class="flex-shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 22h14" /><path d="M5 2h14" /><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" /><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" /></svg>
                    </div>
                    <div class="grow">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Data do Pedido / Nº</p>
                        <div class="mt-1">
                            <h3 class="text-xl font-medium text-gray-800">{{ $pedido->created_at->format('d-m-Y') }} / {{ $pedido->id}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                        <svg class="flex-shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" /><path d="m12 12 4 10 1.7-4.3L22 16Z" /></svg>
                    </div>
                    <div class="grow">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Situação do Pedido</p>
                        <div class="mt-1">
                            <span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">{{ $pedido->orderStatus }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                        <svg class="flex-shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" /><path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" /><path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" /><path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" /></svg>
                    </div>
                    <div class="grow">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Situação do Pagamento</p>
                        <div class="mt-1">
                            <span class="bg-green-500 py-1 px-3 rounded text-white shadow">{{ $pedido->paymentStatus }}</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @if($pedido->paymentStatus != 'pago' )
            <div class="mt-5 bg-red-50 border-s-4 border-red-500 p-4 rounded-lg shadow-sm" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                        </span>
                    </div>
                    <div class="ms-3">
                        <h3 class="text-gray-800 font-semibold">
                            Pedido Pendente de Pagamento
                        </h3>
                        <p class="text-sm text-gray-700 mt-1">
                            Para que os testes sejam liberados é importante efetuar o pagamento. Caso já tenha pago, por favor, entre em contato com o suporte da SOBRARE.
                        </p>
                        <div class="mt-3">
                            <p class="bg-red-600 text-center text-white py-2 px-4 rounded-lg font-semibold">
                                Contatos: <br>faleconosco@sobrare.com.br<br>+55 11 5549-2943
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(!$temHistoricoMedico->historicomedico)
            {{-- Este bloco continua com o botão, como estava antes --}}
            <div class="mt-5 bg-green-50 border-s-4 border-green-500 p-4 rounded-lg shadow-sm" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                         <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-green-100 bg-green-200 text-green-800">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        </span>
                    </div>
                    <div class="ms-3">
                        <h3 class="text-gray-800 font-semibold">Ação Necessária: Preencher Histórico Médico</h3>
                        <p class="text-sm text-gray-700 mt-1">Para que seus testes sejam liberados, o próximo passo é preencher seu histórico médico.</p>
                        <div class="mt-4">
                            <a href="/historico/{{ $pedido->id}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 px-4 py-2">
                                Preencher Histórico
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- Este bloco é apenas informativo, continua como estava --}}
            <div class="mt-5 bg-blue-50 border-s-4 border-blue-500 p-4 rounded-lg shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-blue-100 bg-blue-200 text-blue-800">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
                        </span>
                    </div>
                    <div class="ms-3">
                        <h3 class="text-gray-800 font-semibold">Informação Importante</h3>
                        <p class="text-sm text-gray-700">Os testes são controlados pelo sistema e devem ser respondidos na ordem em que forem liberados. Ao finalizar um, o próximo será disponibilizado.</p>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="flex flex-col mt-4">
            <div class="w-full">
                <div class="bg-white rounded-lg shadow-md">
                    <table class="w-full">
                        <thead class="hidden md:table-header-group bg-slate-50">
                            <tr>
                                <th class="w-1/2 text-left font-semibold uppercase px-6 py-3 text-slate-600">Nome do Teste</th>
                                <th class="w-1/4 text-left font-semibold uppercase px-6 py-3 text-slate-600">Situação</th>
                                <th class="w-1/4 text-left font-semibold uppercase px-6 py-3 text-slate-600">N. Ítem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($itensDoPedido as $item)
                                <tr wire:key="{{ $item->id }}" class="block md:table-row mb-4 md:mb-0 border md:border-0 rounded-lg shadow-md md:shadow-none md:border-t">
                                    
                                    <td class="p-4 block md:table-cell md:align-middle">
                                        <div class="flex items-center gap-4">
                                            <img class="h-12 w-12 flex-shrink-0" src="{{ asset('images/sobrare_logo_redondo.png') }}" alt="{{ $item->testes->nomeTeste }}">
                                            <span class="font-semibold text-gray-800">{{ $item->testes->nomeTeste }}</span>
                                        </div>
                                    </td>
                                    
                                    <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                        <span class="font-semibold text-gray-600 md:hidden">Situação:</span>
                                        <span class="text-gray-800">{{ $item->testeStatus }}</span>
                                    </td>
                                    
                                    <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                        <span class="font-semibold text-gray-600 md:hidden">N. Ítem:</span>
                                        <span class="text-gray-800">{{ $item->id }}</span>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
</div>