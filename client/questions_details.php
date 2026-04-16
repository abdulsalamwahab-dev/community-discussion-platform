<div class="container">
        <div class="row">
    
        <div class="col-7">
            <h1 class="heading mt-4">Question</h1>
        <?php
        include "./common/db.php";
        $get_id = $_GET['q-id'];
        $query = "SELECT * FROM `questions` where `id` = $get_id";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $category_id = $row['category_id'];
        echo "<div class='my-3'>
            <div class='card card_v2 pb-0 px-3 pt-3'>
                <h5>{$row['title']}</h5>
                <p>{$row['description']}</p>
            </div>
        </div>";

        ?>
        <?php include "./client/answers_db.php"; ?>

        <form action="./server/requests.php" method="post">
            <div>
                <input type="hidden" name="q-id" value="<?php echo $get_id; ?>">
                <textarea name="textarea_answer" class="form-control" placeholder="Write your answer here..." id="answer" rows="5"></textarea>
                <button name="submit-answer" class="btn btn-primary mt-3" id="submit-answer">Submit</button>
            </div>
        </form>
        </div>
        <div class="col-5">
            <h1 class="heading mt-4 mb-2">Related Questions</h1>
            <h5 class="mb-3"><span style="font-weight: 300 !important;">Category:</span>
            <?php
            $query = "SELECT * FROM `category` where `id` = $category_id";    
            $result = $conn->query($query);
            $category = $result->fetch_assoc();
            echo $category['name']; ?></h5>
            <ul class="list-group
">
                <?php
                $query_related = "SELECT * FROM `questions` where category_id='$category_id' and id != '$get_id'";
                $result_related = $conn->query($query_related);
                foreach ($result_related as $related) {
                    echo "<li class='list-group-item card card_v2 p-3'><h5 class='mb-0'><a style='text-decoration: none;color: #212529;' href='?q-id={$related['id']}'>{$related['title']}</a></h5></li>";
                }
                ?>
        </div>
    </div>
</div>