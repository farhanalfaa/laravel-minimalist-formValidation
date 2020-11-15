@extends('template')

<div>


    <div class="dashboard">

        <h3>Data Mahasiswa</h3>
        <a class="dashboard__item-link dashboard__add-button" href="/tambah"> Tambah Data</a>

        @foreach($mahasiswa as $m)
        <div class="dashboard__item">
            <div class="dashboard__item-content">
                <div class="dashboard__item-grade">
                    <p>{{ $m->finalScore }}</p>
                </div>
                <div class="dashboard__item-name">
                    <p>{{ $m->fullName }}</p>
                </div>
            </div>
            <div class="dashboard__item__button">
                <p class="dashboard__item-score">First Score : <span style="font-weight: bold;">{{ $m->firstScore }}</span></p>
                <p class="dashboard__item-score">Second Score: <span style="font-weight: bold;">{{ $m->secondScore }}</span></p>
                <a class="dashboard__item-link dashboard__edit-button" href="/edit/{{ $m->id }}">Edit</a>
                <a class="dashboard__item-link dashboard__delete-button" href="/hapus/{{ $m->id }}">Hapus</a>
            </div>
        </div>
        @endforeach
    </div>
</div>