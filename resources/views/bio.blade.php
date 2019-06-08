@extends('layouts.app1')

@section('content')
<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Artist Bio</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="bg-dark has-color pb-0">
    <div class="container">
      <div class="section-title text-center mb-50">
        <h2>ABOUT <span class="primary-color">ARTIST</span></h2>
        <p>Artist & Song Writter</p>
      </div><!-- section-title -->
      <div class="js-singer-details-area">
        <div class="row">
          <div class="col-lg-3">
            <div class="js-single-singer">
              <div class="js-singer-thumbnail">
                <img alt="Singer Thumbnail" src=" {{asset('assets/images/singer/thumbnail3.jpeg')}} ">  
              </div>
              <div class="js-singer-info">
                <ul>
                  <li><span>Birthday:</span> October 25, 1985</li>
                  <li><span>Height:</span> 165.5 cm</li>
                  <li><span>Years active</span> 2001–present</li>
                  <li><span>Website:</span> http://company.com</li>
                </ul> 
              </div>
            </div> 
          </div><!-- col-lg-3 -->
          <div class="col-lg-9"> 
            <div class="js-singer-content">
              <h4>Jua Cali</h4>
              
              <p>Early life
                 Jua Cali was born in Eastlands, Nairobi. His parents, Doreen Onditi and Evans Onditi (deceased) were both schoolteachers. 
				 He grew up with a strict Catholic upbringing in California Estate to the east of Nairobi city. He began rapping at age 10, 
				 encouraged by his elder brother Christopher Sati. He was known as an introverted teenager who was often quiet, hardly ever socialising.

              <p>He attended Ainsworth Primary School (Standards 1 to 6); Shepherds Junior Buruburu (Standards 6 to 8); Jamuhuri High School and eventually 
				 Kenya Christian Industrial Training Institute (K.C.I.T.I) Eastleigh where he received a diploma in Information technology. There, he played basketball
				 with ambitions to make it to the Kenyan National Basketball Team. He never made it in the team, blaming this on his height. His earlier foray into music
				 included singing in a band called 'Sita Futi'. Sita Futi disbanded almost as soon as it was started leaving behind Jua Cali and his close friend Jemmoh.
				 The departing group members left to pursue careers outside music. Calif Records came into being after Jua Cali teamed up with childhood friend Clemo 
				 to form the record label that quickly became a hit factory, gaining prominence in the East Africa music scene with chart topping artists and music. 
				 Calif Records also invented the Genge genre of Kenyan hip hop. Jua Cali often cites his brother, Chris, and his parents as his greatest influences in life.
				 He is also related to dell xerxes as his brother in law

              <p>Music career
                 His first recorded track was Ruka, released in 2001, and was followed by Nipe Asali in 2002. In 2004 He collaborated with Pilipili in track "Kamata Dame". 
				 Like most Kenyan artists, it took several years before his first full album was released. His album "Juacali Sekta" reached the stores in 2006, containing 
				 mostly previously released singles.

              <p>His single Kwaheri (featuring Sainapei Tande-winner Coca-Cola pop star and radio presenter) was a major hit in Kenya in 2007.[1] At the New Year's Eve 2008/2009
				 he released a new album, Ngeli ya Genge.[2][3] He has toured the US and other countries.[4] In August 2007, he was among 100 most influential Kenyans 
				 as selected by The Standard newspaper.[5][6]

              <p>His stage name Jua Cali, is derived from California, an estate in Nairobi (as is the name of Calif Records). It also resembles Jua Kali, a Swahili term meaning
				 fierce sun, which has been taken to refer to Kenya's informal sector of the economy.

              <p>He has released a series of new songs with a new producer Keggah based in the United States. His new songs include, Karibu Nairobi and Kuna Sheng which have both 
				 received massive airplay and good reviews.</p>
              <div>
                <h4 class="mb-3">Share</h4>
                <ul class="social-icon-without-bg list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- col-lg-3 -->
        </div><!-- row -->
      </div><!-- js-singer-details-area" -->
    </div><!-- container -->
  </section><!-- Album Section End -->
   
  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
   
@endsection