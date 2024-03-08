  <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <div>
                <h1 class="font-bold text-2xl">E<span class="bg-red-700 p-2 rounded-md text-white">VENTO</span></h1>
            </div>
            <div>
                @hasrole('Customer')
                <a href="/customerBookings" class=" font-bold mx-4 ">
                    Mes evenements

                </a>
                @endhasrole
            </div>
           

            <ul class="ml-auto flex items-center">
               
                <button id="fullscreen-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24" style="fill: gray;transform: ;msFilter:;"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path></svg>
                </button>
              

                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full" src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg" alt=""/>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
                            {{-- @if (Auth::user()->HasRoles('Organizer'))
                            <p class="text-xs text-gray-500">Organisateur</p>
                            
                            @endif --}}
                            @hasrole('Customer')
                               <p class="text-xs text-gray-500">Client</p>
                            @endhasrole
                            @hasrole('Admin')
                               <p class="text-xs text-gray-500">Admin</p>
                            @endhasrole
                            @hasrole('Organizer')
                               <p class="text-xs text-gray-500">Organizateur</p>
                            @endhasrole
                            {{-- {{ Auth::user() }}
                            @if (Auth::user()->HasRoles('Customer'))
                          
                             @endif --}}
                       
                            
                        </div>                
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                             <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        </li>
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      
                        <li>
                           
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>










