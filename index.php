<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRA BIO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            background: #000;
        }
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        h1, h2, p {
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 0 10px silver;
            animation: textGlow 0.8s ease-in-out infinite;
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        p {
            font-size: 0.85em;
        }
        .inline-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .inline-details div {
            width: 33%;
            text-align: center;
            animation: textGlow 0.8s ease-in-out infinite;
        }
        .place {
            font-size: 0.8em; /* Smaller text for Place */
        }
        .best-friend {
            font-size: 0.8em; /* Smaller text for Best Friend */
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 6px;
            margin-bottom: 6px;
            border-radius: 5px;
            text-transform: uppercase;
            text-shadow: 0 0 10px silver;
            animation: textGlow 0.8s ease-in-out infinite;
            font-size: 0.85em;
        }
        a {
            color: #fff;
            text-decoration: none;
            text-shadow: 0 0 10px silver;
            animation: textGlow 0.8s ease-in-out infinite;
        }
        a:hover {
            color: #00ffcc;
        }
        .title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 1.8em;
            font-weight: bold;
            color: #fff;
            text-shadow: 0 0 15px silver;
            animation: textGlow 0.8s ease-in-out infinite;
        }
        img {
            border-radius: 50%;
            width: 100px; /* Smaller size for the profile picture */
            height: 100px; /* Smaller size for the profile picture */
            margin-bottom: 15px;
            animation: fadeIn 1s ease-in-out;
        }
        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes textGlow {
            0% { text-shadow: 0 0 10px silver, 0 0 20px silver; }
            50% { text-shadow: 0 0 20px silver, 0 0 30px silver; }
            100% { text-shadow: 0 0 10px silver, 0 0 20px silver; }
        }
    </style>
</head>
<body>

    <video class="video-bg" autoplay muted loop>
        <source src="background/shadow.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="title">ELECTRA OP </div>

        <img src="images/electra.png" alt="Profile Picture">
        
        <h1><a href="https://t.me/FNxOwner">ELECTRAOP</a></h1>

        <div class="inline-details">
            <div class="place">𝗣𝗜𝗔𝗖𝗘 : 🇮🇳 ɪɴᴅɪᴀ ᴊʜ</div>
            <div>𝗔𝗚𝗘 → 16</div>
            <div class="best-friend"><a href="https://t.me/FN_ROMAN">𝗕𝗘𝗦𝗧 𝗙𝗥𝗜𝗘𝗡𝗗 → ⏤͟͟͞͞𝗢ɢ 𝐅ɴ 𝐑ᴏᴍᴀɴ 𓆪𓆪</a></div>
        </div>

        <div class="section">
            <h2>𝗦𝗞𝗜𝗜𝗜𝗦 𝗔𝗡𝗗 𝗘𝗫𝗣𝗘𝗥𝗧</h2>
            <ul>
                <li>ᴇᴛʜIᴄᴀl ʜᴀᴄᴋIɴɢ </li>
                <li>ᴡᴇʙ ᴍᴀᴋIɴɢ </li>
                <li>Jᴀᴠᴀ Lᴇᴀʀɴᴇʀ</li>
                <li>ᴛᴇʀᴍᴜx ᴛᴏᴏls ᴍᴀᴋIɴɢ </li>
                <li>ᴘʜIsʜIɴɢ ᴡᴇʙ ᴍᴀᴋIɴɢ </li>
                <li>ᴄᴀʀᴅᴇʀ </li>
                <li>ɴᴇᴛᴡᴏʀᴋ sᴇᴄᴜʀIᴛʏ</li>
                <li>ᴇᴛᴄ</li>
            </ul>
        </div>

        <div class="section admins">
            <h2>𝗔𝗗𝗠𝗜𝗡𝗦 𝗢𝗡 𝗖𝗛𝗔𝗡𝗡𝗘𝗜𝗦</h2>
            <ul>
                <li><a href="https://t.me/fn_network_back">FN NETWORK</a></li>
                <li><a href="https://t.me/Gujaratsquad">GujratTigerSquad</a></li>
                <li><a href="https://t.me/networkdham">NetworkDham</a></li>
            </ul>
        </div>
    </div>

</body>
</html>