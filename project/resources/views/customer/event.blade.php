<x-app-layout>
     <style>
        .aa{
            background-image: url('../assets/img/home.jpg');
          
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          
        }
    </style>
    <header class=" h-screen lg:flex   ">
        <div class=" aa  lg:w-3/5  ">
            <div class="bg-black h-screen  opacity-80 w-full flex justify-center items-center flex-col">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-50 md:text-5xl lg:text-6xl dark:text-white">{{ $event[0]->title }}</h1>
<p class="mb-6 text-lg font-normal text-gray-200 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Categorie : {{ $event[0]->category->name }}</p>
<a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
    Plus d'info
  
</a>
            </div>
            


        </div>
        <div class="lg:w-2/5 bg-slate-200 p-10">
            <div class="rounded-2xl bg-slate-400 p-5"> 
                <div class="my-5 rounded-2xl  border-b-4 border-stone-900">
                    <h1 class="text-center font-black text-3xl">{{ $event[0]->title }}</h1>
                <p class="text-gray-800 text-center">{{ $event[0]->category->name }}</p>
                </div>
                <div class="my-5">
                    <p class="text-center">Description : </p>
                     <p class="text-gray-800 text-center">{{ $event[0]->description }}</p>

                </div>
                <p class="flex justify-center items-center gap-4 my-2">
                    <svg class="w-8" viewBox="0 0 20 20">
							<path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
						</svg>
                        <span>{{ $event[0]->place }}</span>
                </p>
                <p class="flex justify-center items-center gap-4 my-2">
                   <svg class="w-8" viewBox="0 0 20 20">
							<path d="M14.38,3.467l0.232-0.633c0.086-0.226-0.031-0.477-0.264-0.559c-0.229-0.081-0.48,0.033-0.562,0.262l-0.234,0.631C10.695,2.38,7.648,3.89,6.616,6.689l-1.447,3.93l-2.664,1.227c-0.354,0.166-0.337,0.672,0.035,0.805l4.811,1.729c-0.19,1.119,0.445,2.25,1.561,2.65c1.119,0.402,2.341-0.059,2.923-1.039l4.811,1.73c0,0.002,0.002,0.002,0.002,0.002c0.23,0.082,0.484-0.033,0.568-0.262c0.049-0.129,0.029-0.266-0.041-0.377l-1.219-2.586l1.447-3.932C18.435,7.768,17.085,4.676,14.38,3.467 M9.215,16.211c-0.658-0.234-1.054-0.869-1.014-1.523l2.784,0.998C10.588,16.215,9.871,16.447,9.215,16.211 M16.573,10.27l-1.51,4.1c-0.041,0.107-0.037,0.227,0.012,0.33l0.871,1.844l-4.184-1.506l-3.734-1.342l-4.185-1.504l1.864-0.857c0.104-0.049,0.188-0.139,0.229-0.248l1.51-4.098c0.916-2.487,3.708-3.773,6.222-2.868C16.187,5.024,17.489,7.783,16.573,10.27"></path>
						</svg>
                        <span>{{ $event[0]->date }}</span>
                </p>
                <p class="flex justify-center items-center gap-4 my-2">
                   <svg class="w-8" viewBox="0 0 20 20">
							<path d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
						</svg>
                        <span>{{ $event[0]->NDP }} Places</span>
                </p>
                <div class="flex justify-between items-center my-5">
                    <h1 class="font-bold text-2xl">{{ $event[0]->price }} DHS</h1>
                   <form  action="/booking" method="post">
                    @csrf
                    <input name="event_id" type="text" value="{{ $event[0]->id }}" class="hidden">
                     <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Résérvez-maintenant</button>
                   </form>

                </div>
                @if ( $event[0]->acceptance == true )
                <p class="text-center">*L'acceptation est automatique, votre réservation sera confirmée immédiatement.</p>                    
                @else
                <p class="text-center">Après réservation, attente de l'acceptation de l'organisateur.</p>
                    
                @endif
               
                
                <div>

                </div>
            </div>

        </div>
        




    </header>
    <section>

    </section>
   
</x-app-layout>