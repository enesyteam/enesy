@extends('templates.default.master.modal-master')
@section('body.content')
<div class="mfp-bg mfp-fade mfp-ready"></div>
<div class="mfp-wrap mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1" style="overflow: hidden;">
    <div class="mfp-container mfp-s-ready mfp-inline-holder">
            <video width="640" height="480" controls>
              <source src="{{url('templates/default/assets/images/courses/course-preview.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
    </div>
</div>
@stop