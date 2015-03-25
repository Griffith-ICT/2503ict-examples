{{-- Provides a form for user to enter name and age --}}
<!DOCTYPE html>
<html>
    <head>
    <title>
        Web Programming Examples
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/wp.css">
</head>
<body>
    <form method="post" action="greeting">
        <table>
            <tr>
                <td>Your name:</td>
                <td>
                <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Your age:</td>
                <td>
                    <input type="text" name="age">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>