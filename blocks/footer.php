<footer>
	<div class="container">
		<div class="col-md-4">
			<ul>
				<li class="tel">8 (4922) 32 32 04</li>	
				<li class="foot-adr"><i class="fa fa-map-marker fa-2x"></i> Коммунальный спуск, д.1</li>
				<li class="foot-mail"><i class="fa fa-envelope-o"></i> <a href="mailto:smp245@bk.ru">smp245@bk.ru</a></li>
				<li class="sozseti">
					
                <!-- <i class="fa fa-twitter fa-2x"></i>
                <i class="fa fa-google-plus fa-2x"></i>
                <i class="fa fa-facebook fa-2x"></i>
                <i class="fa fa-vk fa-2x"></i>
                <i class="fa fa-youtube fa-2x"></i> -->
                <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,gplus" data-yashareTheme="counter"></div> 
				</li>				
			</ul>
		</div>
		<div class="col-md-4">
		  <div class="foot-zag">Строительство</div>
			<ul>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/grazhdanskoe-stroitelstvo/">Гражданское строительство</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/promyshlennoe-stroitelstvo/">Промышленное строительство</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/zheleznodorozhnoe-stroitelstvo/">Железнодорожное строительство</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/zabivka-svay/">Сваебойные работы</a></li>
			</ul>
		</div>
		<div class="col-md-4">
		    <div class="foot-zag"></div>
			<ul>
			    <li><a href="http://www.xn---245-u5dsm.xn--p1ai/arenda-spectehniki/">Аренда спецтехники</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/licenses/">Лицензии</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/objects/">Объекты</a></li>
				<li><a href="http://xn--h1alcg0a.xn--p1ai/" rel="nofollow" target="_blank">Проектные работы</a></li>
				<li><a href="http://www.xn---245-u5dsm.xn--p1ai/contacts/">Контакты</a></li>
			</ul>
		</div>	
	</div>
	<div class="container footer-bottom">
	    <span>© 2013-2015 ЗАО «СМП-245-ТРАНССТРОЙ»</span>
	    <div class="pull-right"><!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=30537562&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/30537562/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:30537562,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter30537562 = new Ya.Metrika({id:30537562, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/30537562" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
	</div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/js.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/jquery.fancybox.js"></script>
<script src="js/helpers/jquery.fancybox-thumbs.js"></script> 
<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/jquery.maskedinput.min.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
</script>
<script>
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);
});
</script>
<!--<script src="js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script>-->
		<script type="text/javascript">
			$(function() {
				$('#images > div').each(function() {
					var $cfs = $(this);
					$cfs.carouFredSel({
						direction: 'up',
						circular: false,
						infinite: false,
						auto: false,
						scroll: {
							queue: 'last'
						},
						items: {
							visible: 1,
							width: 292,
							height: 292
						}
					});
					$cfs.hover(
						function() {
							$cfs.trigger('next');
						},
						function() {
							$cfs.trigger('prev');
						}
					);
				});
			});
		</script>
<script>
$(document).ready(function(){
	$('.open-modal').click(function(){
		$('#modal-zakaz').modal('show');
	});
	$("#tel").mask("+7 (999) 999-9999");
});
</script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
$(function () {
    var pixSlider = $('.pixroll-images').bxSlider({
        useCSS: false,
        pager: false,
        auto: true,
        pause: 8000,
        controls: false,
        slideWidth: 830,
        autoHover: true,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate');
            $('.bx-next').trigger('click');

        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate'); 
            $('.bx-prev').trigger('click');            
        },
        onSliderLoad: function(){
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $('.pixroll-images li').eq(3).find('.parallax-container').addClass('pulse_2').addClass('css-animate');
        }
    });

    $('.promo-slider').bxSlider({
        useCSS: false,
        pager: false,
        touchEnabled: false,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToNextSlide();
        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToPrevSlide();
        }
    });

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63370383-1', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>