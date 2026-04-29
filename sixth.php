<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input using POST Method</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
        }
        
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        .success-message {
            background: #d4edda;
            border: 2px solid #28a745;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .output-section {
            background: #f8f9fa;
            border: 2px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
        
        .output-section h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .output-item {
            margin-bottom: 12px;
            padding: 10px;
            background: white;
            border-left: 4px solid #667eea;
            border-radius: 3px;
        }
        
        .output-label {
            font-weight: 600;
            color: #667eea;
            margin-bottom: 5px;
        }
        
        .output-value {
            color: #333;
            word-break: break-word;
        }
        
        .reset-button {
            background: #6c757d;
            margin-top: 15px;
        }
        
        .reset-button:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Input Processor</h1>
        <p class="subtitle">Using POST Method in PHP</p>
        
        <?php
        // Check if form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve and sanitize form data
            $name = htmlspecialchars($_POST["name"] ?? "");
            $email = htmlspecialchars($_POST["email"] ?? "");
            $phone = htmlspecialchars($_POST["phone"] ?? "");
            $country = htmlspecialchars($_POST["country"] ?? "");
            $message = htmlspecialchars($_POST["message"] ?? "");
            
            // Display success message and submitted data
            echo '<div class="success-message">';
            echo '✓ Form submitted successfully!';
            echo '</div>';
            
            echo '<div class="output-section">';
            echo '<h2>Submitted Information:</h2>';
            
            echo '<div class="output-item">';
            echo '<div class="output-label">Full Name:</div>';
            echo '<div class="output-value">' . $name . '</div>';
            echo '</div>';
            
            echo '<div class="output-item">';
            echo '<div class="output-label">Email Address:</div>';
            echo '<div class="output-value">' . $email . '</div>';
            echo '</div>';
            
            echo '<div class="output-item">';
            echo '<div class="output-label">Phone Number:</div>';
            echo '<div class="output-value">' . $phone . '</div>';
            echo '</div>';
            
            echo '<div class="output-item">';
            echo '<div class="output-label">Country:</div>';
            echo '<div class="output-value">' . $country . '</div>';
            echo '</div>';
            
            echo '<div class="output-item">';
            echo '<div class="output-label">Message:</div>';
            echo '<div class="output-value">' . nl2br($message) . '</div>';
            echo '</div>';
            
            echo '</div>';
            
            // Display raw $_POST array for reference
            echo '<div class="output-section">';
            echo '<h2>Raw POST Data ($_POST array):</h2>';
            echo '<pre style="background: white; padding: 10px; border-radius: 3px; overflow-x: auto;">';
            print_r($_POST);
            echo '</pre>';
            echo '</div>';
            
            // Reset form button
            echo '<form method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
            echo '<button type="submit" class="reset-button" name="reset">Submit Another Form</button>';
            echo '</form>';
        } else {
            // Display the form
            ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
            </div>
            
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
            
            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                    <option value="">-- Select a Country --</option>
                    <option value="United States">United States</option>
                    <option value="India">India</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="Japan">Japan</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message"></textarea>
            </div>
            
            <button type="submit">Submit Form</button>
        </form>
        
        <?php
        }
        ?>
    </div>
</body>
</html>
