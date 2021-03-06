<div class="section">

    <h1 class="title" id="page-title"><?=$BC->_getPageTitle()?></h1>

    <div id="block-system-main">
        <div class="content">
        
            <div style="float:left;width:450px;">
        
                <div>
                	<?
                	$contact_page = $BC->pages_model->getByLink('contact_us');
                	echo $contact_page['body'];
                	?>
                	<br />
            	</div>
            
                <div class="required">* <?=language('required_fields')?></div>
                <br />
                
                <div class="green" id="success"></div>
                <div class="red" id="errors"></div>
                
                <form id="contact_form" action="#" method="post">
                    <div class="fieldset">
                        <div>
                        	<label><?=$BC->_getFieldTitle("name")?> <span class="required">*</span></label>
                        	<input type="text" name="name" value="" size="70" class="form-text" />
                        </div>
                        <div>
                        	<label><?=$BC->_getFieldTitle("email")?> <span class="required">*</span></label>
                        	<input type="text" name="email" value="" size="70" class="form-text" />
                        </div>
                        <div>
                        	<label><?=$BC->_getFieldTitle("message")?> <span class="required">*</span></label>
                        	<textarea name="message" rows="7" cols="73" class="form-text"></textarea>
                        </div>
                        
                        <div>
                        	<label><?=$BC->_getFieldTitle("captcha")?> <span class="required">*</span></label>
                        	<div>
                        	   <div style="float:left;"><?=$cap_img?></div> 
                        	   <div style="float:left;margin-left:10px;"><input type="text" name="captcha" value="" class="form-text" /></div>
                        	   <div style="clear:both;"></div> 
                            </div>
                        </div>
                        
                        <div>
                            <?=form_submit('submit',language('submit'),"class='form-submit'")?>
                        </div>
                       
                    </div>
                </form>
                
            </div>
            
            <div id="YMapsLocation1" style="float:left;width:480px;height:520px;"></div>
            
            <div style="clear:both"></div>
            
        </div>
    </div>
    
</div>


<?=include_js($BC->_getFolder('js').'custom/contact_us/send_form.js')?>

<!-- Yandex Map -->
<script src="https://api-maps.yandex.ru/2.0/?load=package.standard&mode=debug&lang=uk-UA&key=AE4RLlABAAAAne1pTwMA3aoI49eJs3OdgLIgp9BWeAn1Q7UAAAAAAAAAAAD6CaXLeEhsEveBkwUoieNPG33gSA=="></script>
<script type="text/javascript">
    ymaps.ready(function () {
        var mapPlgPM1 = new ymaps.Map("YMapsLocation1", {
                center: [49.551075, 25.593044],
                zoom: 17
            }
        );
        mapPlgPM1.controls
            .add('zoomControl', { left: 5, top: 5 })
            .add('typeSelector');
        mapPlgPM1.balloon.open([49.551075, 25.593044], '<div style="color:black"><h3>«Євродах»</h3><div>м. Тернопіль, вул. Руська 21, 7 поверх</div></div>');
    });
</script>