<?php
function a($value, $link, $class = '') {
    echo "<a href='$link' class='$class'>" . $value . '</a>'; 
};



function img($src) {
    echo '<img src="' . $src . '" alt="Image">';
    return $src;
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
    echo '                        <a href="">';
    i('', 'fa fa-user', 'true');
    span('Login');
    echo '                        </a>'; 
    echo '                        <a href="">';
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
a('Home', 'index.php', 'active'); 

foreach ($footers1 as $footer1) {
    a($footer1['name'], $footer1['link'], '');
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