@include('layouts/navbar')

<br><br>
<div class="container-sm">
    <div class="container-sm">
        <img src="{{ asset('assets/image/nav/nav_head.png') }}" style="height: 50px">
        <h5>{{ __('messages.IndexHeadTitle') }}</h5>
        <h6>{{ __('messages.IndexDescription') }}</h6>
        <br><br>
        <a href="{{ asset('/contact') }}"><button href="contact" type="button"
                class="btn btn-danger btn-lg">{{ __('messages.IndexContBtn') }}</button></a>
    </div>
</div>

<br><br>

<div class="shadow p-3 mb-5 bg-white rounded">
    <div class="container" style="background-color: transparent;">
        <div class="container-sm bg-white">
            <h2 class="mt-3 fw-bolder d-flex justify-content-center mt-5" style="color: #DF1400">
                <br>
                {{ __('messages.IndexWelcome') }}
            </h2>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <h6>{!! __('messages.IndexWelcomeDescription') !!}</h6>
                </blockquote>
                <figcaption class="blockquote-footer">
                    {{ __('messages.IndexBeg') }}
                </figcaption>
            </figure>
            <br />
            <h2 class="mt-3 fw-bolder d-flex justify-content-center mt-5">
                {{ __('messages.IndexOurServiceTitle') }}
            </h2>
            <br>
            <div class="container-fluid d-flex justify-content-center items">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card border-0" style="width: 14rem;">
                            <img src="{{ asset('assets/image/itsystem.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title d-flex justify-content-center text-center">
                                    {{ __('messages.IndexITSystem') }}
                                </h6>
                                <div class="card-text d-flex justify-content-center gap-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card border-0" style="width: 14rem;">
                            <img src="{{ asset('assets/image/online-marketing.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title d-flex justify-content-center text-center">
                                    {{ __('messages.IndexOnlineMarketing') }}
                                </h6>
                                <p class="card-text pb-4"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card border-0" style="width: 14rem;">
                            <img src="{{ asset('assets/image/consult.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title d-flex justify-content-center text-center">
                                    {{ __('messages.IndexConsultant') }}
                                </h6>
                                <div class="card-text d-flex justify-content-center gap-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card border-0" style="width: 14rem;">
                            <img src="{{ asset('assets/image/erp-system.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title d-flex justify-content-center text-center">
                                    {{ __('messages.IndexERPSystem') }}
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

@include('layouts/footer')
