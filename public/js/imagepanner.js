/* Simple Image Panner and Zoomer v2.0

* Author: Dynamic Drive at http://www.dynamicdrive.com/

* Requires kinetic (https://github.com/davetayls/jquery.kinetic) and jquery mouse wheel (https://github.com/jquery/jquery-mousewheel)

* Visit http://www.dynamicdrive.com/ for full source code

*/



var imagepanner = (function($){

	var defaults = {zoomable:true, mousezoom:0.3, controlzoom: 0.5, maxlevel:4, imgpos:[0,0] }

	defaults.zoomcontrols = ''



	function limitnumber(num, max){

		if (num < 1)

			return 1

		else if (num > max)

			return max

		return num

	}



	function imagepanner(options){

		var thisinst = this

		if (options.wrapper.length !=1){

			//alert('Wrapper should be a single element! Existing.')

			return

		}

		this.s = $.extend({}, defaults, options)

		var $wrapper = options.wrapper.css({position:'relative', overflow:'hidden'}),

				$img = options.wrapper.find('img:eq(0)'),

				img = $img.get(0)

				imgloaded = $.Deferred()

		$img.wrap('<div style="width:100%; height:100%;position:relative;overflow:hidden" />')

		var $imgwrapper = $img.parent()

		if (img.getAttribute('width') || img.style.width > 0 || parseInt($img.css('width')) > 50){

			imgloaded.resolve()

		}

		else if (img.complete){

			imgloaded.resolve()

		}

		else{

			$img.on('load', function(){

				imgloaded.resolve()

			})

		}	

		imgloaded.done(function(){ // image.done

			$imgwrapper.kinetic({ // set up Kinetic. See https://github.com/davetayls/jquery.kinetic for options

				maxvelocity: 60

			})

			$wrapper.mousewheel(function(event){ // set up Mousewheel

	    	if (event.deltaY > 0){

					thisinst.zoom('+' + thisinst.s.mousezoom)

				}

				else{

					thisinst.zoom('-' + thisinst.s.mousezoom)

				}

				return false

			})

			$wrapper.on('dblclick', function(){

				thisinst.zoom(1)

			})

			if (thisinst.s.zoomcontrols.length>0 && thisinst.s.maxlevel > 1){ // if zoomcontrols HTML defined and image is zoomable

				$wrapper.append(thisinst.s.zoomcontrols)

				$wrapper.find('ul.zoomcontrols').on('click', function(e){

					var zoomlevel

					var targetclass = e.target.className

					if (/(in)|(out)/i.test(targetclass)){

						zoomlevel = (targetclass == 'in')? '+' : '-'

						zoomlevel += thisinst.s.controlzoom

						thisinst.zoom(zoomlevel)

					}

				})

			}



			$imgwrapper.animate({scrollLeft: thisinst.s.imgpos[0], scrollTop: thisinst.s.imgpos[1]}, 0)

	

			thisinst.refs = {$imgwrapper: $imgwrapper, $img: $img}

			thisinst.imgdata = {odimensions:[$img.width(), $img.height()], currentzoom:1}

		}) // end image.done

	}



	imagepanner.prototype = {

		zoom:function(action){

			if (!this.refs){ // image panner has initialized yet

				return

			}

			var thisinst = this

			var s = this.s

			var refs= this.refs

			var imgdata = this.imgdata

			var currentzoom = this.imgdata.currentzoom

			var zoomlevel, owidth, oheight, nwidth, nheight, nscrollX, nscrollY

			if (typeof action == 'string' && (action.charAt(0) == '+' || action.charAt(0) == '-')){

				zoomlevel = currentzoom + parseFloat(action)

			}

			else{

				zoomlevel = parseFloat(action)

			}

			zoomlevel = limitnumber(zoomlevel, s.maxlevel)

			if (!isNaN(zoomlevel)){

				owidth = imgdata.odimensions[0]

				oheight = imgdata.odimensions[1]

				nwidth = owidth * zoomlevel

				nheight = oheight * zoomlevel

				nscrollX = refs.$imgwrapper.scrollLeft() / currentzoom * zoomlevel

				nscrollY = refs.$imgwrapper.scrollTop() / currentzoom * zoomlevel

				refs.$imgwrapper.stop().animate({scrollLeft: nscrollX, scrollTop: nscrollY})

				refs.$img.stop().animate({width:nwidth, height:nheight}, function(){

					thisinst.imgdata.currentzoom = zoomlevel

				})

			}

		}

		

	}



	return imagepanner



})(jQuery);