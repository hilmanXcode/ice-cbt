@extends('layouts.main')

@section('container')
    <h1>Hello World</h1>
@endsection

@section('script')
    <script>
        @if (session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Yeay !',
                text: "{{ session('success') }}"
            })
        @endif
    </script>
@endsection
