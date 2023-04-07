
@extends('Website/master')
@section('content')



<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="page-header-content">
              <h1>Course Style 1</h1>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#">Home</a>
                </li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item">
                    {{ $Category->En_Name}}
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </section>


<section class="section-padding course">
    <div class="course-top-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">

                </div>

                <div class="col-lg-4">
                    <div class="topbar-search">
                        <form method="get" action="#">
                            <input type="text"  placeholder="Search our courses" class="form-control">
                            <label><i class="fa fa-search"></i></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($Courses as $item)
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course1.jpg" alt="" class="img-fluid">
                        <span class="course-label">
                    </div>

                    <div class="course-content">
                        <div class="course-price ">{{$item->price}}</div>

                        <h4><a href="#">
                            {{$item->En_name }}</span></a></h4>
                        <div class="rating">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <span>(5.00)</span>
                        </div>
                        <p>{{$item->En_External_Content }}</p>

                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student"><i class="bi bi-group"></i>340</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>82 Lessons</span>
                            </div>

                            <div class="buy-btn"><a href="#" class="btn btn-main-2 btn-small">Details</a></div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>


        <div class="row">
            <div class="col-lg-12">
                <nav class="blog-pagination text-center">
					<ul>
					  <li class="page-num active" ><a href="#">1</a></li>
					  <li class="page-num"><a href="#">2</a></li>
					  <li class="page-num"><a href="#">3</a></li>
					</ul>
				</nav>
            </div>
        </div>
    </div>
</section>





@endsection
