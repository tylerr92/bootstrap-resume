@extends('emails.layout')

@section('content')

<div class="row">
  <div class="col-12">
    <h1 class="text-center">Tyler J. Radlick</h1>
    <h2 class="text-center mb-4">Software & Support Engineer</h2>
    <div class="card">
      <div class="card-header">
        <h2>Thank you for reaching out.</h2>
      </div>
      <div class="card-body">
        <p class="card-text">
          Hello {{ $contact->contactName }},<br>
          <br>
          Thank you for checking out my resume website. I hope you enjoyed it as much as I enjoyed making it. Based on what you let me know, you want to chat about an oppratunity with {{ $contact->companyName }} on {{ Carbon\Carbon::parse($contact->dateTimePicker)->format('m/d/Y') }} at {{ Carbon\Carbon::parse($contact->dateTimePicker)->format('h:m A') }}. I will follow up via email to {{ $contact->emailAddress }} by {{ Carbon\Carbon::parse($contact->dateTimePicker)->format('m/d/Y') }} to confirm the details. Otherwise I am expecting to give you a call at {{ $contact->phoneNumber }}. You indicated that we would be discussing, <br><br>
          {{ $contact->message }}<br><br>
          If any of that changes, just let me know by replying to this email or sending me a new email to tylerradlick@gmail.com. I look forward to discussing our next big project togeather soon.<br>
          <br>
          Regards,<br>
          <br>
          Tyler J. Radlick<br>
          (586) 822-3120<br>
          tylerradlick@gmail.com
        </p>
      </div>
    </div>
    <small class="text-muted mt-4">&copy; Tyler Radlick | All Rights Reserverd | This email is a response to a submission you made on tylerradlick.com. It will not be used for anything else.</small>
  </div>
</div>

@endsection
