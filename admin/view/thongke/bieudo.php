<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>BIỂU ĐỒ</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=bieudo" method="POST">
                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                var data = google.visualization.arrayToDataTable([

                ['Danh mục', 'Số lượng sản phẩm'],
                <?php 
                    $tongdm = count($listthongke);
                    $i = 1;
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        if($i == $tongdm) $dauphay= ""; else $dauphay =",";
                        echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                        $i += 1;
                    }
                    
                    
                ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Thống kê sản phẩm', 'width':1100, 'height':800};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
                }
                </script>
                <div class="row mb10 ">
                    <a href="index.php?act=listtk"><input class="mr20" type="button" value="danh sách thống kê"></a>
                </div>
            </form>
        </div>
    </div>
</article>
