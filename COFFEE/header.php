<?php

$shopName = "Kapehan ni Juswa";
$tagline  = "Unang sipsip, masasarapan ka";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $shopName; ?></title>
    <style>
        /* ---------- Colors ---------- */
        :root {
            --navy:  #0a1b3d;
            --deep:  #12306b;
            --sky:   #5ec2ff;
            --mist:  #d9f0ff;
            --paper: #f4faff;
            --ink:   #12233f;
        }

        * { box-sizing: border-box; }

        body {
            font-family: Georgia, "Times New Roman", serif;
            margin: 0;
            padding: 30px 16px;
            color: var(--ink);
            min-height: 100vh;
            /* dark blue to sky blue background */
            background:
                radial-gradient(circle at 15% 10%, rgba(94,194,255,.55), transparent 45%),
                radial-gradient(circle at 90% 90%, rgba(94,194,255,.35), transparent 40%),
                linear-gradient(160deg, var(--navy), var(--deep) 60%, #2a7fc4);
            background-attachment: fixed;
        }

        .container {
            max-width: 720px;
            margin: auto;
            background: var(--paper);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 10, 40, .5);
        }

        .banner {
            background: linear-gradient(120deg, var(--navy), var(--deep));
            color: #fff;
            padding: 28px 32px;
            border-bottom: 4px solid var(--sky);
        }
        .banner h1 { margin: 0; font-size: 30px; letter-spacing: .5px; }
        .banner p  { margin: 6px 0 0; font-size: 13px; color: var(--sky); font-family: Arial, sans-serif; }

        .content { padding: 28px 32px; }

        h2 { color: var(--deep); margin: 26px 0 10px; font-size: 22px; }
        h3 { color: var(--deep); font-size: 17px; }

        label {
            display: block;
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            color: #46618c;
            margin-top: 12px;
        }

        input, select, button {
            width: 100%;
            padding: 11px;
            margin: 6px 0 12px;
            border: 1px solid #b9d6ef;
            border-radius: 8px;
            font-size: 15px;
            background: #fff;
            font-family: Arial, sans-serif;
        }
        input:focus, select:focus { outline: 2px solid var(--sky); }

        button {
            background: var(--deep);
            color: #fff;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 14px;
        }
        button:hover { background: var(--navy); }

        table { width: 100%; border-collapse: collapse; margin: 10px 0; font-family: Arial, sans-serif; }
        th { background: var(--deep); color: #fff; font-size: 13px; }
        th, td { border: 1px solid #c5dff3; padding: 9px 12px; text-align: left; }
        tr:nth-child(even) td { background: var(--mist); }

        hr { border: none; border-top: 1px solid #c5dff3; margin: 24px 0; }

        .success { color: #17794a; font-weight: bold; }
        .error   { color: #b3261e; font-weight: bold; }

        a { color: var(--deep); font-weight: bold; }

        /* ---------- Receipt ---------- */
        .receipt {
            background: #fff;
            border: 2px dashed var(--sky);
            border-radius: 10px;
            padding: 22px 26px;
            font-family: "Courier New", monospace;
            font-size: 14px;
        }
        .receipt h2 { text-align: center; margin: 0; font-size: 22px; }
        .receipt .center { text-align: center; margin: 2px 0; color: #46618c; }
        .receipt .row { display: flex; justify-content: space-between; margin: 5px 0; }
        .receipt .total { font-size: 18px; font-weight: bold; color: var(--deep); }
        .receipt hr { border-top: 1px dashed #9bc7e8; margin: 14px 0; }
        .steps { font-family: Arial, sans-serif; font-size: 14px; }
        .steps p { margin: 4px 0; }

        footer { text-align: center; font-family: Arial, sans-serif; font-size: 13px; color: #46618c; }
    </style>
</head>
<body>
<div class="container">
    <div class="banner">
        <h1><?php echo $shopName; ?></h1>
        <p><?php echo $tagline; ?></p>
    </div>
    <div class="content">

