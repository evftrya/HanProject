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
                <img class="" src="map-area-a.png" alt="">
            </div>
        </div>

        <div class="flex flex-col gap-5 justify-center items-center">
            <h1 class="text-xl text-red-600 text-center px-5 mb-5">
                Silahkan menuju ke Area A yang terletak pada denah dibawah ini
            </h1>
            
            <div class="position-relative w-[300px] h-[500px] flex justify-center items-center"
                style="position: relative !important;">
                {{-- <img class="position-absolute" src="back.svg" alt="Gambar SVG" width="380" height="" --}}
                <img class="position-absolute w-[291px]" src="back.svg" alt="Gambar SVG" width="380" height=""
                    style="position: absolute !important;left:20px;top:20px;z-indez:0 !important;">

                <div class="position-absolute "
                    style="position: absolute !important;z-indez:100 !important;left:-5px;top:7px; transform: scale(0.75);">
                    {{-- style="position: absolute !important;z-indez:100 !important;left:35px;top:65px;"> --}}
                    <svg class="" width="291" height="391" viewBox="0 0 291 391" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 372.2)" fill="#A8CC8D" />
                        <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 372.2)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A1</text>

                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 359.23)" fill="#A8CC8D" />
                        <text  transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 359.23)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A2</text>

                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 346.261)" fill="#A8CC8D" />
                        <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 260.961 346.261)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A3</text>

                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 376.173)" fill="#A8CC8D" />
                        <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 376.173)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A4</text>

                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 363.204)" fill="#FFDD00" />
                        <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 363.204)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A5</text>

                        <rect class="parking-space a" width="15.9605" height="8.57558"
                              transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 350.234)" fill="#F41B13" />
                        <text transform="matrix(0.999651 -0.0264039 0.0197464 0.999805 49.0078 350.234)" x="7.98025" y="4.28779" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A6</text>

                        <rect class="parking-space a" width="15.9939" height="8.55811"
                              transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.703125 359.918)" fill="#A8CC8D" />
                        <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.703125 359.918)" x="7.99695" y="4.279055" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A7</text>

                        <rect class="parking-space a" width="15.9939" height="8.55811"
                              transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.578125 370.383)" fill="#A8CC8D" />
                        <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.578125 370.383)" x="7.99695" y="4.279055" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A8</text>

                        <rect class="parking-space a" width="15.9939" height="8.55811"
                              transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.453125 380.848)" fill="#A8CC8D" />
                        <text transform="matrix(0.999168 0.0407728 -0.052985 0.998595 0.453125 380.848)" x="7.99695" y="4.279055" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A9</text>

                        <rect class="parking-space a" width="15.9631" height="8.57423"
                              transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.4922 281.951)" fill="#A8CC8D" />
                        <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.4922 281.951)" x="7.98155" y="4.287115" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A10</text>

                        <rect class="parking-space a" width="15.9631" height="8.57423"
                              transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.5859 292.438)" fill="#A8CC8D" />
                        <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.5859 292.438)" x="7.98155" y="4.287115" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A11</text>

                        <rect class="parking-space a" width="15.9631" height="8.57423"
                              transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.6719 302.925)" fill="#A8CC8D" />
                        <text transform="matrix(0.999693 0.0247774 -0.0321019 0.999485 17.6719 302.925)" x="7.98155" y="4.287115" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A12</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 143.555 31.873)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 143.555 31.873)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A13</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 157.328 31.873)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 157.328 31.873)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A14</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 171.094 31.873)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 171.094 31.873)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A15</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 184.859 31.873)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 184.859 31.873)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A16</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 198.625 31.873)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 198.625 31.873)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A17</text>

                        <rect class="parking-space a" width="17.7818" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 250.859 0)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 250.859 0)" x="8.8909" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A18</text>

                        <rect class="parking-space a" width="17.7818" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 261.977 0)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 261.977 0)" x="8.8909" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A19</text>

                        <rect class="parking-space a" width="17.7818" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 273.094 0)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 273.094 0)" x="8.8909" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A20</text>

                        <rect class="parking-space a" width="17.7818" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 284.211 0)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 284.211 0)" x="8.8909" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A21</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 216.414 188.152)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 216.414 188.152)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A22</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 228.859 188.152)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 228.859 188.152)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A23</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 241.297 188.152)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 241.297 188.152)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A24</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 253.742 188.152)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 253.742 188.152)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A25</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 266.18 188.152)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 266.18 188.152)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A26</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.68 228.917)" fill="#A8CC8D" />
                        <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.68 228.917)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black"  transform="rotate(360 100 75)">A27</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.727 241.358)" fill="#A8CC8D" />
                        <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.727 241.358)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A28</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.773 253.799)" fill="#A8CC8D" />
                        <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.773 253.799)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A29</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.82 266.24)" fill="#A8CC8D" />
                        <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.82 266.24)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A30</text>

                        <rect class="parking-space a" width="19.0592" height="8.44863"
                              transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.875 278.68)" fill="#A8CC8D" />
                        <text transform="matrix(-0.999988 0.00488466 -0.010975 -0.99994 290.875 278.68)" x="9.5296" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A31</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 86.6406 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 86.6406 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A32</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 100.375 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 100.375 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A33</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 114.117 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 114.117 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A34</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 127.852 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 127.852 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A35</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 141.586 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 141.586 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A36</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 155.32 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 155.32 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A37</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 169.055 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 169.055 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A38</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 182.797 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 182.797 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A39</text>
                        
                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 196.531 322.813)" fill="#FF0000" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 196.531 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A40</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 210.266 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 210.266 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A41</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 224 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 224 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A42</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 237.734 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 237.734 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A43</text>

                        <rect class="parking-space a" width="18.3212" height="8.4593"
                              transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 251.477 322.813)" fill="#A8CC8D" />
                        <text transform="matrix(-0.495707 0.86849 -0.863347 -0.50461 251.477 322.813)" x="9.1606" y="4.22965" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A44</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 176.945 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 176.945 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A45</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 189.391 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 189.391 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A46</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 201.836 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 201.836 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A47</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 214.273 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 214.273 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A48</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 226.719 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 226.719 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A49</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 239.156 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 239.156 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A50</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 251.602 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 251.602 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A51</text>

                        <rect class="parking-space a" width="20.7009" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 264.047 89.5219)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 264.047 89.5219)" x="10.35045" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A52</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 176.945 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 176.945 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A53</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 189.391 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 189.391 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A54</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 201.836 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 201.836 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A55</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 214.273 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 214.273 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A56</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 226.719 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 226.719 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A57</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 239.156 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 239.156 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A58</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 251.602 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 251.602 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A59</text>

                        <rect class="parking-space a" width="20.6417" height="8.44863"
                              transform="matrix(0.000960682 1 -0.999975 0.00705118 264.047 136.92)" fill="#A8CC8D" />
                        <text transform="matrix(0.000960682 1 -0.999975 0.00705118 264.047 136.92)" x="10.32085" y="4.224315" text-anchor="middle" dominant-baseline="middle" font-size="5" fill="black">A60</text>
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
