@extends('layouts.master')

@section('content')
<div class="container-fluid padding-content">
    <div class="row vh-100 align-items-center banner">
        <div class="col-12 text-center">
            <img src="{{ asset('images/Logo-white.png') }}" alt="" width="120" height="100" />
            <h1 class="fw-bold text-white shadow-white">Lifelong Learning</h1>
            <p class="fw-bold text-white shadow-white">
                The future is in online courses available at the click of a mouse or
                the touch of a finger on your screen
            </p>
        <a href="#courses" class="btn btn-danger fw-bold shadow-white mb-0 ">Explore More</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-warning">
        <div class="col-6 mt-5">
            <h1 class="fw-bold text-black margin-left">About Us.</h1>
            <p class="fw-bold text-black margin-left fs-5">
                Find courses on almost any topic. .
            </p>
            <p class="fw-bold text-black margin-left mt-5">
                ELearning is an online platform that allows all people in the world
                who are ambitious and want to advance in their career or start a new
                career and do not have money for formal education, we offer you our
                courses from the top professionals in their field
            </p>
            <p class="fw-bold text-black margin-left mt-5">
                We offer proven courses that have been proven in the real world, we
                have graduated over 5,000 students who have improved in their field
                or started a new career after completing the course.
            </p>
            <h2 class="fw-bold text-black margin-left mt-5">
                We are recognized by top world companies such as: Meta, Tesla,
                Yahoo, Google, Samsung, LG and so on
            </h2>
        </div>
        <div class="col-6 mt-5">
            <img src="{{ asset('images/about.png') }}" alt="..." class="margin-left" />
        </div>
    </div>
</div>
<div class="container-fluid" id="courses">
    <div class="row bg-warning">
        <div class="col-12">
            <hr />
            <h1 class="fw-bold text-black mt-5 text-center mb-5">Courses</h1>
            <hr width="30%" class="mx-auto" />
            <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="All" autocomplete="off" />
                <label class="btn py-4 px-4 fw-bold text-uppercase" for="All">All</label>

                <input type="checkbox" class="btn-check" id="Graphic-design" autocomplete="off" />
                <label class="btn py-4 px-4 fw-bold text-uppercase" for="Graphic-design">Graphic design</label>

                <input type="checkbox" class="btn-check" id="Web-Development" autocomplete="off" />
                <label class="btn py-4 px-4 fw-bold text-uppercase" for="Web-Development">Web development</label>

                <input type="checkbox" class="btn-check" id="Social" autocomplete="off" />
                <label class="btn py-4 px-4 fw-bold text-uppercase" for="Social">social media marketing</label>

                <input type="checkbox" class="btn-check" id="Podcast" autocomplete="off" />
                <label class="btn py-4 px-4 fw-bold text-uppercase" for="Podcast">Podcast</label>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-warning py-5">
    <div class="row justify-content-center align-items-center padding-projects">
        <div class="col-4">
            <div class="card rounded text-shadow marketing" style="width: 18rem">
                <img src="{{ asset('images/courses.jpg') }}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="card-text">
                        <small class="bg-warning fw-bold py-1 px-1">Graphic design</small>
                    </p>
                    <h5 class="card-title fw-bold">
                        Graphic Design course learning app like Photoshop, Adobe XD,
                        Illustrator and etc..
                    </h5>
                    <p class="card-text">
                        In this course we will learn how to use design tools correctly
                        and make any type of design for any purpose.
                    </p>
                    <p class="card-text">
                        <small class="text-muted fw-bold">June - 2022</small>
                    </p>
                    <div class="text-end">
                        <a href="#" class="btn btn-danger text-end fw-bold">Apply Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card rounded text-shadow marketing" style="width: 18rem">
                <img src="{{ asset('images/courses.jpg') }}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="card-text">
                        <small class="bg-warning fw-bold py-1 px-1">Graphic design</small>
                    </p>
                    <h5 class="card-title fw-bold">
                        Graphic Design course learning app like Photoshop, Adobe XD,
                        Illustrator and etc..
                    </h5>
                    <p class="card-text">
                        In this course we will learn how to use design tools correctly
                        and make any type of design for any purpose.
                    </p>
                    <p class="card-text">
                        <small class="text-muted fw-bold">June - 2022</small>
                    </p>
                    <div class="text-end">
                        <a href="#" class="btn btn-danger text-end fw-bold">Apply Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card rounded text-shadow marketing" style="width: 18rem">
                <img src="{{ asset('images/courses.jpg') }}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="card-text">
                        <small class="bg-warning fw-bold py-1 px-1">Graphic design</small>
                    </p>
                    <h5 class="card-title fw-bold">
                        Graphic Design course learning app like Photoshop, Adobe XD,
                        Illustrator and etc..
                    </h5>
                    <p class="card-text">
                        In this course we will learn how to use design tools correctly
                        and make any type of design for any purpose.
                    </p>
                    <p class="card-text">
                        <small class="text-muted fw-bold">June - 2022</small>
                    </p>
                    <div class="text-end">
                        <a href="#" class="btn btn-danger text-end fw-bold">Apply Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-warning justify-content-center align-items-center padding-projects">
        <div class="col-6 border border-dark bg-black opacity-75 rounded mt-5 ms-5">
            <p class="text-white mt-5">
                You want to start with online courses, you don't want to spend 4
                years at university, you want a beautiful, modern and guaranteed
                future, but you don't know how?
            </p>
            <h1 class="text-white mt-5">
                For more details contact our General Manager Andrea Doe!
            </h1>
        </div>
        <div class="col-6 border border-dark bg-black rounded mt-5 border-one text-center ms-5">
            <img src="{{ asset('images/AndreaDoe.png') }}" alt="" />
            <p class="text-white mt-3 fw-bold">ANDREA DOE</p>
            <p class="text-white mt-1">GENERAL MANAGER</p>
            <hr width="40%" class="mx-auto bg-white" />
            <p class="text-white mt-1">+22 / 345 - 786</p>
            <p class="text-white mt-1">contact@elearning.co</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-warning justify-content-center align-items-center padding-projects">
        <h1 class="text-black fw-bold margin-top">What our students say</h1>
        <p class="text-black mt-1">
            Below you will see the stories of our successful students who followed
            our courses in the field they loved and how they managed to make a
            successful and rich career.
        </p>
        <hr class="mx-auto" />
        <div class="col-6">
            <h1 class="mt-1 text-black">Andrew Johnson</h1>
            <p class="text-black fw-bold mt-3">
                is our student who listened to the Web Development course on the
                online platform ELearning, he is originally from the USA, in
                addition to formal education, he wanted to have more experience and
                more knowledge in the field in which he wants to build a career.
            </p>
            <p class="text-black fw-bold mt-3">
                ✅Successfully completed the course with the highest possible marks
                from our professors who have done the course and you have privileged
                support from them, Andrew mastered the programming flawlessly that's
                why he was chosen as one of the best students on this platform.
            </p>
            <p class="text-black fw-bold mt-3">
                ✅Successfully employed in one of the companies we cooperate with
            </p>
            <p class="text-black fw-bold mt-3 fs-3">
                💲135K <span class="fs-5">Year Salary</span>
            </p>
        </div>
        <div class="col-6 border border-dark bg-warning mb-3">
            <img src="{{ asset('images/AndrewJohnson.jpg') }}" alt="" class="w-100 center/cover" />
            <p class="text-left fw-bold text-black mt-1">Andrew Johnson</p>
            <p class="text-left text-black">Web Development course</p>
            <a href="#" class="text-white text-right"><button type="button" class="btn btn-danger fw-bold shadow-white">
                    Join Now
                </button></a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-black justify-content-center align-items-center padding-projects">
        <div class="col-6 border border-white mt-3 mb-3">
            <img src="{{ asset('images/KiraVolkov.jpg') }}" alt="" class="w-100 center/cover" />
            <p class="text-left fw-bold text-white mt-1">Kira Volkov</p>
            <p class="text-left text-white">Social Media Marketing</p>
            <a href="#" class="text-white text-right"><button type="button" class="btn btn-danger fw-bold shadow-white">
                    Join Now
                </button></a>
        </div>
        <div class="col-6">
            <h1 class="mt-1 text-white">Kira Volkov</h1>
            <p class="text-white fw-bold mt-3">
                is our student who listened to the Web Development course on the
                online platform ELearning, he is originally from the Russia
                knowledge in the field in which he wants to build a career.
            </p>
            <p class="text-white fw-bold mt-3">
                ✅Successfully completed the course with the highest possible marks
                from our professors who have done the course and you have privileged
                support from them, Andrew mastered the programming flawlessly that's
                why he was chosen as one of the best students on this platform.
            </p>
            <p class="text-white fw-bold mt-3">
                ✅Successfully employed in one of the companies we cooperate with
            </p>
            <p class="text-white fw-bold mt-3 fs-3">
                💲75K <span class="fs-5">Year Salary</span>
            </p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-warning justify-content-center align-items-center padding-projects">
        <div class="col-6 mt-3 mb-3">
            <h1 class="mt-1 text-black">Erno Korhonen</h1>
            <p class="text-black fw-bold mt-3">
                is our student who listened to the Web Development course on the
                online platform ELearning, he is originally from the USA, in
                addition to formal education, he wanted to have more experience and
                more knowledge in the field in which he wants to build a career.
            </p>
            <p class="text-black fw-bold mt-3">
                ✅Successfully completed the course with the highest possible marks
                from our professors who have done the course and you have privileged
                support from them, Andrew mastered the programming flawlessly that's
                why he was chosen as one of the best students on this platform.
            </p>
            <p class="text-black fw-bold mt-3">
                ✅Successfully employed in one of the companies we cooperate with
            </p>
            <p class="text-black fw-bold mt-3 fs-3">
                💲89K <span class="fs-5">Year Salary</span>
            </p>
        </div>
        <div class="col-6 border border-dark bg-warning mb-3 mt-3">
            <img src="{{ asset('images/ErnoKorhonen.jpg') }}" alt="" class="w-100 center/cover" />
            <p class="text-left fw-bold text-black mt-1">Erno Korhonen</p>
            <p class="text-left text-black">Graphic design</p>
            <a href="#" class="text-white text-right"><button type="button" class="btn btn-danger fw-bold shadow-white">
                    Join Now
                </button></a>
        </div>
    </div>
</div>

<div class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center text-black pt-5 pb-3">Some of our mentors</h1>
            <hr width="30%" class="mx-auto" />
            <!-- Carousel wrapper -->
            <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('images/prof1.png') }}" alt="avatar" style="width: 150px;" />
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">Prof. John Doe</h5>
                                <p>Social Media Marketing - Expert</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                    doloremque.
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                    </div>
                    <div class="carousel-item">
                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('images/prof2.png') }}" alt="avatar" style="width: 150px;" />
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">John Doe</h5>
                                <p>Web Developer</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis.
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                    </div>
                    <div class="carousel-item">
                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('images/prof3.png') }}" alt="avatar" style="width: 150px;" />
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">Anna Deynah</h5>
                                <p>UX Designer</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                    doloremque.
                                </p>
                            </div>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="fas fa-star fa-sm"></i></li>
                            <li><i class="far fa-star fa-sm"></i></li>
                        </ul>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->
        </div>
    </div>
</div>
@endsection