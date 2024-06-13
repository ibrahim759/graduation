<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <img src="LL.jpg" class="LL">
            <ul>
                <li><a href="#">تواصل معنا</a></li>
                <li><a href="#"> من نحن؟</a></li>
                <li><a href="#">دخول </a></li>
                <li><a href="#">تسجيل </a></li>
                <li><a href="#">الصفحة الرئيسية</a></li>
            </ul>
        </div>
        <section>
            <div class="section-header">
                <div class="container">
                    <h2>تواصل معنا</h2>
                    <p>يمكنك التواصل مع فريقنا من الخبراء للحصول على دعم فني واستشارات أكاديمية. ارسل استفسارك إلينا لتعزيز رؤيتك البحثية والمساهمة في التقدم العلمي ابدأ رحلتك البحثية اليوم</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>العنوان</h4>
                                <p> جامعه الفيوم<br/> مبني كلية حاسبات ومعلومات</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>موبايل</h4>
                                <p>01001801474</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>ايميل</h4>
                                <p>example@email.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" method="post" role="form">
                            <h2>ارسل استفسارك</h2>
                            <div class="input-box">
                                <input type="text" required="true" name="fullname">
                                <span> الاسم بالكامل</span>
                            </div>
                            <div class="input-box">
                                <input type="email" required="true" name="email">
                                <span>الايميل</span>
                            </div>
                            <div class="input-box">
                                <textarea type="text" required="true" name="message"></textarea>
                                <span>اكتب رسالتك</span>
                            </div>
                            <div class="input-box">
                                <input type="submit" value="Send" name="ok">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        if(isset($_POST['ok'])){
            include_once 'function.php';
            $obj = new Contact();
            $res = $obj->contact_us($_POST);
            if($res == true){
                echo "<script>alert('Query successfully Submitted. Thank you')</script>";
            } else {
                echo "<script>alert('Something Went wrong!!')</script>";
            }
        }
        ?>
    </body>
    </html>
