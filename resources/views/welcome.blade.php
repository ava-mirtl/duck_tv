<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css' )
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="Image/x-icon" href="/favicon.ico" rel="icon">
        <title>Duck TV</title>

    </head>
    <body class="flex flex-col justify-between">
        <div class="max-w-7xl md:mx-auto mx-2">
            <header class="bg-white">
                <nav class="mx-auto flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="{{route('main_page')}}" class="-m-1.5 p-1.5">
                             <span class="sr-only">Duck TV</span>
                             <img class="h-15 w-auto" src="images/Logo.svg" alt="желтая утка в очках">
                        </a>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12" >
                        @foreach ($menuItems as $item)
                             <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-duck-600">{{$item->title}}</a>
                        @endforeach
                    </div>
                    <div class="flex lg:hidden" id="burger">
                         <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                              <span class="sr-only">Open main menu</span>
                              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                              </svg>
                         </button>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <button id="open-modal"  class="w-full md:w-44 bg-duck-400 text-white px-6 py-2 rounded-md hover:bg-duck-600">Связаться с нами</button>
                    </div>
                </nav>

                <div class="hidden" role="dialog" aria-modal="true" id="menu">
                    <div class="fixed inset-0 z-10"></div>
                    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="{{route('main_page')}}" class="-m-1.5 p-1.5">
                                <span class="sr-only">Duck Tv</span>
                                <img class="h-15 w-auto" src="images/Logo.svg" alt="желтая утка в очках">
                            </a>
                            <button type="button" id="closeMenu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    @foreach ($menuItems as $item)
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{$item->title}}</a>
                                    @endforeach
                                 </div>
                                <div class="py-6">
                                     <button id="open-modal-"  class="w-full md:w-44 bg-duck-400 text-white px-6 py-2 rounded-md hover:bg-duck-600">Связаться с нами</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>



                    <main class="content_box">
                        <div class="container  mx-auto mt-10">
                            <h2 class="text-2xl font-bold mb-6">Новости</h2>
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-2/3">
                                    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                                        @foreach ($news as $item)
                                        <div class="card rounded-lg shadow-md">
                                            <img src="{{$item->image_path}}" alt="утя" class="w-full rounded-t-lg">
                                            <div class="p-4">
                                                <h3 class="text-lg font-bold mb-2">{{$item->title}}</h3>
                                                <p class="text-gray-500 text-sm">{{\Carbon\Carbon::parse($item->publication_at)->format('d F Y')}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                    <div class="hidden md:block md:w-1/3 ml-6">
                                        <img src="images/purple-paint-yellow-rubber-duck.jpg" alt="грязная утка"  class="w-full rounded shadow-md">
                                    </div>
                                <div class="block md:hidden w-full mt-6">
                                    <img src="images/purple-paint-yellow-rubber-duck.jpg" alt="грязная утка"  class="w-full h-96 object-cover rounded-lg shadow-md">
                                </div>
                            </div>
                        </div>

                        <div class="container mx-auto mt-10">
                            <h2 class="text-2xl font-bold mb-6">Видео</h2>
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-100">
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                        @foreach ($videos as $item)
                                            <div class="card rounded-lg shadow-md">
                                                <img src="{{$item->image_path}}" alt="уточка" class="w-full rounded-t-lg mb-4">
                                                <div class="p-4  h-10 flex items-center">
                                                    <div class=" bg-duck-100 text-duck-700 mr-4 px-3 py-2 rounded-md hover:bg-duck-400">Тэг1</div>
                                                    <div class=" bg-duck-100 text-duck-700 mr-4 px-3 py-2 rounded-md hover:bg-duck400">Тэг2</div>
                                                    <div class=" bg-duck-100 text-duck-700 mr-4 px-3 py-2 rounded-md hover:bg-duck-400">Тэг3</div>
                                                    <div class=" bg-duck-100 text-duck-700 mr-4 px-3 py-2 rounded-md hover:bg-duck-400">Тэг4</div>
                                                </div>
                                                <div class="p-4">
                                                    <h3 class="text-lg font-bold ">{{$item->title}}</h3>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>


            <footer class="bg-white py-10">
                <div class="container mx-auto flex flex-row justify-between ">
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div class="mb-6 lg:mb-0 flex-shrink-0 justify-self-start">
                            <a href="{{route('main_page')}}" class="-m-1.5 p-1.5">
                                <span class="sr-only">Duck TV</span>
                                <img class="h-15 w-auto" src="images/Logo.svg" alt="желтая утка в очках">
                            </a>
                        </div>

                        <nav class="lg:mx-auto mx-0">
                            <ul class="flex lg:mt-6 ms-2 lg:ms-0 lg:space-x-6 h-15 lg:items-center flex-col lg:flex-row">
                                @foreach ($menuItems as $item)
                                    <li><a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-duck-600">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <form method="post" action="{{route('application')}}" class="flex flex-col items-center space-y-4 " aria-label="Обратная связь">
                        @csrf
                        <div class="w-full md:w-27 text-2xl font-bold mb-2">
                            Будем рады вашим предложениям по обзору на уток
                        </div>
                        <label for="name" class="sr-only mb-3">Ваше имя</label>
                        <input type="text" name="name" id="name" placeholder="Ваше имя" class="w-full md:w-27 px-4 py-2 mb-3 border rounded-lg focus:outline-none focus:ring focus:ring-duck-400 @error('name') border-red-500 focus:ring-red-500  @enderror">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="w-full md:w-27 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-duck-400 @error('email') border-red-500 focus:ring-red-500  @enderror" placeholder="example@mail.com" aria-describedby="phone-help">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="w-full md:w-27 bg-duck-400 text-white px-6 py-2 rounded-md hover:bg-duck-600">Отправить контакты</button>
                    </form>
                </div>
            </footer>
        </div>

        <div class="fixed inset-0 flex items-center justify-center z-40 hidden" id="modal">
            <div class="fixed inset-0 bg-black bg-opacity-50" aria-hidden="true"></div>
            <div class="bg-white rounded-lg shadow-lg p-4 z-50 w-full max-w-80 md:max-w-32">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold"></h2>
                    <button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="close-modal">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6.28 19.25a.75.75 0 001.06 0L12 13.5l5.72 5.75a.75.75 0 001.06-1.06L13.5 12l5.72-5.72a.75.75 0 000-1.06L12 10.5l-5.72-5.72a.75.75 0 00-1.06 1.06L10.5 12l-5.72 5.72a.75.75 0 000 1.06z" />
                        </svg>
                    </button>
                </div>

                <form method="post" action="{{route('application')}}" class="flex mx-4 mb-4 flex-col items-center " aria-label="Обратная связь">
                    @csrf
                    <div class="w-full md:w-27 text-2xl font-bold mb-2">
                        Будем рады вашим предложениям по обзору на уток
                    </div>
                    <label for="name" class="sr-only mb-3">Ваше имя</label>
                    <input type="text" name="name" id="name" placeholder="Ваше имя" class="w-full md:w-27 px-4 py-2 mb-3 border rounded-lg focus:outline-none focus:ring focus:ring-duck-400 @error('name') border-red-500 focus:ring-red-500  @enderror">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="w-full md:w-27 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-duck-400 @error('email') border-red-500 focus:ring-red-500  @enderror" placeholder="example@mail.com" aria-describedby="phone-help">
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="w-full md:w-27 bg-duck-400 text-white mt-3 px-6 py-2 rounded-md hover:bg-duck-600">Отправить контакты</button>
                </form>
            </div>
        </div>
        @vite('resources/js/script.js' )

    </body>
</html>
