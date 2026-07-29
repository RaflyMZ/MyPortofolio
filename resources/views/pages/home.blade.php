@extends('layouts.app')

@section('title', 'Rafly Maulana Zulyzar - Web Developer & Data Analyst')
@section('meta_description', 'Portfolio of Rafly Maulana Zulyzar, a Web Developer focused on practical Laravel solutions, data-driven interfaces, and AI-enabled products.')

@section('content')
    
    @include('sections.hero')
    @include('sections.about')
    @include('sections.experience')
    @include('sections.projects')
    @include('sections.skills')

@endsection
