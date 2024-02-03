<x-template-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
        <meta name="description" content="Free open source Tailwind CSS Store template">
        <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
        
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    
        <style>
            .work-sans {
                font-family: 'Work Sans', sans-serif;
            }
                    
            #menu-toggle:checked + #menu {
                display: block;
            }
            
            .hover\:grow {
                transition: all 0.3s;
                transform: scale(1);
            }
            
            .hover\:grow:hover {
                transform: scale(1.02);
            }
            
            .carousel-open:checked + .carousel-item {
                position: static;
                opacity: 100;
            }
            
            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
            
            #carousel-1:checked ~ .control-1,
            #carousel-2:checked ~ .control-2,
            #carousel-3:checked ~ .control-3 {
                display: block;
            }
            
            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }
            
            #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #000;
                /*Set to match the Tailwind colour you want the active one to be */
            }
        </style>
    
    </head>
    
    <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    
        <!--Nav-->
        <nav id="header" class="w-full z-30 top-0 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">
    
                <label for="menu-toggle" class="cursor-pointer md:hidden block">
                    <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
                <input class="hidden" type="checkbox" id="menu-toggle" />
    
                <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                    <nav>
                        <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Belanja</a></li>
                            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Tentang Kami</a></li>
                        </ul>
                    </nav>
                </div>
    
                <div class="order-1 md:order-2">
                    <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                        <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                        </svg>
                        LA TAILLEUR
                    </a>
                </div>
    
                <div class="order-2 md:order-3 flex items-center" id="nav-content">
    
                    <a class="inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
    
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                    </a>
    
                </div>
            </div>
        </nav>
    
        <div class="carousel relative container mx-auto" style="max-width:1600px;">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
    
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Temukan Model Baju yang Bagus dan Menarik Hanya di La Tailleur</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">check product</a>
                            </div>
                        </div>
    
                    </div>
                </div>
                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">
    
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Pilih dan Temukan Model Baju Sesuka Hati!</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">check product</a>
                            </div>
                        </div>
    
                    </div>
                </div>
                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
    
                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Temukan Pilihan Baju Hanya di La Tailleur</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">check product</a>
                            </div>
                        </div>
    
                    </div>
                </div>
                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                </ol>
    
            </div>
        </div>
    
        <!--	 
    
    Alternatively if you want to just have a single hero
    
    <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
    
        <div class="container mx-auto">
    
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>
    
            </div>
    
          </div>
    
    </section>
    
    -->
    
        <section class="bg-white py-8">
    
            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
    
                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
    
                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                    Store
                </a>
    
                        <div class="flex items-center" id="store-nav-content">
    
                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                                </svg>
                            </a>
    
                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                                </svg>
                            </a>
    
                        </div>
                  </div>
                </nav>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.80PbHMUvoRxA1uPiUIHfzQHaHa?pid=ImgDet&w=183&h=183&c=7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Kebaya Brokat</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 250.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.VpnKAOxoicZJ7IxAJdrHxAHaHa?w=185&h=185&c=7&r=0&o=5&pid=1.7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Kebaya</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 350.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.X3Gis9QsmxqCl9mOTX1KGwHaHa?pid=ImgDet&w=183&h=183&c=7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Kebaya Bali</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 200.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.kAu1Yei_Kq3bVecn2IMVogHaHa?pid=ImgDet&w=183&h=183&c=7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Kebaya</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 380.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="data:image/jpeg;base64,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">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Batik Formal Pria</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 350.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.n-0kL1oEe68RtFZlzINf_AHaHW?w=185&h=184&c=7&r=0&o=5&pid=1.7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Batik Endek Pria</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 450.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.tCr8GvPaBviFtXObvnHqtwHaHa?w=185&h=185&c=7&r=0&o=5&pid=1.7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Batik Formal Modif</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 500.000</p>
                    </a>
                </div>
    
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://th.bing.com/th/id/OIP.Wn7HywKCBXoS8We0RYvKVgHaHa?w=185&h=185&c=7&r=0&o=5&pid=1.7">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Baju Batik</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">Rp. 450.000</p>
                    </a>
                </div>
    
                </div>
    
        </section>
    
        <section class="bg-white py-8">
    
            <div class="container py-8 px-6 mx-auto">
    
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
                Tentang Kami
            </a>
                <p class="mb-8">Menjahit secara online? Ya tentu saja. Dengan platform La Tailleur maka kebutuhan menjahit Anda akan bisa terpenuhi dengan baik.</p>
    
            </div>
    
        </section>
    </body>
    </html>
    </x-template-layout>