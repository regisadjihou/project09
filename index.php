<!DOCTYPE html>
<html>
<head>
    <title>Mad Libs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1, h2 {
            color: #333;
        }

        h2 {
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        p {
            margin-top: 20px;
            line-height: 1.5;
        }

        /* Color Styling */
        h1 {
            color: #e74c3c;
        }

        form {
            border: 2px solid #3498db;
        }

        label {
            color: #3498db;
        }

        input[type="text"] {
            border: 1px solid #3498db;
        }

        input[type="submit"] {
            background-color: #3498db;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Mad Libs Story</h1>

    <?php
    $story = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adjective1 = $_POST["adjective1"];
        $nounPlural1 = $_POST["nounPlural1"];
        $adjective2 = $_POST["adjective2"];
        $nounPlural2 = $_POST["nounPlural2"];
        $verbBaseForm = $_POST["verbBaseForm"];
        $nounPlural3 = $_POST["nounPlural3"];
        $noun = $_POST["noun"];
        $animal = $_POST["animal"];
        $verbPastTense = $_POST["verbPastTense"];
        $partOfBody = $_POST["partOfBody"];

        $story = "Once upon a time, in a $adjective1 forest, there were many curious $nounPlural1. The trees were $adjective2 and the $nounPlural2 rustled in the wind. One day, they decided to $verbBaseForm to find the hidden $nounPlural3.

        As they journeyed, they stumbled upon a mysterious $noun. Suddenly, an adventurous $animal appeared and $verbPastTense them to follow. They reached a clearing where a magnificent $noun stood, shimmering in the sunlight. The $animal told them that the $noun held the power to grant a wish.

        Excitedly, they made a wish and touched the $noun with their $partOfBody. In an instant, their wish came true, and they realized the true magic was the journey itself.";

        echo "<h2>Your Mad Lib Story:</h2>";
        echo "<p>" . nl2br($story) . "</p>";
    }
    ?>

<h2>Fill in the Blanks</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Adjective 1:</label> <input type="text" name="adjective1"><br>
        <label>Noun Plural 1:</label> <input type="text" name="nounPlural1"><br>
        <label>Adjective 2:</label> <input type="text" name="adjective2"><br>
        <label>Noun Plural 2:</label> <input type="text" name="nounPlural2"><br>
        <label>Verb Base Form:</label> <input type="text" name="verbBaseForm"><br>
        <label>Noun Plural 3:</label> <input type="text" name="nounPlural3"><br>
        <label>Noun:</label> <input type="text" name="noun"><br>
        <label>Animal:</label> <input type="text" name="animal"><br>
        <label>Verb Past Tense:</label> <input type="text" name="verbPastTense"><br>
        <label>Part of Body:</label> <input type="text" name="partOfBody"><br>
        <input type="submit" value="Done">
    </form>
    
</body>
</html>
