<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('style.css')}}">
<title>Liverpool News | @yield('title')</title>
</head>

<body >
    
    <header>
        <img class="logo" src="{{asset('img/logo1.webp')}}" alt="logo">
        <h1 class="judul">LIVERPOOL NEWS</h1>        
        <a class="home" href="{{route('dashboard.index')}}">Home</a>
        <a class="profile" href="{{route('profiles.index')}}">Profile</a>
        <a class="list" href="{{route('lists.index')}}">List</a>
        <a class="Admin" href="{{route('admins.index')}}">Admin</a>
        <!-- <img class="sun" src="sun.png" alt="sun" onclick="darkmode(false)">
        <img class="moon" src="moon.png" alt="moon" onclick="darkmode(true)"> -->
        <button class="sun" onclick="lightmode(true)">   </button>
        <button class="moon" onclick="lightmode(false)">   </button>
    </header>

    <section>
        <div class="kiri">
            <div class="kategori">
                <h3 class="jkategori" id="light">Kategori</h4>

                <ul class="lkategori" id="light">
                    <li>Transfer Updates</li>
                    <li>History</li>
                    <li>Fun Facts</li>
                    <li>Komunitas</li>
                    <li>Inside Anfield</li>
                </ul>
            </div>
            
        </div>

        @yield('content')
        <div class="kanan">
            <div class="populer">
               <p class="search">Search <input  class="searchbar" type="text" ></p> 
               <h3 class="tp">Populer News</h3>

                <ul class="lnews">
                    <li>Coutinho balik ke Anfield</li>
                    <li>Van Dijk join EURO 2020</li>
                    <li>Liverpool vs Real Madrid</li>
                </ul>
            </div>
        </div>

    </section>

    <footer>
        <img class="logof" src="{{asset('img/logo1.webp')}}" alt="logo">
        <h2 class="cont">CONTACT US</h2>
        <ul>
            <li>Instagram : @rafi_nashrullah</li>
            <li>Facebook : Muhammad Rafi Naahrullah </li>
            <li>Whatsapp : 085806474468</li>
        </ul>
    </footer>

    
    <script src="{{asset('script.js')}}"> </script>


</body>




</html>