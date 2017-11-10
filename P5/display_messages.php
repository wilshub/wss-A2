<html>
    <head>
        <title>
        Guestbook
        </title>
    </head>
    <body>
        <h1>Guest Book</h1>
        <p>Click <a href="guestbook.html">here</a> to return to Guestbook.</p>
        <h3>Messages:</h3>
        <?php
            // connect to MySQL
            $conn = @mysql_connect ( "localhost:3306", "wilsgw_gbook", "gbookpassword")
                or die (mysql_error());
            // select the database
            $rs = @mysql_select_db ( "wilsgwid_gbook", $conn ) or die (mysql_error());
            //Create the query
            $sql = "SELECT * FROM message";
            // execute the query
            $rs = mysql_query( $sql,$conn );
            // display the results
            echo ( "<table border='1'><tr><td><b>Name</b></td><td><b>Message</b></td></tr>" );
            while ( $row = mysql_fetch_array( $rs ) )
            {
                echo ( "<tr><td>".$row["guestName"]."</td><td>".$row["msg"]."</td></tr>" );
            }
            echo ( "</table>" );
        ?>
    </body>
</html>