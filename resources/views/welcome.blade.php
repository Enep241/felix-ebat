<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>
    </head>
    <body class="antialiased">
     <!--    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="flex flex-wrap px-8 py-4 mx-0 overflow-hidden bg-white fixed top-0 left-0 right-0">

    <div class="flex items-center w-1/4 overflow-hidden text-left sm:w-1/4 md:w-full lg:w-1/4">
      <div class="inline-block text-2xl font-black tracking-tighter text-blue-600 font_inter">
        <img class="h-8" src="{{url('/img/logo.png')}}" alt="" srcset="">
      </div>
    </div>

    <div class="flex items-center justify-center w-2/4 overflow-hidden text-left sm:w-2/4 md:w-full lg:w-2/4 z-50">

      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Accueil</div>
      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Apropos</div>
      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Equipe</div>
      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Témoignages</div>
      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Contact</div>

    </div>

    <!-- Nav bar-->
    <div class="flex items-center justify-end w-1/4 overflow-hidden text-right sm:w-1/4 lg:w-1/4">

      <!-- <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">Connexion</div>
      <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter"> Inscription</div> -->
      
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       
                    @else
                    <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">
                        <a href="{{ route('login') }}" class="">Connexion</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="inline-block ml-8 text-base font-bold tracking-tight text-gray-500 font_inter">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Inscription</a>
                        </div>
                        @endif
                    @endauth
                </div>
            @endif

    </div>
  </div>

  <!-- Image-->

  <div class="m-0 px-[60px] w-full bg-gray-200"">
    <!--Hero-->
    <div class="pt-16">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">DEMANDEZ UN DEVIS CHEZ NOUS</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            POUR GAGNER DU TEMPS
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Vos devis et factures simplifiées.
          </p>
          <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Creer votre devis
          </button>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-5/5 z-40" src="{{url('/img/hero.png')}}" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

 <!-- component -->
 <h1 class="text-4xl bg-stone-100 font-bold text-center uppercase pt-10">A propos</h1>
<section class="py-10 bg-stone-100 ">
    <div class="grid grid-cols-1 sm:grid-cols-2  gap-10 mx-auto  items-center max-w-6xl mx-auto">
      <div class="px-4 md:mr-6">
        <h3 class="text-4xl pr-6 sm:leading-snug tracking-tight font-bold text-black">
          Nous sommes la pour vous satisfaire.
        </h3>
        <p class="mt-4 text-stone-800 text-xl font-medium">
        Ebat est né d'un constat simple : l'absence d'un outil digital moderne, simple à prendre en main et répondant aux besoins quotidiens des particuliers dans le cadre de l'artisanat.
        </p>
      </div>
      <div>
        <div class="absolute bg-blue-500 transform -translate-x-10 relative h-64">
        </div>
        <div class="transform md:rounded-md  bg-white rotate-3 scale-110 translate-x-10 md:shadow-2xl -ml-4 -mt-44 p-12  space-y-2">
          <div class="">
                        <img class="w-full md:w-[100] z-10" src="{{url('/img/appr.jpg')}}">
                      </div>
        </div>
      </div>
    </div>
  </section>

  
    <div class="w-full bg-gray-200 py-24 ">
      <h1 class="text-4xl font-bold text-center uppercase pb-20">Notre Equipe</h1>


      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-7 px-28">
        <div class="w-full bg-gray-900 rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="/img/daquin.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Aldo DAQUIN</p>
            <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
          </div>
        </div>
        <div class="w-full bg-gray-900 rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="/img/Marcy2.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Ange MARCY</p>
            <p class="text-base text-gray-400 font-normal">Software Engineer</p>
          </div>
        </div>
        <div class="w-full bg-gray-900 rounded-lg p-12 flex flex-col justify-center items-center">
          <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="/img/thethe.png" alt="photo">
          </div>
          <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">MANDZE THE</p>
            <p class="text-base text-gray-400 font-normal">CEO</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="w-full m-0 px-20 bg-white pb-36">
    <div class="w-full py-6">
      <h1 class="text-4xl font-bold text-center uppercase py-10">Témoignages</h1>
    </div>
    <div class="w-full flex justify-items-center items-center">
     
      <!--start content card 1 -->
      
      <div class="rounded-lg p-8 bg-gray-300 mx-4">
      <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="">
            </div>
        </div>
      <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
        <p class="text-sm text-gray-600 text-center px-5">
           Très facile d'utilisation ! Le gros avantage est de pouvoir travailler de n'importe quel poste car il suffit d'avoir simplement une connexion internet. Je recommande !
        <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </p>
        <h3 class="mt-6 font-bold text-center">
          @Diane M. <span class="text-md text-indigo-500 font-bold text-center italic">Femme au foyer</span>
        </h3>
      </div>
       <!-- End content card 2 -->
  
      <!-- start content card 2 -->
      <div class="rounded-lg p-8 bg-gray-300 mx-4">
      <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
            </div>
        </div>
      <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
        <p class="text-sm text-gray-600 text-center px-5">
        Vraiment un bon logiciel, pratique et simple d’utilisation, je le recommande vivement aux particuliers qui ont besoin d’un logiciel de facturation-devis efficace.
      <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </p>

        <h3 class="mt-6 font-bold text-center">
          @Willy N. <span class="text-md text-indigo-500 font-bold text-center italic">Worker in FT2D</span>
        </h3>
      </div>
       <!-- End content card 2 -->
      
      <!-- start content card 2 -->
      <div class="rounded-lg p-8 bg-gray-300 mx-4">
      <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
            </div>
        </div>
      <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
        <p class="text-sm text-gray-600 text-center px-5">
          Une application très pratique, facile à utiliser pour notre devis de construction de piscine. Une équipe technique à notre écoute, et très réactive.
      <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </p>

        <h3 class="mt-6 font-bold text-center">
          @Martin H. <span class="text-md text-indigo-500 font-bold text-center italic">Peintre</span>
        </h3>
      </div>
       <!-- End content card 2 -->

    </div>

  </div>
  
  
  <!-- component -->
<div class="w-full">
    <div class="bg-gradient-to-b from-blue-800 to-blue-400 h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
            <p class="text-4xl font-bold text-center uppercase py-10">Nous Contactez</p>
            <!-- <p class="text-3xl font-bold leading-7 text-center">Nous Contactez</p> -->
            <form action="" method="post">
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">Nom(s)</label>
                        <input type="text" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none">Numéro</label>
                        <input type="email" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                    </div>
                </div>
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label class="font-semibold leading-none">Sujet</label>
                        <input type="text" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                    </div>
                    
                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none">Message</label>
                        <textarea type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-400 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 focus:outline-none">
                        Envoyer message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
  
 

  <!-- footer -->
  <div class="w-full bg-blue-400 px-16 py-10 flex justify-items-center justify-center">

    
    <div class="w-2/6">
      <img class="h-8" src="{{url('/img/logo.png')}}" alt="">
    </div>
    
    <div class="w-2/6 flex justify-center">
      <!--Facebook Button -->
      <button id="facebook" class="bg-white  sticky duration-500 border-2 border-blue-600 fixed  w-12 transform hover:-translate-y-3   h-12 text-2xl rounded-full hover:bg-blue-600 hover:text-white text-blue-600 ">
        <i class="fab fa-facebook-f"></i>
      </button>
      <!--İnstagram Button -->
      <button id="instagram" class=" border-2 hover:border-0 border-pink-500 bg-gradient-to-b text-2xl hover:from-indigo-600 hover:via-pink-600 hover:to-yellow-500 min-w-wull hover:text-white bg-white text-pink-600 w-12 h-12  transform hover:-translate-y-3 rounded-full duration-500 ">
        <i class="fab fa-instagram"></i>
      </button>
      <!--Whatsapp Button -->
      <button id="whatsapp" class="bg-white duration-500 w-12 h-12 border-2 rounded-full border-green-600 transform hover:-translate-y-3  text-2xl text-green-500 hover:bg-green-600 hover:text-white">
        <i class="fab fa-whatsapp"></i>
      </button>
      <!--Twitter Button -->
      <button id="twitter" class="bg-white  transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-blue-400 border-blue-400 hover:bg-blue-400 hover:text-white text-2xl">
        <i class="fab fa-twitter"></i>
      </button>
    </div>
    
    <div class="w-2/6 justify-end">
      <p class="text-right">Copyright &copy; 2022</p>
    </div>

  </div>

    </body>
</html>
