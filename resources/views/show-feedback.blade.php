@extends('layout.master')

@section('content')
        <feedback-card :feedbacks='@json($feedbacks)'></feedback-card>
@endsection
