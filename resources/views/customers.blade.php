@extends('app')

@section('content')

<div class="row panel_container justify-content-around">

  @include('sidebar_navigation')

  @include('header_base')

  @include('all_customers')

</div>

@include('add_edit_customer')


@endsection
