<main class="main {{ $PageVariation['home_variation'] }}">
	<!-- Hero Section -->
	@if($slider_hero_section->is_publish == 1)
	<section class="hero-section">
		@foreach ($slider as $row)
		@php $aRow = json_decode($row->desc); @endphp
		<div class="hero-screen hero-overlay" style="background-image: url({{ $row->image ? asset('public/media/'.$row->image) : '' }});">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
						<div class="hero-content">
						    <style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

body {
  background: #ffffff;
  font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
  font-weight: 300; }

#wrapper {
  padding-top: 0%;
    padding-bottom: 10%;
}

.viewport {
  -webkit-perspective: 800px;
  -moz-perspective: 800px;
  -ms-perspective: 800px;
  -o-perspective: 800px;
  perspective: 800px;
  -webkit-perspective-origin: 50% 200px;
  -moz-perspective-origin: 50% 200px;
  -ms-perspective-origin: 50% 200px;
  -o-perspective-origin: 50% 200px;
  perspective-origin: 50% 200px;
  -webkit-transform: scale(0.8, 0.8);
  -moz-transform: scale(0.8, 0.8);
  -ms-transform: scale(0.8, 0.8);
  -o-transform: scale(0.8, 0.8);
  transform: scale(0.8, 0.8);
  -webkit-box-reflect: below 170px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0%, transparent), to(rgba(250, 250, 250, 0.1))); }

.cube {
  position: relative;
  margin: 0 auto;
  height: 200px;
  width: 200px;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform: rotateX(136deg) rotateY(1122deg);
  -moz-transform: rotateX(136deg) rotateY(1122deg);
  -ms-transform: rotateX(136deg) rotateY(1122deg);
  -o-transform: rotateX(136deg) rotateY(1122deg);
  transform: rotateX(136deg) rotateY(1122deg); }

.cube > div {
  overflow: hidden;
  position: absolute;
  opacity: 0.9;
  height: 200px;
  width: 200px;
  background-image: url("https://jordizle.com/static/img/codepen/blank.png");
  -webkit-touch-callout: none;
  -moz-touch-callout: none;
  -ms-touch-callout: none;
  -o-touch-callout: none;
  touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none; }

.cube > div > div.cube-image {
  width: 200px;
  height: 200px;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  line-height: 200px;
  font-size: 80px;
  text-align: center;
  color: #1b9bd8;
  -webkit-transition: color 600ms;
  -moz-transition: color 600ms;
  -ms-transition: color 600ms;
  -o-transition: color 600ms;
  transition: color 600ms; }
  .cube > div > div.cube-image.active {
    color: red; }

.cube > div:hover {
  cursor: pointer; }

.cube > div:active {
  cursor: pointer; }

.cube > div:first-child {
  -webkit-transform: rotateX(90deg) translateZ(100px);
  -moz-transform: rotateX(90deg) translateZ(100px);
  -ms-transform: rotateX(90deg) translateZ(100px);
  -o-transform: rotateX(90deg) translateZ(100px);
  transform: rotateX(90deg) translateZ(100px);
  outline: 1px solid transparent; }

.cube > div:nth-child(2) {
  -webkit-transform: translateZ(100px);
  -moz-transform: translateZ(100px);
  -ms-transform: translateZ(100px);
  -o-transform: translateZ(100px);
  transform: translateZ(100px);
  outline: 1px solid transparent; }

.cube > div:nth-child(3) {
  -webkit-transform: rotateY(90deg) translateZ(100px);
  -moz-transform: rotateY(90deg) translateZ(100px);
  -ms-transform: rotateY(90deg) translateZ(100px);
  -o-transform: rotateY(90deg) translateZ(100px);
  transform: rotateY(90deg) translateZ(100px);
  outline: 1px solid transparent; }

.cube > div:nth-child(4) {
  -webkit-transform: rotateY(180deg) translateZ(100px);
  -moz-transform: rotateY(180deg) translateZ(100px);
  -ms-transform: rotateY(180deg) translateZ(100px);
  -o-transform: rotateY(180deg) translateZ(100px);
  transform: rotateY(180deg) translateZ(100px);
  outline: 1px solid transparent; }

.cube > div:nth-child(5) {
  -webkit-transform: rotateY(-90deg) translateZ(100px);
  -moz-transform: rotateY(-90deg) translateZ(100px);
  -ms-transform: rotateY(-90deg) translateZ(100px);
  -o-transform: rotateY(-90deg) translateZ(100px);
  transform: rotateY(-90deg) translateZ(100px);
  outline: 1px solid transparent; }

.cube > div:nth-child(6) {
  -webkit-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
  -moz-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
  -ms-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
  -o-transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
  transform: rotateX(-90deg) rotate(180deg) translateZ(100px);
  outline: 1px solid transparent; }

object {
  opacity: 0.5; }

object:hover {
  opacity: 1; }

@media (max-width: 640px) {
  .viewport {
    -webkit-transform: scale(0.6, 0.6);
    -moz-transform: scale(0.6, 0.6);
    -ms-transform: scale(0.6, 0.6);
    -o-transform: scale(0.6, 0.6);
    transform: scale(0.6, 0.6); } }
</style>

<div id="wrapper">
  <div class="viewport">
    <div class="cube">
      <div class="side">
        <div class="cube-image"><a href="#"><img src="public/media/globalview.png"></a></div>
      </div>
      <div class="side">
        <div class="cube-image"><a href="#"><img src="public/media/vjour.png"></a></div>
      </div>
      <div class="side">
        <div class="cube-image"><a href="#"></a><img src="public/media/veux.jpg"></a></div>
      </div>
      <div class="side">
        <div class="cube-image"><a href="#"></a><img src="public/media/globalview.png"></a></div>
      </div>
      <div class="side">
        <div class="cube-image"><a href="#"></a><img src="public/media/vjour.png"></a></div>
      </div>
      <div class="side">
        <div class="cube-image active"><a href="#"></a><img src="public/media/veux.jpg"></a></div>
      </div>
    </div>
  </div>
</div>

<script>
  var events = new Events();
events.add = function(obj) {
  obj.events = { };
}
events.implement = function(fn) {
  fn.prototype = Object.create(Events.prototype);
}

function Events() {
  this.events = { };
}
Events.prototype.on = function(name, fn) {
  var events = this.events[name];
  if (events == undefined) {
    this.events[name] = [ fn ];
    this.emit('event:on', fn);
  } else {
    if (events.indexOf(fn) == -1) {
      events.push(fn);
      this.emit('event:on', fn);
    }
  }
  return this;
}
Events.prototype.once = function(name, fn) {
  var events = this.events[name];
  fn.once = true;
  if (!events) {
    this.events[name] = [ fn ];
    this.emit('event:once', fn);
  } else {
    if (events.indexOf(fn) == -1) {
      events.push(fn);
      this.emit('event:once', fn);
    }
  }
  return this;
}
Events.prototype.emit = function(name, args) {
  var events = this.events[name];
  if (events) {
    var i = events.length;
    while(i--) {
      if (events[i]) {
        events[i].call(this, args);
        if (events[i].once) {
          delete events[i];
        }
      }
    }
  }
  return this;
}
Events.prototype.unbind = function(name, fn) {
  if (name) {
    var events = this.events[name];
    if (events) {
      if (fn) {
        var i = events.indexOf(fn);
        if (i != -1) {
          delete events[i];
        }
      } else {
        delete this.events[name];
      }
    }
  } else {
    delete this.events;
    this.events = { };
  }
  return this;
}

var userPrefix;

var prefix = (function () {
  var styles = window.getComputedStyle(document.documentElement, ''),
    pre = (Array.prototype.slice
      .call(styles)
      .join('') 
      .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
    )[1],
    dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
  userPrefix = {
    dom: dom,
    lowercase: pre,
    css: '-' + pre + '-',
    js: pre[0].toUpperCase() + pre.substr(1)
  };
})();

function bindEvent(element, type, handler) {
  if(element.addEventListener) {
    element.addEventListener(type, handler, false);
  } else {
    element.attachEvent('on' + type, handler);
  }
}

function Viewport(data) {
  events.add(this);

  var self = this;

  this.element = data.element;
  this.fps = data.fps;
  this.sensivity = data.sensivity;
  this.sensivityFade = data.sensivityFade;
  this.touchSensivity = data.touchSensivity;
  this.speed = data.speed;

  this.lastX = 0;
  this.lastY = 0;
  this.mouseX = 0;
  this.mouseY = 0;
  this.distanceX = 0;
  this.distanceY = 0;
  this.positionX = 1122;
  this.positionY = 136;
  this.torqueX = 0;
  this.torqueY = 0;

  this.down = false;
  this.upsideDown = false;

  this.previousPositionX = 0;
  this.previousPositionY = 0;

  this.currentSide = 0;
  this.calculatedSide = 0;


  bindEvent(document, 'mousedown', function() {
    self.down = true;
  });

  bindEvent(document, 'mouseup', function() {
    self.down = false;
  });
  
  bindEvent(document, 'keyup', function() {
    self.down = false;
  });

  bindEvent(document, 'mousemove', function(e) {
    self.mouseX = e.pageX;
    self.mouseY = e.pageY;
  });

  bindEvent(document, 'touchstart', function(e) {

    self.down = true;
    e.touches ? e = e.touches[0] : null;
    self.mouseX = e.pageX / self.touchSensivity;
    self.mouseY = e.pageY / self.touchSensivity;
    self.lastX  = self.mouseX;
    self.lastY  = self.mouseY;
  });

  bindEvent(document, 'touchmove', function(e) {
    if(e.preventDefault) { 
      e.preventDefault();
    }

    if(e.touches.length == 1) {

      e.touches ? e = e.touches[0] : null;

      self.mouseX = e.pageX / self.touchSensivity;
      self.mouseY = e.pageY / self.touchSensivity;

    }
  });

  bindEvent(document, 'touchend', function(e) {
    self.down = false;
  });  

  setInterval(this.animate.bind(this), this.fps);

}
events.implement(Viewport);
Viewport.prototype.animate = function() {

  this.distanceX = (this.mouseX - this.lastX);
  this.distanceY = (this.mouseY - this.lastY);

  this.lastX = this.mouseX;
  this.lastY = this.mouseY;

  if(this.down) {
    this.torqueX = this.torqueX * this.sensivityFade + (this.distanceX * this.speed - this.torqueX) * this.sensivity;
    this.torqueY = this.torqueY * this.sensivityFade + (this.distanceY * this.speed - this.torqueY) * this.sensivity;
  }

  if(Math.abs(this.torqueX) > 1.0 || Math.abs(this.torqueY) > 1.0) {
    if(!this.down) {
      this.torqueX *= this.sensivityFade;
      this.torqueY *= this.sensivityFade;
    }

    this.positionY -= this.torqueY;

    if(this.positionY > 360) {
      this.positionY -= 360;
    } else if(this.positionY < 0) {
      this.positionY += 360;
    }

    if(this.positionY > 90 && this.positionY < 270) {
      this.positionX -= this.torqueX;

      if(!this.upsideDown) {
        this.upsideDown = true;
        this.emit('upsideDown', { upsideDown: this.upsideDown });
      }

    } else {

      this.positionX += this.torqueX;

      if(this.upsideDown) {
        this.upsideDown = false;
        this.emit('upsideDown', { upsideDown: this.upsideDown });
      }
    }

    if(this.positionX > 360) {
      this.positionX -= 360;
    } else if(this.positionX < 0) {
      this.positionX += 360;
    }

    if(!(this.positionY >= 46 && this.positionY <= 130) && !(this.positionY >= 220 && this.positionY <= 308)) {
      if(this.upsideDown) {
        if(this.positionX >= 42 && this.positionX <= 130) {
          this.calculatedSide = 3;
        } else if(this.positionX >= 131 && this.positionX <= 223) {
          this.calculatedSide = 2;
        } else if(this.positionX >= 224 && this.positionX <= 314) {
          this.calculatedSide = 5;
        } else {
          this.calculatedSide = 4;
        }
      } else {
        if(this.positionX >= 42 && this.positionX <= 130) {
          this.calculatedSide = 5;
        } else if(this.positionX >= 131 && this.positionX <= 223) {
          this.calculatedSide = 4;
        } else if(this.positionX >= 224 && this.positionX <= 314) {
          this.calculatedSide = 3;
        } else {
          this.calculatedSide = 2;
        }
      }
    } else {
      if(this.positionY >= 46 && this.positionY <= 130) {
        this.calculatedSide = 6;
      }

      if(this.positionY >= 220 && this.positionY <= 308) {
        this.calculatedSide = 1;
      }
    }

    if(this.calculatedSide !== this.currentSide) {
      this.currentSide = this.calculatedSide;
      this.emit('sideChange');
    }

  }

  this.element.style[userPrefix.js + 'Transform'] = 'rotateX(' + this.positionY + 'deg) rotateY(' + this.positionX + 'deg)';

  if(this.positionY != this.previousPositionY || this.positionX != this.previousPositionX) {
    this.previousPositionY = this.positionY;
    this.previousPositionX = this.positionX;

    this.emit('rotate');

  }

}
var viewport = new Viewport({
  element: document.getElementsByClassName('cube')[0],
  fps: 20,
  sensivity: .1,
  sensivityFade: .93,
  speed: 2,
  touchSensivity: 1.5
});

function Cube(data) {
  var self = this;

  this.element = data.element;
  this.sides = this.element.getElementsByClassName('side');

  this.viewport = data.viewport;
  this.viewport.on('rotate', function() {
    self.rotateSides();
  });
  this.viewport.on('upsideDown', function(obj) {
    self.upsideDown(obj);
  });
  this.viewport.on('sideChange', function() {
    self.sideChange();
  });
}
Cube.prototype.rotateSides = function() {
  var viewport = this.viewport;
  if(viewport.positionY > 90 && viewport.positionY < 270) {
    this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (viewport.positionX + viewport.torqueX) + 'deg)';
    this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -(viewport.positionX + 180 + viewport.torqueX) + 'deg)';
  } else {
    this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (viewport.positionX - viewport.torqueX) + 'deg)';
    this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -(viewport.positionX + 180 - viewport.torqueX) + 'deg)';
  }
}
Cube.prototype.upsideDown = function(obj) {

  var deg = (obj.upsideDown == true) ? '180deg' : '0deg';
  var i = 5;

  while(i > 0 && --i) {
    this.sides[i].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + deg + ')';
  }

}
Cube.prototype.sideChange = function() {

  for(var i = 0; i < this.sides.length; ++i) {
    this.sides[i].getElementsByClassName('cube-image')[0].className = 'cube-image';    
  }

  this.sides[this.viewport.currentSide - 1].getElementsByClassName('cube-image')[0].className = 'cube-image active';

}

new Cube({
  viewport: viewport,
  element: document.getElementsByClassName('cube')[0]
});
</script>
							<h1>{{ $row->title }}</h1>
							@if($aRow->sub_title != '')
							<p>{{ $aRow->sub_title }}</p>
							@endif
							@if($aRow->button_text != '')
							<a href="{{ $row->url }}" class="btn theme-btn" {{ $aRow->target =='' ? '' : "target=".$aRow->target }}>{{ $aRow->button_text }}</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		
		<div class="search-card">
			<div class="container">
				<div class="search-card-inner">
					<form method="GET" action="{{ route('frontend.search') }}">
						<div class="row g-2">
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="checkin_date" class="form-label">{{ __('Check In') }}</label>
								<input name="checkin_date" id="checkin_date" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="checkout_date" class="form-label">{{ __('Check Out') }}</label>
								<input name="checkout_date" id="checkout_date" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="total_adult" class="form-label">{{ __('Adult') }}</label>
								<input name="total_adult" id="total_adult" type="number" class="form-control" value="1" min="1" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="total_child" class="form-label">{{ __('Child') }}</label>
								<input name="total_child" id="total_child" type="number" class="form-control" value="0" min="0" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
								<button type="submit" class="btn theme-btn search-btn">{{ __('Check Availability') }}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- /Hero Section/ -->

	<!-- About Section/ -->
	@if($about_us_section->is_publish == 1)
	@foreach ($about_us as $row)
	@php $aRow = json_decode($row->desc); @endphp
	<section class="section about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-5">
					@if($row->image != '')
					<div class="row">
						<div class="col-lg-12">
							<div class="about-img">
								<img src="{{ asset('public/media/'.$row->image) }}" alt="{{ $row->title }}">
							</div>
						</div>
					</div>
					@endif

					<div class="row">
						@if($aRow->image2 != '')
						<div class="col-12 col-md-6">
							<div class="about-img">
								<img src="{{ asset('public/media/'.$aRow->image2) }}" alt="{{ $row->title }}">
							</div>
						</div>
						@endif
						@if($aRow->image3 != '')
						<div class="col-12 col-md-6">
							<div class="about-img">
								<img src="{{ asset('public/media/'.$aRow->image3) }}" alt="{{ $row->title }}">
							</div>
						</div>
						@endif
					</div>
				</div>

				<div class="col-md-12 col-lg-7">
					<div class="about-card">
						<div class="about-title">
							<h5>{{ __('About Us') }}</h5>
							<h2>{{ $row->title }}</h2>
						</div>
						@if($aRow->description != '')
						<p class="mb20">{{ $aRow->description }}</p>
						@endif
						<div class="row mb40">
							@if($aRow->total_rooms != '')
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-buildings"></i>
									</div>
									<div class="content">
										<h4>{{ $aRow->total_rooms }}</h4>
										<p>{{ __('Rooms') }}</p>
									</div>
								</div>
							</div>
							@endif
							
							@if($aRow->total_customers != '')
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="content">
										<h4>{{ $aRow->total_customers }}</h4>
										<p>{{ __('Customers') }}</p>
									</div>
								</div>
							</div>
							@endif
							
							@if($aRow->total_amenities != '')
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="content">
										<h4>{{ $aRow->total_amenities }}</h4>
										<p>{{ __('Amenities') }}</p>
									</div>
								</div>
							</div>
							@endif
							
							@if($aRow->total_packages != '')
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-percent"></i>
									</div>
									<div class="content">
										<h4>{{ $aRow->total_packages }}</h4>
										<p>{{ __('Packages') }}</p>
									</div>
								</div>
							</div>
							@endif
						</div>
						
						@if($aRow->button_text != '')
						<a href="{{ $row->url }}" class="btn theme-btn" {{ $aRow->target =='' ? '' : "target=".$aRow->target }}>{{ $aRow->button_text }}</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
	@endforeach
	@endif
	<!-- /About Section/ -->

	<!-- Offer Section -->
	@if($offer_ads_section->is_publish == 1)
	<section class="section offer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h5>{{ $offer_ads_section->title }}</h5>
						@if($offer_ads_section->desc != '')
						<h2>{{ $offer_ads_section->desc }}</h2>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($OfferAds as $row)
				@php $aRow = json_decode($row->desc); @endphp
				<div class="col-lg-4">
					<div class="offer-card">
						<div class="offer-image">
							<img src="{{ asset('public/media/'.$row->image) }}" alt="{{ $row->title }}" />
						</div>
						<div class="offer-content">
							<h2>{{ $row->title }}</h2>
							@if($aRow->text_2 != '')
							<p>{{ $aRow->text_2 }}</p>
							@endif
							@if($aRow->button_text != '')
							<a href="{{ $row->url }}" class="btn theme-btn offer-btn" {{ $aRow->target =='' ? '' : "target=".$aRow->target }}>{{ $aRow->button_text }}</a>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- /Offer Section/ -->	
	
	<!-- Featured Section/ -->
	@if($featured_rooms_section->is_publish == 1)
	<section class="section featured-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5>{{ __('Choose Your Rooms') }}</h5>
						<h2>{{ $featured_rooms_section->title }}</h2>
						@if($featured_rooms_section->desc != '')
						<p>{{ $featured_rooms_section->desc }}</p>
						@endif
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($featured_rooms as $row)
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="item-card">
						<div class="item-image">
							<a href="{{ route('frontend.room', [$row->id, $row->slug]) }}">
								<img src="{{ asset('public/media/'.$row->thumbnail) }}" alt="{{ $row->title }}" />
							</a>
							@if(($row->is_discount == 1) && ($row->old_price !=''))
								@php 
									$discount = number_format((($row->old_price - $row->price)*100)/$row->old_price);
								@endphp
							<span class="item-label">{{ $discount }}% {{ __('Off') }}</span>
							@endif
						</div>
						<div class="item-content">
							<div class="item-title">
								<a href="{{ route('frontend.room', [$row->id, $row->slug]) }}">{{ str_limit($row->title) }}</a>
							</div>
							<div class="pric-card">
								@if($row->price != '')
									@if($gtext['currency_position'] == 'left')
									<div class="new-price">{{ $gtext['currency_icon'] }}{{ NumberFormat($row->price) }}</div>
									@else
									<div class="new-price">{{ NumberFormat($row->price) }}{{ $gtext['currency_icon'] }}</div>
									@endif
								@endif
								@if(($row->is_discount == 1) && ($row->old_price !=''))
									@if($gtext['currency_position'] == 'left')
									<div class="old-price">{{ $gtext['currency_icon'] }}{{ NumberFormat($row->old_price) }}</div>
									@else
									<div class="old-price">{{ NumberFormat($row->old_price) }}{{ $gtext['currency_icon'] }}</div>
									@endif
								@endif
								<div class="per-day-night">/ {{ __('Night') }}</div>
							</div>
						</div>
						<a href="{{ route('frontend.room', [$row->id, $row->slug]) }}" class="btn theme-btn book-now-btn">{{ __('Details') }}</a>
						<ul class="item-meta">
							<li>{{ __('Adult') }} {{ $row->total_adult }}</li>
							<li>{{ __('Child') }} {{ $row->total_child }}</li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- /Featured Section/ -->

	<!-- Services Section/ -->
	@if($our_services_section->is_publish == 1)
	<section class="section service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5>{{ __('Our Services') }}</h5>
						<h2>{{ $our_services_section->title }}</h2>
						@if($our_services_section->desc != '')
						<p>{{ $our_services_section->desc }}</p>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($our_services as $row)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-icon">
							<img src="{{ asset('public/media/'.$row->image) }}" alt="{{ $row->title }}" />
						</div>
						<h4>{{ $row->title }}</h4>
						<p>{{ $row->desc }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- /Services Section/ -->

	<!-- Preview Video Section-->
	@if($home_video['is_publish'] == 1)
	<section class="preview-section">
		<div class="row align-items-center justify-content-center g-0">
			<div class="col-12 col-md-12 col-lg-12 col-xl-6">
				<div class="preview-video">
					<img src="{{ asset('public/media/'.$home_video['image']) }}" alt="{{ $home_video['title'] }}">
					<div class="video-card">
						<a href="{{ $home_video['video_url'] }}" class="play-icon popup-video">
							<i class="bi bi-play-fill"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-12 col-xl-6">
				<div class="preview-content">
					<h5>{{ __('Preview') }}</h5>
					<h2>{{ $home_video['title'] }}</h2>
					@if($home_video['short_desc'] !='')
					<p>{{ $home_video['short_desc'] }}</p>
					@endif
					<a href="{{ $home_video['url'] }}" {{ $home_video['target'] =='' ? '' : "target=".$home_video['target'] }} class="btn theme-btn">{{ $home_video['button_text'] }}</a>
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- /Preview Video Section/ -->

	<!-- Testimonial Section/ -->
	@if($testimonial_section->is_publish == 1)
	<section class="section testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5>{{ __('Testimonial') }}</h5>
						<h2>{{ $testimonial_section->title }}</h2>
						@if($testimonial_section->desc != '')
						<p>{{ $testimonial_section->desc }}</p>
						@endif
					</div>
				</div>
			</div>
			<div class="row testimonial-slider">
				@foreach ($testimonial as $row)
				<div class="col-md-12">
					<div class="testimonial-card">
						<div class="client">
							<div class="img-card">
								<img src="{{ asset('public/media/'.$row->image) }}" alt="{{ $row->title }}" />
							</div>
							<div class="client-info">
								<h4>{{ $row->title }}</h4>
								<span>{{ __('Client') }}</span>
							</div>
						</div>
						<div class="quote"><i class="bi bi-quote"></i></div>
						<div class="comment">{{ $row->desc }}</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- /Testimonial Section/ -->

	<!-- Blog Section/ -->
	@if($our_blogs_section->is_publish == 1)
	<section class="section blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5>{{ __('Our Blogs') }}</h5>
						<h2>{{ $our_blogs_section->title }}</h2>
						@if($our_blogs_section->desc != '')
						<p>{{ $our_blogs_section->desc }}</p>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($blogs as $row)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="blog-card">
						<div class="blog-img">
							<a href="{{ route('frontend.article', [$row->id, $row->slug]) }}">
								<img src="{{ asset('public/media/'.$row->thumbnail) }}" alt="{{ $row->title }}" />
							</a>
						</div>
						<div class="blog-content">
							<div class="blog-meta-card">
								<div class="blog-date"><i class="bi bi-alarm"></i>{{ date('d M , Y', strtotime($row->created_at)) }}</div>
								<div class="blog-meta"><i class="bi bi-person"></i>{{ __('By') }}, {{ $row->name }}</div>
							</div>
							<div class="blog-title">
								<h4><a href="{{ route('frontend.article', [$row->id, $row->slug]) }}">{{ $row->title }}</a></h4>
							</div>
							<div class="read-more-btn">
								<a href="{{ route('frontend.article', [$row->id, $row->slug]) }}">
									{{ __('Read More') }} <i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- /Blog Section/ -->
</main>