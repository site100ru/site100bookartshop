<?php get_header(); ?>	
		
			
<div id="rec97341890" class="r t-rec" style=" " data-animationappear="off" data-record-type="18" >
	<!-- cover -->
	<div class="t-cover" id="recorddiv97341890" bgimgfield="img" style="height:60vh; background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3631-3833-4533-b663-366336393938__-__resize__20x__251.jpg');" >
		<div class="t-cover__carrier" id="coverCarry97341890" data-content-cover-id="97341890" data-content-cover-bg="<?php echo get_template_directory_uri(); ?>/images/tild3631-3833-4533-b663-366336393938__251.jpg" data-content-cover-height="60vh" data-content-cover-parallax="dynamic" style="height:60vh;background-attachment:scroll; background-position:center top;"></div>
		<div class="t-cover__filter" style="height:60vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#4c000000');"></div>
		<div class="t-container">
			<div class="t-col t-col_8 t-prefix_4">
				<div class="t-cover__wrapper t-valign_middle" style="height:60vh;">
					<div class="t001 t-align_left">
						<div class="t001__wrapper" data-hook-content="covercontent">
							<div class="t001__uptitle t-uptitle t-uptitle_sm" style="font-size:25px;font-family:'Roboto';letter-spacing:1.5px;" field="subtitle">Спектакли Электротеатра Станиславский перевоплощаются в книги</div>
							<div class="t001__title t-title t-title_xl" style="font-size:50px;font-family:'Roboto';text-transform:uppercase;" field="title">Перелистните страницу.<br />ВоЙдите в действие</div>
							<div class="t001__descr t-descr t-descr_xl " style="font-size:30px;" field="descr"><br /><br /></div>
							<span class="space"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- arrow -->
		<div class="t-cover__arrow"><div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated"><div class="t-cover__arrow_mobile"><svg class="t-cover__arrow-svg" style="fill:#ffffff;" x="0px" y="0px" width="38.417px" height="18.592px" viewBox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;"><g><path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"/></g></svg></div></div></div>
		<!-- arrow -->
	</div>
</div>
			
			
<div id="rec97341893" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-record-type="215" >
	<a name="shop" style="font-size:0;"></a>
</div>


<div id="rec97341894" class="r t-rec t-rec_pt_0 t-rec_pb_75" style="padding-top:0px;padding-bottom:75px;background-color:#e6e6e6; " data-animationappear="off" data-record-type="686" data-bg-color="#e6e6e6">
	<!-- t686 -->
	<div class="t686" data-tile-ratio="0.72222222222222">
		<div class="t-section__container t-container">
			<div class="t-col t-col_12">
				<div class="t-section__topwrapper t-align_center">
					<div class="t-section__title t-title t-title_xs" field="btitle"><br /><br />Все книги издательства</div>
				</div>
			</div>
		</div>
		<div class="t686__container t-container">
			
			<div class="t686__row" >
				<?php
					// параметры по умолчанию
					$my_posts = get_posts( array(
						'numberposts' => 99,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'product',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					global $post;

					foreach( $my_posts as $post ){
						setup_postdata( $post ); ?>
						<div class="t686__col t-col t-col_4 t-align_center " style="margin-bottom: 50px;">
							<a class="t686__link" href="<?php echo get_permalink(); ?>" target="">
								<div class="t686__table" style="height:260px;">
									<div class="t686__cell t-align_center t-valign_middle">
										<div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396106910" data-original="<?php echo get_the_post_thumbnail_url(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
										<div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div>
										<div class="t686__textwrapper t686__animation_fast ">
											<div class="t686__textwrapper__content">
												<div class="t686__inner-wrapper t686__inner-wrapper_animated-btn">
													<div class="t686__title t-name t-name_xl" field="li_title__1538396106910" style="font-size:28px;" ><?php echo get_the_title(); ?></div>
													<div class="t686__text t-descr t-descr_xs" field="li_text__1538396106910" style="" >
														<?php echo get_post_meta( get_the_ID(), 'header-price-button-block-short-description-meta', true ) ?>
													</div>
												</div>
												<div class="t686__button-container t686__button_show-hover">
													<div class="t686__button-wrapper">
														<div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<? }

					wp_reset_postdata(); // сброс
				?>
			</div>
			
			
			
			<!--div class="t686__row" >
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="blue_bird.html" target="">
						<div class="t686__table" style="height:260px;">
							<div class="t686__cell t-align_center t-valign_middle">
								<div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396106910" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3139-6264-4565-b037-376237373136__IMG_0013.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3139-6264-4565-b037-376237373136__-__resizeb__20x__IMG_0013.jpg');"></div>
								<div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div>
								<div class="t686__textwrapper t686__animation_fast ">
									<div class="t686__textwrapper__content">
										<div class="t686__inner-wrapper t686__inner-wrapper_animated-btn">
											<div class="t686__title t-name t-name_xl" field="li_title__1538396106910" style="font-size:28px;" >«СИНЯЯ ПТИЦА. Воспоминания для спектакля»</div>
											<div class="t686__text t-descr t-descr_xs" field="li_text__1538396106910" style="" >Борис Юхананов, Владимир Коренев, Алефтина Константинова</div>
										</div>
										<div class="t686__button-container t686__button_show-hover">
											<div class="t686__button-wrapper">
												<div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				
				<div v class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="drillalia_soft.html" target="">
						<div class="t686__table" style="height:260px;">
							<div class="t686__cell t-align_center t-valign_middle">
								<div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396093520" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3933-3837-4165-a361-393666346161____.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3933-3837-4165-a361-393666346161__-__resizeb__20x____.jpg');"></div>
								<div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div>
								<div class="t686__textwrapper t686__animation_fast ">
									<div class="t686__textwrapper__content">
										<div class="t686__inner-wrapper t686__inner-wrapper_animated-btn">
											<div class="t686__title t-name t-name_xl" field="li_title__1538396093520" style="font-size:28px;" >«Сверлийцы» <br />роман-опера</div>
											<div class="t686__text t-descr t-descr_xs" field="li_text__1538396093520" style="" >Борис Юхананов, мягкая обложка</div>
										</div>
										<div class="t686__button-container t686__button_show-hover">
											<div class="t686__button-wrapper">
												<div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/terzopoulos" target="">
						<div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1503603844046" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3634-6330-4262-b165-383533626262_____.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3634-6330-4262-b165-383533626262__-__resizeb__20x_____.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1503603844046" style="font-size:28px;" >«Возвращение Диониса»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1503603844046" style="" >Теодорос Терзопулос</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div>
					</a>
				</div>
			</div><!-- /.row -->
			
			<!--div class="t686__row" >
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/drillalia_gift" target="">
						<div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1539380780377" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3064-6132-4362-b962-326137313033__IMG_3411.JPG" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3064-6132-4362-b962-326137313033__-__resizeb__20x__IMG_3411.JPG');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1539380780377" style="font-size:28px;" >«Сверлийцы» <br />роман-опера</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1539380780377" style="" >Борис Юхананов, подарочное издание</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/drillalia_bookart" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1539381773246" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3261-3865-4431-a639-666561643563__250.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3261-3865-4431-a639-666561643563__-__resizeb__20x__250.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1539381773246" style="font-size:28px;" >«Сверлийцы» <br />роман-опера</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1539381773246" style="" >Борис Юхананов, Book Art</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/abwesenheit" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396549096" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3732-3161-4435-b661-373664366630______.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3732-3161-4435-b661-373664366630__-__resizeb__20x______.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1538396549096" style="font-size:28px;" >«Эстетика отсутствия»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1538396549096" style="" >Хайнер Гёббельс</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div>
			</div><!-- /.row -->
			
			<!--div class="t686__row" >
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/elprincipeconstante" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396236272" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3332-6138-4066-b465-346436386138__IMG_2676.JPG" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3332-6138-4066-b465-346436386138__-__resizeb__20x__IMG_2676.JPG');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1538396236272" style="font-size:28px;" >«Стойкий принцип». Режиссёрский разбор</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1538396236272" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/stoykiy_foto" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1551094177948" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6261-3261-4262-a535-653666386536______2.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6261-3261-4262-a535-653666386536__-__resizeb__20x______2.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1551094177948" style="font-size:28px;" >«Стойкий принцип». Фотоальбом</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1551094177948" style="" >Андрей Безукладников, Наталия Чебан</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/janfabre" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1494497749748" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6663-6662-4438-a335-366338356435__320d3447-5c10-49e4-a.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6663-6662-4438-a335-366338356435__-__resizeb__20x__320d3447-5c10-49e4-a.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1494497749748" style="font-size:28px;" >«Я – ошибка» <br /><br /></div> <div class="t686__text t-descr t-descr_xs" field="li_text__1494497749748" style="" >Ян Фабр</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div>
			</div><!-- /.row -->
			
			<!--div class="t686__row" > <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/golem_book" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1494498239096" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3136-3134-4837-b635-346363623562__094d88ce-fcd7-4811-9.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3136-3134-4837-b635-346363623562__-__resizeb__20x__094d88ce-fcd7-4811-9.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1494498239096" style="font-size:28px;" >«Голем»</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/nedor" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1503603847449" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6366-3663-4636-b237-646531383132__IMG_0095.JPG" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6366-3663-4636-b237-646531383132__-__resizeb__20x__IMG_0095.JPG');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1503603847449" style="font-size:28px;" >«Недоросль. Дневник» и «Недоросль. Фотоальбом»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1503603847449" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/faust_project" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1503603850637" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6333-6336-4564-b939-626133653761__DSC_6796.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6333-6336-4564-b939-626133653761__-__resizeb__20x__DSC_6796.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1503603850637" style="font-size:28px;" >«ПРОЕКТ ФАУСТ» <br /></div> <div class="t686__text t-descr t-descr_xs" field="li_text__1503603850637" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div>
			</div><!-- /.row -->
			
			<!--div class="t686__row" >
				<div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/teatr_i_dnevniki" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396245027" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3432-3939-4265-b061-396166336537__IMG_0135_.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3432-3939-4265-b061-396166336537__-__resizeb__20x__IMG_0135_.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1538396245027" style="font-size:28px;" >Театр и его дневники</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1538396245027" style="" >Борис Юхананов, Наталья Шевченко</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/moment" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1503603852131" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3437-6563-4732-b965-366365646365____09.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3437-6563-4732-b965-366365646365__-__resizeb__20x____09.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1503603852131" style="font-size:28px;" >Моментальные записки сентиментального солдатика</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1503603852131" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div> <div class="t686__col t-col t-col_4 t-align_center "> <a class="t686__link" href="/notabene" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1538396584832" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6464-6438-4136-b262-333633326530__IMG_0449.JPG" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6464-6438-4136-b262-333633326530__-__resizeb__20x__IMG_0449.JPG');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1538396584832" style="font-size:28px;" >«Nota Bene»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1538396584832" style="" >Юрий Хариков</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a> </div>
			</div><!-- /.row -->
			
			<!--div class="t686__row">
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/ot_do" target="">
						<div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1540890017017" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6636-3365-4231-a462-646165343738_______6318.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6636-3365-4231-a462-646165343738__-__resizeb__20x_______6318.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1540890017017" style="font-size:28px;" >«От «Театра Театра до Сада»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1540890017017" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a>
				</div>
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/nonsens" target="">
						<div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1551094020570" data-original="<?php echo get_template_directory_uri(); ?>/images/tild6630-3932-4539-b563-316363613737____6435.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild6630-3932-4539-b563-316363613737__-__resizeb__20x____6435.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1551094020570" style="font-size:28px;" >«Нонсенсорики ДРИМСА»</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1551094020570" style="" >Борис Юхананов</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a>
				</div>
				<div class="t686__col t-col t-col_4 t-align_center ">
					<a class="t686__link" href="/batgalim" target=""> <div class="t686__table" style="height:260px;"> <div class="t686__cell t-align_center t-valign_middle"> <div class="t686__bg t686__animation_fast t686__bg_animated t-bgimg" bgimgfield="li_img__1604248280854" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3764-3630-4964-a461-633661303338__bg1.jpg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3764-3630-4964-a461-633661303338__-__resizeb__20x__bg1.jpg');"></div> <div class="t686__overlay t686__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));"></div> <div class="t686__textwrapper t686__animation_fast "> <div class="t686__textwrapper__content"> <div class="t686__inner-wrapper t686__inner-wrapper_animated-btn"> <div class="t686__title t-name t-name_xl" field="li_title__1604248280854" style="font-size:28px;" >"Бат галим"</div> <div class="t686__text t-descr t-descr_xs" field="li_text__1604248280854" style="" >Татьяна Симоненкова</div> </div> <div class="t686__button-container t686__button_show-hover"> <div class="t686__button-wrapper"> <div class="t686__submit t-btn t-btn_sm" style="color:#000000;background-color:#c7c7c7;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Подробнее</div> </div> </div> </div> </div> </div> </div> </a>
				</div>
			</div><!-- /.row -->
		
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() { t686_init('97341894'); }); $('.t686').bind('displayChanged',function(){	t686_setHeight('97341894'); });
	</script>
	<style>
		#rec97341894 .t-btn:not(.t-animate_no-hover):hover{ background-color: #ff0000 !important; color: #ffffff !important;	}	#rec97341894 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}
	</style>
</div>


<div id="rec115689632" class="r t-rec" style=" " data-record-type="215" >
	<a name="news" style="font-size:0;"></a>
</div>

			
<div id="rec110632187" class="r t-rec t-rec_pt_60 t-rec_pb_0" style="padding-top:60px;padding-bottom:0px; " data-record-type="795" >
	<!-- T795 -->
	<div class="t795">
		<div class="t-container t-align_center">
			<div class="t-col t-col_10 t-prefix_1">
				<div class="t795__title t-title t-title_xs t-margin_auto" field="title" style="">Новости</div>
			</div>
		</div>
	</div>
</div>

<div id="rec129449858" class="r t-rec t-rec_pt_90 t-rec_pb_90" style="padding-top:90px;padding-bottom:90px; " data-animationappear="off" data-record-type="404" >
	<!-- T404 -->
	<div class="t404" >
		<div class="t-container">
			<?php
				// параметры по умолчанию
				$my_posts = get_posts( array(
					'numberposts' => 3,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				global $post;

				foreach( $my_posts as $post ) {
					setup_postdata( $post ); ?>
					<div class="t404__col t-col t-col_4 t-align_left ">
						<a class="t404__link" href="<?php echo get_permalink(); ?>">
							<div class="t404__imgbox" >
								<div class="t404__img t-bgimg" data-original="<?php echo the_post_thumbnail_url(); ?>"></div>
								<div class="t404__separator"></div>
							</div>
							<div class="t404__textwrapper">
								<div class="t404__uptitle t-uptitle" style="text-transform:uppercase;">
									<span style="text-transform:uppercase;" class="t404__date"><?php echo get_the_date(); ?></span>
								</div>
								<div class="t404__title t-heading t-heading_xs" style=""><?php echo get_the_title(); ?></div>
								<div class="t404__descr t-descr t-descr_xs" style=""><?php echo get_the_excerpt(); ?></div>
							</div>
						</a>
					</div>
				<?php }
				wp_reset_postdata(); // сброс
			?>
		</div>
		<div class="t-container"></div>
	</div>
	<script>
		$(document).ready(function(){ t404_unifyHeights('129449858'); $('.t404').bind('displayChanged',function(){ t404_unifyHeights('129449858'); }); $(window).bind('resize', t_throttle(function(){ t404_unifyHeights('129449858'); }, 200)); $(window).load(function(){ t404_unifyHeights('129449858'); }); });
	</script>
</div>


<div id="rec115689663" class="r t-rec t-rec_pt_45 t-rec_pb_45" style="padding-top:45px;padding-bottom:45px; " data-record-type="374">
	<!-- T374 -->
	<div class="t374">
		<div class="t-container">
			<div class="t-col t-col_7 t-prefix_5">
				<a href="/all-news" target="">
					<div class="t374__wrapper">
						<div class="t374__col t374__col-left">
							<img class="t374__img" style="" src="<?php echo get_template_directory_uri(); ?>/images/lib__tildaicon__64623464-3731-4336-b332-343133323731__tilda_icons_40_printery_booklet.svg" imgfield="img">
						</div>
						<div class="t374__col">
							<div class="t374__title t-text t-text_sm" style="" field="title" >Все новости</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
			
			
<div id="rec110632209" class="r t-rec" style="" data-record-type="126">
	<!-- T118 -->
	<div class="t118">
		<div class="t-container">
			<div class="t-col t-col_12 ">
				<hr class="t118__line" style="background-color: #000000; opacity: 0.2;">
			</div>
		</div>
	</div>
</div>


<div id="rec97341891" class="r t-rec" style=" " data-record-type="215" >
	<a name="about" style="font-size:0;"></a>
</div>


<div id="rec110632224" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="795" >
	<!-- T795 -->
	<div class="t795">
		<div class="t-container t-align_center">
			<div class="t-col t-col_10 t-prefix_1">
				<div class="t795__title t-title t-title_xs t-margin_auto" field="title" style="">О проекте</div>
			</div>
		</div>
	</div>
</div>
			
			
<div id="rec97341892" class="r t-rec t-rec_pt_45 t-rec_pb_45" style="padding-top:45px;padding-bottom:45px; " data-record-type="480" >
	<!-- T480 -->
	<div style="width: 0; height: 0; overflow: hidden;">
		<div class="t480__sizer t-col t-col_5" data-auto-correct-mobile-width="false" style="height:800px;"></div>
	</div>
	<div class="t480">
		<div class="t-container">
			<div class="t480__top t480__col t-col t-col_5 ">
				<div class="t480__blockimg t-bgimg" data-original="<?php echo get_template_directory_uri(); ?>/images/tild3737-6562-4836-a366-373530356234__logo.png" bgimgfield="img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3737-6562-4836-a366-373530356234__-__resizeb__20x__Logo.png'); height:800px;"></div>
			</div>
			<div class="t480__col t-col t-col_6 t-prefix_1">
				<div class="t480__textwrapper t-align_left" style="height:800px;">
					<div class="t480__content t-valign_middle">
						<div class="t480__title t-title t-title_xs " field="title" style="">
							<div style="font-size:28px;" data-customstyle="yes">«Театр и Его Дневник»</div>
						</div>
						<div class="t480__uptitle t-descr t-descr_xs " field="subtitle" style="max-width:400px;">Издательство Электротеатра «Станиславский»</div>
						<div class="t480__line " style=""></div>
						<div class="t480__descr t-descr t-descr_md " field="descr" style="">
							<div style="font-size:16px;" data-customstyle="yes">
								Издательство организовано одновременно с назначением режиссёра Бориса Юхананова художественным руководителем Московского драматического театра имени К.С. Станиславского в 2013 году.<br />Название издательства, — парафраз названия статьи французского режиссёра <a href="http://teatr-lib.ru/Library/Artod/Doubl/" style="color:rgb(0, 0, 0) !important;text-decoration: none;border-bottom: 1px solid rgb(0, 0, 0);box-shadow: inset 0px -0px 0px 0px rgb(0, 0, 0);-webkit-box-shadow: inset 0px -0px 0px 0px rgb(0, 0, 0);-moz-box-shadow: inset 0px -0px 0px 0px rgb(0, 0, 0);">Антонена Арто</a> «<a href="/antoninartaud" style="color:#000000 !important;text-decoration: none;border-bottom: 1px solid #000000;box-shadow: inset 0px -0px 0px 0px #000000;-webkit-box-shadow: inset 0px -0px 0px 0px #000000;-moz-box-shadow: inset 0px -0px 0px 0px #000000;">Театр и его Двойник</a>».<br /><br />Программная статья с описанием целей издательства размещена в первом предисловии издания 2016 года режиссёрского дневника Бориса Юхананова — «<a href="/introduction" style="color:#000000 !important;text-decoration: none;border-bottom: 1px solid #000000;box-shadow: inset 0px -0px 0px 0px #000000;-webkit-box-shadow: inset 0px -0px 0px 0px #000000;-moz-box-shadow: inset 0px -0px 0px 0px #000000;">Недоросль. Дневник</a>»: <br />«Театр и Его Дневник» — создание театра средствами книжного дела.<br />Особенность стратегии издательства — выпускать книги о создании спектаклей. <br /><br />Основной направляющий пунктир издательства и одноименной книжной серии — публикации в виде отдельных книг глав романа дневника Бориса Юхананова «Театр и его Дневник», который режиссёр записывает как художественный текст больше тридцати лет.<br /><br />Книги создаются с активным участием театральных художников, композиторов, дизайнеров и режиссёров как проекции их театральных и жизнетворческих стратегий и манифестов.<br />Часто издания выходят одновременно с театральными премьерами на сцене театра.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script> $(window).resize(function() { if (typeof window.noAdaptive!="undefined" && window.noAdaptive==true && $isMobile){return;} t480_setHeight('97341892'); }); $(document).ready(function() { t480_setHeight('97341892'); $('.t480').bind('displayChanged',function(){ t480_setHeight('97341892'); }); });
	</script>
	<style>
		#rec97341892 .t-btn[data-btneffects-first],
		#rec97341892 .t-btn[data-btneffects-second],
		#rec97341892 .t-submit[data-btneffects-first],
		#rec97341892 .t-submit[data-btneffects-second] {
			position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {});
	</script>
</div>


<div id="rec97344856" class="r t-rec" style="" data-record-type="215">
	<a name="delivery" style="font-size:0;"></a>
</div>

<div id="rec97344918" class="r t-rec t-rec_pb_0" style="padding-bottom:0px;background-color:#c7c7c7; " data-animationappear="off" data-record-type="232" data-bg-color="#c7c7c7">
	<!-- cover -->
	<div class="t-cover" id="recorddiv97344918" bgimgfield="img" style="height:50vh; background-image:url('<?php echo get_template_directory_uri(); ?>/images/tild3637-3534-4538-b633-613965646335__-__resize__20x__backdeliv.jpg');" >
		<div class="t-cover__carrier" id="coverCarry97344918" data-content-cover-id="97344918" data-content-cover-bg="<?php echo get_template_directory_uri(); ?>/images/tild3637-3534-4538-b633-613965646335__backdeliv.jpg" data-content-cover-height="50vh" data-content-cover-parallax="fixed" style="height:50vh; background-position:center top;"></div>
		
		<div class="t-cover__filter" style="height:50vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.20), rgba(0,0,0,0.20));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.20), rgba(0,0,0,0.20));background-image: -o-linear-gradient(top, rgba(0,0,0,0.20), rgba(0,0,0,0.20));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.20), rgba(0,0,0,0.20));background-image: linear-gradient(top, rgba(0,0,0,0.20), rgba(0,0,0,0.20));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#cc000000', endColorstr='#cc000000');"></div>
		
		<div class="t203">
			<div class="t-container">
				<div class="t-col t-col_10 ">
					<div class="t-cover__wrapper t-valign_middle" style="height:50vh;">
						<div data-hook-content="covercontent">
							<div class="t203__wrapper">
								<div class="t203__textwrapper" >
									<div class="t203__title t-title t-title_xs" style="font-size:30px;" field="title">
										Доставка книг
									</div>
									<div class="t203__text t-text t-text_md" style="" field="text">
										<div style="font-size:16px;" data-customstyle="yes">
											<p><?php echo get_lzb_meta( 'text-2' ); ?></p>
											
											<!--strong></strong>
											<strong>Доставка по России</strong><br /><br />Осуществляется Почтой России, наложенным платежом.<br />Взимается комиссия Почты России.<br /><br />В Москве возможна доставка курьером (в пределах МКАД; стоимость доставки 350 руб.).<br />Самовывоз в Москве по адресу ул. Пресненский вал, 27, стр. 24, по предварительной договорённости (<a href="mailto:book.ted404@gmail.com" style="color:#000000 !important;text-decoration: none;border-bottom: 1px solid #000000;box-shadow: inset 0px -0px 0px 0px #000000;-webkit-box-shadow: inset 0px -0px 0px 0px #000000;-moz-box-shadow: inset 0px -0px 0px 0px #000000;">book_ted@mail.ru</a>).<br /><br /><br /><strong>Доставка за рубеж<br /></strong><strong></strong><br />Посылки с наложенным платежом Почта России отправляет также за рубеж: в Азербайджан, Армению, Белоруссию, Грузию, Казахстан, Киргизию, Латвию, Литву, Молдавию и Украину.<br /><br />Доставка в другие страны — международными отправлениями Почты России. Стоимость зависит от страны и веса посылки. <br />Ориентировочно: книги издательства весят от 350 г до 2,5 кг.<br /><br />О способах доставки:<br />1. Можно договориться индивидуально через почту <a href="mailto:book.ted404@gmail.com" style="color:#000000 !important;text-decoration: none;border-bottom: 1px solid #000000;box-shadow: inset 0px -0px 0px 0px #000000;-webkit-box-shadow: inset 0px -0px 0px 0px #000000;-moz-box-shadow: inset 0px -0px 0px 0px #000000;">book_ted@mail.ru</a> о месте, где вы можете забрать книгу самостоятельно.<br />2. Мы можем выслать книгу Почтой России на ваш адрес . Адрес присылайте так же на электронную почту <a href="mailto:book.ted404@gmail.com" style="color:#000000 !important;text-decoration: none;border-bottom: 1px solid #000000;box-shadow: inset 0px -0px 0px 0px #000000;-webkit-box-shadow: inset 0px -0px 0px 0px #000000;-moz-box-shadow: inset 0px -0px 0px 0px #000000;">book_ted@mail.ru</a> <br />3. Можем доставить книгу курьерской службой DiPiDi сервис в точку самовывоза ближайшую к вашему дому.<br /><br />Ориентировочно книги можно забрать с Пн. по Пт. с 12 до 19 часов.<br /> Нештатное время самовывоза нужно согласовывать по телефону.<br /><br /><br /><br /><a href="http://bookartshop.ru/oferta" style=""><u>Договор оферты и условия покупки</u> </a><br /-->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="rec97341895" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top: 0px; padding-bottom: 0px;" data-record-type="215">
	<a name="contacts" style="font-size:0;"></a>
</div>

<div id="rec97341897" class="r t-rec" style=" " data-animationappear="off" data-record-type="706" >
	<!--tcart-->
	<script>
		$(document).ready(function() {
			tcart__init('97341897', '');	/* hack for Android */ var ua = navigator.userAgent.toLowerCase(); var isAndroid = (ua.indexOf("android") > -1); if(isAndroid && !$('.t-body').hasClass('t-body_scrollable-hack-for-android')) { $('.t-body').addClass('t-body_scrollable-hack-for-android'); $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>"); console.log('Android css hack was inited'); } /* fix Instagram iPhone keyboard bug */ if(ua.indexOf("instagram") !== -1 && ua.indexOf("iphone") !== -1) { $(".t-body").css("position", "relative"); } var cartWindow = $("#rec97341897 .t706__cartwin"); var curMode = $(".t-records").attr("data-tilda-mode"); if (cartWindow.length && curMode != "edit" && curMode != "preview") { cartWindow.bind('scroll', t_throttle(function() { if(window.lazy == "y") { t_lazyload_update(); } }, 500)) }
		});
	</script>
	<div class="t706" data-opencart-onorder="yes" data-project-currency="₽" data-project-currency-side="r" data-project-currency-sep="," data-payment-system="robokassa" data-cart-ver="134">
		<div class="t706__carticon" style="">
			<div class="t706__carticon-text t-name t-name_xs">Click to order</div>
			<div class="t706__carticon-wrapper">
				<!--<div class="t706__carticon-imgwrap"><img class="t706__carticon-img" src="<?php echo get_template_directory_uri(); ?>/images/lib__linea__930cac0f-758b-b7ee-1eb0-b18fc6e10893__ecommerce_bag.svg"></div>-->
				<div class="t706__carticon-imgwrap" > <svg class="t706__carticon-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"> <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M44 18h10v45H10V18h10z"/> <path fill="none" stroke-width="2" stroke-miterlimit="10" d="M22 24V11c0-5.523 4.477-10 10-10s10 4.477 10 10v13"/> </svg></div>
				<div class="t706__carticon-counter"></div>
			</div>
		</div>
		<div class="t706__cartwin">
			<div class="t706__cartwin-close"> <div class="t706__cartwin-close-wrapper"> <svg class="t706__cartwin-close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
			</div>
			<div class="t706__cartwin-content">
				<div class="t706__cartwin-top">
					<div class="t706__cartwin-heading t-name t-name_xl"></div>
				</div>
				<div class="t706__cartwin-products"></div>
				<div class="t706__cartwin-bottom">
					<div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm">
						<span class="t706__cartwin-prodamount-label">Total:&nbsp;</span>
						<span class="t706__cartwin-prodamount"></span>
					</div>
				</div>
				<div class="t706__orderform ">
					<form id="form97341897" name='form97341897' role="form" action='' method='POST' data-formactiontype="2" data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_3 " data-formsended-callback="t706_onSuccessCallback" >
						<input type="hidden" name="formservices[]" value="d2fa3d6bca8f7c99d24b9b19d88d8ca2" class="js-formaction-services">
						<input type="hidden" name="tildaspec-formname" tabindex="-1" value="Cart">
						<div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;"></div>
						<div class="t-form__inputsbox">
							<div class="t-input-group t-input-group_nm" data-input-lid="1496239431201">
								<div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239431201" style="">Your Name</div>
								<div class="t-input-block">
									<input type="text" name="Name" class="t-input js-tilda-rule " value="" data-tilda-req="1" data-tilda-rule="name" style="color:#000000; border:1px solid #000000; ">
									<div class="t-input-error"></div>
								</div>
							</div>
							<div class="t-input-group t-input-group_em" data-input-lid="1496239459190">
								<div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239459190" style="">Your Email</div>
								<div class="t-input-block"> <input type="text" name="Email" class="t-input js-tilda-rule " value="" data-tilda-req="1" data-tilda-rule="email" style="color:#000000; border:1px solid #000000; "> <div class="t-input-error"></div></div>
							</div>
							<div class="t-input-group t-input-group_ph" data-input-lid="1496239478607"> <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1496239478607" style="">Your Phone</div> <div class="t-input-block"> <input type="tel" name="Phone" class="t-input js-tilda-rule " value="" data-tilda-req="1" data-tilda-rule="phone" pattern="[0-9]*" style="color:#000000; border:1px solid #000000; "> <div class="t-input-error"></div> </div> </div>
							<div class="t-form__errorbox-middle"> <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;"> <div class="t-form__errorbox-text t-text t-text_md"> <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p> <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p> </div> </div></div>
							<div class="t-form__submit">
								<button type="submit" class="t-submit" style="color: #ffffff; background-color: #000000;">Checkout</button>
							</div>
						</div>
						<div class="t-form__errorbox-bottom">
							<div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
								<div class="t-form__errorbox-text t-text t-text_md">
									<p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
									<p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
								</div>
							</div>
						</div>
					</form>\
					<style>
						#rec97341897 input::-webkit-input-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 input::-moz-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 input:-moz-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 input:-ms-input-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 textarea::-webkit-input-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 textarea::-moz-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 textarea:-moz-placeholder {color:#000000; opacity: 0.5;}	#rec97341897 textarea:-ms-input-placeholder {color:#000000; opacity: 0.5;}
					</style>
				</div>
			</div>
		</div>
		<div class="t706__cartdata">
		</div>
	</div>
	<style>
	</style>
	<!--/tcart-->
</div>
			

<?php get_footer(); ?>