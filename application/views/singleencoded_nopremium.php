	<div class="song-info">
							<h3>Etiam molestie nisl eget consequat pharetra</h3>	
	</div>


	<div class="video-grid">
							<script>
									<!--
									var VIDEO_URL = "<?php echo base_url();?>videos/spreedmovie.hevc";

									var player = null;

									window.onload = function() {
									    var video = document.getElementById("video");
									    var status = document.getElementById("status");

									    var playback = function(event) {
									        event.preventDefault();
									        if (player) {
									            player.stop();
									        }

									        player = new libde265.RawPlayer(video);
									        player.set_status_callback(function(msg, fps) {
									            switch (msg) {
									            case "loading":
									                status.innerHTML = "Loading movie...";
									                break;
									            case "initializing":
									                status.innerHTML = "Initializing...";
									                break;
									            case "playing":
									                status.innerHTML = "Playing...";
									                break;
									            case "stopped":
									                status.innerHTML = "";
									                break;
									            case "fps":
									                status.innerHTML = Number(fps).toFixed(2) + " fps";
									                break;
									            default:
									                status.innerHTML = msg;
									            }
									        });
									        player.playback(VIDEO_URL);
									    };

									    var button = document.getElementById("play");
									    if (button.addEventListener) {
									        button.addEventListener("click", playback, false);
									    } else if (button.attachEvent){
									        button.attachEvent('onclick', playback);
									    }
									};
									-->
							</script>
							  <canvas id="video" width="0" height="0"></canvas>
							  <button id="play">Play</button>
							  <span id="status"></span>
</div>
