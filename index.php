<!DOCTYPE html>
<html>
<head>
    <title>PU CET - December 2025</title>
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
            <h2 class="logotexteng">PERIYAR UNIVERSITY aaaaaaaaaaaaaaaa</h2>
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

    // Sort department list alphabetically for each session
    foreach ($sessions as &$session) {
        usort($session['departments'], function($a, $b) {
            return strcasecmp($a['val'], $b['val']);
        });
    }
    unset($session);
    
    echo '<div class="department-section">';
    echo '<h2 class="section-title">Ph.D. Common Entrance Test - December 2025</h2>';
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
            var sessionElements = [];
            var sectionContainer = document.querySelector('.department-section');
            
            // Update server time display
            var timeStr = formatTime(currentHours, currentMinutes);
            document.getElementById('currentServerTime').textContent = timeStr;
            
            for (var sessionNum in sessionsData) {
                var sessionData = sessionsData[sessionNum];
                var timeData = sessionData.time;
                var statusRank = 2; // 0: available, 1: upcoming, 2: ended
                
                // Get exam times
                var examTime = parseTime(timeData.from);
                var examTime24 = convertTo24Hour(examTime.hours, examTime.minutes, timeData.noon);
                
                var endTime = parseTime(timeData.to);
                var endTime24 = convertTo24Hour(endTime.hours, endTime.minutes, timeData.noon);
                
                // Get access time (30 minutes before)
                var accessTime = getAccessTime(timeData);
                var accessTotalMinutes = accessTime.hours * 60 + accessTime.minutes;
                var examEndTotalMinutes = endTime24.hours * 60 + endTime24.minutes;
                
                var sessionDiv = document.getElementById('session-' + sessionNum);
                var timingDiv = document.getElementById('timing-' + sessionNum);
                var gridDiv = document.getElementById('grid-' + sessionNum);
                
                // Check if current time is within the access window
                if (currentTotalMinutes >= accessTotalMinutes && currentTotalMinutes < examEndTotalMinutes) {
                    statusRank = 0;
                    // Access is allowed - show departments
                    timingDiv.className = 'session-timing available';
                    timingDiv.innerHTML = '✓ Session ' + sessionNum + ' is now available!<br>' +
                        '<span style="font-size:1rem;">Exam Time: ' + 
                        formatTime(examTime24.hours, examTime24.minutes) + ' - ' + 
                        formatTime(endTime24.hours, endTime24.minutes) + '</span>';
                    gridDiv.style.display = 'grid';
                } else if (currentTotalMinutes < accessTotalMinutes) {
                    statusRank = 1;
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

                sessionElements.push({
                    element: sessionDiv,
                    statusRank: statusRank,
                    sessionNum: Number(sessionNum)
                });
            }

            // Keep available sessions at the top, then upcoming, then ended.
            sessionElements.sort(function(a, b) {
                if (a.statusRank !== b.statusRank) {
                    return a.statusRank - b.statusRank;
                }
                return a.sessionNum - b.sessionNum;
            });

            for (var i = 0; i < sessionElements.length; i++) {
                sectionContainer.appendChild(sessionElements[i].element);
            }
        }

        // Initialize and update every second
        updateSessionDisplay();
        setInterval(updateSessionDisplay, 1000);
    </script>
</div>
</body>
</html>
