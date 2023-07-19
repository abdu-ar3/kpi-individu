@extends('layouts.admin') 

@section('title') BIODATA @endsection

@section('content')

 <div class="content-wrapper">
            <div class="content-wrapper-before" style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-sm-12 col-xl-8">
                            <div class="media d-flex m-1 ">
                                <div class="align-left p-1">
                                    <a href="#" class="profile-image">
                                        <img src="app-assets/images/portrait/small/avatar-s-1.png" class="rounded-circle img-border height-100" alt="Card image">
                                    </a>
                                </div>
                                <div class="media-body text-left  mt-1">
                                    <h3 class="font-large-1 white">Thomas Cruise IV
                                        <span class="font-medium-1 white">(Project manager)</span>
                                    </h3>
                                    <p class="white">
                                        <i class="ft-map-pin white"> </i> New York, USA </p>
                                    <p class="white text-bold-300 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed odio risus. Integer sit amet dolor elit. Suspendisse
                                        ac neque in lacus venenatis convallis. Sed eu lacus odio</p>
                                    <ul class="list-inline">
                                        <li class="pr-1 line-height-1">
                                            <a href="#" class="font-medium-4 white ">
                                                <span class="ft-facebook"></span>
                                            </a>
                                        </li>
                                        <li class="pr-1 line-height-1">
                                            <a href="#" class="font-medium-4 white ">
                                                <span class="ft-twitter white"></span>
                                            </a>
                                        </li>
                                        <li class="line-height-1">
                                            <a href="#" class="font-medium-4 white ">
                                                <span class="ft-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 col-md-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-title-wrap bar-primary">
                                        <div class="card-title">Work History</div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0 pt-0 pb-1">
                                        <ul>
                                            <li>
                                                <strong>99%</strong>
                                                Job Success
                                            </li>
                                            <li>
                                                <strong>4.9 stars </strong>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                            <li>
                                                <strong>1022</strong> Hours Worked</li>
                                            <li>
                                                <strong>26</strong> Jobs</li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-title-wrap bar-primary">
                                        <div class="card-title">Other Details</div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0 pt-0 pb-1">
                                        <ul>
                                            <li>
                                                <strong>Availability: </strong>
                                                10-30 hrs / week
                                            </li>
                                            <li>
                                                <strong>24 hours </strong> response time

                                            <li>
                                                <strong>Languages: </strong> English/ Spanish</li>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project X</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline d-block mb-0">
                                            <li>
                                                <i class="ft-bar-chart font-large-1 danger"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body pt-0 pb-1">
                                        <h6 class="text-bold-600"> Task done:
                                            <span>4/10</span>
                                        </h6>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <h6 class="text-bold-600 mt-2"> Client:
                                                    <span class="info">Xeon Inc.</span>
                                                </h6>
                                                <h6 class="text-bold-600 mt-1"> Deadline:
                                                    <span class="blue-grey">June, 2018</span>
                                                </h6>
                                            </div>
                                            <div class="media-body text-right mt-2">
                                                <ul class="list-unstyled users-list">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-7 col-md-12">
                            <!--Project Timeline div starts-->
                            <div id="timeline">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-primary">
                                            <div class="card-title">Project Timeline</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-block">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project Timeline div ends-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection