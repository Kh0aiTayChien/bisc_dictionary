<section class="content">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="logo_body justify-content-center">
        <img class="icon" src="{{asset('img/logo.png')}}">
    </div>

    <div class="autocomplete center-form ">
        <form action="" id="search-form" class="row search-form">
            <div class="input-group">
                <input class="form-control col-lg-9 col-md-8 " id="search" type="text" placeholder="Tìm kiếm...">
                <button type="submit" class="btn btn-block btn-warning col-lg-3 col-md-4" value="Tìm kiếm"> <strong>Tra cứu  </strong>
                </button>
            </div>
            <ul class="suggestions"></ul>
        </form>
    </div>

    <div class="row">
        <div class="result col-md-6 offset-md-3 h-75 p-5"></div>
    </div>
    <script src="{{asset('js/index.js')}}"></script>
</section>
