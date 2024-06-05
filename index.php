<?php
$conn = mysqli_connect("localhost", "root", "", "inotes");

$sel = "select * from comment";
$r = mysqli_query($conn, $sel);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> i Notes</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- adding css -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .nav-link {
      color: white;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      transition: 1s;

    }

    .nav-link:hover {
      color: rgb(162, 31, 227);
      border-right: 2px solid;
      border-top: 2px solid;
      border-bottom: 2px solid;
      transition: 0s;

    }

    .col-lg-12 {
      background-image: linear-gradient(to right, #141e30, #243b55);
    }

    .col-sm-1 {

      border-right: 1px solid rgb(22, 18, 24);
      border-bottom: 1px solid rgb(85, 29, 29);
      background-color: rgb(162, 31, 227);
      transition: 0.3s;

    }

    .col-sm-1:hover {

      background-color: rgb(21, 15, 15);
      box-shadow: 10px 15px 5px rgb(76, 57, 57);
      margin-top: -12px;
      border-radius: 10px 10px 0px 0px;
      transition: 0.3s;
      border-top: 3px solid rgb(162, 31, 227);

    }

    .col-sm-1,
    a {
      font-size: 12px;
      color: white;
      text-align: center;
      text-decoration: dashed;
      line-height: 50px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
  </style>

</head>

<body onload="blink()">
  <!-- scroll down -->
  <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" onclick="backToTop()">
    <i class="fas fa-arrow-up"></i>
  </button>

  <div class="container-fluid stiky">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">

        <nav class="navbar navbar-expand-lg mt-2 px-5">
          <div class="container-fluid">

            <!-- collapse button  start-->
            <button class="navbar-toggler text-bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end collapse -->
            <!-- Offcanvas Sidebar -->
            <div class="dropdown bg-dark">
              <button type="button" style="background-color: rgb(162, 31, 227);color: white;font-weight: 700;" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                All Notes
              </button>
              <ul class="dropdown-menu bg-dark text-center" style="background-color: rgb(216, 213, 213);">
                <li><a class="dropdown-item" href="#html" style="color: blueviolet;">HTML</a></li>
                <li><a class="dropdown-item" href="#css" style="color: blueviolet;">CSS</a></li>
                <li><a class="dropdown-item" href="#bootstrap" style="color: blueviolet;">BOOTSTRAP</a></li>
                <li><a class="dropdown-item" href="#js" style="color: blueviolet;">JAVASCRIPT</a></li>
                <li><a class="dropdown-item" href="#bootstrap" style="color: blueviolet;">BOOTSTRAP</a></li>
                <li><a class="dropdown-item" href="#python" style="color: blueviolet;">PYTHON</a></li>
                <li><a class="dropdown-item" href="#php" style="color: blueviolet;">PHP</a></li>
                <li><a class="dropdown-item" href="#c" style="color: blueviolet;">C</a></li>
                <li><a class="dropdown-item" href="#djengo" style="color: blueviolet;">DJENGO</a></li>
                <li><a class="dropdown-item" href="#dsa" style="color: blueviolet;">DSA</a></li>
                <li><a class="dropdown-item" href="#java" style="color: blueviolet;">JAVA</a></li>
                <li><a class="dropdown-item" href="#mysql" style="color: blueviolet;">MYSQL</a></li>
                <li><a class="dropdown-item" href="#react" style="color: blueviolet;"> react</a></li>
              </ul>
            </div>
            <!-- adding close notes end -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link " href="index.php"><i class="fa-solid fa-house"></i>&ensp;Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="iNote.php" target="_blank">Notes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="iNote.php" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="iNote.php" target="_blank">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- notes navbar start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1"><a href="#html">HTML</a></div>
      <div class="col-sm-1"><a href="#css">CSS</a></div>
      <div class="col-sm-1"><a href="#bootstrap">BOOTSTRAP</a></div>
      <div class="col-sm-1"><a href="#js">JAVASCRIPT</a></div>
      <div class="col-sm-1"><a href="#python">PYTHON</a></div>
      <div class="col-sm-1"><a href="#php">PHP</a></div>
      <div class="col-sm-1"><a href="#c">C</a></div>
      <div class="col-sm-1"><a href="#djengo">DJENGO</a></div>
      <div class="col-sm-1"><a href="#dsa">DSA</a></div>
      <div class="col-sm-1"><a href="#java">JAVA</a></div>
      <div class="col-sm-1"><a href="#mysql">MYSQL</a></div>
      <div class="col-sm-1"><a href="#react">REACT</a></div>
    </div>
  </div>

  <!-- end notes navbar start -->

  <!-- hero section start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <div class="col-sm-5 mt-5 p-5">
        <div style="box-shadow: 0px 0px 5px 5px  rgb(69, 68, 69);
            border-radius: 20px;padding: 10px;">
          <strong class="intro mt-5 ">Welcome to <span style="color:rgb(162, 31, 227);"> i Notes</span><br> Learn : <span id="b"></span> </strong>
        </div>
      </div>
      <div class="col-sm-7 mt-5">
        <img class="firstpic " src="pic3.jpg" alt="">
      </div>
    </div>
  </div>
  <!-- end  hero section -->

  <!-- html start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-3 home1" id="html"><i class="fa-brands fa-html5 fa-bounce"></i>&ensp;HTML</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4">
        <img class="htmlpic text-center" src="htmlpic.png" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">Introduction To</span> HTML </h1><br>
        <p class="htmlp">
          Today, I'm writing this tutorial to create a resource that will help you learn HTML in less than 30 days. Here's a recommended timeline for learning HTML, based on your educational background:

          High School students and younger: Around 25 days
          Those beyond High School: Around 20 days
          College students and above: Around 10-20 days
          You may be wondering why I'm discussing these timelines. It's important for me to set expectations before you start your journey of learning html with me.

          My name is Pankaj (I am lunching youtube channel comming soon), and today I'm writing this comprehensive HTML tutorial for all of you. Let's jump right into HTML!
        </p>
        <h1><span class="text-info">What is</span> HTML </h1>
        <p class="htmlp">
          HTML (HyperText Markup Language) was created by Tim Berners-Lee in 1991 as a standard for creating web pages. It's a markup language used to structure content on the web, defining elements like headings, paragraphs, links, and images. HTML forms the backbone of web content. In layman's terms, HTML is like the skeleton of a website. It's a set of instructions that tells a web browser how to display text, images, videos, and other elements on a webpage. Think of it as the building blocks that create the structure and look of a website, similar to how bricks and mortar are used to build a house.

          In a nutshell:

          HTML is the language of the web, used to create websites.
          HTML defines the barebone structure or layout of web pages that we see on the Internet.
          HTML consists of a set of tags contained within an HTML document, and the associated files typically have either a ".php" or ".htm" extension.
          There are several versions of HTML, with HTML5 being the most recent version.
        </p>
        <h4 class="download_info">Download HTML Notes In pdf</h4>
        <a class="rotate" href="html_notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- end  html -->


  <!-- CSS start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="css"><i class="fa-brands fa-css3-alt fa-bounce"></i>&ensp;CSS</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4">
        <img class="htmlpic" src="csscar.png" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">Information & </span>History</h1><br>
        <p class="htmlp">
          Let's start this journey of learning CSS together. I'm Pankaj, This tutorial will serve as a resource for students to learn CSS and use the code from these lessons as a reference.

          Without further do, let's dive into learning CSS.
        </p>
        <h1><span class="text-info">What is</span> CSS ?? </h1>
        <p class="htmlp">
          CSS stands for Cascading Style Sheets. It is a stylesheet language that is used to describe the visual presentation of a web page written in HTML (Hypertext Markup Language).

          HTML creates the structure of the page, while CSS adds styling to that structure. This tutorial assumes that you have prior knowledge of HTML. If that's not the case, you can follow the HTML tutorial first.
        </p>
        <h4 class="download_info">Download CSS Notes In pdf</h4>
        <a href="CSS_Notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- CSS  end -->


  <!-- javascript start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="js"><i class="fa-brands fa-js fa-bounce"></i>&ensp;JavaScript</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="JavaScriptpic.png" height="300vh" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>JavaScript ?</h1><br>
        <p class="htmlp">
          JavaScript is a lightweight, OOP language.
          It is a scripting language for web pages.
          It is used to add interactivity and dynamic effects to web pages.
          “.js” is the extension.
          Nowadays used in server-side development.
          JS Frontend Frameworks: React, Angular, Vue.
          JS Backend Frameworks: Express, Node.
          In this tutorial, we will learn JavaScript in depth

        </p>
        <h1><span class="text-info">Features Of</span> JavaScript ?? </h1>
        <p class="htmlp">
          Bootstrap is an HTML, CSS and JS library that focuses on simplifying the development of informative web pages (as opposed to web applications). The primary purpose of adding it to a web project is to apply Bootstrap's choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking. Once added to a project, Bootstrap provides basic style definitions for all HTML elements. The result is a uniform appearance for prose, tables and form elements across web browsers. In addition, tables, page headings, more prominent pull quotes, and text with a highlight.
        </p>
        <h4 class="download_info">Download Js Notes In pdf</h4>
        <a href="js_notes.pdf" target="_blank" download="javascript aapke liye padh lo" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- javascript  end -->


  <!-- bootatrap start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="bootstrap"><i class="fa-brands fa-bootstrap fa-bounce"></i>&ensp;BOOTSTRAP</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="bootstrappic.png" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>BOOTSTRAP ?</h1><br>
        <p class="htmlp">
          Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.
        </p>
        <h1><span class="text-info">Features Of</span> Bootstrap ?? </h1>
        <p class="htmlp">
          Bootstrap is an HTML, CSS and JS library that focuses on simplifying the development of informative web pages (as opposed to web applications). The primary purpose of adding it to a web project is to apply Bootstrap's choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking. Once added to a project, Bootstrap provides basic style definitions for all HTML elements. The result is a uniform appearance for prose, tables and form elements across web browsers. In addition, tables, page headings, more prominent pull quotes, and text with a highlight.
        </p>
        <h4 class="download_info">Download Bootstrap Notes In pdf</h4>
        <a href="Bootstrap_notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- bootstrap  end -->

  <!-- python start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="python"><i class="fa-brands fa-python fa-bounce rounded"></i>&ensp;PYTHON</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="python.png" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>Python ?</h1><br>
        <p class="htmlp">
          Python is a dynamically typed, General Purpose Programming Language that supports an object-oriented programming approach as well as a functional programming approach.
          Python is also an interpreted and high-level programming language.
          It was created by Guido Van Rossum in 1989.
        </p>
        <h1><span class="text-info">Features Of</span> Python ?? </h1>
        <p class="htmlp">
          Python is simple and easy to understand.
          It is Interpreted and platform-independent which makes debugging very easy.
          Python is an open-source programming language.
          Python provides very big library support. Some of the popular libraries include NumPy, Tensorflow, Selenium, OpenCV, etc.
          It is possible to integrate other programming languages within python.
        </p>
        <h4 class="download_info">Download Python Notes In pdf</h4>
        <a href="Python_Notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- python  end -->

  <!-- php start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="php"><i class="fa-brands fa-php fa-bounce"></i>&ensp;PHP</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="phppic.jpg" alt="">

      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>PHP ?</h1><br>
        <p class="htmlp">
          PHP is a server-side scripting language, which is used to manage dynamic web pages, databases and build websites with features like session tracking and e-commerce. On a day of 1995, Rasmus Lerdorf unleashed the first version of “Hypertext Preprocessor” also known as the PHP language. It is also integrated with several popular databases like MySQL, PostgreSQL, Microsoft SQL Server, Oracle etc.
        </p>
        <h1><span class="text-info">Uses Of</span> PHP ?? </h1>
        <p class="htmlp">
          PHP can perform several system functions like opening files, CRUD operations on data stores, general-purpose scripting, etc. Besides system operations, there are also other uses like
          <br>
          a. Handling Forms: PHP can handle form operations. It can gather data, save data to a file and send data through emails.<br>
          b. Database Operations: PHP can also create, read, update and delete elements in your database.<br>
          c. Encryption: It can perform advanced encryption and encrypt data for you.<br>
          d. Dynamic Page Content: It can generate dynamic page content.
        </p>
        <h4 class="download_info">Download PHP Notes In pdf</h4>
        <a href="PHP_notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- php  end -->


  <!-- c start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="c"><i class="fa-solid fa-c fa-beat-fade"></i>&ensp; Language</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="cpic.jpg" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>C ?</h1><br>

        <ul type="square" class="htmlp" style="padding: 20px;">
          <li>Since the late 19th century, C has been a popular programming language for general-purpose use.</li>
          <li>C language was developed by Dennis M. Ritchie at bell laboratory in early 1970s</li>

          <li>As the whole UNIX operating system was written in C, it has a strong association with the operating system⁣</li>
          <li>C has also been used widely while creating iOS and Android kernels.⁣</li>
          <li>MySQL database is written using C.⁣</li>
          <li>Ruby and Pearl are mostly written using C.⁣</li>
          <li>Ruby and Pearl are mostly written using C.⁣</li>
          <li>Embedded Systems are created using C⁣</li>
        </ul>

        <h1><span class="text-info">Features Of</span> C ?? </h1>
        <p class="htmlp">
          As mentioned above, it is one of the most popular programming languages in the world.

          Learning any other popular programming language such as Python or C++ becomes a cakewalk already if you know C.


          Being close to Machine language, some of its functions include direct access to machine-level hardware APIs.

          It is a structural language (Follows a specific Structure) /Compiled language this point should be added

          It is procedural programming language (POP) Procedurall Programming is the use of code in a step-wise procedure to develop applications.


        </p>
        <h4 class="download_info">Download C Notes In pdf</h4>
        <a href="C_Notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- c  end -->

  <!-- djengo start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="djengo"><i class="fa-brands fa-dochub fa-bounce"></i></i>jengo</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="djangologo.webp" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>Djengo ?</h1><br>
        <p class="htmlp">
          Django is a Python framework that makes it easier to create web sites using Python.

          Django takes care of the difficult stuff so that you can concentrate on building your web applications.

          Django emphasizes reusability of components, also referred to as DRY (Don't Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete).
        </p>
        <h1><span class="text-info">How does </span> Djengo Work? </h1>

        <ul type="" class="htmlp p-5">
          <h5>Django follows the MVT design pattern (Model View Template).</h5>
          <li>Model - The data you want to present, usually data from a database.</li>
          <li>View - A request handler that returns the relevant template and content - based on the request from the user.</li>
          <li>Template - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.</li>
        </ul>
        </p>
        <h4 class="download_info">Download Djengo Notes In pdf</h4>
        <a href="Django.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download fa-bounce"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- djengo  end -->


  <!-- dsa start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="dsa"><i class="fa-solid fa-truck-fast fa-bounce"></i>&ensp;DSA</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="dsa.webp" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What Is </span>DSA ?</h1><br>
        <p class="htmlp">
          The data structure name indicates itself that organizing the data in memory. There are many ways of organizing the data in the memory as we have already seen one of the data structures, i.e., array in C language. Array is a collection of memory elements in which data is stored sequentially, i.e., one after another. In other words, we can say that array stores the elements in a continuous manner. This organization of data is done with the help of an array of data structures. There are also other ways to organize the data in memory. Let's see the different types of data structures.
        </p>
        <h1><span class="text-info">Classification Of</span> Data Structures ?? </h1>
        <p class="htmlp">
          A Data Structure delivers a structured set of variables related to each other in various ways. It forms the basis of a programming tool that signifies the relationship between the data elements and allows programmers to process the data efficiently.
        </p>
        <h4 class="download_info">Download DSA Notes In pdf</h4>
        <a href="DSA_Notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- dsa  end -->


  <!-- java start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="java"><i class="fa-brands fa-java fa-bounce"></i>&ensp;JAVA</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="java.webp" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">Overview of </span>java ?</h1><br>
        <p class="htmlp">
          Java is an open-source, class-based, high-level, object-oriented programming language. Java is platform independent as the java programs are compiled into byte code that are platform independent.
        </p>
        <h1><span class="text-info">History Of </span> java ?? </h1>
        <p class="htmlp">
          Java programming language was created by James Gosling in 1995. The original idea was to design a language for the television industry. Gosling worked along with his team also called the Green Team and the project they worked on was called Greentalk. This project was later named as OAK. The name OAK has its roots to the oak tree that stood outside Gosling’s office. This name had to be dropped later as it was already a trademark by Oak Technologies.

          <strong>So how was the name Java suggested?</strong>

          Since the language could no longer be named OAK, Gosling and his team had to come up with new name. The team considered various names like DNA, RUBY, JAVA, jolt, dynamic, revolutionary, SILK.

          But the name had to unique and quite easy to say. The name JAVA occurred in gosling’s mind while having a cup of coffee at his office.
        </p>
        <h4 class="download_info">Download java Notes In pdf</h4>
        <a href="Java_Notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download fa-bounce"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- java end -->



  <!-- mysql start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="mysql"><i class="fa-solid fa-database fa-bounce"></i>&ensp;Mysql</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="mysql.webp" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">What is</span>Mysql ?</h1><br>
        <p class="htmlp">
          MySQL tutorial provides basic and advanced concepts of MySQL. Our MySQL tutorial is designed for beginners and professionals.

          MySQL is a relational database management system based on the Structured Query Language, which is the popular language for accessing and managing the records in the database. MySQL is open-source and free software under the GNU license. It is supported by Oracle Company.
        </p>
        <h1><span class="text-info">What is </span> Database?? </h1>
        <p class="htmlp">
          It is very important to understand the database before learning MySQL. A database is an application that stores the organized collection of records. It can be accessed and manage by the user very easily. It allows us to organize data into tables, rows, columns, and indexes to find the relevant information very quickly. Each database contains distinct API for performing database operations such as creating, managing, accessing, and searching the data it stores. Today, many databases available like MySQL, Sybase, Oracle, MongoDB, PostgreSQL, SQL Server, etc. In this section, we are going to focus on MySQL mainly.
        </p>
        <h4 class="download_info">Download Mysql Notes In pdf</h4>
        <a href="mysqlnotes1.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download fa-bounce"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- mysql end -->


  <!-- react start -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <h3 class="text-center mt-5 home1" id="react"><i class="fa-brands fa-react"></i>&ensp;React js</h3><br><img src="underline2.webp" height="100px" width="30%" alt="">
      <div class="col-sm-4 text-center ">
        <img class="htmlpic" src="reactp1.jpg" alt="">
      </div>
      <div class="col-sm-8">
        <h1><span class="text-info">Why we use to </span> React js ?</h1><br>
        <p class="htmlp">
          The main objective of ReactJS is to develop User Interfaces (UI) that improves the speed of the apps. It uses virtual DOM (JavaScript object), which improves the performance of the app. The JavaScript
          virtual DOM is faster than the regular DOM. We can use ReactJS on the client and server-side as well as with other frameworks. It uses component and data patterns that improve readability and helps to maintain larger apps.
        </p>
        <h1><span class="text-info">Features Of </span> React js ?? </h1>
        <p class="htmlp">
          Currently, ReactJS gaining quick popularity as the best JavaScript framework among web developers. It is playing an essential role in the front-end ecosystem. The important features of ReactJS are as following.

          1. JSX <br>
          2. Components <br>
          3. One-way Data Binding <br>
          4. Virtual DOM <br>
          5. Performance

        </p>
        </p>
        <h4 class="download_info">Download React js Notes In pdf</h4>
        <a href="react notes.pdf" target="_blank" style="color: blue;border: 3px solid rgb(162, 31, 227);padding: 10px;border-radius: 10px 0px 10px 0px;"><i class="fa-solid fa-download fa-bounce"></i>&ensp;Download</a>
      </div>
    </div>
  </div>
  <!-- react end -->
  <div class="container-fluid" style="background-color: rgb(216, 213, 213);">
    <div class="row">
      <div class="col-sm-12  mt-4">
        <marquee behavior="alternate" hspace="10px" scrollamount="10" onmouseover="this.stop()" onmouseleave="this.start()">
          <h3 style="font-family:'Times New Roman', Times, serif;color: blueviolet;">Suggestion ?</h3>
        </marquee>
      </div>
    </div>
  </div>



  <!-- creating comment form -->

  <div class="container-fluid " style="background-color: rgb(216, 213, 213);">
    <div class="row ">

      <div class="col-sm-6 p-5">

        <form action="inputformcode.php" method="post">

          <div class="mb-3 mt-3">
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
          </div><br>
          <div class="mb-3">

            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email..">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Comment In Your Query.."></textarea>
          </div>
          <button class="btn btn-outline-primary pt-2">Send</button>
        </form>

      </div>

      <div class="col-sm-6 mt-2 p-3" style="border:2px solid  rgb(162, 31, 227);border-radius: 40px;box-shadow: 0px 0px 5px 5px  rgb(69, 68, 69);">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <?php
              while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
              ?>
                <div class="row">
                  <div class="col-sm-12">
                    <details open style="padding:10px;color:blueviolet">
                      <summary><i class="fa-solid fa-user fa-bounce"></i>&ensp;<?php echo $k['1']; ?> <span style="padding-left:20%;"><?php echo $k['4'] ?></span></summary>
                      <p> <?php echo $k['3']; ?></p>
                    </details>
                  </div>
                </div>
                <hr>
              <?php
              }
              ?>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end  comment form -->

  <!-- create footer -->
  <div class="container-fluid bg-dark ">
    <div class="row ">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 p-5">
        <i class="fa-brands fa-facebook  footer1"></i>
        <i class="fa-brands fa-instagram footer1"></i>
        <i class="fa-brands fa-twitter footer1"></i>
        <i class="fa-brands fa-youtube footer1"></i>

        <div class="col-sm-3"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>

          <div class="col-sm-6">
            <ul class="footerul ">

              <li><a href="index.php">Home</a></li>
              <li><a href="iNote.php" target="_blank">Notes</a></li>
              <li><a href="iNote.php" target="_blank">About</a></li>
              <li><a href="iNote.php" target="_blank">Contact Us </a></li>
              <li><a href="iNote.php" target="_blank">Admin Pannel</a></li>
            </ul>
          </div>

          <div class="col-sm-3"></div>
        </div>
        <hr style="color: rgb(162, 31, 227);">
      </div>
      <p class="text-center" style="color: rgb(162, 31, 227);">||&ensp; All Right Reserve 2024 i Notes.&ensp; ||</p>
      <hr>
      <p class="text-center" style="color: rgb(162, 31, 227);">||&ensp; Degined By <i class="fa-solid fa-computer"></i> Pankaj&ensp; ||</p>
    </div>
    <!-- end footer  -->



    <!-- adding js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="change_word.js"></script>
</body>

</html>