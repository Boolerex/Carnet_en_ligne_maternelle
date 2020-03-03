<?php
use yii\helpers\Html;

?>
<style type="text/css">
.text {
  animation: inherit;
}
.background {
  color: hsl(368, 79%, 50%);
  animation: wheelHueColor 10s infinite;
  background-color: currentColor;
  border-radius: 2px;
}
@supports (background-blend-mode: overlay) {
  .background {
    background-image: linear-gradient(45deg, white 10%, black 80%);
    background-blend-mode: overlay;
	
  }
}
@keyframes wheelHueColor {
  from, to { color: hsl(324, 70%, 45%); }
  10%      { color: hsl(360, 65%, 45%); }
  20%      { color: hsl( 36, 80%, 45%); }
  30%      { color: hsl( 72, 75%, 35%); }
  40%      { color: hsl(108, 65%, 35%); }
  50%      { color: hsl(144, 75%, 35%); }
  60%      { color: hsl(180, 75%, 35%); }
  70%      { color: hsl(216, 60%, 45%); }
  80%      { color: hsl(252, 65%, 50%); }
  90%      { color: hsl(288, 60%, 40%); }
}


/* misc */
* { margin: 0; padding: 0; }
.background {
  min-height: 100vh;
  display: flex;
  
}
.text {
  
  padding-left:100px;
  background: rgba(25,25,0,.75);
  padding: 1em;
  
}
.choi{

}
</style>

<div style=" height:500px; width:1100px; display:center; margin-top:50px; margin-left:40px; background: black ; opacity:0.85;">



<div class="background">
  <h1 class="text"> BIENVENUE</h1>
   <div style="padding-left:500px; background:#d9e5e9;">
   <a href="http://localhost:8888/index.php?r=programme%2Findex"> <h2 class="choi"> Programme</h2> </a>
    <a href="http://localhost:8888/index.php?r=carnetdesuivi/index"> <h2 class="choi"> Carnet de suivi</h2></a>
	</div>
</div>







</div>