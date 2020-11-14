@extends('template')

<div>

    <h3>Data Mahasiswa</h3>

    <a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>

    <br />
    <br />

    <div class="dashboard">
        <div class="dashboard__item">
            <div class="dashboard__item-grade">

            </div>
            <div class="dashboard__item-name">

            </div>
            div.dashboard__item-score
        </div>
    </div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>First Score</th>
            <th>Second Score</th>
            <th>Final Score</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->fullName }}</td>
            <td>{{ $m->firstScore }}</td>
            <td>{{ $m->secondScore }}</td>
            <td>{{ $m->finalScore }}</td>

            <td>
                <a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>
                |
                <a href="/mahasiswa/hapus/{{ $m->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>