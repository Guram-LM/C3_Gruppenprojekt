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





