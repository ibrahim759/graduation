<?php require_once("header.php"); ?>

<div class="d-flex justify-content-center bg-transparent">
    <div class="col-lg-8 col-sm-12 col-xs-12 bg-transparent">
        <div class="d-flex flex-column justify-content-center align-items-center gap-4 bg-transparent ">
            <div class="card w-100 h-100 bg-transparent">
                <div class="card-header">
                    <h3 class="create-account pr-2"><span class="fa fa-user"></span>تقديم طلبات  </h3>
                </div>
                <div class="card-body">
                    <div id="welcome" class="mt-3 mb-3">
                        <span class="text-primary">مرحبا بك</span>
                    </div>

                    <form action="./php/create_faculty_user.php" method="post" id="add_faculty_user">
                        <!-- Faculty User -->
                        <fieldset>
                            <div class="form-group">
                                <label for="name_arabic" class="required">الأسم باللغة العربية</label>
                                <input type="text" id="name_arabic" name="name_arabic"
                                        oninput="validateArabic(this)" required
                                        class="form-control text-right mr-2 bg-transparent"
                                        placeholder="الأسم باللغة العربية"
                                        style="width: 400px; max-width: 100%;">
                            </div>
                            <div class="form-group">
                                <label for="name_english" class="required"> الاسم باللغة الانجليزية</label>
                                <input type="text" id="name_english" name="name_english"
                                        oninput="validateEnglish(this)" required
                                        class="form-control mr-2 bg-transparent"
                                        placeholder="Name in English"
                                        style="width: 400px; text-align: left; direction: ltr">
                            </div>
                            <div class="form-group">
                                <label for="birthday" class="required"> تاريخ الميلاد</label>
                                <input type="date" id="birthday" name="birthday" required
                                        class="form-control mr-2 bg-transparent "
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="birth_place" class="required">جهة الميلاد</label>
                                <input type="text" id="birth_place" name="birth_place"
                                        oninput="validateAlphabetic(this)" required
                                        class="form-control mr-2 bg-transparent"
                                        placeholder="جهة الميلاد" style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="national_id" class="required">الرقم القومي</label>
                                <input type="text" name="national_id" id="national_id"
                                        oninput="validateIdNumber(this)"
                                        onkeypress="return numbersOnly(event)" maxlength="14"
                                        required="required" class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="national_id_expiry" class="required">تاريخ انتهاء بطاقة الرقم القومي</label>
                                <input type="date" id="national_id_expiry" name="national_id_expiry"
                                        required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="passport_number" class="required">رقم جواز السفر</label>
                                <input type="text" id="passport_number" maxlength="9"
                                        name="passport_number" required="required"
                                        oninput="validatePassportNumber(this)"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="passport_issuing_authority" class="required">جهة اصدار جواز السفر</label>
                                <input type="text" id="passport_issuing_authority"
                                        name="passport_issuing_authority" required="required"
                                        oninput=" validateAlphabetic(this)"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="passport_expiry" class="required">تاريخ انتهاء جواز السفر</label>
                                <input type="date" id="passport_expiry" name="passport_expiry"
                                        required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="address" class="required">عنوان السكن </label>
                                <input type="text" id="address" name="address" required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="doctorate_obtaining_date" class="required">تاريخ الحصول على الدكتوراه </label>
                                <input type="date" id="doctorate_obtaining_date"
                                        name="doctorate_obtaining_date" required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="doctorate_obtaining_destination" class="required">جهة الحصول على الدكتوراه</label>
                                <input type="text" id="doctorate_obtaining_destination"
                                        name="doctorate_obtaining_destination" required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="scientific_degree" class="required">الدرجة العلمية</label>
                                <select style="width: 400px;padding-right:2rem"
                                        id="scientific_degree" name="scientific_degree"
                                        class="form-select form-control bg-transparent">
                                    <option value="استاذ"> استاذ</option>
                                    <option value="استاذ مساعد"> استاذ مساعد</option>
                                    <option value="استاذ مساعد متفرغ">استاذ مساعد متفرغ</option>
                                    <option value="مدرس">مدرس</option>
                                    <option value="مدرس متفرغ"> مدرس متفرغ</option>
                                    <option value="استاذ متفرغ">استاذ متفرغ</option>
                                    <option value="عميد الكلية"> عميد الكلية</option>
                                    <option value="رئيس الجامعة"> رئيس الجامعة</option>
                                    <option value="نائب رئيس الجامعة"> نائب رئيس الجامعة</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="current_degree_appointment_date" class="required">تاريخ التعيين في الدرجة الحالية</label>
                                <input type="date" id="current_degree_appointment_date"
                                        name="current_degree_appointment_date" required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="university" class="required">الجامعة </label>
                                <input type="text" id="university" name="faculty_user_university"
                                        required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="collage" class="required">الكلية </label>
                                <input type="text" id="collage" name="faculty_user_collage"
                                        required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="department" class="required">القسم</label>
                                <input type="text" id="department" name="faculty_user_department"
                                        required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="postal_code" class="required">العنوان البريدي </label>
                                <input type="text" id="postal_code" name="faculty_user_postal_code"
                                        onkeyup="numbersOnly(this)" required="required"
                                        class="form-control mr-2 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" id="phone" name="faculty_user_phone"
                                        oninput="validatePositiveNumber(this)" maxlength="14"
                                        onkeyup="numbersOnly(this)"
                                        class="form-control mr-3 bg-transparent"
                                        placeholder="Enter your Phone Number"
                                        style="width: 400px;text-align:left;direction:ltr">
                            </div>
                            <div class="form-group">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" id="email" name="faculty_user_email" required
                                        class="form-control mr-2 bg-transparent"
                                        placeholder="tasnem@example.com"
                                        style="width: 400px;text-align:left;direction:ltr">
                            </div>
                            <div class="form-group text-center">
                                <button type="button" name="next" class="next faculty-user-btn btn rounded-3 p-1 w-25">التالي</button>
                            </div>
                        </fieldset>

                        <!-- Foreign Host User -->
                        <fieldset>
                            <div class="form-group">
                                <label for="travel_date"> تاريخ السفر </label>
                                <input type="date" id="travel_date" name="travel_date"
                                        class="form-control mr-3 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_duration"> مدة الابتعاث </label>
                                <input type="text" id="scholarship_duration"
                                        name="scholarship_duration"
                                        class="form-control mr-3 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_beginning"> بداية الابتعاث</label>
                                <input type="date" id="scholarship_beginning"
                                        name="scholarship_beginning"
                                        class="form-control mr-3 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="scholarship_end"> نهاية الابتعاث </label>
                                <input type="date" id="scholarship_end" name="scholarship_end"
                                        class="form-control mr-3 bg-transparent"
                                        style="width: 400px;">
                            </div>
                            <div class="form-group">
                                <label for="name"> الأسم </label>
                                <input type="text" id="name" name="name"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="degree"> الدرجة</label>
                                <input type="text" id="degree" name="degree"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="country"> الدولة </label>
                                <input type="text" id="country" name="country"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="city"> المدينة</label>
                                <input type="text" id="city" name="city"
                                        class="form-control mr-3 bg-transparent"
                                        style="width: 370px;">
                            </div>
                            <div class="form-group">
                                <label for="university"> الجامعة </label>
                                <input type="text" id="university" name="university"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="collage"> الكلية </label>
                                <input type="text" id="collage" name="collage"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="department"> القسم </label>
                                <input type="text" id="department" name="department"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="postal_code"> العنوان البريدي </label>
                                <input type="text" id="postal_code" name="postal_code" maxlength="5"
                                        class="form-control mr-3 bg-transparent"
                                        style="width:370px;">
                            </div>
                            <div class="form-group">
                                <label for="phone"> الهاتف </label>
                                <input type="text" id="phone" name="phone"
                                        class="form-control mr-3 bg-transparent"
                                        onkeyup="numbersOnly(this)"
                                        placeholder="Enter the phone number"
                                        style="width:370px;text-align:left;direction:ltr">
                            </div>
                            <div class="form-group">
                                <label for="email"> البريد الإلكتروني </label>
                                <input type="text" id="email" name="email"
                                        class="form-control mr-3 bg-transparent"
                                        placeholder="erick@example.com"
                                        style="width:370px;text-align:left;direction:ltr">
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
                                <input type="date" id="travel_from_date" name="travel_from_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="travel_to_date">تاريخ السفر إلى</label>
                                <input type="date" id="travel_to_date" name="travel_to_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="months_num">عدد الشهور </label>
                                <input type="number" id="months_num" name="months_num" placeholder="عدد الشهور">
                            </div>
                            <div class="form-group category">
                                <label for="south_valley_university_expense">من جامعة جنوب الوادي</label>
                                <select id="south_valley_university_expense" name="south_valley_university_expense">
                                    <option value="تذاكر">تذاكر</option>
                                    <option value="إقامة">إقامة</option>
                                    <option value="إعاشة">إعاشة</option>
                                    <option value="راتب شهري">راتب شهري</option>
                                </select>
                            </div>
                            <div class="form-group category">
                                <label for="foreign_university_expense">من الجامعة الأجنبية التي يدرس فيها</label>
                                <select id="foreign_university_expense" name="foreign_university_expense">
                                    <option value="تذاكر">تذاكر</option>
                                    <option value="إقامة">إقامة</option>
                                    <option value="إعاشة">إعاشة</option>
                                    <option value="راتب شهري">راتب شهري</option>
                                </select>
                            </div>
                            <div class="form-group category">
                                <label for="private_expense">على نفقته الخاصة</label>
                                <select id="private_expense" name="private_expense">
                                    <option value="تذاكر">تذاكر</option>
                                    <option value="إقامة">إقامة</option>
                                    <option value="إعاشة">إعاشة</option>
                                    <option value="راتب شهري">راتب شهري</option>
                                </select>
                            </div>
                            <div class="form-group category">
                                <label for="ministry_expense">على نفقة وزارة التعليم العالي</label>
                                <select id="ministry_expense" name="ministry_expense">
                                    <option value="تذاكر">تذاكر</option>
                                    <option value="إقامة">إقامة</option>
                                    <option value="إعاشة">إعاشة</option>
                                    <option value="راتب شهري">راتب شهري</option>
                                </select>
                            </div>
                            <div class="form-group category">
                                <label for="other_expense">على نفقة جهة أخرى</label>
                                <select id="other_expense" name="other_expense">
                                    <option value="تذاكر">تذاكر</option>
                                    <option value="إقامة">إقامة</option>
                                    <option value="إعاشة">إعاشة</option>
                                    <option value="راتب شهري">راتب شهري</option>
                                </select>
                            </div>
                            <div class="form-group input-box">
                                <label for="ministry_approval_date">تاريخ موافقة وزارة التعليم العالي على الترشيح </label>
                                <input type="date" id="ministry_approval_date" name="ministry_approval_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="committee_approval_date">تاريخ اعتماد اللجنة التنفيذية للبعثات على السفر</label>
                                <input type="date" id="committee_approval_date" name="committee_approval_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="public_administration_approval_date">تاريخ موافقة الإدارة العامة للاستطلاع والمعلومات على السفر </label>
                                <input type="date" id="public_administration_approval_date" name="public_administration_approval_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="last_travel_date">تاريخ آخر سفر لعضو هيئة التدريس </label>
                                <input type="date" id="last_travel_date" name="last_travel_date">
                            </div>
                            <div class="form-group input-box">
                                <label for="last_contribution">قيمة آخر مساهمة تم الحصول عليها </label>
                                <input type="number" id="last_contribution" name="last_contribution" placeholder="القيمة">
                            </div>
                            <div class="form-group category">
                                <label for="currency">العملة</label>
                                <select id="currency" name="currency">
                                    <option value="جنيه">جنيه</option>
                                    <option value="دولار">دولار</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                            </div>
                            <div class="form-group d-flex justify-content-center align-items-center gap-3 text-center text-white bg-transparent">
                                <button type="button" name="previous" class="previous faculty-user-btn btn rounded-3 p-1 w-25">رجوع</button>
                                <button type="submit" name="submit" class="submit faculty-user-btn btn rounded-3 p-1 w-25">إرسال</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
<?php require_once("footer.php"); ?>