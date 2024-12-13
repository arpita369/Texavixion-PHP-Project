<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a database connection
    $con = mysqli_connect($server, $username, $password);

    //checking for connection success
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    
    //collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $stream = $_POST['stream'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $combo = $_POST['combo'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `texavision2k25`.`dress_selection` (`name`, `phone`, `stream`, `gender`, `size`, `combo`, `address`, `pincode`, `email`, `date_time`) VALUES ('$name', '$phone', '$stream', '$gender', '$size', '$combo', '$address', '$pincode', '$email', current_timestamp());";
    // echo $sql;

    //excute query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        $insert = true; //flag for successful insertion
    }else{
        echo "Error: $sql <br> $con->error";
    }

    //close the db connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dress selection form 2K25</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-fixed bg-gradient-to-b from-blue-400 via-white to-green-400 text-black">
    <?php if ($insert) { ?>
        <!-- Thank You Section -->
        <div class="h-screen flex flex-col justify-center items-center text-center">
            <div class="h-64 w-64 bg-top bg-cover rounded-md" style="background-image: url('clg1.jpeg');"></div>
            <h1 class="text-5xl font-bold text-orange-900 mt-6">Thank You!</h1>
            <p class="text-2xl mt-2">Your response has been successfully submitted.</p>
            <a href='index.php'>
                <button class='mt-1 px-6 py-2 text-xl text-red-700 font-bold rounded border-b-2 border-red-700 hover:border-blue-800 hover:text-blue-800'>
                    Submit Another Response
                </button>
            </a>
        </div>
    <?php } else { ?>
    <div class="mx-64 my-4 p-3 bg-slate-900 bg-opacity-25 rounded-md">
        <div 
            class="h-64 mx-5 mt-6 text-center bg-center bg-cover bg-no-repeat rounded-xl items-center flex flex-col justify-end" 
            style="background-image: url('clg.jpg'); background-position: center 35%;">
                <h1 class="text-4xl font-bold font-serif text-orange-900 bg-white mb-1 rounded-md">TEXAVISION Dress Selection 2K25</h1>
                <p class="text-xl font-extrabold text-black mb-4">4TH YEAR ONLY</p>
        </div>
        <!-- post zyada secure hain, ispe likhi chize page url pe nahi dikhti, post se password wagera likh sakte hain. get mein likhi chize page url mein show karti hain. -->
        <form action="index.php" method="post">
            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <p class="text-xl font-semibold">NAME *</p>
                <input type="text" name="name" id="name" placeholder="Enter your name" required class="bg-transparent border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none text-lg placeholder-gray-400 mt-4 px-2 w-96">
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <p class="text-xl font-semibold">CONTACT NO *</p>
                <input type="tel" name="phone" id="phone" placeholder="Enter your contact number" required class="bg-transparent border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none text-lg placeholder-gray-400 mt-4 px-2 w-96">
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <fieldset>
                    <legend class="text-xl font-semibold">STREAM *</legend>
                    <p class="text-lg">
                        <input type="radio" name="stream" value="cse" class="mt-6 px-2" required> CSE<br>
                        <input type="radio" name="stream" value="it" class="mt-4 px-2"> IT<br>
                        <input type="radio" name="stream" value="tt" class="mt-4 px-2" > TT<br>
                        <input type="radio" name="stream" value="apm" class="mt-4 px-2" > APM<br>
                    </p>
                </fieldset>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <fieldset>
                    <legend class="text-xl font-semibold">GENDER *</legend>
                    <P class="text-lg">
                        <input type="radio" name="gender" value="male" class="mt-6 px-2" required> Male <br>
                        <input type="radio" name="gender" value="female" class="mt-4 px-2"> Female <br>
                    </P>
                </fieldset>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <fieldset>
                    <legend class="text-xl font-semibold">SIZE *</legend>
                    <p class="text-lg">
                        <select name="size" id="size" required class="border-b-2 border-gray-300 focus:border-blue-500 mt-4 px-2 w-96">
                            <option value="" class="text-gray-400">--Select your preferred size--</option>
                            <option value="xs-36">XS - 36</option>
                            <option value="s-38">S - 38</option>
                            <option value="m-40">M - 40</option>
                            <option value="l-42">L - 42</option>
                            <option value="xl-44">XL - 44</option>
                            <option value="xxl-46">XXL - 46</option>
                        </select>
                    </p>
                </fieldset>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <fieldset>
                    <legend class="text-xl font-semibold">COMBO SELECTION *</legend>
                    <p class="text-lg">
                        <input type="radio" name="combo" value="c1" class="mt-6 px-2" required> College T-Shirt + BOHURUPI Band T-Shirt + Wrist Band(College) + Hair Band(BOHURUPI) + Farewell Gown and Cap = Rs.700 <br>
                        <input type="radio" name="combo" value="c2" class="mt-4 px-2" > College T-Shirt + Wrist Band(College) + Hair Band(BOHURUPI) + Farewell Gown and Cap = Rs.500 <br>
                        <input type="radio" name="combo" value="c3" class="mt-4 px-2" > BOHURUPI Band T-Shirt + Wrist Band(College) + Hair Band(BOHURUPI) + Farewell Gown and Cap = Rs.500 <br>
                        <input type="radio" name="combo" value="c4" class="mt-4 px-2" > College T-Shirt + Wrist Band(College) + Hair Band(BOHURUPI) = Rs.300 <br>
                        <input type="radio" name="combo" value="c5" class="mt-4 px-2" > BOHURUPI Band T-Shirt + Wrist Band(College) + Hair Band(BOHURUPI) = Rs.300 <br>
                        <input type="radio" name="combo" value="c6" class="mt-4 px-2" > Wrist Band(College) + Hair Band(BOHURUPI) + Farewell Gown and Cap = Rs.300 <br>
                    </p>
                </fieldset>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <p class="text-xl font-semibold">ADDRESS (In case of Home Delivery, Extra Charges will be applied)<br> 
                    <textarea name="address" id="address" placeholder="Enter your address" rows="1" class="bg-transparent border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none text-lg placeholder-gray-400 mt-4 px-2 w-full"></textarea>
                </p>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <p class="text-xl font-semibold">PINCODE<br>
                    <input type="number" name="pincode" id="pincode" placeholder="*eg: 700012" class="bg-transparent border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none text-lg placeholder-gray-400 mt-4 px-2 w-96">
                </p>
            </div>

            <div class="mx-5 my-5 p-4 relative bg-slate-100 rounded-md">
                <p class="text-xl font-semibold">EMAIL ID<br>
                    <input type="email" name="email" id="email" placeholder="*eg: xyz@gmail.com" class="bg-transparent border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none text-lg placeholder-gray-400 mt-4 px-2 w-96">
                </p>
            </div>

            <button id="submit" class="mx-5 p-2 bg-green-800 rounded-md mb-2 hover:bg-green-700">
                <input type="submit" value="Submit" class="px-5 text-xl text-white font-semibold">
            </button>

            <button id="reset" class="float-right mb-3 mx-5 py-2 rounded-md hover:bg-slate-900 hover:bg-opacity-15">
                <input type="reset" value="Clear Form" class="px-5 text-xl text-green-950 font-bold">
            </button>
        </form>

    </div>
    <script src="index.js"></script> 
    <?php } ?>  
</body>
</html>