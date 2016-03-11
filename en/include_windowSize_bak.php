	<script src="js/jquery-1.11.1.min.js"></script>

	<script>  

	$(document).ready(function(){ 

		var ww = $(window).width();

		

		var windowX = parseInt('<?php echo $_GET['windowX'];?>');

	

		if(windowX != $(window).width()){

			location.href = '?windowX=' + $(window).width();

			return false;

		} else {

			

		}

		

	});

    </script>  

	<script type="text/javascript">

    	function getArgs() {//抓取網址上的get值

            var args = {};

            var query = location.search.substring(1); // Get query string

            var pairs = query.split("&");

                           // Break at ampersand

             for(var i = 0; i < pairs.length; i++) {

                    var pos = pairs[i].indexOf('=');

                     // Look for "name=value"

                    if (pos == -1) continue;  // If not found, skip

                       var argname = pairs[i].substring(0,pos); // Extract the name

                       var value = pairs[i].substring(pos+1); // Extract the value

                       value = decodeURIComponent(value); // Decode it, if needed

                       args[argname] = value;  // Store as a property

                }

            return args; // Return the object          

        }  

	   

	   $('.size').text('windowX='+$(window).width());

     

        $(window).resize(function () {



			if( getArgs()['windowX'] == $(window).width()){

    

            } else {



				location.href = '?windowX=' + $(window).width();

                return false;

            }            

        });

    </script>