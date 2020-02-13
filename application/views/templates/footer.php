<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/'); ?>vendor/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="<?= base_url('assets/'); ?>dist/js/app-style-switcher.js"></script>
<script src="<?= base_url('assets/'); ?>dist/js/feather.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>dist/js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/sparkline/sparkline.js"></script>

<!--Custom JavaScript -->
<script src="<?= base_url('assets/'); ?>dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/c3/d3.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/c3/c3.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/chartist/dist/chartist.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('assets/'); ?>dist/js/pages/dashboards/dashboard1.min.js"></script>
<!--This page plugins -->
<script src="<?= base_url('assets/'); ?>vendor/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>dist/js/pages/datatable/datatable-basic.init.js"></script>

<!--Date Picker-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });
</script>

<!-- Chart JS -->
<script src="<?= base_url('assets/'); ?>dist/js/pages/chartjs/chartjs.init.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/libs/chart.js/dist/Chart.min.js"></script>
<script text="javascript">
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "March", "Apr", "May", "June", "July", "August", "Sept", "Okt", "Nov", "Des"],
            datasets: [{
                label: "Presale",
                fill: true,
                backgroundColor: "rgba(116, 96, 238,0.2)",
                borderColor: "rgba(116, 96, 238,1)",
                pointBorderColor: "#fff",
                pointBackgroundColor: "rgba(116, 96, 238,1)",
                data: [3, 5, 6, 7, 8, 4, 3, 7, 5, 1, 4, 2]
            }, {
                label: "Workorder",
                fill: true,
                backgroundColor: "rgba(255, 60, 166,0.2)",
                borderColor: "rgba(255, 60, 166,1)",
                pointBorderColor: "#fff",
                pointBackgroundColor: "rgba(255, 60, 166,1)",
                pointBorderColor: "#fff",
                data: [2, 4, 6, 7, 5, 4, 3, 5, 1, 5, 3, 8]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Line Chart Workorder and Presale'
            }
        }
    });
</script>

<script text="javascript">
    var ctx = document.getElementById("pie-chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Presale", "Workorder"],
            datasets: [{
                backgroundColor: [
                    "rgba(116, 96, 238,1)",
                    "rgba(255, 60, 166,1)"
                ],
                data: [49, 51]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Pie Chart Workorder vs Presale'
            }
        }
    });
</script>

<script type="text/javascript">
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
</script>
<!-- Menampilkan Hari, Bulan dan Tahun -->
<script type='text/javascript'>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.getElementById('date').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>

<!--Modals-->
<script>
    $('#add_users').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>


<script>
    $('#update_users').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

<script>
    $('#add_users').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>


<script>
    $('#update_users').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

<!--End of Modals-->

</body>

</html>