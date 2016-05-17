<!DOCTYPE html>
<html lang="en">

    <head>
        @include('backend.templates.partials.head')
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('backend.templates.partials.sidebar-menu')
                @include('backend.templates.partials.top-nav')
                <div class="right_col" role="main" style="padding-top: 85px;">
                    @yield('content')
                </div>
            </div>
        </div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        @include('backend.templates.partials.footer')
        @yield('script')
        <script>
            $(".price-input").on("keypress keyup blur",function (event) {
                //this.value = this.value.replace(/[^0-9\.]/g,'');
                $(this).val($(this).val().replace(/[^0-9\.]/g,''));
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });

            $(".number").on("keypress keyup blur",function (event) {
                $(this).val($(this).val().replace(/[^\d].+/, ""));
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });
        </script>
    </body>
</html>