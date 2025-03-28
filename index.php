<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 10px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 48%;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #218838;
        }
        input[type="reset"] {
            background-color: #dc3545;
        }
        input[type="reset"]:hover {
            background-color: #c82333;
        }
        .output-table {
            margin-top: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .output-table td {
            text-decoration: underline;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>PHP Output #1:</h1>
    
    <fieldset style="margin-top: 20px">
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>Age:</td>
                <td>
                    <input type="text" name="age" placeholder="Enter Age" required />
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <select id="gender" name="gender">
                        <option value="select" disabled selected>Select Gender</option>
                        <option value="others">Others</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address" placeholder="Enter Address" required />
                </td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td>
                    <input type="text" name="contact" placeholder="Enter Contact" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>