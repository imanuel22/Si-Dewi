@extends('superadmin.layouts.main')

@section('main')
    <h1>Halaman dashboard</h1>
    <div class="">
        <p>count desa: {{ $desa_count }}</p>
    </div>
    <div class="">
        <p>count desa di Badung: {{ $desa_per_kabupaten['Badung'] }}</p>
        <p>count desa di Bangli: {{ $desa_per_kabupaten['Bangli'] }}</p>
        <p>count desa di Jembrana: {{ $desa_per_kabupaten['Jembrana'] }}</p>
        <p>count desa di Klungkung: {{ $desa_per_kabupaten['Klungkung'] }}</p>
        <p>count desa di Karangasem: {{ $desa_per_kabupaten['Karangasem'] }}</p>
        <p>count desa di Gianyar: {{ $desa_per_kabupaten['Gianyar'] }}</p>
        <p>count desa di Tabanan: {{ $desa_per_kabupaten['Tabanan'] }}</p>
        <p>count desa di Denpasar: {{ $desa_per_kabupaten['Denpasar'] }}</p>
        <p>count desa di Buleleng: {{ $desa_per_kabupaten['Buleleng'] }}</p>
    </div>
@endsection
