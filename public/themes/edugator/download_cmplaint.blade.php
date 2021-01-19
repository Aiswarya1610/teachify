@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp

<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Complaint Policy</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Complaint Policy </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container sbl_course_list">
            
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>Any formal complaints must be addresses to</p>
                        <pre>    Academic Director
    School of Business London 44 Broadway,
    Stratford, London, E15 1XH,
    United Kingdom</pre>
                    
                            <p><a href="/downloadpdf" class="btn btn-info download-pdf">Download Complaint form</a></p>
                        
                    </div>
                </div>
            </div>
        </section>
@endsection
      