@extends('layouts.app')


@section('styles')

	<style type="text/css">
				

			#contact .frame{
				width: 600px;
				height: 350px;
				margin: 200px auto 0;
				position: relative;
				background: #435d77;
				border-radius:0 0 40px 40px; 
			}
			#contact #button_open_envelope{
				width: 180px;
				height: 30px;
				position: absolute;
				z-index: 311;
				top: 250px;
				left: 208px;
				border-radius: 10px;
				color: #fff;
				font-size: 26px;
				padding:15px 0; 
				border: 2px solid #fff;
				transition:.3s;
				display: flex;
			    justify-content: center;
			    align-items: center;
			    padding: 20px;
			}
			#contact #button_open_envelope:hover{
				background: #FFf;
				color: #2b67cb;
				transform:scale(1.1);
				transition:background .25s, transform .5s,ease-in;
				cursor: pointer;
			}
			#contact .message{
				position: relative;
				width: 580px;
				min-height:300px;
				height: auto;
				background: #fff;
				margin: 0 auto;
				top: 30px;
				box-shadow: 0 0 5px 2px #333;
				transition:2s ease-in-out;
				transition-delay:1.5s;
				z-index: 300;
			}
			#contact .left,#contact .right,#contact .top{width: 0;	height: 0;position:absolute;top:0;z-index: 310;}
			#contact .left{	
				border-left: 300px solid #337efc;
				border-top: 160px solid transparent;
				border-bottom: 160px solid transparent;
			}
			#contact .right{	
				border-right: 300px solid #337efc;
				border-top: 160px solid transparent;
				border-bottom: 160px solid transparent;;
				left:300px;
			}
			#contact .top{	
				border-right: 300px solid transparent;
				border-top: 200px solid #03A9F4;
				border-left: 300px solid transparent;
				transition:transform 1s,border 1s, ease-in-out;
				transform-origin:top;
				transform:rotateX(0deg);
				z-index: 500;
			}
			#contact .bottom{
				width: 600px;
				height: 190px;
				position: absolute;
				background: #2b67cb;
				top: 160px;
				border-radius:0 0 30px 30px;
				z-index: 310; 
			}

			#contact .open{
				transform-origin:top;
				transform:rotateX(180deg);
				transition:transform .7s,border .7s,z-index .7s ease-in-out;
				border-top: 200px solid #2c3e50;
				z-index: 200;
			}
			#contact .pull{
				-webkit-animation:message_animation 2s 1 ease-in-out;
				animation:message_animation 2s 1 ease-in-out;
				-webkit-animation-delay:.9s;
				animation-delay:.45s;
				transition:1.5s;
				transition-delay:1s;
				z-index: 350;
			}
			#contact #name,#email,#phone,#messarea,#send{
				margin: 0;
				padding: 0 0 0 10px;
				width: 570px;
				height:40px;
				float: left;
				display: block;
				font-size: 18px;
				color: #2b67cb;
				border:none;
				border-bottom:1px solid #bdbdbd;
				letter-spacing: normal;
			}
			#contact #messarea{
				height: 117px;
				width: 560px;
				overflow: auto;
				border:none;
				padding: 10px;
			}
			#contact #send{ 
				width:   580px;
				padding: 0;	
				border:  none;
				cursor:  pointer;
				background: #1275ff;
				color: #fff;
				transition:.35s;
				letter-spacing: 1px;
			}
			#contact #send:hover{background:tomato;transition:.35s;}

			#contact ::-moz-placeholder{color: #1275ff;font-family: 'Ubuntu';font-size: 20px;opacity: 1;} 
			#contact ::-webkit-input-placeholder {color: #1275ff; font-family: 'Ubuntu';font-size: 20px;}
			#contact *:focus {outline: none;}
			#contact input:focus:invalid,textarea:focus:invalid {
			 /* when a field is considered invalid by the browser */
			    background: #fff url(images/invalid.png) no-repeat 98% center;
			    box-shadow: 0 0 5px #d45252;
			    border:1px solid #b03535;
			}
			#contact input:required:valid,textarea:required:valid { 
				/* when a field is considered valid by the browser */
			    background: #fff url(images/valid.png) no-repeat 98% center;
			    box-shadow: 0 0 5px #5cd053;
			    border-color: #28921f;
			}


			@-webkit-keyframes message_animation {
				0%{
					transform:translatey(0px);
					z-index: 300;
					transition: 1s ease-in-out;
				}
				50%{
					transform:translatey(-340px);
					z-index: 300;
					transition: 1s ease-in-out;
				}
				51%{
					transform:translatey(-340px);
					z-index: 350;
					transition: 1s ease-in-out;
				}
				100%{
					transform:translatey(0px);
					z-index: 350;
					transition: 1s ease-in-out;
				}
			}
			@keyframes message_animation {
				0%{
					transform:translatey(0px);
					z-index: 300;
					transition: 1s ease-in-out;
				}
				50%{
					transform:translatey(-340px);
					z-index: 300;
					transition: 1s ease-in-out;
				}
				51%{
					transform:translatey(-340px);
					z-index: 350;
					transition: 1s ease-in-out;
				}
				100%{
					transform:translatey(0px);
					z-index: 350;
					transition: 1s ease-in-out;
				}
			}

			#contact {
			    overflow: hidden;
			    height: 85vh;
			    display: flex;
			    justify-content: center;
			    align-items: center;
			}

			.message-success{
				font-size: 3rem;color: #0546a0;position: absolute;top: 20%;left: 30%;
			}

			@media only screen and (max-width: 767px) {
			    .message-success{
					font-size: 3rem;color: #0546a0;position: absolute;top: 6%;left: 5%;
				}
			}

			@media only screen and (max-width: 500px) {
				#contact .frame {
				    width: 360px;
				    height: 350px;
				    margin: 130px auto 0;
				}
				#contact .message {
				    min-height: 300px;
				    top: 30px;
				    width: 395px;
				}

				#contact .bottom {
				    width: 396px;
				    height: 214px;
				    top: 153px;
				}

				#contact .left {
				    border-left: 245px solid #337efc;
				    border-top: 155px solid transparent;
				    border-bottom: 165px solid transparent;
				}

				#contact .right {
				    border-right: 246px solid #337efc;
				    border-top: 160px solid transparent;
				    border-bottom: 160px solid transparent;
				    left: 150px;
				}

				#contact .top {
				    border-right: 204px solid transparent;
				    border-top: 156px solid #03A9F4;
				    border-left: 192px solid transparent;
				}

				#contact #button_open_envelope {
				    width: 180px;
				    height: 30px;
				    top: 290px;
				    left: 106px;
				}

				#contact #messarea,
				#contact #name, #email, #phone, #messarea, #send {
				    width: 395px;
				}

				#contact #send {
				    width: 395px;
				}
			}
	</style>
@endsection

@section('content')

		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->

			<!--************************************
					About Us End
			*************************************-->

            @if(Session::has('contact_success'))
                <strong class="message-success">{{Session('contact_success')}}</strong>
            @endif
			<!--************************************
					Quality Services Start
			*************************************-->
			<section class="tg-bglight tg-haslayout" id="contact">
				<div class="container">
					<div class="row">
						<div class = "frame">
							<div id = "button_open_envelope">
								Email me
							</div>
							<div class = "message">
								<form method="post" action="{{ route('contact.send') }}">
                                    @csrf

									<input type="text" name="name" id="name" placeholder=" Name* " required>

									<input type="text" name="subject" id="name" placeholder=" Subject* " required>
							
									<input type="email" name="email" id="email" placeholder=" Email* " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">
								
									<input type="text" name="phone" id="phone" placeholder=" Phone (optional)" autofocus> 
								
									<textarea name="message" id="messarea" placeholder=" Message* " required></textarea>
							
									<input type="text" name="address" id="address" style="display: none;">
									<input type="submit" value="Send" id="send">

								</form>
							</div>
							<div class = "bottom"></div>			
							<div class = "left"></div>
							<div class = "right"></div>
							<div class = "top"></div>
						</div>
					</div>
				</div>
			</section>

			<!--************************************
					Quality Services End
			*************************************-->

		</main>
		<!--************************************
				Main End
		*************************************-->
        
@endsection



@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.frame').click(function(){
				$('.top').addClass('open');
				$('.message').addClass('pull');
			})
		});
	</script>
@endsection