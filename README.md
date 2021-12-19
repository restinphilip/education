#   This file include explaination regarding the web application of education system hosted on domain www.restinphilipdbs.com
#   Technologies used in this project includes the following:
#   1. PHP
#   2. MySQL
#   3. HTML
#   4. CSS
#   5. Bootstrap
#   6. JQuery
#   7. Javascript
#   8. AJAX

# PHP is PHP Hypertext Preprocessor. It is a server side scripting language. It is used to develop web applications. PHP is a widely used, open source, and cross-platform general-purpose scripting language. PHP scripts are executed on the server side. PHP is designed for web development, but is also used as a general-purpose programming language. PHP is free and open source. PHP is supported by a large community of developers and users. 

# MySQL is a relational database management system (RDBMS). It is a software program for managing relational databases. MySQL is a popular open-source database management system. MySQL is a software product developed by Oracle Corporation. MySQL is a popular open-source database management system. MySQL is a software product developed by Oracle Corporation. 

# HTML is Hyper Text Markup Language. It is the standard markup language for creating Web pages. It describes the structure of a Web page semantically and originally included cues for the appearance of the document. It is a standard markup language for creating Web pages. It describes the structure of a Web page semantically and originally included cues for the appearance of the document.

# CSS is Cascading Style Sheets. It is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a style sheet language used for describing the presentation of a document written in a markup language like HTML.

# Bootstrap is a free and open-source collection of HTML, CSS, and JS framework. It is a collection of CSS and HTML files. It is a free and open-source collection of HTML, CSS, and JS framework. It is a collection of CSS and HTML files.

# jQuery is a lightweight, "write less, do more", JavaScript library. jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation. 

# Javascript often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.

# AJAX is an acronym for Asynchronous JavaScript and XML. AJAX is an acronym for Asynchronous JavaScript and XML. AJAX is an acronym for Asynchronous JavaScript and XML.

# This project has two parts one is Front End, which can be seen by users who are using the website. The other part is Back End, which is the server side of the website. And it will be used by admin to control the website. This website is regrading the education system in which user registers himself and after logging in the website he can read the information about topics of different subjects like Science, Mathematics, Geography, history etc. This website used PHP to provide response to the requests of the users and used MySQL to store the information regarding users, subjects, chapters and topics.

# This project contains several functions which are used to get and set the data of the users, subjects, chapters and topics. The glimpse of the functions is as follows:-
# 1. OpenCon(), this function is used to establish database connection and return the connection object in PHP.
# 2. CloseCon(), this function is used to close the database connection.
# 3. getHeader(), this function is used to get the header of the website.
# 4. getFooter(), this function is used to get the footer of the website.
# 5. addSubject(), this function is used to add the subject in the database from the back end.
# 6. addChapter(), this function is used to add the chapter in the database from the back end.
# 7. addTopic(), this function is used to add the topic in the database from the back end.
# 8. getSideBar(), this function is used to get the sidebar of the back end.
# 9. getAllSubjects(), this function is used to get all the subjects from the database and it is used on both side of the website.
# 10. getSubjectDataById(), this function is used to get the subject data by subject id from the database and it is used on both side of the website.
# 11. getAllChapters(), this function is used to get all the chapters from the database and it is used on both side of the website.
# 12. getChapterDataById(), this function is used to get the chapter data by chapter id from the database and it is used on both side of the website.
# 13. getAllTopics(), this function is used to get all the topics from the database and it is used on both side of the website.
# 14. getTopicDataById(), this function is used to get the topic data by topic id from the database and it is used on both side of the website.
# 15. updateSubject(), this function is used to update the subject in the database from the back end.
# 16. updateChapter(), this function is used to update the chapter in the database from the back end.
# 17. updateTopic(), this function is used to update the topic in the database from the back end.
# 18. deleteSubject(), this function is used to delete the subject in the database from the back end.
# 19. deleteChapter(), this function is used to delete the chapter in the database from the back end.
# 20. deleteTopic(), this function is used to delete the topic in the database from the back end.

# The file structure of the project is as follows:-
# admin/
       build/                   [this folder contains the files of js, npm and scss of the admin panel]
       css/                     [this folder contains the css files of the admin panel]
       dist/                    [this folder contains the files of css, js and also images of additional resources of the admin panel]
       fonts/                   [this folder contains the fonts of the admin panel]
       images/                  [this folder contains the images of the admin panel]
       js/                      [this folder contains the core js files of the admin panel]
       plugins/                 [this folder contains the plugins of the admin panel]
       scss/                    [this folder contains the scss files of the admin panel]
       addChapter.php
       addSubject.php
       addTopic.php
       ajax.php
       chaptersList.php
       dashboard.php
       footer.php
       functions.php
       header.php
       index.php
       logout.php
       sidebar.php
       subjectsList.php
       topicsList.php
       updateChapter.php
       updateSubject.php
       updateTopic.php
 css/                           [this folder contains the css files of the website]
 fonts/                         [this folder contains the fonts of the website]
 images/                        [this folder contains the images of the website]
 js/                            [this folder contains the core js files of the website]
 about.php
 chapterTopicsList.php
 dashboard.php
 footer.php
 functions.php
 header.php
 index.php
 logout.php
 style.css
 subjectChaptersList.php
 topic.php

# The sample of html, css , jquery and js of admin panel has been taken from https://adminlte.io/

# This project is developed by Restin Reji Philip, Sayan and Vishal
