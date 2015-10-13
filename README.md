<h2>Live Demo: <a href="http://openvbx.credit1source.com/Exercise1">Exercise 1</a></h2>

<h2> Features for Functionality Requirements </h2>
Here I will list each functional requirement, and how I fulfilled that requirement in my code. Below I have listed a label for each requirement and the requirement verbatim in quotes.

<h3> Accept Input Via Textbox </h3>
"accepts user input in the form of a text box"
- I met this requirement by creating a button 'Enter New Employee' that prompts a modal with two input fields.
- I created a function linked the submit button that validates, accepts, and then inserts the user entered data.

<h3> Process Input </h3>
"upon user selection of a submit button or other control, input
data is processed in some way (e.g. capitalized, MD5 hash, reversed,
etc)"
- I decided to use one of the examples and capitalize the first letter of each word entered into the Employee Name text field. I did this in the function I linked to the submit button. I also checked to make sure a name exists and set the fields to /require to make sure we didnt get any empty submits

<h3> Display </h3>
"processed data is displayed at the top of the webpage while
preserving the original functionality for user input (clear text box)"
- Since I use a beautiful modal form, it made this part easy. 

<h3> Append </h3>
"each successive submission appends to the end of the data at the
top of the page"
- The data taken by the form is inserted into the database and displayed in the table. You can sort by each column including the 'Delete' column which actually is incremental id (so it will sort by first entered to last entered)

<h3> Delete </h3>
"each row of displayed data is accompanied by a delete button which
can be used to delete that row"
- I did this by creating a form for each button that posts delete with value of id correlated to the specific entry in the table.

<h3> Responsive </h3>
"page should be usable on large screens and mobile devices with
dynamic scaling if a browser window is resized"
- I used: table-responsive class, div class sizing, and img-responsive class all included in the bootstrap css. Tested by resizing browser, tablet, and mobile device. Everything resizes and moves like it's supposed to.

<h3> Sort </h3>
"an additional user control should be available to sort the user
input displayed at the top of the page and replace the old content
with the new, sorted content"
- I did this by creating links that pass the key orderby and value (data name) into a mysql query that then orders by that data field.

