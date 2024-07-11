@extends('errors::minimal')

@section('title', __("Oops… You just found an error page"))
@section('code', '500')
@section('message', __("Sorry, but our server has encountered an internal error"))
