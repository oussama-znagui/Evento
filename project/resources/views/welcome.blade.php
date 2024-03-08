

<x-app-layout>
    <style>
        .aa{
            background-image: url('./assets/img/home.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          
        }
    </style>
    <header class=" h-screen aa">
        <div class="h-screen bg-black opacity-80 flex flex-col justify-center items-center">
            
<h1 class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-50 md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
<p class="mb-6 text-center text-lg font-normal text-gray-200 lg:text-xl sm:px-16 xl:px-48 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam atque rem doloremque porro? Officia earum dicta ut animi molestiae alias quos nobis excepturi impedit! Eaque doloremque quos et. Hic, repellat.</p>
<a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
    Learn more
    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
  </svg>
</a>

        </div>
        

    </header>
    <section class="my-5 w-3/4 m-auto">
        <h1 class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Evenements</h1>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($events as $event)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="./assets/img/home.jpg" alt="" />
                    </a>
                    <div class="p-5">
                         <p>{{ $event->category->name }}</p>
                        <div class="flex justify-between items-center">
                           
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->title }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->price }} DHS</p>
                        </div>
                        <p class="flex justify-start items-center gap-6 mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path fill-rule="evenodd" d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
  </svg>
  {{ $event->date }} 
</p>
 <p class="flex justify-start items-center gap-6 mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
  {{ $event->place }} 
</p>
 <p class="flex justify-start items-center gap-6 mb-3 font-normal text-gray-700 dark:text-gray-400">
                           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5c0-.6.4-1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3c0-.6.4-1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3c0-.6.4-1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-8-5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm2 4a3 3 0 0 0-3 2v.2c0 .1-.1.2 0 .2v.2c.3.2.6.4.9.4h6c.3 0 .6-.2.8-.4l.2-.2v-.2l-.1-.1A3 3 0 0 0 10 14H7.9Z" clip-rule="evenodd"/>
  </svg>
  
  {{ $event->NDP }} Places
</p>

                        
                        <a href="/eventC/{{ $event->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Reserver Maintenant
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                                
            @endforeach
            




        </div>

    </section>
</x-app-layout>