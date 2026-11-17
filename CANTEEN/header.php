<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Canteen System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef1f5;
            margin: 0;
            padding: 25px;
            color: #2c353f;
        }

        .container {
            max-width: 720px;
            margin: auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .banner {
            background: #701c1c;
            color: #ffffff;
            padding: 28px 32px;
        }

        .banner h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 0.5px;
        }

        .banner p {
            margin: 6px 0 0;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #e6caca;
        }

        .content {
            padding: 28px 32px;
        }

        h2 {
            color: #701c1c;
            margin-top: 24px;
            font-size: 20px;
        }

        h3 {
            color: #701c1c;
            font-size: 16px;
        }

        label {
            display: block;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            color: #5a6572;
            margin-top: 12px;
        }

        input, select, button {
            width: 100%;
            padding: 11px;
            margin: 6px 0 14px;
            box-sizing: border-box;
            border: 1px solid #dcdfe4;
            border-radius: 6px;
            font-size: 14px;
            background: #f4f6f8;
        }

        button {
            background: #701c1c;
            color: #ffffff;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s;
        }

        button:hover {
            background: #561414;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 12px 0;
        }

        th {
            background: #f8f5f0;
            color: #701c1c;
            font-size: 12px;
            text-transform: uppercase;
        }

        th, td {
            border: 1px solid #e2ddd5;
            padding: 10px 12px;
            text-align: left;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e8ec;
            margin: 24px 0;
        }

        .success {
            color: #216d45;
            font-weight: bold;
            text-transform: uppercase;
        }

        .error {
            color: #ad2532;
            font-weight: bold;
            text-transform: uppercase;
        }

        a {
            color: #701c1c;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="banner">
        <h1>Campus Canteen</h1>
        <p>HOLY ANGEL UNIVERSITY &nbsp;|&nbsp; SCHOOL OF COMPUTING &nbsp;&bull;&nbsp; CLASSROOM MOCKUP</p>
    </div>
    <div class="content">
