<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientific_awarding_platform";

// Create a connection
$conn = new mysqli("localhost", "root", "", "scientific_awarding_platform");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search parameters from the HTML form
$orderNumber = isset($_POST['orderNumber']) ? $_POST['orderNumber'] : '';
$orderStatus = isset($_POST['orderStatus']) ? $_POST['orderStatus'] : '';
$serviceName = isset($_POST['serviceName']) ? $_POST['serviceName'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

// Prepare the SQL query
$query = "SELECT * FROM orders WHERE
    orderNumber LIKE '%$orderNumber%' AND
    orderStatus LIKE '%$orderStatus%' AND
    serviceName LIKE '%$serviceName%' AND
    date LIKE '%$date%'
";

// Execute the query
$result = $conn->query($query);

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Loop through the results and add them to the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["orderNumber"] . "</td>";
        echo "<td>" . $row["orderStatus"] . "</td>";
        echo "<td>" . $row["serviceName"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
} else {
    // No results found
    echo "<tr>";
    echo "<td colspan='4'>لا توجد نتائج</td>";
    echo "</tr>";
}

// Close the connection
$conn->close();

?>




<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة الطلب</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      direction: rtl;
    }

    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 20px;
      margin-top: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 15px;
      text-align: right;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    input, select {
      padding: 10px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type=button] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type=button]:hover {
      background-color: #45a049;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination a {
      color: black;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
      border-radius: 5px;
    }

    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">جدول الطلبات</h2>
  
  <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
    <input type="text" id="orderNumber" placeholder="رقم الطلب">
    <select id="orderStatus">
      <option value="">حالة الطلب</option>
      <option value="pending">الرغبات</option>
      <option value="processing">المستندات</option>
      <option value="completed">اختيار الدفع الالكترونى</option>
    </select>
    <select id="serviceName">
      <option value="">اسم الخدمة</option>
      <option value="service1">تقديم طلب التحاق- جامعي</option>
      <option value="service2">تقديم طلب التحاق-دراسات عليا</option>
      <option value="service3">تقديم طلب التحاق-دراسات عليا قصير المدى</option>
    </select>
    <tr>
        <td><form name="التاريخ ">
            <label>التاريخ </label>
            <input type="date" placeholder="التاريخ"></td>
            <!-- بعد الجزء الذي يحتوي على الجدول وزر البحث -->
<script>
flatpickr("#date", {
dateFormat: "Y-m-d", // تحديد تنسيق التاريخ حسب الحاجة
locale: "ar",
});
</script>
<script src="orders.php"></script>

    </tr>
    <input type="button" value="ابحث" onclick="searchOrders()">
  </div>


  <table id="ordersTable">
    <thead>
      <tr>
        <th>رقم الطلب</th>
        <th>حالة الطلب</th>
        <th>اسم الخدمة</th>
        <th>التاريخ</th>
      </tr>
     
    </thead>
    <tbody>
      <!-- يتم إدراج البيانات هنا ديناميكياً -->
    </tbody>
  </table>

  <div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
  </div>
</div>
<form action="orders.php" method="post">
    </form>

<script>
  function searchOrders() {
    // يمكنك إضافة الكود هنا لتنفيذ البحث وتحميل النتائج في الجدول
    // يمكن استخدام JavaScript أو Ajax لتحميل البيانات بطريقة ديناميكية
  }
</script>

</body>
</html>