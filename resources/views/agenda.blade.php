<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
    @include('layouts.navbar')
		
<div class="banner-container" id="section-1">
	<div class="banner">
		<div class="bg-banner">
			<p class="text-white ms-5" style="position:relative;top:100px;width:261px;font-weight:800;font-size:24px;">Jonathan Mueke</p>
			<p class="text-white" style="position:relative;top:100px;width:378px;font-weight:900;font-size:54px;">My Agenda</p>
		</div>
	
		<div class="mueke">
			<div class="socials">
				
			</div>
		</div>
	</div>
</div>
		
		 <section id="features" class="features section text-md-start">
        <div class="container">
			<h2 class="fw-bold text-start mt-5 mb-3" id="agenda">My Agenda</h2>
			<div class="divider py-1 bg-warning mb-1 w-10"></div>
            <div class="row">
				@foreach($Agenda as $agenda)
			   <div class="col-md-4 text-start">
                    <img src="{{ asset('storage/'.$agenda->cover_image) }}" class="img-fluid rounded-circle mt-5 mb-2 mt-5" style="width:78px;height:78px;">
                    <div class="feature-content">
                        <p class="fw-bold fs-6 text-lg-start"><a href="{{route('agenda.show',$agenda->id)}}" class="text-decoration-none text-dark">{{$agenda->agenda_title}}</a></p>
						<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">{{$agenda->description}}</p>
				   </div>
                </div>
				@endforeach
            </div>
        </div>
    </section>
		
	@include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
