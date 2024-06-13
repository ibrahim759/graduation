<?php
global $conn;
include 'database/db_connection.php';

if (isset($_GET['id'])) {
    $faculty_user_id = $_GET['id'];

    $faculty_user = $conn->query("select * from faculty_users where id = '$faculty_user_id'");
    $faculty_user = $faculty_user->fetch_assoc();

    if ($faculty_user['id'] === $faculty_user_id) {
        $foreign_host_data = $conn->query("select * from foreign_host_users where foreign_host_faculty_user = '$faculty_user_id'");
        $foreign_host_data = $foreign_host_data->fetch_assoc();

        $travel_data = $conn->query("select * from faculty_user_travel_data where faculty_user = '$faculty_user_id'");
        $travel_data = $travel_data->fetch_assoc();
    }
    else {
        ob_start();
        header("location: /scientific_awarding_platform/404.php");
        ob_end_flush();
        die();
    }
}
else {
    ob_start();
    header("location: /scientific_awarding_platform/404.php");
    ob_end_flush();
    die();
}

require_once("header.php");
?>


<div class="d-flex justify-content-center bg-transparent">
    <div class="col-lg-8 col-sm-12 col-xs-12 bg-transparent">
        <div class="d-flex flex-column justify-content-center align-items-center gap-4 bg-transparent ">
            <div class="card w-100 h-100 bg-transparent">
                <div class="card-header">
                    <h3 class="create-account pr-2"><span class="fa fa-user"></span>بيانات عضو هيئة التدريس </h3>
                </div>
                <div class="card-body">
                    <div id="welcome" class="mt-3 mb-3">
                        <span class="text-primary">مرحبا بك</span>
                    </div>

                    <form id="view_faculty_user">
                        <!-- Faculty User -->
                        <fieldset>
                            <div class="form-group">
                                <label for="name_arabic">الأسم باللغة العربية</label>
                                <input type="text" id="name_arabic" class="form-control" readonly value="<?php echo $faculty_user['name_arabic'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="name_english"> الاسم باللغة الانجليزية</label>
                                <input type="text" id="name_english" class="form-control" dir="ltr" readonly value="<?php echo $faculty_user['name_english'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="birthday"> تاريخ الميلاد</label>
                                <input type="text" id="birthday" class="form-control" readonly value="<?php echo $faculty_user['birthday'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="birth_place">جهة الميلاد</label>
                                <input type="text" id="birth_place" class="form-control" readonly value="<?php echo $faculty_user['birth_place'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="national_id">الرقم القومي</label>
                                <input type="text" id="national_id" class="form-control" readonly value="<?php echo $faculty_user['national_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="national_id_expiry">تاريخ انتهاء بطاقة الرقم القومي</label>
                                <input type="text" id="national_id_expiry" class="form-control" readonly value="<?php echo $faculty_user['national_id_expiry'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="passport_number">رقم جواز السفر</label>
                                <input type="text" id="passport_number" class="form-control" dir="ltr" readonly value="<?php echo $faculty_user['passport_number'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="passport_issuing_authority">جهة اصدار جواز السفر</label>
                                <input type="text" id="passport_issuing_authority" class="form-control" readonly value="<?php echo $faculty_user['passport_issuing_authority'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="passport_expiry">تاريخ انتهاء جواز السفر</label>
                                <input type="text" id="passport_expiry" class="form-control" readonly value="<?php echo $faculty_user['passport_expiry'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="address">عنوان السكن </label>
                                <input type="text" id="address" class="form-control" readonly value="<?php echo $faculty_user['address'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="doctorate_obtaining_date">تاريخ الحصول على الدكتوراه </label>
                                <input type="text" id="doctorate_obtaining_date" class="form-control" readonly value="<?php echo $faculty_user['doctorate_obtaining_date'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="doctorate_obtaining_destination">جهة الحصول على الدكتوراه</label>
                                <input type="text" id="doctorate_obtaining_destination" class="form-control" readonly value="<?php echo $faculty_user['doctorate_obtaining_destination'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="scientific_degree">الدرجة العلمية</label>
                                <input type="text" id="scientific_degree" class="form-control" readonly value="<?php echo $faculty_user['scientific_degree'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="current_degree_appointment_date">تاريخ التعيين في الدرجة الحالية</label>
                                <input type="text" id="current_degree_appointment_date" class="form-control" readonly value="<?php echo $faculty_user['current_degree_appointment_date'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="university">الجامعة </label>
                                <input type="text" id="university" class="form-control" readonly value="<?php echo $faculty_user['university'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="collage">الكلية </label>
                                <input type="text" id="collage" class="form-control" readonly value="<?php echo $faculty_user['collage'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="department">القسم</label>
                                <input type="text" id="department" class="form-control" readonly value="<?php echo $faculty_user['department'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="postal_code">العنوان البريدي </label>
                                <input type="text" id="postal_code" class="form-control" readonly value="<?php echo $faculty_user['postal_code'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" id="phone" class="form-control" dir="ltr" readonly value="<?php echo $faculty_user['phone'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="text" id="email" class="form-control" dir="ltr" readonly value="<?php echo $faculty_user['email'] ?>">
                            </div>
                            <div class="form-group text-center">
                                <button type="button" name="next" class="next faculty-user-btn btn rounded-3 p-1 w-25">التالي</button>
                            </div>
                        </fieldset>

                        <!-- Foreign Host User -->
                        <fieldset>
                            <div class="form-group">
                                <label for="travel_date"> تاريخ السفر </label>
                                <input type="text" id="travel_date" class="form-control" readonly value="<?php echo $foreign_host_data['travel_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_duration"> مدة الابتعاث </label>
                                <input type="text" id="scholarship_duration" class="form-control" readonly value="<?php echo $foreign_host_data['scholarship_duration'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_beginning"> بداية الابتعاث</label>
                                <input type="text" id="scholarship_beginning" class="form-control" readonly value="<?php echo $foreign_host_data['scholarship_beginning'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_end"> نهاية الابتعاث </label>
                                <input type="text" id="scholarship_end" class="form-control" readonly value="<?php echo $foreign_host_data['scholarship_end'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="name"> الأسم </label>
                                <input type="text" id="name" class="form-control" readonly value="<?php echo $foreign_host_data['name'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="degree"> الدرجة</label>
                                <input type="text" id="degree" class="form-control" readonly value="<?php echo $foreign_host_data['degree'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="country"> الدولة </label>
                                <input type="text" id="country" class="form-control" readonly value="<?php echo $foreign_host_data['country'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="city"> المدينة</label>
                                <input type="text" id="city" class="form-control" readonly value="<?php echo $foreign_host_data['city'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="university"> الجامعة </label>
                                <input type="text" id="university" class="form-control" readonly value="<?php echo $foreign_host_data['university'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="collage"> الكلية </label>
                                <input type="text" id="collage" class="form-control" readonly value="<?php echo $foreign_host_data['collage'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="department"> القسم </label>
                                <input type="text" id="department" class="form-control" readonly value="<?php echo $foreign_host_data['department'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="postal_code"> العنوان البريدي </label>
                                <input type="text" id="postal_code" class="form-control" readonly value="<?php echo $foreign_host_data['postal_code'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone"> الهاتف </label>
                                <input type="text" id="phone" class="form-control" dir="ltr" readonly value="<?php echo $foreign_host_data['phone'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group">
                                <label for="email"> البريد الإلكتروني </label>
                                <input type="text" id="email" class="form-control" dir="ltr" readonly value="<?php echo $foreign_host_data['email'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group d-flex justify-content-center align-items-center gap-3 text-center text-white bg-transparent">
                                <button type="button" name="previous" class="previous faculty-user-btn btn rounded-3 p-1 w-25">رجوع</button>
                                <button type="button" name="next" class="next faculty-user-btn btn rounded-3 p-1 w-25">التالي</button>
                            </div>
                        </fieldset>

                        <!-- Faculty user travel data -->
                        <fieldset>
                            <div class="form-group input-box">
                                <label for="travel_from_date">تاريخ السفر من</label>
                                <input type="text" id="travel_from_date" class="form-control" readonly value="<?php echo $travel_data['travel_from_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="travel_to_date">تاريخ السفر إلى</label>
                                <input type="text" id="travel_to_date" class="form-control" readonly value="<?php echo $travel_data['travel_to_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="months_num">عدد الشهور </label>
                                <input type="text" id="months_num" class="form-control" readonly value="<?php echo $travel_data['months_num'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="south_valley_university_expense">من جامعة جنوب الوادي</label>
                                <input type="text" id="south_valley_university_expense" class="form-control" readonly value="<?php echo $travel_data['south_valley_university_expense'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="foreign_university_expense">من الجامعة الأجنبية التي يدرس فيها</label>
                                <input type="text" id="foreign_university_expense" class="form-control" readonly value="<?php echo $travel_data['foreign_university_expense'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="private_expense">على نفقته الخاصة</label>
                                <input type="text" id="private_expense" class="form-control" readonly value="<?php echo $travel_data['private_expense'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="ministry_expense">على نفقة وزارة التعليم العالي</label>
                                <input type="text" id="ministry_expense" class="form-control" readonly value="<?php echo $travel_data['ministry_expense'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="other_expense">على نفقة جهة أخرى</label>
                                <input type="text" id="other_expense" class="form-control" readonly value="<?php echo $travel_data['other_expense'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="ministry_approval_date">تاريخ موافقة وزارة التعليم العالي على الترشيح </label>
                                <input type="text" id="ministry_approval_date" class="form-control" readonly value="<?php echo $travel_data['ministry_approval_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="committee_approval_date">تاريخ اعتماد اللجنة التنفيذية للبعثات على السفر</label>
                                <input type="text" id="committee_approval_date" class="form-control" readonly value="<?php echo $travel_data['committee_approval_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="public_administration_approval_date">تاريخ موافقة الإدارة العامة للاستطلاع والمعلومات على السفر </label>
                                <input type="text" id="public_administration_approval_date" class="form-control" readonly value="<?php echo $travel_data['public_administration_approval_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="last_travel_date">تاريخ آخر سفر لعضو هيئة التدريس </label>
                                <input type="text" id="last_travel_date" class="form-control" readonly value="<?php echo $travel_data['last_travel_date'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="last_contribution">قيمة آخر مساهمة تم الحصول عليها </label>
                                <input type="text" id="last_contribution" class="form-control" readonly value="<?php echo $travel_data['last_contribution'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group input-box">
                                <label for="currency">العملة</label>
                                <input type="text" id="currency" class="form-control" readonly value="<?php echo $travel_data['currency'] ?? "لم يتم إدخال بيانات" ?>">
                            </div>
                            <div class="form-group text-center">
                                <button type="button" name="previous" class="previous faculty-user-btn btn rounded-3 p-1 w-25">رجوع</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>