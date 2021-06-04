@extends('layouts.master')
@section('title', 'Profile')
@section('content')
@foreach($authors as $author)
{{$author->picture}} as $picture
        <div class="tengah">
            <div class="grid">
                <img class="pp" src="{{asset('$picture')}}" alt="">
                <h2 class="jbio">
                    PROFIL AUTHOR
                </h2>
                <h3 class="bio">
                    Nama : {{$author->name}}
                    <br>Kelas : Pemrograman Web C
                    <br>Kota : {{$author->addres}}
                    <br>Cita-cita : Masuk surga 
                </h3>
            </div>
        
        
        </div>    
@endforeach
        @endsection 