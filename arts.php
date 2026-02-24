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
            min-height: 100vh;
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

        .exam-button.disabled {
            background: #999;
            border-color: #999;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .exam-button.disabled:hover {
            background: #999;
            border-color: #999;
            transform: none;
            box-shadow: none;
        }

        .time-info {
            margin-top: 20px;
            padding: 15px;
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 5px;
            color: #856404;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
        }

        .time-info.available {
            background: #d4edda;
            border-color: #28a745;
            color: #155724;
        }

        .countdown {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #003366;
            font-weight: bold;
        }

        .server-time-display {
            background: #003366;
            color: white;
            padding: 10px 15px;
            text-align: center;
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .server-time-display .time-label {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-right: 8px;
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
    // Set timezone to Indian Standard Time
    date_default_timezone_set('Asia/Kolkata');
    
    // Read all JSON data files
    $jsonData1 = file_get_contents('data.json');
    $jsonData2 = file_get_contents('data1.json');
    $jsonData3 = file_get_contents('data2.json');
    
    // Convert JSON to PHP arrays
    $data1 = json_decode($jsonData1, true);
    $data2 = json_decode($jsonData2, true);
    $data3 = json_decode($jsonData3, true);
    
    // Combine all departments from all three files
    $allDepartments = array_merge(
        $data1['arts']['value'],
        $data2['arts']['value'],
        $data3['arts']['value']
    );

    // Function to get the details for a specific value (department)
    function getDepartmentDetails($departmentName, $departments) {
        foreach ($departments as $item) {
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
        $departmentDetails = getDepartmentDetails($departmentName, $allDepartments);
        
        if ($departmentDetails) {
            // Display the details for the selected department
            echo '<div class="server-time-display"><span class="time-label">Current Server Time:</span><span id="currentServerTime"></span></div>';
            echo '<div class="exam-card">';
            echo '<h1>' . htmlspecialchars($departmentDetails['val']) . '</h1>';
            echo '<div class="exam-access">';
            echo '<p>Access Your Exam Through Below Link</p>';
            echo '<div class="exam-button" id="examButton" onclick="openPasswordModal()">Click Here</div>';
            echo '<div class="time-info" id="timeInfo"></div>';
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
        // Exam time data from PHP
        <?php if(isset($departmentDetails) && $departmentDetails): ?>
        var examTimeData = {
            from: '<?php echo isset($departmentDetails['time']['from']) ? $departmentDetails['time']['from'] : ''; ?>',
            to: '<?php echo isset($departmentDetails['time']['to']) ? $departmentDetails['time']['to'] : ''; ?>',
            noon: '<?php echo isset($departmentDetails['time']['noon']) ? $departmentDetails['time']['noon'] : ''; ?>',
            session: '<?php echo isset($departmentDetails['time']['session']) ? $departmentDetails['time']['session'] : ''; ?>'
        };
        var departmentPassword = '<?php echo isset($departmentDetails['psk']) ? $departmentDetails['psk'] : ''; ?>';
        var examLink = '<?php echo isset($departmentDetails['lcount'][0]) ? $departmentDetails['lcount'][0] : ''; ?>';
        
        // Get server time from PHP (in milliseconds since epoch)
        var serverTime = <?php echo time() * 1000; ?>;
        var clientTime = new Date().getTime();
        var timeDifference = serverTime - clientTime; // Difference between server and client
        
        // Function to get current server time
        function getServerTime() {
            return new Date(new Date().getTime() + timeDifference);
        }
        <?php endif; ?>

        // Parse time string (e.g., "2.30" or "10:00") and convert to hours and minutes
        function parseTime(timeStr) {
            var parts = timeStr.replace(':', '.').split('.');
            var hours = parseInt(parts[0]);
            var minutes = parts.length > 1 ? parseInt(parts[1]) : 0;
            return { hours: hours, minutes: minutes };
        }

        // Convert 12-hour format to 24-hour format
        function convertTo24Hour(hours, minutes, noon) {
            if (noon === 'pm' && hours !== 12) {
                hours += 12;
            } else if (noon === 'am' && hours === 12) {
                hours = 0;
            }
            return { hours: hours, minutes: minutes };
        }

        // Get time 30 minutes before the exam start
        function getAccessTime() {
            var time = parseTime(examTimeData.from);
            var time24 = convertTo24Hour(time.hours, time.minutes, examTimeData.noon);
            
            // Subtract 30 minutes
            var accessMinutes = time24.minutes - 30;
            var accessHours = time24.hours;
            
            if (accessMinutes < 0) {
                accessMinutes += 60;
                accessHours -= 1;
            }
            
            if (accessHours < 0) {
                accessHours += 24;
            }
            
            return { hours: accessHours, minutes: accessMinutes };
        }

        // Format time for display
        function formatTime(hours, minutes, is24Hour = false) {
            if (is24Hour) {
                return String(hours).padStart(2, '0') + ':' + String(minutes).padStart(2, '0');
            }
            var displayHours = hours;
            var period = 'AM';
            
            if (hours >= 12) {
                period = 'PM';
                if (hours > 12) displayHours = hours - 12;
            }
            if (hours === 0) displayHours = 12;
            
            return displayHours + ':' + String(minutes).padStart(2, '0') + ' ' + period;
        }

        // Check if current time is within access window
        function checkTimeAccess() {
            var now = getServerTime(); // Use server time instead of client time
            var currentHours = now.getHours();
            var currentMinutes = now.getMinutes();
            var currentSeconds = now.getSeconds();
            
            // Update server time display
            var timeStr = formatTime(currentHours, currentMinutes, false) + ':' + String(currentSeconds).padStart(2, '0');
            var serverTimeElement = document.getElementById('currentServerTime');
            if (serverTimeElement) {
                serverTimeElement.textContent = timeStr;
            }
            
            // Get exam start time in 24-hour format
            var examTime = parseTime(examTimeData.from);
            var examTime24 = convertTo24Hour(examTime.hours, examTime.minutes, examTimeData.noon);
            
            // Get exam end time in 24-hour format
            var endTime = parseTime(examTimeData.to);
            var endTime24 = convertTo24Hour(endTime.hours, endTime.minutes, examTimeData.noon);
            
            // Get access time (30 minutes before)
            var accessTime = getAccessTime();
            
            // Convert times to total minutes for easy comparison
            var currentTotalMinutes = currentHours * 60 + currentMinutes;
            var accessTotalMinutes = accessTime.hours * 60 + accessTime.minutes;
            var examEndTotalMinutes = endTime24.hours * 60 + endTime24.minutes;
            
            var button = document.getElementById('examButton');
            var timeInfo = document.getElementById('timeInfo');
            
            // Check if current time is within the access window
            if (currentTotalMinutes >= accessTotalMinutes && currentTotalMinutes < examEndTotalMinutes) {
                // Access is allowed
                button.classList.remove('disabled');
                button.style.pointerEvents = 'auto';
                timeInfo.className = 'time-info available';
                timeInfo.innerHTML = '✓ Exam link is now available!<br>Exam Time: ' + 
                    formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                    formatTime(endTime24.hours, endTime24.minutes);
                return true;
            } else if (currentTotalMinutes < accessTotalMinutes) {
                // Too early - show countdown
                button.classList.add('disabled');
                button.style.pointerEvents = 'none';
                
                var timeDiff = accessTotalMinutes - currentTotalMinutes;
                var hoursLeft = Math.floor(timeDiff / 60);
                var minutesLeft = timeDiff % 60;
                var secondsLeft = 60 - currentSeconds;
                
                if (secondsLeft === 60) secondsLeft = 0;
                else if (minutesLeft > 0) minutesLeft -= 1;
                
                var countdownStr = '';
                if (hoursLeft > 0) {
                    countdownStr = hoursLeft + 'h ' + minutesLeft + 'm ' + secondsLeft + 's';
                } else {
                    countdownStr = minutesLeft + 'm ' + secondsLeft + 's';
                }
                
                timeInfo.className = 'time-info';
                timeInfo.innerHTML = 'Link will be available at ' + formatTime(accessTime.hours, accessTime.minutes) + 
                    '<div class="countdown">Time remaining: ' + countdownStr + '</div>' +
                    '<div style="margin-top:10px;font-size:0.9rem;">Exam Time: ' + 
                    formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                    formatTime(endTime24.hours, endTime24.minutes) + '</div>';
                return false;
            } else {
                // Exam time has passed
                button.classList.add('disabled');
                button.style.pointerEvents = 'none';
                timeInfo.className = 'time-info';
                timeInfo.innerHTML = 'Exam time has ended.<br>Exam was: ' + 
                    formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                    formatTime(endTime24.hours, endTime24.minutes);
                return false;
            }
        }

        // Initialize and update every second
        <?php if(isset($departmentDetails) && $departmentDetails): ?>
        checkTimeAccess();
        setInterval(checkTimeAccess, 1000);
        <?php endif; ?>

        function openPasswordModal() {
            // Check if access is allowed before opening modal
            if (!document.getElementById('examButton').classList.contains('disabled')) {
                document.getElementById("passwordModal").classList.add("active");
                document.getElementById("passwordInput").focus();
            }
        }

        function closePasswordModal() {
            document.getElementById("passwordModal").classList.remove("active");
            document.getElementById("passwordInput").value = "";
        }

        function checkPassword() {
            <?php if(isset($departmentDetails) && $departmentDetails): ?>
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
