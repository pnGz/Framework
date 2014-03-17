<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="cs/ui-new.css">
<link rel="stylesheet" type="text/css" href="cs/font-all.css">
<link rel="stylesheet" type="text/css" href="cs/theme.css">
<title>Untitled Document</title>
</head>

<body>
  <div class="container">
    <nav>
      <a href="#">Layout</a>
    </nav>
    
    <section>
      <h2>Basic</h2>
      <div class="_chd-cl-xs-12-sm-02 img-resp row">
        <? for($i=1;$i<=6;$i++) { ?>
        <div>
          <img src="di/300x190.jpg" width="300" height="190" alt="">
          <div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          </div>
        </div>
      <? } ?>
      </div>
    </section>
    <section>
      <h2>Image Left</h2>
      <div class="_chd-cl-xs-12-sm-04 img-resp imgl-xs row">
        <? for($i=1;$i<=6;$i++) { ?>
        <div>
          <img src="di/300x190.jpg" width="300" height="190" alt="">
          <div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          </div>
        </div>
      <? } ?>
      </div>
    </section>
    <section>
      <h2>Image Right</h2>
      <div class="_chd-cl-xs-12-sm-04 img-resp imgr-xs row">
        <? for($i=1;$i<=6;$i++) { ?>
        <div>
          <img src="di/300x190.jpg" width="300" height="190" alt="">
          <div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          </div>
        </div>
      <? } ?>
      </div>
    </section>
    <section>
      <h2>Mix</h2>
      <div class="_chd-cl-xs-12-sm-04 img-resp imgl-xs imgt-sm row">
        <? for($i=1;$i<=3;$i++) { ?>
        <div>
          <img src="di/300x190.jpg" width="300" height="190" alt="">
          <div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          </div>
        </div>
        <? } ?>
      </div>
      <div class="_chd-cl-xs-12-sm-04 img-resp imgl-xs row">
		<? for($i=1;$i<=3;$i++) { ?>
        <div>
          <img src="di/300x190.jpg" width="300" height="190" alt="">
          <div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          </div>
        </div>
        <? } ?>
      </div>
    </section>
  </div>
</body>
</html>
