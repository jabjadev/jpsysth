@include('layouts.navbar')

<div style="height: 170px; width: auto;">
    <div class="container-fluid">
        <p class="h1 text-center fw-bold">
            <br />
            {{ __('messages.ContHead') }}
        <p class="h6 text-center">
            {{ __('messages.ContDescription') }}
        </p>
        <br />
        </p>
    </div>
</div>

<div class="bg-white">
    <div class="container ">
        <br />
        <p class="h6 text-center">
            <br />
            {!! __('messages.ContHeadTitle') !!}
        </p>
        <div class="justify-content-center">
            <br /><br />
            <div class="container shadow p-3 mb-5 rounded-4">
                <br />
                <div class="row">
                    <div class="col">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="alert rounded-4 w-75" role="alert">
                                <p class="h4 text-center">
                                    {{ __('messages.ContOfficeHoursTitle') }}
                                <p class="h8 text-center">
                                    {!! __('messages.ContOfficeHours') !!}
                                </p>
                                <br />
                                <p class="h5 text-center">
                                    <img src="{{ asset('assets/image/phone.png') }}" style="height: 20px; width: auto;">
                                    {{ __('messages.ContOfficeHoursTel') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="container d-flex align-items-center justify-content-center rounded-4">
                            <div class="alert rounded-4 w-75" role="alert">
                                <p class="h4 text-center">
                                    {{ __('messages.ContFormTitle') }}
                                </p>
                                {{-- <form action="/contact'" method="POST"> --}}
                                {{-- <form action="{{ route('contact.send') }}" method="POST"> --}}
                                    <div class="mb-4">
                                        <label for="companyname" class="form-label">
                                            {{ __('messages.ContFormCoName') }}
                                        </label>
                                        <input type="text" class="form-control" id="companyname" name="companyname"
                                            placeholder="{{ __('messages.ContFormPlHdCoName') }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="yourname" class="form-label">
                                            {{ __('messages.ContFormYourName') }}
                                        </label>
                                        <input type="text" class="form-control" id="yourname" name="yourname"
                                            placeholder="{{ __('messages.ContFormPlHdYourName') }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="youremail" class="form-label">
                                            {{ __('messages.ContFormYourEmail') }}
                                        </label>
                                        <input type="mail" class="form-control" id="youremail" name="youremail"
                                            placeholder="{{ __('messages.ContFormPlHdYourEmail') }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="phonenumber" class="form-label">
                                            {{ __('messages.ContFormPhoneNumber') }}
                                        </label>
                                        <input type="int" class="form-control" id="phonenumber" name="phonenumber"
                                            placeholder="{{ __('messages.ContFormPlHdPhoneNumbe') }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="contentinquiry" class="form-label">
                                            {{ __('messages.ContFormInquiry') }}
                                        </label>
                                        <textarea class="form-control" id="contentinquiry" rows="3" name="contentinquiry"
                                            placeholder="{{ __('messages.ContFormPlHdInquiry') }}" required></textarea>
                                    </div>
                                    <div class="container d-flex align-items-center justify-content-center">
                                        <div class="container d-flex align-items-center justify-content-center">
                                            <input class="btn btn-success" type="submit"
                                                value="{{ __('messages.ContSendButton') }}">
                                            &nbsp;
                                            <input class="btn btn-danger" type="reset"
                                                value="{{ __('messages.ContClearButton') }}">
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>
<br />

@include('layouts.footer')
