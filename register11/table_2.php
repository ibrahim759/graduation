<?php
include 'config.php';

if (isset($_POST['submit'])) {
    // معالجة بيانات النموذج
    $formFields = ['offer1', 'offer2', 'offer3', 'offer4', 'offer5', 'offer6', 'Sessionnumber', 'SessionDate', 'name'];
    $formData = [];

    foreach ($formFields as $field) {
        $formData[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }

    $status = calculateStatus($formData);

    // استخدام prepared statement لإدخال البيانات في قاعدة البيانات
    $insertQuery = mysqli_prepare($conn, "INSERT INTO `page2` (offer1, offer2, offer3, offer4, offer5, offer6, Sessionnumber, SessionDate, name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($insertQuery, 'sssssssss', ...array_values($formData));

    if (!mysqli_stmt_execute($insertQuery)) {
        die('Error in INSERT query: ' . mysqli_error($conn));
    }

    // تحديث حالة الطلب في قاعدة البيانات
    $updateQuery = "UPDATE page2 SET status = '$status' WHERE id = 1";

    if (!mysqli_query($conn, $updateQuery)) {
        die('Error in UPDATE query: ' . mysqli_error($conn));
    }

    // إرسال إشعار
    sendNotification($formData['name'], $status);

    // إعادة توجيه المستخدم إلى الصفحة التالية
    header('Location: table_2.php');
    exit;
}

// دالة لحساب حالة الطلب
function calculateStatus($formData) {
    if ($formData['offer1'] == 'yes' && $formData['offer2'] == 'yes' && $formData['offer3'] == 'yes' && $formData['offer4'] == 'yes') {
        return 'approved';
    } elseif ($formData['offer5'] == 'yes') {
        return 'resubmit';
    } elseif ($formData['offer6'] == 'yes') {
        return 'rejected';
    } else {
        return 'pending';
    }
}

// دالة لإرسال الإشعار
function sendNotification($name, $status) {
    // يمكنك استخدام وسائل الإعلام المتاحة مثل البريد الإلكتروني أو رسالة النص
    // هنا يمثل الكود نموذجًا بسيطًا لإرسال بريد إلكتروني
    $to = 'recipient@example.com';
    $subject = 'Notification: Application Status Changed';
    $message = "Dear $name,\n\nYour application status has been changed to $status.\n\nBest regards,\nYour Organization";

    mail($to, $subject, $message);
}

echo json_encode(['success' => true]);
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <title>طلب سفر بحثي ما بعد الدكتوراه</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h2> مجلس العلاقات الثقافية </h2>
    </header>
    <main>
        <form action="table_2.php" method="post" id="applicationForm">
            <table>
                <thead>
                    <nav>
                        <ul>
                            <li><a href="#">الصفحة الرئيسية</a></li>
                            <li><a href="#">من نحن</a></li>
                            <li><a href="#">تواصل معنا</a></li>
                        </ul>
                    </nav>
                    <tr>
                        <th>استيفاء الشروط</th>
                        <th>نعم</th>
                        <th>لا</th>
                    </tr>
                </thead>
                <tbody>
                    <img src="LL.png" alt="LL">
                    
                    <tr>
                        <td><a href="https://ibb.co/Cs83YCf" target="_blank">جميع الوثائق المقدمة من مقدم الطلب مستوفاه و صحيحه</a></td>
                        <td><input type="radio" name="offer1" value="yes" required></td>
                        <td><input type="radio" name="offer1" value="no" required></td>
                    </tr>


                    </div>
                    <tr>
                        <td><a href="https://ibb.co/Cs83YCf">استوفى مقدم الطلب شروط سفره فى مهمه علميه لاجراء ابحاث ما بعد الدكتوراه</a></td>
                        <td><input type="radio" name="offer2" value="yes" required></td>
                        <td><input type="radio" name="offer2" value="no" required></td>
                    </tr>
                    <tr>
                        <td>مقدم الطلب له حق فى سفره فى مهمه علميه لاجراء ابحاث مابعد الدكتوراه </td>
                        <td><input type="radio" name="offer3" value="yes" required></td>
                        <td><input type="radio" name="offer3" value="no" required></td>
                    </tr>
                    <tr>
                        <td>توجد موافقة مجلس القسم </td>
                        <td><input type="radio" name="offer4" value="yes" required></td>
                        <td><input type="radio" name="offer4" value="no" required></td>
                    </tr>
                    <tr>
                        <td>تعاد مره اخرى الى رئيس القسم لاستيفاء المتطلبات</td>
                        <td><input type="radio" name="offer5" value="yes" required></td>
                        <td><input type="radio" name="offer5" value="no" required></td>
                    </tr>
                    <tr>
                        <td>تم رفض الطلب لعدم استيفاء الشروط</td required>
                        <td><input type="radio" name="offer6" value="yes" required></td>
                        <td><input type="radio" name="offer6" value="no" required></td>
                    </tr>
                    <tr>
                        <th rowspan="4" dir="rtl"> وافق مجلس العلاقات الثقافية</th>
                        <td>
                            <label>رقم الجلسه</label>
                            <input type="number" name="Sessionnumber" placeholder="رقم السجلة" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>التاريخ</label>
                            <input type="date" name="SessionDate" placeholder="التاريخ" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>اسم وكيل الكليه لشئون الدراسات العليا والبحوث</label>
                            <input type="text" name="name" placeholder="اسم وكيل الكليه لشئون الدراسات العليا والبحوث"
                                required>
                        </td>
                    </tr>
                  
                    <tr>
                        <td>
                            <label>تحال الى عميد الكليه</label>
                            <button class="btn-submit" type="submit" name="submit">Submit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("applicationForm");
        var referralSelect = document.getElementById("referral");
        var notificationsIcon = document.getElementById("notificationsIcon");
        var notificationsDropdown = document.getElementById("notificationsDropdown");

        referralSelect.addEventListener("change", function () {
            var selectedOption = referralSelect.value;
            var action = "";

            if (selectedOption === "department") {
                action = "index_form.php"; // قم بتغيير هذا إلى الصفحة الفعلية للقسم
            } else if (selectedOption === "cultural_council") {
                action = "cultural_council.php"; // قم بتغيير هذا إلى الصفحة الفعلية للمجلس الثقافي
            }
            // قم بإضافة المزيد من الشروط حسب الحاجة

            form.action = action;

            // غيّر لون أيقونة الإشعارات إلى الأحمر عند إرسال الطلب
            notificationsIcon.classList.add("red");

            // أضف طلب إشعار جديد إلى Dropdown
            addNotificationToDropdown("تم إرسال طلب جديد");
        });

        // إضافة إشعارات لـ Dropdown
        function addNotificationToDropdown(message) {
            var notificationItem = document.createElement("div");
            notificationItem.innerHTML = message;
            notificationsDropdown.appendChild(notificationItem);
        }

        // عرض قائمة الإشعارات
        function showNotificationsDropdown() {
            notificationsDropdown.style.display = "block";
        }
    });
</script>

</html>
