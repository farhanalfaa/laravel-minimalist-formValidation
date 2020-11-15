@extends('template')

<div class="form__pages">
    <div class="form__pages-background">

        <div class="form__pages-left">
            <h2 class="form__pages-top">Tambah Data</h2>
            <!-- 
            <a href="/mahasiswa"> Kembali</a> -->
            <form class="" action="/store" method="post" autocomplete="off">
                {{ csrf_field() }}
                Full Name
                <input class="form__input-field" type="text" name="fullName" required="required"> <br />
                First Score
                <input class="form__input-field" type="number" name="firstScore" required="required"> <br />
                Second Score
                <input class="form__input-field" type="number" name="secondScore" required="required"> <br />
                <input class="form__button" type="submit" value="Simpan Data">
            </form>
        </div>
        <div class="form__pages-right">
            <img class="form__nilai-img" src="{{ asset('image.png') }}" alt="">
        </div>
    </div>

</div>