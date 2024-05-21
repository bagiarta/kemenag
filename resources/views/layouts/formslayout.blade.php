<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 20px;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }

        .banner img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        .banner h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: #ffffff;
        }

        label,
        p {
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"],
        button[type="reset"] {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            width: calc(50% - 10px);
            height: 40px;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        button[type="reset"] {
            background-color: #6c757d;
        }

        button[type="reset"]:hover {
            background-color: #5a6268;
        }

        button[type="submit"]+button[type="reset"] {
            margin-left: 20px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            button[type="submit"],
            button[type="reset"] {
                width: 100%;
                margin: 5px 0;
            }

            button[type="submit"]+button[type="reset"] {
                margin-left: 0;
            }
        }

        </body></html>
