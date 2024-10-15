<?php

function a($value, $link, $class = '') {
    echo "<a href='$link' class='$class'>" . $value . '</a>'; 
};



function img($src) {
    echo '<img src="' . $src . '" alt="Image">';
    return $src;
};


function input($type, $placeholder = '', $id = '', $class = '', $required = false) {
    $requiredAttribute = $required ? 'required' : '';
    
    echo "<input type='$type' placeholder=\"$placeholder\" id=\"$id\" class=\"$class\" $requiredAttribute />";
};

function h1($value, $class = '') {
    echo "<h1 class='$class'>" . $value . '</h1>';
    return $value;
};

function h2($value, $class = '') {
    echo "<h2 class='$class'>" . $value . '</h2>';
    return $value;
};

function h3($value, $class = '') {
    echo "<h3 class='$class'>" . $value . '</h3>';
    return $value;
};

function h4($value, $class = '') {
    echo "<h4 class='$class'>" . $value . '</h4>';
    return $value;
};

function h5($value, $class = '') {
    echo "<h5 class='$class'>" . $value . '</h5>';
    return $value;
};

function p($value, $class = '') {
    echo "<p class='$class'>" . $value . '</p>';
    return $value;
};

function span($value, $class = '') {
    echo "<span class='$class'>" . $value . '</span>';
    return $value;
};



function i($value, $class = '', $aria_hidden = 'false') {
    echo "<i class='$class' aria-hidden='$aria_hidden'>" . $value . '</i>';
    return $value;
};

function ul($value, $class = '') {
    echo "<ul class='$class'>" . $value . '</ul>';
    return $value;
};

function li($value, $class = '') {
    echo "<li class='$class'>" . $value . '</li>';
    return $value;
};

function h2WithSpan($text, $spanText, $spanClass = '', $h2Class = '') {
    echo "<h2 class=\"$h2Class\">$text <span class=\"$spanClass\">$spanText</span></h2>";
};

// HEADER FUNCTION
function setheader($navbar1) {
    echo '<div class="hero_area">';
    echo '<header class="header_section">';
    echo '    <div class="header_top">';
    echo '        <div class="container">';
    echo '            <div class="contact_nav">';
    echo '                <a href="">';
    i('', 'fa fa-phone', 'true');
    span('  Call : +01 123455678990');
    echo '                </a>';
    echo '                <a href="">';
    i('', 'fa fa-envelope', 'true');
    span(' Email : demo@gmail.com');
    echo '                </a>';
     echo '                <a href="">';
    i('', 'fa fa-map-marker', 'true');
    span('  Location');
    echo '                </a>';
    echo '            </div>'; 
    echo '        </div>'; 
    echo '    </div>'; 
    echo '    <div class="header_bottom">';
    echo '        <div class="container-fluid">';
    echo '            <nav class="navbar navbar-expand-lg custom_nav-container">';
    echo '                <a class="navbar-brand" href="index.php">';
    img('images/logo.png');
    echo '                </a>';        
    echo '                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
    echo '                    <span class=""></span>';
    echo '                </button>';
    echo '                <div class="collapse navbar-collapse" id="navbarSupportedContent">';
    echo '                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
    echo '                        <ul class="navbar-nav">';
    foreach ($navbar1 as $navbar) {
    echo '<li class="nav-item active">';
    a($navbar['name'], $navbar['link'], 'nav-link');
    echo '</li>';
    }
    echo '</ul>';
    echo '</div>'; 
    echo '                    <div class="quote_btn-container">';
    echo '                        <a href="./login.php">';
    i('', 'fa fa-user', 'true');
    span('Login');
    echo '                        </a>'; 
    echo '                        <a href="./signup.php">';
    i('', 'fa fa-user', 'true');
    span('Sign up');
    echo '                        </a>'; 
    echo '                        <form class="form-inline">';
    echo '                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">';
    i('', 'fa fa-search', 'true');
    echo '                            </button>';
    echo '                        </form>';
    echo '                    </div>'; 
    echo '                </div>'; 
    echo '            </nav>';
    echo '        </div>'; 
    echo '    </div>'; 
    echo '</header>'; 
    echo '</div>';

}



// FOOTER FUNCTION
function setfooter($fonts,$footers,$footers1,$postboxes,$postboxes1 ){
    $current_page = basename($_SERVER['PHP_SELF']);
echo '<section class="info_section ">';
echo '<div class="container">';
echo '<div class="info_top">';
echo '<div class="info_logo">';
echo '<a href=" ">';
img('images/logo.png'); 
echo '</a>';
echo '</div>'; 

echo '<div class="info_form">';
echo '<form action="">';
echo '<input type="email" placeholder="Your email">';
echo '<button>Subscribe</button>';
echo '</form>';
echo '</div>'; 
echo '</div>'; 

echo '<div class="info_bottom layout_padding2">';
echo '<div class="row info_main_row">';
echo '<div class="col-md-6 col-lg-3">';
h5('Address'); 
echo '<div class="info_contact">';
foreach ($fonts as $font) {
    echo '<a href="">';
    i('', $font['class'], 'true'); 
    echo '<span>' . $font['span'] . '</span>'; 
    echo '</a>';
}
echo '</div>'; 

echo '<div class="social_box">';
foreach ($footers as $footer) {
    echo '<a href="">';
    i('', $footer['class'], 'true'); 
    echo '</a>';
}
echo '</div>'; 
echo '</div>'; 

echo '<div class="col-md-6 col-lg-3">';
echo '<div class="info_links">';
echo '<h5>Useful Link</h5>'; 
echo '<div class="info_links_menu">';
foreach ($footers1 as $footer1) {
    $active_class = ($current_page == basename($footer1['link'])) ? 'active' : ''; // Check if the current page matches the link
    echo '<a href="' . $footer1['link'] . '" class="' . $active_class . '">' . $footer1['name'] . '</a>';
}


echo '</div>'; 
echo '</div>'; 
echo '</div>'; 

echo '<div class="col-md-6 col-lg-3">';
echo '<div class="info_post">';
h5('LATEST POSTS'); 
foreach ($postboxes as $postbox) {
    echo '<div class="post_box">';
    echo '<div class="img-box">';
    img($postbox['img']); 
    echo '</div>';
    p($postbox['p']); 
    echo '</div>'; 
}
echo '</div>'; 
echo '</div>'; 

echo '<div class="col-md-6 col-lg-3">';
echo '<div class="info_post">';
h5('NEWS'); 
foreach ($postboxes1 as $postbox1) {
    echo '<div class="post_box">';
    echo '<div class="img-box">';
    img($postbox1['img']); 
    echo '</div>';
    p($postbox1['p']); 
    echo '</div>'; 
}
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</section>'; 

echo '<footer class="footer_section">';
echo '<div class="container">';
echo '<p>';
echo '&copy; <span id="displayYear"></span> All Rights Reserved By ';
echo '<a href="https://html.design/">Free Html Templates</a>';
echo '</p>';
echo '</div>'; 
echo '</footer>'; 
}



function testimonial_section($testimonials) {
    echo '
    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2><span>Testimonial</span></h2>
            </div>
        </div>
        <div class="container px-0">
            <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
                <div class="carousel-inner">';
                
                foreach ($testimonials as $index => $testimonial) {
                    echo '
                    <div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>' . $testimonial['name'] . '</h5>
                                    <h6>' . $testimonial['title'] . '</h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>' . $testimonial['quote'] . '</p>
                        </div>
                    </div>';
                }
    
    echo '
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->
    ';
}



function treatment_section($treatments) {
    echo '
    <!-- Dynamic treatment section -->
    <section class="treatment_section layout_padding">
        <div class="side_img">';
            img('images/treatment-side-img.jpg');
    echo '
        </div>
        <div class="container">
            <div class="heading_container heading_center">';
                h2('Hospital <span>Treatment</span>');
    echo '
            </div>
            <div class="row">';
                foreach ($treatments as $treatment) {
                    echo '
                    <div class="col-md-6 col-lg-3">
                        <div class="box">
                            <div class="img-box">';
                                img($treatment['image']);
                    echo '
                            </div>
                            <div class="detail-box">';
                                h4($treatment['title']);
                                p($treatment['description']);
                                a('Read More', $treatment['link']);
                    echo '
                            </div>
                        </div>
                    </div>';
                }
    echo '
            </div>
        </div>
    </section>
    <!-- end treatment section -->
    ';
};


function doctors($doctors, $socials) {
    echo '<section class="team_section layout_padding">';
    echo '<div class="container">';
    echo '<div class="heading_container heading_center">';
    echo '<h2>' . "Our" . ' ' . '<span>' . "Doctors" . '</span>' . '</h2>';
    echo '</div>';
    echo '<div class="carousel-wrap">';
    echo '<div class="owl-carousel team_carousel">';
    
    foreach ($doctors as $doctor) {
        echo '<div class="item">';
        echo '<div class="box">';
        echo '<div class="img-box">';
        echo '<img src="' . $doctor['image'] . '" alt="' . $doctor['name'] . '">';
        echo '</div>';
        
        echo '<div class="detail-box">';
        echo '<h5>' . $doctor['name'] . '</h5>';
        echo '<h6>' . $doctor['educ'] . '</h6>';
        
        echo '<div class="social_box">';
        foreach ($socials as $social) {
            echo '<a href="' . $social['link'] . '">' . $social['icon'] . '</a>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
};


function contact($forms) {
    echo '<section class="contact_section layout_padding-bottom">';
    echo '<div class="container">';
    echo '<div class="heading_container">';
    h2('Get In Touch');
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-7">';
    echo '<div class="form_container">';
    
    
     if (isset($_GET['submit'])) {
         echo '<p style="color: green; font-size: 18px; font-weight: bold; padding: 10px; background-color: #e0ffe0; border: 2px solid green; border-radius: 5px; text-align: center;">Your form is submitted</p>';
    
  } else {
    
         echo '<form action="./contact.php" method="GET">';  
        echo '<div>';

   
    

   
        
        foreach ($forms as $form) {
            input($form['t'], $form['p'], $form['id'],'',true);
        }
        input('text', 'Message', ' ', 'message-box');
        echo '</div>';
        echo '<div class="btn_box">';
        echo '<button type="submit" name="submit">SEND</button>';
        echo '</div>';
        echo '</form>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-5">';
    echo '<div class="img-box">';
    img('images/contact-img.jpg');
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}

function about(){
    echo '<section class="about_section layout_padding">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '<div class="img-box">';
    
    img('images/about-img.jpg');
    
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<div class="detail-box">';
    echo '<div class="heading_container">';
    h2WithSpan('About', 'Hospital', 'highlight', 'main-heading');
    echo '</div>';
    
    p(' has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors');
    
    echo '<div class="btn_box">';
    a('Read More', '#');
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    

};

// SLIDER FUNCTION

function sliderSection($slides) {
    echo '<section class="slider_section">';
    echo '<div class="dot_design">';
    echo '<img src="images/dots.png" alt="">';
    echo '</div>';
    echo '<div id="customCarousel1" class="carousel slide" data-ride="carousel">';
    echo '<div class="carousel-inner">';

    foreach ($slides as $index => $slide) {
        $activeClass = $index === 0 ? 'active' : '';
        echo '<div class="carousel-item ' . $activeClass . '">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-6">';
        echo '<div class="detail-box">';
        echo '<div class="play_btn">';
        echo '<button>';
        echo '<i class="fa fa-play" aria-hidden="true"></i>';
        echo '</button>';
        echo '</div>';
        echo '<h1>' . htmlspecialchars($slide['title']) . '<br>';
        echo '<span>' . htmlspecialchars($slide['subtitle']) . '</span>';
        echo '</h1>';
        echo '<p>' . htmlspecialchars($slide['description']) . '</p>';
        echo '<a href="' . htmlspecialchars($slide['link']) . '">Contact Us</a>';
        echo '</div>'; 
        echo '</div>'; 
        echo '<div class="col-md-6">';
        echo '<div class="img-box">';
        img('images/slider-img.jpg');
        echo '</div>'; 
        echo '</div>'; 
        echo '</div>'; 
        echo '</div>'; 
        echo '</div>'; 
    }

    echo '</div>'; 
    echo '<div class="carousel_btn-box">';
    echo '<a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">';
    echo '<img src="images/prev.png" alt="">';
    echo '<span class="sr-only">Previous</span>';
    echo '</a>';
    echo '<a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">';
    echo '<img src="images/next.png" alt="">';
    echo '<span class="sr-only">Next</span>';
    echo '</a>';
    echo '</div>'; 
    echo '</div>'; 
    echo '</section>';
    
};


function book() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patientName = $_POST['patient_name'];
        $doctorName = $_POST['doctor_name'];
        $departmentName = $_POST['department_name'];
        $phoneNumber = $_POST['phone'];
        $symptoms = $_POST['symptoms'];
        $appointmentDate = $_POST['appointment_date'];

        
        echo '<h4 style="text-align: center; margin-top: 200px;">Your reservation has been accepted</h4>';
        echo '<img src="./images\check.jpg" style="width: 100px; margin-left: 600px;" alt="">';
        echo '<div class=reservationform style=" background-color: #00c6a9;  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25); margin: 50px 600px; padding: 10px; border-radius: 20px;" >';
        echo "<h4>Patient Information</h4>";
        echo "Patient Name: " . ($patientName) . "<br>";
        echo "Doctor's Name: " .($doctorName) . "<br>";
        echo "Department: " . ($departmentName) . "<br>";
        echo "Phone Number: " . ($phoneNumber) . "<br>";
        echo "Symptoms: " . ($symptoms) . "<br>";
        echo "Appointment Date: " . ($appointmentDate) . "<br>";
        echo '</div>';
        
    };
};
   
function formReservation(){
    echo '<section class="book_section layout_padding">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col">';
    echo '<h4>BOOK <span>APPOINTMENT</span></h4>';
        
    echo '<form action="book.php" method="post">';
    
    echo '<div class="form-row">';
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputPatientName">Patient Name</label>';
    echo '<input type="text" class="form-control" id="inputPatientName" name="patient_name" placeholder="Enter Patient Name" required>';
    echo '</div>';
    
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputDoctorName">Doctor\'s Name</label>';
    echo '<select name="doctor_name" class="form-control wide" id="inputDoctorName">';
    echo '<option value="Dr. Hennry">Dr. Hennry</option>';
    echo '<option value="Dr. Jenny">Dr. Jenny</option>';
    echo '<option value="Dr. Morco">Dr. Morco</option>';
    echo '</select>';
    echo '</div>';
    
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputDepartmentName">Department\'s Name</label>';
    echo '<select name="department_name" class="form-control wide" id="inputDepartmentName">';
    echo '<option value="Cardiology">Cardiology</option>';
    echo '<option value="Neurology">Neurology</option>';
    echo '<option value="Orthopedics">Orthopedics</option>';
    echo '</select>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-row">';
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputPhone">Phone Number</label>';
    echo '<input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX" required>';
    echo '</div>';
    
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputSymptoms">Symptoms</label>';
    echo '<input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="Enter Symptoms" required>';
    echo '</div>';
    
    echo '<div class="form-group col-lg-4">';
    echo '<label for="inputDate">Choose Date</label>';
    echo '<div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">';
    echo '<input type="text" class="form-control" name="appointment_date" placeholder="MM-DD-YYYY" required>';
    echo '<span class="input-group-addon date_icon">';
    echo '<i class="fa fa-calendar" aria-hidden="true"></i>';
    echo '</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
    echo '<div class="btn-box">';
    echo '<button type="submit" class="btn btn-primary">Submit Now</button>';
    echo '</div>';
    
    echo '</form>';
    
    echo '</div>'; 
    echo '</div>'; 
    echo '</div>'; 
    echo '</section>';
};


