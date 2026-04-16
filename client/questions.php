<div style="background: linear-gradient(to right, #5a9bd5, #3f6b8a);">
    <div class="hero">
        <h1>Discuss and Share Knowledge with the Community.</h1>
        <p>
            We encourage you to share your insights on relevant questions and contribute your valuable queries as well.
        </p>
        <a href="?latest" class="btn">All Questions</a>
    </div>

    <div class="explore" style="background-color: white;">
        <h2>Start Exploring</h2>

        <div class="card-container">

            <a href="?latest" class="card">
                <div class="icon">💬</div>
                <h3>Latest Questions</h3>
                <p>Submit your questions and receive valuable answers.</p>
            </a>

            <a href="?askQuestion" class="card">
                <div class="icon">⚡</div>
                <h3>Add a Question</h3>
                <p>Contribute helpful and insightful responses.</p>
            </a>

            <a href="?c-id=1" class="card">
                <div class="icon">📚</div>
                <h3>Explore Categories</h3>
                <p>Explore various topics to enhance your knowledge.</p>
            </a>

        </div>
    </div>
</div>
<div class="container my-4" style="min-height: 100vh;">
    <div class="row">
        <div class="col-8">
            <?php
            include "./common/db.php";

            if (isset($_GET['u-id'])) {
                $query = "SELECT * FROM `questions` WHERE user_id='{$_GET['u-id']}'";
                $heading = "My Questions";
            } elseif (isset($_GET['c-id'])) {
                $query = "SELECT * FROM `questions` WHERE category_id='{$_GET['c-id']}'";
                $heading = "Selected Category Questions";
            } elseif (isset($_GET['latest'])) {
                $query = "SELECT * FROM `questions` ORDER BY id DESC";
                $heading = "Latest Questions";
            } elseif (isset($_GET['search'])) {
                $search_item = $_GET['search'];
                $query = "SELECT * FROM `questions` WHERE title LIKE '%$search_item%' OR description LIKE '%$search_item%'";
                $heading = "Search Results for '$search_item'";
            } else {
                $query = "SELECT * FROM `questions`";
                $heading = "All Questions";
            }
            $isMyQuestions = isset($_GET['u-id']);
            $result_questions_show = $conn->query($query);
            echo "<h3 class='mb-3'>{$heading}</h3>";

            if (mysqli_num_rows($result_questions_show) == 0 && isset($_GET['u-id'])) {
                echo "<p>You haven't asked any questions yet.</p>";
            } elseif (mysqli_num_rows($result_questions_show) == 0 && isset($_GET['search'])) {
                echo "<p>No questions found for '$search_item'.</p>";
            } else {
                foreach ($result_questions_show as $question) {
                    echo "<a href='?q-id={$question['id']}' style='text-decoration: none; color: inherit; display: block;'>
        <div class='card_v2 my-3'>
            <div class='card-body'>
                <h5 class='card-title'>{$question['title']}</h5>
                <p class='card-text'>{$question['description']}</p>

      </a>";

                    // Show delete only in "My Questions"
                    if (isset($_GET['u-id'])) {
                        echo "<a class='btn btn-danger mt-2' href='./server/requests.php?delete_question={$question['id']}'>Delete</a>";
                    }
                    echo "</div>
                    </div>";
                }
            }
            ?>
        </div>
        <div class="col-4">
            <?php include "./client/category_list.php"; ?>
        </div>
    </div>
</div>