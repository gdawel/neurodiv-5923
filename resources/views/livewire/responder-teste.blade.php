<div wire:key="TESTE">
    <div class="text-center py-8">   
    <h1 class="text-base font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-2xl">Teste: 
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
            {{ $nomeTeste }}</span> <br>
            </h1>
    <p class="pt-4 text-base font-normal text-gray-600 px-14 lg:text-xl dark:text-gray-400">
        Atenção! Cada pergunta pode conter diferentes opções de respostas.</p>

                   {{--  Care about people's approval and you will be their prisoner.<br>.....</h1> --}}
    
        
       
        <h2 class="font-bold py-2"> Pergunta n. {{ $this->seqPerguntas }} / Total de Perguntas: {{ $totalPerguntas  }}<br></h2>
        {{-- <pre>  <php print_r($perguntas); ?> </pre> --}}
        {{-- <h4>Pergunta ID: {{ $this->perguntaId }}</h4> --}}
       
    @foreach ($perguntas as $pergunta)
            <p wire:model="perguntaId" wire:key="{{ $pergunta->id }}" class="mt-4 lg:text-xl lg:px-16 sm: px-4 sm:text-base ">
                 {{ $pergunta->enunciado}}</p><br>
                {{-- Pergunta n. {{ $pergunta->sequencia}} - {{ $pergunta->enunciado}}</p><br> --}}
            
        <div>
            <div 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rouded-lg">
                <div wire:model.live="opcoesRespostasId" class="w-full me-4 px-4 py-2">
                    <div class="flex flex-wrap justify-center items-start gap-x-12 gap-y-6">
                        @foreach ($this->opcoesResposta as $opcresp)
                        
                            @if($opcresp->tipoOpcaoResposta == "P")
                               <div class="flex items-start space-x-3 text-left" wire:key="{{ $opcresp->id }}">
                                <input wire:model="respostaprimaria" type="{{ $opcresp->inputType }}" id="{{ $opcresp->id }}" name="resposta" value="{{ $opcresp->id}}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="{{ $opcresp->id }}"
                                        class="me-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{-- {{ $opcresp->id }}- --}}
                                        {!! $opcresp->textoResposta !!}</label>   
                                </div>
                            @endif
                        
                        @endforeach
                    </div>
                </div>
          {{-- <div wire:model="complementos"> --}}
                @if($this->complementos == "S")
                    <br>
                    <p class="mb-2 font-semibold text-gray-900 dark:text-white text-center px-4">Complemente sua resposta</p>
                    <ul class="w-full max-w-md mx-auto text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full  border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        
                            @foreach ($this->opcoesResposta as $opcresp)
                                @if($opcresp->tipoOpcaoResposta == "C" && $opcresp->inputType == "Checkbox")
                                <div class="flex flex-row items-center text-left ps-3">
                                    <input wire:model.live="opcRespCheckbox" type="{{ $opcresp->inputType }}" id="{{ $opcresp->id }}-{{ $opcresp->inputType }}" name="resposta" value="{{ $opcresp->id}}"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="{{ $opcresp->id }}-{{ $opcresp->inputType }}"
                                        class="w-full py-1 ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{-- {{ $opcresp->id }}- --}}{{ $opcresp->textoResposta}}</label>
                                </div>
                                @endif

                                
                            @endforeach
                        @error('opcRespCheckbox')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">@error('opcRespCheckbox') {{ $message }} @enderror</div>
                        @enderror
                        </li>
                    </ul>   
                    @if ($opcresp->tipoOpcaoResposta == "C" && $opcresp->inputType == "Select")
                        <label for="countries_disabled" class="px-4 mt-1 text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione a Intensidade:</label>
                            <div class="max-w-md mx-auto mt-4 px-4">
                                <select wire:model.live="opcRespIntensidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Intensidade</option>
                                        @foreach ($this->opcoesResposta as $opcresp)
                                            @if ($opcresp->inputType == "Select")
                                            <option value="{{ $opcresp->id }}">{{-- {{ $opcresp->id }}- --}}{{ $opcresp->textoResposta}}</option>
                                            @endif
                                    @endforeach
                                
                                </select>
                            </div>
                    @endif
                    @error('opcRespIntensidade')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">@error('opcRespIntensidade') {{ $message }} @enderror</div>
                    @enderror
                @endif
            {{-- </div> --}}
            @if($this->comentarios == "S")
                <div class="mt-6 flex flex-col items-center">
                    
                        <label for="mensagem" 
                            class="mt-1 block mb-2 text-sm font-medium text-gray-900 dark:text-white">É muito importante que comente sua resposta.</label>
                        <textarea wire:model="comentariosCliente" id="comentarios" rows="1" 
                            class="items-center p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Escreva seu comentário">{{ $this->comentariosCliente }}</textarea>
                        @error('comentariosCliente')
                            <div class="p-4 items-center text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">@error('comentariosCliente') {{ $message }} @enderror</div>
                        @enderror
                </div>
            @endif
           
            @if($this->seqPerguntas == $totalPerguntas)
                <div class="my-4">
                    <button 
                        @if(!$this->habilitarBotaoResposta) disabled 
                            class="pb-4 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        @endif 
                        wire:click="finalizarTeste({{$pergunta->id}})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Responder e Finalizar o Teste </button>
                </div>
                
            @else
                <div class="my-4">
                    <button 
                        @if(!$this->habilitarBotaoResposta) disabled 
                            class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 mb-2 text-center"
                        @endif 
                        wire:click="proximaPergunta({{$pergunta->id}})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Responder </button>
                </div>
            @endif
        </div>
    @endforeach    
        
    
</div>
</div>