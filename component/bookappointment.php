<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">



        <form action="./process.php" method="POST">
                    <h4>BOOK <span>APPOINTMENT</span></h4>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name </label>
                            <?php echo generate_input('text', 'patient_name', 'inputPatientName', ''); ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">Doctor's Name</label>
                            <?php echo generate_select('doctor_name', 'inputDoctorName', $doctors, 'Select Doctor'); ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentName">Department's Name</label>
                            <?php echo generate_select('department_name', 'inputDepartmentName', $departments, 'Select Department'); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <?php echo generate_input('number', 'phone', 'inputPhone', 'XXXXXXXXXX'); ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <?php echo generate_input('text', 'symptoms', 'inputSymptoms', ''); ?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date</label>
                            <?php echo generate_date_picker('inputDate', 'appointment_date'); ?>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn">Submit Now</button>
                    </div>
                </form>





        </div>
      </div>
    </div>
  </section>

  
