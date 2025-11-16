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


     <main class="px-10 flex flex-col flex-grow justify-center items-center py-10">
         <div class="flex flex-col gap-10 justify-center items-center mb-10">
             <h1 class="text-xl text-center px-5">
                 Monitoring Lahan Kosong yang tersedia
             </h1>
             <div class="flex flex-col md:flex-row justify-center items-center gap-10">
                 <div class="flex justify-center items-center h-fit w-full sm:w-[400px]">
                     <img class="" src="monitoring.png" alt="">
                 </div>

                 <div class="flex justify-center items-center bg-white h-fit w-full sm:w-[400px]">
                     <img class="" src="monitoring-denah.png" alt="">
                 </div>
             </div>
         </div>
         <div class="flex flex-col gap-3 my-16">
             <h1 class="text-xl font-medium text-center px-5">
                 Data Monitoring Area
             </h1>
             <p class="text-base text-center">Berikut hasil data Real-time Monitoring
                 dari Keseluruhan area</p>
             <button class="bg-black text-white text-2xl rounded-md px-4 py-3">Refresh</button>
         </div>

         <div class="flex grid my-3 flex-grow w-full">
             <div class="grid grid-cols-2 gap-5">
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area A</span>
                     <span class="font-bold text-3xl">10</span>
                     <span>Terisi</span>
                 </h1>
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area A</span>
                     <span class="font-bold text-3xl">50</span>
                     <span>Kosong</span>
                 </h1>
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area B</span>
                     <span class="font-bold text-3xl">5</span>
                     <span>Terisi</span>
                 </h1>
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area B</span>
                     <span class="font-bold text-3xl">55</span>
                     <span>Kosong</span>
                 </h1>
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area C</span>
                     <span class="font-bold text-3xl">20</span>
                     <span>Terisi</span>
                 </h1>
                 <h1
                     class="text-xl flex flex-grow flex-col justify-evenly items-start border border-gray-300 rounded-lg text-center py-3 px-5 gap-1">
                     <span class="text-gray-400">Area C</span>
                     <span class="font-bold text-3xl">30</span>
                     <span>Kosong</span>
                 </h1>
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
