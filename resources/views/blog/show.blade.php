@extends('layouts.app1')

@section('content')

<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Blog Default With Sidebar</h2>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- js-breadcrumb-area -->
 
  <div class="js-blog-defalt-area js-blog-with-sidebar js-single-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <article class="js-default-single-blog mb-0"> 
              <div class="js-default-blog-thumbnail">
                <img src=" {{asset('assets/images/blog/blog-thubmnail2.jpg')}} " alt="thumbnail"> 
              </div><!-- js-default-blog-thumbnail -->
             <div class="js-default-single-blog-content has-color mb-0"> 
               <h3>Our Street Collection In 2018</h3>
               <ul class="list-inline w-100">
                 <li><a href="#">April 20</a></li>
                 <li><a href="#">Like 115</a></li>
                 <li><a href="#">Comment 25</a></li>
               </ul>  
             </div> <!-- js-default-single-blog-content -->
             <span class="js-star-mark primary-gradient-color"><i class="fa fa-star"></i></span>
            </article><!-- Article End--> 

            <div class="js-single-blog-content js-blockquote-post js-blockquote-single bg-white">
              <p>Morbi quis commodo odio aenean sed. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Magna sit amet purus gravida quis blandit. Ornare quam viverra orci sagittis eu. Purus viverra accumsan in nisl nisi scelerisque eu ultrices. Non odio euismod lacinia at quis risus sed vulputate.</p>
              <p>Notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum minim veniam, quis nostrud nostrud exerci tation. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>   
              <div class="js-single-blockquote">
                <blockquote>
                  <p class="lead">Leum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio zzril.</p>
                </blockquote> 
                <div class="quote-post-author">
                  <span>Mark Devid</span>
                  <h6>Founder of B-Studio</h6>
                </div>  
              </div><!-- js-single-blockquote -->
              <p>Semper risus in. Consequat mauris nunc congue nisi vitae suscipit. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Nulla aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Cursus turpis massa tincidunt dui ut ornare lectus sit. In aliquam sem fringilla ut morbi tincidunt. Non consectetur a erat nam at. Sagittis aliquam malesuada bibendum arcu vitae elementum curabi</p>
              <p>Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pharetra diam sit amet nisl suscipit. Ac odio tempor orci dapibus ultrices in. Nulla facilisi cras fermentum odio eu. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Leo integer malesuada nunc. </p>
              <div class="js-tag">
                <ul class="list-inline">
                  <li><span>Tags</span></li>
                  <li><a href="#">#Hiphop</a></li>
                  <li><a href="#">#Classic</a></li>
                  <li><a href="#">#Dj Music</a></li>
                  <li><a href="#">#Road Show</a></li>
                  <li><a href="#">#Rock N Roll</a></li>
                </ul>
              </div>
              <div class="share">
                <ul class="social-icon list-inline">
                  <li><strong>Share</strong></li>  
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li> 
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li> 
                </ul>
              </div>
            </div><!-- js-single-blog-content --> 
              
            <div class="author-info bg-white mb-5 p-4">
              <div class="author-info-image text-center">
                <img class="float-left" src=" {{asset('assets/images/blog/comment-author1.png')}} " alt="author"> 
              </div>
              <div class="author-desc">
                  <div class="author-title"> 
                    <strong>Rocky</strong>
                    <p>March 14, 2019 at 12:36 pm</p>
                    <div class="js-blog-send-msg">
                      <a class="btn btn-sm float-right" href="#"><i class="fa fa-envelope"></i>send a message</a>
                    </div> 
                  </div>
                  <p>Demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, humanitatis per seacula qui mutationem consuetudium.</p>
                  <ul class="social-icon list-inline">
                   <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                   <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                   <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 </ul>
              </div>   
            </div> 

            <div class="post-single-comment-form bg-white">   
              <h3 class="js-single-comment-title"><span>Share</span> Your Thoughts.</h3>
              <form id="contact-form">
                <textarea placeholder="Write your comment here" name="meassage"></textarea>
                <div class="row">
                   <div class="col-md-6">
                      <div class="js-contact-form-input">
                        <label>What is your name? <span class="primary-color">*</span></label>
                        <input type="text" required="" placeholder="Name" name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="js-contact-form-input">
                        <label>Email address <span class="primary-color">*</span></label>
                        <input type="email" required="" placeholder="Email" name="email">
                      </div>
                    </div>
                </div><!-- row -->
                <div class="row">
                   <div class="col-md-6"> 
                      <input type="text" placeholder="Website http://" name="website">
                    </div>
                   <div class="col-md-6"> 
                      <input type="submit" value="post a comment" class="btn btn-primary">
                   </div>
                </div><!-- row --> 
              </form><!-- form close-->
              <div class="author-info">
                <h4><span>4 Comments on </span>“We’ve got something new and hot cooking here at Select. Stay tuned to find out more. ”</h4>
                <div class="author-info-image text-center">
                  <img alt="author" src=" {{asset('assets/images/blog/comment-author1.png')}} " class="float-left">
                  <p><a href="#">Reply</a></p>
                </div>
                <div class="author-desc">
                    <div class="author-title">
                       <strong>Rocky</strong>
                       <p>March 14, 2019 at 12:36 pm</p>
                    </div>
                    <p>Demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula qui mutationem consuetudium.</p>
                </div>   
              </div><!-- author-info -->

              <ol class="comment-list"><!-- comment-list    -->               
                 <li class="comment">
                    <div class="comment-info">
                      <div class="js-comment-info-img  text-center">
                        <img alt="author" src=" {{asset('assets/images/blog/comment-author2.png')}} " class="float-left">
                        <p><a href="#">Reply</a></p>
                      </div>
                       <div class="author-desc">
                          <div class="author-title">
                             <strong>Roknson</strong>
                             <p>March 14, 2019 at 12:36 pm</p>
                          </div>
                          <p>Mirum est notare quam littera gothica, quam nunc putamus parum.</p>
                       </div>
                    </div>
                    <ol class="children">
                       <li class="comment">
                        <div class="comment-info">
                          <div class="js-comment-info-img  text-center">
                            <img alt="author" src="assets/images/blog/comment-author3.png" class="float-left">
                            <p><a href="#">Reply</a></p>
                          </div>
                           <div class="author-desc text-left">
                              <div class="author-title">
                                 <strong>Mark David</strong>
                                 <p>March 14, 2019 at 12:36 pm</p>
                              </div>
                              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis.</p>
                           </div>
                        </div>
                       </li>
                    </ol><!-- .children -->
                 </li><!-- comment -->
                 <li class="comment">
                    <div class="comment-info">
                      <div class="js-comment-info-img text-center">
                        <img alt="author" src="assets/images/blog/comment-author4.png" class="float-left">
                        <p><a href="#">Reply</a></p>
                      </div>
                       <div class="author-desc light-box">
                          <div class="author-title">
                             <strong>Roknson</strong>
                             <p>March 14, 2019 at 12:36 pm</p>
                          </div>
                          <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                       </div>
                    </div>
                 </li><!-- .comment -->    
                 <li><a class="btn btn-primary" href="#">load more comments</a></li>                
              </ol> 
          </div><!-- post-single-comment-form -->
        </div> <!-- Col-md-8 -->

        <div class="col-lg-4">
          <aside class="sidebar-widget">
            <div class="widget bg-white">
              <h2 class="logo"><a href="#"><img src="assets/images/logo.png" alt="Logo"></a></h2>
              <p>There are many variations of passages of Lorem Ipsum avail.</p>
              <div class="text-right js-widget-read-more">
                <a class="primary-color" href="#">Read More</a>
              </div>
            </div><!-- widget End-->
            <div class="widget bg-white">
             <div class="js-widget-search">
               <form>
                 <input type="text" placeholder="What are you looking for?" required="">
                 <i><img src="assets/images/search.png" alt="search icon"></i>
               </form>
             </div>
            </div><!-- widget End-->
            <div class="widget bg-white">
              <div class="js-post-catogories">
                <div class="shape primary-bg"></div>
                <h3>Post category.</h3>
                <ul>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Classic <span>8 367</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Dj <span>2 003</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Hip Hop <span>605</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Lifestyle <span>107</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Shop <span>82</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Photography <span>30</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Tour <span>6</span></a></li>
                </ul>   
              </div><!-- js-post-catogories -->
            </div><!-- widget End-->

            <div class="widget primary-gradient-color">
             <div class="js-widget-subscribe text-center has-color">
              <h3>Subscribe</h3>
              <p>Subscribe now to get notified about exclusive offers from   every week!</p>
               <form>
                 <input type="email" placeholder="Your E-mail Address" required="">
                 <input class="btn" type="submit" value="subscribe now!">
               </form>
               <span>Don't worry, we don't spam!</span>
             </div>
            </div><!-- widget End-->
            
            <div class="widget bg-white"> 
              <div class="shape primary-bg"></div>
              <h3>Recent posts.</h3>
               <div class="js-widget-recent-post">
                 <span class="primary-color">category</span>
                 <p>Sed sed risus pretium quam vulputate dignissim morbi tincidunt ornare massa</p>
                 <ul class="list-inline">
                   <li>Mar 25, 2018</li>
                   <li>8 Comments</li>
                 </ul>
               </div>
               <div class="js-widget-recent-post">
                 <span class="primary-color">category</span>
                 <p>Sed sed risus pretium quam vulputate dignissim morbi tincidunt ornare massa</p>
                 <ul class="list-inline">
                   <li>Mar 25, 2018</li>
                   <li>8 Comments</li>
                 </ul>
               </div>
               <div class="js-widget-recent-post">
                 <span class="primary-color">category</span>
                 <p>Sed sed risus pretium quam vulputate dignissim morbi tincidunt ornare massa</p>
                 <ul class="list-inline">
                   <li>Mar 25, 2018</li>
                   <li>8 Comments</li>
                 </ul>
               </div> 
            </div><!-- widget End-->

            <div class="widget bg-white"> 
                <div class="shape primary-bg"></div>
                <h3>Featured posts.</h3>
                <div class="js-featured-post-slides text-center has-color">
                  <div id="js-post-slides" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#js-post-slides" data-slide-to="0" class="active"></li>
                    <li data-target="#js-post-slides" data-slide-to="1"></li>
                    <li data-target="#js-post-slides" data-slide-to="2"></li>
                    <li data-target="#js-post-slides" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <span class="primary-color">Category</span>
                      <h5>We’ve got something new and hot cooking here at Select. Stay tuned to find out more. </h5>
                      <span>Jan 9, 2019</span>
                      <ul class="js-post-author">
                        <li>
                           <a href="#"><img alt="blog ahthor image" src="assets/images/blog/default-post-author.png"><p class="js-default-author-content"><span>posted by</span>Zabed Richerd</p>
                           </a>
                        </li>
                      </ul>
                    </div><!-- carousel-item -->
                    <div class="carousel-item">
                      <span class="primary-color">Category</span>
                      <h5>We’ve got something new and hot cooking here at Select. Stay tuned to find out more. </h5>
                      <span>Jan 9, 2019</span>
                      <ul class="js-post-author">
                        <li>
                           <a href="#"><img alt="blog ahthor image" src="assets/images/blog/default-post-author.png"><p class="js-default-author-content"><span>posted by</span>Zabed Richerd</p>
                           </a>
                        </li>
                      </ul>
                    </div><!-- carousel-item --> 
                    <div class="carousel-item">
                      <span class="primary-color">Category</span>
                      <h5>We’ve got something new and hot cooking here at Select. Stay tuned to find out more. </h5>
                      <span>Jan 9, 2019</span>
                      <ul class="js-post-author">
                        <li>
                           <a href="#"><img alt="blog ahthor image" src="assets/images/blog/default-post-author.png"><p class="js-default-author-content"><span>posted by</span>Zabed Richerd</p>
                           </a>
                        </li>
                      </ul>
                    </div><!-- carousel-item --> 
                    <div class="carousel-item">
                      <span class="primary-color">Category</span>
                      <h5>We’ve got something new and hot cooking here at Select. Stay tuned to find out more. </h5>
                      <span>Jan 9, 2019</span>
                      <ul class="js-post-author">
                        <li>
                           <a href="#"><img alt="blog ahthor image" src="assets/images/blog/default-post-author.png"><p class="js-default-author-content"><span>posted by</span>Zabed Richerd</p>
                           </a>
                        </li>
                      </ul>
                    </div><!-- carousel-item --> 
                  </div><!-- carousel-inner -->
                  </div><!-- js-post-slide-list -->
                </div><!-- js-featured-post-slides -->  
            </div><!-- js-featured-post-slides -->

            <div class="widget bg-white">
              <div class="shape primary-bg"></div>
              <h3>Featured posts.</h3>
              <div class="js-recent-comments">
                <ul>
                  <li><a href="#"><span class="primary-color">Bobson</span> • Risus pretium quam vulputate dignissim morbi</a></li>
                  <li><a href="#"><span class="primary-color">Bobson</span> • Risus pretium quam vulputate dignissim morbi</a></li>
                  <li><a href="#"><span class="primary-color">Bobson</span> • Risus pretium quam vulputate dignissim morbi</a></li>
                </ul>
              </div>
            </div><!-- widget End--> 
            <div class="widget bg-white">
              <img src=" {{asset('assets/images/blog/widget-add.png')}} " alt="add">
            </div><!-- widget End-->   
            <div class="widget bg-white">
               <div class="js-widget-social-icon">
                 <ul class="list-inline">
                   <li>
                     <a href="#">
                       <i><img src=" {{asset('assets/images/blog/facebook.png')}} " alt="facebook"></i>
                       <span class="js-follower">5k</span> 
                       <span>Follow</span>      
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i><img src=" {{asset('assets/images/blog/twitter.png')}} " alt="twitter"></i>
                       <span class="js-follower">999</span> 
                       <span>Like</span>      
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i><img src=" {{asset('assets/images/blog/ig.png')}} " alt="ig"></i>
                       <span class="js-follower">6k</span> 
                       <span>Follow</span>      
                     </a>
                   </li>
                 </ul>
               </div>
            </div><!-- widget End-->  
          </aside><!-- sidebar-widget -->
        </div><!-- col-lg-4 End-->   
      </div><!-- row -->  
    </div><!-- container -->
  </div><!-- js-singer-area End -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
  


@endsection