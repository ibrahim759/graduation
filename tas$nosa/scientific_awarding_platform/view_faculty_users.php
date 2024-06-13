<?php

global $conn;
include_once "database/db_connection.php";

require_once("header.php");
?>


<div class="d-flex justify-content-center bg-transparent">
    <div class="col-lg-8 col-sm-12 col-xs-12 bg-transparent">
        <div class="d-flex flex-column justify-content-center align-items-center gap-4 bg-transparent ">
            <div class="card w-100 h-100 bg-transparent">
                <div class="card-header">
                    <h3 class="create-account pr-2"><span class="fa fa-user"></span>أرقام تعريف أعضاء هيئة التدريس </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped text-center border rounded">
                        <thead>
                        <tr>
                            <th scope="col">رقم التعريف</th>
                            <th scope="col">الفعل</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php
                            $sql_stmt = $conn->query("select id from faculty_users order by id asc");
                            while ($faculty_users = $sql_stmt->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $faculty_users['id'] ?></th>
                            <td>
                                <div class="d-flex justify-content-center align-items-center gap-4">
                                    <a href="faculty_user_data.php?id=<?php echo $faculty_users['id'] ?>" class="btn btn-warning fw-bold">عرض البيانات</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>