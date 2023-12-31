@extends('layout.main')
@section('content')
    {{-- Movie detail overview trailer and other  --}}

    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto py-4 md:py-8 lg:py-12 items-center px-4 md:px-8 lg:px-12 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src={{ $actor['profile_path'] }} alt="actor image " class="w-64 lg:w-96" />
                <ul class="flex items-center mt-4">
                    @if ($social['facebook'])
                        <li>
                            {{-- logo of facebook --}}
                            <a href={{ $social['facebook'] }}>
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            {{-- end logo of facebook --}}
                        </li>
                    @endif
                    @if ($social['twitter'])
                        <li>
                            {{-- logo of twitter --}}
                            <a href={{ $social['twitter'] }}>
                                <i class="ml-2 md:ml-2 lg:ml-3 fa-brands fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if ($actor['homepage'])
                        <li>
                            <a href={{ $actor['homepage'] }}>
                                <i class="ml-2 md:ml-2 lg:ml-3 fa-brands fa-wikipedia-w"></i>
                            </a>
                        </li>
                    @endif
                    @if ($social['instagram'])
                        <li>
                            <a href={{ $social['instagram'] }}>
                                <i class="ml-2 md:ml-2 lg:ml-3 fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="md:ml-12 lg:ml-24 py-4 px-4">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex items-center text-gray-500 text-sm ">
                    <span>
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <!-- License: CC0. Made by SVG Repo: https://www.svgrepo.com/svg/21504/birthdaycake-and-candle -->
                        <svg class="w-6 text-gray-300" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 336.986 336.986" style="enable-background:new 0 0 336.986 336.986;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M329.486,287.536h-20.327V177.167c0-4.143-3.357-7.5-7.5-7.5h-4.283c1.255-2.95,1.95-6.193,1.95-9.596
                                    c0-13.562-11.033-24.594-24.595-24.594c-13.562,0-24.594,11.032-24.594,24.594c0,3.402,0.695,6.645,1.95,9.596h-18.09
                                    c1.255-2.95,1.95-6.193,1.95-9.596c0-13.562-11.033-24.594-24.595-24.594c-9.176,0-17.188,5.054-21.414,12.521V79.092
                                    c0-4.143-3.357-7.5-7.5-7.5h-27.893c-4.143,0-7.5,3.357-7.5,7.5v68.904c-4.227-7.467-12.239-12.52-21.414-12.52
                                    c-13.562,0-24.595,11.032-24.595,24.594c0,3.402,0.695,6.645,1.95,9.596H84.899c1.255-2.95,1.95-6.193,1.95-9.596
                                    c0-13.562-11.033-24.594-24.595-24.594S37.66,146.509,37.66,160.071c0,3.402,0.695,6.645,1.95,9.596h-4.282
                                    c-4.143,0-7.5,3.357-7.5,7.5v110.369H7.5c-4.142,0-7.5,3.357-7.5,7.5v24.293c0,4.143,3.357,7.5,7.5,7.5h321.986
                                    c4.143,0,7.5-3.357,7.5-7.5v-24.293C336.986,290.893,333.629,287.536,329.486,287.536z M154.547,184.667h27.893h111.72v10.822
                                    c-14.441,1.703-22.856,8.201-30.389,14.043c-7.844,6.083-14.618,11.336-28.697,11.336c-14.078,0-20.853-5.253-28.696-11.335
                                    c-8.753-6.788-18.675-14.482-37.889-14.482c-19.212,0-29.133,7.693-37.886,14.482c-7.844,6.083-14.617,11.336-28.695,11.336
                                    c-14.078,0-20.851-5.253-28.693-11.335c-7.532-5.842-15.946-12.341-30.386-14.044v-10.822H154.547z M265.138,160.071
                                    c0-5.29,4.304-9.594,9.594-9.594c5.291,0,9.595,4.304,9.595,9.594c0,5.291-4.304,9.596-9.595,9.596
                                    C269.441,169.667,265.138,165.362,265.138,160.071z M211.354,150.477c5.291,0,9.595,4.304,9.595,9.594
                                    c0,5.291-4.304,9.596-9.595,9.596c-5.29,0-9.594-4.305-9.594-9.596C201.76,154.781,206.063,150.477,211.354,150.477z
                                     M162.047,86.592h12.893v83.074h-12.893V86.592z M116.038,160.071c0-5.29,4.304-9.594,9.595-9.594
                                    c5.291,0,9.595,4.304,9.595,9.594c0,5.291-4.304,9.596-9.595,9.596C120.342,169.667,116.038,165.362,116.038,160.071z
                                     M52.66,160.071c0-5.29,4.304-9.594,9.595-9.594s9.595,4.304,9.595,9.594c0,5.291-4.304,9.596-9.595,9.596
                                    S52.66,165.362,52.66,160.071z M42.828,210.629c9.269,1.521,14.889,5.867,21.192,10.756c8.753,6.788,18.674,14.482,37.887,14.482
                                    s29.134-7.694,37.888-14.482c7.843-6.082,14.616-11.335,28.693-11.335c14.079,0,20.854,5.253,28.697,11.336
                                    c8.753,6.788,18.675,14.481,37.888,14.481c19.214,0,29.136-7.693,37.889-14.481c6.305-4.89,11.926-9.236,21.197-10.757v76.906
                                    H42.828V210.629z M321.986,311.829H15v-9.293h20.328h266.331h20.327V311.829z" />
                                    <path
                                        d="M168.493,69.827c4.571,0,18.482,0,18.482-20.263c0-7.818-3.289-39.406-18.482-39.406
                                    c-15.193,0-18.482,31.588-18.482,39.406C150.011,69.827,163.922,69.827,168.493,69.827z M168.493,29.522
                                    c1.797,5.191,3.482,13.164,3.482,20.042c0,3.233-0.455,4.614-0.654,5.063c-0.49,0.648-1.121,1.303-2.828,1.303
                                    s-2.336-0.654-2.828-1.303c-0.199-0.448-0.654-1.829-0.654-5.063C165.011,42.686,166.696,34.713,168.493,29.522z" />
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-2 mt-2">{{ $actor['birthday'] }} ({{ $actor['age'] }}years old)
                        {{ $actor['place_of_birth'] }}</span>
                </div>
                <p class="mt-8 text-gray-300">{{ $actor['biography'] }}</p>
                <h2 class="font-semibold text-2xl mt-12">Known For</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($knownForMovies as $movie)
                        <div class="mt-4">
                            <a href={{ $movie['LinkToPage'] }}>
                                <img src={{ $movie['poster_path'] }}
                                    class="hover:opacity-75 transition ease-in-out duration-500" />
                                <a href={{ $movie['LinkToPage'] }}
                                    class="text-sm leading-nor block text-gray-300 hover:text-white mt-1">{{ $movie['title'] }}
                                </a>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>

    {{-- image of caster and acors --}}

    </div>
    </div class="border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="mt-3 text-4xl font-semibold">Credits</h2>
        <ul class="list-disc pl-5 loading-loose mt-8">
            @foreach ($credits as $credit)
                <li>{{ $credit['release_year'] }} &middot;<strong>{{ $credit['title'] }} </strong> as
                    {{ $credit['character'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection
