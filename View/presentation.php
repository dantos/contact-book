
<body>


<div class="content row">
    <main class="main" role="main">
        <div class="container">

            <?php

            foreach( $records as $index => $row )
            {
                echo '<div class="row">#'. $index . ' - '. $row["firstname"] . ' ' . $row["lastname"] . ' ' . $row["phone"] . '</div>';
            }
            ?>

            <form action="index.php">
                <input type="text" name="firstname"/>
                <input type="text" name="lastname"/>
                <input type="text" name="phone"/>
                <input type="submit" value="Send"/>
            </form>
        </div>

    </main>
</div>
</body>
