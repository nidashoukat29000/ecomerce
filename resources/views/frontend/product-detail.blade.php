@extends('frontend.layout.master')
@section('content')
    <!-- HEADER-AREA START -->
			<header id="sticky-menu" class="header header-2">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span>3</span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span>03 items</span> in your shopping bag</p>
												</div>
												<div class="all-cart-product clearfix">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 100.00</p>
															<p class="mb-0">Qty : 02 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/2.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 300.00</p>
															<p class="mb-0">Qty : 01 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
												</div>
												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright">$500.00</span></h5>
												</div>
												<div class="cart-bottom  clearfix">
													<a href="cart.html" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
													<a href="checkout.html" class="button-one floatright text-uppercase" data-text="Check out">Check out</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MAIN-MENU START -->
				<div class="menu-toggle menu-toggle-2 hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						<ul>
							<li><a href="index.html">home</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="index.html">Home Version 1</a></li>
										<li><a href="index-2.html">Home Version 2</a></li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html">products</a>
								<div class="mega-menu menu-scroll">
									<div class="table">
										<div class="table-cell">
											<div class="half-width">
												<ul>
													<li class="menu-title">best brands</li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="half-width">
												<ul>
													<li class="menu-title">popular brands</li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="full-width">
												<div class="mega-menu-img">
													<a href="single-product.html"><img src="img/megamenu/1.jpg" alt="" /></a>
												</div>
											</div>
											<div class="pb-80"></div>
										</div>
									</div>
								</div>
							</li>
                            <li><a href="#">Shortcodes</a>
                                <div class="sub-menu menu-scroll">
                                    <ul>
                                        <li class="menu-title">Shortcodes</li>
                                        <li><a href="elements-accordions.html">Accordion</a></li>
                                        <li><a href="elements-toggles.html">Toggles</a></li>
                                        <li><a href="elements-tab.html">Tab</a></li>
                                        <li><a href="elements-product-tab.html">Product Tab</a></li>
                                        <li><a href="elements-product-tab-2.html">Product Tab 2</a></li>
                                        <li><a href="elements-carousel.html">product carousel</a></li>
                                        <li><a href="elements-carousel-2.html">product carousel 2</a></li>
                                        <li><a href="elements-featured-product.html">Featured Product</a></li>
                                        <li><a href="elements-featured-product-2.html">Featured Product 2</a></li>
                                        <li><a href="elements-button.html">Button</a></li>
                                        <li><a href="elements-table.html">Table</a></li>
                                        <li><a href="elements-progress-bars.html">Progress Bar</a></li>
                                        <li><a href="elements-blog.html">Blog</a></li>
                                        <li><a href="elements-blog-2.html">Blog - 2</a></li>
                                        <li><a href="elements-team.html">Team</a></li>
                                        <li><a href="elements-footer.html">Footer</a></li>
                                        <li><a href="elements-footer-2.html">Footer 2</a></li>
                                        <li><a href="elements-map.html">Map</a></li>
                                    </ul>
                                </div>
                            </li>
							<li><a href="shop-sidebar.html">accesories</a></li>
							<li><a href="shop-list.html">lookbook</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="#">pages</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
										<li><a href="shop-grid-right-sidebar.html">Shop Right Sidebar</a></li>
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="shop-list-right-sidebar.html">Shop List right sidebar</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order.html">Order</a></li>
										<li><a href="login.html">login / Registration</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="404.html">404</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single-blog.html">Single Blog</a></li>
										<li><a href="single-blog-sidebar.html">Single Blog Sidebar</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- MAIN-MENU END -->
			</header>
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul>
												<li><a href="index.html">Home Version 1</a></li>
												<li><a href="index-2.html">Home Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">products</a></li>
										<li><a href="shop-sidebar.html">accesories</a></li>
										<li><a href="shop-list.html">lookbook</a></li>
										<li><a href="blog.html">blog</a></li>
										<li><a href="#">pages</a>
											<ul>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
												<li><a href="shop-list.html">Shop List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="order.html">Order</a></li>
												<li><a href="login.html">login / Registration</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single Blog</a></li>
												<li><a href="single-blog-sidebar.html">Single Blog Sidebar</a></li>
												<li><a href="about.html">About Us</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
										<li><a href="about.html">about us</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->
			<!-- HEADING-BANNER START -->
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>Single Product</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>Single Product</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area single-pro-area pt-80 pb-80 product-style-2">
				<div class="container">	
					<div class="row shop-list single-pro-info no-sidebar">
						<!-- Single-product start -->
						<div class="col-lg-12">
							<div class="single-product clearfix">
								<!-- Single-pro-slider Big-photo start -->
								<div class="single-pro-slider single-big-photo view-lightbox slider-for">
									<div>
										<img src="{{asset('assets/img/single-product/medium/1.jpg')}}" alt="" />
										<a class="view-full-screen" href="img/single-product/large/1.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
									<div>
										<img src="{{asset('assets/img/single-product/medium/2.jpg')}}" alt="" />
										<a class="view-full-screen" href="img/single-product/large/2.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
									<div>
										<img src="{{asset('assets/img/single-product/medium/3.jpg')}}" alt="" />
										<a class="view-full-screen" href="img/single-product/large/3.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
									<div>
										<img src="{{asset('assets/img/single-product/medium/4.jpg')}}" alt="" />
										<a class="view-full-screen" href="img/single-product/large/4.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
									<div>
										<img src="{{asset('assets/img/single-product/medium/5.jpg')}}" alt="" />
										<a class="view-full-screen" href="img/single-product/large/5.jpg"  data-lightbox="roadtrip" data-title="My caption">
											<i class="zmdi zmdi-zoom-in"></i>
										</a>
									</div>
								</div>	
								<!-- Single-pro-slider Big-photo end -->								
								<div class="product-info">
									<div class="fix">
										<h4 class="post-title floatleft">dummy Product name</h4>
										<span class="pro-rating floatright">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<span>( 27 Rating )</span>
										</span>
									</div>
									<div class="fix mb-20">
										<span class="pro-price">$ 56.20</span>
									</div>
									<div class="product-description">
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humou or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum. </p>
									</div>
									<!-- color start -->								
									<div class="color-filter single-pro-color mb-20 clearfix">
										<ul>
											<li><span class="color-title text-capitalize">color</span></li>
											<li><a class="active" href="#"><span class="color color-1"></span></a></li>
											<li><a href="#"><span class="color color-2"></span></a></li>
											<li><a href="#"><span class="color color-7"></span></a></li>
											<li><a href="#"><span class="color color-3"></span></a></li>
											<li><a href="#"><span class="color color-4"></span></a></li>
										</ul>
									</div>
									<!-- color end -->
									<!-- Size start -->
									<div class="size-filter single-pro-size mb-35 clearfix">
										<ul>
											<li><span class="color-title text-capitalize">size</span></li>
											<li><a href="#">M</a></li>
											<li><a class="active" href="#">S</a></li>
											<li><a href="#">L</a></li>
											<li><a href="#">SL</a></li>
											<li><a href="#">XL</a></li>
										</ul>
									</div>
									<!-- Size end -->
									<div class="clearfix">
										<div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<!-- Single-pro-slider Small-photo start -->
									<div class="single-pro-slider single-sml-photo slider-nav">
										<div>
											<img src="{{asset('assets/img/single-product/small/1.jpg')}}" alt="" />
										</div>
										<div>
											<img src="{{asset('assets/img/single-product/small/2.jpg')}}" alt="" />
										</div>
										<div>
											<img src="{{asset('assets/img/single-product/small/3.jpg')}}" alt="" />
										</div>
										<div>
											<img src="{{asset('assets/img/single-product/small/4.jpg')}}" alt="" />
										</div>
										<div>
											<img src="{{asset('assets/img/single-product/small/5.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Single-pro-slider Small-photo end -->
								</div>
							</div>
						</div>
						<!-- Single-product end -->
					</div>
					<!-- single-product-tab start -->
					<div class="single-pro-tab">
						<div class="row">
							<div class="col-md-3">
								<div class="single-pro-tab-menu">
									<!-- Nav tabs -->
									<ul class="nav d-block">
										<li><a href="#description" data-bs-toggle="tab">Description</a></li>
										<li><a class="active" href="#reviews"  data-bs-toggle="tab">Reviews</a></li>
										<li><a href="#information" data-bs-toggle="tab">Information</a></li>
										<li><a href="#tags" data-bs-toggle="tab">Tags</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane" id="description">
										<div class="pro-tab-info pro-description">
											<h3 class="tab-title title-border mb-30">dummy Product name</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
										</div>
									</div>
									<div class="tab-pane active" id="reviews">
										<div class="pro-tab-info pro-reviews">
											<div class="customer-review mb-60">
												<h3 class="tab-title title-border mb-30">Customer review</h3>
												<ul class="product-comments clearfix">
													<li class="mb-30">
														<div class="pro-reviewer">
															<img src="{{asset('assets/img/reviewer/1.jpg')}}" alt="" />
														</div>
														<div class="pro-reviewer-comment">
															<div class="fix">
																<div class="floatleft mbl-center">
																	<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
																	<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
																</div>
																<div class="comment-reply floatright">
																	<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</div>
															</div>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
														</div>
													</li>
													<li class="threaded-comments">
														<div class="pro-reviewer">
															<img src="{{asset('assets/img/reviewer/1.jpg')}}" alt="" />
														</div>
														<div class="pro-reviewer-comment">
															<div class="fix">
																<div class="floatleft mbl-center">
																	<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
																	<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
																</div>
																<div class="comment-reply floatright">
																	<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</div>
															</div>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="leave-review">
												<h3 class="tab-title title-border mb-30">Leave your reviw</h3>
												<div class="your-rating mb-30">
													<p class="mb-10"><strong>Your Rating</strong></p>
													<span>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													</span>
													<span class="separator">|</span>
													<span>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													</span>
													<span class="separator">|</span>
													<span>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													</span>
													<span class="separator">|</span>
													<span>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													</span>
													<span class="separator">|</span>
													<span>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
														<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													</span>
												</div>
												<div class="reply-box">
													<form action="#">
														<div class="row">
															<div class="col-md-6">
																<input type="text" placeholder="Your name here..." name="name" />
															</div>
															<div class="col-md-6">
																<input type="text" placeholder="Subject..." name="name" />
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<textarea class="custom-textarea" name="message" placeholder="Your review here..." ></textarea>
																<button type="submit" data-text="submit review" class="button-one submit-button mt-20">submit review</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>		
									</div>
									<div class="tab-pane" id="information">
										<div class="pro-tab-info pro-information">
											<h3 class="tab-title title-border mb-30">Product information</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
										</div>											
									</div>
									<div class="tab-pane" id="tags">
										<div class="pro-tab-info pro-information">
											<h3 class="tab-title title-border mb-30">tags</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
										</div>											
									</div>
								</div>									
							</div>
						</div>
					</div>
					<!-- single-product-tab end -->
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
			
			
@endsection