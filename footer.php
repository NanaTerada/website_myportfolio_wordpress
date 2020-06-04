<footer>
            <div class="footer-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/img-top.jpg"></div>
            <p>since_1990</p>


            <small>©️1990 Co.,Ltd. All Rights Reserved.</small>
        </footer>

        <script>
            $(function(){

                var pos1 = 30;
                var pos2 = 20;
                var pos3 = 10;
                var pos4 = 60;
                var pos5 = 100;
                var pos6 = 50;
                var pos7 = 80;

                var windowWidth = $(window).width();

                $(window).resize(function (){
                    windowWidth = $(window).width();
                    alert(windowWidth);
                });

                


                $(window).scroll(function () {
                    console.log(windowWidth)

                    var scroll = $(this).scrollTop();
                    var height =$(this).height();

                    console.log(scroll);
                    // console.log(height);

                    if (scroll >= height) {
                    $('header nav').css('top','0px');
                    //alert(scroll);
                } else {
                    $('header nav').css('top','-100px');
                }

                if( pos1 + scroll > windowWidth) {
                    $('#tag1').css('right',pos1 + scroll - windowWidth);

                } else {
                    $('#tag1').css('right',pos1 + scroll);
                }

                if (pos2 + scroll > windowWidth) {
                    $('#tag2').css('right',(pos2 - windowWidth + scroll) /3);
                    console.log((pos2 - windowWidth + scroll) /3);
                } else {
                    $('#tag2').css('right',(pos2 + scroll) /3);
                }

                // if (pos3 + scroll > windowWidth) {
                //     $('#tag3').css('right',pos3 + scroll - windowWidth);
                // } else {
                //     $('#tag3').css('right',pos3 + scroll);
                // }


                });

                $('.hamburger').click(function() {
                    $('header nav').addClass('open');
                    $('header nav ul').addClass('open');
                    $('.hamburger').addClass('open');
                    $('.close').addClass('open');
                    $('html').addClass('open');
                });

                $('.close').click(function(){
                    $('header nav').removeClass('open');
                    $('header nav ul').removeClass('open');
                    $('.hamburger').removeClass('open');
                    $('.close').removeClass('open');
                    $('html').removeClass('open');
                })

            });
        </script>

<?php
		wp_footer(); // ※</body>直前にwp_footer();を記述する
	?>
        
    </body>
</html>