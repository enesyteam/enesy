@extends('frontend.themes.default.layout.dashboard')

{{-- Page stylesheets --}}
@section('page.css')
{{ Html::style(asset('frontend/themes/default/assets/css/pages/course.min.css')) }}
@stop
{{-- /Page stylesheets --}}

{{-- Page js --}}
@section('page.js')
{{ Html::script(asset('frontend/themes/default/assets/js/course.js')) }}
@stop
{{-- /Page js --}}


{{-- Body class --}}
@section('body.class', 'courses-page')
{{-- /Body class --}}

{{-- Body content --}}
@section('body.content')
    {{-- Hero section --}}
    @yield('hero-section')
    {{-- Meta section --}}
    @yield('metadata')

    <main class="container">
        {{-- Maybe need to show a banner on top of content --}}
        @yield('page-banner')
        
        @yield('page-title')
        
        @yield('page-content')

        @yield('pagination')
    </main>
@stop
{{-- /Body content --}}

@section('body.script')
<script type="text/javascript">

    jQuery(document).ready(function () {

        // first demo
        $('div.courses-grid-view').responsiveContainer({
            feature: 'min-width',
            value: '830px',
            className: 'course_grid_columns-4'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '830px',
            className: 'course_grid_columns-3'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '680px',
            className: 'course_grid_columns-2'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '480px',
            className: 'course_grid_columns-1'
        });

    });
    
</script>
@stop
