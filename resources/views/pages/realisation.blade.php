@extends('layouts.layout')

@section('title')
| Page de contact
@endsection

@section('header_partials')

<div id="Subheader" style="padding:80px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">Realisation</h1>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="section mcb-section full-width no-margin-h no-margin-v  " style="padding-top:0px; padding-bottom:0px; ">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one  valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_portfolio_photo ">
                    <div class="portfolio-photo ">
                        @foreach($realisations as $realisation)
                        <div class="portfolio-item">
                            <a class="portfolio-item-bg" href="{{ route('realisation.item', $realisation->id ) }}">
                                <img width="1920" height="800" src="{{ asset('image/') }}/{{ $realisation->image }}" class="attachment-full size-full wp-post-image" alt="home_architect2_slider1" />
                                <div class="mask"></div>
                            </a>
                            <a class="portfolio-details" href="{{ route('realisation.item', $realisation->id ) }}">
                                <div class="details">
                                    <h3 class="title">{{ $realisation->title }}</h3>
                                    <div class="categories">
                                        {{ $realisation->categories }}
                                    </div>
                                </div><span class="more">
                                    <h4>Voir plus</h4>
                                </span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection