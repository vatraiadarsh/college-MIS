@extends('layouts.designs.master')
@section('title','Events')
@section('content')


    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>College <span> Events</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Latinoo College Expo 2018 - DONATION</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>12</span><span>feb,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Training at Team Fabio Clemente</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>26</span><span>apr,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Weekly Breakdance Practice</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>18</span><span>sep,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Admissions Information Session and Tour</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>nov,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>CUNY Assessment Test Workshop</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>18</span><span>sep,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Fire & ice launch party</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>nov,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('event-register')}}">
                                                <h4>Educate to Empower NYE Party</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('event-register')}}">Register</a><a href="{{url('event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection