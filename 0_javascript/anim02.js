setInterval(
(function(id,imgs) {
var cnt, len, im;
len = imgs.length;
im = [];
for (var cnt = len; cnt > 0; cnt--) {
im[cnt] = new Image();
im[cnt].src = imgs[cnt];
}
return (function() {
   document.getElementById(id).src = imgs[(++cnt)%len];
   });
})('myimg', ['img1a.png', 'img2a.png', 'img3a.png', 'img4a.png', 'img5a.png']) ,3000);



