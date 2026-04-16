<div>
    <h5>Your Answer:</h5>
    <?php
    $query = "SELECT * FROM `answers` WHERE `question_id` = $get_id";
    $result = $conn->query($query);
    $i=1;
    foreach ($result as $row) {
        echo "<div class='my-3' style='background-color: #4a99f8 !important;color: white;border-radius: 6px;padding: 5px 10px;width: fit-content;'>
                <div class=''>
                    <p style='margin-bottom: 0;'>Answer No: $i {$row['answer']}</p>
                </div>
            </div>";
            $i++;
    }
    ?>
</div>