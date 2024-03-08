<x-app-layout>
   
    <style>
        .aa{
            background-image: url('../assets/img/home.jpg');
          
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          
        }
    </style>
    <header class="aa h-80 ">
        <div class="h-80 bg-black opacity-80 flex justify-center items-center">
            <h1 class="text-6xl font-bold text-gray-50">Demandes de reservation</h1>
        </div>
    </header>
    <section>
        <div class="bg-slate-500 rounded-2xl p-4 w-3/4 m-auto my-5">
              {{-- @if(!$message)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 flex">
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                        </div>
                    </div>
                </div>
            </div>
            @endif --}}
            {{-- @if ($event->bookings == null)
            <p>errooor</p>
                
            @else --}}
            
                @foreach ($event->bookings as $booking)
                    @if ($booking->isApproved == 0)
           
                    <div class="bg-slate-800 rounded-2xl p-4 w-3/4 m-auto my-5 flex justify-between items-center">
                        <div class="flex justify-center items-center gap-4">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h1 class="text-gray-50 font-bold text-xl">
                                {{ $booking->customer->user->name }}
                                <br>
                                <span class="font-medium text-sm">
                                    {{ $booking->customer->user->email }} 
                                </span>
                            </h1>
                        </div>
                        
                            <p class="text-white">Résérvé a {{ $booking->created_at }}</p>
                            <div  class="bg-gray-50 rounded-xl p-2 flex justify-center items-center gap-4">
                              <form action="/Approved{{ $booking->id }}" method="post">
                                @csrf
                                <button>
                                      <svg class="w-10 h-10 hover:w-12 hover:h-12 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                            </svg>
                                </button>
                              </form>
                            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd"/>
                            </svg>
  
                            </div>
                        
                        
                        

                     </div>
                         
                    @endif
            @endforeach
{{--                 
            @endif --}}
        

         


        </div>
    </section>
</x-app-layout>