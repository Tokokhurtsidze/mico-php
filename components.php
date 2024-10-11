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
