<?php
function doctors($doctors, $socials) {
    echo '<section class="team_section layout_padding">';
        echo '<div class="container">';
            echo '<div class="heading_container heading_center">';
                echo '<h2>' ." Our".' '. '<span>'."Doctors". "<span>".'<h2>';
            echo '</div>';
            echo '<div class="carousel-wrap ">';
                echo '<div class="owl-carousel team_carousel">';
                    foreach ($doctors as $doctor) {
                        echo '<div class="item">';
                            echo '<div class="box">';
                                echo '<div class="img-box">';
                                    echo '<img src="' .$doctor['image'] . '" alt="' .$doctor['name'] . '">';
                                echo '</div>';
                                
                                echo '<div class="detail-box">';
                                    echo '<h5>' . $doctor['name'] . '</h5>';
                                    echo '<h6>' .$doctor['educ'] . '</h6>';
                            
                                
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
   '</section>';
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