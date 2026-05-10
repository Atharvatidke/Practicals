<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            padding: 20px;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #999;
            box-sizing: border-box;
        }
        
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            width: 100%;
            border: none;
        }
        
        button:hover {
            background-color: darkblue;
        }
        
        .result {
            background-color: #ffffcc;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Submission</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $country = $_POST["country"];
            $message = $_POST["message"];
            
            echo "<div class='result'>";
            echo "<h2>Your Submitted Data:</h2>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Phone:</strong> " . $phone . "</p>";
            echo "<p><strong>Country:</strong> " . $country . "</p>";
            echo "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
            echo "</div>";
            
            echo "<form method='POST'>";
            echo "<button type='submit'>Submit Another</button>";
            echo "</form>";
        } else {
            ?>
        
        <form method="POST">
            <label>Full Name:</label>
            <input type="text" name="name" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Phone:</label>
            <input type="text" name="phone">
            
            <label>Country:</label>
            <select name="country" required>
                <option value="">Select</option>
                <option value="USA">USA</option>
                <option value="India">India</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
                <option value="Other">Other</option>
            </select>
            
            <label>Message:</label>
            <textarea name="message" rows="5"></textarea>
            
            <button type="submit">Submit</button>
        </form>
        
        <?php
        }
        ?>
    </div>
</body>
</html>
