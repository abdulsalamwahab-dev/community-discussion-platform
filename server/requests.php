<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
Session_start();
include '../common/db.php';
if (isset($_POST['signUpbtn'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userAddress = $_POST['userAddress'];

    $result = $conn->query("INSERT INTO users (username, email, password, address) 
    VALUES ('$userName', '$userEmail', '$userPassword', '$userAddress')");
    if ($result) {
        $_SESSION['user'] = ["username" => $userName, "email" => $userEmail, "user_id" => $conn->insert_id];
        header("Location: /discuss");
    } else {
        echo "Error inserting data: " . $conn->error;
    }
} elseif (isset($_POST['login_btn'])) {
    $userEmail_login = $_POST['user_email'];
    $userPassword_login = $_POST['user_password'];
    $username = "";
    $user_id = "";
    $query_login = "SELECT * FROM users WHERE email='$userEmail_login' AND password='$userPassword_login'";
    $result = $conn->query($query_login);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $userName = $row['username'];
        $user_id = $row['id'];
        $_SESSION['user'] = ["username" => $userName, "email" => $userEmail_login, "user_id" => $user_id];
        header("Location: /discuss");
    } else {
        echo '
    <div style="
        max-width: 400px;
        margin: 40px auto;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffe6e6;
        border: 1px solid #ff4d4d;
        color: #cc0000;
        font-family: Arial, sans-serif;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    ">
        <h3 style="margin-bottom: 10px;">Login Failed</h3>
        <p style="margin: 0;">
            Invalid email or password. Please try again.
        </p>
    </div>
    ';
    }
} elseif (isset($_GET['logout'])) {
    session_destroy();
    header("Location: /discuss/?login=true");
} elseif (isset($_POST['askQuestionBtn'])) {
    $title = $_POST['Title'];
    $description = $_POST['Description'];
    $category_id = $_POST['Category'];
    $user_id = $_SESSION['user']['user_id'];
    $question = $conn->query("INSERT INTO questions (title, description, category_id, user_id) 
    VALUES ('$title', '$description', '$category_id', '$user_id')");
    if ($question) {
        header("Location: /discuss");
    } else {
        echo "Question has been failed to submit: " . $conn->error;
    }
} elseif (isset($_POST['submit-answer'])) {
    $answer = $_POST['textarea_answer'];
    $q_id = $_POST['q-id'];
    $user_id = $_SESSION['user']['user_id'];
    $query = $conn->query("INSERT INTO answers (answer, question_id, user_id) 
        VALUES ('$answer', '$q_id', '$user_id')");
    if ($query) {
        header("Location: /discuss/?q-id=$q_id");
    } else {
        echo "Answer has  been failed to submit: " . $conn->error;
    }
} elseif (isset($_GET['delete_question'])) {
    $question_id = $_GET['delete_question'];
    $delete_query = $conn->query("DELETE FROM questions WHERE id='$question_id'");
    if ($delete_query) {
        header("Location: /discuss");
    } else {
        echo "Failed to delete question: " . $conn->error;
    }
}
?>