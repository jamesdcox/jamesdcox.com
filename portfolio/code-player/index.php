<html>
    
    <head>
        
        <title>Code Player</title>
        
        
        <script type = "text/javascript" src="jquery.min.js"></script>
        
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <script src="jquery-ui/jquery-ui.js"></script>
        
        
        <style>
            
            body {
                
                padding:0;
                margin:0;
                font:sans-serif;
                
            }
            
            
            #topBar-Container {
                
                height:40px;
                width:100%;
                background-color: #EEEEEE;
                
                
            }
            
            #topBar-title {
                
                float:left;
                padding-top: 9px;
                margin-left:15px;
                letter-spacing: 1px;
                font-weight: bold;
                font-size: 21px;
                
            }
            
            
            .menu-button {
                
                float:left;
                font-size: 16px;
                border:#CCCCCC 1px solid;
                height:16px;
                padding: 7 25;
                border-right:none;
                
            }
            
            #button-container {
                
                margin:0 auto;
                width:390;
                padding-top:4px;
                
            }
            
            #html {
                
                
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;
                
            }
            
            #output {
                
                border-right: #CCCCCC 1px solid;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                
            }
            
            .active {
                
                background-color: #E8F2FF;
                
            }
            
            .hightlightedColor {
                
                background-color: #E5E5E5;
                
            }
            
            textarea {
                
                resize: none;
                border-top:none;
                border-left:none;
                border-bottom: none;
                border-color: grey;
                
            }
            
            .panel {
                
                float:left;
                border-left: none;
                
            }
            
            .hidden {
                
                display:none;
            }
            
            iframe {
                
                border:none;
                
            }
            
            
            
            
        </style>
        
        
        
    </head>
    
    

    <body>
        
        <div id="topBar-Container">
            
            
            <div id="topBar-title">
                
                CodePlayer
            
            </div>
            
            
            <div id="button-container">
                
                
                <div id="html" class="menu-button active">HTML</div>    

                <div id="css" class="menu-button">CSS</div> 

                <div id="java" class="menu-button">JavaScript</div> 

                <div id="output" class="menu-button active">Output</div>
            
            
            </div>
            
            
        </div>
        
        
        <div id="textArea-container">
                
                
            <textarea id="html-panel" class="panel"><p id="paragraph">Hello World</p></textarea>
            
            <textarea id="css-panel" class="panel hidden">p{color:green;}</textarea>
            
            <textarea id="java-panel" class="panel hidden">document.getElementById("paragraph").innerHTML="Hi James!";</textarea>
            
            
            <iframe id="output-panel" class="panel">hi</iframe>
                
            
            
        </div>
        
            
        <script> 
            
            function updateOutput() {
                
                $("iframe").contents().find("html").html("<html><head><style type='text/css'>"+$("#css-panel").val() + "</style></head><body>" + $("#html-panel").val() + "</body></html>");
                
                document.getElementById("output-panel").contentWindow.eval($("#java-panel").val());
                
            }
            
            $(".menu-button").hover(function(){
                
                $(this).css('cursor','pointer');
                
                $(this).addClass ("hightlightedColor");
                
            },function() {
                
                 $(this).removeClass("hightlightedColor");
                                   
            });
            
            
            $(".menu-button").click(function(){
                
                $(this).toggleClass("active");
                
                $(this).removeClass("hightlightedColor");
                
                var panelId = $(this).attr("id") + "-panel";
                
                $("#" + panelId).toggleClass("hidden");
                
                var activePanels = 4-($('.hidden').length);
                
                $(".panel").width (($( window ).width() / activePanels) - 4);
                
                
                
            });
            
            
            $(".panel").height ($( window ).height() - $("#topBar-Container").height() - 5);
            
            $(".panel").width (($( window ).width() / 2) - 3);
            
            updateOutput();
            
            
            $("textarea").on('change keyup paste', function() {
                
                updateOutput();
            
            });
            
            
            
        </script>
        
        
                 
    </body>


</html>