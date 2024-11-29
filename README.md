# Drupal Onboarding Exercises

### Available translations

[English](README.md) - [Ελληνικά / Greek](README.el.md)

## What is this repository?

It contains a series of tasks essential for someone who wants to get started with Drupal.  
If you are working on these tasks as part of an interview/hiring process, your work will be reviewed, and you will receive feedback on best practices, correct, and incorrect points, regardless of the hiring outcome!

## Usage Instructions

- Completing all tasks (without the asterisk-marked ones) is feasible within 2 working days (16 hours) for an entry-level developer working with Drupal for the first time
- Git knowledge is a prerequisite
- The use of [DDEV](https://github.com/ddev/ddev) is mandatory
- Tasks marked with an asterisk (`*`) are considered advanced level, or very advanced

## Drupal Site Building Tasks

- [ ] Fork this repository and commit/push to your fork (use your judgment on when to commit)
- [ ] Set up Drupal locally (using DDEV)
- [ ] Perform a standard installation
- [ ] Track your codebase with Git (be mindful of what to track!)
- [ ] Create a merge/pull request with your changes to the original GitLab repo
- [ ] Set the configuration export folder to `../config/sync`
- [ ] Install Drush
- [ ] Export the configuration and commit it to Git (do this regularly!)
- [ ] Create a content type called `vehicle`
- [ ] Add fields: `release date` (date) and `price` (float)
- [ ] Install the open-source theme named `bartik`
- [ ] Create a View displaying vehicles in a table sorted by release date
- [ ] Add an exposed filter to the View to show vehicles newer than a user-specified date
- [ ] Add images to the content type (bonus point if done with media)
- [ ] Add taxonomy terms to the content type for the brand (e.g., Ferrari, Mercedes, McLaren) in a `brand` vocabulary

## Frontend Drupal Tasks

- [ ] Create a subtheme of `bartik`
- [ ] Override the content type's template
- [ ] * Create a Single Directory Component and map it to the `vehicle` content type

## Backend Drupal Tasks

- [ ] Create a custom module that returns a 404 error for any vehicle with a release date in 2020

## Drupal Migrations

_The following tasks may require over 30 hours for an entry-level developer._

- [ ] * Migrate a dataset (at least 5 items, titles only) from the JSON API of [stapi.co](https://stapi.co/) or [swapi.dev](https://swapi.dev/)
- [ ] * Enrich your migration with at least 3 fields
- [ ] * One of the fields should be a multi-value reference field

---

#### Credits

<<<<<<< HEAD
- Implementation, development, and updates: Bill Seremetis ([Drupal profile](https://www.drupal.org/u/bserem))


=======
- Implementation, development, and updates: Bill Seremetis ([Drupal profile](https://www.drupal.org/u/bserem))
>>>>>>> 93ea790 (first commit)
