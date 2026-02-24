<!DOCTYPE html>
<html>
<head>
    <title>PU CET - December 2025</title>
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

        /* Container */
        .main-wrapper {
            max-width: 100%;
            margin: 0;
            padding: 30px 40px;
            background: white;
            min-height: 100vh;
        }

        /* Page Title */
        .page-title {
            font-family: 'Georgia', serif;
            color: #003366;
            font-size: 2.2rem;
            font-weight: bold;
            text-align: center;
            margin: 30px 0 40px 0;
            padding: 30px 25px;
            background: #e8f0f7;
            border: 2px solid #003366;
            border-left: 8px solid #003366;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        /* Department Section */
        .department-section {
            background: #ffffff;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 40px 35px;
            margin: 30px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        /* Section Title */
        .section-title {
            font-family: 'Georgia', serif;
            color: #003366;
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0 0 30px 0;
            padding: 0 0 15px 0;
            border-bottom: 4px solid #003366;
            text-align: center;
        }

        /* Department Grid */
        .department-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        /* Department Link */
        .department-link {
            display: block;
            padding: 18px 25px;
            background: #f8f9fa;
            color: #003366;
            text-decoration: none;
            border: 2px solid #003366;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
        }

        .department-link:hover {
            background: #003366;
            color: white;
            border-color: #003366;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,51,102,0.3);
        }

        .department-link::before {
            content: '►';
            position: absolute;
            left: 15px;
            opacity: 0;
            transition: opacity 0.3s, left 0.3s;
        }

        .department-link:hover::before {
            opacity: 1;
            left: 10px;
        }

        .department-link.locked {
            background: #e0e0e0;
            color: #666;
            border-color: #999;
            cursor: not-allowed;
            pointer-events: none;
        }

        .session-timing {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            color: #856404;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .session-timing.available {
            background: #d4edda;
            border-color: #28a745;
            color: #155724;
        }

        .session-timing .time {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 8px;
            color: #003366;
        }

        .session-grid {
            margin-bottom: 40px;
        }

        .server-time-display {
            background: #003366;
            color: white;
            padding: 12px 20px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 5px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .server-time-display .time-label {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-right: 10px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .department-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 768px) {
            .main-wrapper {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 1.6rem;
                padding: 20px 15px;
                margin: 20px 0 30px 0;
            }

            .department-section {
                padding: 25px 20px;
            }

            .section-title {
                font-size: 1.4rem;
                margin-bottom: 20px;
            }

            .department-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .department-link {
                padding: 15px 20px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 1.3rem;
                padding: 15px 12px;
            }

            .section-title {
                font-size: 1.2rem;
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
<div class="main-wrapper">
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
    
    // Function to group departments by session
    function groupBySession($departments) {
        $sessions = [];
        foreach ($departments as $dept) {
            $sessionNum = $dept['time']['session'];
            if (!isset($sessions[$sessionNum])) {
                $sessions[$sessionNum] = [
                    'time' => $dept['time'],
                    'departments' => []
                ];
            }
            $sessions[$sessionNum]['departments'][] = $dept;
        }
        ksort($sessions);
        return $sessions;
    }
    
    $sessions = groupBySession($allDepartments);
    
    echo '<div class="department-section">';
    echo '<h2 class="section-title">udhaya Ph.D. Common Entrance Test - December 2025</h2>';
    echo '<div class="server-time-display"><span class="time-label">Current Server Time:</span><span id="currentServerTime"></span></div>';
    
    foreach ($sessions as $sessionNum => $sessionData) {
        echo '<div class="session-grid" id="session-' . $sessionNum . '">';
        echo '<div class="session-timing" id="timing-' . $sessionNum . '"></div>';
        echo '<div class="department-grid" id="grid-' . $sessionNum . '" style="display:none;">';
        
        foreach ($sessionData['departments'] as $dept) {
            echo '<a href="arts.php?department=' . rawurlencode($dept['val']) . '" class="department-link">' . $dept['val'] . '</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    
    echo '</div>';
    ?>
    
    <script>
        // Session data from PHP
        var sessionsData = <?php echo json_encode($sessions); ?>;
        
        // Get server time from PHP (in milliseconds since epoch)
        var serverTime = <?php echo time() * 1000; ?>;
        var clientTime = new Date().getTime();
        var timeDifference = serverTime - clientTime; // Difference between server and client
        
        // Function to get current server time
        function getServerTime() {
            return new Date(new Date().getTime() + timeDifference);
        }
        
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
        function getAccessTime(timeData) {
            var time = parseTime(timeData.from);
            var time24 = convertTo24Hour(time.hours, time.minutes, timeData.noon);
            
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
        function formatTime(hours, minutes) {
            var displayHours = hours;
            var period = 'AM';
            
            if (hours >= 12) {
                period = 'PM';
                if (hours > 12) displayHours = hours - 12;
            }
            if (hours === 0) displayHours = 12;
            
            return displayHours + ':' + String(minutes).padStart(2, '0') + ' ' + period;
        }

        // Check session access and update display
        function updateSessionDisplay() {
            var now = getServerTime(); // Use server time instead of client time
            var currentHours = now.getHours();
            var currentMinutes = now.getMinutes();
            var currentSeconds = now.getSeconds();
            var currentTotalMinutes = currentHours * 60 + currentMinutes;
            
            // Update server time display
            var timeStr = formatTime(currentHours, currentMinutes) + ':' + String(currentSeconds).padStart(2, '0');
            document.getElementById('currentServerTime').textContent = timeStr;
            
            for (var sessionNum in sessionsData) {
                var sessionData = sessionsData[sessionNum];
                var timeData = sessionData.time;
                
                // Get exam times
                var examTime = parseTime(timeData.from);
                var examTime24 = convertTo24Hour(examTime.hours, examTime.minutes, timeData.noon);
                
                var endTime = parseTime(timeData.to);
                var endTime24 = convertTo24Hour(endTime.hours, endTime.minutes, timeData.noon);
                
                // Get access time (30 minutes before)
                var accessTime = getAccessTime(timeData);
                var accessTotalMinutes = accessTime.hours * 60 + accessTime.minutes;
                var examEndTotalMinutes = endTime24.hours * 60 + endTime24.minutes;
                
                var timingDiv = document.getElementById('timing-' + sessionNum);
                var gridDiv = document.getElementById('grid-' + sessionNum);
                
                // Check if current time is within the access window
                if (currentTotalMinutes >= accessTotalMinutes && currentTotalMinutes < examEndTotalMinutes) {
                    // Access is allowed - show departments
                    timingDiv.className = 'session-timing available';
                    timingDiv.innerHTML = '✓ Session ' + sessionNum + ' is now available!<br>' +
                        '<span style="font-size:1rem;">Exam Time: ' + 
                        formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                        formatTime(endTime24.hours, endTime24.minutes) + '</span>';
                    gridDiv.style.display = 'grid';
                } else if (currentTotalMinutes < accessTotalMinutes) {
                    // Too early - show countdown
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
                    
                    timingDiv.className = 'session-timing';
                    timingDiv.innerHTML = 'Session ' + sessionNum + ' Opens at ' + formatTime(accessTime.hours, accessTime.minutes) +
                        '<div class="time">Opens in: ' + countdownStr + '</div>' +
                        '<div style="margin-top:10px;font-size:0.95rem;">Exam Time: ' + 
                        formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                        formatTime(endTime24.hours, endTime24.minutes) + '</div>';
                    gridDiv.style.display = 'none';
                } else {
                    // Exam time has passed
                    timingDiv.className = 'session-timing';
                    timingDiv.innerHTML = 'Session ' + sessionNum + ' has ended<br>' +
                        '<span style="font-size:0.95rem;">Exam was: ' + 
                        formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                        formatTime(endTime24.hours, endTime24.minutes) + '</span>';
                    gridDiv.style.display = 'none';
                }
            }
        }

        // Initialize and update every second
        updateSessionDisplay();
        setInterval(updateSessionDisplay, 1000);
    </script>
</div>
</body>
</html>
