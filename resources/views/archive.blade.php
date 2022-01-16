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
                        <div class="bg-white p-6 shadow-md rounded-md">
                            <h3 class="text-xl text-gray-800 font-semibold mb-3">{{$item->object_devis}}</h3>
                            <p class="mb-2">10 minutes to make</p>
                            <p class="my-4">blah blah blah</p>
                            <button
                                class="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">
                                <span class="fa fa-download"></span></fa-download>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    
                    <div
                        class="md:grid lg:grid-cols-5 md:grid-cols-3 mlg:grid-cols-4 md:gap-3 space-y-4 md:space-y-0 px-6 md:px-0 mx-auto">
                        <div class="bg-white p-6 shadow-md rounded-md">
                            <h3 class="text-xl text-gray-800 font-semibold mb-3">greek salad</h3>
                            <p class="mb-2">10 minutes to make</p>
                            <p class="my-4">blah blah blah</p>
                            <button
                                class="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">
                                <span class="fa fa-download"></span></fa-download></button>
                        </div>
                        <div class="bg-white p-6 shadow-md rounded-md">
                            <h3 class="text-xl text-gray-800 font-semibold mb-3">greek salad</h3>
                            <p class="mb-2">10 minutes to make</p>
                            <p class="my-4">blah blah blah</p>
                            <button
                                class="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">Cook
                                This</button>
                        </div>
                        <div class="bg-white p-6 shadow-md rounded-md">
                            <h3 class="text-xl text-gray-800 font-semibold mb-3">greek salad</h3>
                            <p class="mb-2">10 minutes to make</p>
                            <p class="my-4">blah blah blah</p>
                            <button
                                class="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">Cook
                                This</button>
                        </div>
                        <div class="bg-white p-6 shadow-md rounded-md">
                            <h3 class="text-xl text-gray-800 font-semibold mb-3">greek salad</h3>
                            <p class="mb-2">10 minutes to make</p>
                            <p class="my-4">blah blah blah</p>
                            <button
                                class="text-lg font-semibold text-gray-700 bg-indigo-100 px-4 py-1 block mx-auto rounded-md">Cook
                                This</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </center>
</x-app-layout>