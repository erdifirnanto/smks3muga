@extends('user.master')
@section('master')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-heading">
                <h2>Daftar Guru</h2>
            </div>
            <div class="filter-buttons">
                <a href="{{ route('teachers.index', ['category' => 'all']) }}">All</a>
                <a href="{{ route('teachers.index', ['category' => 'pplg']) }}">PPLG</a>
                <a href="{{ route('teachers.index', ['category' => 'mplb']) }}">MPLB</a>
                <a href="{{ route('teachers.index', ['category' => 'tbsm']) }}">TBSM</a>
                <a href="{{ route('teachers.index', ['category' => 'tkro']) }}">TKRO</a>
                <a href="{{ route('teachers.index', ['category' => 'normatif']) }}">Normatif</a>
                <a href="{{ route('teachers.index', ['category' => 'karyawan']) }}">Karyawan</a>
                <a href="{{ route('teachers.index', ['category' => 'waka']) }}">Waka</a>
            </div>

            <div class="row">
                @foreach($teachers as $teacher)
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}">
                            </div>
                            <div class="description">
                                <h4>{{ $teacher->name }}</h4>
                                <p>{{ $teacher->category }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
