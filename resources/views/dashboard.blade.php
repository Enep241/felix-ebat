<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
    </div>

    <link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

    <center>
        <!-- Create by joker banny -->
        <div class="h-screen flex justify-center items-center">
            <div class="lg:w-2/5 md:w-1/2 w-2/3">
                <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" >
                    <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Demande de devis</h1>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md block text-left" for="username">OBJECT</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="username" />
                    </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md block text-left" for="email">Adresse mail</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
                    </div>

                    <div>
                    
                    <br/>
                    
                    <div class="">
                    <label class="block text-left" style="max-width: 800px">
                         <span class="text-gray-700">Travaux</span>

                        <select class="selectpicker" data-style="btn-primary" multiple data-max-options="2" style="width: 100%">
                         
                              <option value="Peinture">Peinture</option>
                            <option value="carrelage">carrelage</option>
                            <option value="Plomberie">Plomberie</option>
                            <option value="Casse des murs">Casse des murs</option>
                            <option value="Menuisier">Menuisier</option>
                            <option value="Posenouveausol">Pose de nouveau sol</option>
                           
                        </select>
                        </label>
                        
                        </div>
                        
                   <br/>  
                      
                    <label class="block text-left" style="max-width: 800px">
                         <span class="text-gray-700">Travaux</span>
                         <select class="form-multiselect block w-full mt-1" multiple>
                         <option value="Peinture">Peinture</option>
                            <option value="carrelage">carrelage</option>
                            <option value="Plomberie">Plomberie</option>
                            <option value="Casse des murs">Casse des murs</option>
                            <option value="Menuisier">Menuisier</option>
                            <option value="Posenouveausol">Pose de nouveau sol</option>
                        </select>
                        </label>
                   
                    </div>
                    <button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Valider</button>
                </form>
            </div>
        </div>

    </center>
</x-app-layout>