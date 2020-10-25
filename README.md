# cs174hw3


Here are the requirements for your project:
Your Hw3.zip folder has a readme.txt file with all the names and ids for your group.
All the web pages you output validate as XHTML 5.
Your project is written using namespaces. You only create variables, arrays, objects, define new classes, etc. in the namespace cool_name_for_your_group\hw3 and subnamespaces thereof.
Your project directory structure and urls that are linked to by your project are as follows:
index.php -- entry point into your project. No other file in your project is directly linked-to.
    All urls used as links by your project are in the format (including links to images):
    BASE_URL/index.php?c=name_of_controller&m=name_of_method&arg1=value_for_arg1& ...&argn=value_for_argn 
src
 |-configs |- Config.php contains a class with constants for things like 
 |         |       database user, password, host, port, etc. Basically, 
 |         |       it should have anything you think the grader might need
 |         |       to get your program running on the grader's machine.
 |         |- CreateDB.php can be run from the command-line to make a good initial
 |                database.
 |-controllers -- contains all the controller classes you write, one per file
 |-models -- contains all the model classes you write, one per file
 |-resources -- contains any resources used by your app such as images
 |-styles -- has any external stylesheets you need
 |-views -- contains all the view classes you write, one per file
      |-elements -- contains all the element classes you write, one per file
      |-helpers -- contains all the helper classes you write, one per file
      |-layouts -- contains all the helper classes you write, one per file    
Typing php CreateDb.php while in a shell in the configs folder creates an initial Mysql Database with tables created in BCNF. The tables' schemas is reasonable for storing and retrieving any data similar to that given in the mock-up views above.
Your project defines base classes: Controller, Model, View, Element, and Helper. The namespaces for these and their subclasses should be respectively: cool_name_for_your_group\hw3\controllers, cool_name_for_your_group\hw3\models, cool_name_for_your_group\hw3\views, cool_name_for_your_group\hw3\views\elements, and cool_name_for_your_group\hw3\views\helpers.
Your project uses the Model View Adapter pattern that we have discussed in class. This item is for overall how well you succeeded at this. What this means for particular classes will be described in the next several points.
Only controller classes directly handle request/form data. Controllers use this information to invoke model methods that make database calls to get/set/update info in the database, then choose a view, instantiate it, and call its render() method to display a web page back to the requesting browser.
Only subclasses of Model interact with the database. The base Model class has methods for performing the initial connection to the database. Model classes have methods to marshal a particular kind of object from one or more tables, and to take already created objects and unmarshal them persistently into the database.
Only subclasses of View, Element, Helper, Layout are allowed to render HTML. Each view is used to render a particular kind of whole web page. Elements are used to render a particular portion of a web page that might occur on several kinds of web pages (for example, a navigation block). Helpers have methods which make it easy to output the HTML for particular kinds of widgets (say a method that takes an array and uses it to output the HTML for a dropdown with the elements coming from the array). Layouts are used to output common header and footer HTML that might be used by several views.
On the Landing page and genre page, genre links take one to the page of the appropriate genre.
Review links take one to the appropriate Display Review page.
Next to a review link is the date on which that review was written.
The main landing page corresponds to viewing all genres. The landing page displays the most recently added reviews in any genre.
[-] links next to a genre only appear on the landing page and indicate the genre currently doesn't have reviews. Clicking the link deletes that genre. [-] links next to a review link only appear on genre pages. Clicking this link deletes theh review. As [-] by itself doesn't say whhat this link does, you should implement some way of making these links WAI compliant.
Links on each pages main heading take one to the appropriate genre or the landing page. I.e., in Movie Reviews/Horror, the Movie Reviews link takes one to the landing page, the Horror link takes one to the Horror genre page.
Reviews are listed from newest to oldest, genres are listed in alphabetical order. Sorting is done at the database query level, not after the data is retrieved.
The link to the Add Genre page is only on the landing page. The Add Genre page allows a new genre to be added to the list of current movie genres. If the name is blank, or sanitizes using filter_var to blank no new genre is added. In both cases, after the action is performed the current landing page is shown.
The Add Review page allows a new review to be added to the current genre. The link to an Add Review page does not appear on the landing page, but does appear on every genre page. If either field is blank, or sanitizes using filter_var to blank no new review is added. In both cases, after the action is performed the current genre page is shown.
The Display Review page shows a previously created review as illustrated in the mock-ups above.
