@extends('layouts.master')
@section('title', 'Home')
@section('content')


      <div class="tengah">
            <!-- <h3 class="hot">HOT NEWS</h3> -->

            <div class="berita">
                <img class="gambarB" src="{{asset('img/berita1.jpg')}}" alt="gambar">
                <h2 class="judulB" id="light">Bisnis cerdass!! Liverpool dirumorkan  
                    bawa kembali Coutinho hanya 35 juta euro.</h2>
                
                <h4 class="dateB" id="light">Date: 23/03/2021</h4>
                <h4 class="authorB" id="light">Author: Muhammad Rafi Nashrullah</h4>
                <p class="isiB" id="light">     Setelah menjalaini 2 musin yang buruk bersama FC Barcelona, Coutinho dikabarkan akan <br>dijual oleh La Blaugrana.
                    Tim yang dikabarkan akan mendatangkan pemain asal Brazil itu<br> adalah mantan club nya yaitu Liverpool FC.
                    Dengan release clause hanya 35 juta euro membuat<br> Liverpool dianggap memiliki bisnis yang cerdas mengingat mereka menjual pemain tersebut<br> dengan harga 145 jta  euro.
                </p>
            </div>
            <div class="berita">
                <img class="gambarB" src="{{asset('img/berita2.jpg')}}" alt="gambar">
                <h2 class="judulB" id="light">Keji, walaupun memiliki resiko cedera 
                    lagi timnas Belanda dikabarkan 
                    akan membawa Virgil ke Euro 2020</h2>
                <h4 class="dateB1" id="light">Date: 23/03/2021</h4>
                <h4 class="authorB">Author: Muhammad Rafi Nashrullah</h4>
                <p class="isiB">Virgil Van Dijk mengalami cedera setelah setalah bertabrakan dengan kiper Everton Jordan<br> Pickford dan absen hampir 1 musim.
                Tetapi saat ini Virgil sudah mulai berlatih kembali, dan<br> pelatih timnas Belanda berencana membawa pemain ini ke Euro. Menurut dokter yang<br> menangani masalah cidera Virgil
                jika ia dibawa ke Euro akan membuat cedera pemain<br> tersebut kambuh lagi. Akankah timnas Belanda akan membawa Virgil ke Euro?</p>
                
            </div>
            <div class="berita">
                <img class="gambarB2" src="{{asset('img/berita3.jpg')}}" alt="gambar">
                <h2 class="judulB2">Bertemu Real Madrid di 8 besar, berikut adalah prediksi teman-teman saya.
                </h2>
                <h4 class="dateB2">Date: 23/03/2021</h4>
                <h4 class="authorB">Author: Muhammad Rafi Nashrullah</h4>
                <p class="isiB">Liverpool akan bertemu Real Madrid pada perempat final UCL. Ini akan menjadi ajang yang 
                    <br>seru mengingat mereka terakhir bertemu pada final UCL 2018 dengan kemenang Real Madrid 
                    <br>3-1.Banyak yang melakukan prediksi hasil akhir pertandingan ini mulai pundit-pundit
                    <br> terkenal sampai teman-teman saya. Dari teman-teman saya banyak menjagokan Real
                    <br> Madrid, mereka beralasan agar saya juga merasakn apa yang mereka rasakan. </p>
            </div>
        </div>
        @endsection

