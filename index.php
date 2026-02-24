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
    // Read the JSON data from the file
    $jsonData = file_get_contents('data2.json');
    // Convert JSON to PHP array
    $data = json_decode($jsonData, true);
    

    
    echo '<div class="department-section">';
    echo '<h2 class="section-title">' . $data['arts']['name'] . '</h2>';
    echo '<div class="department-grid">';
    
    foreach ($data['arts']['value'] as $item) {
        echo '<a href="arts.php?department=' . rawurlencode($item['val']) . '" class="department-link">' . $item['val'] . '</a>';
    }
    
    echo '</div>';
    echo '</div>';
    ?>
</div>
</body>
</html>
