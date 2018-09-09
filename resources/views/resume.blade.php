@extends('layout')

@section('title', config('app.app_name') . ' | Resume')

@section('content')
<div class="row">

  <div class="col-12 mt-5">
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="/images/15384.jpg" alt="Card image cap">
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <br />
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <br />
                <br />
                <i class="fas fa-phone fa-2x"></i>
                <br />
                <br />
                <i class="fas fa-envelope fa-2x"></i>
                <br />
                <br />
                <i class="fab fa-linkedin-in fa-2x"></i>
                <br />
                <br />
                <i class="fas fa-globe fa-2x"></i>
              </div>

              <div class="col-10">
                <p class="card-text">
                  8601 Anderson Mill Rd.
                  <br />
                  Apt. 924
                  <br />
                  Austin TX 78729
                  <br />
                  <br />
                  <a href="tel://5868223120">(586) 822-3120</a>
                  <br />
                  <br />
                  tylerradlick@gmail.com
                  <br />
                  <br />
                  <br />
                  www.linkedin.com/in/tradlick
                  <br />
                  <br />
                  tylerradlick.com
                </p>
              </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="card">
          <div class="card-body">
            <h2 class="header-texts">SKILLS</h2>
            <p class="card-text">Laravel<br />
              Bootstrap<br />
              PHP<br />
              HTML<br />
              CSS<br />
              Vue.JS<br />
              Javascript<br />
              LDAP Authentication<br />
              Bash<br />
              CRUD Design<br />
              Composer & NPM Package Managers<br />
              UX/UI Deisgn<br />
              Agile, Waterfall, and DevOps<br />
              Linux<br />
              Docker<br />
              Git/SVN<br />
              Photoshop<br />
              Illustrator<br />
              Atom<br />
              Windows and macOS</p>
            </div>
          </div>

          <div class="card mt-3 text-center">
            <div class="card-body">
              <button type="button" class="btn btn-secondary"><i class="fas fa-file-download fa-lg"></i> &nbsp; Download Resume</button>
            </div>
          </div>
        </div>

        <div class="col-8">
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <hr />
                  <h2 class="header-texts">PROFESSIONAL PROFILE</h2>
                  <p class="card-text">
                    As an experienced Software Engineer with a drive to learn, I have created rich web applications for companies such as Apple Inc. While writing software, I am always conscious of user experience and application scalability. I am familiar with common security vulnerabilities and take pride in crafting safe and secure applications. Looking to less known solutions as a self-taught developer, I am extremely comfortable with working outside of the box. I look forward to collaborating on your next project.
                  </p>
                  <hr />
                </div>
              </div>

              <br />
              <div class="card">
                <div class="card-body">
                  <h2 class="header-texts">EXPERIENCE</h2>

                  <h5>Software Engineer</h5>
                  <h5 class="text-muted">Apple Inc. I 2012 - Present</h5>
                  <p>
                    While at Apple I was presented with a range of opportunities. As our Lead Developer, I was responsible for oversight of our mission critical web applications. This allowed me to refine my development knowledge and gain all new skills with Laravel that can be applied to other MVC frameworks.
                  </p>
                  <ul>
                    <li>Architected three mission critical web applications</li>
                    <li>Assisted with seven web applications as a co-developer</li>
                    <li>Refined knowledge of PHP and Javascript</li>
                    <li>Lead Developer on a team of six</li>
                    <li>Worked with Information Security to ensure global compliances</li>
                    <li>Managed a Docker Swarm DevOps stack</li>
                    <li>Created an automated backup system to on-premise S3 Compatible Storage</li>
                    <li>Followed Agile, DevOps, and Waterfall development methodology</li>
                    <li>Responsible for training and code review of peers</li>
                  </ul>

                  <h5>Owner</h5>
                  <h5 class="text-muted">Infinity Host LLC I 2010 - Present</h5>
                  <p>
                    My daily responsibilities at a hosting company range from working with customers designs to managing a LAMP stack. Managing billing, support, and server security are the required skillset needed. Running this small business has provided me insight into some larger technologies.
                  </p>
                  <ul>
                    <li>Managing a CentOS LAMP Stack with cPanel and WHM</li>
                    <li>Configuration of PHP-FPM, DNS, Exim, Postfix, and FTP servers</li>
                    <li>Designing Wordpress Themes and Plugins</li>
                    <li>Correcting Security flaws in customer installations</li>
                    <li>ESXi Virtualization and Hardware tuning</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

          <div class="row mt-3">

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="header-texts">REFERENCES</h2>

                  <div class="row mt-3">

                    <div class="col-6">

                      <div class="card">
                        <div class="card-body">
                          <h6>Place Holder</h6>
                          <h6 class="text-muted">Team Manager | Apple Inc.</h6>
                          <p class="card-text">P: +00 555 789 112
                            <br>
                            E: infoname@gmail.com</p>
                          </div>
                        </div>

                      </div>

                      <div class="col-6">

                        <div class="card">
                          <div class="card-body">
                            <h6>Maurice Villegaus</h6>
                            <h6 class="text-muted">Senior Specialist | Apple Inc.</h6>
                            <p class="card-text">P: (862) 571-5011‬
                              <br>
                              E: applemv2@me.com</p>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

      @endsection

      @push('after-scripts')

      @endpush
