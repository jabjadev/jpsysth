@include('layouts.navbar')

<div style="height: 170px; width: auto;">
    <div class="container-fluid">
        <p class="h1 text-center">
            <br />
            {{ __('messages.NavOnlineMarketing') }}
            <br />
        </p>
    </div>
</div>

<div class="bg-white">
    <div class="container-fluid">
        <br />
        <p class="h3 text-center">
            {{ __('messages.ITServiceHeadTitle') }}
        </p>
        <br />
        <div class="container-fluid d-flex justify-content-center items">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card border-0" style="width: 16rem;">
                        <img src="{{ asset('assets/image/maintenance.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-center">
                                {{ __('messages.ITServiceMaintanence') }}
                            </h6>
                            <div class="card-text d-flex justify-content-center gap-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card border-0" style="width: 16rem;">
                        <img src="{{ asset('assets/image/system-deployment.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-center">
                                {{ __('messages.ITServiceMaintanence') }}
                            </h6>
                            <p class="card-text pb-4"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card border-0" style="width: 16rem;">
                        <img src="{{ asset('assets/image/it-support-and-helpdesk.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-center">
                                {{ __('messages.ITServiceITSupportandHelpDesk') }}
                            </h6>
                            <div class="card-text d-flex justify-content-center gap-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card border-0" style="width: 16rem;">
                        <img src="{{ asset('assets/image/erp-system.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-center">
                                {{ __('messages.ITServiceERPSystem') }}
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

<br /><br />

@include('layouts.footer')
