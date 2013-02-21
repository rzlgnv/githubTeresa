<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="index_files/css3menu1/style.css" type="text/css" />
<!-- End css3menu.com HEAD section -->

 <style type="text/css">
        #stage {
            top: 0px;
            left: 0px;
            z-index: 100;
        }
        .stage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            min-width: 300px;
            height: 359px;
            overflow: hidden;
        }
       
        
        #bird {
            background: transparent url(assets/images/bird-forward-back.png) 0 0 no-repeat;
            position: absolute;
            top: 150px;
            left: 65px;
            width: 180px;
            height: 123px;
            z-index: 2000;
            cursor: pointer;
        }
    </style>
    
    <!-- IE6 fixes are found in styles/ie6.css -->
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
    
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/jquery.spritely-0.6.js" type="text/javascript"></script>

    <script type="text/javascript">

        (function($) {
            $(document).ready(function() {
                $('#logo').click(function() {
                    document.location.href = 'http://www.spritely.net/';
                });
            
                $('#bird')
                    .sprite({
                        fps: 9, 
                        no_of_frames: 3,
                        // the following are optional: new in version 0.6...
                        start_at_frame: 2,
                        on_first_frame: function(obj) {
                            if (window.console) {
                                console.log('first frame');
                            }
                        },
                        on_last_frame: function(obj) {
                            // you could stop the sprite here with, e.g.
                            // obj.spStop();
                            if (window.console) {
                                console.log('last frame');
                            }
                        },
                        on_frame: {
                            2: function(obj) {
                                // you could change the 'state' of the
                                // sprite here with, e.g. obj.spState(2);
                                if (window.console) {
                                    console.log('frame 2');
                                }
                            }
                        }
                    })
                    .spRandom({top: 50, bottom: 200, left: 300, right: 320})
                    .isDraggable()
                    .activeOnClick()
                    .active();
                
                window.actions = {
                    fly_slowly_forwards: function() {
                        $('#bird')
                            .fps(10)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(10)
                            .spChangeDir('left');
                    },
                    fly_slowly_backwards: function() {
                        $('#bird')
                            .fps(10)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(10)
                            .spChangeDir('right');
                    },
                    fly_quickly_forwards: function() {
                        $('#bird')
                            .fps(20)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(30)
                            .spChangeDir('left');
                    },
                    fly_quickly_backwards: function() {
                        $('#bird')
                            .fps(20)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(30)
                            .spChangeDir('right');
                    },
                    fly_like_lightning_forwards: function() {
                        $('#bird')
                            .fps(25)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spSpeed(40)
                            .spChangeDir('left');
                    },
                    fly_like_lightning_backwards: function() {
                        $('#bird')
                            .fps(25)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spSpeed(40)
                            .spChangeDir('right');
                    }
                };
                
                window.page = {
                    hide_panels: function() {
                        $('.panel').hide(300);
                    },
                    show_panel: function(el_id) {
                        this.hide_panels();
                        $(el_id).show(300);
                    }
                }
                
            });
        })(jQuery);
    
    </script>

</head>

	<body>
		<article id="wrapper">
            <header>
          <h1 class="test">MACA-2800 Advance Web Page Design</h1>
        
           <nav class="sidebar">
              <ul id="css3menu1" class="topmenu">
                <li class="topfirst"><a href="home"  style="width:75px;">Home</a></li>
                <li class="topmenu"><a href="#" id="active" style="width:75px;"><span>Examples</span></a>
              <ul>
                 <li class="subfirst"><a href="examplecss">CSS</a></li>
                 <li><a href='exapmlejs'>JavaScript</a></li>
                 <li><a href="exampleanim">Animation</a></li>
              </ul></li>
            <li class="toplast"><a href="contactForm" style="width:75px;">Contact Me</a></li>
            </ul><p class="_css3m"><a href="http://css3menu.com/">CSS Submit Button Rollover Css3Menu.com</a></p>
             <!-- End css3menu.com BODY section -->
            </nav>
        </header>

            
<section>
         <script type="text/javascript" src="http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js"></script><script type="text/javascript">if (WIDGETBOX) WIDGETBOX.renderWidget('78159374-af6b-466c-a940-3b51e148b40b');</script>
<noscript>Get the <a href="http://www.widgetbox.com/widget/maukie-the-virtual-cat">Maukie - the virtual cat</a> widget and many other <a href="http://www.widgetbox.com/">great free widgets</a> at <a href="http://www.widgetbox.com">Widgetbox</a>! Not seeing a widget? (<a href="http://support.widgetbox.com/">More info</a>)</noscript>
         
     
 </section>
         <article class="writeup">
                 <h2>Widgets</h2>
                  <p><br> Move your curser around Maukie and she'll try to grab your curser.  Pet Maukie and she'll purr or touch her face and she meows. </p>
               </article> 
    <div id="container">
    <div id="stage" class="stage">
        <div id="tap" class="stage"></div>
        <div id="bg" class="stage"></div>
        
    <div id="bird"></div>
    
    <div id="mainContent">
       
        <div id="panels">
            
    
            <div id="panel3" class="panel">
                   
                <button onclick="$('#bird').fps(24);">.fps(24)</button>
                <button onclick="$('#bird').fps(12);">.fps(12)</button>
                <button onclick="$('#bird').fps(6);">.fps(6)</button>
                                <button onclick="$('#bird').fps(1);">.fps(1)</button>
                <button onclick="$('#bird').spStop();">.spStop()</button>
                <button onclick="$('#bird').spStop(true);">.spStop(true) (returns to frame 1)</button>
                <button onclick="$('#bird').spStart();">.spStart()</button>
    
                <button onclick="$('#bird').spToggle();">.spToggle()</button>
                <button onclick="$('#bird').spState(1);">.spState(1)</button>
                <button onclick="$('#bird').spState(2);">.spState(2)</button>
                <img src="assets/images/bird-forward-back.png" border="0" />
                </p>
    
            </div>
            <div id="panel4" class="panel">
                <h2>Combining actions to modify a whole scene</h2>
                <button onclick="actions.fly_slowly_forwards();">actions.fly_slowly_forwards();</button>
                <button onclick="actions.fly_quickly_forwards();">actions.fly_quickly_forwards();</button>
                <button onclick="actions.fly_like_lightning_forwards();">actions.fly_like_lightning_forwards();</button><br />
                <button onclick="actions.fly_slowly_backwards();">actions.fly_slowly_backwards();</button>
    
                <button onclick="actions.fly_quickly_backwards();">actions.fly_quickly_backwards();</button>
                <button onclick="actions.fly_like_lightning_backwards();">actions.fly_like_lightning_backwards();</button>
               </div>
        </div>
        <div id="spriteWriteup">
            <h2>Sprite</h2>
                  <p><br> Sprite image sheets are used to create animated objects from static pictures.   </p>
          </div>
    </div>
  </div>
</div>

         <div id='myanim'>
  <!--      <article class="animWriteup"> 
         <h2>CSS Animation</h2> 
       <p><br> CSS animation can be used instead of Flash. CSS animation keyframes is not supported by Explorer </p>                </p>
            </article>   -->      
    </div>   
        <article class="banner">
                <img src="assets/images/banner.png" width ='130' height='130' alt='logo' />
                </article>    