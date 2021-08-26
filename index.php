<html>
    <head>
	
	    <title>Robot-Base-Control-Panel</title>
		
        <link rel="stylesheet" href ="Style2.CSS">
    </head>
	
	<body>
	
	    <div class=box>
		
            <h2> Control Panel </h2>
	     <form method="post" action="index.html"/>
		 <div class=buttons>
            <input type="submit" id="btn1" value="FORWARD" name="forward"/>
            <div class='buttons2'>
            <input type="submit" id="btn4" name="left" value="LEFT"/>
            <input type="submit" id="btn3" name="stop" value="STOP" class="STOP"/>
            <input type="submit" id="btn2" name="right" value="RIGHT"/>
            </div>
            <input type="submit" id="btn5"name="backward" value="BACKWARD"/>
            </div>
			
          </form>
		
		</div>
		
		<script>
  window.watsonAssistantChatOptions = {
      integrationID: "1f226bfd-14a2-40fa-88ad-fe79d549e849", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "36e946a2-e207-4050-be1b-8e959b537c01", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

	</body>
</html>