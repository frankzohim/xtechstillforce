
<div class='page-header page-header_align_left breadcrumbs_inline' style="background-image:url(public/images/{{$image_title}}); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:bottom center;background-color:#2d2d2d; height:520px; margin-bottom:40px; padding-top:170px; padding-bottom:100px;" >
			<div class="page-header_wrapper">
				<div class='wgl-container'>
					<div class='page-header_content'>
						<h1 class='page-header_title' style="color: #fefefe; font-size: 42px; line-height: 52px;">{{$title}}</h1>
						<div class='page-header_breadcrumbs' style="color: #ffffff; font-size: 16px; line-height: 24px;">
							<div class="breadcrumbs">
								<a href="accueil" class="home">Accueil</a>
								<span class="divider"></span>
                                @isset($subtitle)
								    <span class="current">{{$subtitle}}</span>
                                    <span class="divider"></span>
                                @endisset
								<span class="current">{{$title}}</span>
							</div>
							<!-- .breadcrumbs -->
						</div>
					</div>
			</div>
	</div>
</div>