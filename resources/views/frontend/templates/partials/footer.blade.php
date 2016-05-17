
<script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/js/icheck.js')}}"></script>
    <script src="{{asset('frontend/js/ionrangeslider.js')}}"></script>
    <script src="{{asset('frontend/js/jqzoom.js')}}"></script>
    <script src="{{asset('frontend/js/card-payment.js')}}"></script>
    <script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
    <script src="{{asset('frontend/js/magnific.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>


    <script src="{{asset('js/switcher.js')}}"></script>
<script>

    function changeTotal(){
        var tdTotal = document.getElementById("total").innerHTML;
        var qty = document.getElementById("quantity").value;
        tdTotal = tdTotal*qty;
    }
</script>
<!-- frontend -->

