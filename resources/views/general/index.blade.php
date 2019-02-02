@extends('layouts.layout')

@section ('content')       
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">                  
                    <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img img-fluid" src="{{ URL::asset('opium/img/blog/author.png') }}" alt="">
                                <h4>Charlie Barber</h4>
                                <h5>5 Yrs of Tutoring</h5>
                                <p>I have been using this site for years. I enjoyed the workflow and the flexible payment period. </p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Jobs</h3>
                                <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post1.jpg')}}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Business and Applied Courses</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post2.jpg')}}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Technology and Engineering</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post3.jpg')}}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post4.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3> History and Political Science</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                 <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post4.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3> Medicines and Nurse related Jobs </h3></a>
                                        <p>04 Hours ago</p>
                                    </div>
                                </div>

                                 <div class="media post_item">
                                    <img src="{{ URL::asset('opium/img/blog/popular-post/post4.jpg') }}" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3> Programming and Software Engineering</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>

                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Receive a newsletter</h4>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns"><i class="lnr lnr-arrow-right"></i></a>
                                </div>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title"> Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Engineering</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>History</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food Science</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Business</p>
                                            <p>44</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Accounting and Finance</p>
                                            <p>44</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Philosophy</p>
                                            <p>89</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Management </p>
                                            <p>26</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Social Sciences</p>
                                            <p>44</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Agricultire</p>
                                            <p>24</p>
                                        </a>
                                    </li>																				
                                </ul>
                            </aside>
                        </div>
                    </div>
                      <div class="col-lg-9">
                        <div class="blog_left_sidebar">
                            <article class="blog_style1">
                            	<div class="blog_img">
                            		<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-1.jpg') }}" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<div class="cat">
											<a class="cat_btn" href="#">Gadgets</a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
										<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										<a class="blog_btn" href="#">Read More</a>
									</div>
								</div>
                            </article>
                            <div class="row">
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-1.jpg') }}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>
											</div>
										</div>
									</article>
                            	</div>
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-2.jpg ')}}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>	
											</div>
										</div>
									</article>
                            	</div>
                            </div>
                            <article class="blog_style1">
                            	<div class="blog_img">
                            		<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-2.jpg ')}}" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<div class="cat">
											<a class="cat_btn" href="#">Gadgets</a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
										<a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke CO Alarm</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										<a class="blog_btn" href="#">Read More</a>
									</div>
								</div>
                            </article>
                            <div class="row">
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-3.jpg ')}}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>
											</div>
										</div>
									</article>
                            	</div>
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-4.jpg ')}}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>
											</div>
										</div>
									</article>
                            	</div>
                            </div>
                            <div class="row">
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-5.jpg ')}}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>
											</div>
										</div>
									</article>
                            	</div>
                            	<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="{{ URL::asset('opium/img/home-blog/blog-small-6.jpg ')}}" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a class="cat_btn" href="#">Gadgets</a>
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
													<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
												</div>
												<a href="single-blog.html"><h4>Nest Protect 2nd Gen Smoke CO Alarm</h4></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua.</p>
												<a class="blog_btn" href="#">Read More</a>
											</div>
										</div>
									</article>
                            	</div>
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @endsection