@extends('template')

<div class="form__pages">
    <div class="form__pages-background">

        <div class="form__pages-left">
            <h2 class="form__pages-top">Edit Data</h2>
            <!-- <a href="/mahasiswa"> Kembali</a> -->

            @foreach($mahasiswa as $m)
            <form action="/mahasiswa/update" method="post" autocomplete="off">
                {{ csrf_field() }}
                Nama
                <input class="form__input-field" type="text" required="required" name="fullName" value="{{ $m->fullName }}"> <br />
                First Score
                <input class="form__input-field" type="number" required="required" name="firstScore" value="{{ $m->firstScore }}"> <br />
                Second Score
                <input class="form__input-field" type="number" required="required" name="secondScore" value="{{ $m->secondScore }}"> <br />

                <input class="form__button" type="submit" value="Simpan Data">
            </form>
            @endforeach
        </div>
        <div class="form__pages-right">
            <img class="form__nilai-img" src="{{ asset('image.png') }}" alt="">
        </div>
    </div>



</div>