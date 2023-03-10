@extends('layouts.master')

@section('content')
<div class="container-fluid bg-warning padding-content">
    <h1 class="fw-bold ms-5 mt-3">Graphic design COURSE</h1>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        Begining <br />
                        <span class="fw-bold">After you purchase our course</span>
                    </p>
                </div>
            </div>
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        Timeline <br />
                        <span class="fw-bold">Life time access, over 120H+ of video material</span>
                    </p>
                </div>
            </div>
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        Payment <br />
                        <span class="fw-bold">Online payment, credit / debit card or you can contact us for
                            bank transfer</span>
                    </p>
                </div>
            </div>
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        What you get with this Course ? <br />
                        <span class="fw-bold">{{ $course->description }}</span>
                    </p>
                </div>
            </div>
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        Experience required? <br />
                        <span class="fw-bold">No needed !</span>
                    </p>
                </div>
            </div>
            <div class="d-flex mt-3 ms-5 mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-piggy-bank" viewBox="0 0 16 16">
                    <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                    <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                </svg>
                <div class="d-block">
                    <p class="ps-1 pt-1">
                        What I get after this course <br />
                        <span class="fw-bold">Lifetime skillsets International Certificate Opportunity for
                            employment</span>
                    </p>
                    <button data-course="{{ $course->id }}" class="btn btn-danger fw-bold shadow-white text-white mt-1 applyModal">Apply Now!</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('images/graphickdesign.png') }}" alt="..." class="w-100" />
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-black">
        <div class="col-12">
            <h1 class="text-white fw-bold text-center pt-1 pb-1">
                Meet the instructors of the Academy of {{ $course->name }}
            </h1>
        </div>
    </div>
</div>
<div class="bg-warning">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card mt-5 mb-1">
                    <div class="card-body">
                        <h5 class="card-title">Ella Jones</h5>
                        <p class="card-text">instructor of the Academy of Graphic Design</p>
                        <p class="card-text">
                            <small class="text-muted">????Ella</small>
                        </p>
                    </div>
                    <img src="{{ asset('images/Design3.jpg') }}" class="w-100 card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mt-5 mb-1">
                    <div class="card-body">
                        <h5 class="card-title">Jon Wilson</h5>
                        <p class="card-text">instructor of the Academy of Graphic Design</p>
                        <p class="card-text">
                            <small class="text-muted">????JW</small>
                        </p>
                    </div>
                    <img src="{{ asset('images/Design2.jpg') }}" class="w-100 card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mt-5 mb-1">
                    <div class="card-body">
                        <h5 class="card-title">Emily Wilson</h5>
                        <p class="card-text">instructor of the Academy of Graphic Design</p>
                        <p class="card-text">
                            <small class="text-muted">????E.Wilson</small>
                        </p>
                    </div>
                    <img src="{{ asset('images/Design1.jpg') }}" class="w-100 card-img-bottom" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-warning">
    <h1 class="pb-5 pt-5 ps-5 text-black text-left fw-bold">
        Tools that you will learn in the course
        <hr width="40%" class="bg-black text-left" />
    </h1>
    <div class="row padding-projects">
        <div class="col-12 col-md-6">
            <div class="d-flex">
                <img src="{{ asset('images/Illustrator.png') }}" class="" alt="..." width="120" height="120" />
                <div class="d-block pt-3 ps-3">
                    <h1 class="fw-bold fs-5">Adobe Illustrator</h1>
                    <p>
                        Vector graphics editing program used to design logos, creative drawings, typography, digital art, blueprints and other precise illustrations
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="d-flex">
                <img src="{{ asset('images/Photoshop.png') }}" class="w-100" alt="..." width="120" height="120" />
                <div class="d-block pt-3 ps-3">
                    <h1 class="fw-bold fs-5">Adobe Photoshop</h1>
                    <p>
                        An industry standard not only in the world of raster graphics, but globally in the world of digital art. It enables photo processing, creation of photo montages, correct use of filters, masks, layers, animations and creation of mock-up images.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mt-5 mb-3">
            <div class="d-flex">
                <img src="{{ asset('images/InDesign.png') }}" class="w-100" alt="..." width="120" height="120" />
                <div class="d-block pt-3 ps-3">
                    <h1 class="fw-bold fs-5">Adobe InDesign</h1>
                    <p>
                        Leading software for layout and designing pages for print and digital media. InDesign lets you create and publish books, digital magazines, e-books, posters, interactive PDF files, and much more.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mt-5 mb-3">
            <div class="d-flex">
                <img src="{{ asset('images/After-Effects.png') }}" class="w-100" alt="..." width="120" height="120" />
                <div class="d-block pt-3 ps-3">
                    <h1 class="fw-bold fs-5">Adobe After Effects</h1>
                    <p>
                        Adobe After Effects is software used to create animations, visual effects, and as a post-production tool for pre-recorded videos. Due to its efficiency, it offers the possibility of creating intros, transitions, animating logos and characters, as well as working and navigating with objects in 3D space.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-black">
    <div class="container-fluid">
        <h1 class="text-center pt-3 pb-3 text-white fs-4 fw-bold">
            Your profile is perfect for the course if you are:
        </h1>
        <div class="row">
            <div class="col-6 text-center pt-5 pb-3">
                <img src="{{ asset('images/Kreativec-1.png') }}" alt="" width="100" height="100" />
                <p class="text-white pt-1 fw-bold fs-5">
                    A creative person</p>
                <p class="text-white">
                    You will have the opportunity to develop and highlight your creativity.
                </p>
            </div>
            <div class="col-6 text-center pt-5 pb-3">
                <img src="{{ asset('images/Digital-Career-icon.png') }}" alt="" width="100" height="100" />
                <p class="text-white pt-1 fw-bold fs-5">
                    Someone who wants a career in the digital industry
                </p>
                <p class="text-white">
                    The moment for the first step towards a new and successful career is now.
                </p>
            </div>
            <div class="col-6 text-center pt-5 pb-3">
                <img src="{{ asset('images/num3.png') }}" alt="" width="100" height="100" />
                <p class="text-white pt-1 fw-bold fs-5">A perfectionist</p>
                <p class="text-white">
                    Your "eye for detail" is what will give you an edge over the rest.
                </p>
            </div>
            <div class="col-6 text-center pt-5 pb-3">
                <img src="{{ asset('images/Pretpriemach-1-1.png') }}" alt="" width="100" height="100" />
                <p class="text-white pt-1 fw-bold fs-5">Ambitious entrepreneur</p>
                <p class="text-white">
                    The acquired knowledge will be of considerable help in the growth
                    and development of your business.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-warning">
    <p class="text-black text-left fw-bold fs-5 pt-5 ps-3 text-uppercase">
        Why Graphic Design ?
    </p>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('images/Code.png') }}" alt="" class="pt-5 ps-3" />
        </div>
        <div class="col-4">
            <p class="text-black fw-bold fs-6 pt-5 ps-3">
                DIGITAL LEARNING PLATFORM
            </p>
            <p class="text-black pt-3 ps-3">
                A centralized place to share all materials, tasks, projects,
                notifications within and after the completion of the program. A tool
                that facilitates the process of distance learning for students, as
                well as the process of transferring knowledge by instructors.
            </p>
            <p class="text-black fw-bold fs-6 pt-5 ps-3">CAREER READY</p>
            <p class="text-black pt-3 ps-3">
                A module within each program consisting of a workshop, sessions and
                simulations through which students learn from guest lecturers ??? HR
                professionals how to best demonstrate their knowledge and skills in
                the job or internship application process, how to develop their soft
                skills and how to work and communicate with clients and different
                profiles of professionals.
            </p>
        </div>
        <div class="col-4">
            <p class="text-black fw-bold fs-6 pt-5 ps-3">MINDSET BUILDING</p>
            <p class="text-black pt-3 ps-3">
                Developing a way of thinking and approaching problems through many
                challenges, hands-on learning and working on real projects.
                Encouraging a research spirit among students and a mindset of
                continuous improvement and lifelong learning.
            </p>
            <a href="#" class="pt-3 ps-3 rounded-circle text-center"><img src="{{ asset('images/Logo-black.png') }}" alt="" width="120" height="120" class="mt-5" /></a>
        </div>
    </div>
</div>
<div class="container-fluid bg-warning">
    <p class="text-black text-center fw-bold fs-5 pt-5 ps-3">
        Why a career in Graphic Design?
    </p>
    <div class="row">
        <div class="col-6">
            <h1 class="text-center text-black">????12,500 + / YR</h1>
            <p class="text-black text-center mt-1">
                average wage
                of a graphic designer
            </p>
        </div>
        <div class="col-6">
            <h1 class="text-center text-black">TOP 6</h1>
            <p class="text-black text-center mt-1">
                activities on the rise
            </p>
        </div>
    </div>
</div>
<div class="bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex rounded bg-white">
                    <img src="{{ asset('images/ArtBoard.png') }}" alt="" />
                    <div class="d-block">
                        <h1 class="text-black text-left fs-4 fw-bold ps-5 mt-5">
                            Still wondering if the Academy of Graphic Design is for you?
                        </h1>
                        <button data-course="{{ $course->id }}" class="btn btn-danger fw-bold shadow-white text-white mt-1 applyModal">Apply Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(() => {
        $('body').on('click', '.applyModal', function(e) {
            e.preventDefault()

            let course_id = $(this).attr('data-course')

            Swal.fire({
                title: 'Do you really want to enroll in this academy?',
                html: `<div class="text-start py-4">
                <p class="">Academy: <span class="fw-bold">{{ $course->name }}</span></p>
                <p class="">What skills you'll learn: <span class="fw-bold small">{{ $course->description }}</span></p>
                <p class="">Lectures: <span class="fw-bold">{{ $course->lectures }}</span> packages of videos</p>
                <p class="mb-0">Price: <span class="fw-bold">{{ $course->price }}&euro;</span></p>
                </div>`,
                showCancelButton: true,
                confirmButtonText: 'Get me in',
                icon: 'info',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        url: 'enroll',
                        data: {
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            course_id
                        },
                        success: (response) => {
                            if (response === 'success') {
                                Swal.fire('You have been successfully enrolled in this academy. Have a nice journey!', '', 'info').then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '/dashboard/courses'
                                    }
                                })
                            } else if (response === 'error') {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: `You have to be logged in to be able to buy this academy`,
                                    footer: `<a href="{{ route('register') }}">Don\'t have an account yet?</a>`
                                })
                            } else if (response === 'error-exists') {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: `You have already bought this adacemy!`,
                                    footer: `<a href="{{ route('dashboard.courses') }}">View my academies</a>`
                                })
                            }
                        },
                        error: (error) => {
                            let errors = error.responseJSON
                            Swal.fire('Error', errors.message, 'error')
                        }
                    })
                }
            })
        })


    })
</script>
@endsection