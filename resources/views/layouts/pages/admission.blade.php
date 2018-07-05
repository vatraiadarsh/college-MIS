@extends('layouts.designs.master')
@section('title','Admission')
@section('content')

    <!--SECTION START-->
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Request an Admission</h2>
                    <p>Fusce purus mauris, blandit vitae purus eget, viverra volutpat nibh. Nam in elementum nisi, a placerat nisi. Quisque ullamcorper magna in odio rhoncus semper.Sed nec ultricies velit. Aliquam non massa id enim ultrices aliquet a ac
                        tortor.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p class="help-line">Help Line <span>+010 4561 32145</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form class="form-horizontal" method="POST" action="{{url('#admission')}}" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-sm-3">Full Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Phone:</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone_no" class="form-control" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email Id:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Your City:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control" placeholder="Enter your city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Education:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="education" class="form-control" placeholder="Enter your education">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-3">Course:</label>
                                <div class="col-sm-9">
                                    <select name="course_id">
								<option>-- Select course --</option>
                                @foreach($courses as $c)
                                    <option value="{{$c->id}}">{{$c->course_id}}</option>
                                @endforeach
							  </select>
                                </div>
                            </div>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">check this out
                                    </label>
                            </div>
                            <br>
                            <br>


                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style="">

                                        <input type="submit" value="APPLY NOW" class="waves-button-input">
                                    </i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


@endsection
