<?php

// ჰედერის ფუნქცია 
// ავტორი ანი ლომიძე

function ContactsInfo($contacts) {
    for ($i = 0; $i < count($contacts); $i++) {
        echo '<a href="">';
        echo '<i class="fa ' . $contacts[$i]['icon'] . '" aria-hidden="true"></i>';
        echo '<span> ' . $contacts[$i]['text'] . '</span>';
        echo '</a>';
    }
}


function navmenu($menu_nav) {
    $i = 0;
    while ($i < count($menu_nav)) {
        echo '<li class="nav-item ">';
        echo '<a class="nav-link" href="' . $menu_nav[$i]['link'] . '">' . $menu_nav[$i]['name'];
        echo '</a>';
        echo '</li>';
        $i++;
    }
}


function hedbutton($buttons) {
    $i = 0;
    do {
        echo '<a href="' . $buttons[$i]['link'] . '">';
        echo '<i class="fa ' . $buttons[$i]['icon'] . '" aria-hidden="true"></i>';
        echo '<span>' . $buttons[$i]['text'] . '</span>';
        echo '</a>';
        $i++;
    } while ($i < count($buttons));
}


function Searchicon($search_icon) {
    echo '<button class="' . $search_icon['class'] . '" type="' . $search_icon['type'] . '">';
    echo '<i class="fa ' . $search_icon['icon'] . '" aria-hidden="' . $search_icon['aria_hidden'] . '"></i>';
    echo '</button>';
}

// ჰედერის ფუნქცია 
// ავტორი ანი ლომიძე



// სლაიდერი mico ფუნქცია 
// ავტორი ანი ლომიძე
function slaider_niko($slides) {
    $output = '<section class="slider_section">';
    $output .= '<div class="dot_design"><img src="images/dots.png" alt=""></div>';
    $output .= '<div id="customCarousel1" class="carousel slide" data-ride="carousel">';
    $output .= '<div class="carousel-inner">';
    foreach ($slides as $index => $slide) {
        $activeClass = $index === 0 ? 'active' : '';
        $output .= '<div class="carousel-item ' . $activeClass . '">';
        $output .= '<div class="container">';
        $output .= '<div class="row">';
        $output .= '<div class="col-md-6">';
        $output .= '<div class="detail-box">';
        $output .= '<div class="play_btn"><button><i class="fa fa-play" aria-hidden="true"></i></button></div>';
        $output .= '<h1>' . htmlspecialchars($slide['title']) . '<br><span>' . htmlspecialchars($slide['subtitle']) . '</span></h1>';
        $output .= '<p>' . htmlspecialchars($slide['description']) . '</p>';
        $output .= '<a href="#">' . htmlspecialchars($slide['button_text']) . '</a>';
        $output .= '</div></div>';
        $output .= '<div class="col-md-6">';
        $output .= '<div class="img-box"><img src="' . htmlspecialchars($slide['image']) . '" alt=""></div>';
        $output .= '</div></div></div></div>';
    }
    $output .= '</div>';
    $output .= '<div class="carousel_btn-box">';
    $output .= '<a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">';
    $output .= '<img src="images/prev.png" alt=""><span class="sr-only">Previous</span></a>';
    $output .= '<a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">';
    $output .= '<img src="images/next.png" alt=""><span class="sr-only">Next</span></a>';
    $output .= '</div></div></section>';
    return $output;
}

// სლაიდერი mico ფუნქცია 
// ავტორი ანი ლომიძე




// ვიზიტის დაჯავშნის ფუნქცია 
// ავტორი გურამ ლომაძე
function back_button() {
    $url = '';
    switch (true) {
        case isset($_SERVER['HTTP_REFERER']):
            $url = $_SERVER['HTTP_REFERER'];
            break;

        default:
            $url = 'index.php';
            break;
    }
    return $url;
}

function generate_select($name, $id, $options, $placeholder) {
    $html = "<select name='$name' class='form-control wide' id='$id'>";
    $html .= "<option value=''>$placeholder</option>";
    $i = 0;
    while ($i < count($options)) {
        $html .= "<option value='" . htmlspecialchars($options[$i]) . "'>" . htmlspecialchars($options[$i]) . "</option>";
        $i++;
    }
    $html .= "</select>";
    return $html;
}

function generate_input($type, $name, $id, $placeholder, $extra_classes = '') {
    return "<input type='$type' class='form-control $extra_classes' name='$name' id='$id' placeholder='$placeholder'>";
}

function generate_date_picker($id, $name) {
    return "
    <div class='input-group date' id='$id' data-date-format='mm-dd-yyyy'>
        <input type='text' class='form-control' name='$name' readonly>
        <span class='input-group-addon date_icon'>
            <i class='fa fa-calendar' aria-hidden='true'></i>
        </span>
    </div>";
}




function validateForm($data) {
    foreach ($data as $key => $value) {
        if (empty($value)) {
            return false; 
        }
    }
    return true;
}
// ვიზიტის დაჯავშნის ფუნქცია 
// ავტორი გურამ ლომაძე






// ავტორი თამუნა ვეფხვაძე
// ჰოსპიტალის შესახებ 
function display_about_hospital($data) {
    echo '<div class="heading_container">';
    echo '  <h2>' . htmlspecialchars($data["title"]) . ' <span>' . htmlspecialchars($data["highlight"]) . '</span></h2>';
    echo '</div>';
    echo '<p>' . htmlspecialchars($data["description"]) . '</p>';
    echo '<a href="' . htmlspecialchars($data["read_more_link"]) . '">Read More</a>';
}
// ავტორი თამუნა ვეფხვაძე
// ჰოსპიტალის შესახებ 





// ავტორი თამუნა ვეფხვაძე
// ჰოსპიტალური მლურნალობა
function TreatmentContent($MedicalCare) 
{
    foreach($MedicalCare as $HospitalCare){
        echo '<div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="'.$HospitalCare['img'].'" alt="">
          </div>
          <div class="detail-box">
            <h4>
             '.$HospitalCare['title'].'
            </h4>
            <p>
             ' . $HospitalCare['description'] . '
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>';
    }
}
// ავტორი თამუნა ვეფხვაძე
// ჰოსპიტალური მლურნალობა






// ავტორი მართა მოსაშვილი
// ექიმების ჯგუფს ავტოტი 

function team($team) {
    $repeat_count = 4; 
    $team_g = [];

  
    for ($i = 0; $i < $repeat_count; $i++) {
        $team_g = array_merge($team_g, $team);
    }

    foreach ($team_g as $member) {
        echo '<div class="item">';
        echo '<div class="box">';
        echo '<div class="img-box">';
        echo '<img src="' . $member['image'] . '" alt="" />';
        echo '</div>';
        echo '<div class="detail-box">';
        echo '<h5>' . $member['name'] . '</h5>';
        echo '<h6>' . $member['specialty'] . '</h6>';
        echo '<div class="social_box">';
        foreach ($member['social_links'] as $platform => $link) {
            echo '<a href="' . $link . '">';
            echo '<i class="fa fa-' . $platform . '" aria-hidden="true"></i>';
            echo '</a>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}



// კომენტარების სლაიდერი


function display_testimonials($testimonials) {
    $is_active = true; 

    foreach ($testimonials as $testimonial) {
        echo '<div class="carousel-item' . ($is_active ? ' active' : '') . '">';
        echo '  <div class="box">';
        echo '    <div class="client_info">';
        echo '      <div class="client_name">';
        echo '        <h5>' . htmlspecialchars($testimonial['name']) . '</h5>';
        echo '        <h6>' . htmlspecialchars($testimonial['role']) . '</h6>';
        echo '      </div>';
        echo '      <i class="fa fa-quote-left" aria-hidden="true"></i>';
        echo '    </div>';
        echo '    <p>' . htmlspecialchars($testimonial['text']) . '</p>';
        echo '  </div>';
        echo '</div>';
        $is_active = false; 
    }
}
 

// ავტორი მართა მოსაშვილი






// ფუთერის ფუნქციები
// ავტორი ნუცა გოგინაშვილი

// ფუთერის კონტაქტები


function generateContactInfo($data) {
    $html = '<div class="info_contact">';
    for ($i = 0; $i < count($data); $i++) {
        $html .= '<a href="' . htmlspecialchars($data[$i]['link']) . '">';
        $html .= '<i class="fa ' . htmlspecialchars($data[$i]['icon']) . '" aria-hidden="true"></i>';
        $html .= '<span>' . htmlspecialchars($data[$i]['text']) . '</span>';
        $html .= '</a>';
    }
    $html .= '</div>';
    return $html;
}



// ფუთერის აიქონები


function generateSocialLinks($links) {
    $html = '';
    $i = 0;
    while ($i < count($links)) {
        $html .= '<a href="' . htmlspecialchars($links[$i]['link']) . '">';
        $html .= '<i class="fa ' . htmlspecialchars($links[$i]['icon']) . '" aria-hidden="true"></i>';
        $html .= '</a>';
        $i++;
    }
    return $html;
}



// ფუთერის აიქონები

function generateMenuLinks($links) {
    $html = '<div class="info_links_menu">';
    $i = 0;
    do {
        $activeClass = $links[$i]['is_active'] ? 'active' : '';
        $html .= '<a class="' . $activeClass . '" href="' . htmlspecialchars($links[$i]['link']) . '">';
        $html .= htmlspecialchars($links[$i]['text']);
        $html .= '</a>';
        $i++;
    } while ($i < count($links));
    $html .= '</div>';
    return $html;
}


// ფუთერის კონტენტი

function generateLatestPosts($posts) {
    $html = '<div class="info_post">';
    $html .= '<h5>LATEST POSTS</h5>';
    foreach ($posts as $post) {
        $html .= '<div class="post_box">';
        $html .= '<div class="img-box">';
        $html .= '<img src="' . htmlspecialchars($post['img']) . '" alt="">';
        $html .= '</div>';
        $html .= '<p>' . htmlspecialchars($post['text']) . '</p>';
        $html .= '</div>';
    }
    $html .= '</div>';
    return $html;
}


// ფუთერის კონტენტი

function saveEmail($email) {
    $file = 'subscribers.txt';
    $existingEmails = file_get_contents($file);
    $existingEmails .= $email . "\n";
    file_put_contents($file, $existingEmails);
}


function redirectToThankYou() {
    header("Location: thankyou.php");
    exit();
}

// ფუთერის ფუნქციები
// ავტორი ნუცა გოგინაშვილი