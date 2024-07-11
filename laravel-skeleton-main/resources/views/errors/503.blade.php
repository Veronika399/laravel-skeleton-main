@extends('errors::minimal')

@section('title', __("Oops… You just found an error page"))
@section('code', '503')
@section('message', __("We're sorry, but the service is unavailable"))
