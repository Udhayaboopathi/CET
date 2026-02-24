<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department Exam Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/logo.png" />
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background: #f0f2f5;
            line-height: 1.6;
        }

        /* Main Wrapper */
        .exam-main-wrapper {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Department Card */
        .exam-card {
            background: white;
            border: 2px solid #003366;
            border-radius: 8px;
            padding: 25px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .exam-card h1 {
            font-family: 'Georgia', serif;
            color: #003366;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0 0 20px 0;
            padding-bottom: 15px;
            border-bottom: 4px solid #003366;
            text-align: center;
        }

        /* Exam Access Section */
        .exam-access {
            background: #e8f0f7;
            border: 2px solid #003366;
            border-radius: 6px;
            padding: 25px 30px;
            text-align: center;
        }

        .exam-access p {
            color: #003366;
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0 0 18px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-family: Arial, sans-serif;
        }

        .exam-button {
            display: inline-block;
            background: #003366;
            color: white;
            padding: 16px 45px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: 2px solid #003366;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
        }

        .exam-button:hover {
            background: #002244;
            border-color: #002244;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,51,102,0.4);
        }

        .exam-button:active {
            transform: translateY(0);
        }

        /* Password Modal */
        .password-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .password-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 45px 40px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
            position: relative;
            border: 3px solid #003366;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }

        .close-button {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 1.8rem;
            cursor: pointer;
            color: #666;
            transition: color 0.3s;
            background: #f0f2f5;
            border: 2px solid #ccc;
            width: 35px;
            height: 35px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .close-button:hover {
            background: #e0e2e5;
            color: #333;
            border-color: #999;
        }

        .modal-content h2 {
            font-family: 'Georgia', serif;
            color: #003366;
            font-size: 1.6rem;
            margin-bottom: 28px;
            text-align: center;
            font-weight: bold;
        }

        .password-input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            margin-bottom: 22px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }

        .password-input:focus {
            outline: none;
            border-color: #003366;
        }

        .submit-button {
            width: 100%;
            background: #003366;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 1.05rem;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-family: Arial, sans-serif;
        }

        .submit-button:hover {
            background: #002244;
        }

        .submit-button:active {
            transform: scale(0.98);
        }

        /* No Department Message */
        .no-department {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            padding: 40px 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .exam-main-wrapper {
                margin: 25px auto;
                padding: 0 15px;
            }

            .exam-card {
                padding: 35px 25px;
            }

            .exam-card h1 {
                font-size: 2rem;
            }

            .exam-access {
                padding: 30px 20px;
            }

            .exam-access p {
                font-size: 1rem;
            }

            .modal-content {
                padding: 35px 25px;
            }
        }

        @media (max-width: 480px) {
            .exam-card h1 {
                font-size: 1.6rem;
            }

            .exam-button {
                padding: 14px 35px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
<style>
    /* Header Styles */
    .periyar-research-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #ffffff;
        padding: 20px 40px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-bottom: 3px solid #003366;
    }

    .periyar-research-header img {
        width: 140px;
        height: auto;
    }

    .periyar-research-header1 {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 15px 25px;
    }

    .periyar-research-header2 {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .logotexttamil {
        color: #cc0000;
        font-size: 2rem;
        font-weight: 900;
        margin: 0;
        font-family: 'Latha', 'Tamil MN', sans-serif;
        line-height: 1.2;
    }

    .logotexteng {
        color: #003366;
        font-weight: 900;
        font-size: 2rem;
        margin: 5px 0;
        letter-spacing: 2px;
        font-family: 'Georgia', serif;
        line-height: 1.2;
    }

    .logotext-div {
        margin-top: 10px;
    }

    .logotext {
        font-size: 0.95rem;
        font-weight: 600;
        font-family: Arial, sans-serif;
        color: #003366;
        margin: 3px 0;
        letter-spacing: 0.3px;
        line-height: 1.4;
    }

    .header-right-logo {
        text-align: center;
    }

    .header-right-logo img {
        width: 120px;
        height: auto;
        border-radius: 5px;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .periyar-research-header {
            flex-direction: column;
            padding: 15px 20px;
        }

        .periyar-research-header img {
            width: 100px;
        }

        .logotexttamil {
            font-size: 1.8rem;
        }

        .logotexteng {
            font-size: 1.8rem;
        }

        .logotext {
            font-size: 0.8rem;
        }

        .header-right-logo img {
            width: 100px;
        }
    }

    @media (max-width: 768px) {
        .periyar-research-header {
            padding: 12px 15px;
        }

        .periyar-research-header img {
            width: 80px;
        }

        .periyar-research-header1 {
            padding: 10px;
        }

        .logotexttamil {
            font-size: 1.4rem;
        }

        .logotexteng {
            font-size: 1.4rem;
            letter-spacing: 1px;
        }

        .logotext {
            font-size: 0.7rem;
        }

        .header-right-logo img {
            width: 80px;
        }
    }

    @media (max-width: 480px) {
        .periyar-research-header img {
            width: 60px;
        }

        .logotexttamil {
            font-size: 1.1rem;
        }

        .logotexteng {
            font-size: 1.1rem;
        }

        .logotext {
            font-size: 0.65rem;
        }

        .header-right-logo {
            display: none;
        }
    }
</style>
<div class="periyar-research-header">
    <a href="/">
        <img src="periyar.png" alt="Periyar University Logo" />
    </a>
    <div class="periyar-research-header1">
        <div class="periyar-research-header2">
            <h3 class="logotexttamil">பெரியார் பல்கலைக்கழகம்</h3>
            <h2 class="logotexteng">PERIYAR UNIVERSITY</h2>
            <div class="logotext-div">
                <h5 class="logotext">State University - NAAC 'A++' Grade - NIRF Rank 94</h5>
                <h5 class="logotext">State Public University Rank 40 - SDG Institutions Rank Band: 11-50</h5>
                <h5 class="logotext">Salem - 636 011, Tamil Nadu, India.</h5>
            </div>
        </div>
    </div>
    <div class="header-right-logo">
        <img src="periyar1.jpg" alt="Periyar Portrait" />
    </div>
</div>
    
    <!-- Password Modal -->
    <div class="password-modal" id="passwordModal">
        <div class="modal-content">
            <div class="close-button" onclick="closePasswordModal()">×</div>
            <h2>Enter Your Password</h2>
            <input type="text" class="password-input" id="passwordInput" placeholder="Enter password" />
            <button class="submit-button" onclick="checkPassword()">Submit</button>
        </div>
    </div>

    <?php
    // Read the JSON data from the file
    $jsonData = file_get_contents('data.json');
    // Convert JSON to PHP array
    $data = json_decode($jsonData, true);

    // Function to get the details for a specific value (department)
    function getDepartmentDetails($departmentName) {
        global $data;
        foreach ($data['arts']['value'] as $item) {
            if ($item['val'] === $departmentName) {
                return $item;
            }
        }
        return null;
    }

    echo '<div class="exam-main-wrapper">';

    // Check if the department name is provided in the URL
    if (isset($_GET['department'])) {
        $departmentName = urldecode($_GET['department']);
        $departmentDetails = getDepartmentDetails($departmentName);
        
        if ($departmentDetails) {
            // Display the details for the selected department
            echo '<div class="exam-card">';
            echo '<h1>' . htmlspecialchars($departmentDetails['val']) . '</h1>';
            echo '<div class="exam-access">';
            echo '<p>Access Your Exam Through Below Link</p>';
            echo '<div class="exam-button" onclick="openPasswordModal()">Click Here</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="exam-card">';
            echo '<p class="no-department">Department not found.</p>';
            echo '</div>';
        }
    } else {
        echo '<div class="exam-card">';
        echo '<p class="no-department">No department selected.</p>';
        echo '</div>';
    }

    echo '</div>';
    ?>

    <script>
        function openPasswordModal() {
            document.getElementById("passwordModal").classList.add("active");
            document.getElementById("passwordInput").focus();
        }

        function closePasswordModal() {
            document.getElementById("passwordModal").classList.remove("active");
            document.getElementById("passwordInput").value = "";
        }

        function checkPassword() {
            <?php if(isset($departmentDetails) && $departmentDetails): ?>
            var departmentPassword = '<?php echo isset($departmentDetails['psk']) ? $departmentDetails['psk'] : ''; ?>';
            var examLink = '<?php echo isset($departmentDetails['lcount'][0]) ? $departmentDetails['lcount'][0] : ''; ?>';
            var enteredPassword = document.getElementById("passwordInput").value;
            
            if(enteredPassword === departmentPassword) {
                window.location.href = examLink;
            } else {
                alert("Incorrect password. Please try again.");
                document.getElementById("passwordInput").value = "";
                document.getElementById("passwordInput").focus();
            }
            <?php else: ?>
            alert("Department details not available");
            <?php endif; ?>
        }

        // Allow Enter key to submit
        document.getElementById("passwordInput").addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                checkPassword();
            }
        });

        // Close modal when clicking outside
        document.getElementById("passwordModal").addEventListener("click", function(event) {
            if (event.target === this) {
                closePasswordModal();
            }
        });
    </script>
</body>
</html>
