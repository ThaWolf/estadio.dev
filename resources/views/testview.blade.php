
@extends('layouts.cms')

@section('content')



<div class="container">
		
		
		<div class="tabbable-panel">
			<div class="tabbable-line">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="#detalles" data-toggle="tab">Detalles</a></li>
					<li><a href="#participantes" data-toggle="tab">Participantes</a></li>
					<li><a href="#brackets" data-toggle="tab">Brackets</a></li>
					<li><a href="#streams" data-toggle="tab">Streaming</a></li>
				</ul>
			</div>
			<br />
			
			<div class="tab-content">
				<div class="tab-pane fade in active" id="detalles">
					<div class="panel-body">
						<div class="row">
							<img src="{{ asset('img/torneos/overwatch.png') }}"  class="img-responsive">
						</div>
					</div>
					<br />
					<div class="panel-body">
						<h1>Reglas</h1>
						<p>
							Bacon ipsum dolor amet venison shankle spare ribs, t-bone pork loin picanha hamburger cupim swine ground round alcatra filet mignon pancetta. Capicola porchetta meatloaf pastrami shank salami cow t-bone hamburger. Frankfurter alcatra salami tail pork loin ball tip. Porchetta fatback drumstick, landjaeger pastrami jowl ground round flank kielbasa hamburger filet mignon. Kielbasa prosciutto ribeye frankfurter rump biltong short ribs pork belly chicken alcatra sausage shankle ground round. -->

							Cupim brisket chicken, pork prosciutto beef ribs turkey ham hock leberkas strip steak filet mignon kevin meatloaf. Rump bresaola tongue turducken. Capicola ham hock tongue strip steak shoulder cupim. Flank kielbasa picanha, spare ribs prosciutto pig tri-tip ground round shoulder biltong short ribs jowl cow strip steak. Picanha beef ribs frankfurter, bresaola leberkas drumstick ground round ribeye alcatra brisket.
						</p>
					</div>

				</div>
				<div class="tab-pane fade" id="participantes">
					
					<div class="panel-body">
					<h1 align="center"> Participantes &nbsp- &nbsp 32/64 <h1>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="64" style="min-width: 2em; width: 50%;">
							<p align="center">50%</p>
						</div>
					</div>		

					<br/>
						<div class="container" style="margin-top:20px;">

							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>

							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
							<div class="row">
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
								<div class="col-md-3">

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Nalguidan</a></strong></h3>
											<p class="small">Nalguidan#1134 <span class="glyphicon glyphicon-remove " data-toggle="tooltip" data-placement="bottom" title="pending"></span></p>
										</div>
									</div>   
								</div>
								<div class="col-md-3"> 

									<div class="media">
										<a href="#" class="pull-left">        
											<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
										</a>
										<div class="media-body">
											<h3 class="media-heading"><strong><a href="#">Tha Wolf</a></strong></h3>
											<p class="small">Wolf#11851 <span class="glyphicon glyphicon-ok " data-toggle="tooltip" data-placement="bottom" title="checked-in"></span></p>
										</div>
									</div>     

								</div>
							</div>	
							<br/>
						</div>

					</div>





				</div>

				<div class="tab-pane fade" id="brackets">
				<div class="panel-body">
					<br/>
					<div class="brackets">
        <script>

    var rounds;

    rounds = [


        //-- ronda 1
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111, url: 'http://www.google.com' },
                player2: { name: "Player 211", ID: 211 }
            },

            {
                player1: { name: "Player 112", winner: true, ID: 112 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 213", ID: 213 }
            },

            {
                player1: { name: "Player 114", winner: true, ID: 114 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115, url: 'goggle.com' },
                player2: { name: "Player 215", ID: 215 }
            },

            {
                player1: { name: "Player 116", winner: true, ID: 116 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 217", ID: 217 }
            },

            {
                player1: { name: "Player 118", winner: true, ID: 118 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 2
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 3
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 113", ID: 113 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 4
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 218", winner: true, ID: 218 },
            },
        ],
        //-- Champion
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
            },
        ],

    ];

    var titles = ['Ronda 1', 'Ronda 2', 'Ronda 3', 'Ronda 4', 'Ronda 5'];


    ;(function($){

        $(".brackets").brackets({
            titles: titles,
            rounds: rounds,
            color_title: 'black',
            border_color: '#00F',
            color_player: 'black',
            bg_player: 'white',
            color_player_hover: 'white',
            bg_player_hover: 'blue',
            border_radius_player: '10px',
            border_radius_lines: '10px',
        });

    })(jQuery);
</script>
    </div>
    </div>


				</div>
				<div class="tab-pane fade" id="streams">
					
					<div class="panel-body">
					<img src="https://0.s3.envato.com/files/92502140/embed.JPG" width="100%"></div>


					</div>
				</div>
			</div>

			

		</div>

	</div>
</div>



	@endsection