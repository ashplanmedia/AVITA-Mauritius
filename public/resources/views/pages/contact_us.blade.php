@extends('layouts.app')

@section('title')
    @lang('title.contact_us')
@stop

@section('content')

    <main>

        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">

                <div class="container">
                    <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light">@lang('site.contactus_contactus') <hr/></h1>

                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">Sales Enquiry :</h2>

                            <div class="mb-2">+230 5448 1500</div>

                            <div class="mb-2"><b>Email :</b><br>
                                sales@dnstechnologies.mu</div>

                            <div><b>@lang('site.contactus_operating') :</b><br>
                                Monday to Friday : 09:30 am -16:30 pm</div>


                            <div class="mb-2"><b>Address :</b><br>
                                Royal Road Plaines-Magnien Postal Code 51509, Plaine Magnien, Mauritius</div>
                            <h2 class="contact_us_title">For Service :</h2>
                            <div class="mb-2">Toll Free : 1800-22-3902</div>

                        </div>
                        <div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14955.323503689038!2d57.6662783!3d-20.4310398!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf803365f5f890aa4!2sDNS+TECHNOLOGIES+LTD!5e0!3m2!1sen!2sin!4v1560275768835!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>





    </main>

@endsection
