@extends('layout.master')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Halaman Admin</h1>
        <div class="row">
            <div class="col-md-12">
                @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    100 Data Karyawan di rumahkan
                @endcomponent
                @component('layout.alert')
                    @slot('class')
                        primary
                    @endslot
                    Liburan telah tiba!
                @endcomponent
                @component('layout.alert')
                    @slot('class')
                    danger
                    @endslot
                    Awas tugas
            @endcomponent
            </div>
        </div>
    </div>
@endsection