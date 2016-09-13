Model View Controller
-fancy terms for separation of concerns
-Model: Data
-View: Presentation
-Controller: Logic

Our code is more robust if we separate our concerns
We will have multiple view files and control files, separate controllers and logic for loggin in and out. Our model is the database, our database doesn't know anything about our logic because those are separate concerns 

Think about separating those 3 concerns

PHP with HTML:
We will see our php files run in the broswer now and not in the command line anymore
php was designed as a langaguage for Rasmus Ledorf's personal site
templating language -makes it easy to generate html
anything between php tags is evaluated as php code
anything else displayed as is (including html)
we can have plain text between php control structures

HTML is like our view right now 
and setting a string, getting today's date is like our controller,
we want to separate these concerns as much as possible 