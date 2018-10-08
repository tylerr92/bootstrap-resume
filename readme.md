<h1>Bootstrap Resume</h1>
https://img.shields.io/badge/build-passing-green.svg?longCache=true&style=for-the-badge https://img.shields.io/badge/Laravel-5.7-red.svg?longCache=true&style=for-the-badge https://img.shields.io/badge/License-MIT-blue.svg?longCache=true&style=for-the-badge
<h3>Initially I designed this site for myself to show to prospective recruiters and employers. The app has since evolved into a nice proof of concept of a simple Laravel app that I can show off. I have a few plans for the next version of this site but it is building and ready for widespread use now. This site can be customized to show your own work experience and is free for use to anyone who may want a copy. I only ask you replace my information with yours until version 2 comes out.</h3>
<h3>Are you and employer or recruiter? Are you interested or impressed by this project? You should reach out to me using the site or to my email at info@tylerradlick.com</h3>
<h3>Designed With Love By: Tyler Radlick</h3>

## What The Site Does
The site lists out my current work expierance and skills.
The site has a built in form and is configured to send the form details to myself and the submitter.
Full Client Side and Server Side form validation

## Whats Next
The below features are expected for Version 2.0
1. Move all frontend data to the database so it can easily and dynamically be changed
2. Implement an Admin Dashboard so that the site owner can update the front end data and other various application settings
3. Implement a Google Analytics Dashboard view so site usage can easily be tracked
4. Change out Form Submission from a normal POST request to using AJAX
5. Move to SPA VUE and Bootstrap-Vue

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites

You will need the following configured and ready:

```
Web Server
PHP 7.2 or later
MySQL or PostgreSQL Based Database
Composer
NPM
Git
```

## Installing Locally

Install Locally using MAMP

Clone App

```
git clone git@github.com:tylerr92/bootstrap-resume.git
```

Move into App

```
cd bootstrap-resume
```

Run Composer Install

```
Composer install
```

Run NPM Install

```
npm install
```

Make a .env file

```
cp .env.example .env
```

Edit .env with your settings

```
nano .env
```

Run PHP Artisan key:generate to create an Application Key

```
php artisan key:generate
```

Run PHP Artisan config:cache to clear your cache

```
php artisan config:cache
```

Run Migrations to setup Database

```
php artisan migrate
```

Thats it, you should now be up and running on your local development server

## Contributing

Please read CONTRIBUTING.md for details on my code of conduct, and the process for submitting pull requests to us.

## Bug Reporting

Please use the issue template provided if submitting on Github.

## Versioning

We use the following versioning method.

1.2.3

MAJOR.MINOR.PATCH

Where the Major version is 1, the Minor Version is 2, and the patch number is 3.

Major version implement breaking, non-backwards compatible changes.

Minor Versions implement backwards compatible new features.

Patches only correct issues in existing code.

All patch releases are highly suggested to be updated to, and are (Normally) proven to not break further functionality.

## License
This project is MIT Licensed and free for use as stated in the license.

MIT License

Copyright (c) 2018 Tyler Radlick

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
