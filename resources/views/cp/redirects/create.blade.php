@extends('statamic::layout')

@section('content')
    <breadcrumbs :crumbs='@json($crumbs)'></breadcrumbs>
    <aardvark-redirects-publish-form
        title="{{ $title }}"
        action="{{ cp_route('aardvark-seo.redirects.manual-redirects.store') }}"
        redirect-url={{ cp_route('aardvark-seo.redirects.manual-redirects.index') }}
        :blueprint='@json($blueprint)'
        :meta='@json($meta)'
        :values='@json($values)'
    ></aardvark-redirects-publish-form>
@stop
