<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasthan Technical University</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #003366;
        }

        h2 {
            color: #0056b3;
        }

        nav {
            background-color: #003366;
            padding: 10px;
            margin-bottom: 20px;
        }





        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            cursor: pointer;
            transition: color 0.3s;
        }

        a:hover {
            color: #ffcc00;
        }

        section {
            display: none;
            margin-bottom: 20px;
        }

        img {
            width: 6%;
            height: auto;
        }

        .course-list,
        .department-list,
        .faculty-list {
            padding: 0;
            margin: 0;
        }

        .course-list div,
        .department-list div,
        .faculty-list div {
            margin-bottom: 10px;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            background-color: #ffffff;
        }

        th {
            background-color: #003366;
            color: #ffffff;
        }

        footer {
            background-color: #003366;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
</head>

<body>
    <header>
        <img src="rtu.jpg" alt="College Logo">
        <h1>Rajasthan Technical University</h1>
    </header>

    <nav>
        <ul>
            <li><a onclick="showSection('Home')">Home</a></li>
            <li><a onclick="showSection('courses')">Courses</a></li>
            <li><a onclick="showSection('departments')">Departments</a></li>
            <li><a onclick="showSection('faculties')">Faculties</a></li>
            <li><a onclick="showSection('library')">Library</a></li>
            <li><a onclick="showSection('timetable')">Timetable</a></li>
            
        </ul>
    </nav>

    <nav class="navbar">
  
      <ul>

        <li><img src="gif-new.gif" alt="" style="padding: 6px" /></li>

        <li>
          <a href="register_form.php"> <i class="fa fa-university" style="color: white"></i>University Login</a
          >
        </li>
      </ul>
    </nav>
    <section id="Home">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="image1.jpeg" style="width:100%">
              <div class="text">Caption Text</div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="image2.jpg" style="width:100%">
              <div class="text">Caption Two</div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="image3.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>
          
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image4.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image5.png" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image6.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image7.jpeg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image8.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image9.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image10.jpeg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image11.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    </section>
     

    

    <section id="courses">
        <h2>Courses</h2>
        <div class="course-list">
            <div>Computer Science and Engineering</div>
            <div>Electrical Engineering</div>
            <div>Information Technology</div>
            <div>Electronics and Communication Engineering</div>
            <div>Mechanical Engineering</div>
            <div>Civil Engineering</div>
            <div>Electronics Instrumentation and Control</div>
            <div>Production and Industrial Engineering</div>
            <div>Aeronautical Engineering</div>
            <div>Petroleum Engineering</div>
        </div>
    </section>

    <section id="departments">
        <h2>Departments</h2>
        <div class="department-list">
            <div>Department of Computer Science</div>
            <div>Department of Electrical Engineering</div>
            <div>Department of Civil Engineering</div>
            <div>Department of Electronics Engineering</div>
            <div>Department of Mechanical Engineering</div>
            <div>Department of HEAS (Humanities, English and Sciences)</div>
            
        </div>
    </section>

    <section id="faculties">
        <h2>Faculties</h2>
        <div class="faculty-list">
            <div>Prof. A.K Dwivedi - Dean of Faculty Affairs</div>
            <div>Dr. Harish Sharma - Head, Department of Computer Science</div>
            <div>Prof. J.K Sharma -  Head, Department of Civil Engineering</div>
            <div>Prof. Dinesh Birla - Head, Department of Electrical Engineering</div>
            <div>Prof. Mithlesh Kumar - Head, Department of Electronics Engineering</div>
            <div>Dr A. K. Chaturvedi - Head, Department of Mechanical Engineering</div>
            <div>Prof. Manisha Vyas - Head, Department of HEAS (Humanities, English and Sciences)</div>
            <div>Dr. Brajesh Tripathi - Chief Proctor</div>
            <div>Dr. Manish Chaturvedi - Chairman, Training and Placement</div>
            <div>Dr. Rajesh Singhal - Chief Warden</div>
            <div>Shri. R.S. Sharma - WEBMASTER</div>
        
        </div>
    </section>

    <section id="library">
        <h2>Library</h2>
        <p>Central Library of Rajasthan Technical University, Kota ( Formerly knows University college of Engineering, Kota was established 1984. It caters to the information needs of the faculty members, students, staff, and research scholars. It works on an open access system. The Central Library possesses around 1,00,043 books and more then 9975 e-journals covering the disciplines of all Departments
            The Central Library collection also comprises printed documents such as books, reports, theses, standards, Atlases, Patents and back volumes of journals. The non-book collection includes material like audio/video cassettes and CD-ROM discs etc.
The Central Library is a member of Indian National Digital Library in Engineering, Sciences, and Technology and All India Council of Technical Education (INDEST-AICTE) Consortium, New Delhi for accessing e-journals and also member of Institute for Steel Development and Growth (INSDAG), KOLKATA for Sharing it’s resources in the interest of faculty and students. Central Library is also a Member of Developing Library Network (DELNET) New Delhi for sharing the resources among its Member Libraries.
Central Library has been subscribing e-journals of IEL online, ASCE online, ASME online, Emereld-95, Access Engineering Library, J-Gate(JET) ASTM Digital Library and various digital libraries for accessing e-journals.
Central Library is housed in a two storied separate building which can accommodate around 150 users at a time to persue the academic and research activities by way of reading books, accessing electronic journals and internet and computer programming. It is connected to high speed internet. All activities of Central Library are computerized, including bar-coded ID cards and separate On- line public access catalogue(OPAC) terminal to know the status of books at any time since 2015.
        </p>
    </section>

    <section id="timetable">
        <h2>Timetable</h2>
        <table>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
            <tr>
                <td>9:00 AM - 10:00 AM</td>
                <td>OE</td>
                <td>OE</td>
                <td>OE</td>
                <td>--</td>
                <td>OE</td>
                <td>--</td>
            </tr>
            <tr>
                <td>10:00 AM - 11:00 AM</td>
                <td>BT</td>
                <td>BT</td>
                <td>BT</td>
                <td>WT</td>
                <td>WT</td>
                <td>WT</td>
            </tr>
            <tr>
                <td>11:00 AM - 12:00 AM</td>
                <td>DCT</td>
                <td>NIA</td>
                <td>DCT</td>
                <td>NIA</td>
                <td>DCT</td>
                <td>NIA</td>
            </tr>
            <tr>
                <td>12:00 PM - 1:00 PM</td>
                <td>CAO</td>
                <td>CAO</td>
                <td>CAO</td>
                <td>ACD</td>
                <td>ACD</td>
                <td>ACD</td>
            </tr>
            <tr>
                <td>1:00 PM - 2:00 PM</td>
                <td>LUNCH</td>
                <td>LUNCH</td>
                <td>LUNCH</td>
                <td>LUNCH</td>
                <td>LUNCH</td>
                <td>LUNCH</td>
            </tr>
            <tr>
                <td>2:00 PM - 4:00 PM</td>
                <td>------------</td>
                <td>------------</td>
                <td>WT LAB</td>
                <td>EMT LAB</td>
                <td>SEMINAR-2</td>
                <td>EMT LAB</td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
    </section>

    <footer>
        <p>&copy; Nitesh Verma For WT Lab</p>
    </footer>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('section').forEach(section => {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
    <script src="index.js"/>
</body>

</html>

<?php
@include 'slider.php';
?>

