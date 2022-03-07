@extends('layouts.layout')

@section('title')
| Page de contact
@endsection

@section('header_partials')

<div id="Subheader" style="padding:80px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">{{ $realisation->title }}</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="sections_group">
    <div class="section mcb-section full-width no-margin-h no-margin-v  " style="padding-top:0px; padding-bottom:0px; ">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one  valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_image ">
                        <div class="image_frame image_item no_link scale-with-grid no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ asset('image/') }}/{{ $realisation->image }}" alt="{{ $realisation->title }}" width="1920" height="800" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mcb-section" style="padding-top:90px; padding-bottom:40px; ">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one  valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_divider ">
                        <hr class="no_line" style="margin: 0 auto 40px;" />
                    </div>
                    <div class="column mcb-column three-fifth column_image ">
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ asset('thumbnail/') }}/{{ $realisation->thunmail }}" alt="{{ $realisation->title }}" width="780" height="950" />
                            </div>
                        </div>
                    </div>
                    <div class="column mcb-column two-fifth column_column  ">
                        <div class="column_attr" style=" padding:50px 10% 0 15%;">
                            <p>
                                {{ $realisation->description }}
                            </p>
                        </div>
                    </div>
                    <div class="column mcb-column one column_divider ">
                        <hr class="no_line" />
                    </div>
                    <div class="column mcb-column one-sixth column_placeholder">
                        <div class="placeholder">
                            &nbsp;
                        </div>
                    </div>
                    <div class="column mcb-column two-third column_column  ">
                        <div class="column_attr align_center" style=" padding:10px 5px; border-top: 1px solid rgba(0, 0, 0, 0.2)">
                            une nouvelle generation d'ingenerie
                        </div>
                    </div>
                    <div class="column mcb-column one column_divider ">
                        <hr class="no_line" style="margin: 0 auto 10px;" />
                    </div>
                    <div class="column mcb-column one-second column_column  ">
                        <div class="column_attr" style=" padding:0 3% 0 0;">
                            <p>
                                {{ $realisation->desc_content_1 }}
                            </p>
                        </div>
                    </div>
                    <div class="column mcb-column one-second column_column  ">
                        <div class="column_attr" style=" padding:0 0 0 3%;">
                            <p>
                                {{ $realisation->desc_content_1 }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-image:url({{ asset('content/architect2/images/home_architect2_pattern1.jpg') }}); background-repeat:repeat; background-position:center top; ">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one  valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column  ">
                        <div class="column_attr align_center" style=" padding:0 8%;">
                            <h3>Autres réalisations</h3>
                        </div>
                    </div>
                    <div class="column mcb-column one column_portfolio ">
                        <div class="column_filters">
                            <div class="portfolio_wrapper isotope_wrapper ">
                                <ul class="portfolio_group lm_wrapper isotope col-3 flat">
                                    @foreach($realisations as $reals)
                                    <li class="portfolio-item isotope-item category-branding category-design  has-thumbnail">
                                        <div class="portfolio-item-fw-bg">
                                            <div class="portfolio-item-fill"></div>
                                            <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="{{ route('realisation.item', $reals->id) }}">
                                                        <div class="mask"></div>
                                                        <img width="353" height="276" src="{{ asset('image/min80/') }}/{{ $reals->image }}" class="scale-with-grid wp-post-image" alt="home_architect2_slider1" itemprop="image" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection