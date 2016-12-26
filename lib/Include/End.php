<br/>
</div>
<div class="container bg-inverse text-white">
    <div class="row" style="padding-top: 20px">
        <div class="col-md-3">
            <h5>Recent Posts</h5>
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);

            $res = mysql_query("SELECT * FROM e39.news ORDER BY postedOn DESC LIMIT 5");

            while ($row = mysql_fetch_array($res)) {
                echo('<p>> <a href="/post?id=' . $row['id'] . '" class="text-white">' . $row['title'] . '</a></p>');
            }
            ?>
        </div>
        <div class="col-md-3">
            <h5>Serving Since 1971</h5>
            <p>The Oxford Emergency Squad was formed in 1971 by Joe Henderson, Harvey Hissim, and Dan Collins.</p>
        </div>
        <div class="col-md-3">
            <h5>Want to Join?</h5>
            <p>The Oxford Emergency Squad is always looking for new members.  We accept anyone over the age of 14 and will pay for all training.</p>
        </div>
        <div class="col-md-3">
            <h5>Contact Us</h5>
            <p>Email: contact@39rescue.cf</p>
            <p>Phone: (908) 453-2567</p>
            <p>Fax: (908) 453-2770</p>
        </div>
    </div>
</div>
<div class="container text-white" style="background-color: #3b3b3b">
    <div class="text-lg-center">Copyright &copy; 1971-2017 Oxford Emergency Squad Inc.</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script type="text/JavaScript" src="../../assets/js/sha512.js"></script>
<script type="text/JavaScript" src="../../assets/js/forms.js"></script>
</body>
</html>
