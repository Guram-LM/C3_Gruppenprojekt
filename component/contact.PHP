
<!-- კონტაქტის ველი 
    ავტორი გურამ ლომაძე -->

  <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = validateForm($_POST);

    // Switch ბლოკი 
    switch (true) {
        case empty($errors): 
            
            header('Location: data.php?name=' . urlencode($_POST['name']) . '&email=' . urlencode($_POST['email']) . '&phone=' . urlencode($_POST['phone']) . '&message=' . urlencode($_POST['message']));
            exit();
        default: 
            include "./component/form_error.php"; 
            break;
    }
}
?>
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>Get In Touch</h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                    <form action="proces2.php" method="POST">
    <div>
        <input type="text" name="fullname" placeholder="Full Name">
    </div>
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>
    <div>
        <input type="text" name="phone" placeholder="Phone Number">
    </div>
    <div>
        <input type="text" name="message" placeholder="Message">
    </div>
    <div class="btn_box">
        <button type="submit">SEND</button>
    </div>
</form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- კონტაქტის ველი 
    ავტორი გურამ ლომაძე -->
