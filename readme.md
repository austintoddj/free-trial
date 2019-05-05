## Free Trial Email Verification Tool

[![Build Status](https://travis-ci.org/austintoddj/free-trial.svg?branch=master)](https://travis-ci.org/austintoddj/free-trial)
[![StyleCI](https://github.styleci.io/repos/184818874/shield?branch=master&style=flat)](https://github.styleci.io/repos/184818874)

### Summary

Build a Free Trial signup process, but only allow users who have not previously registered on the site. This is a campaign for reaching new, previously unreached customers, and so, only users with email addresses that do not exist in our database of users may proceed beyond this step.

## Project Specifications

### Backend

A fresh Laravel 5.8 installation houses the single API endpoint:

```
POST /api/verify
```

The endpoint performs a simple validation to ensure we're dealing with a proper email. The endpoint will return one of 3 responses:

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

There is an `VerifyEmail` VueJS component with an accompanying mixin that handles the form submission and page redirect on success.

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
