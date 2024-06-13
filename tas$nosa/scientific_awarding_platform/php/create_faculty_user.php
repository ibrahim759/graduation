<?php

global $conn;
include "../database/db_connection.php";

# For marks filling
echo "
<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
  <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
  </symbol>
  <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
  </symbol>
</svg>
";

if (isset($_POST['submit'])) {

    $conn->begin_transaction();

    $name_arabic = htmlspecialchars($_POST['name_arabic']);
    $name_english = htmlspecialchars($_POST['name_english']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $birth_place = htmlspecialchars($_POST['birth_place']);
    $national_id = htmlspecialchars($_POST['national_id']);
    $national_id_expiry = htmlspecialchars($_POST['national_id_expiry']);
    $passport_number = htmlspecialchars($_POST['passport_number']);
    $passport_issuing_authority = htmlspecialchars($_POST['passport_issuing_authority']);
    $passport_expiry = htmlspecialchars($_POST['passport_expiry']);
    $address = htmlspecialchars($_POST['address']);
    $doctorate_obtaining_date = htmlspecialchars($_POST['doctorate_obtaining_date']);
    $doctorate_obtaining_destination = htmlspecialchars($_POST['doctorate_obtaining_destination']);
    $scientific_degree = htmlspecialchars($_POST['scientific_degree']);
    $current_degree_appointment_date = htmlspecialchars($_POST['current_degree_appointment_date']);
    $faculty_user_university = htmlspecialchars($_POST['faculty_user_university']);
    $faculty_user_collage = htmlspecialchars($_POST['faculty_user_collage']);
    $faculty_user_department = htmlspecialchars($_POST['faculty_user_department']);
    $faculty_user_postal_code = htmlspecialchars($_POST['faculty_user_postal_code']);
    $faculty_user_phone = htmlspecialchars($_POST['faculty_user_phone']);
    $faculty_user_email = htmlspecialchars($_POST['faculty_user_email']);

    $faculty_user_row = $conn->query("select id from faculty_users where national_id = '$national_id' or passport_number = '$passport_number' or email = '$faculty_user_email'");
    
    $same_faculty_user = $faculty_user_row->fetch_assoc();
    
    if ((!empty($national_id) || !empty($passport_number) || !empty($email)) && (isset($same_faculty_user['national_id']) || isset($same_faculty_user['passport_number']) || isset($same_faculty_user['email']))) {
        echo "
        <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <div style='display: flex; justify-content: center; align-items: center; gap: 1rem; width: fit-content; margin-block: 3rem; padding: 1.5rem; color: #664d03; background-color: #fff3cd; border-color: #ffecb5; border-radius: 10px;'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                    <h3 style='margin: 0;'>Sorry, This user already exists.</h3>
                </div>
            </div>
            <button class='btn btn-secondary' onclick='history.back()'>Return Back</a>
        </div>
        ";
    
        exit;
    }
    
    $create_faculty_user = $conn->query("insert into faculty_users (name_arabic, name_english, birthday, birth_place, national_id, national_id_expiry, passport_number, passport_issuing_authority, passport_expiry, address, doctorate_obtaining_date, doctorate_obtaining_destination, scientific_degree, current_degree_appointment_date, university, collage, department, postal_code, phone, email) values ('$name_arabic', '$name_english', '$birthday', '$birth_place', '$national_id', '$national_id_expiry', '$passport_number', '$passport_issuing_authority', '$passport_expiry', '$address', '$doctorate_obtaining_date', '$doctorate_obtaining_destination', '$scientific_degree', '$current_degree_appointment_date', '$faculty_user_university', '$faculty_user_collage', '$faculty_user_department', '$faculty_user_postal_code', '$faculty_user_phone', '$faculty_user_email')");

    if (!$create_faculty_user) {
        echo "
        <div style='display: flex; justify-content: center; align-items: center; gap: 1rem; position: absolute; left: 50%; transform: translateX(-50%); width: fit-content; margin-top: 3rem; padding: 1.5rem; color: #842029; background-color: #f8d7da; border-color: #f5c2c7; border-radius: 10px;'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>
                <h3 style='margin: 0;'>Error: $conn->error</h3>
            </div>
        </div>
        ";

        $conn->rollback();

        exit;
    }

    $faculty_user_id = $conn->insert_id;

    $travel_date = htmlspecialchars($_POST['travel_date']);
    $scholarship_duration = htmlspecialchars($_POST['scholarship_duration']);
    $scholarship_beginning = htmlspecialchars($_POST['scholarship_beginning']);
    $scholarship_end = htmlspecialchars($_POST['scholarship_end']);
    $name = htmlspecialchars($_POST['name']);
    $degree = htmlspecialchars($_POST['degree']);
    $country = htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $university = htmlspecialchars($_POST['university']);
    $collage = htmlspecialchars($_POST['collage']);
    $department = htmlspecialchars($_POST['department']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($travel_date) && !empty($scholarship_duration) && !empty($scholarship_beginning) && !empty($scholarship_end) && !empty($name) && !empty($degree) && !empty($country) && !empty($city) && !empty($university) && !empty($collage) && !empty($department) && !empty($postal_code) && !empty($phone) && !empty($email)) {

        $foreign_host_row = $conn->query("select id from foreign_host_users where email = '$email'");
        $same_email = $foreign_host_row->fetch_assoc();

        if (!empty($same_email) && isset($same_email['email'])) {
            echo "
            <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
                <div style='display: flex; justify-content: center; align-items: center; gap: 1rem; width: fit-content; margin-block: 3rem; padding: 1.5rem; color: #664d03; background-color: #fff3cd; border-color: #ffecb5; border-radius: 10px;'>
                    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                    <div>
                        <h3 style='margin: 0;'>Sorry, This foreign host user already exists.</h3>
                    </div>
                </div>
                <button class='btn btn-secondary' onclick='history.back()'>Return Back</a>
            </div>
            ";

            exit;
        } 
        
        $create_foreign_host_user = $conn->query("insert into foreign_host_users (travel_date, scholarship_duration, scholarship_beginning, scholarship_end, name, degree, country, city, university, collage, department, postal_code, phone, email, foreign_host_faculty_user) values ('$travel_date', '$scholarship_duration', '$scholarship_beginning', '$scholarship_end', '$name', '$degree', '$country', '$city', '$university', '$collage', '$department', '$postal_code', '$phone', '$email', '$faculty_user_id')");

        if (!$create_foreign_host_user) {
            echo "
            <div style='display: flex; justify-content: center; align-items: center; gap: 1rem; position: absolute; left: 50%; transform: translateX(-50%); width: fit-content; margin-top: 3rem; padding: 1.5rem; color: #842029; background-color: #f8d7da; border-color: #f5c2c7; border-radius: 10px;'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                    <h3 style='margin: 0;'>Error: $conn->error</h3>
                </div>
            </div>
            ";

            $conn->rollback();

            exit;
        }

        $conn->commit();
    }

    $travel_from_date = htmlspecialchars($_POST['travel_from_date']);
    $travel_to_date = htmlspecialchars($_POST['travel_to_date']);
    $months_num = htmlspecialchars($_POST['months_num']);
    $south_valley_university_expense = htmlspecialchars($_POST['south_valley_university_expense']);
    $foreign_university_expense = htmlspecialchars($_POST['foreign_university_expense']);
    $private_expense = htmlspecialchars($_POST['private_expense']);
    $ministry_expense = htmlspecialchars($_POST['ministry_expense']);
    $other_expense = htmlspecialchars($_POST['other_expense']);
    $ministry_approval_date = htmlspecialchars($_POST['ministry_approval_date']);
    $committee_approval_date = htmlspecialchars($_POST['committee_approval_date']);
    $public_administration_approval_date = htmlspecialchars($_POST['public_administration_approval_date']);
    $last_travel_date = htmlspecialchars($_POST['last_travel_date']);
    $last_contribution = htmlspecialchars($_POST['last_contribution']);
    $currency = htmlspecialchars($_POST['currency']);

    if (!empty($travel_from_date) && !empty($travel_to_date) && !empty($months_num) && !empty($south_valley_university_expense) && !empty($foreign_university_expense) && !empty($private_expense) && !empty($ministry_expense) && !empty($other_expense) && !empty($ministry_approval_date) && !empty($committee_approval_date) && !empty($public_administration_approval_date) && !empty($last_travel_date) && !empty($last_contribution) && !empty($currency)) {

        $create_faculty_user_travel_data = $conn->query("insert into faculty_user_travel_data (travel_from_date, travel_to_date, months_num, south_valley_university_expense, foreign_university_expense, private_expense, ministry_expense, other_expense, ministry_approval_date, committee_approval_date, public_administration_approval_date, last_travel_date, last_contribution, currency, faculty_user) values ('$travel_from_date', '$travel_to_date', '$months_num', '$south_valley_university_expense', '$foreign_university_expense', '$private_expense', '$ministry_expense', '$other_expense', '$ministry_approval_date', '$committee_approval_date', '$public_administration_approval_date', '$last_travel_date', '$last_contribution', '$currency', '$faculty_user_id')");

        if (!$create_faculty_user_travel_data) {
            echo "
            <div style='display: flex; justify-content: center; align-items: center; gap: 1rem; position: absolute; left: 50%; transform: translateX(-50%); width: fit-content; margin-top: 3rem; padding: 1.5rem; color: #842029; background-color: #f8d7da; border-color: #f5c2c7; border-radius: 10px;'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                    <h3 style='margin: 0;'>Error: $conn->error</h3>
                </div>
            </div>
            ";

            $conn->rollback();

            exit;
        }

        $conn->commit();
    }

    $conn->commit();

    $conn->close();

    echo "
    <div style='display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 3rem; position: absolute; left: 50%; transform: translateX(-50%); margin-top: 3rem;'>
        <div style='display: flex; justify-content: center; align-items: center; gap: 1rem;  width: fit-content; padding: 1.5rem; color: #0f5132; background-color: #d1e7dd; border-color: #badbcc; border-radius: 10px;'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div>
                <h3 style='margin: 0;'>User has been added successfully.</h3>
            </div>
        </div>
        <h2 style='width: fit-content; margin: 0; padding: 1rem 1.5rem; font-size: 25px; font-weight: bolder; color: #116618; background: #66f564; border: 1px solid transparent; border-radius: 50%;'>3</h2>
        <script defer type='text/javascript'>
            let h2 = document.querySelector('h2');
            function countDown(id) {
            h2.innerHTML -= '1';
            if (h2.innerHTML === '0') {
                clearInterval(id);
                history.back();
            }
            }
            setInterval(countDown, 1000);
        </script>
    </div>
    ";
}
