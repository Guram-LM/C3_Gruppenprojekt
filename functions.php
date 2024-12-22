<?php

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
//  ჰოსპიტალური მკურნალობა
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



// ფუთერის ფუნქციები
// ავტორი ნუცა გოგინაშვილი

// ფუთერის კონტაქტები


function generateContactInfo($data) {
  $html = '<div class="info_contact">';
  foreach ($data as $item) {
      $html .= '<a href="' . htmlspecialchars($item['link']) . '">';
      $html .= '<i class="fa ' . htmlspecialchars($item['icon']) . '" aria-hidden="true"></i>';
      $html .= '<span>' . htmlspecialchars($item['text']) . '</span>';
      $html .= '</a>';
  }
  $html .= '</div>';
  return $html;
}


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





// ფუთერის აიქონები


function generateSocialLinks($links) {
  $html = '';
  foreach ($links as $link) {
      $html .= '<a href="' . htmlspecialchars($link['link']) . '">';
      $html .= '<i class="fa ' . htmlspecialchars($link['icon']) . '" aria-hidden="true"></i>';
      $html .= '</a>';
  }
  return $html;
}




// ფუთერის აიქონები

function generateMenuLinks($links) {
  $html = '<div class="info_links_menu">';
  foreach ($links as $link) {
      $activeClass = $link['is_active'] ? 'active' : '';
      $html .= '<a class="' . $activeClass . '" href="' . htmlspecialchars($link['link']) . '">';
      $html .= htmlspecialchars($link['text']);
      $html .= '</a>';
  }
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

