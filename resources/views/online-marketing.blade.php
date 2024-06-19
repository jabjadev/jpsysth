@include('layouts.navbar')

<div style="height: 170px; width: auto;">
    <div class="container-fluid">
        <p class="h1 text-center">
            <br />
            {{ __('messages.OnLnMktgTitil') }}
            <br />
        </p>
    </div>
</div>

<div class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br /> <br />
                <p class="h2 text-center">
                    {{ __('messages.OnLnMktgHeadTitil') }}
                </p>
                <br />
                <div class="container-fluid d-flex justify-content-center items">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card border-0" style="width: 10rem;">
                                <img src="{{ asset('assets/image/website.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-center">
                                        {{ __('messages.OnLnMktgWebsite') }}
                                    </h6>
                                    <div class="card-text d-flex justify-content-center gap-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <br /> <br />
                <p class="h2 text-center">
                    {{ __('messages.OnLnMktgOnlineMarketing') }}
                </p>
                <br />
                <div class="container-fluid d-flex justify-content-center items">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card border-0" style="width: 10rem;">
                                <img src="{{ asset('assets/image/facebook.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-center text-center">
                                        {{ __('messages.OnLnMktgFacebook') }}
                                    </h6>
                                    <div class="card-text d-flex justify-content-center gap-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card border-0" style="width: 10rem;">
                                <img src="{{ asset('assets/image/instagram.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-center text-center">
                                        {{ __('messages.OnLnMktgInstagram') }}
                                    </h6>
                                    <p class="card-text pb-4"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card border-0" style="width: 10rem;">
                                <img src="{{ asset('assets/image/x.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-center text-center">
                                        {{ __('messages.OnLnMktgX') }}
                                    </h6>
                                    <div class="card-text d-flex justify-content-center gap-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card border-0" style="width: 10rem;">
                                <img src="{{ asset('assets/image/line.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-center text-center">
                                        {{ __('messages.OnLnMktgLine') }}
                                    </h6>
                                    <div class="card-text d-flex justify-content-center gap-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<br /><br />

@include('layouts.footer')
