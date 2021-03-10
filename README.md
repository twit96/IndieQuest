<!-- Page Title -->
<h1 align="center">IndieQuest</h1><br>

<!-- Title Image -->
<p align="center">
  <img alt="IndieQuest - Title Card" src="/readme-files/title-card.png">
  <br />
  <b>A Dynamic Website Project</b>
</p>

<!-- Project Description -->
<p align="center">
  IndieQuest is a mobile-responsive, dynamic blog website that sends users on a quest to read all of its articles - powered by PHP, SQL, JavaScript, and CSS.
</p>

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents
- [Homepage](#homepage)
- [The Journey Page](#the-journey-page)
- [Contact Page](#contact-page)
- [Responsive Design](#responsive-design)
- [Contributors](#project-contributors)
<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## Homepage
The homepage features an introduction blurb, current events, an about us blurb, 
and a section asking you to sign in. Clicking "The Journey" link in the navigation bar
will always redirect you to the homepage if you are logged out, and clicking the profile icon
in the top right corner will open a prompt asking you to log in.

![Full Home Logged Out](/readme-files/full-home-loggedout.png)

After logging in, the homepage will update the login blurb to display your name.

![Full Home Logged In](/readme-files/full-home-loggedin.png)

In addition, clicking the profile icon will now display a customized popup showing you which 
articles you have read and which you have not yet read.

![Full Popup Home](/readme-files/full-popup-home.png)


## The Journey Page
The main application of the IndieQuest website is to takes its users on a journey through the history
of indie games. This is achieved by a chronologically ordered set of articles pertaining to some of 
the best-known indie games. On each indie game article page, the middle column provides a game trailer, 
and discusses the game in detail. At the bottom of each article, a button with the words "Collect 
Gaming History Piece" can be found. When the user clicks this button, their profile popup stats are 
updated to show that they have read the article. 

On the right sidebar, relevant links for the game can be found. On the left sidebar, users can access 
any of the articles on IndieQuest, displayed in the order that the games were released in. 

![Full Journey Page](/readme-files/full-journey.png)


## Contact Page 
The contact page features images, blurbs, and relevant links pertaining to the project contributors.
In addition, an AJAX *Contact Us* form provides immediate user feedback on submissions, with backend 
PHP validation to ensure feedback comes from users with an account. This page, unlike the "The Journey"
page, **can** be accessed before a user logs in.

![Full Contact Page](/readme-files/full-contact.png)


## Responsive Design
Throughout the design process, IndieQuest was geared towards mobile-responsiveness. As such, the website
is able to scale down to mobile screens, all with the same CSS code that caters to desktop users.

### Homepage
![Full Home Logged In](/readme-files/full-home-loggedin.png)
![Medium Home](/readme-files/medium-home.png)

### The Journey Page
![Full Journey Page](/readme-files/full-journey.png)
![Medium Home](/readme-files/small-journey.png)

### Contact Page
![Full Contact Page](/readme-files/full-contact.png)
![Medium Home](/readme-files/small-contact.png)

### Profile Popup
Even the profile popup was designed to accomodate mobile screens, as it is even responsive to mobile screens 
in landscape mode.
![Full Popup](/readme-files/full-popup-home.png)
![Small Profile Portrait](/readme-files/small-profile-portrait.png)
![Small Profile Landscape](/readme-files/small-profile-landscape.png)


## Project Contributors
[Alexia Carmona](https://www.lexc-draws.com/) • [Cooper Fryar](https://github.com/CooperFryar) • [Tyler Wittig](https://twit96.github.io/)
