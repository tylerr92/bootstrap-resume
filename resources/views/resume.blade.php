@extends('layout')

@section('title', config('app.app_name') . 'Tyler Radlick | Resume')

@section('content')
<!-- Main Row Container -->
<div class="row mt-5">
  <!-- Sidebar Column -->
  <div class="col-md-4 col-lg-4 col-xl-4">

    <div class="card">
      <img class="card-img-top" src="/images/tradlick_casual.jpg" alt="Card image cap"/>
      <div class="card-body">

        <!--Table-->
        <table id="contactInformation" class="table table-borderless mb-0">
          <!--Table body-->
          <tbody>
            <tr>
              <td align="center" class="d-md-none d-lg-block align-middle">
                <br />
                <i class="fas fa-map-marker-alt fa-2x"></i>
              </td>
              <td class="align-middle">
                <p class="card-text">
                  8601 Anderson Mill Rd.
                  <br />
                  Apt. 924
                  <br />
                  Austin TX 78729
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" class="align-middle d-md-none d-lg-block">
                <i class="fas fa-mobile fa-2x"></i>
              </td>
              <td class="align-middle">
                <p class="card-text">
                  <a class="text-dark" href="tel://5868223120">(586) 822-3120</a>
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" class="align-middle d-md-none d-lg-block">
                <i class="fas fa-envelope fa-2x"></i>
              </td>
              <td class="align-middle">
                <p class="card-text">
                  <a class="text-dark" href="mailto:tylerradlick@gmail.com">tylerradlick@gmail.com</a>
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" class="align-middle d-md-none d-lg-block">
                <i class="fab fa-linkedin-in fa-2x"></i>
              </td>
              <td class="align-middle">
                <p class="card-text">
                  <a class="text-dark" href="https://www.linkedin.com/in/tradlick">linkedin.com/in/tradlick</a>
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" class="align-middle d-md-none d-lg-block">
                <i class="fas fa-globe fa-2x"></i>
              </td>
              <td class="align-middle">
                <p class="card-text">
                  <a class="text-dark" href="https://tylerradlick.com">tylerradlick.com</a>
                </p>
              </td>
            </tr>
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->

      </div>
    </div>

    <hr>

    <div class="card">
      <div class="card-body">
        <h2 class="header-texts">SKILLS</h2>
        <p class="card-text">
          Laravel
          <br />
          Bootstrap
          <br />
          PHP
          <br />
          HTML
          <br />
          CSS
          <br />
          Vue.JS
          <br />
          Javascript
          <br />
          LDAP Authentication
          <br />
          Bash
          <br />
          CRUD Design
          <br />
          Composer & NPM Package Managers
          <br />
          UX/UI Deisgn
          <br />
          Agile, Waterfall, and DevOps
          <br />
          Linux
          <br />
          Docker
          <br />
          Git/SVN
          <br />
          Photoshop
          <br />
          Illustrator
          <br />
          Atom
          <br />
          Linux, macOS, Windows
          <br />
          Technical Documentation
          <br />
          MDM Administration
          <br />
          Linux Server Administration
        </p>
      </div>
    </div>

  </div>

  <!-- Profile, Education, Experiance, Refrences Column -->
  <div class="col-md-8 col-lg-8 col-xl-8">

    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12">

        <!-- PROFESSIONAL PROFILE -->
        <div class="d-block d-md-none mt-3"></div>
        <div class="card">
          <div class="card-body">
            <hr />
            <h2 class="header-texts">PROFESSIONAL PROFILE</h2>
            <p class="card-text">As an experienced Software Engineer with a drive to learn, I have created rich web applications for companies such as Apple Inc. While writing software, I am always conscious of user experience and application scalability. I am familiar with common security vulnerabilities and take pride in crafting safe and secure applications. Looking to less known solutions as a self-taught developer, I am extremely comfortable with working outside of the box. I look forward to collaborating on your next project.</p>
            <hr />
          </div>
        </div>

        <br />

        <!-- EXPERIENCE -->
        <div class="card">
          <div class="card-body">
            <h2 class="header-texts">EXPERIENCE</h2>

            <h5>Software & Support Engineer</h5>
            <h5 class="text-muted">Apple Inc. | 2012 - 2018</h5>
            <p>While at Apple I was presented with a range of opportunities. As our Lead Developer, I was responsible for oversight of our mission critical web applications. This allowed me to refine my development knowledge and gain all new skills with Laravel that can be applied to other MVC frameworks.</p>
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
            <h5 class="text-muted">Infinity Host LLC | 2010 - 2018</h5>
            <p>My daily responsibilities at a hosting company range from working with customers designs to managing a LAMP stack. Managing billing, support, and server security are the required skillset needed. Running this small business has provided me insight into some larger technologies.</p>
            <ul>
              <li>Managing a CentOS LAMP Stack with cPanel and WHM</li>
              <li>Configuration of PHP-FPM, DNS, Exim, Postfix, and FTP servers</li>
              <li>Designing Wordpress Themes and Plugins</li>
              <li>Correcting security flaws in customer installations</li>
              <li>ESXi Virtualization and Hardware tuning</li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <!-- REFERENCES -->
    <div class="row mt-3">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">
          <div class="card-body">
            <h2 class="header-texts">REFERENCES</h2>
            <div class="row mt-3">
              <!-- REFERENCE 1 -->
              <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <h6>Patrick Bilkovic</h6>
                    <h6 class="text-muted">Support Engineer | Zulu Desk</h6>
                    <p class="card-text">P: ‭(616) 916-3872‬<br />E: p.bilkovic@zuludesk.com</p>
                  </div>
                </div>
              </div>
              <!-- REFERENCE 2 -->
              <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <h6>Maurice Villegaus</h6>
                    <h6 class="text-muted">Senior Specialist | Apple Inc.</h6>
                    <p class="card-text">P: (862) 571-5011‬<br />E: applemv2@me.com</p>
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

<!-- Buttons Row -->
<div class="row">
  <!-- View Project On Github -->
  <div class="col-4">
    <div class="card mt-3 text-center">
      <div class="card-body mx-0 px-0">
        <div class="row m-0 p-0">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <!-- Large Screen Buttons -->
            <a class="btn btn-secondary btn-block d-none d-lg-block d-xl-block" href="https://github.com/tylerr92/bootstrap-resume" target="blank" role="button"><i class="fab fa-github fa-lg"></i> &nbsp; View Project On Github</a>
            <!-- Small Screen Buttons -->
            <a class="btn btn-secondary btn-block btn-sm d-block d-md-block d-lg-none" href="https://github.com/tylerr92/bootstrap-resume" target="blank" role="button"><i class="fab fa-github"></i> &nbsp; View Project On Github</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Download Resume Button -->
  <div class="col-4">
    <div class="card mt-3 text-center">
      <div class="card-body mx-0 px-0">
        <div class="row m-0 p-0">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <!-- Large Screen Buttons -->
            <a class="btn btn-secondary btn-block d-none d-lg-block d-xl-block" href="/files/TylerRadlickResume.pdf" download="TylerRadlickResume.pdf" role="button"><i class="fas fa-file-download fa-lg"></i> &nbsp; Download PDF Version</a>
            <!-- Small Screen Buttons -->
            <a class="btn btn-secondary btn-block btn-sm d-block d-md-block d-lg-none" href="/files/TylerRadlickResume.pdf" download="TylerRadlickResume.pdf" role="button"><i class="fas fa-file-download"></i> &nbsp; Download PDF Version</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Get In Touch Form -->
  <div class="col-4">
    <div class="card mt-3 text-center">
      <div class="card-body mx-0 px-0">
        <div class="row m-0 p-0">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <!-- Large Screen Buttons -->
            <button type="button" class="btn btn-secondary btn-block d-none d-lg-block d-xl-block" data-toggle="modal" data-target="#contactModal"><i class="fas fa-mobile fa-lg"></i> &nbsp; Interested? Get In Touch</button>
            <!-- Small Screen Buttons -->
            <button type="button" class="btn btn-secondary btn-block btn-sm d-block d-md-block d-lg-none" data-toggle="modal" data-target="#contactModal"><i class="fas fa-mobile"></i> &nbsp; Interested? Get In Touch</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg mt-4" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Let's Meet! Get in touch today.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form class="needs-validation" novalidate id="contactForm" method="post" action="{{ route('home.sendMail') }}">
          <!-- Include CSRF Protection -->
          @csrf

          <!-- Name Input Field -->
          <div class="form-group">
            <label for="contactNameLabel">Your Name</label>
            <input type="text" class="form-control {{ $errors->has('contactName') ? 'is-invalid' : '' }}" id="contactName" name="contactName" aria-describedby="contactNameLabel" placeholder="First & Last Name" value="{{ old('contactName') }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('contactName'))
              {{ $errors->first('contactName') }}
              @else
              Name is a required field.
              @endif
            </div>
          </div>

          <!-- Company Name Input Field -->
          <div class="form-group">
            <label for="companyNameLabel">Your Companys Name</label>
            <input type="text" class="form-control {{ $errors->has('companyName') ? 'is-invalid' : '' }}" id="companyName" name="companyName" aria-describedby="companyNameLabel" placeholder="Company Name" value="{{ old('companyName') }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('companyName'))
              {{ $errors->first('companyName') }}
              @else
              echo 'Comapny Name is a required field.'
              @endif
            </div>
          </div>

          <!-- Phone Number Input Field -->
          <div class="form-group">
            <label for="phoneNumberLabel">Phone Number</label>
            <input type="text" class="form-control {{ $errors->has('phoneNumber') ? 'is-invalid' : '' }}" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumberLabel" placeholder="(800) 555-5555" value="{{ old('phoneNumber') }}" required pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('phoneNumber'))
              {{ $errors->first('phoneNumber') }}
              @else
              Phone Number is a required field and should matach pattern (800) 555-5555
              @endif
            </div>
          </div>

          <!-- Email Address Input Field -->
          <div class="form-group">
            <label for="emailAddressLabel">Your Email Address</label>
            <input type="email" class="form-control {{ $errors->has('emailAddress') ? 'is-invalid' : '' }}" id="emailAddress" name="emailAddress" aria-describedby="emailAddressLabel" placeholder="you@thenextbigthing.com" value="{{ old('emailAddress') }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('emailAddress'))
              {{ $errors->first('emailAddress') }}
              @else
              Email is a required field and must be a valid email address.
              @endif
            </div>
          </div>

          <!-- Message Textarea -->
          <div class="form-group">
            <label for="messageLabel">What should we discuss?</label>
            <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('message'))
              {{ $errors->first('message') }}
              @else
              A message is required.
              @endif
            </div>
          </div>

          <!-- DateTime Picker Field -->
          <div class="form-group">
            <label for="Date and Time">When should we chat?</label>
            <input type="text" class="form-control {{ $errors->has('dateTimePicker') ? 'is-invalid' : '' }} datetimepicker-input" id="dateTimePicker" name="dateTimePicker" data-toggle="datetimepicker" data-target="#dateTimePicker" value="{{ old('dateTimePicker') }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              @if ($errors->has('dateTimePicker'))
              {{ $errors->first('dateTimePicker') }}
              @else
              Please click to choose a date and time.
              @endif
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

@endsection

@push('after-scripts')
<!-- Bootstrap Modal -->
<script>
$('#contactModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<!-- Bootstrap Form Validation -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// Contact Name Remove Class Error
$( "#contactName" ).keydown(function() {
  $('#contactName').removeClass("is-invalid");
});

// Company Name Remove Class Error
$( "#companyName" ).keydown(function() {
  $('#companyName').removeClass("is-invalid");
});

// Phone Number Remove Class Error
$( "#phoneNumber" ).keydown(function() {
  $('#phoneNumber').removeClass("is-invalid");
});

// Email Address Remove Class Error
$( "#emailAddress" ).keydown(function() {
  $('#emailAddress').removeClass("is-invalid");
});

// Message Remove Class Error
$( "#message" ).keydown(function() {
  $('#message').removeClass("is-invalid");
});

// DateTime Picker Remove Class Error
$( "#dateTimePicker" ).keydown(function() {
  $('#dateTimePicker').removeClass("is-invalid");
});
</script>

<!-- Datetime Picker -->
<script type="text/javascript">
$(function () {
  $('#dateTimePicker').datetimepicker(
    {
      sideBySide: true,
      defaultDate: '{{ Carbon\Carbon::now(new DateTimeZone('America/Chicago'))->addday(1) }}',
      stepping: [15]
    }
  );
});
</script>
@endpush
