@extends('layouts.master')
@section('content')
<main id="main">
	<div class="wgl-container">
		<div class="row ">
			<div id='main-content' class="wgl_col-12">
				<div  class="vc_row wpb_row vc_row-fluid add_bg_rev_slider_1 vc_custom_1558618081618">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner vc_custom_1558098762971">
							<div class="wpb_wrapper">
								<div class="wpb_revslider_element wpb_content_element home-2_tp-bullet">
									
									<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" 
									style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
										@include('layouts.slider')
								</div>
								<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1558336492094">
									<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4 vc_col-has-fill">
										<div class="vc_column-inner vc_custom_1558076888158">
											<div class="wpb_wrapper">
												<div id=integrio_infobox_5d76065466738 
												class="integrio_module_infobox layout_top alignment_center infobox_cover">
													<div class="infobox_wrapper">
														<div class="infobox_icon_wrapper">
															<div class="infobox_icon_container " style="width:55px; height:50px; ">
																<i class="infobox_icon flaticon-laptop-1"  style="font-size:55px;"></i>
															</div>
														</div>
														<h3 class="infobox_title"  style="margin-bottom:14px; ">Développement</h3>
														<div class="infobox_content"  style="font-size:16px; ">
															STILLFORCE développe, distribue et gère des solutions numériques
															innovantes dans les domaines porteurs tel que : E-commerce, Elearning, E-restauration...
														</div>
														<a class="infobox_button button-read-more" href="{{ route('developpement-web') }}" title='Développement' style="margin-top:20px; ">EN SAVOIR PLUS</a>
													</div>
												</div>
												<div  class ="integrio_module_spacing">
													<div class="spacing_size spacing_size-initial" style="height:30px;"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id=integrio_infobox_5d76065467066 class="integrio_module_infobox layout_top alignment_center infobox_cover">
													<div class="infobox_wrapper">
														<div class="infobox_icon_wrapper">
															<div class="infobox_icon_container " style="width:55px; height:55px; ">
																<i class="infobox_icon flaticon-cloud-computing"  style="font-size:50px;"></i>
															</div>
														</div>
														<h3 class="infobox_title"  style="margin-bottom:14px; ">Réseaux & Sécurité</h3>
														<div class="infobox_content"  style="font-size:16px; ">
															
                                                            Nous concevons, installons et configurons votre réseau ou parc informatique.
                                                            Nous assurons la disponibilité, l'intégrité et la confidentialité de vos données...
														</div>
														<a class="infobox_button button-read-more" href="{{ route('securite-informatique') }}" title='Réseaux & Sécurité' style="margin-top:20px; ">EN SAVOIR PLUS</a>
													</div>
												</div>
												<div  class ="integrio_module_spacing">
													<div class="spacing_size spacing_size-initial" style="height:30px;"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-3">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id=integrio_infobox_5d7606546785b class="integrio_module_infobox layout_top alignment_center infobox_cover">
													<div class="infobox_wrapper">
														<div class="infobox_icon_wrapper">
															<div class="infobox_icon_container " style="width:55px; height:55px; ">
																<i class="infobox_icon flaticon-translation"  style="font-size:50px;"></i>
															</div>
														</div>
														<h3 class="infobox_title"  style="margin-bottom:14px; ">Big Data</h3>
														<div class="infobox_content"  style="font-size:16px; ">
															
                                                            Nous utilisons le big data pour effectuer des analyses prédictives afin d'identifier et d'anticiper les intérêts et les comportements futurs de vos clients et prospects...
															
														</div>
														<a class="infobox_button button-read-more" href="{{ route('big-data') }}" title='Big Data' style="margin-top:20px; ">EN SAVOIR PLUS</a>
													</div>
												</div>
												<div  class ="integrio_module_spacing">
													<div class="spacing_size spacing_size-initial" style="height:30px;"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div  class ="integrio_module_spacing">
									<div class="spacing_size spacing_size-initial" style="height:90px;"></div>
								</div>
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id=integrio_img_layer_5d76065468682 class="integrio_module_img_layer">
													<div class="img_layer_image_wrapper slide_left" style="z-index:1">
														<div class="img_layer_item" >
															<div class="img_layer_image">
																<img src="{{ asset('images/integrio_home_2_layers_1_1.png') }}" alt="" />
															</div>
														</div>
													</div>
													<div class="img_layer_image_wrapper slide_right" style="z-index:1">
														<div class="img_layer_item" >
															<div class="img_layer_image">
																<img src="{{ asset('images/integrio_home_2_layers_1_2.png') }}" alt="" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-5 vc_col-md-6">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="integrio_spacer_5d76065468dae" class ="integrio_module_spacing responsive_active">
													<div class="spacing_size spacing_size-initial" style="height:72px;"></div>
													<div class="spacing_size spacing_size-desktops" style="height:0px;"></div>
													<div class="spacing_size spacing_size-tablet" style="height:70px;"></div>
												</div>
												<div id=integrio_dbl_5d76065468f0b class="integrio_module_double_headings aleft  with_squares">
													<div class="heading_subtitle" style="font-size:14px; line-height:30px; ">
														<div>
															CE QUE NOUS FAISONS
														</div>
													</div>
													<div class="heading_title"  style="font-size:42px; line-height:1.238; font-weight:900; color:#232323; ">
														<div class="heading_title_tablet" style="font-size:38px;">
															<div class="heading_title_mobile" style="font-size:34px;">
																<div>
																	Développons des Produits pour Améliorer vos Affaires
																</div>
															</div>
														</div>
													</div>
												</div>
												<div  class ="integrio_module_spacing">
													<div class="spacing_size spacing_size-initial" style="height:22px;"></div>
												</div>
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<h6 style="font-weight: 400; line-height: 32px; padding-bottom: 28px; color: #616161;">
                                                            Nous travaillons avec vous pour déterminer les meilleuirs solutions numériques, présence en ligne ou outils qui peuvent booster votre chiffre d'affaire.
														</h6>
														<ul class="integrio_check">
															<li style="font-size: 24px; line-height: 26px; padding-left: 45px; padding-bottom: 31px;">
																<h6 style="padding-bottom: 5px;">
																	Développment DevOps 
																</h6>
																<p>
																	<span style="font-size: 16px;">Nous proposons des services de consultation DevOps pour aider nos clients à s'adapter à un environnement.</span>
																</li>
																<li style="font-size: 24px; line-height: 26px; padding-left: 45px;">
																	<h6 style="padding-bottom: 5px;">
																		Expertise Logiciel
																	</h6>
																	<p>
																		<span style="font-size: 16px;">Nous utilisons les dernières technologies, boîtes à outils et pratiques de développement de logiciels modernes.</span>
																	</li>
																</ul>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:42px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="integrio_spacer_5d760654697c6" class ="integrio_module_spacing responsive_active">
											<div class="spacing_size spacing_size-initial" style="height:129px;"></div>
											<div class="spacing_size spacing_size-desktops" style="height:48px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div  data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1558081490581 vc_row-has-fill wgl-row-animation">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:30px;"></div>
										</div>
										<div class="vc_row wpb_row vc_inner vc_row-fluid">
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:45px;"></div>
														</div>
														<div id=integrio_dbl_5d7606546a24c class="integrio_module_double_headings aleft ">
															<div class="heading_subtitle" style="font-size:14px; line-height:20px; ">
																<div>
																	NOS SERVICES
																</div>
															</div>
															<div class="heading_title"  style="font-size:42px; line-height:1.238; color:#ffffff; ">
																<div class="heading_title_tablet" style="font-size:38px;">
																	<div class="heading_title_mobile" style="font-size:34px;">
																		<div>
																			NOS DOMAINS D'EXPERTISES
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id="integrio_spacer_5d7606546a48e" class ="integrio_module_spacing responsive_active">
															<div class="spacing_size spacing_size-initial" style="height:55px;"></div>
															<div class="spacing_size spacing_size-tablet" style="height:15px;"></div>
														</div>
														<div class="wpb_text_column wpb_content_element " >
															<div class="wpb_wrapper">
																<h5 style="letter-spacing: 0.2px; font-weight: 400; line-height: 36px; color: #d7d7d7;">
																	Le savoir-faire approfondi de STILLFORCE permet aux entreprises et particuliers à travers le monde de travailler avec nous.
																</h5>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:14px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="integrio_module_carousel-wrapper">
											<div id=integrio_carousel_5d7606546a943 class="integrio_module_carousel pagination_line pag_align_center">
												<div class="integrio_carousel_slick" data-slick='{"slidesToShow":3,"slidesToScroll":3,"infinite":false,"variableWidth":false,"autoplay":false,"autoplaySpeed":"9000","speed":300,"arrows":false,"dots":true,"adaptiveHeight":true,"responsive":[{"breakpoint":1025,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":991,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":767,"settings":{"slidesToShow":1,"slidesToScroll":1}}]}'>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-pen-3" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Cryptographie
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	
                                                                    Nous concevons une architecture globale de sécurité dont la cryptologie est la pierre angulaire.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/cryptographie_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546b65b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('cryptographie') }}" title='Cryptographie' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-nut" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Audit Informatique
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Nous identifions et évaluons les risques associés aux activités informatiques de votre entreprise.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/audit_informatique_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546be3b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('audit-informatique') }}" title='Audit Informatique' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-code" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Développement Web
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Nous développons des site web, E-commerce, jeux en ligne, messagerie web, wiki, blog, forum, ERP. 
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/web_dev_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546c6a9 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('developpement-web') }}" title='Développement Web' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-idea-1" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Réseau Informatique
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Nous assurons l'installation, la configuration et la maintenance de votre réseau ou parc informatique.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/network_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546ce27 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('reseau-informatique') }}" title='Réseau Informatique' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-translation" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Sécurité Informatique
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Nous garantisons la disponibilité de votre SI, l’intégrité de ses données, la confidentialité des accès.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/security_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546d535 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('securite-informatique') }}" title='Sécurité Informatique' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-code" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Développement Mobile
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	Développement, test, publication et ASO(Apps Store Optimization) ou promotion sur les stores.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/mobile_app_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546dc21 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('developpement-mobile') }}" title='Développement Mobile' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-cube" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Big Data
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Connaissance du client, anticipations des besoins, modèles prédictifs, vous saurez quand contacter un client.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/big_data_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546e147 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('big-data') }}" title='Big Data' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-translation" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Marketing Digital
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
                                                                    Associer le marketing au big data vous permettra d'être plus efficace dans vos campagnes et dépenser moins.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/marketing_digital_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546d535 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('marketing-digital') }}" title='Marketing Digital' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-cloud-computing" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Community Management
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	Nous contruisons vos communuatés sur les réseaux sociaux et vous bâtissons une belle image de marque.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/cm_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546be3b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('community-management') }}" title='Community Management' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-nut" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Business Intelligence
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	Nous analysons les données pour accompagner les entreprises dans leurs prises de décisions stratégiques.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/business_intelligence_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546be3b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('business-intelligence') }}" title='Business Intelligence' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-idea-1" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Intelligence Artificielle
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	Mise en place de l'intelligence artificielle pour la création de chatbot, voicebot & callbot.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/ai_layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546be3b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('intelligence-artificielle') }}" title='Intelligence Artificielle' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="integrio_module_services service_back_slide aleft anim_dir_to_bottom bg_front_frame">
														<div class="services_wrapper">
															<div class="services_front" style="border-color:#575757;">
																<div class="services_icon_wrapper">
																	<i class="services_icon flaticon-code" style=" color:#ffffff;"></i>
																</div>
																<h5 class="services_title" style="color:#ffffff;">
																	Développement Desktop
																</h5>
																<div class="services_descr" style="color:#d7d7d7;">
																	Nous développons les applications de bureaux pour les systèmes d'exploitation Windows & MAC.
																</div>
															</div>
															<div class="services_back" style="background-image: asset(images/software-layers.png);"></div>
															<div class="services_button">
																<div id=integrio_button_5d7606546be3b class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aleft">
																	<a class="wgl_button_link" href="{{ route('developpement-desktop') }}" title='Développement Desktop' style=" margin-bottom:0px;">
																		En Savoir Plus
																		<i class="wgl_button-icon flaticon-right-arrow" style="font-size:17px;"></i>
																		<span class="btn_border_gradient"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:199px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div id="extended_5d7606546e2ae" class="extended-parallax" data-paroller-type="foreground" style="top:0%; left:8%; " data-paroller-direction="horizontal" data-paroller-factor="0.05" >
								<img src="{{ asset('images/integrio_home_2_layers_4_1.png') }}" alt="" />
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
						<div style="z-index: 2; " class="vc_row wpb_row vc_row-fluid vc_custom_1558092311277 vc_row-has-fill">
							<div class="shadow wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
								<div class="vc_column-inner vc_custom_1558095598243">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:50px;"></div>
										</div>
										<div class="vc_row wpb_row vc_inner vc_row-fluid">
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id=integrio_counter_5d7606546f51f class="integrio_module_counter layout_top alignment_center counter_divider">
															<div class="counter_content_wrapper">
																<div class="counter_value_placeholder">
																	<span class="value_placeholder">300</span>
																	<span class="value_suffix_placeholder">+</span>
																	<div class="counter_value_wrapper">
																		<span class="counter_value">300</span>
																		<span class="counter_value_suffix">+</span>
																	</div>
																</div>
																<div class="counter_title"  style="margin-top:12px;">
																	Projets Réalisés
																</div>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:59px;"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id=integrio_counter_5d7606546f982 class="integrio_module_counter layout_top alignment_center counter_divider">
															<div class="counter_content_wrapper">
																<div class="counter_value_placeholder">
																	<span class="value_placeholder">200</span>
																	<span class="value_suffix_placeholder">+</span>
																	<div class="counter_value_wrapper">
																		<span class="counter_value">200</span>
																		<span class="counter_value_suffix">+</span>
																	</div>
																</div>
																<div class="counter_title"  style="margin-top:12px;">
																	Clients Satisfaits
																</div>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:59px;"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id=integrio_counter_5d7606546fda4 class="integrio_module_counter layout_top alignment_center counter_divider">
															<div class="counter_content_wrapper">
																<div class="counter_value_placeholder">
																	<span class="value_placeholder">900k</span>
																	<span class="value_suffix_placeholder">+</span>
																	<div class="counter_value_wrapper">
																		<span class="counter_value">900</span>k
																		<span class="counter_value_suffix">+</span>
																	</div>
																</div>
																<div class="counter_title"  style="margin-top:12px;">
																	Lignes de Codes
																</div>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:59px;"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-3">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div id=integrio_counter_5d760654701cf class="integrio_module_counter layout_top alignment_center">
															<div class="counter_content_wrapper">
																<div class="counter_value_placeholder">
																	<span class="value_placeholder">50</span>
																	<span class="value_suffix_placeholder">+</span>
																	<div class="counter_value_wrapper">
																		<span class="counter_value">50</span>
																		<span class="counter_value_suffix">+</span>
																	</div>
																</div>
																<div class="counter_title"  style="margin-top:12px;">
																	Partenaires
																</div>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:59px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div  class ="integrio_module_spacing">
											
										</div>
						<div class="vc_row-full-width vc_clearfix"></div>
						<div  data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="{{ url('public/images/integrio_home_2_layers_2_1.jpg') }}" class="vc_row wpb_row vc_row-fluid vc_custom_1558446331977 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
							<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
								<div class="vc_column-inner vc_custom_1557303704869">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:94px;"></div>
										</div>
										<div class="vc_row wpb_row vc_inner vc_row-fluid">
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:42px;"></div>
														</div>
														<div class="wpb_text_column wpb_content_element " >
															<div class="wpb_wrapper">
																<h6 style="text-transform: uppercase; text-align: left;">
																	<span style="color: #ffffff; font-size: 14px;">Recommandations</span>
																</h6>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:9px;"></div>
														</div>
														<div class="wpb_text_column wpb_content_element " >
															<div class="wpb_wrapper">
																<h3>
																	<span style="color: #ffffff; line-height: 52px;">Ce que les gens<br>disent de nous</span>
																</h3>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:18px;"></div>
														</div>
														<div class="wpb_text_column wpb_content_element " >
															<div class="wpb_wrapper">
																<h5 style="letter-spacing: 0.2px; font-weight: 400; line-height: 36px; color: #ffffff;">
																	Personne ne recommande ce qui est moyen.
																</h5>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:42px;"></div>
														</div>
														<div id=integrio_button_5d7606547cc8f class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right aleft">
															<a class="wgl_button_link" href="contact" title='Contacts'>Nous Contactez<i class="wgl_button-icon flaticon-right-arrow" ></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-8">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div  class="integrio_module_testimonials type_inline_top alignment_left" >
															<div class="integrio_module_carousel-wrapper">
																<div id=integrio_carousel_5d7606547d74b class="integrio_module_carousel pagination_line pag_align_center">
																	<div class="integrio_carousel_slick" 
																	data-slick='{"slidesToShow":2,"slidesToScroll":1,"infinite":true,"variableWidth":false,"autoplay":false,"autoplaySpeed":"3000","speed":300,"arrows":false,"dots":true,"adaptiveHeight":true,"responsive":[{"breakpoint":1025,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":480,"settings":{"slidesToShow":1,"slidesToScroll":1}}]}'>
                                                                    <div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Anna Awah</h3>
																							<span class="testimonials_position">Cliente Stillforce</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“stillforce offre un service de qualité ... Faite lui confiance pour donner une tournure de feu à votre business. je vous la recommande vivement.”
																					</div>
																				</div>
																			</div>
																    </div>
                                                                    <div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Nadine Dessiji</h3>
																							<span class="testimonials_position">Cliente Stillforce</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“J'ai travaillé avec Stillforce dans le cadre d'une campagne facebook. Grâce au dynamisme de cette équipe, mon chiffre d'affaires a explosé.”
																					</div>
																				</div>
																			</div>
																    </div>
                                                                    <div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Darda Naud</h3>
																							<span class="testimonials_position">Associate MTA Market</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“Je recommande vivement les services de Stillforce. Le service est de qualite et la jeunesse dynamique y met toute sa creativite”
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Bienvenue Tchatouo</h3>
																							<span class="testimonials_position">Client STILLFORCE</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“STILLFORCE est une société innovante d’expertise et conseil dans la transformation du numérique,je vous la recommande fortement.”
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Yannick Arthur Doughi</h3>
																							<span class="testimonials_position">Founder, à Geoadvantage</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“J'ai travaillé avec les Brillants Ingénieurs de Stillforce dans le cadre de notre site web. Je recommande donc bien évidemment leurs services.”
																					</div>
																				</div>
																			</div>
																		</div>
                                                                        	<div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Marvin Ebokolo</h3>
																							<span class="testimonials_position">Founder JENGU Couture and Lifestyle</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“STILLFORCE est une société innovante d’expertise et conseil dans la transformation du numérique,je vous la recommande fortement.”
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Florence Assambong</h3>
																							<span class="testimonials_position">Client STILLFORCE</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						Le service est excellent et professionnel! Je dois avouer, je n'y croyais pas.La jeunesse Camerounaise telle que je l'aime(dynamique,innovante et créatrice d'emplois).Bravo!
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="testimonials_item_wrap">
																			<div class="testimonials_item">
																				<div class="testimonials_content_wrap">
																					<div class="testimonials_meta_wrap">
																						<div class="testimonials_name_wrap">
																							<h3 class="testimonials_name">Ajume Boris</h3>
																							<span class="testimonials_position">Client STILLFORCE</span>
																						</div>
																					</div>
																					<div class="testimonials_quote">
																						“Développeurs de sites Web rapides, légitimes et fiables. # prospérité”
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
										</div>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:71px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
						<div  class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:74px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div  class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
							<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-6">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div  class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
											<figure class="wpb_wrapper vc_figure">
												<div class="vc_single_image-wrappervc_box_border_grey">
													<img width="499" height="599" src="{{ asset('images/home2.png') }}" 
													class="vc_single_image-img attachment-full" alt="" 
													srcset="{{ asset('images/home2.png') }} 499w, {{ asset('images/integrio_home_2_layers_5_1-250x300.png') }} 250w" sizes="(max-width: 499px) 100vw, 499px" />
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-offset-1 vc_col-md-5">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div id="integrio_spacer_5d7606547eecd" class ="integrio_module_spacing responsive_active">
											<div class="spacing_size spacing_size-initial" style="height:65px;"></div>
											<div class="spacing_size spacing_size-desktops" style="height:0px;"></div>
											<div class="spacing_size spacing_size-tablet" style="height:70px;"></div>
										</div>
										<div id=integrio_dbl_5d7606547f007 class="integrio_module_double_headings aleft  with_squares">
											<div class="heading_subtitle" style="font-size:14px; line-height:30px; ">
												<div>
													NOS COMPÉTENCES
												</div>
											</div>
											<div class="heading_title"  style="font-size:42px; line-height:1.238; font-weight:900; color:#232323; ">
												<div class="heading_title_tablet" style="font-size:38px;">
													<div class="heading_title_mobile" style="font-size:34px;">
														<div>
															Transformation Digital, Restez à Jour
														</div>
													</div>
												</div>
											</div>
										</div>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:22px;"></div>
										</div>
										<div class="wpb_text_column wpb_content_element " >
											<div class="wpb_wrapper">
												<p>
													<span style="font-size: 18px; line-height: 32px;">De nombreuses entreprises et marques établies font confiance à notre développement logiciel.
                                                    </span>
												</p>
											</div>
										</div>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:30px;"></div>
										</div>
										<div class="integrio_module_progress_bar">
											<div class="progress_wrap">
												<div class="progress_label_wrap">
													<h5 class="progress_label">
														expérience
													</h5>
													<div class="progress_value_wrap">
														<span class="progress_value">80</span>
														<span class="progress_units">%</span>
													</div>
												</div>
												<div class="progress_bar_wrap">
													<div class="progress_bar" data-width="80"></div>
												</div>
											</div>
											<div class="progress_wrap">
												<div class="progress_label_wrap">
													<h5 class="progress_label">
														développement
													</h5>
													<div class="progress_value_wrap">
														<span class="progress_value">90</span>
														<span class="progress_units">%</span>
													</div>
												</div>
												<div class="progress_bar_wrap">
													<div class="progress_bar" data-width="90"></div>
												</div>
											</div>
											<div class="progress_wrap">
												<div class="progress_label_wrap">
													<h5 class="progress_label">
														Satisfaction Client
													</h5>
													<div class="progress_value_wrap">
														<span class="progress_value">98</span>
														<span class="progress_units">%</span>
													</div>
												</div>
												<div class="progress_bar_wrap">
													<div class="progress_bar" data-width="98"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:112px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div  data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1558090389148 vc_row-has-fill">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner vc_custom_1557305794504">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:26px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-9">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:53px;"></div>
										</div>
										<div id=integrio_dbl_5d76065480190 class="integrio_module_double_headings aleft  with_squares">
											<div class="heading_subtitle" style="font-size:14px; line-height:30px; ">
												<div>
													ACTUALITES
												</div>
											</div>
											<div class="heading_title"  style="font-size:42px; line-height:1.143; font-weight:900; color:#232323; ">
												<div class="heading_title_tablet" style="font-size:38px;">
													<div class="heading_title_mobile" style="font-size:34px;">
														<div>
															CE QUE NOUS PENSONS
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-md-offset-0">
								<div class="vc_column-inner vc_custom_1557305557507">
									<div class="wpb_wrapper">
										<div id="integrio_spacer_5d760654803f5" class ="integrio_module_spacing responsive_active">
											<div class="spacing_size spacing_size-initial" style="height:106px;"></div>
											<div class="spacing_size spacing_size-tablet" style="height:30px;"></div>
										</div>
										<div id=integrio_button_5d760654806b3 class="integrio_module_button wgl_button wgl_button-l wgl_button-icon_right btn-gradient aright">
											<a class="wgl_button_link" href="{{ route('blog') }}" title='Portfolio Grid'>
												Lire Tout
												<i class="wgl_button-icon flaticon-right-arrow" ></i>
												<span class="btn_border_gradient"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner vc_custom_1558091012730">
									<div class="wpb_wrapper">
										<section class="wgl_cpt_section">
											<div id="blog_module_5d7606548412c" class="blog-posts ">
												<div class="container-grid row blog_carousel blog-style-standard">
													<div class="integrio_module_carousel-wrapper">
														<div id=integrio_carousel_5d76065487923 class="integrio_module_carousel pagination_line pag_align_center">
															<div class="integrio_carousel_slick" data-slick='{"slidesToShow":3,"slidesToScroll":3,"infinite":false,"variableWidth":false,"autoplay":false,"autoplaySpeed":"3000","speed":300,"arrows":false,"dots":true,"adaptiveHeight":true,"responsive":[{"breakpoint":1025,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":991,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":767,"settings":{"slidesToShow":1,"slidesToScroll":1}}]}'>
																<div class="wgl_col-4 item">
																	<div class="blog-post  format-standard-image ">
																		<div class="blog-post_wrapper">
																			<div class="blog-post_media">
																				<div class="blog-post_media_part">
																					<a href="{{ route('realite-augmentee') }}" class="blog-post_feature-link"><img src="{{ url('public/images/blog_06-700x550.jpg') }}" alt='' /></a>
																				</div>
																				<div class="blog-post_meta_info">
																					<div class="meta-wrapper">
																						<span class="blog-post_meta-categories">
																							<span><a href="category/innovation/index.htm">Innovation</a></span>
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="blog-post_content">
																				<h3 class="blog-post_title" style="margin-bottom: 16px"><a href="{{ route('realite-augmentee') }}">Plateforme de Réalité Augmentée par Google</a></h3>
																				<div class='blog-post_meta-desc'>
																					<div class="blog-post_meta-wrap">
																						<div class='divider_post_info'></div>
																						<div class="meta-wrapper">
																							<span class="date_post">29 Juin, 2020</span>
																						</div>
																						<div class="blog-post_info-wrap">
																							<div class="share_post-container">
																								<a href="#"></a>
																								<div class="share_social-wpapper">
																									<ul>
																										<li>
																											<a class="share_post share_twitter" target="_blank" href="https://twitter.com/intent/tweet?text=In-Depth%20Industry%20&#038;%20Ecosystem%20Analysis&#038;url=/2019/05/07/in-depth-industry-ecosystem-analysis/"><span class="fa fa-twitter"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_facebook" target="_blank" href="www.facebook.com/share_BC35D291.php"><span class="fa fa-facebook"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_google share_gplus" target="_blank" href="plus.google.com/share_D8E2E1CA"><span class="fa fa-google"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=/2019/05/07/in-depth-industry-ecosystem-analysis/&#038;media=images/blog_01.jpg') }}"><span class="fa fa-pinterest"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&#038;url=http%3A%2F%2F%2F2019%2F05%2F07%2Fin-depth-industry-ecosystem-analysis%2F&title=In-Depth+Industry+%26+Ecosystem+Analysis"><span class="fa fa-linkedin"></span></a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="wgl_col-4 item">
																	<div class="blog-post  format-standard-image ">
																		<div class="blog-post_wrapper">
																			<div class="blog-post_media">
																				<div class="blog-post_media_part">
																					<a href="{{ route('langage-programmation') }}"class="blog-post_feature-link"><img src="{{ url('public/images/quel-language.png') }}" alt='' /></a>
																				</div>
																				<div class="blog-post_meta_info">
																					<div class="meta-wrapper">
																						<span class="blog-post_meta-categories">
																							<span><a href="#">Astuce</a></span>
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="blog-post_content">
																				<h3 class="blog-post_title" style="margin-bottom: 16px"><a href="{{ route('langage-programmation') }}">Quel Langage de Programmation Apprendre?</a></h3>
																				<div class='blog-post_meta-desc'>
																					<div class="blog-post_meta-wrap">
																						<div class='divider_post_info'></div>
																						<div class="meta-wrapper">
																							<span class="date_post">28 JUILLET, 2020</span>
																							
																						</div>
																						<div class="blog-post_info-wrap">
																							<div class="share_post-container">
																								<a href="#"></a>
																								<div class="share_social-wpapper">
																									<ul>
																										<li>
																											<a class="share_post share_twitter" target="_blank" href="https://twitter.com/intent/tweet?text=15%20Best%20PHP%20Frameworks%20for%20%202020&#038;url=/2019/05/15/15-best-php-frameworks-for-2020/"><span class="fa fa-twitter"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_facebook" target="_blank" href="www.facebook.com/share_27B28256.php"><span class="fa fa-facebook"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_google share_gplus" target="_blank" href="plus.google.com/share_6D1B12F4"><span class="fa fa-google"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=/2019/05/15/15-best-php-frameworks-for-2020/&#038;media=images/blog_02.jpg') }}"><span class="fa fa-pinterest"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&#038;url=http%3A%2F%2F%2F2019%2F05%2F15%2F15-best-php-frameworks-for-2020%2F&title=15+Best+PHP+Frameworks+for++2020"><span class="fa fa-linkedin"></span></a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="wgl_col-4 item">
																	<div class="blog-post  format-standard-image ">
																		<div class="blog-post_wrapper">
																			<div class="blog-post_media">
																				<div class="blog-post_media_part">
																					<a href="{{ route('monétiser-votre-site-internet') }}" class="blog-post_feature-link"><img src="{{ url('public/images/monetiser-site-web.png') }}" alt='' /></a>
																				</div>
																				<div class="blog-post_meta_info">
																					<div class="meta-wrapper">
																						<span class="blog-post_meta-categories">
																							<span><a href="#">Astuce</a></span>
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="blog-post_content">
																				<h3 class="blog-post_title" style="margin-bottom: 16px"><a href="{{ route('monétiser-votre-site-internet') }}">Voici comment Monétiser Votre Site Internet</a></h3>
																				<div class='blog-post_meta-desc'>
																					<div class="blog-post_meta-wrap">
																						<div class='divider_post_info'></div>
																						<div class="meta-wrapper">
																							<span class="date_post">04 Août, 2020</span>
																						</div>
																						<div class="blog-post_info-wrap">
																							<div class="share_post-container">
																								<a href="#"></a>
																								<div class="share_social-wpapper">
																									<ul>
																										<li>
																											<a class="share_post share_twitter" target="_blank" href="https://twitter.com/intent/tweet?text=15%20Secrets%20Of%20Digital%20%20Transformation&#038;url=/2019/05/15/15-secrets-of-digital-transformation/"><span class="fa fa-twitter"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_facebook" target="_blank" href="www.facebook.com/share_E6CBD737.php"><span class="fa fa-facebook"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_google share_gplus" target="_blank" href="plus.google.com/share_9874C02B"><span class="fa fa-google"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=/2019/05/15/15-secrets-of-digital-transformation/&#038;media=images/blog_03.jpg') }}"><span class="fa fa-pinterest"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&#038;url=http%3A%2F%2F%2F2019%2F05%2F15%2F15-secrets-of-digital-transformation%2F&title=15+Secrets+Of+Digital++Transformation"><span class="fa fa-linkedin"></span></a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="wgl_col-4 item">
																	<div class="blog-post  format-standard-image ">
																		<div class="blog-post_wrapper">
																			<div class="blog-post_media">
																				<div class="blog-post_media_part">
																					<a href="{{ route('frameworks-PHP') }}" class="blog-post_feature-link"><img src="{{ url('public/images/best-php-frameworks.png') }}" alt='' /></a>
																				</div>
																				<div class="blog-post_meta_info">
																					<div class="meta-wrapper">
																						<span class="blog-post_meta-categories">
																							<span><a href="#">Technologie</a></span>
																						</span>
																					</div>
																				</div>
																			</div>
																			<div class="blog-post_content">
																				<h3 class="blog-post_title" style="margin-bottom: 16px"><a href="{{ route('frameworks-PHP') }}">10 meilleurs frameworks PHP pour 2020</a></h3>
																				<div class='blog-post_meta-desc'>
																					<div class="blog-post_meta-wrap">
																						<div class='divider_post_info'></div>
																						<div class="meta-wrapper">
																							<span class="date_post">11 Juillet, 2020</span>
																						</div>
																						<div class="blog-post_info-wrap">
																							<div class="share_post-container">
																								<a href="#"></a>
																								<div class="share_social-wpapper">
																									<ul>
																										<li>
																											<a class="share_post share_twitter" target="_blank" href="https://twitter.com/intent/tweet?text=Tech%20Conference%20Events%20%202019/2020&#038;url=/2019/05/15/tech-conference-events-2019-2020/"><span class="fa fa-twitter"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_facebook" target="_blank" href="www.facebook.com/share_FB4A5772.php"><span class="fa fa-facebook"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_google share_gplus" target="_blank" href="plus.google.com/share_0297F51D"><span class="fa fa-google"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=/2019/05/15/tech-conference-events-2019-2020/&#038;media=images/blog_04.jpg') }}"><span class="fa fa-pinterest"></span></a>
																										</li>
																										<li>
																											<a class="share_post share_linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&#038;url=http%3A%2F%2F%2F2019%2F05%2F15%2Ftech-conference-events-2019-2020%2F&title=Tech+Conference+Events++2019%2F2020"><span class="fa fa-linkedin"></span></a>
																										</li>
																									</ul>
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
													</div>
												</div>
											</div>
										</section>
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:14px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
						<div style="z-index: 2; " data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1560174492709 vc_row-has-fill">
							<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
								<div class="vc_column-inner vc_custom_1558094326026">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:35px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="shadow wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
								<div class="vc_column-inner vc_custom_1558357529202">
									<div class="wpb_wrapper">
										<div class="vc_row wpb_row vc_inner vc_row-fluid">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner">
													<div class="wpb_wrapper">
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:51px;"></div>
														</div>
														<div class="wpb_text_column wpb_content_element " >
															<div class="wpb_wrapper">
																<h4 style="text-align: center;"><span style="color: #ffffff;">Obtenez une consultation gratuite</span></h4>
															</div>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:33px;"></div>
														</div>
														<div role="form" class="" id="wpcf7-f434-p1319-o1" lang="en-US" dir="ltr">
															<div class="screen-reader-response"></div>
															<form action="{{ route('consult.save') }}" method="post" autocomplete="off">
                                                                @csrf
				
																<div class='row transparent-01'>
																	<div class='wgl_col-3'>
																		<span class="wpcf7-form-control-wrap text-759"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Nom *" required/></span>
																	</div>
																	<div class='wgl_col-3'>
																		<span class="wpcf7-form-control-wrap email-613"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email *" required/></span>
																	</div>
																	<div class='wgl_col-3'>
																		<span class="wpcf7-form-control-wrap text-759"><input type="text" name="entreprise" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Entreprise *" required/></span>
																	</div>
																	<div class='wgl_col-3'>
																		<input type="submit" value="Consultation Gratuite" class="wpcf7-form-control wpcf7-submit" />
																	</div>
																</div>
																
															</form>
														</div>
														<div  class ="integrio_module_spacing">
															<div class="spacing_size spacing_size-initial" style="height:38px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner vc_custom_1558094595657">
									<div class="wpb_wrapper">
										<div  class ="integrio_module_spacing">
											<div class="spacing_size spacing_size-initial" style="height:28px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
					</div>
				</div>
			</div>
		</main>


@stop