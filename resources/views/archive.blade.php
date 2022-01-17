<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devis') }}
        </h2>
    </x-slot>

    <!--div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @role('customer')
                    <div class="bg-red-600"> I am a customer!</div>
                    @else
                    I am not a admin...
                    @endrole
                </div>
            </div>
        </div>
    </div-->

    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

    <center>
        <!-- Create by joker banny -->
        <div class="h-screen flex justify-center items-center">
            <main>
                
                <div class="container w-full md:px-2 mx-auto py-1">
                
                    <div class="md:grid lg:grid-cols-5 md:grid-cols-3 mlg:grid-cols-4 md:gap-3 space-y-4 md:space-y-0 px-6 md:px-0 mx-auto">
                        @foreach ($devis as $item)
                        <div class="bg-white p-6 shadow-md rounded-lg">
                            <h3 class="text-gray-800 font-bold mb-3">{{$item->object_devis}}</h3>
                            {{-- affiche lauteur du devis au superviseur --}}
                                @role('supervisor')
                                <p class="mb-2">{{$item->email}}</p>
                                @else                      
                                <p class="mb-2">Depuis le {{$item->created_at}}</p>
                                @endrole

                            {{-- affichons le statut du devis --}}
                            @switch($item->statut)
                                @case(1)
                                    First case...
                                    <p class="my-4 font-semibold text-green-400">viable</p>
                                    @break

                                @case(-1)
                                    Second case...
                                    <p class="my-4 font-semibold text-red-600">annul&eacute;</p>
                                    @break

                                @default
                                    <p class="my-4 font-semibold text-yellow-500">en attente</p>
                            @endswitch

                            @role('customer')
                                <button class="text-lg font-semibold text-gray-100 bg-gray-600 pull-left px-4 mx-auto rounded-md">
                                    <span class="fa fa-download"></span>
                                </button>
                            @endrole
                            <button class="text-lg font-semibold text-gray-700 bg-indigo-100 pull-right px-4 mx-auto rounded-md">Ouvrir</button>
                        </button>
                        </div>
                        @endforeach
                    </div>
                </div>                
            </main>
        </div>

    </center>
</x-app-layout>