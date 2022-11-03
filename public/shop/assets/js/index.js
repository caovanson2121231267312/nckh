
var $btn = document.getElementById('btn');
var $nav = document.getElementById('nav');
var $spanBorders = document.querySelectorAll('.border');
var $closeMenu = document.getElementById('close-menu');


$btn.addEventListener('click', function () {
  $btn.classList.toggle('menu');
  $closeMenu.classList.toggle('hidden');
  $nav.classList.toggle('hidden');


});




function rain(){
  var c = document.getElementById("canvas-club");
var ctx = c.getContext("2d");
var w = c.width = window.innerWidth;
var h = c.height = window.innerHeight;
var clearColor = 'rgba(0, 0, 0, .1)';
var max = 30;
var drops = [];

function random(min, max) {
    return Math.random() * (max - min) + min;
}

function O() {}

O.prototype = {
  init: function() {
    this.x = random(0, w);
    this.y = 0;
    this.color = 'hsl(180, 100%, 50%)';
    this.w = 2;
    this.h = 1;
    this.vy = random(4, 5);
    this.vw = 3;
    this.vh = 1;
    this.size = 2;
    this.hit = random(h * .8, h * .9);
    this.a = 1;
    this.va = .96;
  },
  draw: function() {
    if (this.y > this.hit) {
      ctx.beginPath();
      ctx.moveTo(this.x, this.y - this.h / 2);

      ctx.bezierCurveTo(
        this.x + this.w / 2, this.y - this.h / 2,
        this.x + this.w / 2, this.y + this.h / 2,
        this.x, this.y + this.h / 2);

      ctx.bezierCurveTo(
        this.x - this.w / 2, this.y + this.h / 2,
        this.x - this.w / 2, this.y - this.h / 2,
        this.x, this.y - this.h / 2);

      ctx.strokeStyle = 'hsla(180, 100%, 50%, '+this.a+')';
      ctx.stroke();
      ctx.closePath();
      
    } else {
      ctx.fillStyle = this.color;
      ctx.fillRect(this.x, this.y, this.size, this.size * 5);
    }
    this.update();
  },
  update: function() {
    if(this.y < this.hit){
      this.y += this.vy;
    } else {
      if(this.a > .03){
        this.w += this.vw;
        this.h += this.vh;
        if(this.w > 100){
          this.a *= this.va;
          this.vw *= .98;
          this.vh *= .98;
        }
      } else {
        this.init();
      }
    }
    
  }
}

function resize(){
  w = c.width = window.innerWidth;
  h = c.height = window.innerHeight;
}

function setup(){
  for(var i = 0; i < max; i++){
    (function(j){
      setTimeout(function(){
        var o = new O();
        o.init();
        drops.push(o);
      }, j * 200)
    }(i));
  }
}


function anim() {
  ctx.fillStyle = clearColor;
  ctx.fillRect(0,0,w,h);
  for(var i in drops){
    drops[i].draw();
  }
  requestAnimationFrame(anim);
}


window.addEventListener("resize", resize);

setup();
anim();
}
//window.innerWidth
// var w = c.width = 100,
//     h = c.height = 100,
//     ctx = c.getContext( '2d' ),
    
//     opts = {
      
//       len: 20,
//       count: 50,
//       baseTime: 10,
//       addedTime: 10,
//       dieChance: .05,
//       spawnChance: 1,
//       sparkChance: .1,
//       sparkDist: 10,
//       sparkSize: 2,
      
//       color: 'hsl(hue,100%,light%)',
//       baseLight: 50,
//       addedLight: 10, // [50-10,50+10]
//       shadowToTimePropMult: 6,
//       baseLightInputMultiplier: .01,
//       addedLightInputMultiplier: .02,
      
//       cx: w / 2,
//       cy: h / 2,
//       repaintAlpha: .04,
//       hueChange: .1
//     },
    
//     tick = 0,
//     lines = [],
//     dieX = w / 2 / opts.len,
//     dieY = h / 2 / opts.len,
    
//     baseRad = Math.PI * 2 / 6;
    
// ctx.fillStyle = 'black';
// ctx.fillRect( 0, 0, w, h );

// function loop() {
  
//   window.requestAnimationFrame( loop );
  
//   ++tick;
  
//   ctx.globalCompositeOperation = 'source-over';
//   ctx.shadowBlur = 0;
//   ctx.fillStyle = 'rgba(0,0,0,alp)'.replace( 'alp', opts.repaintAlpha );
//   ctx.fillRect( 0, 0, w, h );
//   ctx.globalCompositeOperation = 'lighter';
  
//   if( lines.length < opts.count && Math.random() < opts.spawnChance )
//     lines.push( new Line );
  
//   lines.map( function( line ){ line.step(); } );
// }
// function Line(){
  
//   this.reset();
// }
// Line.prototype.reset = function(){
  
//   this.x = 0;
//   this.y = 0;
//   this.addedX = 0;
//   this.addedY = 0;
  
//   this.rad = 0;
  
//   this.lightInputMultiplier = opts.baseLightInputMultiplier + opts.addedLightInputMultiplier * Math.random();
  
//   this.color = opts.color.replace( 'hue', tick * opts.hueChange );
//   this.cumulativeTime = 0;
  
//   this.beginPhase();
// }
// Line.prototype.beginPhase = function(){
  
//   this.x += this.addedX;
//   this.y += this.addedY;
  
//   this.time = 0;
//   this.targetTime = ( opts.baseTime + opts.addedTime * Math.random() ) |0;
  
//   this.rad += baseRad * ( Math.random() < .5 ? 1 : -1 );
//   this.addedX = Math.cos( this.rad );
//   this.addedY = Math.sin( this.rad );
  
//   if( Math.random() < opts.dieChance || this.x > dieX || this.x < -dieX || this.y > dieY || this.y < -dieY )
//     this.reset();
// }
// Line.prototype.step = function(){
  
//   ++this.time;
//   ++this.cumulativeTime;
  
//   if( this.time >= this.targetTime )
//     this.beginPhase();
  
//   var prop = this.time / this.targetTime,
//       wave = Math.sin( prop * Math.PI / 2  ),
//       x = this.addedX * wave,
//       y = this.addedY * wave;
  
//   ctx.shadowBlur = prop * opts.shadowToTimePropMult;
//   ctx.fillStyle = ctx.shadowColor = this.color.replace( 'light', opts.baseLight + opts.addedLight * Math.sin( this.cumulativeTime * this.lightInputMultiplier ) );
//   ctx.fillRect( opts.cx + ( this.x + x ) * opts.len, opts.cy + ( this.y + y ) * opts.len, 2, 2 );
  
//   if( Math.random() < opts.sparkChance )
//     ctx.fillRect( opts.cx + ( this.x + x ) * opts.len + Math.random() * opts.sparkDist * ( Math.random() < .5 ? 1 : -1 ) - opts.sparkSize / 2, opts.cy + ( this.y + y ) * opts.len + Math.random() * opts.sparkDist * ( Math.random() < .5 ? 1 : -1 ) - opts.sparkSize / 2, opts.sparkSize, opts.sparkSize )
// }
// loop();

// window.addEventListener( 'resize', function(){
  
//   w = c.width = window.innerWidth;
//   h = c.height = window.innerHeight;
//   ctx.fillStyle = 'black';
//   ctx.fillRect( 0, 0, w, h );
  
//   opts.cx = w / 2;
//   opts.cy = h / 2;
  
//   dieX = w / 2 / opts.len;
//   dieY = h / 2 / opts.len;
// });