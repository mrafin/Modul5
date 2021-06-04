@extends('layouts.master')
@section('title', 'List')
@section('content')

        <div class="tengah">
            <div class="grid">
                <div class="input-container">
                    <h2 class="jlist">List App</h2>
                    <form>
                        <input type="text" class="input">
                        <button class="button" type="submit">submit</button>
                    </form>
                </div>
                <div class="listapp-container">
                    <ul class="listapp">

                    </ul>
                    <p class="fut">Kamu memiliki <span id="kegiatan">+ kegiatan</span></p>
                    <button class="clear" type="submit">clear</button>
                </div>
            </div>

            @endsection
