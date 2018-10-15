@extends('emails.layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        Contact Name: {{ $contact['contactName'] }}
                        <br>
                        Company Name: {{ $contact['companyName'] }}
                        <br>
                        Phone Number: {{ $contact['phoneNumber'] }}
                        <br>
                        Email Address: {{ $contact['emailAddress'] }}
                        <br>
                        Message: {{ $contact['message'] }}
                        <br>
                        Time to call: {{ $contact['dateTimePicker'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
