<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ config('app.locale') }}" lang="{{ config('app.locale') }}" prefix="og: http://ogp.me/ns#">
    <!--<![endif]-->
    {{-- HEAD--}}
    <head>
        <meta charset="utf-8" />
        <title>@yield('page_title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="@yield('meta_desc')" name="description" />
        <meta content="@yield('meta_author')" name="author" />

        {{-- CORE CSS--}}
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css" />
        {{ Html::style('https://fonts.googleapis.com/css?family=Roboto:400,500,700') }}
        {{ Html::style(asset('frontend/themes/default/assets/css/app.min.css')) }}
        {{-- /CORE CSS--}}

        {{-- PAGE CSS--}}
        {{-- Thêm các file css theo yêu cầu riêng của từng trang (nếu có)--}}
        @yield('page.css')
        {{-- /PAGE CSS--}}

        {{-- CORE JS--}}
        {{ Html::script(asset('frontend/themes/default/assets/js/head.min.js')) }}
        {{ Html::script(asset('frontend/themes/default/assets/js/jquery.min.js')) }}
        {{ Html::script(asset('frontend/themes/default/assets/js/loader/pace.min.js')) }} {{-- For Page Loader--}}
        {{-- /CORE JS--}}

        {{-- PAGE JS--}}
        {{-- Thêm các file js theo yêu cầu riêng của từng trang (nếu có)--}}
        @yield('page.js')
        {{-- /PAGE JS--}}

        {{-- EMBED JS--}}
        {{-- Các đoạn Javascript nhúng theo yêu cầu riêng của từng trang--}}
        @yield('head.js')
        {{-- /EMBED JS--}}
    </head>
    {{-- /HEAD--}}
    <body class="page-body @yield('body.class')">
        <!--[if lt IE 10]><div class="legacy-ie-banner"><h2 class="legacy-ie-banner__title">Trình duyệt không được hỗ trợ!</h2><p class="legacy-ie-banner__text">Website này đã được thiết kế cho các trình duyệt hiện đại và được kiểm tra với trình duyệt Internet Explorer phiên bản 10 trở lên. </p><p class="legacy-ie-banner__text">Website này có thể sẽ không hiển thị và làm việc tốt với trình duyệt hiện tại của bạn. </p></div><![endif]-->
        
        {{-- Header--}}
        <nav class="global-nav view view--loaded">
            {{-- Mobile header--}}
            @include('frontend.themes.default.partials.mobile-header')
            {{-- /Mobile header--}}
            {{-- Desktop header--}}
            @include('frontend.themes.default.partials.desktop-header')
            {{-- /Desktop header--}}
            {{-- Mobile Toggle Buttons--}}
            <div class="global-nav__mobile-toggle">
                <a class="global-nav__mobile-toggle-link" href="javascript:">
                    <i class="icon-menu7 fa-reorder icon-2x"></i>
                    <i class="icon-x icon-2x close-nav-button"></i>
                </a>
            </div>
            {{-- /Mobile Toggle Buttons--}}
        </nav>
        {{-- /Header--}}

        {{-- Page content--}}
        <div class="page-content">
            @yield('body.content')

            {{-- Page overlay--}}
                <div class="global-page-overlay"></div>
            {{-- /Page overlay--}}
        </div>
        {{-- /Page content--}}

        {{-- Footer--}}
        @include('frontend.themes.default.partials.footer')
        {{-- /Footer--}}
        
        {{-- Core scripts--}}
        <script type="text/javascript">

            this.$body = $("body");
            
            this.$mobile_nav    = this.$('.global-nav__mobile');

            // mobile menu
            $(document).on('click', '.global-nav__mobile-toggle-link', function (e) {
                $body.toggleClass('body--mobile-nav-open');
            });

            // search box input => fadeout body when seach focus (Cong)
            $('input.global-nav__search-terms.tt-input').focus( function() {
                $body.toggleClass('overlay-is-show');
                if($('input.global-nav__search-terms.tt-input').val())
                $('span.tt-dropdown-menu').show();
            });

            $('input.global-nav__search-terms.tt-input').blur( function() {
                $body.toggleClass('overlay-is-show');
            });

            // demo seach by Cong
            var timerid;    
            $('input.global-nav__search-terms.tt-input').on("input",function(e){
                var value = $(this).val();
                if($(this).data("lastval")!= value){

                    $(this).data("lastval",value);        
                    clearTimeout(timerid);

                    timerid = setTimeout(function() {
                        //change action
                        if(value && value.length > 2){
                            $('span.tt-dropdown-menu').show();

                            var content = "Khóa học ".concat(value);
                            // clear last results
                            $('span.tt-dropdown-menu ul.search-items').html('');
                            // append new results
                            // simulate for 5 results
                            for (i = 0; i < 6; i++) { 
                                $('span.tt-dropdown-menu ul.search-items').append('<li> <a href="#">'.concat(content).concat('</a></li>'));
                            }
                        }
                        else
                            $('span.tt-dropdown-menu').hide();
                        
                    },500);
                    
                };
            });

            // collapable mobile menu => need Duc help!!!!!!!!!!!
            //  How to remove is-open in global-nav__mobile-top-level-expansion-link????? FUCK
            $('.global-nav__mobile-top-level-expansion-link').click(function(e) {
                e.preventDefault();

                var $this = $(this);
                $this.toggleClass('is-open');

                if ($this.next().hasClass('show')) {
                    $this.next().removeClass('show');
                    $this.next().slideUp(350);
                    // need Duc remove class is-open of other items
                    // place codes here!!
                } else {
                    $this.parent().parent().find('li .global-nav__mobile-second-level').removeClass('show').slideUp(350);

                    $this.next().toggleClass('show');
                    $this.next().slideToggle(350);
                }
            }), (this), $(window).on("resize", function(e) {
                return function() {
                    return e._onResize()
                }
            }(this)), this.$pageContent = $(".page-content"), this.$body = $("body"), _isOpen = function() {
                return this.$body.hasClass("body--mobile-nav-open")
            }, _adjustContentHeight = function() {
                return this._isOpen() ? this.$pageContent.height($(window).height() - 75) : this.$pageContent.css("height", "auto")
            }, _onResize = function() {
                return this._adjustContentHeight();//, this.$mobile_nav.is(":visible") ? void 0 : this._close() => no need!
            }, _close = function() {
                return this.$body.removeClass("body--mobile-nav-open")
            }
        </script>
        {{-- /Core scripts--}}

        {{-- Body embed scripts--}}
        @yield('body.script')
        {{-- /Body embed scripts--}}
    </body>
</html>
