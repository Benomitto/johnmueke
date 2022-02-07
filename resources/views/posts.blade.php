<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
  @include('layouts.navbar')
  
   <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 feature "><br><br><br><br><br><br><br><br>
                    <span class="icon icon-tools"></span>
                    <div class="card" style="width: 18rem;">
						<img src="images/smueke.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
							  <h5 class="card-title fw-bold text-center">Starting Up</h5>
								<p class="card-text">I was convinced that technology could be used to solve problems and mostly global problems thus my interest but initially I wanted to be a lawyer because of my interest in politics...</p>
								<a href="#" class="text-start text-primary text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LEARN MORE</a>
						  </div>
					</div>
                </div>
                <div class="col-md-4 col-sm-6 feature"><br><br><br><br><br><br><br><br>
                    <span class="icon icon-desktop"></span>
                    <div class="card" style="width: 18rem;">
						<img src="images/add.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
							  <h5 class="card-title fw-bold text-center">Rising The Ranks</h5>
								<p class="card-text">Somewhere in between my undergraduate and graduate studies I decided to work and fortunately, I quickly grew up the ranks to management level in technology divisions...</p>
								<a href="#" class="text-start text-primary text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">LEARN MORE</a>
						  </div>
					</div>
                </div>
				
                <div class="col-md-4 col-sm-6 feature  mb-5"><br><br><br><br><br><br><br><br>
                    <span class="icon icon-lightbulb"></span>
                    <div class="card" style="width: 18rem;">
						<img src="images/sdg3.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
							  <h5 class="card-title fw-bold text-center">Self-realization</h5>
								<p class="card-text">Through these companies I grew up the ranks and I got interested in how businesses operate, so I figured I would do an MBA in Global Technology, a choice which was in part also... </p>
								<a href="#" class="text-start text-primary text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">LEARN MORE</a>
						  </div>
					</div>
                </div>
            </div>
        </div>
    </section><!-- features -->
	
	@include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--1-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-bold" id="staticBackdropLabel">Starting Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<p class="mb-2">I was convinced that technology could be used to solve problems and mostly global problems thus my interest but initially I wanted to be a lawyer because of my interest in politics, which was a desire that had been brewing in me from a very young age. So I thought that to actualize my dream, I needed to go out and learn law, learn about governance and all that is related to it.</p>
			<p class="mt-2">But after getting into it for some time, I figured that it wasn’t for me and felt that I wanted to do something that is more on the sciences side. I realized that technology is where my heart was at that time, and again this was mainly inspired by the dotcom era of the early 90’s. So I pursued studies in Computer Science.</p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--1-->

<!--1-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-bold" id="staticBackdropLabel">Rising the Ranks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<p class="mb-2">Somewhere in between my undergraduate and graduate studies I decided to work and fortunately, I quickly grew up the ranks to management level in technology divisions of the corporate firms I worked for. All in all, through the course of my journey in employment, I worked in four industries. I started out in education, working in the university library running their computer labs.</p>
			<p class="mt-2">After that I moved into retail and again I was fortunate enough to work for one of the largest retail firms globally – KMART, which has thousands of stores around the world. After some time spent here, I went into manufacturing where I worked for Daimler Chrysler, one of the largest automotive companies in the world. At Daimler I worked in Plant Technology Support where I managed the technology applied in their plants around North America and was in charge of the United States, Mexico and Canada. After Daimler, I then moved on to working in the financial services sector where I joined a company called FISERV, which is a fortune 500 company which writes software for financial institutions. Here I ran their technology services division.</p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--1-->

<!--1-->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-bold" id="staticBackdropLabel">Self-realization</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<p class="mb-2">Through these companies I grew up the ranks and I got interested in how businesses operate, so I figured I would do an MBA in Global Technology, a choice which was in part also, just to be able to figure out how technology solves people’s problems in everyday life. But the main driver for this decision was also because I wanted to start my own business and not just so as to do it as a side-hustle, but I deeply desired to found and run a successful business from the ground up. </p>
			<p class="mt-2 mb-2">So I did a double major in entrepreneurship so as to figure that out. And soon after finishing my MBA, I quit my job, moved to Kenya and started a business. So when got to Kenya I bought into a startup which did documents management. We kept people’s files physical and digital files. So I spent a lot of time building that company and we built it properly with my partner from the ground up and it began to show results a few years later. We grew that company with my partner to become the second largest documents and records management company in the region and the largest locally owned. Later on we sold it to a French company in 2018. Then I diversified and joined the company I am in presently as a majority shareholder, which is also a startup and is also doing very well.</p>
			<p class="mt-2">All through the journey in my career, the biggest lesson that I learnt that I carry till today is teamwork. Everybody has a role to play and that is why they are employed and everybody’s role is important to the success of that organization. So I really learnt to work with people and mostly how to communicate what needs to be done clearly, because everyone has a part to play in the bigger picture of things. I also have grown to always respect everybody’s opinion because sometimes you will get into conflicts where you will difference in opinions but you don’t just dismiss people. You listen to them, you understand where they are coming from and even if you agree to disagree, you simply respect their opinion. </p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--1-->