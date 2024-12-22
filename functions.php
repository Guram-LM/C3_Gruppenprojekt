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
