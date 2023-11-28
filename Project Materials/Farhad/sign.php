<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/sign.css">
    <title>Form Card Effect</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="form-signup">
            <h2 class="form-title">Signup</h2>
            <p class="form-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cum!</p>
            <form action="">
                <div class="form-group">
                    <input type="email" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Email address</label>
                    <i class="ri-at-line form-icon"></i>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Your name</label>
                    <i class="ri-user-smile-line form-icon"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Password</label>
                    <i class="ri-lock-line form-icon"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Confirm password</label>
                    <i class="ri-lock-line form-icon"></i>
                </div>
                <button type="submit" class="btn-submit">Signup</button>
            </form>
            <p class="form-bottom">I'm not a member. <a href="#" class="link-login">Login</a></p>
        </div>
        <div class="form-login">
            <h2 class="form-title">Login</h2>
            <p class="form-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, cum!</p>
            <form action="">
                <div class="form-group">
                    <input type="email" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Email address</label>
                    <i class="ri-at-line form-icon"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="" class="form-label">Password</label>
                    <i class="ri-lock-line form-icon"></i>
                </div>
                <button type="submit" class="btn-submit">Login</button>
            </form>
            <p class="form-bottom">I'm not a member. <a href="#" class="link-signup">Signup</a></p>
        </div>
    </div>
	<script src="../../dist/js/sign.js"></script>
</body>
</html>