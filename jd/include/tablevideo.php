<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1.0">
	<style type="text/css">
	:root{
		--purple: #8e44ad;
	}
	*{
		margin: 0; padding: 0;
		box-sizing: border-box;
	}
	html{
		font-size: 62.5%;
	}
	.container .heading{
		font-size: 3rem;
		margin: 2rem 0;
		text-transform: capitalize;
		color: var(--purple);
		font-family: Verdana,Geneva,Tahoma,Sans-serif;
		letter-spacing: .2rm;
		text-align: center;
		text-shadow: 0 .3rm .5rm #rgb(0, 0, 0);
	}
	.video-container{
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
	}
	.video-container .video{
		height: 15rem;
		width: 25rem;
		margin: 2rem;
		box-shadow: 0.5rem 1rem rgb(0, 0, 0.5);
		overflow: hidden;
		border-radius: 1rem;
	}
	.video-container .video video{
		height: 100%;
		width: 100%;
		object-fit: cover;
		outline: none;
		border: none;
		cursor: pointer;
	}
	.video-container .video:hover{
		transition: .2s linear;
		transform: scale(1.3);
	}
	.video-container .video .active{
		position: fixed;
		top: 50% ; left: 50%;
		transform: translate(-50%, -50%);
		height: auto;
		width: 80%;
		box-shadow: 0 0 0 100vh rgb(0,0,0.7);
		z-index: 1;
	}
	.video-container .video .active:hover{
		transition: none;
		transform: translate(-50%, -50%)scale(1);
	}
</style>
</head>
<body>
	
<div class="container">
	<div class="heading">Video Gallery</div>
	<div class="video-container">
		<div class="video">
			<video src="video/1.mp4"></video>
		</div>
		<div class="video">
			<video src="video/2.mp4"></video>
		</div>
		<div class="video">
			<video src="video/3.mp4"></video>
		</div>
		<div class="video">
			<video src="video/4.mp4"></video>
		</div>
		<div class="video">
			<video src="video/5.mp4"></video>
		</div>
		<div class="video">
			<video src="video/6.mp4" ></video>
		</div>
		<div class="video">
			<video src="video/7.mp4"></video>
		</div>
		<div class="video">
			<video src="video/8.mp4"></video>
		</div>
		<div class="video">
			<video src="video/9.mp4"></video>
		</div>
		<div class="video">
			<video src="video/10.mp4"></video>
		</div>
	</div>
</div>
<script>
	var video = document.querySelectorAll('video')
	video.forEach(play => play.addEventListener('click',() =>{
play.classList.toggle('active');
if (play.paused) {
	play.play();
}else {
	play.pause();
	play.currentTime= 0;
	}
}));

</script>
</body>
</html>