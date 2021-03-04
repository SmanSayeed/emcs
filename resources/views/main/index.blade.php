@extends('main.main')
@section('content')



    <!-- ======= About Section ======= -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">


    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to EMCS</h1>
      <h2>Comilla University</h2>
      <a href="#" class="btn-get-started">About us</a>
    </div>
  </section><!-- End Hero -->



  <section class="notice">
    <div class="container">
        <div class="row notice">
            <div class="col-md-3">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>Campus Life</span>
                    </a>
                    <p>The campus life at Comilla University is full of opportunities and activities to complement the regular academic undertakings along with various services and facilities.
                       <a href="">   <span>| Read More</span> </a>

                    </p>
            </div>
            <div class="col-md-3">
                <a href="">
                    <i class="fa fa-user"></i>
                    <span>Admission</span>
                </a>
                <p>The campus life at Comilla University is full of opportunities and activities to complement the regular academic undertakings along with various services and facilities.

                    <a href="">   <span>| Read More</span> </a>
                </p>
            </div>
            <div class="col-md-3">
                <a href="">
                    <i class="fa fa-user"></i>
                    <span>Notice</span>
                </a>
                <p>
                    <ul>
                        <li>Admission announcement</li>
                        <li>Result published</li>
                    </ul>
                    <a href="">   <span>| Read More</span> </a>
                </p>
            </div>
            <div class="col-md-3">
                <a href="">
                    <i class="fa fa-user"></i>
                    <span>News & Events</span>
                </a>
                <p>
                    <ul>
                        <li>Admission announcement</li>
                        <li>Result published</li>
                    </ul>

                    <a href="">   <span>| Read More</span> </a>
                </p>
            </div>
        </div>
    </div>
  </section>



    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('main')}}/assets//img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Robots, biometric security, autonomous cars, virtual reality and artificial intelligence are no longer just science fiction - they are part of our daily lives. Computers run all of these and more, ensuring a continuing high demand for Computer Systems Engineers and Computer Science professionals far into the future. Computer Science and Engineering department of Comilla University offers unmatched opportunities for hands-on training through classes, research and project-specific student clubs and competitions - all designed to provide tools for technical innovations.





            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>  The Department of Computer Science & Engineering covers key areas of computing, offering undergraduate majors the expertise essential to a burgeoning array of professional and technical careers in business, industry and government which require knowledge of computer hardware and software.
              </li>
              <li><i class="bi bi-check-circle"></i>  Department of Computer Science and Engineering was started in the year 2009 with an intake of 20 students. It is one of the oldest departments in the institution. From its humble beginnings, the department has grown tremendou y and has evolved into one of the foremost units of the University. The department presently offers one regular B. Sc. (Engineering) program, one regular M. Sc. (Engineering) program and one Executive Masters program (EMCA). </li>
              <li><i class="bi bi-check-circle"></i>     The faculty strength of the department is 17, comprising of nine Assistant Professors and eight Lecturers. The department has the fortune of getting some of the best students of the country. Their academic excellence is reflected in the high placement record of the department, as well as the significant number of students gaining admissions for higher studies in prestigious institutions of international repute. The department has a long tradition of producing technically competent graduates and the alumni of the department are often high achievers, occupying prominent positions in the industry as well as the academia in Bangladesh and abroad.</li>
            </ul>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Faculties</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
  @endsection
