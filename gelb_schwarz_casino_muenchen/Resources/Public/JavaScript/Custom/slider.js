var slideImg = document.getElementById("slideImg");
var images = new Array (
   "https://www.gsc-muenchen.de/typo3conf/ext/bootstrap_package/Resources/Public/Images/startseite_latein-foto.jpg",
   "https://www.gsc-muenchen.de/typo3conf/ext/bootstrap_package/Resources/Public/Images/startseite_standard-foto.jpg",
   "https://www.gsc-muenchen.de/typo3conf/ext/bootstrap_package/Resources/Public/Images/startseite_breitensport-foto.jpg",
);

var len = images.length;
var i=0;

function slider(){
  if(i>len-1){
    i=0;
  }
  slideImg.src = images[i];
  i++;
  setTimeout('slider()', 10000);
}
