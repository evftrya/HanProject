 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
     <script>
         tailwind.config = {
             theme: {
                 extend: {
                     fontFamily: {
                         'dm-sans': ['"DM Sans"', 'sans-serif'],
                     },
                     letterSpacing: {
                         // custom -8%
                         tighter8: '-0.08em',
                     }
                 }
             }
         }
     </script>
 </head>

 <body class="bg-[#FFFFFF] flex flex-col min-h-screen">

     <header class=" text-black mx-2 p-3 rounded-b-3xl shadow-lg">
         <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
             <!-- Logo -->
             <div class="text-2xl font-medium font-dm-sans tracking-tighter8">Rest Area 754 A</div>

             <!-- Menu utama -->
             <nav>
                 <ul id="menu" class="hidden md:flex space-x-6">
                     <li><a href="#" class="hover:text-gray-300">Home</a></li>
                     <li><a href="#" class="hover:text-gray-300">Tentang</a></li>
                     <li><a href="#" class="hover:text-gray-300">Layanan</a></li>
                     <li><a href="#" class="hover:text-gray-300">Kontak</a></li>
                 </ul>
             </nav>

             <!-- Tombol burger -->
             <button id="burger" class="md:hidden flex flex-col space-y-1">
                 <span class="w-6 h-1 bg-black"></span>
                 <span class="w-6 h-1 bg-black"></span>
                 <span class="w-6 h-1 bg-black"></span>
             </button>
         </div>

         <!-- Menu dropdown untuk mobile -->
         <div id="mobile-menu" class="hidden md:hidden bg-white">
             <ul class="flex flex-col space-y-2 px-4 py-3">
                 <li><a href="#" class="block hover:text-gray-300">Home</a></li>
                 <li><a href="#" class="block hover:text-gray-300">Tentang</a></li>
                 <li><a href="#" class="block hover:text-gray-300">Layanan</a></li>
                 <li><a href="#" class="block hover:text-gray-300">Kontak</a></li>
             </ul>
         </div>
     </header>


     <main class="px-10 flex flex-col md:flex-row flex-grow justify-center items-center py-10">
         <div class="flex flex-col gap-10 justify-center items-center mb-10">
             <h1 class="text-xl text-center px-5">
                 Ikuti arah panah yang muncul!
             </h1>
             <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
                 <img class="" src="area-b-full.png" alt="">
             </div>
         </div>

         <div class="flex flex-col gap-5 justify-center items-center">
             <h1 class="text-xl text-red-600 text-center px-5 mb-5">
                 Silahkan menuju ke Area A yang terletak pada denah dibawah ini
             </h1>

             <div class="position-relative w-[300px] h-[500px] flex justify-center items-center"
                 style="position: relative !important;">
                 {{-- <img class="position-absolute" src="back.svg" alt="Gambar SVG" width="380" height="" --}}
                 <img class="position-absolute w-[400px] h-fit " src="area-b-bangunan.png" alt="Gambar SVG"
                     width="380" height=""
                     style="position: absolute !important;left:20px;top:20px;z-indez:0 !important;transform: scale(1.2);">
                 


                 <div class="position-absolute "
                     style="position: absolute !important;z-indez:100 !important;left:-45px;top:-70px; transform: scale(0.85);">
                     {{-- style="position: absolute !important;z-indez:100 !important;left:35px;top:65px;"> --}}
                     {{-- <svg width="430" height="560" viewBox="0 0 430 560" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M70.5 367.5H123V392H356.5V341H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 369H123V392H356.5V325H369.5" stroke="#20FD2F" />
                         <path d="M71.7812 368.5H123V392H356.5V313H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368H123V392H356.5V298H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368H123V392H356.5V284H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368.5H123V392H356.5V270H369.5" stroke="#20FD2F" />
                         <path d="M71.2812 369H123V392H356.5V257H369.5" stroke="#20FD2F" />
                         <path d="M71.7812 367.5H123V392H356.5V240H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368.5H123V392H356.5V227H369.5" stroke="#20FD2F" />
                         <path d="M71.2812 368.5H123V392H356.5V213H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 367.5H123V392H356.5V199H369.5" stroke="#20FD2F" />
                         <path d="M71 367.5H144V335H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V319.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V305.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V292.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V278.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V264.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V251.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V235.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V220.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V208.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V194.5H163" stroke="#20FD2F" />
                         <path d="M71.5 368H123V158L112 149" stroke="#20FD2F" />
                         <path d="M71.5 368H132.5V146.493L119.471 137" stroke="#20FD2F" />
                         <path d="M71.5 368H139.5V146.493L147 136.5L132 122.5" stroke="#20FD2F" />
                         <path d="M71.5 368H143.553V133.41L151.5 122.827L135.606 108" stroke="#20FD2F" />
                         <path d="M71.5 368H143V141L163.5 114.34L145.222 99" stroke="#20FD2F" />
                         <path opacity="0.3" d="M71.5 368H144V157L178.5 113.5L163.652 99" stroke="#20FD2F" />
                         <path d="M71 368H117.5V206.5H105" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V193H104.884" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V179H104.884" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V166H104.884" stroke="#20FD2F" />
                         <path d="M71 368H105.5V285L93 280.5" stroke="#20FD2F" />
                         <path d="M71.25 368H110.25V272.194L96.1196 267" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V262.709L100.583 257" stroke="#20FD2F" />
                         <path d="M70.5 368L89.5 335.5L78.5 330" stroke="#20FD2F" />
                         <path d="M70.5 368L97.5 322.671L81.8684 315" stroke="#20FD2F" />
                         <path d="M70.5 368L105.5 310.697L85.2368 301" stroke="#20FD2F" />

                         
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B1</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.766 246.418)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.859 260.083)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.961 273.749)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.055 287.412)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.148 301.077)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.25 314.742)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.344 328.407)"
                             fill="#A8CC8D" />
                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 65.8594 316.291)" fill="#A8CC8D" />
                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 73.2812 304.605)" fill="#A8CC8D" />
                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 80.6953 292.067)" fill="#A8CC8D" />
                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 78.1797 270.546)"
                             fill="#A8CC8D" />
                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 81.3125 258.898)"
                             fill="#A8CC8D" />
                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 84.4453 247.25)" fill="#A8CC8D" />
                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 151.25 80.5107)" fill="#A8CC8D" />
                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 141.867 89.7014)" fill="#A8CC8D" />
                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 132.766 98.8628)" fill="#A8CC8D" />
                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 123.188 108.253)" fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.82 216.233)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.719 202.568)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.625 188.904)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.758 235.785)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.875 252.377)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.969 266.043)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.062 279.708)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.164 293.373)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.258 307.036)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.352 320.702)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.453 334.368)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.656 222.12)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.562 208.456)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.469 194.79)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.1172 201.768)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.0234 188.103)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.9297 174.438)"
                             fill="#A8CC8D" />
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.8281 160.774)"
                             fill="#A8CC8D" />
                         <rect width="23.0386" height="10.5764"
                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 99.9297 133.077)"
                             fill="#A8CC8D" />
                         <rect width="23.0386" height="10.5764"
                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 109.586 122.867)"
                             fill="#A8CC8D" />
                     </svg> --}}

                     <svg width="430" height="560" viewBox="0 0 430 560" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M70.5 367.5H123V392H356.5V341H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 369H123V392H356.5V325H369.5" stroke="#20FD2F" />
                         <path d="M71.7812 368.5H123V392H356.5V313H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368H123V392H356.5V298H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368H123V392H356.5V284H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368.5H123V392H356.5V270H369.5" stroke="#20FD2F" />
                         <path d="M71.2812 369H123V392H356.5V257H369.5" stroke="#20FD2F" />
                         <path d="M71.7812 367.5H123V392H356.5V240H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 368.5H123V392H356.5V227H369.5" stroke="#20FD2F" />
                         <path d="M71.2812 368.5H123V392H356.5V213H369.5" stroke="#20FD2F" />
                         <path d="M70.7812 367.5H123V392H356.5V199H369.5" stroke="#20FD2F" />
                         <path d="M71 367.5H144V335H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V319.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V305.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V292.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V278.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V264.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V251.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V235.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V220.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V208.5H163" stroke="#20FD2F" />
                         <path d="M71 367.5H144V194.5H163" stroke="#20FD2F" />
                         <path d="M71.5 368H123V158L112 149" stroke="#20FD2F" />
                         <path d="M71.5 368H132.5V146.493L119.471 137" stroke="#20FD2F" />
                         <path d="M71.5 368H139.5V146.493L147 136.5L132 122.5" stroke="#20FD2F" />
                         <path d="M71.5 368H143.553V133.41L151.5 122.827L135.606 108" stroke="#20FD2F" />
                         <path d="M71.5 368H143V141L163.5 114.34L145.222 99" stroke="#20FD2F" />
                         <path opacity="0.3" d="M71.5 368H144V157L178.5 113.5L163.652 99" stroke="#20FD2F" />
                         <path d="M71 368H117.5V206.5H105" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V193H104.884" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V179H104.884" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V166H104.884" stroke="#20FD2F" />
                         <path d="M71 368H105.5V285L93 280.5" stroke="#20FD2F" />
                         <path d="M71.25 368H110.25V272.194L96.1196 267" stroke="#20FD2F" />
                         <path d="M71.25 368H117.25V262.709L100.583 257" stroke="#20FD2F" />
                         <path d="M70.5 368L89.5 335.5L78.5 330" stroke="#20FD2F" />
                         <path d="M70.5 368L97.5 322.671L81.8684 315" stroke="#20FD2F" />
                         <path d="M70.5 368L105.5 310.697L85.2368 301" stroke="#20FD2F" />

                         <!-- B1–B8 -->
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.914 229.897)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B1</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.766 246.418)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.766 246.418)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B2</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.859 260.083)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.859 260.083)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B3</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.961 273.749)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 156.961 273.749)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B4</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.055 287.412)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.055 287.412)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B5</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.148 301.077)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.148 301.077)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B6</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.25 314.742)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.25 314.742)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B7</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.344 328.407)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 157.344 328.407)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B8</text>

                         <!-- B9–B11 (mirings kiri bawah) -->
                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 65.8594 316.291)" fill="#A8CC8D" />
                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 65.8594 316.291)" x="11.67"
                             y="5.21" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B9</text>

                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 73.2812 304.605)" fill="#A8CC8D" />
                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 73.2812 304.605)" x="11.67"
                             y="5.21" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B10</text>

                         <rect width="23.3394" height="10.4215"
                             transform="matrix(0.89001 0.455942 -0.518086 0.855329 80.6953 292.067)" fill="#A8CC8D" />
                         <text transform="matrix(0.89001 0.455942 -0.518086 0.855329 80.6953 292.067)" x="11.67"
                             y="5.21" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B11</text>

                         <!-- B12–B14 (miring sedikit) -->
                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 78.1797 270.546)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 78.1797 270.546)" x="11.78"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B12</text>

                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 81.3125 258.898)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 81.3125 258.898)" x="11.78"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B13</text>

                         <rect width="23.5612" height="10.3027"
                             transform="matrix(0.964844 0.262823 -0.294199 0.955744 84.4453 247.25)" fill="#A8CC8D" />
                         <text transform="matrix(0.964844 0.262823 -0.294199 0.955744 84.4453 247.25)" x="11.78"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B14</text>

                         <!-- B15–B18 (mirings kanan atas) -->
                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 151.25 80.5107)" fill="#A8CC8D" />
                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 151.25 80.5107)" x="11.46"
                             y="5.32" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B15</text>

                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 141.867 89.7014)" fill="#A8CC8D" />
                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 141.867 89.7014)" x="11.46"
                             y="5.32" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B16</text>

                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 132.766 98.8628)" fill="#A8CC8D" />
                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 132.766 98.8628)" x="11.46"
                             y="5.32" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B17</text>

                         <rect width="22.9116" height="10.6403"
                             transform="matrix(0.760869 0.648906 -0.72029 0.693673 123.188 108.253)" fill="#A8CC8D" />
                         <text transform="matrix(0.760869 0.648906 -0.72029 0.693673 123.188 108.253)" x="11.46"
                             y="5.32" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B18</text>

                         <!-- B19–B21 (deret horisontal dekat tengah kiri) -->
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.82 216.233)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.82 216.233)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B19</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.719 202.568)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.719 202.568)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B20</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.625 188.904)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 155.625 188.904)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B21</text>

                         <!-- B22–B29 (deret tinggi kanan) -->
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.758 235.785)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.758 235.785)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B22</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.875 252.377)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.875 252.377)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B23</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.969 266.043)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.969 266.043)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B24</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.062 279.708)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.062 279.708)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B25</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.164 293.373)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.164 293.373)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B26</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.258 307.036)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.258 307.036)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B27</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.352 320.702)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.352 320.702)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B28</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.453 334.368)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 365.453 334.368)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B29</text>

                         <!-- B30–B32 (lanjutan deret kanan, lebih bawah) -->
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.656 222.12)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.656 222.12)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B30</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.562 208.456)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.562 208.456)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B31</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.469 194.79)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 364.469 194.79)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B32</text>

                         <!-- B33–B36 (deret tegak tengah kiri) -->
                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.1172 201.768)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.1172 201.768)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B33</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.0234 188.103)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 86.0234 188.103)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B34</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.9297 174.438)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.9297 174.438)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B35</text>

                         <rect width="23.5396" height="10.3098"
                             transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.8281 160.774)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.999991 -0.00410733 0.028725 0.999587 85.8281 160.774)" x="11.77"
                             y="5.15" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B36</text>

                         <!-- B37–B38 (miring dekat area tengah atas) -->
                         <rect width="23.0386" height="10.5764"
                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 99.9297 133.077)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.799703 0.600396 -0.672015 0.740538 99.9297 133.077)" x="11.52"
                             y="5.29" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B37</text>

                         <rect width="23.0386" height="10.5764"
                             transform="matrix(0.799703 0.600396 -0.672015 0.740538 109.586 122.867)"
                             fill="#A8CC8D" />
                         <text transform="matrix(0.799703 0.600396 -0.672015 0.740538 109.586 122.867)" x="11.52"
                             y="5.29" text-anchor="middle" dominant-baseline="middle" font-size="5"
                             fill="black">B38</text>
                     </svg>



                 </div>
             </div>
         </div>



     </main>

     <script>
         const burger = document.getElementById('burger');
         const mobileMenu = document.getElementById('mobile-menu');

         burger.addEventListener('click', () => {
             mobileMenu.classList.toggle('hidden');
         });
     </script>

 </body>

 </html>
