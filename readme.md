## Free Trial Email Verification Tool

[![Build Status](https://travis-ci.org/austintoddj/free-trial.svg?branch=master)](https://travis-ci.org/austintoddj/free-trial)
[![StyleCI](https://github.styleci.io/repos/184818874/shield?branch=master&style=flat)](https://github.styleci.io/repos/184818874)

### Summary

Build a Free Trial sign-up process, but only allow users who have not previously registered on the site. This is a campaign for reaching new, previously unreached customers, and so, only users with email addresses that do not exist in our database of users may proceed beyond this step.

### Deliverable

- Design
    - A single page app matching the Invision design as closely as possible
    - Provided image assets integrated into the design
    - Navigation and search bar
    - A secondary view that is displayed if the user email already exists in our system
    - A page redirect to the Pro Creative Market sign-up if the email does not exist in the system
    
- Form
    - An email input field (required) and button that submits an AJAX request to an API which checks whether or not the provided email exists in our database

- Database
    - A MySQL database of existing user emails

- Application
    - PSR-2 compliant code [per the docs](https://laravel.com/docs/5.8/contributions#coding-style)

## Project Specifications

### Backend

A fresh Laravel 5.8 installation houses the single API endpoint:

```
POST /api/verify
```

The endpoint performs simple validation to ensure we're dealing with a proper email, and then checks for its existence in the `users` table. The endpoint will return one of 3 responses:

```
{
	"status": 400,
	"message": "Invalid email address"
},
{
	"status": 422,
	"message": "Email address already exists"
},
{
	"status": 200,
	"message": "Success"
}
```

### Frontend

There is a `VerifyEmail` VueJS component with an accompanying mixin that handles the form submission and page redirect on success.

The app uses Bootstrap 4 utility classes to style the component. 

### Database Schema

Data for this application is stored in one of the two base Laravel migration tables:

- `users`
    - id (bigInteger|unsigned|autoIncrement)
    - name (string)
    - email (string|unique)
    - email_verified_at (nullable)
    - password (string)
    - remember_token (string|nullable)
    - created_at (timestamp|nullable)
    - updated_at (timestamp|nullable)
    

- `password_resets`
    - email (string)
    - token (string)
    - created_at (timestamp|nullable)

A seeder was generated to get user data into the app for testing purposes. Since the only action performed against the database is a lookup on user emails, no other data structure was needed.

### Testing

A single unit test ensures that the email validation in the controller is functioning as we expect. 
