@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Jumlah Kehadiran</div>
                        <div class="card-body text-large">
                            <h3>{{ $users }}</h3>
                        </div>
                        <div class="card-footer text-muted text-center"><i>Jumlah hadir pada
                                {{ now()->format('d, M Y') }}</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </section>
@endsection
