<?php
function doctors($doctors, $socials) {
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
};