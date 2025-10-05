<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-4xl font-bold text-slate-500">Meus Pedidos</h1>

        @if ($pedidos->isEmpty())
            <div class="text-center py-10">
                <p class="text-gray-500">Você ainda não tem nenhum pedido.</p>
            </div>
        @else
            <div class="flex flex-col mt-5">
                <div class="w-full">
                    <div class="bg-white rounded-lg shadow-md">
                        <table class="w-full">
                            <thead class="hidden md:table-header-group bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">N. Pedido</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Data</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Situação Pedido</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Situação Pagamento</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Total do Pedido</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Ações Disponíveis</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr wire:key="{{ $pedido->id }}" class="block md:table-row mb-4 md:mb-0 border md:border-0 rounded-lg shadow-md md:shadow-none md:border-t">
                                        
                                        <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">N. Pedido:</span>
                                            <span class="font-medium text-gray-800">{{ $pedido->id }}</span>
                                        </td>

                                        <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Data:</span>
                                            <span class="text-gray-800">{{ $pedido->created_at->format('d-m-Y') }}</span>
                                        </td>
                                        
                                        <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Situação Pedido:</span>
                                            <span class="bg-orange-500 text-white text-xs font-medium px-2.5 py-1 rounded-full">
                                                {{ $pedido->orderStatus }}
                                            </span>
                                        </td>

                                        <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Situação Pagamento:</span>
                                            <span class="bg-green-500 text-white text-xs font-medium px-2.5 py-1 rounded-full">
                                                {{ $pedido->paymentStatus }}
                                            </span>
                                        </td>

                                        <td class="p-4 flex justify-between items-center md:table-cell md:px-6 md:py-4 md:align-middle">
                                            <span class="font-semibold text-gray-600 md:hidden">Total:</span>
                                            <span class="font-bold text-gray-800">{{ Number::currency($pedido->grand_total, 'BRL') }}</span>
                                        </td>
                                        
                                        <td class="p-4 block md:table-cell md:px-6 md:py-4 md:align-middle md:text-center">
                                            {{-- A LÓGICA ORIGINAL FOI 100% PRESERVADA AQUI --}}
                                            @if( $pedido->paymentStatus == 'pago')
                                                <a href="/ver-testes/{{ $pedido->id }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 w-full md:w-auto text-center">
                                                    Ver Testes
                                                </a>
                                            @else
                                                <a href="/meus-pedidos/{{ $pedido->id }}" class="inline-block bg-slate-600 text-white py-2 px-4 rounded-lg hover:bg-slate-700 w-full md:w-auto text-center">
                                                    Ver Detalhes
                                                </a>
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