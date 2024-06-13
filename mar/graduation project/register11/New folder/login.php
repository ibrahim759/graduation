
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration Page</title>
</head>
<body>
   
    <div class="navbar">

        <ul>
            <li><a href="../home/index.html">الصفحة الرئيسية</a></li>
            <li><a href="../register/!DOCTYPE html.html">تسجيل </a></li>
            <li><a href="#">دخول </a></li>
            <li><a href="../من نحن/index.html"> من نحن؟</a></li>
            <li><a href="../contactUs/index.html">تواصل معنا</a></li>
        </ul>
        <img src="LL.png" class="LL">
    </div>
    <div class="container">
        <h1>تسجيل الدخول</h1> 
        <form action="login_ac.php" method="post">
            <div class="form-group">
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" required placeholder="اسم المستخدم">
            </div>
            <div class="form-group">
                <label for="password">الرقم القومي </label>
                <input type="text" id="national_id" name="national_id" pattern="\d{14}" required placeholder="(14 رقم)">
            </div>

        
                    
            <button type="submit" class="btn">تسجيل</button>
        </form>
        <div class="log">
            <p> هل لديك حساب بالفعل؟<a href="login.html"> إنشاء حساب </a></p>
        </div>
    </div>
</body>
</html>
