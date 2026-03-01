<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department Exam Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/logo.png" />
    <link rel="stylesheet" href="common.css" />
</head>
<body>
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

    echo '<div class="main-wrapper">';
    echo '<div class="department-section">';
    echo '<h2 class="section-title">Ph.D. Common Entrance Test - December 2025</h2>';

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
        
        // Get server time from PHP in IST (milliseconds since epoch)
        var serverTime = <?php echo time() * 1000; ?>;
        var clientTime = new Date().getTime();
        var timeDifference = serverTime - clientTime; // Difference between server and client
        
        // Function to get current Indian Standard Time (IST)
        function getServerTime() {
            // Get current time adjusted for server
            var currentTime = new Date(new Date().getTime() + timeDifference);
            
            // Convert to IST (UTC+5:30)
            // Get UTC time in milliseconds
            var utcTime = currentTime.getTime() + (currentTime.getTimezoneOffset() * 60000);
            
            // IST is UTC + 5 hours 30 minutes (19800000 milliseconds)
            var istTime = new Date(utcTime + (5.5 * 60 * 60 * 1000));
            
            return istTime;
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
            var timeStr = formatTime(currentHours, currentMinutes, false);
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
                alert("Your password is wrong. Please contact the hall supervisor.");
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
