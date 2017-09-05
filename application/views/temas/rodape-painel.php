<div class="col-sm-12">
    <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
</div>

</div>	
<script src="<?= base_url() ?>includes/js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url() ?>includes/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>includes/js/chart.min.js"></script>
<script src="<?= base_url() ?>includes/js/chart-data.js"></script>
<script src="<?= base_url() ?>includes/js/easypiechart.js"></script>
<script src="<?= base_url() ?>includes/js/easypiechart-data.js"></script>
<script src="<?= base_url() ?>includes/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url() ?>includes/js/custom.js"></script>
<script src="<?= base_url() ?>includes/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>includes/js/jquery.maskMoney.js"></script>


<script>
            $(window).on('load', function () { // makes sure the whole site is loaded 
                $('#status').fadeOut(); // will first fade out the loading animation 
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                $('body').delay(350).css({'overflow': 'visible'});
            })
        </script>

    </body>
    </html>
