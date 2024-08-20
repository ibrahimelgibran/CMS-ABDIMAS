<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Wali</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <script src="/cdn-cgi/apps/head/yZcRqLnyFEjMCrfXHlj2VKQPx0g.js"></script><link rel="icon" href="<?php echo base_url() ?>resources/images/Ex-2logo2.png" type="image/gif">
    <!-- Tailwind -->
   
    <link href="<?php echo base_url() ?>assets/css/tailwind.min.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        .button {
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 20px 2px;
        cursor: pointer;
      }
        .primary {background-color: #0D6EFD;} /* Green */
        .danger {background-color: #DC3545;} /* Blue */

        p.kartumerah {
        border-style: solid;
        color: white;
        border-color: red;
        background-color: red;
      }
    </style>
    
</head>
<body class="bg-white font-family-karla h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-left text-5xl" style="color:#087990"><u><strong>Login</strong></u><span class="text-left text-2xl" style="color:#3F6F81"><strong>Wali Kelas</strong></span><p>
                  <h5 style="color:#087990"><strong style="color:#087990">Selamat Datang Di Halaman Login</strong> <br>Sistem Login SmartSchool </h5>


                 

                <form action=" <?php echo base_url() ?>loginwalikelas" method="POST" class="flex flex-col pt-3 md:pt-4">
                    <div class="flex flex-col pt-2">
                        <label for="userwali" class="text-lg">Username</label>
                        <input type="text" id="userwali" name="userwali" placeholder="Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    
                    <?php echo form_error('userwali'); ?>
                    <div class="flex flex-col pt-2">
                        <label for="passwali" class="text-lg">Password</label>
                        <input type="passwali" id="passwali" name="passwali" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <?php echo form_error('passwali'); ?>


     
                
                    <button type="submit" class="button primary">Masuk</button>

                </form>
                <?php if(isset($error)) { echo $error; }; ?>
                <div class="text-center pt-12 pb-12">
                    <p>Perlu Bantuan ? <a href="https://exampremium.co.id" class="underline font-semibold">Hubungi Bagian IT</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="resources/images/bg-login.gif">
        </div>
    </div>

</body>
</html>