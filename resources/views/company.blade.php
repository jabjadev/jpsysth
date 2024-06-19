@include('layouts.navbar')

<div style="height: 170px; width: auto;">
    <div class="container-fluid">
        <p class="h1 text-center text-bolder">
            <br />
            {{ __('messages.CoHead') }}
        <p class="h6 text-center text-bold">
            {{ __('messages.CoDescription') }}
        </p>
        <br />
        </p>
    </div>
</div>


<br />

<div class="bg-white">
    <div class="container">
        <p class="h3 text-center">
            <br />
            {{ __('messages.CoHeadTitle') }}
        </p>
        <br />

        <div class="justify-content-center">
            <div class="container shadow p-3 mb-5 rounded-4">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 50%">
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {{ __('messages.CoNameTitle') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {{ __('messages.CoJapan') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {{ __('messages.CoThai') }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {{ __('messages.CoAddressTitle') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {{ __('messages.CoAddress') }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {{ __('messages.CoTelAndEmailTitle') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {!! __('messages.CoTelAndEmail') !!}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {{ __('messages.CoEstablishmentAndCapitalTitle') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {!! __('messages.CoEstablishmentAndCapital') !!}
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {{ __('messages.CoRepresentativeTitle') }}
                                        </p>
                                        <p class="h6 text-left">
                                            {{ __('messages.CoRepresentative') }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container-fluid d-flex align-items-center justify-content-center">
                                    <div class="container-sm w-75">
                                        <p class="h3 text-center">
                                            {!! __('messages.CoOurServiceTitle') !!}
                                        </p>
                                        <p class="h6 text-left">
                                            {!! __('messages.CoOurService') !!}
                                            <br />
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <div class="alert rounded-4 w-75" role="alert">
                            <p class="h4 text-dark text-center">
                                Company name
                            </p>
                            <p class="h6 text-center">
                                Japan System Co.,Ltd <br />
                                Japan System (Thailand) Co.,Ltd
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <div class="alert rounded-4 w-75" role="alert">
                            <p class="h4 text-dark text-center">
                                Company address
                            </p>
                            <p class="h6 text-center">
                                28th Fl, 253 Asoke Building, Sukhumvit 21 Rd.(Asoke), <br />
                                Klogntoey nua, Wattana, Bangkok 10110
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <div class="alert rounded-4 w-75" role="alert">
                            <p class="h4 text-dark text-center">
                                Tel.
                            </p>
                            <p class="h6 text-center">
                                (02)664-1674
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <div class="alert rounded-4 w-75" role="alert">
                            <p class="h4 text-dark text-center">
                                E-mail
                            </p>
                            <p class="h6 text-center">
                                info@jpsys-th.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <div class="alert rounded-4 w-75" role="alert">
                            <p class="h4 text-dark text-center">
                                Establishment
                            </p>
                            <p class="h6 text-center">
                                2015/12
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div
                            class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                            <div class="alert rounded-4 w-75" role="alert">
                                <p class="h4 text-dark text-center">
                                    Capital
                                </p>
                                <p class="h6 text-center">
                                    2,000,000 THB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                            <div class="alert rounded-4" role="alert">
                                <p class="h4 text-dark text-center">
                                    Representative
                                </p>
                                <div class="container" style="width: auto; hieght: 100px">
                                    <p class="h6 text-start">
                                        Tsubasa Hoshino
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div
                            class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                            <div class="alert rounded-4 w-75" role="alert">
                                <p class="h4 text-dark text-center">
                                    Our service
                                </p>
                                <div class="container w-75">
                                    <p class="h6 text-start">
                                        1. IT Planing<br />
                                        2. Design and construction of in-house network<br />
                                        3. System development / customization <br />
                                        4. ERP system planning<br />
                                        5. Sales of communication equipment such as servers and personal computers<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            <div class="row">
                <div class="col">
                    <!--Google map-->
                    <div class="container d-flex align-items-center justify-content-center shadow p-3 mb-5 rounded-4">
                        <iframe class="rounded-4"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.526674059996!2d100.56009577479199!3d13.74708219740337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29eefce6316bf%3A0xd901ed3b43c03941!2sJapan%20System%20(Thailand)%20Co.%2C%20Ltd.!5e0!3m2!1sen!2sth!4v1710698971302!5m2!1sen!2sth"
                            width="1250px" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!--Google Maps-->
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container shadow p-3 mb-5 rounded-4">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Company name
                                    </p>
                                    <p class="h6 text-left">
                                        Japan System Co.,Ltd
                                    </p>
                                    <p class="h6 text-left">
                                        Japan System (Thailand) Co.,Ltd
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Company address
                                    </p>
                                    <p class="h6 text-left">
                                        28th Fl, 253 Asoke Building, Sukhumvit 21 Rd.(Asoke),
                                        Klogntoey nua, Wattana, Bangkok 10110
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Tel. and E-Mail
                                    </p>
                                    <p class="h6 text-left">
                                        Tel: (02)664-1674 <br />
                                        E-Mail: info@jpsys-th.com
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Establishment and Capital
                                    </p>
                                    <p class="h6 text-left">
                                        Establishment: 2015/12 <br />
                                        Capital: 2,000,000 THB
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Representative
                                    </p>
                                    <p class="h6 text-left">
                                        Sir. Tsubasa Hoshino
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="container-fluid d-flex align-items-center justify-content-center">
                                <div class="container-sm w-75">
                                    <p class="h3 text-center">
                                        Our Service
                                    </p>
                                    <p class="h6 text-left">
                                        1. IT Planing <br />
                                        2. Design and construction of in-house network <br />
                                        3. System development / customization <br />
                                        4. ERP system planning <br />
                                        5. Sales of communication equipment such as servers and personal computers
                                        <br />
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div> --}}
</div>
</div>
<br />
<br />

@include('layouts.footer')
