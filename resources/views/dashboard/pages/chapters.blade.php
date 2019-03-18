@extends('dashboard.main')
@section('pages')
    <glossaries-component url="{{ url('/admin-dashboard/make-glossary-view') }}"></glossaries-component>
    @endsection
