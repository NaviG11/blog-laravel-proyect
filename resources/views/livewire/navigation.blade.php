<nav x-data="{ open: false }"
    style="background: #4568DC; background: -webkit-linear-gradient(to right, #B06AB3, #4568DC); background: linear-gradient(to right, #B06AB3, #4568DC);">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden shadow">
                <button x-on:click="open=true" type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-purple-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            {{-- Logotipo --}}
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                {{-- Modificacion al logo de la web --}}
                <a href="/" class="flex flex-shrink-0 items-center">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534 534" width="50"
                        height="50">
                        <style>
                            .st0 {
                                fill: #f8f8f8
                            }

                            .st1 {
                                fill: url(#SVGID_1_)
                            }

                            .st2 {
                                fill: url(#SVGID_2_)
                            }

                            .st3 {
                                fill: url(#SVGID_3_)
                            }

                            .st4 {
                                fill: url(#SVGID_4_)
                            }

                            .st5 {
                                fill: url(#SVGID_5_)
                            }
                        </style>
                        <circle class="st0" cx="267" cy="267" r="267" />
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="210.818" y1="264.548"
                            x2="257.034" y2="45.227">
                            <stop offset=".064" stop-color="#512589" />
                            <stop offset=".435" stop-color="#8b307d" />
                            <stop offset=".708" stop-color="#cb3c6f" />
                            <stop offset=".926" stop-color="#e64169" />
                        </linearGradient>
                        <path class="st1"
                            d="M267 109.2c-1.3 7-3.1 13.9-4.6 20.9-12.2 53.1-24.4 106.1-36.7 159.2-1 4.5-4.2 7.4-7 10.8-17.4 20.9-34.6 41.9-52 62.8 20-63.9 39.9-128 59.8-191.9 1.7-5.7 5.1-10 8.3-14.8 10.8-15.7 21.2-31.6 32.2-47z" />
                        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="260.056" y1="277.6"
                            x2="242.121" y2="69.177">
                            <stop offset=".064" stop-color="#512589" />
                            <stop offset=".435" stop-color="#8b307d" />
                            <stop offset=".708" stop-color="#cb3c6f" />
                            <stop offset=".926" stop-color="#e64169" />
                        </linearGradient>
                        <path class="st2"
                            d="M276.7 96.4c8 12.2 15.5 24.9 23.5 37.1 1.8 2.9 3.7 5.5 3.9 9 1.2 24.2.7 48.6 1.5 73 .9 22.3.5 44.6 1.5 66.9.9 17.8.3 35.6 1 53.4.6 13.1 1 26.1.8 39.2-32.1.6-64.1.4-96.1.5 14.4-62.2 28.7-124.4 42.8-186.6 7.1-30.8 13.9-61.7 21.1-92.5z" />
                        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="137.939" y1="326.051"
                            x2="209.676" y2="137.371">
                            <stop offset=".064" stop-color="#512589" />
                            <stop offset=".435" stop-color="#8b307d" />
                            <stop offset=".708" stop-color="#cb3c6f" />
                            <stop offset=".926" stop-color="#e64169" />
                        </linearGradient>
                        <path class="st3"
                            d="M213.1 185.3c-19.3 62.6-39 125.2-58.2 187.9-23.3.1-46.5 0-69.8 0 36.7-54.1 73.7-108.1 110.3-162.2 6-8.6 11.5-17.4 17.7-25.7z" />
                        <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="330.171" y1="312.71"
                            x2="307.376" y2="184.251">
                            <stop offset=".064" stop-color="#512589" />
                            <stop offset=".435" stop-color="#8b307d" />
                            <stop offset=".708" stop-color="#cb3c6f" />
                            <stop offset=".926" stop-color="#e64169" />
                        </linearGradient>
                        <path class="st4"
                            d="M333 194.3c5.3 35.1 10.2 70.4 15.4 105.5-11.5 21-21.7 42.8-33 64-.1-21.2-1.3-42.4-1.2-63.7.1-19.3-.9-38.4-1.4-57.6-.1-3.9-.1-7.5 1.8-10.9 6.2-12.5 12.3-24.9 18.4-37.3z" />
                        <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="397.875" y1="343.556"
                            x2="346.676" y2="203.992">
                            <stop offset=".064" stop-color="#512589" />
                            <stop offset=".435" stop-color="#8b307d" />
                            <stop offset=".708" stop-color="#cb3c6f" />
                            <stop offset=".926" stop-color="#e64169" />
                        </linearGradient>
                        <path class="st5"
                            d="M340.7 199.2c5.1 7.3 9.7 15.1 14.5 22.7 32 50.9 64.2 101.4 96.7 152.1-28.6.1-57.2-.2-85.7 0-1.7-10.5-3.1-21.1-4.6-31.6-5.8-41.4-12-82.8-18.1-124.2-1.1-6.4-2.1-12.7-2.8-19z" />
                    </svg>
                </a>

                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ route('centers.index') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Centros
                            de ayuda</a>
                        <a href=""
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Cuestionario</a>
                        <a href="{{ route('documents.index') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Reglamentos</a>
                        <a href=""
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Denuncia</a>
                        <a href=""
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Eventos</a>
                        {{-- @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}"
                                class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">{{ $category->name }}</a>
                        @endforeach --}}
                        <div class="relative group">
                            <a href="#"
                                class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">Categories</a>
                            <div class="absolute hidden no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">
                                @foreach ($categories as $category)
                                    <a href="{{ route('posts.category', $category) }}"
                                        class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @auth
                {{-- Menu --}}
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    {{-- x-show="open" x-on:click.away="open = false" --}}
                    <!-- Profile dropdown -->
                    <div class="relative ml-3" x-data="{ open: false }">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-12 w-12 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                    alt="">
                            </button>
                        </div>
                        <div x-show="open" x-on:click.away="open = false"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <a href="{{ route('profile.show') }}"
                                class="no-underline block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-0">Tu perfil</a>
                            @can('admin.home')
                                <a href="{{ route('admin.home') }}" class="no-underline block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                            @endcan
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" class="no-underline block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    @click.prevent="$root.submit();">Cerrar sesión</a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="d-flex justify-content-center">
                    <div class="d-none d-md-flex"> <!-- Mostrar en dispositivos medianos y más grandes -->
                        <a href="{{ route('login') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">LOG
                            IN</a>
                        <a href="{{ route('register') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">REGISTER</a>
                    </div>

                    <div class="d-md-none"> <!-- Mostrar en dispositivos más pequeños (móviles) -->
                        <a href="{{ route('login') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">
                            <i class="fas fa-sign-in-alt"></i> <!-- Icono de inicio de sesión -->
                        </a>
                        <a href="{{ route('register') }}"
                            class="no-underline text-gray-300 hover:bg-purple-400 hover:text-white rounded-md px-3 py-2 text-xl font-bold">
                            <i class="fas fa-user-plus"></i> <!-- Icono de registro -->
                        </a>
                    </div>
                </div>

            @endauth
        </div>

    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    {{-- menu movil --}}
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="{{ route('centers.index') }}"
                class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Centros
                de ayuda</a>
            <a href=""
                class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Cuestionario</a>
            <a href="{{ route('documents.index') }}"
                class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reglamentos</a>
            <a href=""
                class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Denuncia</a>
            <a href=""
                class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Eventos</a>
            @foreach ($categories as $category)
                <a href="{{ route('posts.category', $category) }}"
                    class="text-gray-300 hover:bg-purple-400 hover:text-white block rounded-md px-3 py-2 text-base font-medium">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var categoryDropdown = document.querySelector('.group');
        categoryDropdown.addEventListener('click', function() {
            var dropdownMenu = this.querySelector('.absolute');
            dropdownMenu.classList.toggle('hidden');
        });
    });
</script>