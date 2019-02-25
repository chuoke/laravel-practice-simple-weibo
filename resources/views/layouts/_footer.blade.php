<footer class="footer fixed-bottom bg-secondary py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <div>
                    @include('layouts._logo')
                    <a class="text-bold text-white" href="{{ route('home') }}">无心声，不微博</a>
                </div>
            </div>
            
            <div class="col-sm-12 divider"></div>

            <div class="col-sm-12 d-flex justify-content-center pt-3">
                <a class="text-light px-1" href="{{ route('help') }}">帮助</a>
                <a class="text-light px-1" href="{{ route('about') }}">关于</a>
                <a class="text-light px-1" href="mailto:1074150727@qq.com">联系我们</a>
            </div>
        </div>
    </div>
</footer>