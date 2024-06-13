<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $name = isset($_GET['condtions']) ? $_GET['condtions'] : '';
    $query = "SELECT * FROM conditions WHERE id = 1";
    $result = mysqli_query($conn, $query);
    // Additional processing
}

$result = null;

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $name = isset($_GET['condtions']) ? $_GET['condtions'] : '';
    $query = "SELECT * FROM conditions WHERE id = 1";
    $result = mysqli_query($conn, $query);
    // Additional processing
}

if (isset($_POST['submit'])) {
    $offer1 = isset($_POST['offer1']) ? $_POST['offer1'] : '';
    $offer2 = isset($_POST['offer2']) ? $_POST['offer2'] : '';
    $offer3 = isset($_POST['offer3']) ? $_POST['offer3'] : '';
    $offer4 = isset($_POST['offer4']) ? $_POST['offer4'] : '';
    $offer5 = isset($_POST['offer5']) ? $_POST['offer5'] : '';
    $offer6 = isset($_POST['offer6']) ? $_POST['offer6'] : '';
    $offer7 = isset($_POST['offer7']) ? $_POST['offer7'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';

    $insert_query = mysqli_prepare($conn, "INSERT INTO `conditions` (`offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `offer7`, `name`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($insert_query, 'ssssssss', $offer1, $offer2, $offer3, $offer4, $offer5, $offer6, $offer7, $name);
    
    if (!mysqli_stmt_execute($insert_query)) {
        die('Error in INSERT query: ' . mysqli_error($conn));
    }

    $status = ''; // Initialize $status based on your logic
    $update_query = "UPDATE conditions SET status = '$status' WHERE id = 1";
    mysqli_query($conn, $update_query);

    header('Location: index_form.php');
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <title>وكيل الكلية لشئون لشئون الدراسات العليا والبحوث</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h2>وكيل الكلية لشئون لشئون الدراسات العليا والبحوث</h2>
    </header>
    <main>
        <form action="index_form.php" method="post">
    </div>
    <table>
      <!-- Your table content here -->
      <thead>
        <tr>
          <th>استيفاء الشروط</th>
		  <th>نعم</th>
		  <th>لا</th>
		  <th> اسم وكيل الكلية لشئون الدراسات العليا والبحوث</th>
        </tr>
      </thead>
      <nav>
        <ul>
            <li><a href="#">الصفحة الرئيسية</a></li>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">تواصل معنا</a></li>
        </ul>
    </nav>
      <tbody>
      <img src="LL.png" alt="LL">
        <tr>
                        <td><a href="https://ibb.co/Cs83YCf" target="_blank">جميع الوثائق المقدمة من مقدم الطلب مستوفاه و صحيحه</a></td>
                         <td><input type="radio" id="yes" name="offer1" value="yes" required></td>
                        <td><input type="radio" id="no" name="offer1" value="no" required></td>
                        <td rowspan="9" text-align="center"> <input type="text" name="name" placeholder="اسم وكيل الكليه لشئون الدراسات العليا والبحوث" required></td>
               </tr>

                    <tr>
                        <td><a href="https://ibb.co/Cs83YCf">استوفى مقدم الطلب شروط سفره فى مهمه علميه لاجراء ابحاث ما بعد
                                الدكتوراه</a></td>
                        <td><input type="radio" id="yes" name="offer2" value="yes" required></td>
                        <td><input type="radio" id="no" name="offer2" value="no" required></td>
                    </tr>
		<tr>
          
           <td>مقدم الطلب له حق فى سفره فى مهمه علميه لاجراء ابحاث مابعد الدكتوراه </td>
		   <td><input type="radio" id="yes" name="offer3" value="yes"required></td>
    <td><input type="radio" id="no" name="offer3" value="no"required></td>
	
		</tr>
		<tr>
          
           <td>توجد موافقة مجلس القسم </td>
		   <td><input type="radio" id="yes" name="offer4" value="yes"required></td>
    <td><input type="radio" id="no" name="offer4" value="no"required></td>
	 
		</tr>
		<tr>
          
           <td>تعاد مره اخرى الى رئيس القسم لاستيفاء المتطلبات</td>
		   <td><input type="radio" id="yes" name="offer5" value="yes"required></td>
    <td><input type="radio" id="no" name="offer5" value="no"required></td>
		</tr>
		<tr>
          
           <td>تم رفض الطلب لعدم استيفاءالشروط</td>
		   <td><input type="radio" id="yes" name="offer6" value="yes"required></td>
    <td><input type="radio" id="no" name="offer6" value="no"required></td>
		</tr>
		<tr>
          
           <td>تحال الى مجلس العلاقات الثقافيه</td>
		   <td><input type="radio" id="yes" name="offer7" value="yes"required></td>
    <td><input type="radio" id="no" name="offer7" value="no"required></td>
	
		</tr>
    
    </tbody>
    <tfoot>
                    <tr>
                        <td colspan="4"><button class="btn-submit" type="submit" name="submit">Submit</button></td>
                    </tr>
                    
                </tfoot>
            </table>
        </form>
    </main>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("applicationForm");
        var referralSelect = document.getElementById("referral");

        referralSelect.addEventListener("change", function () {
            var selectedOption = referralSelect.value;
            var action = "";

            if (selectedOption === "department") {
                action = "index_form.php"; // Change this to the actual department page
            } else if (selectedOption === "cultural_council") {
                action = "cultural_council.php"; // Change this to the actual cultural council page
            }
            // Add more conditions as needed

            form.action = action;
        });
    });
</script>

</html>