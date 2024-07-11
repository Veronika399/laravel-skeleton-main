@extends('errors::minimal')

@section('title', __("Oops… You just found an error page"))
@section('code', '401')
@section('message', __("Sorry, but you are not authorized"))
