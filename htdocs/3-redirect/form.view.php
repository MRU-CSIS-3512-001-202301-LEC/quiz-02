<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="<?= $handler ?>" method="post">
        <ul>
            <li>
                <label for="band">Band:</label>
                <input type="text" id="band" name="band">
            </li>
            <li>
                <fieldset>
                    <legend>How loud is the band?</legend>

                    <input type="radio" id="level-10" name="band-loudness" value="10" />
                    <label for="level-10">level 10</label><br />

                    <input type="radio" id="level-11" name="band-loudness" value="11" />
                    <label for="level-11">level 11</label>
                </fieldset>
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>