<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fcfcfc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .profile-container {
            text-align: center;
            width: 100%;
            max-width: 400px; 
            padding: 20px;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
            margin-bottom: 30px;
        }

        .info-box {
            background-color: #e0e0e0; 
            color: #333333;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px; 
            font-size: 1.2rem;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <img class="avatar" src="{{ asset('https://i.pinimg.com/736x/e7/77/9a/e7779a54a6730159672861c3896ab1ec.jpg') }}" alt="Foto Profil">

        <div class="info-box">
           Casey affleck
        </div>
        
        <div class="info-box">
            Sistem Informasi
        </div>
        
        <div class="info-box">
            NPM: 2417052014
        </div>
    </div>

</body>
</html>
