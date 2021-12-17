@extends('layouts.main')

@section('container')
        <div class="d-flex flex-column">
            <h3 class="text-center">{{ $title }}</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pendonor</th>
                    <th scope="col">Nama Institusi</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Jenis Rhesus</th>
                    <th scope="col">Jadwal</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($arrays as $data)
                    <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection
